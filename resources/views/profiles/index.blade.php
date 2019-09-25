@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" class="w-100 rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
            @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>500</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="javascript:void(0)">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-4">

        @foreach ($user->posts as $opm)
            <div class="col-4 pb-4">
            	<a href="/p/{{$opm->id}}">
                	<img src="/storage/{{ $opm->image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
        {{-- <div class="col-4">
            <img src="https://instagram.fbpn2-1.fna.fbcdn.net/vp/4aabb8e3b51a8613fae6e17b5aa45110/5E16EDB4/t51.2885-15/sh0.08/e35/s640x640/69521597_165113091207980_607902164229257430_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=1%20640w,https://instagram.fbpn2-1.fna.fbcdn.net/vp/69c19962358059764d3b17ddc22e5a04/5E17FC4B/t51.2885-15/sh0.08/e35/s750x750/69521597_165113091207980_607902164229257430_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=1%20750w,https://instagram.fbpn2-1.fna.fbcdn.net/vp/6c103913af8f500994747fe81de65663/5E3738E2/t51.2885-15/e35/s1080x1080/69521597_165113091207980_607902164229257430_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=1%201080w" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbpn2-1.fna.fbcdn.net/vp/d3e168aea81600874555314835cdce60/5E1E26C0/t51.2885-15/sh0.08/e35/s640x640/69902591_122256909141077_1715136768891900489_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=105%20640w,https://instagram.fbpn2-1.fna.fbcdn.net/vp/eaeaee81249f14f8fa893edc01f2077f/5E35F325/t51.2885-15/e35/69902591_122256909141077_1715136768891900489_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=105%20750w,https://instagram.fbpn2-1.fna.fbcdn.net/vp/eaeaee81249f14f8fa893edc01f2077f/5E35F325/t51.2885-15/e35/69902591_122256909141077_1715136768891900489_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=105%201080w" class="w-100" alt="">
        </div> --}}
    </div>
</div>
@endsection
