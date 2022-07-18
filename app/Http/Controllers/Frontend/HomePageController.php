<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewspaperModel;
use App\Models\SpecialCategoryModel;
use App\Models\User;

class HomePageController extends Controller
{
    public function Index() {
        $adsHome = DB::table('ads')->get();
        $newspapers = NewspaperModel::where('status', 1)->limit(6)->get();
        $users = User::where('type', 0)->get();
        $sCategory = SpecialCategoryModel::get();
        $slider = DB::table('posts')->where('first_section_thumbnail', 1)->orderBy('id', 'desc')->limit(20)->get();
        $firstCategory = DB::table('categories')->first();
        $firstCategoryPost = DB::table('posts')->where('category_id', 1)->orderBy('id', 'desc')->limit(6)->get();
        $firstCategoryPostA = DB::table('posts')->where('category_id', '4')->skip(1)->orderBy('id', 'desc')->limit(2)->get();
        $firstCategoryPostT = DB::table('posts')->where('category_id', '4')->first();
        $scCategorySingle = DB::table('posts')->where('category_id', '5')->first();
        $scCategoryM = DB::table('posts')->where('category_id', '5')->skip(1)->orderBy('id', 'desc')->limit(2)->get();
        return view('main.home', compact('adsHome', 'newspapers', 'users', 'sCategory', 'slider', 'firstCategory', 'firstCategoryPost', 'firstCategoryPostA', 'firstCategoryPostT', 'scCategorySingle', 'scCategoryM'));
    }

}
