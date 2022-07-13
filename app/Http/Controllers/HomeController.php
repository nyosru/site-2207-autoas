<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Shop_cat;
use App\Models\Shop_item;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionController;

use Nyos\Msg;
// use Illuminate\Support\Facades\Mail;

class Dops
{
    /**
     *
     * @param string $cyr_str
     * @param string $type uri - замена знаков препинания и прочих скобок на пусто и подчёркивание
     * uri2 - значкки в пустои п одчёркивание буквы в транслит
     * cifr - только цифры на выходе
     * cifr2 - только цифры, вместо запятой точка
     * cifr21 - только цифры, вместо запятой точка, округлено до целых в большую сторону
     * иначе просто транслит
     * @return string
     */
    function translit($cyr_str, $type = false)
    {

        if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
            global $status;
            $status .= '<fieldset class="status" ><legend>' . __CLASS__ . ' #' . __LINE__ . ' + ' . __FUNCTION__ . '</legend>';
        }

        if ($type == 'uri') {
            $cyr_str = strtolower($cyr_str);
            $tr = array(
                '"' => '',
                '\'' => '',
                '-' => '_',
                '(' => '',
                ')' => '',
                '|' => '',
                '.' => '_',
                ' ' => '_',
                '#' => '',
                '№' => '',
                '”' => ''
            );


            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return strtr($cyr_str, $tr);
        } elseif ($type == 'uri2') {
            $tr = [
                '"' => '',
                '\'' => '',
                '/' => '',
                ' ' => '_',
                '-' => '_',
                '[' => '',
                ']' => '',
                ',' => '_',
                '(' => '',
                ')' => '',
                '|' => '',
                '.' => '_',
                '”' => '',
                "а" => "a", "б" => "b", "в" => "v", "г" => "g",
                "д" => "d", "е" => "e", "ж" => "zh",
                "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l",
                "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
                "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
                "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "",
                "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya"
            ];
            //echo $cyr.' == ';
            //echo strtr($cyr,$tr).'<br/>';

            $c = preg_replace('/[^a-z0-9_]/', '', strtr(mb_strtolower($cyr_str, 'UTF-8'), $tr));

            return $c;
        } elseif ($type == 'cifr') {
            //echo $cyr_str.' -- ';

            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return preg_replace('/[^0-9]/', '', $cyr_str);
        } elseif ($type == 'cifr2') {
            //echo $cyr_str.' -- ';
            $e = preg_replace('/[^0-9,.]/', '', $cyr_str);

            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return str_replace(",", ".", $e);
        } elseif ($type == 'cifr21') {
            //echo $cyr_str.' -- ';
            $e = preg_replace('/[^0-9,.]/', '', $cyr_str);

            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return ceil(str_replace(",", ".", $e));
        } elseif ($type == 'uri3') {
            $tr = array(
                ' ' => '', "Ґ" => "G", "Ё" => "YO", "Є" => "E", "Ї" => "YI", "І" => "I", "і" => "i", "ґ" => "g", "ё" => "yo", "№" => "", "є" => "e",
                "ї" => "yi", "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ж" => "ZH", "З" => "Z", "И" => "I",
                "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T",
                "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "TS", "Ч" => "CH", "Ш" => "SH", "Щ" => "SCH", "Ъ" => "'", "Ы" => "YI", "Ь" => "",
                "Э" => "E", "Ю" => "YU", "Я" => "YA", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "zh",
                "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
                "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "",
                "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya"
            );

            $c = strtolower(preg_replace('/[^a-zA-Z0-9_]/', '', strtr($cyr_str, $tr)));

            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return $c;
        } else {
            $tr = array(
                ' ' => '_', "Ґ" => "G", "Ё" => "YO", "Є" => "E", "Ї" => "YI", "І" => "I", "і" => "i", "ґ" => "g", "ё" => "yo", "№" => "#", "є" => "e",
                "ї" => "yi", "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Е" => "E", "Ж" => "ZH", "З" => "Z", "И" => "I",
                "Й" => "Y", "К" => "K", "Л" => "L", "М" => "M", "Н" => "N", "О" => "O", "П" => "P", "Р" => "R", "С" => "S", "Т" => "T",
                "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "TS", "Ч" => "CH", "Ш" => "SH", "Щ" => "SCH", "Ъ" => "'", "Ы" => "YI", "Ь" => "",
                "Э" => "E", "Ю" => "YU", "Я" => "YA", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "zh",
                "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
                "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "'",
                "ы" => "yi", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya"
            );

            $c = preg_replace('/[^a-zA-Z0-9_]/', '', strtr(strtolower($cyr_str), $tr));

            if (isset($_SESSION['status1']) && $_SESSION['status1'] === true) {
                $status .= '</fieldset>';
            }

            return $c;
        }
    }
}



class HomeController extends Controller
{

    public static $nowSite = 'avtoas';
    public static $menu_shop_ar = [];


    public static $modules = [

        'cats' => [

            'name' => 'Каталоги',
            'db_table' => 'mod_020_cats',
            'type' => 'items',
            'status' => true,

            'cfg' => [

                [
                    'mod' => 'head',
                    'name' => 'название',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    'validate' => 'required',
                ],

                [
                    'mod' => 'a_id',
                    'name' => 'внутренний номер',
                    'type' => 'string',
                    // 'show_start' => true,
                    // если нет то nullable
                    'validate' => 'required',
                ],

                [
                    'mod' => 'a_parentid',
                    'name' => 'внутренний номер верхнего каталога',
                    'type' => 'string',
                    // 'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],

                // "head" => "required",
                // "link" => "nullable",
                // "sort" => "required|numeric|min:0|max:99",
                // "status" => "required"

                // [
                //     'mod' => 'img',
                //     'name' => 'банер',
                //     'type' => 'img',
                //     'show_start' => true,
                //     // путь для показа картинки .. потом её название
                //     // 'url_start' => 'https://avto-as.ru/sites/kl2009asavto/download/module_items_image/',
                //     'url_start' => 'http://lara.dev.avto-as.ru/news_image/',
                //     // 'url_end' => ''
                //     'path_save' => '/../../lara/public/news_image/'
                // ],

                // [
                //     'mod' => 'link',
                //     'name' => 'ссылка если есть',
                //     'type' => 'string',
                //     // если нет то nullable
                //     // 'validate' =>
                // ],

                [
                    'mod' => 'sort',
                    'type' => 'sort',
                    // если нет то nullable
                    'validate' => 'required|numeric|min:0|max:99'
                ],

            ]



        ],

        'items' => [
            'name' => 'Товары',
            'db_table' => 'mod_021_items',
            'type' => 'items',
            'status' => true,

            'cfg' => [
                [
                    'mod' => 'head',
                    'name' => 'название',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    'validate' => 'required',
                ],
                [
                    'mod' => 'manufacturer',
                    'name' => 'проивзодитель',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],
                [
                    'mod' => 'a_id',
                    'name' => 'нн',
                    'type' => 'string',
                    // 'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],
                [
                    'mod' => 'a_categoryid',
                    'name' => 'id in cat',
                    'type' => 'string',
                    // 'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],
            ]
        ],

        'banners' => [

            'name' => 'Банеры',
            'db_table' => 'mod_banner_up',
            'type' => 'items',


            'status' => true,



            'cfg' => [
                [
                    'mod' => 'head',
                    'name' => 'название',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    'validate' => 'required',
                    // если обязательный
                    'required' => 'da',
                ],

                // "head" => "required",
                // "link" => "nullable",
                // "sort" => "required|numeric|min:0|max:99",
                // "status" => "required"

                [
                    'mod' => 'img',
                    'name' => 'банер',
                    'type' => 'img',

                    // если обязательный
                    'required' => 'da',

                    'show_start' => true,
                    // путь для показа картинки .. потом её название
                    // 'url_start' => 'https://avto-as.ru/sites/kl2009asavto/download/module_items_image/',
                    'url_start' => 'http://lara.dev.avto-as.ru/news_image/',
                    // 'url_end' => ''
                    'path_save' => '/../../lara/public/news_image/'
                ],

                [
                    'mod' => 'link',
                    'name' => 'ссылка если есть',
                    'type' => 'string',
                    // если нет то nullable
                    // 'validate' =>
                ],

                [
                    'mod' => 'sort',
                    'type' => 'sort',

                    // если обязательный
                    'required' => 'da',

                    // если нет то nullable
                    'validate' => 'required|numeric|min:0|max:99'
                ],

            ]

        ],


        'about' => [
            'name' => 'О компании',
            // 'db_table' => 'mod_banner_up',
            'type' => 'page',
            // 'path' => '../../lara/resources/views/page/',
            // 'file' => 'about.blade.php',
        ],

        'post' => [
            'name' => 'Доставка',
            // 'db_table' => 'mod_banner_up',
            'type' => 'page',
            // 'type' => 'page_file',
            // 'path' => '../../lara/resources/views/page/',
            // 'file' => 'post.blade.php',
        ],

        'contact' => [
            'name' => 'Контакты',
            // 'db_table' => 'mod_banner_up',
            'type' => 'page',
            // 'type' => 'page_file',
            // 'path' => '../../lara/resources/views/page/',
            // 'file' => 'contact.blade.php',
        ],

        'users' => [

            'name' => 'Администраторы',
            'db_connection' => 'in',
            'db_table' => 'users',
            'type' => 'items',

            // не показывать форму добавления
            'no_add' => true,

            // 'status' => true,
            'status_user' => true,

            'access_only_admin' => true,

            'cfg' => [
                [
                    'mod' => 'name',
                    'name' => 'Имя',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],
                [
                    'mod' => 'socset',
                    'name' => 'Соцсеть',
                    'type' => 'string',
                    'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                ],
                [
                    'mod' => 'avatar',
                    'name' => 'ава',
                    'type' => 'img',
                    'url_start' => '',
                    'url_end' => '',
                    'show_start' => true,
                    // если нет то nullable
                    // 'validate' => 'required',
                    // путь для показа картинки .. потом её название
                    // 'url_start' => 'https://avto-as.ru/sites/kl2009asavto/download/module_items_image/',
                    // 'url_start' => '',
                    // 'url_end' => ''
                    // 'path_save' => '/../../lara/public/news_image/'


                ],
            ]
        ]
    ];



    /**
     * тащим каталоги магазина
     */
    public function menuShop()
    {

        if (empty(self::$menu_shop_ar)) {
            $infa = Shop_cat::Nav()->get();
            self::$menu_shop_ar = $infa->toArray();
        }

        return self::$menu_shop_ar;
    }

    public function menuTop()
    {

        $collection = collect($this->menuShop());
        //$now = $collection->firstWhere('id', $top_cat_id);
        // if (empty($now))
        //     return [];

        $filtered = $collection->where('a_parentid', '00000126');
        $e = $filtered->all();

        $return = [];

        foreach ($e as $k => $v) {

            if (strpos($v['head'], 'автомобили') !== false) {
                $sort = 1;
            } else {

                $f = $collection->where('a_parentid', $v['a_id']);
                $v['in'] = $f->count();
                if ($v['in'] > 0) {
                    $sort = 2;
                } else {
                    $sort = 3;
                }
            }

            $return[$sort][] = $v;
        }

        return array_merge($return[1], $return[2], $return[3]);
    }


    // public function menu(Request $request, $page = 'index')
    public function menu()
    {
        return [

            'company' => [
                'name' => 'О компании',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ],

            'post' => [
                'name' => 'Доставка',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ],

            'contact' => [
                'name' => 'Контакты',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ],

            'conf' => [
                'name' => 'Политика конфеденциальности',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ],

            'oferta' => [
                'name' => 'Оферта',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ],

            'vozvrat' => [
                'name' => 'Возврат',
                'title' => 'О компании',
                'uri' => 'about',
                'menu-bottom' => true
            ]

        ];
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    /**
     * Show index page application
     */
    // public function page_index()
    // {
    //     // dd('123123');
    //     return view('index');
    // }

    public function getCatsDown(string $top_cat_id, $type = 'id')
    {
        $cat = $this->menuShop();
        $return = [];
        // $return[] = 11;

        $cat_aid = '';

        // dd([ __FUNCTION__ , $top_cat_id, $type]);

        // если получаем сразу a_id
        if ($type == 'a_id') {
            $cat_aid = $top_cat_id;
        } else {
            foreach ($cat as $v) {
                if ($type == 'id' && $v['id'] == $top_cat_id) {
                    $cat_aid = $v['a_id'];
                    // dd($v);
                    break;
                }
            }
        }

        if (empty($cat_aid))
            return false;

        foreach ($cat as $v) {
            if ($v['a_parentid'] == $cat_aid) {
                $return[] = $v['id'];

                $dop_cat = $this->getCatsDown($v['id']);
                array_push($return, ...$dop_cat);

                // dd($v);
            }
        }

        return $return;
    }

    // обработка входящего post
    public function search(Request $request)
    {

        dd($request->all());

        return $return;
    }

    public function getCatsLeft(int $top_cat_id = 0)
    {

        if (empty($top_cat_id))
            return [];

        $collection = collect($this->menuShop());

        // $t = $collection->toArray();
        // dd($t);

        $now = $collection->firstWhere('id', $top_cat_id);

        if (empty($now))
            return [];

        $filtered = $collection->where('a_parentid', $now['a_id']);

        // если есть нижние каталоги, показываем их
        if ($filtered->count() > 0) {
            return $filtered->all();
        }
        // если нижних каталогов нет, то показываем того же уровня
        else {
            $filtered = $collection->where('a_parentid', $now['a_parentid']);
            return $filtered->all();
        }
    }

    public function shopShow(
        Request $request,
        $v1 = 'cat',
        $v2 = '',
        $v3 = '',
        $v4 = ''
    ) {


        // dd( [$v1 , $v2, $v3, $v4 , $request->all()] );
        // die(__LINE__);


        $in_tpl = [
            'menu' => $this->menu(),
            'menu_shop' => $this->menuShop(),
            'breadcrumbs' => $this->breadcrumbs_cat(),
            // 'page' => $page
            'menu_top' => $this->menuTop(),
        ];


        if ($v1 == 'cat') {

            // DB::enableQueryLog();
            $in_tpl['cats_down'] = $this->getCatsDown($v2);

            // dd($in_tpl['cats_down']);

            $in_tpl['cats_left'] = $this->getCatsLeft($v2);

            $in_tpl['now_cat'] = $v2;
            // dd($in_tpl['cats_down']);
            // dd($cats);

            $all_cat = $in_tpl['cats_down'];
            $all_cat[] = $in_tpl['now_cat'];

            // $items = Shop_item::ShowCat($in_tpl['cats_down'])
            // $items = Shop_item::ShowCat( $in_tpl['now_cat'] )
            $items = Shop_item::ShowCat($all_cat)
                // ->paginate(100)
                ->limit(100)
                ->get();

            // dd($items->toArray());
            // dd($items->data->toArray());

            // $lo = DB::getQueryLog();
            $in_tpl['items'] = $items->toArray();

            // dd([$lo, $in_tpl['items']]);

            return view('shop.cat', $in_tpl);
        }
        // показ товара
        elseif ($v1 == 'good') {

            $item = Shop_item::where('id', '=', $v2)
                ->get();
            $it = $item->toArray();

            // dd($it);

            $in_tpl['cats_down'] = $this->getCatsDown($it[0]['a_categoryid'], 'a_id');
            $in_tpl['now_item'] = $v2;
            // DB::enableQueryLog();
            $in_tpl['analogi'] = Shop_item::Analogi($it[0]['a_catnumber'])->get();
            // dd( [ $in_tpl['analogi'] -> toArray() , DB::getQueryLog() ] );


            // $items = Shop_item::ShowCat($in_tpl['cats_down'])
            //     // ->paginate(100)
            //     ->limit(100)
            //     ->get();

            // dd($items->toArray());
            // dd($items->data->toArray());

            // $lo = DB::getQueryLog();
            $in_tpl['item'] = $it[0];

            return view('shop.good', $in_tpl);
        }
        // показ поиска
        elseif ($v1 == 'search' && !empty($v2)) {

            $in_tpl['search'] = $v2;

            $items = Shop_item::Search($v2)
                ->get();
            // $it = $item->toArray();
            // dd($it);

            $in_tpl['items'] = $items->toArray();
            // dd([$lo, $in_tpl['items']]);

            return view('shop.cat', $in_tpl);


            // $in_tpl['cats_down'] = $this->getCatsDown($it[0]['a_categoryid'], 'a_id');
            // $in_tpl['now_item'] = $v2;
            // // DB::enableQueryLog();
            // $in_tpl['analogi'] = Shop_item::Analogi($it[0]['a_catnumber'])->get();
            // dd( [ $in_tpl['analogi'] -> toArray() , DB::getQueryLog() ] );


            // $items = Shop_item::ShowCat($in_tpl['cats_down'])
            //     // ->paginate(100)
            //     ->limit(100)
            //     ->get();

            // dd($items->toArray());
            // dd($items->data->toArray());

            // $lo = DB::getQueryLog();
            // $in_tpl['item'] = $it[0];

            return view('shop.good', $in_tpl);
        }

        // dd([$v1, $v2, $v3, $v4]);

        return view('shop.index', $in_tpl);
    }



    public function printCartItem($item, $kolvo = 0)
    {

        $cats = '';

        for ($a = 5; $a > 0; $a--) {
            $cats .= (!empty($cats) ? ' > ' : '') . $item->{'cat' . $a . '_head'};
        }

        $price = (!empty($item->a_price) && is_numeric($item->a_price)) ? $item->a_price : 0;

        $return = [
            'summa' => round(($price * $kolvo), 0)
        ];

        $return['txt'] = $cats
            . PHP_EOL .
            '>>> ' . $item->head
            . PHP_EOL .
            ($price == 0 ? 'под заказ ' . $kolvo . ' шт' :
                $price . 'р * ' . $kolvo . ' = ' . $return['summa'] . ' р');

        // dd( [ $cats , $return , $item->a_price , $item ] );

        return $return;
    }

    public function sendOrder(
        Request $request,
        SessionController $sessionController
    ) {

        // dd($request->all());
        $q = $request->all();

        // $items = $q['quantity'];
        // dd( [ $items , $q ] );

        $e = Shop_item::Cart(array_keys($q['kolvo'] ?? []))->get();
        $itogo = 0;

        $w = '';
        foreach ($e as $ii) {
            $calc = $this->printCartItem($ii, $q['kolvo'][$ii->id]);
            $itogo += $calc['summa'];
            $w .= (!empty($w) ? PHP_EOL . PHP_EOL : '') . $calc['txt'];
        }

        // translit

        // // first_name: Авто-АС
        // Msg::$admins_id[] = 1022228978;
        // // Денис Авто-СА
        // Msg::$admins_id[] = 663501687;
        // // мой ак на буке
        // Msg::$admins_id[] = 1368605419;

        Msg::sendTelegramm('новый заказ (' . $itogo . ' р)'
            . PHP_EOL . PHP_EOL
            . 'кто: ' . $q['io']
            . ' (тел ' . $q['phone'] . ') '
            . $q['city']
            . PHP_EOL
            . 'нужна помощь ? ' . $q['help']
            . PHP_EOL
            . ' адрес доставки: ' . $q['dost']
            . PHP_EOL . PHP_EOL
            . $w, null, 2);

        // Mail::to( { '1@php-cat.com' } )
        // // ->cc($moreUsers)
        // // ->bcc($evenMoreUsers)
        // ->send( nl2br('новый заказ ('.$itogo.' р)'.PHP_EOL.PHP_EOL.$w) );
        // dd([ $q , $e, $w , $itogo  ]);

        return redirect('/shop/cart')->with('warning', 'Заказ отправлен (указали телефон: ' . $q['phone'] . ') ');
        // return redirect()->route('shop.cart')->with('warning', 'Заказ отправлен (указали телефон: '.$q['phone'].') ');
        // return back()->with('warning', 'Заказ отправлен (указали телефон: '.$q['phone'].') ');


    }


    public function shopCart(
        Request $request,
        SessionController $sessionController
    ) {

        $in_tpl = [
            'menu_shop' => $this->menuShop(),
            'menu_top' => $this->menuTop(),
            'menu' => $this->menu(),
            'items' => $sessionController->getItems($request),
        ];

        // $items = $sessionController->getItems($request);

        // $e = Shop_item::whereIn('id', array_keys($in_tpl['items']))->get();
        $e = Shop_item::Cart(array_keys($in_tpl['items']))->get();
        $in_tpl['items_data'] = $e->toArray();



        if (1 == 2) {
            $in_tpl = [
                'breadcrumbs' => $this->breadcrumbs_cat(),
                // 'page' => $page
            ];


            if ($v1 == 'cat') {

                // DB::enableQueryLog();
                $in_tpl['cats_down'] = $this->getCatsDown($v2);
                $in_tpl['cats_left'] = $this->getCatsLeft($v2);
                $in_tpl['now_cat'] = $v2;
                // dd($in_tpl['cats_down']);
                // dd($cats);

                $items = Shop_item::ShowCat($in_tpl['cats_down'])
                    // ->paginate(100)
                    ->limit(100)
                    ->get();

                // dd($items->toArray());
                // dd($items->data->toArray());

                // $lo = DB::getQueryLog();
                $in_tpl['items'] = $items->toArray();

                // dd([$lo, $in_tpl['items']]);

                return view('shop.cat', $in_tpl);
            }
            // показ товара
            elseif ($v1 == 'good') {

                $item = Shop_item::where('id', '=', $v2)
                    ->get();
                $it = $item->toArray();

                // dd($it);

                $in_tpl['cats_down'] = $this->getCatsDown($it[0]['a_categoryid'], 'a_id');
                $in_tpl['now_item'] = $v2;
                // DB::enableQueryLog();
                $in_tpl['analogi'] = Shop_item::Analogi($it[0]['a_catnumber'])->get();
                // dd( [ $in_tpl['analogi'] -> toArray() , DB::getQueryLog() ] );


                // $items = Shop_item::ShowCat($in_tpl['cats_down'])
                //     // ->paginate(100)
                //     ->limit(100)
                //     ->get();

                // dd($items->toArray());
                // dd($items->data->toArray());

                // $lo = DB::getQueryLog();
                $in_tpl['item'] = $it[0];

                return view('shop.good', $in_tpl);
            }
            // показ поиска
            elseif ($v1 == 'search' && !empty($v2)) {

                $in_tpl['search'] = $v2;

                $items = Shop_item::Search($v2)
                    ->get();
                // $it = $item->toArray();
                // dd($it);

                $in_tpl['items'] = $items->toArray();
                // dd([$lo, $in_tpl['items']]);

                return view('shop.cat', $in_tpl);


                // $in_tpl['cats_down'] = $this->getCatsDown($it[0]['a_categoryid'], 'a_id');
                // $in_tpl['now_item'] = $v2;
                // // DB::enableQueryLog();
                // $in_tpl['analogi'] = Shop_item::Analogi($it[0]['a_catnumber'])->get();
                // dd( [ $in_tpl['analogi'] -> toArray() , DB::getQueryLog() ] );


                // $items = Shop_item::ShowCat($in_tpl['cats_down'])
                //     // ->paginate(100)
                //     ->limit(100)
                //     ->get();

                // dd($items->toArray());
                // dd($items->data->toArray());

                // $lo = DB::getQueryLog();
                // $in_tpl['item'] = $it[0];

                return view('shop.good', $in_tpl);
            }

            // dd([$v1, $v2, $v3, $v4]);
        }


        return view('shop.cart', $in_tpl);
    }


    /**
     * хлебные крошки каталогов
     */
    public function breadcrumbs_cat()
    {

        $ee = Route::current()->parameters();
        // dd($ee);
        $mnu = $this->menuShop();
        $b = [];



        // если товар
        if (!empty($ee['v1']) && $ee['v1'] == 'good') {

            $item = Shop_item::find($ee['v2']);
            // dd( $item->toArray() );

            if (!empty($cat_id = $item->a_categoryid)) {
                $cat_id = $item->a_categoryid;
                $type_first = 'catid';
            }
        }

        // если каталог
        if (!empty($ee['v1']) && $ee['v1'] == 'cat' && !empty($ee['v2'])) {
            $cat_id = $ee['v2'];
            $type_first = 'id';
        }


        if (!empty($cat_id)) {

            $last_id = null;

            for ($t = 1; $t <= 5; $t++) {

                if ($last_id == '00000126')
                    break;

                foreach ($mnu as $k => $v) {

                    if ($last_id == '00000126')
                        break;

                    if (!empty($last_id)) {
                        if ($v['a_id'] == $last_id) {
                            $b[$t] = $v;
                            $last_id = $v['a_parentid'];
                            break;
                            // dd($v);
                        }
                    }
                    //
                    elseif (
                        ($type_first == 'id' && $v['id'] == $cat_id) ||
                        ($type_first == 'catid' && $v['a_id'] == $cat_id)
                    ) {
                        $b[$t] = $v;
                        $last_id = $v['a_parentid'];
                        break;
                        // dd($v);
                    }
                }
            }
        }
        // dd($b);
        return $b;

        // $infa = Shop_cat::Breadcrumbs()->get();
        // return $infa->toArray();
    }

    public function pageShow(Request $request, $page = 'index')
    {
        $in_tpl = [

            'menu' => $this->menu(),
            'menu_shop' => $this->menuShop(),

            'menu_top' => $this->menuTop(),
            // 'breadcrumbs' => $this->breadcrumbs_cat(),
            'page' => $page

        ];

        // получаем страничку из бд
        if (!empty(self::$modules[$page]['type']) && self::$modules[$page]['type'] == 'page') {

            // dd( 11 , self::$modules[$page]);
            $page0 = DB::table('pages')
                ->where('site', '=', self::$nowSite)
                ->where('module', '=', $page )
                ->first();

            $in_tpl['pageHtml'] = $page0->html ?? '';
            // dd(33 , $page0 );

        } 
        //
        else {
            /**
             * если нет странички, создадим
             */
            if (!file_exists(__DIR__ . '/../../../resources/views/page/' . $page . '.blade.php')) {
                file_put_contents(__DIR__ . '/../../../resources/views/page/' . $page . '.blade.php', '<p>new page ' . $page . '</p>');
            }

            // dd( $in_tpl );

            if ($page == 'index') {

                // список товаров для слайдера
                // $in_tpl['items_start_preview'] = [];

                // $sql = 'SELECT '
                //     . ' i.head '
                //     . ' , i.id '
                //     . ' , i.manufacturer man '
                //     . ' , i.a_price price'
                //     . ' , i.a_arrayimage img '
                //     . ' FROM mod_021_items i '
                //     . ' WHERE '
                //     . ' i.a_in_stock >= 1 '
                //     . ' AND i.a_price >= 1 '
                //     . ' AND i.a_arrayimage != \'\' '
                //     . ' ORDER BY RAND() '
                //     . ' LIMIT 70 '
                //     . ' ; ';
                // $ff = $db->prepare($sql);
                // $ff->execute();


                $infa = DB::table('mod_021_items as i')
                    ->select(
                        'i.head',
                        'i.id',
                        'i.manufacturer as man',
                        'i.a_price as price',
                        'i.a_arrayimage as img'
                    )
                    ->where('i.a_in_stock', '>=', 1)
                    ->where('i.a_price', '>=', 1)
                    ->where('i.a_arrayimage', '!=', '')
                    ->limit(70)
                    ->orderByRaw('RAND()')
                    ->get();


                $in_tpl['items_start_preview'] = [
                    1 => [],
                    2 => [],
                    3 => [],
                    4 => [],
                ];

                $nnc = 1;

                // while ($res = $ff->fetch()) {
                foreach ($infa as $res) {

                    // if (file_exists(DR . '/sites/kl2009asavto/download/photo/' . $res['img'])) {

                    $in_tpl['items_start_preview'][$nnc][] = $res;
                    $nnc++;

                    if ($nnc == 5)
                        $nnc = 1;

                    // }

                }


                $banners = DB::table('mod_banner_up')
                    ->select(
                        'img',
                        'link',
                        // 'i.manufacturer as man',
                        // 'i.a_price as price',
                        // 'i.a_arrayimage as img'
                    )
                    ->where('status', '=', 'show')
                    // ->where('i.a_price', '>=', 1)
                    // ->where('i.a_arrayimage', '!=', '')
                    // ->limit(70)
                    // ->orderByRaw('RAND()')
                    ->orderBy('sort')
                    ->get();

                $in_tpl['up_banners'] = $banners;
            }
        }

        //dd( [ 111,$page ] );
        return view('page', $in_tpl);
    }
}
