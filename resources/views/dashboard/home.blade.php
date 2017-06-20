@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="top-bar">
            <div class="top-bar-title">Dordrecht <img src="/images/logo.png"/></div>
            <div>
                <div class="top-bar-left">Search bar</div>
                <div class="top-bar-right">Widget / {{ auth()->user()->name }} / <a href="{{ route('auth.logout') }}">Uitloggen</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @include('includes.notifications')
        @include('includes.errors')
    </div>
@endsection