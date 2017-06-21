@extends('layouts.app')

@section('content')
   @include('includes.topbar')

    <div class="container dashboard-content">
        @include('includes.notifications')
        @include('includes.errors')

        <div class="callout primary"><strong>Let op:</strong> om informatie in de buurt te vinden dient u toestemming to geven voor locatie ophalen.</div>


        <div class="row">
            <div class="large-6 columns">
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
            <div class="large-6 columns">
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
@endsection