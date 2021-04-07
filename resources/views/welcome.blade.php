<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- main css style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <!-- responsive css style -->
        <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
        <link rel="stylesheet" media="screen and (min-width: 1100px)" href="css/widescreen.css"> --}}
        <title>Seraplast | Compagnie de finance</title>
    </head>
    <body class="antialiased">
        <!-- navbar -->
        <div id="navbar">
            <h1 class="logo">
                <i class="fab fa-artstation text-primary"></i>
                <span class="text-primary">Sera</span>Plast
            </h1>
            <ul>
                <li><a href="#showcase">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">A Propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <!-- showcase header -->
        <header id="showcase">
            <div class="showcase-content">
                <h1 class="l-heading">Le chemin vers le succès</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia vel accusantium
                    praesentium error
                    delectus
                    doloremque perspiciatis corrupti mollitia beatae enim.</p>
                <a href="#" class="btn">Lire la suite</a>
            </div>
        </header>

        <!-- services section -->
        <section id="services" class="bg-light py-1">
            <div class="container">
                <h2 class="m-heading text-center">Les <span class="text-primary shadowy">Services</span></h2>
                <div class="items">
                    <div class="item">
                        <i class="fa fa-university fa-2x"></i>
                        <div>
                            <h3>Investissement</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, corporis.</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fa fa-book-reader fa-2x"></i>
                        <div>
                            <h3>Gestion de portefeuille</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, corporis.</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fa fa-pencil-alt fa-2x"></i>
                        <div>
                            <h3>Impôts</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, corporis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about section -->
        <section id="about" class="">
            <div class="about-img">
                <!-- image in css -->
            </div>
            <div class="about-text bg-dark p-2">
                <h2 class="m-heading"><span class="text-primary">A propos </span>de nous</h2>
                <p class="py-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, sit autem ipsa eaque
                    placeat repellendus
                    vitae dolorem blanditiis commodi dignissimos! Numquam tempore repellat neque ab, quaerat sunt odit
                    ipsam. Architecto?</p>
                <h3><a class="info-link" href="show.html">Notre Equipe</a></h3><small><a class="info-link"
                        href="employes.html">... voir infos</a></small>
                <ul class="list">
                    <li>Ed Smith: PDG</li>
                    <li>Brad Miller: CFO</li>
                    <li>Karen Will: Directeur Comptable</li>
                    <li>Sam Samsung: Directeur Finance</li>
                    <li>Mandy Doe: Directeur Marketing Sénior</li>
                </ul>
            </div>
        </section>

        <!-- clients section -->
        <section id="clients" class="py-1">
            <div class="container">
                <h2 class="m-heading text-center"><span class="text-primary shadowy">Nos </span>Client</h2>
                <div class="items">
                    <img src="../img/logo2.png" alt="Client">
                    <img src="../img/logo3.png" alt="Client">
                    <img src="../img/logo4.png" alt="Client">
                    <img src="../img/logo5.png" alt="Client">
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section id="contact">
            <div class="contact-form bg-primary p-2">
                <h2 class="m-heading">Contactez-nous</h2>
                <p>Veuillez remplir le formulaire pour nous contacter</p>
                <form>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Numero de telephone</label>
                        <input type="text" name="phone" id="phone" placeholder="Entrez votre numero de telephone">
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea type="text" name="message" id="message" placeholder="Entrez votre message"></textarea>
                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-dark">
                </form>
            </div>
            <div class="map"></div>
        </section>

        <footer id="main-footer" class="bg-dark p-2 text-center">
            <div class="container">
                <p>Droits d'auteur fserapian &copy; 2019 | Seraplast |
                    Tous les droits sont réservés</p>
            </div>
        </footer>

        <!-- jquery file -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- main js file -->
        <script src="js/main.js"></script>
        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=initMap"
            async defer></script>
    </body>
</html>
