<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop_item extends Model
{
    use HasFactory;
    const TABLE_NAME = 'mod_021_items';

    /**
     * @var string
     */
    protected $table = self::TABLE_NAME;

    public function scopeCart($query, $items = [])
    {

        $query->whereIn(self::TABLE_NAME . '.id', $items)
            ->addSelect(
                self::TABLE_NAME . '.*'
            );

        $query
            ->leftJoin('mod_020_cats as c1', function ($join) {
                $join
                    ->on('c1.a_id', '=', self::TABLE_NAME . '.a_categoryid');
                // if (is_array($cat)) {
                //     $join->whereIn('cat.id', $cat);
                // } else {
                //     $join->where('cat.id', '=', $cat);
                // }

                $join->where('c1.status', '=', 'show')
                    ->where('c1.a_id', '!=', '00000126');
            })
            ->addSelect(
                'c1.head as cat1_head',
                // 'c1.a_id as cat1_a_id',
                'c1.id as cat1_id'
            );

        // ->where( self::TABLE_NAME . '.a_categoryid', '=', 'cat.id')

        for ($t = 2; $t <= 5; $t++) {
            $query
                ->leftJoin('mod_020_cats as c' . $t, function ($join) use ($t) {
                    $join->on('c' . ($t) . '.a_id', '=', 'c' . ($t - 1) . '.a_parentid')
                        ->where('c' . $t . '.status', '=', 'show')
                        ->where('c' . $t . '.a_id', '!=', '00000126');
                })
                ->addSelect(
                    'c' . $t . '.head as cat' . $t . '_head',
                    // 'c' . $t . '.a_id as cat' . $t . '_a_id',
                    'c' . $t . '.id as cat' . $t . '_id'
                );
        }

        // dd($cat);

        // $query

        //     ->select(
        //         self::TABLE_NAME . '.*',
        //         // 'head',
        //         // 'a_id',
        //         // 'a_parentid',
        //         //     'mod_020_cats.*',
        //         //     // DB::raw('CASE '
        //         //     // .' WHEN COUNT(`c2`.`a_id`) > 0 THEN COUNT(`c2`.`a_id`) '
        //         //     // .' ELSE 0 '
        //         //     // .' END as in_kolvo '),
        //         //     // DB::raw(' COUNT(`c2`.`a_id`) as `in_kolvo` ')
        //     )

        //     ->where(self::TABLE_NAME . '.status', '=', 'show')

        //     // ->where('a_categotyid', '=', 'show')
        // ;

        // if (!empty($cat)) {

        //     $query
        //         ->Join('mod_020_cats as cat', function ($join) use ($cat) {
        //             $join
        //                 ->on('cat.a_id', '=', self::TABLE_NAME . '.a_categoryid');

        //             if (is_array($cat)) {
        //                 $join->whereIn('cat.id', $cat);
        //             } else {
        //                 $join->where('cat.id', '=', $cat);
        //             }

        //             $join->where('cat.status', '=', 'show');
        //         })
        //         // ->where( self::TABLE_NAME . '.a_categoryid', '=', 'cat.id')
        //     ;
        // }

        // ->groupBy(self::TABLE_NAME . '.id')
        // ->groupBy('c2.id')
        // ->orderBy(self::TABLE_NAME . '.head')
        // ;
    }

    public function scopeShowCat($query, $cat = null)
    {

        // dd($cat);

        $query

            ->select(
                self::TABLE_NAME . '.*',
                // 'head',
                // 'a_id',
                // 'a_parentid',
                //     'mod_020_cats.*',
                //     // DB::raw('CASE '
                //     // .' WHEN COUNT(`c2`.`a_id`) > 0 THEN COUNT(`c2`.`a_id`) '
                //     // .' ELSE 0 '
                //     // .' END as in_kolvo '),
                //     // DB::raw(' COUNT(`c2`.`a_id`) as `in_kolvo` ')
            )

            ->where(self::TABLE_NAME . '.status', '=', 'show')

            // ->where('a_categotyid', '=', 'show')
        ;

        if (!empty($cat)) {

            $query
                ->Join('mod_020_cats as cat', function ($join) use ($cat) {
                    $join
                        ->on('cat.a_id', '=', self::TABLE_NAME . '.a_categoryid');

                    if (is_array($cat)) {
                        $join->whereIn('cat.id', $cat);
                    } else {
                        $join->where('cat.id', '=', $cat);
                    }

                    $join->where('cat.status', '=', 'show');
                })
                // ->where( self::TABLE_NAME . '.a_categoryid', '=', 'cat.id')
            ;
        }

        // ->groupBy(self::TABLE_NAME . '.id')
        // ->groupBy('c2.id')
        // ->orderBy(self::TABLE_NAME . '.head')
        // ;
    }

    public function scopeAnalogi($query, $item_art = null)
    {
        $query
            ->addSelect(self::TABLE_NAME . '.*')
            ->Join('mod_021_items_analogs as a', function ($join) use ($item_art) {

                $join
                    ->on('a.art_analog', '=', self::TABLE_NAME . '.a_catnumber')
                    ->where('a.art_origin', '=', $item_art);

                $join->where('a.status', '=', 'show');
            });
    }


    public function scopeSearch($query, $search)
    {
        $query
            ->addSelect(self::TABLE_NAME . '.*')
            ->where(self::TABLE_NAME . '.head', 'LIKE', '%' . $search . '%')
            ->orWhere(self::TABLE_NAME . '.catnumber_search', 'LIKE', '%' . strtolower($search) . '%')
            // ->Join('mod_021_items_analogs as a', function ($join) use ($item_art) {

            //     $join
            //         ->on('a.art_analog', '=', self::TABLE_NAME . '.a_catnumber')
            //         ->where('a.art_origin', '=', $item_art);

            //     $join->where('a.status', '=', 'show');
            // })
        ;
    }
}
