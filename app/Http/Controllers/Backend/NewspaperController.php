<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewspaperModel;
use Image;

class NewspaperController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $newspaper = NewspaperModel::orderBy('id', 'asc')->get();
        return view('backend.setting.newspaper', compact('newspaper'));
    }

    public function AddNewspaper() {
        return view('backend.setting.add_newspaper');
    }

    public function StoreNewspaper(Request $request) {
        $date = array();
        $date['title'] = $request->title;

        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('image/newspaper/'.$image_one);
            $date['image'] = 'image/newspaper/'.$image_one;

            NewspaperModel::insert($date);

            $notification = array(
                'message' => 'Newspaper Inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('all.newspaper')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function DeleteNewspaper($id) {
        NewspaperModel::where('id', $id)->delete();

        $notification = array(
            'message' => 'Newspaper Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('all.newspaper')->with($notification);
    }

    public function ChangeStatusNewspaper($id, $status) {
        NewspaperModel::where('id', $id)->update(['status' => $status]);
    }
}
