@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.min.css" />

   @include('includes.topbar')

    <div class="container dashboard-content">
        @include('includes.notifications')
        @include('includes.errors')

        <div class="callout primary"><strong>Let op:</strong> om informatie in de buurt te vinden dient u toestemming to geven voor locatie ophalen.</div>

        <div class="row grid-stack">
            <div class="large-12 columns">
                <div class="grid-stack">
                    <div class="grid-stack-item" data-gs-x="100" data-gs-y="1" data-gs-width="12" data-gs-height="5">
                        <div class="grid-stack-item-content">
                            <div class="dashboard-title">Timeline</div>

                            <!-- CARD: Melding en in de wijk -->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/np_neighbourhood.png"/></div>

                                        <div class="medium-10 columns">
                                            <div class="card-title">
                                                Tijdline <br>
                                                <sub>Deze tijdlijn laten de voorspellingen zien voor de aankomende dagen op basis van neerslag en droogte.</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    {!! $chart->render() !!} <br><br>
                                </div>
                            </div>
                            <!-- END CARD -->
                        </div>
                    </div>

                    <!-- ACUTE MELDINGEN -->
                    <div class="grid-stack-item" data-gs-x="0" data-gs-y="5" data-gs-width="6" data-gs-height="9">
                        <div class="grid-stack-item-content">
                            <div class="dashboard-title">Acute meldingen</div>

                            <!-- CARD: Melding en in de wijk -->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/np_neighbourhood.png"/></div>

                                        <div class="medium-10 columns">
                                            <div class="card-title">
                                                Meldingen in mijn wijk<br/>
                                                <sub>Er zijn op dit moment 2 meldingen in jouw wijk waarvan 1 ernstig</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="/images/demo_map_neighbourhood.png"/>
                                </div>
                            </div>
                            <!-- END CARD -->

                            <!-- CARD: Meldingen (Overstromingsgevaar)-->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/danger.png"/></div>

                                        <div class="medium-6 columns">
                                            <div class="card-title">
                                                Direct overstromingsgevaar<br/>
                                                <sub>Voorkom verdere schade. Tref nu maatregelen!</sub>
                                            </div>
                                        </div>

                                        <div class="medium-4 columns">
                                            <a href="#" class="button alert radius btn-default-padding">Wat kan ik doen?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD -->

                            <!-- CARD: Meldingen (Eventuele overstromingen)-->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/danger_yellow.png"/></div>

                                        <div class="medium-6 columns">
                                            <div class="card-title">
                                                Eventuele overstromingen<br/>
                                                <sub>Grondwater is op dit moment langzaam aan het stijgen.</sub>
                                            </div>
                                        </div>

                                        <div class="medium-4 columns">
                                            <a href="#" class="button danger radius btn-default-padding">Ontvang alerts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD -->
                        </div>
                    </div>

                    <!-- ACTUELE WEERSVERWACHTIGINGEN -->
                    <div class="grid-stack-item" data-gs-x="100" data-gs-y="5" data-gs-width="6" data-gs-height="9">
                        <div class="grid-stack-item-content">
                            <div class="dashboard-title">Actuele weersverwachtingen</div>

                            <!-- CARD: Melding en in de wijk -->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/np_cloudy.png"/></div>

                                        <div class="medium-10 columns">
                                            <div class="card-title">
                                                Neerslagintensiteit(verwachting)<br/>
                                                <sub>Tussen 12:00 en 15:00 wordt ernstige neerslag verwacht in jouw wijk.</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="/images/demo_graph_weather.png"/>
                                </div>
                            </div>
                            <!-- END CARD -->

                            <!-- CARD: Meldingen (Windstoten)-->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/wind_power.png"/></div>

                                        <div class="medium-10 columns">
                                            <div class="card-title">
                                                Krachtige windstoten<br/>
                                                <sub>Tot 80 km/u - Hoog water mogelijk.</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD -->

                            <!-- CARD: Meldingen (Neerslag)-->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/water_drops.png"/></div>

                                        <div class="medium-6 columns">
                                            <div class="card-title">
                                                Neerslag (mm)<br/>
                                                <sub>20mm neerslag (regen)</sub>
                                            </div>
                                        </div>

                                        <div class="medium-4 columns">
                                            <a href="#" class="button danger radius expanded btn-default-padding">Tips</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD -->
                        </div>
                    </div>

                    <div class="grid-stack-item" data-gs-x="100" data-gs-y="0" data-gs-width="6" data-gs-height="7">
                        <div class="grid-stack-item-content">
                            <div class="dashboard-title">Omgeving</div>

                            <!-- CARD: Melding en in de wijk -->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/np_cloudy.png"/></div>

                                        <div class="medium-10 columns">
                                            <div class="card-title">
                                                Grondwaterstand in mijn straat<br/>
                                                <sub>De grondwaterstand staat hoger dan gemiddeld</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img src="/images/demo_waterstand.png"/>
                                </div>
                            </div>
                            <!-- END CARD -->

                            <!-- CARD: Meldingen (Hoge waterstand)-->
                            <div class="card-container card-dashboard">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="medium-2 columns"><img src="/images/danger.png"/></div>

                                        <div class="medium-6 columns">
                                            <div class="card-title">
                                                Hoge grondwaterstand<br/>
                                                <sub>Tot 80 km/u - Hoog water mogelijk.</sub>
                                            </div>
                                        </div>

                                        <div class="medium-4 columns">
                                            <a href="#" class="button alert radius expanded btn-default-padding">Wat kan ik doen?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CARD -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
    <script src="https://troolee.github.io/gridstack.js/dist/gridstack.js"></script>
    <script src="https://troolee.github.io/gridstack.js/dist/gridstack.jQueryUI.js"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $('.grid-stack').gridstack();
        });
    </script>
@endsection

@section('styles')
    {!! Charts::assets() !!}
@endsection