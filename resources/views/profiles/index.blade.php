@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3 p-5">
        <img src="/assets/avatar.png" alt="" style="height: 100px" >
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username}}</h1>
            <a href="#">Add New Post</a>
        </div>
        <div class="d-flex">
            <div class="p-3"><strong>153</strong> posts</div>
            <div class="p-3"><strong>23k</strong> followers</div>
            <div class="p-3"><strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
        <div><a href="#">{{$user->profile->url}}</a></div>
    </div>
   </div>
   <div class="row pt-5">
      <div class="col-4"><img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" class="w-100"></div>
      <div class="col-4"><img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" class="w-100"></div>
      <div class="col-4"><img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" class="w-100"></div>
   </div>
</div>
@endsection
