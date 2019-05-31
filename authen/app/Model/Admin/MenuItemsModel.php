<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuItemsModel extends Model
{
    public $table="menu_items";
    public static function getTypeMenuItem(){
        $type=array();
        $type['1']='Shop Category';
        $type['2']='Shop product';
        $type['3']='Shop Category';
        $type['4']='Content product';
        $type['5']='Content page';
        $type['6']='Content post';
        $type['7']='Content tag';
        return $type;
    }
}
