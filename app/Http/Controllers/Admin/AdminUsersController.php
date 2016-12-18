<?php

namespace App\Http\Controllers\Admin;

use App\AdminUser;
use App\Http\Requests\AdminUserRequest;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AdminUser::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


//        $statuses = Status::lists('name', 'id')->all();
//        return view('admin.users.create', compact('statuses'));
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        AdminUser::create($input);

        return redirect('/admin/users');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = AdminUser::findOrFail($id);

//        $statuses = Status::lists('name', 'id')->all();
//        return view('admin.users.edit', compact('user', 'statuses'));

        return view('admin.users.edit', compact('user'));
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
        $user = AdminUser::findOrFail($id);

        if(trim($request->password) == ''){

            $input = $request->except('password');

        } else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }


        $user->update($input);
        return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AdminUser::findOrFail($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
