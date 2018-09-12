@extends('layouts.default')
@section('title',$user->name)
@section('style')
<style type="text/css">
/* statuses */
  .user {
    margin-top: 5em;
    padding-top: 0;
  }
    .content {
    display: block;
    margin-left: 60px;
    word-break: break-word;
  }
    .timestamp {
    color: $gray-light;
    display: block;
    margin-left: 60px;
  }

  .gravatar {
    margin-right: 10px;
    margin-top: 5px;
  }
.statuses {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}
    button.status-delete-btn {
      position: absolute;
      right: 0;
      top: 10px;
    }
  li {
    padding: 10px 0;
    border-top: 1px solid #e8e8e8;
    position: relative;
  }
aside {
  textarea {
    height: 100px;
    margin-bottom: 5px;
  }
}

.status_form {
  margin-top: 20px;
}
</style>
@stop
@section('content')
<div class="row top">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">

        </section>
      </div>
    </div>
    <div class="col-md-12">
      @if (count($statuses) > 0)
        <ol class="statuses">
          @foreach ($statuses as $status)
            @include('statuses._status')
          @endforeach
        </ol>
        {!! $statuses->render() !!}
      @endif
    </div>
  </div>
</div>
@stop