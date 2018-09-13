@extends('layouts.default')

@section('title','主页')

@section('content')
  @if (Auth::check())
    <div class="row top">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
      </div>
      <aside class="col-md-4">
        <section class="user_info">
 <img src="https://pic.qqtn.com/up/2018-7/2018072918092112846.jpg"  style="height: 80px;width: 80px;" />
    {{ Auth::user()->name }}
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron top">
      <h1>Hello Laravel</h1>
      <p class="lead">
        你现在所看到的是 <a href="https://laravel-china.org/laravel-tutorial/5.1">Laravel 入门教程</a> 的项目主页。
      </p>
      <p>
        一切，将从这里开始。
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="{{ route('users.create') }}" role="button">现在注册</a>
      </p>
    </div>
  @endif
@stop