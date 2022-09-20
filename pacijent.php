
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Stomatoloska ordinacija - Unos pacijenta</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">


     <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Stomatološka ordinacija</strong>
      </a>
      <a href="#" class="navbar-brand d-flex align-items-right">
        <strong><a href="lecenje.php" style="color: white; text-decoration: none;">Lecenje</strong>
        <strong><a href="stomatolog.php" style="color: white; text-decoration: none;">Stomatolog</strong>
        <strong><a href="pregled.php" style="color: white; text-decoration: none;">Pregled </strong>
        <strong><a href="index.php" style="color: white; text-decoration: none;">Odjavi se</strong>
      </a>
    </div>
  </div>
</header>   
    
<main class="form-signin w-100 m-auto">

    <img class="mb-4" src="images/ordinacija.jpg" alt="" width="100" height="72">
    <h1 class="h3 mb-3 fw-normal">Unesite pacijenta:</h1>

   <form action="pacijentsnimi.php" method="post"> 
    <div class="form-floating">
      <input type="text" class="form-control"  placeholder="ime" name="ImePacijenta">
      <label for="name">Ime</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control"  placeholder="prezime" name="PrezimePacijenta">
      <label for="name">Prezime</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control"  placeholder="datum" name="DatumRodjenja">
      <label for="name">Datum rođenja</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control"  placeholder="telefon" name="TelefonPacijenta">
      <label for="name">Telefon</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-20 btn btn-lg btn-primary" type="submit">Dodaj</button>
   </form>
    <p class="mt-5 mb-3 text-muted">&copy; <a href="index.php">Stomatološka ordinacija</p>
 
</main>


    
  </body>
</html>
