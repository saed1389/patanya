<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class AdsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function ListAds() {
        $ads = DB::table('ads')->orderBy('id', 'desc')->get();
        return view('backend.ads.listads', compact('ads'));
    }

    public function AddAds() {
        return view('backend.ads.add_ads');
    }

    public function StoreAds(Request $request) {
        $date = array();
        $date['link'] = $request->link;
        $date['type'] = $request->type;

        $image = $request->ads;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('image/ads/'.$image_one);
            $date['ads'] = 'image/ads/'.$image_one;

            DB::table('ads')->insert($date);

            $notification = array(
                'message' => 'Ads Inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('list.add')->with($notification);
        }
    }
}
