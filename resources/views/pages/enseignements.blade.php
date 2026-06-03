@extends('layouts.app')

@section('title', 'Enseignements | CP Euphrate')

@section('content')


<!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">La vitrine des enseignants</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="index.html">Acceuil</a></li>
                                    <li>Professeurs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->

        <!--=================  Nos Enseignants Start Here  =================-->
        <div class="instructors___page pt---120  ">
            <div class="container pb---60">

                <!-- Section Title -->
                <div class="section-title text-center pb---60">
                    <h2>Nos Enseignants</h2>
                    <p>Une équipe pédagogique qualifiée et engagée pour la réussite de nos élèves</p>
                </div>

                <div class="row">

                    <!-- Enseignant 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/1.jpg') }}" alt="Professeur de Mathématiques">
                                <div class="content__hover">
                                    <p>Spécialiste en mathématiques, il accompagne les élèves vers l’excellence et la rigueur scientifique.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">M. Kouamé Jean</a></h4>
                                <p>Professeur de Mathématiques</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/2.jpg') }}" alt="Professeur de Français">
                                <div class="content__hover">
                                    <p>Passionnée de littérature et d’expression écrite, elle développe les compétences linguistiques des élèves.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">Mme Yao Marie</a></h4>
                                <p>Professeure de Français</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/3.jpg') }}" alt="Professeur d'Anglais">
                                <div class="content__hover">
                                    <p>Certifié en langue anglaise, il renforce l’expression orale et écrite des apprenants.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">M. Mensah David</a></h4>
                                <p>Professeur d’Anglais</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/4.jpg') }}" alt="Professeur de SVT">
                                <div class="content__hover">
                                    <p>Expert en Sciences de la Vie et de la Terre, il rend les sciences dynamiques et accessibles.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">Mme Traoré Aminata</a></h4>
                                <p>Professeure de SVT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 5 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/5.jpg') }}" alt="Professeur de Physique-Chimie">
                                <div class="content__hover">
                                    <p>Il stimule la curiosité scientifique et développe l’esprit critique chez les élèves.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">M. Koffi Alain</a></h4>
                                <p>Professeur de Physique-Chimie</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/6.jpg') }}" alt="Professeur d'Histoire-Géographie">
                                <div class="content__hover">
                                    <p>Historienne passionnée, elle aide les élèves à comprendre les enjeux du monde actuel.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">Mme Koné Fatou</a></h4>
                                <p>Professeure d’Histoire-Géographie</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 7 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/7.jpg') }}" alt="Professeur d'Informatique">
                                <div class="content__hover">
                                    <p>Formateur en informatique, il initie les élèves aux outils numériques modernes.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">M. Ouattara Ibrahim</a></h4>
                                <p>Professeur d’Informatique</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enseignant 8 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="instructor__content">
                            <div class="instructor__image">
                                <img src="{{ asset('assets/images/instructors/8.jpg') }}" alt="Professeur d'Éducation Civique">
                                <div class="content__hover">
                                    <p>Il transmet les valeurs de discipline, de respect et de citoyenneté responsable.</p>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <h4><a href="#">Mme Bamba Aïcha</a></h4>
                                <p>Professeure d’Éducation Civique</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--=================  Nos Enseignants End Here  =================-->

        <!--================= Recrutement Enseignants Start Here =================-->
        <div class="instructor-section ">
            <div class="container">
                <div class="instructor-inner">
                    <div class="content">
                        <h1 class="instructor-title">Postuler comme Professeur</h1>
                        <p class="instructor-info">
                            Le Collège Privé Euphrate recrute des enseignants qualifiés et passionnés.
                            Si vous êtes diplômé(e) et animé(e) par la vocation d’enseigner,
                            rejoignez notre équipe pédagogique engagée pour l’excellence académique.
                        </p>
                        <p class="instructor-info">
                            Disciplines recherchées : Mathématiques, Français, Anglais,
                            Sciences, Histoire-Géographie, Informatique et autres matières du secondaire.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}" class="instructor-btn">
                        DÉPOSER MA CANDIDATURE
                    </a>

                </div>
            </div>
        </div>
        <!--================= Recrutement Enseignants End Here =================-->

        <!--================= Matières Enseignées Start Here =================-->
        <div class="catagories-section home_four-section pt---100 pb---100">
            <div class="container">

                <div class="section-title text-center">Nos Matières</div>
                <div class="sub-title text-center pb---50">
                    Les disciplines académiques enseignées au Collège Privé Euphrate
                </div>

                <div class="row justify-content-between align-center">

                    <!-- Mathématiques -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/1.png') }}" alt="Mathématiques">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Mathématiques</a></div>
                                <div class="info">Algèbre • Géométrie • Analyse</div>
                            </div>
                        </div>
                    </div>

                    <!-- Français -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/2.png') }}" alt="Français">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Français</a></div>
                                <div class="info">Grammaire • Littérature • Expression écrite</div>
                            </div>
                        </div>
                    </div>

                    <!-- Anglais -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/3.png') }}" alt="Anglais">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Anglais</a></div>
                                <div class="info">Communication • Compréhension • Writing</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sciences de la Vie et de la Terre -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/4.png') }}" alt="SVT">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Sciences de la Vie et de la Terre</a></div>
                                <div class="info">Biologie • Géologie • Environnement</div>
                            </div>
                        </div>
                    </div>

                    <!-- Physique-Chimie -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/5.png') }}" alt="Physique-Chimie">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Physique-Chimie</a></div>
                                <div class="info">Mécanique • Électricité • Réactions chimiques</div>
                            </div>
                        </div>
                    </div>

                    <!-- Histoire-Géographie -->
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="catagory-item">
                            <div class="catagory-picture">
                                <img src="{{ asset('assets/images/home4/catagories/6.png') }}" alt="Histoire-Géographie">
                            </div>
                            <div class="content">
                                <div class="item-title"><a href="#">Histoire-Géographie</a></div>
                                <div class="info">Histoire • Géographie • Éducation Civique</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--================= Matières Enseignées End Here =================-->
    </div>
</div>
<!--================= Wrapper End Here =================-->

</body>
</html>
@endsection

