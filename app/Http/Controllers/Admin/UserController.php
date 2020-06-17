<?php

namespace App\Http\Controllers\Admin;

use App\Model\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Spatie\Permission\Models\Role;
use Hash;

class UserController extends Controller
{
    public function loginindex(){
        return view('auth.login');

    }
    public function index(Request $request)
    {


      $data = User::join('users_groups as ug', 'users.id','=','ug.user_id')
//           ->join('tbl_employer_profile_temp as emp','users.id','=','emp.user_id')
           ->where('ug.group_id', '1')

       ->paginate(10);


        return view('backend.users.index',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
         $roles = Role::pluck('name','name')->all();
        //   dd($roles);
         return view('backend.users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
             'roles' => 'required'
        ]);

        $group = Group::where('name','=','members')->first();
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = new  User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->branch = $request->branch;
        $user->phone = $request->phone;
        $user->password =  $input['password'];



        $user->save();
        $user->groups()->attach($group);


        $user->assignRole($request->input('roles'));

        return redirect()->route('backend.users.index')
                        ->with('success','User created successfully');
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('backend.users.edit',compact('user','roles','userRole'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('backend.users.index')
                        ->with('success','User updated successfully');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('backend.users.index')
                        ->with('success','User deleted successfully');
    }
}
