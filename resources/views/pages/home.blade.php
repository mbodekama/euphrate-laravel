@extends('layouts.app')

@section('title', 'Accueil | CP Euphrate')

@section('content')
<!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                
				<!--================= Slider Section Start Here =================-->
				<div class="react-slider-part">
                    <div class="home-sliders home2 owl-carousel">

                        <!-- Slide 1 -->
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{ asset('assets/images/slider/banner-cpe-1.jpg') }}" alt="Collège Privé Euphrate">
                                <img class="mobile" src="{{ asset('assets/images/slider/banner-cpe-1.jpg') }}" alt="Collège Privé Euphrate">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                    <span class="slider-pretitle">
                        Bienvenue au Collège Privé Euphrate – Grand-Lahou
                    </span>

                                        <h2 class="slider-title">
                                            Discipline – Excellence –<br>
                                            Réussite
                                        </h2>

                                        <p>
                                            Un cadre éducatif structuré qui forme des élèves responsables,
                                            compétents et prêts à relever les défis de demain.
                                        </p>

                                        <div class="slider-btn">
                                            <a href="inscriptions.html" class="react-btn-border">
                                                Inscriptions 2026–2027
                                            </a>

                                            <a href="{{ route('contact') }}" class="react-btn-border" style="margin-left:15px;">
                                                Nous contacter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{ asset('assets/images/slider/banner-cpe-2.jpg') }}" alt="Éducation de qualité">
                                <img class="mobile" src="{{ asset('assets/images/slider/banner-cpe-2.jpg') }}" alt="Éducation de qualité">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                    <span class="slider-pretitle">
                        Un encadrement rigoureux pour un avenir brillant
                    </span>

                                        <h2 class="slider-title">
                                            Un enseignement de qualité<br>
                                            pour préparer l’excellence
                                        </h2>

                                        <p>
                                            Des enseignants qualifiés, un suivi pédagogique constant
                                            et des résultats académiques remarquables.
                                        </p>

                                        <div class="slider-btn">
                                            <a href="{{ route('about') }}" class="react-btn-border">
                                                Découvrir le collège
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{ asset('assets/images/slider/banner-cpe-3.jpg') }}" alt="Excellence académique">
                                <img class="mobile" src="{{ asset('assets/images/slider/banner-cpe-3.jpg') }}" alt="Excellence académique">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                    <span class="slider-pretitle">
                        Des résultats qui font notre fierté
                    </span>

                                        <h2 class="slider-title">
                                            Un fort taux de réussite<br>
                                            aux examens officiels
                                        </h2>

                                        <p>
                                            Nos élèves brillent au BEPC et au Baccalauréat grâce
                                            à une préparation méthodique et un accompagnement personnalisé.
                                        </p>

                                        <div class="slider-btn">
                                            <a href="resultats.html" class="react-btn-border">
                                                Voir nos résultats
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{ asset('assets/images/slider/banner-cpe-4.jpg') }}" alt="Vie scolaire dynamique">
                                <img class="mobile" src="{{ asset('assets/images/slider/banner-cpe-4.jpg') }}" alt="Vie scolaire dynamique">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                    <span class="slider-pretitle">
                        Une formation complète de l’élève
                    </span>

                                        <h2 class="slider-title">
                                            Éducation – Valeurs –<br>
                                            Leadership
                                        </h2>

                                        <p>
                                            Au-delà des cours, nous développons le sens des responsabilités,
                                            la discipline et l’esprit de leadership.
                                        </p>

                                        <div class="slider-btn">
                                            <a href="vie-scolaire.html" class="react-btn-border">
                                                Découvrir la vie scolaire
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
				</div>
				<!--================= Slider Section End Here =================-->

				<!--=================  Nos Atouts Section Start Here ================= -->
				<div class="react_popular_topics pt---100 pb---70">
				    <div class="container"> 
				        <div class="react__title__section text-left">
				            <h2 class="react__tittle">Nos Atouts</h2>
				            <img src="{{ asset('assets/images/line.png') }}" alt="image">
				        </div>                       

				        <div class="row">

				            <!-- Bloc 1 -->
				            <div class="col-md-3">
				                <div class="item__inner">                                    
				                    <div class="icon">
				                        <img src="{{ asset('assets/images/service/1.png') }}" alt="Enseignement de qualité">
				                    </div>
				                    <div class="react-content">
				                        <h3 class="react-title">
				                            <a href="enseignements.html">Enseignement de qualité</a>
				                        </h3>
<!--				                        <p>-->
<!--				                            Des programmes conformes aux exigences nationales -->
<!--				                            avec un suivi pédagogique rigoureux.-->
<!--				                        </p>-->
				                        <a href="enseignements.html" class="r__link">
				                            En savoir plus
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
				                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" 
				                                 stroke-width="2" stroke-linecap="round" 
				                                 stroke-linejoin="round" class="feather feather-arrow-right">
				                                <line x1="5" y1="12" x2="19" y2="12"></line>
				                                <polyline points="12 5 19 12 12 19"></polyline>
				                            </svg>
				                        </a>
				                    </div>                                    
				                </div>
				            </div>

				            <!-- Bloc 2 -->
				            <div class="col-md-3">
				                <div class="item__inner">                                    
				                    <div class="icon">
				                        <img src="{{ asset('assets/images/service/2.jpg') }}" alt="Encadrement rigoureux">
				                    </div>
				                    <div class="react-content">
				                        <h3 class="react-title">
				                            <a href="{{ route('vie-scolaire') }}">Encadrement rigoureux</a>
				                        </h3>
<!--				                        <p>-->
<!--				                            Une équipe pédagogique qualifiée assurant -->
<!--				                            discipline et accompagnement personnalisé.-->
<!--				                        </p>-->
				                        <a href="{{ route('vie-scolaire') }}" class="r__link">
				                            En savoir plus
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
				                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" 
				                                 stroke-width="2" stroke-linecap="round" 
				                                 stroke-linejoin="round" class="feather feather-arrow-right">
				                                <line x1="5" y1="12" x2="19" y2="12"></line>
				                                <polyline points="12 5 19 12 12 19"></polyline>
				                            </svg>
				                        </a>
				                    </div>                                    
				                </div>
				            </div>

				            <!-- Bloc 3 -->
				            <div class="col-md-3">
				                <div class="item__inner">                                    
				                    <div class="icon">
				                        <img src="{{ asset('assets/images/service/3.jpg') }}" alt="Résultats excellents">
				                    </div>
				                    <div class="react-content">
				                        <h3 class="react-title">
				                            <a href="resultats.html">Résultats excellents</a>
				                        </h3>
<!--				                        <p>-->
<!--				                            Un taux de réussite élevé aux examens nationaux -->
<!--				                            (BEPC et BAC).-->
<!--				                        </p>-->
				                        <a href="resultats.html" class="r__link">
				                            En savoir plus
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
				                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" 
				                                 stroke-width="2" stroke-linecap="round" 
				                                 stroke-linejoin="round" class="feather feather-arrow-right">
				                                <line x1="5" y1="12" x2="19" y2="12"></line>
				                                <polyline points="12 5 19 12 12 19"></polyline>
				                            </svg>
				                        </a>
				                    </div>                                    
				                </div>
				            </div>

				            <!-- Bloc 4 -->
				            <div class="col-md-3">
				                <div class="item__inner">                                    
				                    <div class="icon">
				                        <img src="{{ asset('assets/images/service/4.jpg') }}" alt="Vie scolaire dynamique">
				                    </div>
				                    <div class="react-content">
				                        <h3 class="react-title">
				                            <a href="{{ route('vie-scolaire') }}">Vie scolaire dynamique</a>
				                        </h3>
<!--				                        <p>-->
<!--				                            Activités culturelles, sportives et éducatives -->
<!--				                            favorisant l’épanouissement des élèves.-->
<!--				                        </p>-->
				                        <a href="{{ route('vie-scolaire') }}" class="r__link">
				                            En savoir plus
				                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
				                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" 
				                                 stroke-width="2" stroke-linecap="round" 
				                                 stroke-linejoin="round" class="feather feather-arrow-right">
				                                <line x1="5" y1="12" x2="19" y2="12"></line>
				                                <polyline points="12 5 19 12 12 19"></polyline>
				                            </svg>
				                        </a>
				                    </div>                                    
				                </div>
				            </div>

				        </div>
				    </div>
				</div>
				<!--=================  Nos Atouts Section End Here ================= -->
				<!--=================  About Section Start Here ================= -->
				<div class="about__area about__area_one p-relative pt---10 pb---120">
				    <div class="container">                        
				        <div class="row">
				            <div class="col-lg-6">
				                <div class="about__image">
				                    <img src="{{ asset('assets/images/about/ab-euphrate.png') }}" alt="Collège Privé Euphrate">
				                    <img class="react__shape__ab" src="{{ asset('assets/images/about/badge.png') }}" alt="Excellence Badge">
				                </div>
				            </div>
				            <div class="col-lg-6">
				                <div class="about__content">
				                    
				                    <h2 class="about__title">
				                        Bienvenue au <br> 
				                        <em>Collège Privé Euphrate</em>
				                    </h2>

				                    <p class="about__paragraph">
				                        Situé à Grand-Lahou, le Collège Privé Euphrate est un établissement 
				                        d’enseignement secondaire engagé dans la formation académique 
				                        et morale des élèves.
				                    </p>

				                    <p class="about__paragraph2">
				                        Notre mission : <strong>former des élèves disciplinés, responsables et performants.</strong>
				                    </p>

				                    <p>
				                        Grâce à une équipe pédagogique qualifiée et un encadrement rigoureux, 
				                        nous accompagnons nos élèves de la 6ème à la Terminale vers la réussite 
				                        aux examens nationaux (BEPC et BAC).  
				                        Nous mettons un accent particulier sur la discipline, le suivi individuel 
				                        et l’excellence académique.
				                    </p>

				                    <ul>
				                        <li>
				                            <a href="{{ route('about') }}" class="more-about">
				                                En savoir plus 
				                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
				                                viewBox="0 0 24 24" fill="none" stroke="currentColor" 
				                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
				                                class="feather feather-arrow-right">
				                                    <line x1="5" y1="12" x2="19" y2="12"></line>
				                                    <polyline points="12 5 19 12 12 19"></polyline>
				                                </svg>
				                            </a>
				                        </li>

				                        <li class="last-li">
				                            <em>Contactez-nous</em>
				                            <a href="mailto:cpeuphrate@gmail.com">
                                                cpeuphrate@gmail.com
				                            </a>
				                        </li>
				                    </ul>

				                </div>
				            </div>
				        </div>
				    </div>
				</div>
				<!--================= About Section End Here ================= -->

        
				<!--================= Statistiques Section Start Here =================-->
				<div class="react__title__section text-center">
				    <h2 class="react__tittle">Nos Performances</h2>
				    <img src="{{ asset('assets/images/line.png') }}" alt="image">
				</div>
				<div class="count__area pb---110">
				    <div class="container count__width">
				        <div class="row">
				            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
				                <div class="row">

				                    <!-- Élèves inscrits -->
				                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
				                        <div class="count__content text-center">
				                            <p class="count__content--paragraph">Élèves</p>
				                            <h3 class="count__content--title-1 counter">3210</h3>
				                            <p class="count__content--paragraph2">formés à Euphrate</p>
				                        </div>
				                    </div>

				                    <!-- Taux de réussite BEPC -->
				                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
				                        <div class="count__content text-center">
				                            <p class="count__content--paragraph">Taux de réussite</p>
				                            <h3 class="count__content--title-1 counter">70</h3>
				                            <p class="count__content--paragraph2">% au BEPC</p>                                            
				                        </div>
				                    </div>

				                    <!-- Taux de réussite BAC -->
				                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
				                        <div class="count__content text-center">
				                            <p class="count__content--paragraph">Taux de réussite</p>
				                            <h3 class="count__content--title-1 counter">65</h3>
				                            <p class="count__content--paragraph2">% au BAC</p>                                            
				                        </div>
				                    </div>

				                    <!-- Enseignants -->
				                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
				                        <div class="count__content text-center">
				                            <p class="count__content--paragraph">Personnel</p>
				                            <h3 class="count__content--title-1 counter">45</h3>
				                            <p class="count__content--paragraph2">Enseignants qualifiés</p>                                            
				                        </div>
				                    </div>

				                </div>
				            </div>
				        </div>
				    </div>
				</div>
				<!--================= Statistiques Section End Here =================-->

                <!--=================  Mot du DR Section Start Here ================= -->
                <div class="about__area about2__area p-relative pb---120">
                    <div class="container about__area-width">
                        <div class="row">
                            <div class="col-lg-6">
							    <div class="about__image directeur-image-wrapper">

							        <img class="react__shape__11" src="{{ asset('assets/images/about/dot.png') }}" alt="">
							        <img class="react__shape__1" src="{{ asset('assets/images/about/shape_02.png') }}" alt="">
							        
							        <img src="{{ asset('assets/images/about/about22.png') }}" alt="Directeur du Collège Euphrate">

							        <!-- Nom du Directeur -->
							        <div class="directeur-info">
							            <h5>M. TOUBOUI BI IRIE LAURENT </h5>
							            <span>Directeur des études du Collège Privé Euphrate</span>
							        </div>

							        <img class="react__shape__2" src="{{ asset('assets/images/about/shape_01.png') }}" alt="">
							        <img class="react__shape__33" src="{{ asset('assets/images/about/shape_03.png') }}" alt="">
							    </div>
							</div>
                            <div class="col-lg-6">
							    <div class="about__content">
							        <h2 class="about__title">
							            Mot du Directeur des études du <br>
							            <em>Collège Privé Euphrate</em>
							        </h2>

							        <p class="about__paragraph">
							            Chers parents, chers élèves,
							            Situé à Grand-Lahou, le Collège Privé Euphrate est un établissement
							            secondaire engagé dans la formation académique et morale des jeunes.
							            Notre mission est de bâtir une jeunesse disciplinée, responsable et tournée vers l’excellence.
							        </p>

							        <p>
							            Nous accordons une importance particulière à la rigueur pédagogique,
							            au suivi personnalisé des élèves et à la préparation efficace aux examens
							            officiels (BEPC et Baccalauréat). Notre ambition est claire :
							            garantir la réussite scolaire dans un cadre sécurisé et structuré.
							        </p>

							        <ul>
							            <li><i class="icon_check"></i> Encadrement rigoureux et suivi permanent</li>
							            <li><i class="icon_check"></i> Préparation intensive aux examens nationaux</li>
							            <li><i class="icon_check"></i> Discipline – Excellence – Réussite</li>
							        </ul>
							    </div>
							</div>
                        </div>
                    </div>
                </div>
                <!--================= MOT DU DR Section End Here ================= -->


				<!--=================  Galerie des Excellents =================-->
				<div class="trending-section-five home-five ">
				    <div class="container">

				        <!-- Titre -->
				        <div class="section-title-area home-five text-center mb---70">
				            <div class="section-pretitle">Collège Privé Euphrate</div>
				            <div class="section-title">Galerie des Excellents</div>
				            <p style="margin-top:15px;">
				                Parce que faire la promotion des excellents,
				                c’est amener les autres à progresser.
				            </p>
				        </div>


                        <div class="swiper blogSlider-5">
                            <div class="swiper-wrapper">

                                <!-- TLE A1 -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_tlea1_2026.jpeg') }}" alt="Major Tle A1">
                                        </div>


                                    </div>
                                </div>

                                <!-- TLE A2 -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_tlea2_2026.jpeg') }}" alt="Major Tle A2">
                                        </div>


                                    </div>
                                </div>

                                <!-- TLE C -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_tlec_2026.jpeg') }}" alt="Major Tle C">
                                        </div>


                                    </div>
                                </div>

                                <!-- TLE D -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_tled_2026.jpeg') }}" alt="Major Tle D">
                                        </div>


                                    </div>
                                </div>

                                <!-- 1ère A2 -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_1era2_2026.jpeg.jpeg') }}" alt="Major 1ère A2">
                                        </div>


                                    </div>
                                </div>

                                <!-- 1ère C -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_1erc_2026.jpeg') }}" alt="Major 1ère C">
                                        </div>


                                    </div>
                                </div>

                                <!-- 2nde A -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_2nda_2026.jpeg') }}" alt="Major 2nde A">
                                        </div>


                                    </div>
                                </div>

                                <!-- 2nde C -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_2ndc_2026.jpeg') }}" alt="Major 2nde C">
                                        </div>


                                    </div>
                                </div>

                                <!-- 3ème -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_3ieme_2026.jpeg') }}" alt="Major 3ème">
                                        </div>


                                    </div>
                                </div>

                                <!-- 4ème -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_4ieme_2026') }}" alt="Major 4ème">
                                        </div>


                                    </div>
                                </div>

                                <!-- 5ème -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_5ieme_2026.jpeg') }}" alt="Major 5ème">
                                        </div>


                                    </div>
                                </div>

                                <!-- 6ème -->
                                <div class="swiper-slide">
                                    <div class="trending-card">
                                        <div class="card-image">
                                            <img src="{{ asset('assets/images/excellents/major_6ieme_2026.jpeg') }}" alt="Major 6ème">
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>



				    </div>
				</div>
				<!--=================  Fin Galerie des Excellents =================-->




              <!--================= Actualités Section Start Here =================-->
				<div class="react-blog__area blog__area pt---120 pb---120 graybg-home">
				    <div class="container blog__width">
				        <div class="react__title__section text-center">                           
				            <h2 class="react__tittle">Actualités du Collège</h2>
				            <img src="{{ asset('assets/images/line.png') }}" alt="image">
				            <p>Suivez les dernières informations et événements du Collège Privé Euphrate</p>
				        </div>

				        <div class="row">

				            <!-- Actualité 1 -->
				            <div class="col-lg-4 col-md-6 col-sm-12">
				                <div class="blog__card mb-50">
				                    <div class="blog__thumb w-img p-relative">
				                        <a href="blog-details.html">
				                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Rentrée scolaire">
				                        </a>
				                        <em class="b_date">15 Sept</em>
				                    </div>
				                    <div class="blog__card--content">
				                        <div class="blog__card--content-area mb-25">
				                            <span class="blog__card--date">Rentrée</span>
				                            <h3 class="blog__card--title">
				                                <a href="blog-details.html">
				                                    Rentrée scolaire 2026-2027
				                                </a>
				                            </h3>
				                            <p>La direction informe les parents que la rentrée scolaire est fixée au 15 septembre 2026.</p>
				                        </div>
				                    </div>
				                </div>
				            </div>

				            <!-- Actualité 2 -->
				            <div class="col-lg-4 col-md-6 col-sm-12">
				                <div class="blog__card mb-50">
				                    <div class="blog__thumb w-img p-relative">
				                        <a href="blog-details.html">
				                            <img src="{{ asset('assets/images/blog/2.jpg') }}" alt="Cérémonie d'excellence">
				                        </a>
				                        <em class="b_date">10 Juil</em>
				                    </div>
				                    <div class="blog__card--content">
				                        <div class="blog__card--content-area mb-25">
				                            <span class="blog__card--date">Excellence</span>
				                            <h3 class="blog__card--title">
				                                <a href="blog-details.html">
				                                    Cérémonie de distinction des meilleurs élèves
				                                </a>
				                            </h3>
				                            <p>Les meilleurs élèves ont été récompensés pour leurs brillants résultats.</p>
				                        </div>
				                    </div>
				                </div>
				            </div>

				            <!-- Actualité 3 -->
				            <div class="col-lg-4 col-md-6 col-sm-12">
				                <div class="blog__card mb-50">
				                    <div class="blog__thumb w-img p-relative">
				                        <a href="blog-details.html">
				                            <img src="{{ asset('assets/images/blog/3.jpg') }}" alt="Examens blancs">
				                        </a>
				                        <em class="b_date">20 Mars</em>
				                    </div>
				                    <div class="blog__card--content">
				                        <div class="blog__card--content-area mb-25">
				                            <span class="blog__card--date">Examens</span>
				                            <h3 class="blog__card--title">
				                                <a href="blog-details.html">
				                                    Lancement des examens blancs
				                                </a>
				                            </h3>
				                            <p>Les élèves de 3ème et Terminale ont entamé leurs examens blancs préparatoires.</p>
				                        </div>
				                    </div>
				                </div>
				            </div>

				        </div>



				    </div>
				</div>
				<!--================= Actualités Section End Here =================-->

				
            </div>


        </div>
 

   

        <!--================= Wrapper End Here =================-->



<style type="text/css">
	.directeur-image-wrapper {
    position: relative;
}

.directeur-info {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background: rgba(13, 60, 102, 0.9); /* Bleu institutionnel */
    color: #fff;
    padding: 15px 20px;
    border-radius: 8px;
}

.directeur-info h5 {
    margin: 0;
    font-weight: 600;
    color: white;
}

.directeur-info span {
    font-size: 14px;
    color: red;
    font-weight: bold;
}


.trending-card {
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    border-radius: 12px;
}

.trending-card .price-tag {
    font-weight: bold;
    color: #fff;
}

.section-title {
    font-weight: 700;
}


    .content-part {
        background: rgba(0, 0, 0, 0.6);
        padding: 30px;
        border-radius: 8px;
    }
</style>

    </body>
</html>
@endsection

