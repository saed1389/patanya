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
        $ads = DB::table('ads')->orderBy('id', 'asc')->get();
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
        } else {
            return Redirect()->back();
        }
    }

    public function DeleteAds($id) {
        DB::table('ads')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Ads Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('list.add')->with($notification);
    }

    public function EditAds($id) {
        $ads = DB::table('ads')->where('id', $id)->first();
        return view('backend.ads.edit', compact('ads'));
    }

    public function UpdateAds(Request $request, $id) {
        $data = array();
        $data['link'] = $request->link;

        $oldimage = $request->oldimage;
        $image = $request->ads;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/ads/'.$image_one);
            $data['ads'] = 'image/ads/'.$image_one;

            DB::table('ads')->where('id', $id)->update($data);
            unlink($oldimage);
            $notification = array(
                'message' => 'ads Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('list.add')->with($notification);

        } else {
            $data['ads'] = $oldimage;
            DB::table('ads')->where('id', $id)->update($data);

            $notification = array(
                'message' => 'Ads Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('list.add')->with($notification);
        }
    }

    public function ChangeStatusAdsHome($id, $status) {
        DB::table('ads')->where('id', $id)->update(['status' => $status]);
    }
}
