<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StaffController extends Controller
{
    function __construct()
    {

        $this->middleware('auth');
        $this->middleware('permission:manage staff', ['only' => ['create', 'store', 'show', 'edit'. 'destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $a_roles = Role::where('name','!=', 'Level 4')->get();
        $roles = Role::where('name','!=', 'Level 4')->where('name','!=', 'Level 1')->get();
        $admins = User::role($a_roles)->get();
        //dd($admins);

        return view('backend.staff.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        catch (\Exception $e) {

            DB::rollBack();

            return back()->with('failure', 'Email already exists');
        }

        try {
            $user->profile()->create([
                'phone_number' => $request->phone_number,
                'status_id' => 7,
                'address' => '',
                'avatar' => ''
            ]);
        } catch (\Exception $e) {

            DB::rollBack();
            return back()->with('failure', 'Phone number already exists');
        }

        $user->assignRole($request->role);

        DB::commit();

        return back()->with('success', 'Staff added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $roles = Role::where('name','!=', 'Level 4')->where('name','!=', 'Level 1')->get();
        //
        return view('backend.staff.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($request->type == 'profile') {
            # code...
            $this->validate($request, [
                'name' => 'string',
                'phone_number'  => 'string|max:225',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $value = $this->updateProfile($request, $id);

            if ($value) {
                # code...
                return redirect()->route('admin.staff.index')->with('success', 'Profile updated successfully');
            }
        }

        if ($request->type == 'password') {
            # code...
            $this->validate($request, [
                'old_pass' => 'required',
                'password' => 'required|confirmed',
            ]);

            $value = $this->updatePassword($request, $id);

            if ($value) {
                # code...
                return redirect()->route('admin.staff.index')->with('success', 'Password updated successfully');
            }
        }

        if ($request->type == 'level') {


            $value = $this->updateRole($request, $id);

            if ($value) {
                # code...
                return redirect()->route('admin.staff.index')->with('success', 'Level updated successfully');
            }

        }

        return back()->with('failure', 'Oppsy!! Something went wrong');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        // $roles = $role->getRoleNames();
        $user->SyncPermissions([]);

        //$role = Role::findOrFail($id);
        $user->delete();

        //activity()->by(auth()->user()->id)->log("Deleted ". $role->name." role ");

        return back()->with('success', 'User deleted successfully!');
    }

    public function updateProfile(Request $request, $id)
    {


       // dd($request->toArray());
        $user = User::find($id);

        $avatar = null;

        if(isset($request->avatar)) {

            if ($request->file('avatar')->isValid()) {
                //
                $avatar = $this->upload($request->avatar);
            }
        }

        $user->update([
            'name' => $request->name,
        ]);

        $user->profile()->update([
            'phone_number' => $request->phone_number,
            'avatar' =>isset($avatar) ? $avatar : $user->profile->avatar
        ]);

        //dd($user->toArray());
        return  true;
        //dd($user->toArray());
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);


        if (!Hash::check($request->old_pass, $user->password)){
            return back()->with('failure', 'Old password does not match your previous password');
        }

        //update user's password
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return true;
    }

    public function updateRole(Request $request, $id) {

        $user = User::find($id);

        $user->removeRole($user->getRoleNames()->first());

        $user->assignRole($request->role);

        return true;
    }


    public function upload($file){

        //$extension = $request->avatar->extension();
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('public/avatars', $file_name);

        return $path;

    }

}
