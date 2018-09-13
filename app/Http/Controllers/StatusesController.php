<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //设置为登录才可以访问
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'content' => 'required|max:150'
            ]);

        Auth::user()->statuses()->create([
                'content' => $request['content']
            ]);
        return redirect()->back();
    }
}
