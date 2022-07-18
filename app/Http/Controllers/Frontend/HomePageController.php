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
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $adsHome = DB::table('ads')->get();
        $newspapers = NewspaperModel::where('status', 1)->limit(6)->get();
        $users = User::where('type', 0)->get();
        $sCategory = SpecialCategoryModel::get();
        return view('main.home', compact('adsHome', 'newspapers', 'users', 'sCategory'));
    }

}
