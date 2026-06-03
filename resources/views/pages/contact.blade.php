@extends('layouts.app')

@section('title', 'Contact | CP Euphrate')

@section('content')
<!--================= Wrapper Start Here =================-->
<div class="react-wrapper">
    <div class="react-wrapper-inner">
        <!--================= Breadcrumbs Section Start Here =================-->
        <div class="react-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Contact - Collège Privé Euphrate">
                <img class="mobile" src="{{ asset('assets/images/breadcrumbs/1.jpg') }}" alt="Contact - Collège Privé Euphrate">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Contactez-nous</h1>
                            <p class="breadcrumbs-subtitle">
                                Nous sommes à votre écoute pour toute information concernant les inscriptions,
                                les cours en ligne ou la vie scolaire.
                            </p>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="index.html">Accueil</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Breadcrumbs Section End Here =================-->
        <div id="react-contact" class="react-contact-page pt---100">
            <div class="container">
                <div class="row pb---96">

                    <!-- Informations de contact -->
                    <div class="col-lg-4 pt---10">
                        <ul class="address-sec">

                            <li>
                                <em class="icon">
                                    <img src="{{ asset('assets/images/contact/2.png') }}" alt="Adresse">
                                </em>
                                <span class="text">
                            <em>Adresse</em>
                            Grand-Lahou, Côte d’Ivoire<br>
                            Collège Privé Euphrate
                        </span>
                            </li>

                            <li>
                                <em class="icon">
                                    <img src="{{ asset('assets/images/contact/3.png') }}" alt="Contact">
                                </em>
                                <span class="text">
                            <em>Contact</em>
                            <a href="#">Téléphone : +225 07 07 79 11 74</a>
                            <a href="#">Email : cpeuphrate@gmail.com</a>
                        </span>
                            </li>

                            <li>
                                <em class="icon">
                                    <img src="{{ asset('assets/images/contact/4.png') }}" alt="Horaires">
                                </em>
                                <span class="text">
                            <em>Heures d’ouverture</em>
                            Lundi - Vendredi : 07h30 - 17h30 <br>
                            Samedi : 08h00 - 12h00
                        </span>
                            </li>

                        </ul>
                    </div>

                    <!-- Formulaire -->
                    <div class="col-lg-8">

                        <div class="react-blog-form">
                            <h2 class="contact-title">
                                Une question ? <br> N’hésitez pas à nous contacter.
                            </h2>

                            <div id="blog-form" class="blog-form">

                                <?php
                                // Afficher le message de succès
                                if (isset($_GET['success']) && $_GET['success'] == 1) {
                                    echo '<div class="alert alert-success" style="padding: 15px; margin-bottom: 20px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
                                        <strong>Merci!</strong> Votre message a été envoyé avec succès. Nous vous contacterons bientôt.
                                    </div>';
                                }

                                // Afficher le message d'erreur
                                if (isset($_GET['error'])) {
                                    echo '<div class="alert alert-danger" style="padding: 15px; margin-bottom: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;">
                                        <strong>Erreur!</strong> Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer.
                                    </div>';
                                }
                                ?>

                                <form id="contact-form" method="POST" action="{{ route('contact.send') }}">
                @csrf
                @csrf

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="back-input">
                                                <input id="name" type="text" name="name" placeholder="Nom et Prénoms" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 pdl-5">
                                            <div class="back-input">
                                                <input id="email" type="email" name="email" placeholder="Adresse Email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="back-input">
                                                <input id="subject" type="text" name="subject" placeholder="Objet du message" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 pdl-5">
                                            <div class="back-input">
                                                <input id="phone" type="text" name="phone" placeholder="Téléphone">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="back-textarea">
                                                <textarea id="message" name="message" placeholder="Votre message..." required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="back-btn">
                                                Envoyer le message
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Section Carte -->
                <div class="row pb---110">
                    <div class="col-lg-12">
                        <div class="react-contacts pt-106">
                            <div class="react-image-maping">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.946158004622!2d-5.009313324214978!3d5.27107999470704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc00935513b1605%3A0xd1572657ab506755!2sCollège%20Privée%20L'euphrate!5e0!3m2!1sen!2sci!4v1772236704714!5m2!1sen!2sci"
                                    width="100%"
                                    height="450"
                                    style="border:0; border-radius: 8px;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--================= Wrapper End Here =================-->
@endsection

