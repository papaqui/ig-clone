@extends('layouts.app')

@section('content')
<div class="container-sm">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-dfw5-1.xx.fbcdn.net/v/t1.18169-9/12439144_1738400546393339_7527358456954625324_n.png?_nc_cat=105&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeEYyjHEYT9rrrDntOYEY8YZCHuDV2-rkLcIe4NXb6uQt3xRh4qL_IKnI1cTifQ1MVI&_nc_ohc=qdKM7Roop7IAX_0t9J_&_nc_ht=scontent-dfw5-1.xx&oh=e859f8eb2c23178f0899b0332da6c8c9&oe=60DFE83E" class="rounded-circle" style="height:125px;" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div> 
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
