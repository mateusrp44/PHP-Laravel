@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="https://scontent-gru2-2.cdninstagram.com/vp/235c0e9d0822971c1ebb3ce4e7469e16/5E82A0D7/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=scontent-gru2-2.cdninstagram.com" class="rounded-circle"/>
    </div>
    <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
        <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>23k</strong> followers</div>
            <div class="pr-5"><strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-gru2-2.cdninstagram.com/v/t51.2885-15/e35/71878998_3374967282521159_5951849523171776240_n.jpg?_nc_ht=scontent-gru2-2.cdninstagram.com&_nc_cat=111&oh=a6610f35836c79979f5bc369d68c465e&oe=5E8204EE" class="w-100" />
        </div>
        <div class="col-4">
            <img src="https://scontent-gru2-2.cdninstagram.com/v/t51.2885-15/e35/71878998_3374967282521159_5951849523171776240_n.jpg?_nc_ht=scontent-gru2-2.cdninstagram.com&_nc_cat=111&oh=a6610f35836c79979f5bc369d68c465e&oe=5E8204EE" class="w-100" />
        </div>
        <div class="col-4">
            <img src="https://scontent-gru2-2.cdninstagram.com/v/t51.2885-15/e35/71878998_3374967282521159_5951849523171776240_n.jpg?_nc_ht=scontent-gru2-2.cdninstagram.com&_nc_cat=111&oh=a6610f35836c79979f5bc369d68c465e&oe=5E8204EE" class="w-100" />
        </div>
    </div>
</div>
@endsection
