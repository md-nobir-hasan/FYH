<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', "check:Setting"]);
    }

     //=============================== User Role Management =============================
    public function roleIndex()
    {
        if(!check('Role')->show){
            return back();
        }

        $n['roles'] = Role::with('permission')->get();
        return view('backend.pages.setting.role.index', $n);
    }

    public function roleCreate($id = null)
    {
        if(!check('Role')->add){
            return back();
        }

        $n['features'] = Feature::all();
        if ($id) {
            $n['role'] = Role::find($id);
        }
        return view('backend.pages.setting.role.create', $n);
    }

    public function roleStore(Request $req)
    {
        if(!check('Role')->add){
            return back();
        }
        //validation
        //   $this->validate($req, [
        //     "session_id" => "required|exists:subject_assigns,session_id",
        //     "department_id" => "required|exists:subject_assigns,department_id",
        //     "semester_id" => "required|exists:subject_assigns,semester_id",
        //     "subject_id" => "required|exists:subject_assigns,subject_id",
        //     "shift_id" => "required|exists:teacher_assigns,shift_id",
        //     "group_id" => "required|exists:teacher_assigns,group_id",
        //     "teacher_id" => "required|exists:teachers,id",
        // ], [], [
        //     "session_id" => "Session",
        //     "department_id" => "Department",
        //     "semester_id" => "Semester",
        //     "subject_id" => "Subject",
        //     "shift_id" => "Shift",
        //     "group_id" => "Group",
        //     "teacher_id" => "Teacher"
        // ]);
        $role_insert = new Role();

        if ($req->role_id) {
            $role_insert = Role::find($req->role_id);
            Permission::where('role_id',$req->role_id)->delete();
        }

        $role_insert->name = $req->role;
        $role_insert->save();

        foreach ($req->feature as $feature) {

            if (isset($feature['name'])) {

                $permission_insert = new Permission();
                $permission_insert->role_id = $role_insert->id;
                $permission_insert->feature_id = $feature['name'];

                if (isset($feature['add'])) {
                    $permission_insert->add = $feature['add'];
                }

                if (isset($feature['show'])) {
                    $permission_insert->show = $feature['show'];
                }

                if (isset($feature['edit'])) {
                    $permission_insert->edit = $feature['edit'];
                }

                if (isset($feature['delete'])) {
                    $permission_insert->delete = $feature['delete'];
                }

                $permission_insert->save();
            }
        }
        if ($req->role_id) {
            return redirect()->route('setting.role.index')->with('Role successfully Updated');
        }

        return redirect()->route('setting.role.index')->with('Role successfully created');
    }


    public function roleDestroy($id)
    {
        if(!check('Role')->delete){
            return back();
        }

        $data = Feature::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Role  deleted successfully!');
    }


    //=============================== User Management =============================
    public function userIndex()
    {
        if(!check('User Creation')->show){
            return back();
        }

        $n['users'] = User::get();
        return view('backend.pages.setting.user-creation.index', $n);
    }

    public function userCreate($id = null)
    {
        if(!check('User Creation')->add){
            return back();
        }

        $n['roles'] = Role::all();
        if ($id) {
            $n['user'] = User::find($id);
        }
        return view('backend.pages.setting.user-creation.create', $n);
    }

    public function userStore(Request $req)
    {
        if(!check('User Creation')->add){
            return back();
        }

        // dd($req->all());
        //validation
        //   $this->validate($req, [
        //     "session_id" => "required|exists:subject_assigns,session_id",
        //     "department_id" => "required|exists:subject_assigns,department_id",
        //     "semester_id" => "required|exists:subject_assigns,semester_id",
        //     "subject_id" => "required|exists:subject_assigns,subject_id",
        //     "shift_id" => "required|exists:teacher_assigns,shift_id",
        //     "group_id" => "required|exists:teacher_assigns,group_id",
        //     "teacher_id" => "required|exists:teachers,id",
        // ], [], [
        //     "session_id" => "Session",
        //     "department_id" => "Department",
        //     "semester_id" => "Semester",
        //     "subject_id" => "Subject",
        //     "shift_id" => "Shift",
        //     "group_id" => "Group",
        //     "teacher_id" => "Teacher"
        // ]);
        $insert = new User();

        if ($req->user_id) {
            $insert = User::find($req->user_id);
        }

        $insert->name = $req->name;
        $insert->email = $req->email;
        $insert->phone = $req->phone;
        $insert->address = $req->address;
        $insert->role_id = $req->role_id;
        $insert->password = Hash::make($req->password);
        $insert->save();

        if ($req->user_id) {
            return redirect()->route('setting.user.index')->with('User successfully Updated');
        }

        return redirect()->route('setting.user.index')->with('User successfully created');
    }


    public function userDestroy($id)
    {
        if(!check('User Creation')->delete){
            return back();
        }

        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'User  deleted successfully!');
    }
}
