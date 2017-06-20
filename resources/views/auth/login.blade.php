@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="row align-center content">
        <div class="card-container medium-5">
            <div class="card-header">
                <div class="card-logo"><img src="/images/logo.png"/></div>
                <h1 class="card-title">Inloggen</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('auth.login') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="medium-12 columns">
                            <label>E-mail
                                <input type="email" name="email" placeholder="">
                            </label>
                        </div>
                        <div class="medium-12 columns">
                            <label>Wachtwoord
                                <input type="password" name="password" placeholder="">
                            </label>
                        </div>
                        <div class="medium-12 columns">
                            <div class="row">
                                <div class="medium-9 columns">
                                    <label>Ingelogd blijven<label>
                                </div>
                                <div class="medium-3 columns">
                                    <div class="switch tiny radius">
                                        <input class="switch-input" id="tinySwitch" type="checkbox" name="exampleSwitch">
                                        <label class="switch-paddle" for="tinySwitch">
                                            <span class="show-for-sr">Tiny Sandwiches Enabled</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="button radius expanded">Inloggen</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer-outside">
                <p>Nog geen account? <a href="{{ route('auth.register') }}">Registreer</a></p>
            </div>
        </div>
    </div>
</div>
@endsection