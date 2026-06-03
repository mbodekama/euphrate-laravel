@extends('layouts.app')

@section('title', 'Vie Scolaire | CP Euphrate')

@section('content')
<!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Vie Scolaire">
                <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Vie Scolaire">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Vie Scolaire</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="{{ route('home') }}">Accueil</a></li>
                                    <li>Vie Scolaire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--=================  Introduction Section Start Here ================= -->
        <div class="about__area about__area_one p-relative pt---100 pb---80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__image">
                            <img src="{{ asset('assets/images/about/ab.png') }}" alt="Vie Scolaire Euphrate">
                            <img class="react__shape__ab" src="{{ asset('assets/images/about/badge.png') }}" alt="Badge">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h2 class="about__title">Une vie scolaire <br> <em>structurée et épanouissante</em></h2>
                            <p class="about__paragraph">Au Collège Privé Euphrate, la vie scolaire est au cœur de notre mission éducative.</p>
                            <p class="about__paragraph2">Notre devise : <a href="#"> Discipline – Excellence – Réussite </a></p>
                            <p>Nous assurons un encadrement rigoureux et permanent des élèves, avec une équipe de surveillants et de conseillers d'éducation dévoués. Notre objectif est de créer un environnement propice à l'apprentissage, au respect mutuel et à l'épanouissement personnel de chaque élève.</p>
                            <ul>
                                <li><a href="{{ route('about') }}" class="more-about"> En savoir plus <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
                                <li class="last-li">
                                    <em>Contactez-nous</em>
                                    <a href="mailto:cpeuphrate@gmail.com">cpeuphrate@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Introduction Section End Here ================= -->

        <!--=================  Règlement & Discipline Section Start Here ================= -->
        <div class="react_populars_topics react_populars_topics2 react_populars_topics_about pb---80">
            <div class="react__title__section react__title__section-all">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Organisation & Encadrement</h6>
                        <h2 class="react__tittle"> Règlement Intérieur & <br>Discipline Scolaire </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt---30">
                    <div class="col-md-4">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service/1.png') }}" alt="Discipline">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Discipline Stricte</a></h3>
                                <p>Respect des horaires, de l'uniforme scolaire et du règlement intérieur. Ponctualité et assiduité sont les clés de la réussite.</p>
                                <a href="#"> <i class="icon_check"></i> Tenue obligatoire</a><br>
                                <a href="#"> <i class="icon_check"></i> Ponctualité exigée</a><br>
                                <a href="#"> <i class="icon_check"></i> Respect du règlement</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service/2.png') }}" alt="Encadrement">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Encadrement Permanent</a></h3>
                                <p>Une équipe de surveillants et conseillers d'éducation assure un suivi quotidien des élèves et veille à leur bien-être.</p>
                                <a href="#"> <i class="icon_check"></i> Surveillance continue</a><br>
                                <a href="#"> <i class="icon_check"></i> Suivi personnalisé</a><br>
                                <a href="#"> <i class="icon_check"></i> Écoute et conseil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item__inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/service/3.png') }}" alt="Valeurs">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Valeurs & Citoyenneté</a></h3>
                                <p>Nous inculquons le respect, la tolérance, le sens de l'effort et les valeurs citoyennes essentielles au développement moral.</p>
                                <a href="#"> <i class="icon_check"></i> Respect mutuel</a><br>
                                <a href="#"> <i class="icon_check"></i> Sens du civisme</a><br>
                                <a href="#"> <i class="icon_check"></i> Esprit d'équipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================  Règlement Section End Here ================= -->

        <!--================= Activités Section Start Here =================-->
        <div class="react_populars_topics react_populars_topics2 pt---40 pb---80">
            <div class="react__title__section react__title__section-all">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h6>Épanouissement des élèves</h6>
                        <h2 class="react__tittle"> Activités Périscolaires <br>& Événements </h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt---30">
                    <div class="col-md-3">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/topics/icon.png') }}" alt="Sport">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Activités Sportives</a></h3>
                                <p>Football, basketball, athlétisme et compétitions inter-classes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/topics/icon2.png') }}" alt="Culture">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Clubs Culturels</a></h3>
                                <p>Théâtre, musique, arts plastiques et expression artistique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/topics/icon3.png') }}" alt="Science">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Clubs Scientifiques</a></h3>
                                <p>Mathématiques, sciences et découvertes technologiques.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/topics/icon.png') }}" alt="Événements">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title"><a href="#">Événements</a></h3>
                                <p>Cérémonies d'excellence, journées portes ouvertes et sorties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Activités Section End Here =================-->

        <!--================= Horaires Section Start Here =================-->
        <div class="about__area about2__area p-relative pb---80 pt---40">
            <div class="container about__area-width">
                <div class="row">
                    <div class="col-lg-12 text-center mb---40">
                        <h6>Organisation du temps scolaire</h6>
                        <h2 class="about__title">Horaires & Emploi du Temps</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h3 class="about__title"><em>Horaires de cours</em></h3>
                            <ul>
                                <li><i class="icon_check"></i> <strong>Lundi - Vendredi :</strong> 07h30 - 12h30 / 14h00 - 17h00</li>
                                <li><i class="icon_check"></i> <strong>Samedi :</strong> 08h00 - 12h00 (cours de soutien)</li>
                                <li><i class="icon_check"></i> <strong>Pause déjeuner :</strong> 12h30 - 14h00</li>
                                <li><i class="icon_check"></i> <strong>Études du soir :</strong> 17h00 - 19h00 (sur inscription)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <h3 class="about__title"><em>Services disponibles</em></h3>
                            <ul>
                                <li><i class="icon_check"></i> Cantine scolaire avec repas équilibrés</li>
                                <li><i class="icon_check"></i> Bibliothèque et salle de lecture</li>
                                <li><i class="icon_check"></i> Infirmerie avec personnel qualifié</li>
                                <li><i class="icon_check"></i> Transport scolaire (selon secteurs)</li>
                                <li><i class="icon_check"></i> Permanence et études surveillées</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Horaires Section End Here =================-->

        <!--=================  Communication Parents Section Start Here ================= -->
        <div class="student_satisfaction-section pt---60 pb---120">
            <div class="container">
                <div class="react__title__section-all pb---30">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6>Partenariat École-Famille</h6>
                            <h2 class="react__tittle">Communication avec <br>les Parents</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/contact/2.png') }}" alt="Carnets">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title">Carnets de liaison</h3>
                                <p>Un outil quotidien pour suivre la scolarité et les observations des enseignants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/contact/3.png') }}" alt="Réunions">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title">Réunions Parents-Profs</h3>
                                <p>Rencontres trimestrielles pour faire le bilan et définir les objectifs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item__inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets/images/contact/4.png') }}" alt="Bulletins">
                            </div>
                            <div class="react-content">
                                <h3 class="react-title">Bulletins Trimestriels</h3>
                                <p>Évaluations détaillées des performances et du comportement de l'élève.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================  Communication Section End Here ================= -->

    </div>
</div>
<!--================= Wrapper End Here =================-->

<!--================= Footer Section Start Here =================-->

</body>
</html>
@endsection

