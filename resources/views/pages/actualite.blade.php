@extends('layouts.app')

@section('title', 'Actualités | CP Euphrate')

@section('content')
<div class="react-wrapper">
    <div class="react-wrapper-inner">

        <!--================= Breadcrumbs Section =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Événements Euphrate">
                <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Événements Euphrate">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Événements du Collège Privé Euphrate</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ route('home') }}">Accueil</a></li>
                                    <li>Événements</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>

        <!--================= Event Section =================-->
        <div class="react-upcoming__event react-upcoming__event_list blog__area pt-90 pb-120">
            <div class="container">  
                <div class="row">

                    <!--================= Events =================-->
                    <div class="col-lg-8">

                        <div class="row align-items-center mb-50">
                            <div class="col-md-6">
                                <div class="result-count">
                                    6 événements à venir
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- 1 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/1.jpg') }}" alt="Portes Ouvertes">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">10 Avril 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Journée Portes Ouvertes</a>
                                        </h3>
                                        <div class="event_location">📍 Grand-Lahou</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/2.jpg') }}" alt="Orientation">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">14 Février 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Conférence d’Orientation</a>
                                        </h3>
                                        <div class="event_location">📍 Salle Polyvalente</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/3.jpg') }}" alt="Semaine Culturelle">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">26 Mars 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Semaine Culturelle & Artistique</a>
                                        </h3>
                                        <div class="event_location">📍 Collège Euphrate</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/4.jpg') }}" alt="Concours Math">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">19 Avril 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Concours Interne de Mathématiques</a>
                                        </h3>
                                        <div class="event_location">📍 Grand-Lahou</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 5 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/5.jpg') }}" alt="Forum Parents">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">13 Août 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Forum Parents – Équipe Pédagogique</a>
                                        </h3>
                                        <div class="event_location">📍 Collège Euphrate</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 6 -->
                            <div class="col-lg-4">
                                <div class="event__card">
                                    <div class="case-img">
                                        <img src="{{ asset('assets/images/course-filter/6.jpg') }}" alt="Cérémonie Excellence">
                                    </div>
                                    <div class="event__card--content">
                                        <div class="event__card--date">15 Janvier 2026</div>
                                        <h3 class="event__card--title">
                                            <a href="#">Cérémonie des Meilleurs Élèves</a>
                                        </h3>
                                        <div class="event_location">📍 Grand-Lahou</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--================= Sidebar =================-->
                    <div class="col-lg-4">
                        <div class="react-sidebar ml----30">

                            <div class="widget back-post blog-form">
                                <h3 class="widget-title">Rechercher un événement</h3>
                                <form>
                @csrf
                                    <input type="text" placeholder="Mot clé...">
                                </form>
                            </div>

                            <div class="widget back-post">
                                <h3 class="widget-title">Événements à la Une</h3>
                                <ul class="related-courses">
                                    <li>
                                        <div class="titles">
                                            <h4>Journée Portes Ouvertes</h4>
                                            <span>10 Avril 2026</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="titles">
                                            <h4>Semaine Culturelle</h4>
                                            <span>26 Mars 2026</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="titles">
                                            <h4>Cérémonie d’Excellence</h4>
                                            <span>15 Janvier 2026</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

