<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colonimmo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/commun_style.css">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between " id="navbarSupportedContent">
            <div id="left-nav">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item pe-5 ps-5">
                  <a class="nav-link active text-uppercase" aria-current="page" href="index.html">Accueil</a>
                </li>
                <li class="nav-item pe-5">
                  <a class="nav-link active" aria-current="page" href="Qui_somme_nous.html">Qui somme nous ?</a>
                </li>
                <li class="nav-item pe-5">
                  <a class="nav-link" href="contact.html">Contacts</a>
                </li>
                <li class="nav-item pe-5">
                  <a class="nav-link" href="actualite.html">Actualités</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="boutique.html">Boutique</a>
                </li>
                <li class="nav-item dropdown pe-5">
                  <a class="nav-link dropdown-toggle" href="boutique.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="alimentation.html">Alimentations</a></li>
                    <li><a class="dropdown-item" href="Fourmis.html">Fourmis</a></li>
                    <li><a class="dropdown-item" href="accessoire.html">Accessoires</a></li>
                    <li><a class="dropdown-item" href="foumiliere_&_adc.html">Foumilieres & adc</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="pe-5 ">
              <div id="right-nav">
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn " type="submit">Search</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <section>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/sorties-nature-4-forets-ou-il-fait-bon-flaner.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="logo-carousel"><img src="assets/img/logo_bg_claire.png" alt="logo"></h1>
              <h2 class="text-uppercase ">bienvenue sur Colonimmo</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/cycle-vie-fourmis-072005.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/fourmilierearboricole.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
    </section>
    <footer>
      <div class="d-flex flex col-xl-12">
        <div class="col-xl-3">
          <img src="assets/img/logo_bg_sombre.png" alt="logogo blanc du site">
        </div>
        <div class="col-xl-3">
          <ul>
            <li><a href=""></a>eziej</li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
        <div class="col-xl-3">
          <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li>

            </li>
          </ul>
        </div>
        <div class="col-xl-3">
          <p>dscsdfqfddsqssdx</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/scripte.js"></script>
  </body>
</html>