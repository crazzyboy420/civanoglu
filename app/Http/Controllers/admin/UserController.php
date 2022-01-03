<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.user.user',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userValidation(){
        return [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function saveAndUpdateUser($user,$request){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
    public function store(Request $request,FlasherInterface $flasher)
    {
     $request->validate($this->userValidation());

     $user = new User();
     $this->saveAndUpdateUser($user,$request);
     $flasher->addSuccess('New User Added Successfully');
     return redirect(route('admin-user.index'));
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
       $user = User::findOrFail($id);

       return view('admin.user.edit-user',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,FlasherInterface $flasher)
    {
        $request->validate($this->userValidation());
        $user = User::findOrFail($id);
        $this->saveAndUpdateUser($user,$request);
        $flasher->addSuccess('User Updated Successfully');
        return redirect(route('admin-user.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,FlasherInterface $flasher)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $flasher->addSuccess('User deleted Successfully');
        return redirect(route('admin-user.index'));
    }
}
