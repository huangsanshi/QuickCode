@extends('layouts.default')
@section('title', '所有用户')
@section('style')
<style type="text/css">
 .users {
  list-style: none;
  margin: 0;
  padding-left: 0;
  li {
    overflow: auto;
    padding: 10px 0;
    border-bottom: 1px solid $gray-lighter;
  }
}
</style>
@stop
@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>所有用户</h1>
  <ul class="users">
    @foreach ($users as $user)
      <li>
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
        <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
      </li>
    @endforeach
  </ul>
</div>
@stop