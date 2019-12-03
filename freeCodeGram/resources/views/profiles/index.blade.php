@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="https://scontent-gru2-2.cdninstagram.com/vp/235c0e9d0822971c1ebb3ce4e7469e16/5E82A0D7/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=scontent-gru2-2.cdninstagram.com" class="rounded-circle"/>
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <div><h1>{{ $user->username }}</h1></div>
        @can('update', $user->profile)
          <a href="/p/create">Add New Post</a>
        @endcan
      </div>
      @can ('update', $user->profile)
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
      @endcan
        <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
    </div>
    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-4 pb-5">
          <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100" />
          </a>
        </div>
      @endforeach
    </div>
</div>
@endsection
