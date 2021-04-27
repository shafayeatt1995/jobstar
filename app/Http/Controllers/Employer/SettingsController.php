<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('employer.profile.settings');
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'company_name'=>'required',
            'username'=>'required',
        ]);

        $user = User::findOrFail(Auth::id());

        $image = $request->file('image');
        if (isset($image)) {
            if ($user->image != 'public/images/user.png') {
                unlink($user->image);
            }
            $slug = str_slug($request->company_name);
            $currentdate = Carbon::now()->toDateString();
            $tempName = $slug . '-' . $currentdate . '-' . uniqid() . '.'.$image->getClientOriginalExtension();
            $path = 'public/images/user/';
            $imagename = $path.$tempName;
            $image->move($path, $imagename);
        } else {
            $imagename = $user->image;
        }

        $user->company_name = $request->company_name;
        $user->username = $request->username;
        $user->company_about = $request->company_about;
        $user->company_facebook = $request->company_facebook;
        $user->company_twitter = $request->company_twitter;
        $user->company_instagram = $request->company_instagram;
        $user->company_linkedin = $request->company_linkedin;
        $user->company_googleplus = $request->company_googleplus;
        $user->company_pinterest = $request->company_pinterest;
        $user->company_phone = $request->company_phone;
        $user->company_email = $request->company_email;
        $user->company_website = $request->company_website;
        $user->company_address = $request->company_address;
        $user->company_founded = $request->company_founded;
        $user->company_employed = $request->company_employed;
        $user->image = $imagename;
        $user->save();
        return redirect()->route('employer.setting')->with('success','Profile Successfully Updated');
    }

    public function password(Request $request)
    {
        return view('employer.profile.password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashPassword))
        {
            if (!Hash::check($request->password,$hashPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->back()->with('success','Password Successfully Updated');
            }
            else
            {
                return redirect()->back()->with('error','New Password Can not be same as Old Password');
            }
        }
        else
        {
            return redirect()->back()->with('error','Current Password not match');
        }
    }
}
