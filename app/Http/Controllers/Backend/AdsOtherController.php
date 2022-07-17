<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\AdsOtherModel;

class AdsOtherController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function ListAds() {
        $adsOther = AdsOtherModel::orderBy('id', 'asc')->get();
        return view('backend.adsOther.listads', compact('adsOther'));
    }

    public function AddAds() {
        return view('backend.adsOther.add_ads');
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

            AdsOtherModel::insert($date);

            $notification = array(
                'message' => 'Ads Inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('list.addOther')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function DeleteAds($id) {
        AdsOtherModel::where('id', $id)->delete();

        $notification = array(
            'message' => 'Ads Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('list.addOther')->with($notification);
    }

    public function EditAds($id) {
        $adsOther = AdsOtherModel::where('id', $id)->first();
        return view('backend.adsOther.edit', compact('adsOther'));
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

            AdsOtherModel::where('id', $id)->update($data);
            unlink($oldimage);
            $notification = array(
                'message' => 'ads Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('list.addOther')->with($notification);

        } else {
            $data['ads'] = $oldimage;
            AdsOtherModel::where('id', $id)->update($data);

            $notification = array(
                'message' => 'Ads Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('list.addOther')->with($notification);
        }
    }

    public function ChangeStatusAdsOther($id, $status) {
        AdsOtherModel::where('id', $id)->update(['status' => $status]);
    }
}
