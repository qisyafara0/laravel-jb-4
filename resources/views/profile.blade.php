@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
    <div class="card">
        <div class="card-header">           
            <h1> Profil Pegguna </h1>
        </div>
        <div class="card-body">
            <img src="{{ asset('image/' .$profile['profile_picture']) }}" alt="Profile Picture" width="150">
            <h3> {{$profile[ 'name']}} </h3>
            <p> Email : {{$profile['email']}}</p>
            <p> Bio: {{$profile['bio']}}</p>
            @if(count($profile['skills']) > 0 )
            <h5> Skill: </h5>
            <ul>
                @foreach($profile['skills'] as $skill)
                <li>{{ $skill }}</li>
                @endforeach
            </ul>
            @else
            <p> Tidak ada skill yang ditampilkan </p>
            @endif
        </div>
    </div> 
@endsection