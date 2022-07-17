<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Logout() {
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Login');
    }

    public function AccountSetting() {
        $id = Auth::user()->id;
        $editDate = User::find($id);
        return view('backend.account.profile', compact('editDate'));
    }

    public function ProfileEdit() {
        $id = Auth::user()->id;
        $editDate = User::find($id);
        return view('backend.account.profile_edit', compact('editDate'));
    }

    public function ProfileStore(Request $request) {

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->position = $request->position;
        $data->about = $request->about;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_image'),$filename);
            $data['image'] = $filename;

        }
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('account.setting')->with($notification);
    }

    public function ShowPassword() {
        return view('backend.account.show_password');
    }

    public function ChangePassword( Request $request) {
        $validatedDate = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            $notification = array(
                'message' => 'Password Change Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('login')->with($notification);
        } else {
            return Redirect()->back();
        }
    }
}
