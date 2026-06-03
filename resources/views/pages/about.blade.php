@extends('layouts.app')

@section('title', 'À propos | CP Euphrate')

@section('content')
<!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
				<div class="react-breadcrumbs">
				    <div class="breadcrumbs-wrap">
				        <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Collège Privé Euphrate">
				        <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Collège Privé Euphrate">
				        <div class="breadcrumbs-inner">
				            <div class="container">
				                <div class="breadcrumbs-text">
				                    <h1 class="breadcrumbs-title">À propos du Collège Privé Euphrate</h1>
				                    <div class="back-nav">
				                        <ul>
				                            <li><a href="{{ route('home') }}">Accueil</a></li>
				                            <li>À propos</li>
				                        </ul>
				                    </div>
				                    
				                </div>
				            </div>
				        </div>
				    </div>                
				</div>
				<!--================= Breadcrumbs Section End Here =================-->

				<div class="profile-top back__course__area pt---120 pb---90"> 
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-4">
							    <div class="school-images">
							        <img src="{{ asset('assets/images/profile/1.jpg') }}" 
							             alt="Bâtiment du Collège Privé Euphrate" 
							             class="img-fluid main-image">

							        <img src="{{ asset('assets/images/profile/1-b.png') }}"
							             alt="Élèves en classe au Collège Privé Euphrate" 
							             class="img-fluid second-image">
							    </div>
							</div>
				            <div class="col-lg-8">
				                <ul class="user-section">
				                    <li class="user">
				                        <span class="name">Nom :</span>
				                        <em>Collège Privé Euphrate</em>
				                    </li>
				                    <li>Crée : <em>Depuis 2014</em></li>
				                    <li>Tel : <em>+225 07 07 79 11 74</em></li>
				                    <li>Email : <em>cpeuphrate@gmail.com</em></li>
				                    <li>Localisation : <em>Grand-Lahou, Côte d’Ivoire</em></li>
				                </ul>

				                <h3>Présentation de l’établissement</h3>

				                <p>
				                    Fondé en 2014, le Collège Privé Euphrate s’est rapidement imposé comme l’un des établissements
				                    secondaires de référence à Grand-Lahou. Porté par une vision ambitieuse et un encadrement 
				                    pédagogique rigoureux, notre collège œuvre chaque jour à offrir une éducation de qualité 
				                    fondée sur l’excellence, la discipline et la réussite.
				                </p>

				                <p>
				                    Depuis sa création, le Collège Privé Euphrate s’est distingué par la qualité de son corps 
				                    enseignant, la rigueur de son suivi académique et la promotion constante du mérite. 
				                    Notre établissement accompagne les élèves du premier cycle au second cycle dans un 
				                    environnement sécurisé, structuré et propice à l’épanouissement intellectuel.
				                </p>

				                <p>
				                    Grâce à des résultats scolaires en constante progression et un taux de réussite remarquable 
				                    aux examens nationaux, le Collège Privé Euphrate rayonne aujourd’hui parmi les meilleures 
				                    écoles de la ville de Grand-Lahou. Nous mettons un point d’honneur à révéler le potentiel 
				                    de chaque élève, en développant non seulement ses compétences académiques, mais aussi 
				                    ses valeurs morales et citoyennes.
				                </p>

				                <p>
				                    Notre ambition est claire : former une génération responsable, compétente et prête à 
				                    relever les défis du monde moderne. Au Collège Privé Euphrate, chaque élève est accompagné, 
				                    encouragé et valorisé dans son parcours vers l’excellence.
				                </p>

				                <div class="count__area2">                                                               
				                    <ul class="row">
				                        <li class="col-lg-4">
				                            <div class="count__content">
				                                <div class="icon">
				                                    <img src="{{ asset('assets/images/profile/2.png') }}" alt="Élèves">
				                                </div>
				                                <div class="text">
				                                    <span class="count__content-title counter">650</span>
				                                    <p>Élèves formés depuis 2015</p>
				                                </div>                                           
				                            </div>
				                        </li>

				                        <li class="col-lg-4">
				                            <div class="count__content">
				                                <div class="icon">
				                                    <img src="{{ asset('assets/images/profile/3.png') }}" alt="Taux de réussite">
				                                </div>
				                                <div class="text">
				                                    <span class="count__content-title counter">92</span><em>%</em>
				                                    <p>Taux moyen de réussite aux examens</p> 
				                                </div>                                           
				                            </div>
				                        </li>

				                        <li class="col-lg-4">
				                            <div class="count__content">
				                                <div class="icon">
				                                    <img src="{{ asset('assets/images/profile/4.png') }}" alt="Enseignants">
				                                </div>
				                                <div class="text">
				                                    <span class="count__content-title counter">42</span>
				                                    <p>Enseignants qualifiés</p>  
				                                </div>                                          
				                            </div>
				                        </li>
				                    </ul>
				                </div>
				              
				            </div>
				        </div>
				    </div>
				</div>
                <!--================= Présentation Institutionnelle =================-->
                <div class="overview-section-six pb---120">
                    <div class="container">
                        <div class="row justify-content-between">

                            <!-- Navigation -->
                            <div class="col-xl-3">
							    <div class="overview-navigation">
							        <div class="navigation-btn active" data-show=".directeurEtude">
							            Message du Directeur d’Études
							        </div>
							        <div class="navigation-btn" data-show=".educateurs">
							            Conseil des Éducateurs
							        </div>
							        <div class="navigation-btn" data-show=".enseignants">
							            Avis du Collège des Enseignants
							        </div>
							    </div>
							</div>

                            <!-- Contenus -->
                            <div class="col-xl-9">
                                <div class="overview-contents">
									<div class="item directeurEtude">
									    <div class="row align-items-center">
									        <div class="col-md-5">
									            <div class="content-picture">
									                <img src="{{ asset('assets/images/home6/overview/standing.png') }}" alt="Directeur des études" class="img-fluid">
									            </div>
									        </div>
									        <div class="col-md-7">
									            <div class="content">
									                <h3>Message du Directeur d’Études</h3>

									                <p>
									                    Au <strong>Collège Privé Euphrate</strong>, notre priorité est 
									                    <strong>l’excellence académique</strong> et 
									                    <strong>l’accompagnement personnalisé</strong> de chaque élève. 
									                    Nous veillons à l’application rigoureuse des programmes officiels 
									                    tout en mettant en place des stratégies pédagogiques adaptées 
									                    aux besoins spécifiques de nos apprenants.
									                </p>

									                <p>
									                    Grâce à une organisation structurée, des 
									                    <strong>évaluations régulières</strong>, des 
									                    <strong>examens blancs</strong> et un suivi constant, 
									                    nous préparons efficacement nos élèves aux échéances nationales 
									                    telles que le <strong>BEPC</strong> et le <strong>Baccalauréat</strong>.
									                </p>

									                <p>
									                    Notre objectif est clair : garantir des 
									                    <strong>performances durables</strong> et consolider la place 
									                    du Collège Privé Euphrate parmi les établissements les plus 
									                    performants de <strong>Grand-Lahou</strong>.
									                </p>
									            </div>
									        </div>
									    </div>
									</div>

									<div class="item educateurs hide">
									    <div class="row align-items-center">
									        <div class="col-md-7 order-md-1 order-2">
									            <div class="content">
									                <h3>Conseil des Éducateurs</h3>

									                <p>
									                    Le <strong>Conseil des Éducateurs</strong> joue un rôle fondamental 
									                    dans le maintien d’un environnement scolaire 
									                    <strong>discipliné</strong>, <strong>respectueux</strong> et 
									                    propice à l’apprentissage.
									                </p>

									                <p>
									                    Nous œuvrons quotidiennement à inculquer aux élèves des valeurs 
									                    essentielles telles que le <strong>respect</strong>, la 
									                    <strong>responsabilité</strong>, l’<strong>intégrité</strong> 
									                    et le <strong>sens de l’effort</strong>.
									                </p>

									                <p>
									                    Au-delà du cadre académique, notre mission est également de 
									                    contribuer à la <strong>formation morale et civique</strong> 
									                    de chaque élève afin de former des citoyens équilibrés, 
									                    responsables et engagés pour l’avenir.
									                </p>
									            </div>
									        </div>
									        <div class="col-md-5 order-md-2 order-1">
									            <div class="content-picture">
									                <img src="{{ asset('assets/images/home6/overview/educateur.png') }}" alt="Éducateurs" class="img-fluid">
									            </div>
									        </div>
									    </div>
									</div>
										<!-- Collège des Enseignants -->
									<div class="item enseignants hide">
									    <div class="row align-items-center">
									        <div class="col-md-5">
									            <div class="content-picture">
									                <img src="{{ asset('assets/images/home6/overview/professeur.png') }}" alt="Enseignants" class="img-fluid">
									            </div>
									        </div>
									        <div class="col-md-7">
									            <div class="content">
									                <h3>Avis du Collège des Enseignants</h3>

									                <p>
									                    Le <strong>Collège des Enseignants</strong> du Collège Privé Euphrate 
									                    est composé de professionnels <strong>qualifiés</strong>, 
									                    <strong>expérimentés</strong> et profondément engagés 
									                    dans la réussite des élèves.
									                </p>

									                <p>
									                    Nous privilégions une <strong>pédagogie active</strong>, 
									                    fondée sur la compréhension, la rigueur et l’encouragement constant. 
									                    Chaque enseignant met son expertise au service de la 
									                    <strong>transmission du savoir</strong> et du développement 
									                    des compétences.
									                </p>

									                <p>
									                    Ensemble, nous travaillons à maintenir un 
									                    <strong>haut niveau d’exigence académique</strong> afin 
									                    d’assurer des <strong>résultats remarquables</strong> et 
									                    une préparation efficace aux défis universitaires et professionnels.
									                </p>
									            </div>
									        </div>
									    </div>
									</div>
                                </div>
                            </div>
							<hr>
                        </div>
                    </div>

                </div>
                <!--================= Fin Présentation Institutionnelle =================-->   

			<!--================= FAQ Accordion Section Start Here =================-->
			<div class="accordion__area p-relative">
			    <div class="accordion__shape">
			        <img class="accordion__shape-1" src="{{ asset('assets/images/acc.png') }}" alt="shape png">
			        <img class="accordion__shape-1a" src="{{ asset('assets/images/banner2/shape_01.png') }}" alt="shape png">
			    </div>

			    <div class="container">
			        <div class="row">

			            <!-- Texte gauche -->
			            <div class="col-lg-6">
			                <div class="accordion__wrapper">
			                    <div class="accordion__wrapper-1">
			                        <h6>Questions Fréquentes</h6>
			                        <h2>Tout savoir sur le <br> Collège Privé Euphrate</h2>
			                        <p>
			                            Retrouvez ici les réponses aux principales questions 
			                            concernant l’admission, les séries proposées, les 
			                            conditions de passage et les modalités d’inscription.
			                        </p>
			                    </div>
			                </div>
			            </div>

			            <!-- Accordéon droite -->
			            <div class="col-lg-6">
			                <div class="accordion__wrapper1">
			                    <div class="accordion" id="accordionExample">

			                        <!-- Admission -->
			                        <div class="accordion-item">
			                            <h2 class="accordion-header" id="headingOne">
			                                <button class="accordion-button" type="button" 
			                                    data-bs-toggle="collapse"
			                                    data-bs-target="#collapseOne"
			                                    aria-expanded="true"
			                                    aria-controls="collapseOne">
			                                    Quelles sont les conditions d’admission ?
			                                </button>
			                            </h2>
			                            <div id="collapseOne" class="accordion-collapse collapse show"
			                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			                                <div class="accordion-body">
			                                    <p>
			                                        L’admission au <strong>Collège Privé Euphrate</strong> 
			                                        se fait sur étude de dossier scolaire. 
			                                        L’élève doit fournir ses <strong>bulletins récents</strong>, 
			                                        une <strong>copie d’extrait de naissance</strong> 
			                                        et une <strong>fiche d’inscription</strong> dûment remplie.
			                                    </p>
			                                    <p>
			                                        Un entretien peut être organisé afin d’évaluer 
			                                        le niveau académique et le comportement de l’élève.
			                                    </p>
			                                </div>
			                            </div>
			                        </div>

			                        <!-- Séries -->
			                        <div class="accordion-item">
			                            <h2 class="accordion-header" id="headingTwo">
			                                <button class="accordion-button collapsed" type="button"
			                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
			                                    aria-expanded="false" aria-controls="collapseTwo">
			                                    Quelles séries sont proposées au second cycle ?
			                                </button>
			                            </h2>
			                            <div id="collapseTwo" class="accordion-collapse collapse"
			                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
			                                <div class="accordion-body">
			                                    <p>
			                                        Le Collège Privé Euphrate propose les séries suivantes :
			                                    </p>
			                                    <ul>
			                                        <li><strong>Série A</strong> (Littéraire)</li>
			                                        <li><strong>Série D</strong> (Scientifique)</li>
			                                    </ul>
			                                    <p>
			                                        L’orientation se fait selon les résultats académiques 
			                                        et les aptitudes de l’élève.
			                                    </p>
			                                </div>
			                            </div>
			                        </div>

			                        <!-- Moyenne passage -->
			                        <div class="accordion-item">
			                            <h2 class="accordion-header" id="headingThree">
			                                <button class="accordion-button collapsed" type="button"
			                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
			                                    aria-expanded="false" aria-controls="collapseThree">
			                                    Quelle moyenne faut-il pour passer en classe supérieure ?
			                                </button>
			                            </h2>
			                            <div id="collapseThree" class="accordion-collapse collapse"
			                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
			                                <div class="accordion-body">
			                                    <p>
			                                        Le passage en classe supérieure nécessite une 
			                                        <strong>moyenne annuelle conforme aux exigences nationales</strong>.
			                                    </p>
			                                    <p>
			                                        En général, une moyenne d’au moins 
			                                        <strong>10/20</strong> est requise, sous réserve 
			                                        de validation du conseil de classe.
			                                    </p>
			                                </div>
			                            </div>
			                        </div>

			                        <!-- Inscription -->
			                        <div class="accordion-item">
			                            <h2 class="accordion-header" id="headingFour">
			                                <button class="accordion-button collapsed" type="button"
			                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
			                                    aria-expanded="false" aria-controls="collapseFour">
			                                    Comment procéder à l’inscription ?
			                                </button>
			                            </h2>
			                            <div id="collapseFour" class="accordion-collapse collapse"
			                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
			                                <div class="accordion-body">
			                                    <p>
			                                        Les inscriptions se font directement à 
			                                        l’administration du collège à 
			                                        <strong>Grand-Lahou</strong>.
			                                    </p>
			                                    <p>
			                                        Les parents doivent fournir :
			                                    </p>
			                                    <ul>
			                                        <li>Bulletins de l’année précédente</li>
			                                        <li>Extrait de naissance</li>
			                                        <li>Photos d’identité</li>
			                                        <li>Frais d’inscription</li>
			                                    </ul>
			                                    <p>
			                                        Pour toute information complémentaire, 
			                                        veuillez contacter l’administration du collège.
			                                    </p>
			                                </div>
			                            </div>
			                        </div>

			                    </div>
			                </div>
			            </div>

			        </div>
			    </div>
			</div>
			<!--================= FAQ Accordion Section End Here =================-->
			<!--================= Administration Section Start Here =================-->
			<div class="instructor__area pt---115 pb---85 text-center">
			    <div class="container">
			        <div class="row">

			            <!-- Titre -->
			            <div class="col-lg-6 col-md-4 col-sm-6">
			                <div class="instructor__content instructor__content-one">
			                    <div class="instructors_lefts">
			                       <h6>Administration</h6>
			                       <h2>Service de Gestion <br> de l’Établissement</h2>
			                    </div>
			                </div>
			            </div>

			            <!-- Directeur des Études -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Directeur des Études">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Directeur des Études</h4>
			                        <p>Responsable Académique</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Adjoint au Directeur -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Adjoint au Directeur">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Adjoint au Directeur</h4>
			                        <p>Coordination Générale</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Chef de la Comptabilité -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Chef de la Comptabilité">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Chef de la Comptabilité</h4>
			                        <p>Gestion Financière</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Chef des Éducateurs -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Chef des Éducateurs">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Chef des Éducateurs</h4>
			                        <p>Discipline & Encadrement</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Inspecteur d’Orientation -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Inspecteur d’Orientation">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Inspecteur d’Orientation</h4>
			                        <p>Orientation & Suivi Scolaire</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Chargé du Service Social -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Service Social">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Chargé du Service Social</h4>
			                        <p>Accompagnement & Assistance</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Chef Service Informatique -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Chef Service Informatique">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Chef Service Informatique</h4>
			                        <p>Systèmes & Technologies</p>
			                    </div>
			                </div>
			            </div>

			            <!-- Agent de Sécurité -->
			            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
			                <div class="instructor__content">
			                    <div class="instructor__content-1">
			                        <img src="{{ asset('assets/images/instructor/03.jpg') }}" alt="Agent de Sécurité">
			                    </div>
			                    <div class="instructor__content-2">
			                        <h4>Agent de Sécurité</h4>
			                        <p>Sécurité & Surveillance</p>
			                    </div>
			                </div>
			            </div>

			        </div>
			    </div>
			</div>
			<!--================= Administration Section End Here =================-->
			<!--================= Appel à Candidature Section Start Here ================= -->
			<div class="instructor-section pt---100 pb---100">
			    <div class="container">
			        <div class="instructor-inner">
			            <div class="content">
			                <h1 class="instructor-title">
			                    Rejoignez-nous
			                </h1>

			                <p class="instructor-info">
			                    Le <strong>Collège Privé Euphrate</strong> de Grand-Lahou recrute 
			                    des professionnels qualifiés et engagés pour renforcer son équipe 
			                    pédagogique et administrative.
			                </p>
			                <p class="instructor-info">
			                    Si vous souhaitez évoluer dans un environnement structuré, 
			                    discipliné et orienté vers la performance, 
			                    nous vous invitons à soumettre votre candidature.
			                </p>
			            </div>

			            <a href="{{ route('contact') }}" class="instructor-btn">
			                Déposer ma candidature
			            </a>
			        </div>
			    </div>
			</div>
			<!--================= Appel à Candidature Section End Here ================= -->
                <!--================= Témoignages Section Start Here =================--> 
                <div class="react-clients react-clientso home-testimonial pt---90 pb---120">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2>Témoignages</h2>
                            <img src="{{ asset('assets/images/line.png') }}" alt="image">
                            <p>Ce que disent nos élèves et parents</p>
                        </div>

                        <div class="client-slider owl-carousel">

                            <!-- Témoignage 1 -->
                            <div class="single-client">
                                <div class="client-bottom">                                        
                                    <span class="client-author">
                                        <img src="{{ asset('assets/images/testimonial/testimonial.png') }}" alt="Parent">
                                    </span>
                                </div>                                    
                                <div class="client-content">
                                    <span class="client-title">
                                        Mme Kouadio <em>Parent d’élève</em>
                                    </span>
                                    <p>
                                        Le Collège Privé Euphrate offre un encadrement sérieux et rigoureux.
                                        Mon enfant a considérablement amélioré ses résultats grâce à la discipline
                                        et au suivi pédagogique de qualité.
                                    </p>
                                    <img class="comma" src="{{ asset('assets/images/testimonial/coma.png') }}" alt="image">
                                </div>                                
                            </div>

                            <!-- Témoignage 2 -->
                            <div class="single-client">
                                <div class="client-bottom">                                        
                                    <span class="client-author">
                                        <img src="{{ asset('assets/images/testimonial/testimonial.png') }}" alt="Élève">
                                    </span>
                                </div>                                    
                                <div class="client-content">
                                    <span class="client-title">
                                        Yao Serge <em>Élève en Terminale</em>
                                    </span>
                                    <p>
                                        Les enseignants sont disponibles et nous accompagnent vers la réussite.
                                        Grâce au Collège Privé Euphrate, je prépare mon BAC avec confiance.
                                    </p>
                                    <img class="comma" src="{{ asset('assets/images/testimonial/coma.png') }}" alt="image">
                                </div>                                 
                            </div>

                            <!-- Témoignage 3 -->
                            <div class="single-client">
                                <div class="client-bottom">                                        
                                    <span class="client-author">
                                        <img src="{{ asset('assets/images/testimonial/testimonial.png') }}" alt="Ancien élève">
                                    </span>
                                </div>                                    
                                <div class="client-content">
                                    <span class="client-title">
                                        Koffi Daniel <em>Ancien élève</em>
                                    </span>
                                    <p>
                                        Cette école m’a inculqué la discipline et le goût de l’effort.
                                        Aujourd’hui étudiant à l’université, je remercie mes enseignants
                                        pour leur encadrement exemplaire.
                                    </p>
                                    <img class="comma" src="{{ asset('assets/images/testimonial/coma.png') }}" alt="image">
                                </div>                                 
                            </div>

                        </div>
                    </div>
                </div>             
                <!--================= Témoignages Section End Here =================--> 



<div class="react_featured_online pt---100 pb---110">
    <div class="container"> 
        <div class="react__title__section-all">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Organisation Académique</h6>
                    <h2 class="react__tittle">Matières Enseignées & Équipe Pédagogique</h2>
                </div>                                
            </div>                            
        </div>                       

        <div class="row pt---30">

            <!-- Mathématiques -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/1.png') }}" alt="Mathématiques">
                    </div>
                    <div class="react-content">
                        <h3>Mathématiques</h3>
                        <ul class="react-lessones">
                            <li>👨 3 Hommes</li>
                            <li>👩 2 Femmes</li>
                            <li><strong>Total : 5 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>

            <!-- Français -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/2.png') }}" alt="Français">
                    </div>
                    <div class="react-content">
                        <h3>Français</h3>
                        <ul class="react-lessones">
                            <li>👨 2 Hommes</li>
                            <li>👩 3 Femmes</li>
                            <li><strong>Total : 5 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>

            <!-- Anglais -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/3.png') }}" alt="Anglais">
                    </div>
                    <div class="react-content">
                        <h3>Anglais</h3>
                        <ul class="react-lessones">
                            <li>👨 2 Hommes</li>
                            <li>👩 2 Femmes</li>
                            <li><strong>Total : 4 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>

            <!-- Physique-Chimie -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/4.png') }}" alt="Physique Chimie">
                    </div>
                    <div class="react-content">
                        <h3>Physique – Chimie</h3>
                        <ul class="react-lessones">
                            <li>👨 3 Hommes</li>
                            <li>👩 1 Femme</li>
                            <li><strong>Total : 4 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>

            <!-- SVT -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/5.png') }}" alt="SVT">
                    </div>
                    <div class="react-content">
                        <h3>Sciences de la Vie et de la Terre (SVT)</h3>
                        <ul class="react-lessones">
                            <li>👨 1 Homme</li>
                            <li>👩 2 Femmes</li>
                            <li><strong>Total : 3 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>

            <!-- Histoire-Géographie -->
            <div class="col-md-6">
                <div class="item__inner">                                    
                    <div class="icon">
                        <img src="{{ asset('assets/images/featured/6.png') }}" alt="Histoire Géographie">
                    </div>
                    <div class="react-content">
                        <h3>Histoire – Géographie</h3>
                        <ul class="react-lessones">
                            <li>👨 2 Hommes</li>
                            <li>👩 2 Femmes</li>
                            <li><strong>Total : 4 Enseignants</strong></li>
                        </ul>
                    </div>                                    
                </div>
            </div>
            <!-- Espagnol -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/1.png') }}" alt="Espagnol">
			        </div>
			        <div class="react-content">
			            <h3>Espagnol</h3>
			            <ul class="react-lessones">
			                <li>👨 1 Homme</li>
			                <li>👩 2 Femmes</li>
			                <li><strong>Total : 3 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- Allemand -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/2.png') }}" alt="Allemand">
			        </div>
			        <div class="react-content">
			            <h3>Allemand</h3>
			            <ul class="react-lessones">
			                <li>👨 1 Homme</li>
			                <li>👩 1 Femme</li>
			                <li><strong>Total : 2 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- Philosophie -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/3.png') }}" alt="Philosophie">
			        </div>
			        <div class="react-content">
			            <h3>Philosophie</h3>
			            <ul class="react-lessones">
			                <li>👨 2 Hommes</li>
			                <li>👩 1 Femme</li>
			                <li><strong>Total : 3 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- Musique -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/4.png') }}" alt="Musique">
			        </div>
			        <div class="react-content">
			            <h3>Musique</h3>
			            <ul class="react-lessones">
			                <li>👨 1 Homme</li>
			                <li>👩 1 Femme</li>
			                <li><strong>Total : 2 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- Arts Plastiques -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/5.png') }}" alt="Arts Plastiques">
			        </div>
			        <div class="react-content">
			            <h3>Arts Plastiques</h3>
			            <ul class="react-lessones">
			                <li>👨 1 Homme</li>
			                <li>👩 2 Femmes</li>
			                <li><strong>Total : 3 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- EPS -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/6.png') }}" alt="Éducation Physique et Sportive">
			        </div>
			        <div class="react-content">
			            <h3>Éducation Physique et Sportive (EPS)</h3>
			            <ul class="react-lessones">
			                <li>👨 3 Hommes</li>
			                <li>👩 1 Femme</li>
			                <li><strong>Total : 4 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			<!-- EDHC -->
			<div class="col-md-6">
			    <div class="item__inner">                                    
			        <div class="icon">
			            <img src="{{ asset('assets/images/featured/1.png') }}" alt="EDHC">
			        </div>
			        <div class="react-content">
			            <h3>Éducation aux Droits de l’Homme et à la Citoyenneté (EDHC)</h3>
			            <ul class="react-lessones">
			                <li>👨 1 Homme</li>
			                <li>👩 1 Femme</li>
			                <li><strong>Total : 2 Enseignants</strong></li>
			            </ul>
			        </div>                                    
			    </div>
			</div>

			        </div>
			    </div>
			</div>

        </div>

        <!--================= Wrapper End Here =================-->

       



<style type="text/css">
	.overview-contents .item {
    margin-bottom: 60px;
}

.content-picture img {
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}


.instructor__area .instructor__content {
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 30px 40px 0 rgba(1, 11, 60, .06);
    width: 100%;
    transition: all .3s ease-out 0s;
}
</style>
    </div>
</html>
@endsection

