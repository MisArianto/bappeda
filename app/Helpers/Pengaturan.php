<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Pengaturan {
    public static function setting() {
        $pengaturan = json_decode(DB::table('pengaturans')->get()[0]->name);
        return (isset($pengaturan) ? $pengaturan : '');
    }

    public static function getNameCategorySlug($slug)
    {
    	$model = DB::table('categories')->where('slug', $slug)->first();

        return (isset($model) ? $model : '');
    }

    public static function getNameTagSlug($slug)
    {
    	$model = DB::table('tags')->where('slug', $slug)->first();

        return (isset($model) ? $model : '');
    }

    public static function getLevel($level)
    {
        $model = DB::table('levels')->where('nama_level', $level)->first();

        return (isset($model) ? $model : '');
    }

}
