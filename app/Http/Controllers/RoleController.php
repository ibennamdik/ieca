<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    function __construct()
    {

        $this->middleware('auth');
        $this->middleware('permission:manage roles and permissions', ['only' => ['create', 'store', 'show', 'edit'. 'destroy', 'givePermission', 'revokePermission']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $level = Role::findByName('Level 1');
        $permissions = Permission::all();
        //dd($permissions->toArray());
        $roles = Role::where('name','!=', 'Level 1')->where('name','!=', 'Level 4')->get();
        $admins = User::role($roles)->get();

        return view('backend.roles.index', compact('admins', 'permissions', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::all();
        return view('backend.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //
        Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
        ])->validate();

        //dd($request->permission);

        $role = Role::create([
            'name' => $request->name
        ]);
        //$role->syncPermissions($request->permission);

        //activity()->by(auth()->user()->id)->log("Created ". $role->name." to roles ");

        return back()->with('success', 'Role created successfully');
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
        return view('roles.show');
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
        return back();
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        //
        return back();

        Validator::make($request->all(), [
            // 'name' => 'required',
            'permission' => 'required'

        ])->validate();

        $user = User::find($id);

        // $role = Role::findOrFail($id);
        // $role->name = $request->name;
        $user->givePermissionTo($request->permission);

        //activity()->by(auth()->user()->id)->log("Updated ". $role->name." role ");

        return back()->with('success', 'Role updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        //
        $role = Role::find($id);
        // $roles = $role->getRoleNames();
        $role->SyncPermissions([]);

        //$role = Role::findOrFail($id);
        $role->delete();

        //activity()->by(auth()->user()->id)->log("Deleted ". $role->name." role ");

        return back()->with('success', 'Role deleted successfully!');
    }

    public function givePermission(Request $request) {



        Validator::make($request->all(), [
            // 'name' => 'required',
            'permission' => 'required'

        ])->validate();
        $role = Role::find($request->role_id);


        $permission = Permission::find($request->permission)->name;
        //dd();
        if ($role->hasPermissionTo($permission)) {
            return back()->with('success', 'Level already has this permission');
        }

        // $role = Role::findOrFail($id);
        // $role->name = $request->name;
        $role->givePermissionTo($request->permission);

        //activity()->by(auth()->user()->id)->log("Updated ". $rmyole->name." role ");

        return back()->with('success', 'Permission updated successfully!');
    }

    public function revokePermission(Request $request) {

        Validator::make($request->all(), [
            // 'name' => 'required',
            'permission' => 'required'

        ])->validate();

        $role = Role::find($request->role_id);

        // $role = Role::findOrFail($id);
        // $role->name = $request->name;
        $role->revokePermissionTo($request->permission);

        //activity()->by(auth()->user()->id)->log("Updated ". $role->name." role ");

        return back()->with('success', 'Permission revoked successfully!');
    }

}
