@extends('layouts.app')

@section('title', 'Cours en ligne | CP Euphrate')

@section('content')
<!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Cours en ligne - Collège Privé Euphrate">
                        <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Cours en ligne - Collège Privé Euphrate">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Cours en Ligne</h1>
                                    <p class="breadcrumbs-subtitle">
                                        Accédez à nos contenus pédagogiques numériques et progressez à votre rythme.
                                    </p>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index.html">Accueil</a></li>
                                            <li>Cours en Ligne</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container pb---70">
                        <div class="row align-items-center back-vertical-middle shorting__course mb-50">
                            <div class="col-md-2">
                                <div class="all__icons">
                                    <div class="list__icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                                    </div>
                                    <div class="result-count">FItre</div>
                                </div>
                            </div>
                            <div class="col-md-10 text-right">

                                <!-- Filtre Classe -->
                                <select class="from-control">
                                    <option value="">Toutes les classes</option>
                                    <option value="6e">6ème</option>
                                    <option value="5e">5ème</option>
                                    <option value="4e">4ème</option>
                                    <option value="3e">3ème</option>
                                </select>

                                <!-- Filtre Matière -->
                                <select class="from-control">
                                    <option value="">Toutes les matières</option>
                                    <option value="math">Mathématiques</option>
                                    <option value="francais">Français</option>
                                    <option value="anglais">Anglais</option>
                                    <option value="hg">Histoire - Géographie</option>
                                    <option value="svt">SVT</option>
                                    <option value="pc">Physique - Chimie</option>
                                    <option value="techno">Technologie</option>
                                </select>

                                <!-- Filtre Type d'accès -->
                                <select class="from-control">
                                    <option value="">Tous les accès</option>
                                    <option value="gratuit">Gratuit</option>
                                    <option value="scolarite">Inclus dans la scolarité</option>
                                    <option value="premium">Accès Premium</option>
                                </select>

                                <!-- Filtre Niveau -->
                                <select class="from-control">
                                    <option value="">Tous les niveaux</option>
                                    <option value="debutant">Débutant</option>
                                    <option value="intermediaire">Intermédiaire</option>
                                    <option value="avance">Avancé</option>
                                </select>

                            </div>
                        </div>
                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-6">
                                <div class="all__icons">
                                    <div class="result-count">Nous avons trouvé 12 cours disponibles pour vous</div>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">
                                <select class="from-control">
                                    <option>Trier par : Défaut</option>
                                    <option>Les plus populaires</option>
                                    <option>Les mieux notés</option>
                                    <option>Les plus récents</option>
                                    <option>Durée : courte à longue</option>
                                    <option>Durée : longue à courte</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Cours 1 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> Tle A/C/D
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/1.jpg') }}" alt="Image du cours">
<!--                                        <iframe width="740" height="440" src="https://www.youtube.com/embed/d6j8GAziF6I?si=8LZS-jDQyJjymMS8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/d6j8GAziF6I?si=qQQkxxT3A7dPfHkM">
                                                RESUME DE TEXTE SUJET ARGUMENTATIF TERMINAL
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>10 leçons</li>
                                            <li>5h 24min</li>
                                            <li>Prof. Kouamé</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>4.5</em> ★★★★☆ (101 avis)
                                            </li>
                                            <li class="price">Inclus scolarité</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cours 2 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> 3ième
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/espagnole.jpg') }}" alt="Image du cours">
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/avbUv99jomI?si=ref9MdnZV_FkWaJr">
                                                Cours Espagnol - Prueba de 3ième
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>19 leçons</li>
                                            <li>2h 29min</li>
                                            <li>Senior Eby</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>4.0</em> ★★★★☆ (235 avis)
                                            </li>
                                            <li class="price">Gratuit</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cours 3 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> Tle A
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/espagnole2.jpg') }}" alt="Image du cours">
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/bjuFqLyeO-4?si=xFV5BHZ1C0D9XyRi">
                                                Cours Espagnol - Prueba de Tle
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>18 leçons</li>
                                            <li>5h 24min</li>
                                            <li>Senior Eby</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>4.5</em> ★★★★☆ (144 avis)
                                            </li>
                                            <li class="price">Inclus scolarité</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cours 4 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> 3ième
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/espagnole3.jpg') }}" alt="Image du cours">
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/PiUncnrqJg0?si=5tTm5DR-o1AnClPz">
                                                English Vocabulary rules
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>35 leçons</li>
                                            <li>6h 22min</li>
                                            <li>Prof. Adjoua</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>3.5</em> ★★★☆☆ (205 avis)
                                            </li>
                                            <li class="price">Inclus scolarité</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cours 5 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> 3ieme
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/svt.jpg') }}" alt="Image du cours">
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/Y5Xl-LeJPD4?si=hVIQrekDSsKUHsmu">
                                                Cours SVT - Immunologie
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>20 leçons</li>
                                            <li>3h 30min</li>
                                            <li>Prof. Mensah</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>4.5</em> ★★★★☆ (75 avis)
                                            </li>
                                            <li class="price">Gratuit</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cours 6 -->
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w">
                                            <img src="{{ asset('assets/images/course/beg.png') }}" alt="Niveau"> 3ème
                                        </a>
                                        <img src="{{ asset('assets/images/course-filter/mathematique.jpg') }}" alt="Image du cours">
                                    </div>
                                    <div class="case-content">
                                        <h4 class="case-title">
                                            <a href="https://youtu.be/o9RP8wSFmyM?si=9LgaMBQuj8TEBuoA">
                                                Mathématiques : Révision complète
                                            </a>
                                        </h4>
                                        <ul class="meta-course">
                                            <li>24 leçons</li>
                                            <li>4h 20min</li>
                                            <li>Prof. Koffi</li>
                                        </ul>
                                        <ul class="react-ratings">
                                            <li class="react-book">
                                                <em>4.0</em> ★★★★☆ (99 avis)
                                            </li>
                                            <li class="price">Inclus scolarité</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--================= Pagination Section Start Here =================-->
                        <ul class="back-pagination pt---20">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="back-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
                        </ul>
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================-->
                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

       
    </body>
</html>
@endsection

