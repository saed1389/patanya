<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function Index() {
        $ads = DB::table('ads')->first();
        return view('main.home', compact('ads'));
    }
}
