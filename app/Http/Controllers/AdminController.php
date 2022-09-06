<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function index()
    {

        return view('dashboards.admins.index');
    }

    function profile()
    {
        return view('dashboards.admins.profile');
    }
    function settings()
    {
        return view('dashboards.admins.settings');
    }

    function updateInfo(Request $request)
    {

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'role' => 'required',
        ]);
        $query = User::find(Auth::user()->id);
        $query->name = $request->name;
        $query->email = $request->email;
        $query->role = $request->role;

        /*  $filePath = $request->file('picture');
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
        $filePath->move('img', $fileName);
        $query->picture = $fileName; */
        $query->save();
        return view('dashboards.admins.profile')->with('success', 'Your profile info has been update successfuly.');
    }



    function changePassword(Request $request)
    {
        //Validate form
        $validator = Validator::make($request->all(), [
            'oldpassword' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
            'oldpassword.required' => 'Enter your current password',
            'oldpassword.min' => 'Old password must have atleast 8 characters',
            'oldpassword.max' => 'Old password must not be greater than 30 characters',
            'newpassword.required' => 'Enter new password',
            'newpassword.min' => 'New password must have atleast 8 characters',
            'newpassword.max' => 'New password must not be greater than 30 characters',
            'cnewpassword.required' => 'ReEnter your new password',
            'cnewpassword.same' => 'New password and Confirm new password must match'
        ]);

        if ($validator) {
            $password = User::find(Auth::user()->id);
            $password->password = Hash::make($request->newpassword);
            $password->save();
            return view('dashboards.admins.profile')->with(['success', 'Your password has been changed successfully']);
        }
    }

    public function userList(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('dashboards.admins.user.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('dashboards.admins.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('dashboards.admins.user.edit', compact('user'));
    }


    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $filePath = $request->file('picture');
        /* dd($filePath); */
        $fileName = time() . '.' . $filePath->getClientOriginalExtension();
        $filePath->move('img', $fileName);
        $user->picture = $fileName;

        $user->save();

        return redirect()->route('admin.userList')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.userList')
            ->with('success', 'User deleted successfully');
    }
}
