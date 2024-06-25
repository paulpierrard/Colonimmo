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
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between " id="navbarSupportedContent">
          <div id="left-nav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item pe-5 ps-5">
                <a class="nav-link active text-uppercase" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item pe-5">
                <a class="nav-link active" aria-current="page" href="Qui_somme_nous.php">Qui somme nous ?</a>
              </li>
              <li class="nav-item pe-5">
                <a class="nav-link" href="contact.php">Contacts</a>
              </li>
              <li class="nav-item pe-5">
                <a class="nav-link" href="actualite.php">Actualités</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="boutique.php">Boutique</a>
              </li>
              <li class="nav-item dropdown pe-5">
                <a class="nav-link dropdown-toggle" href="boutique.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="alimentation.php">Alimentations</a></li>
                  <li><a class="dropdown-item" href="Fourmis.php">Fourmis</a></li>
                  <li><a class="dropdown-item" href="accessoire.php">Accessoires</a></li>
                  <li><a class="dropdown-item" href="foumiliere_&_adc.php">Foumilieres & adc</a></li>
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