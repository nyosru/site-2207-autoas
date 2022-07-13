<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class Shop_cat extends Model
{
    use HasFactory;


    const TABLE_NAME = 'mod_020_cats';

    /**
     * @var string
     */
    protected $table = self::TABLE_NAME;

//     public function scopeBreadcrumbs($query)
//     {

//         $ee = Route::current()->parameters();

//         if (!empty($ee['v1']) && $ee['v1'] == 'cat' && !empty($ee['v2'])) {
// //            dd($ee);
//         $query
//             ->where( self::TABLE_NAME.'.id', '=', $ee['v2'])
//             ->addSelect(
//                 self::TABLE_NAME.'.id as id1',
//                 self::TABLE_NAME.'.head as head1'
//             )
//             ->leftJoin('mod_020_cats as c2', function ($join) {
//                 $join
//                     ->on('c2.a_id', '=', self::TABLE_NAME . '.a_parentid')
//                     ->where('c2.a_id', '!=', '00000126');
//             })
//             ->addSelect(
//                 'c2.id as id2',
//                 'c2.head as head2'
//             )
//             ->leftJoin('mod_020_cats as c3', function ($join) {
//                 $join
//                     ->on('c3.a_id', '=', 'c2.a_parentid')
//                     ->where('c3.a_id', '!=', '00000126');
//             })
//             ->addSelect(
//                 'c3.id as id3',
//                 'c3.head as head3'
//             )
//             ->leftJoin('mod_020_cats as c4', function ($join) {
//                 $join
//                     ->on('c4.a_id', '=', 'c3.a_parentid')
//                     ->where('c4.a_id', '!=', '00000126');
//             })
//             ->addSelect(
//                 'c4.id as id4',
//                 // 'c4.a_id as a_id4',
//                 'c4.head as head4'
//             )
//             ->leftJoin('mod_020_cats as c5', function ($join) {
//                 $join
//                     ->on('c5.a_id', '=', 'c4.a_parentid')
//                     ->where('c5.a_id', '!=', '00000126');
//             })
//             ->addSelect(
//                 'c5.id as id5',
//                 'c5.head as head5'
//             )
//             ;
//         }
//     }

    public function scopeNav($query)
    {

        $query
            ->select(
                'id',
                'head',
                'a_id',
                'a_parentid',
                //     'mod_020_cats.*',
                //     // DB::raw('CASE '
                //     // .' WHEN COUNT(`c2`.`a_id`) > 0 THEN COUNT(`c2`.`a_id`) '
                //     // .' ELSE 0 '
                //     // .' END as in_kolvo '),
                //     // DB::raw(' COUNT(`c2`.`a_id`) as `in_kolvo` ')
            )
            ->where('status', '=', 'show')
            // ->leftJoin('mod_020_cats as c2', function ($join) {
            //     $join
            //         ->on('c2.a_id', '=', self::TABLE_NAME . '.a_parentid');
            // })
            // ->groupBy(self::TABLE_NAME . '.id')
            // ->groupBy('c2.id')
            ->orderBy(self::TABLE_NAME . '.head');
    }
}
