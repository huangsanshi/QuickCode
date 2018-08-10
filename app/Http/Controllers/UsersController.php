<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        //黑名单--允许未登录用户访问
        $this->middleware('auth',[
                'except' => ['show','create','store','index']
            ]);
        //白名单--只允许未登录用户访问
        $this->middleware('guest',[
                'only' => ['create']
            ]);
    }

    //用户列表
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index',compact('users'));
    }

    //注册
    public function create()
    {
        return view('users.create');
    }
    //显示
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    //处理注册数据
    public function store(Request $request)
    {
        $this->validate($request,[
                'name' => 'required|max:50',
                'email' => 'required|email|unique:users|max:255',
                'password' => 'required|confirmed|min:6',
                //confirmed匹配两次密码是否一致
            ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        Auth::login($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }

    //编辑页面
    public function edit(User $user)
    {
        //检查权限
        $this->authorize('update',$user);
        return view('users.edit', compact('user'));
    }

    //编辑更新
    public function update(User $user, Request $request)
    {
        $this->validate($request,[
                'name' => 'required|max:50',
                'password' => 'nullable|confirmed|min:6',
            ]);
        //检查权限
        $this->authorize('update',$user);
        $data = [];
        $data['name'] = $request->name;
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        session()->flash('success','个人资料更新成功!');
        return redirect()->route('users.show',$user->id);
    }
}
