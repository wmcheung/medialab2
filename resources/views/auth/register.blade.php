@extends('layouts.auth')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="row align-center content">
        <div class="card-container medium-4">
            <div class="card-header">
                <div class="card-logo"><img src="/images/logo.png"/></div>
                <h1 class="card-title">Registreren</h1>
            </div>
            <div class="card-body">
                @include('includes.errors')
                @include('includes.notifications')

                <form action="{{ route('auth.register') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="medium-12 columns">
                            <label>Naam
                                <input type="text" name="name" placeholder="">
                            </label>
                        </div>
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
                                    <label>Melding ontvangen</label>
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

                            <p class="small-disclaimer">Door op "registreren" te klikken, ga je akkoord met de <a href="#">algemene voorwaarden</a>.</p>

                            <button type="submit" class="button radius expanded">Registreren</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer-outside">
                <p>Heb je al een account? <a href="{{ route('auth.login') }}">Log In</a></p>
            </div>
        </div>
    </div>
</div>
@endsection