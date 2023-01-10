<!-- 
  bOOSTRAP 5
  COL = Dinamis
  COL-xx= Statis punya pendirian

  -- Versi hp dan laptop --
  COL-XXL = VERSI  DESKTOP YG LBH BSAR
  COL-xl = versi desktop
  COL-lg = versi laptop
  COL-md = versi ipad
  COL = versi hp jadul & Sekarang
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan web</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="icon" type="image/x-icon" href="assets/icons/sme.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">GESJAN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-1 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-primary me-1 p-3">Login</button>
              <button class="btn btn-outline-danger p-3">Register</button>
            </form>
          </div>
        </div>
      </nav>
      <main class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="banner">
                    <img src="assets/icons//border.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12">
                <h1 class="heading">Categories</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
          <div class="col-6 col-md-4 col-lg-2 col-xl-2 mb-3">
              <div class="card card-categories py-3">
                <div class="img-card text-center">
                  <img src="assets/icons/snack.png" class="img-fluid">
                </div>
                <div class="text-card text-center mt-2 fw-bold">Snack</div>
              </div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 col-xl-2 mb-3">
            <div class="card card-categories py-3">
              <div class="img-card text-center">
                <img src="assets/icons/drink.png" class="img-fluid">
              </div>
              <div class="text-card text-center mt-2 fw-bold">Snack</div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 col-xl-2 mb-3">
          <div class="card card-categories py-3">
            <div class="img-card text-center">
              <img src="assets/icons/burger.png" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2 fw-bold">Food</div>
          </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2 col-xl-2 mb-3">
        <div class="card card-categories py-3">
          <div class="img-card text-center">
            <img src="assets/icons/milk.png" class="img-fluid">
          </div>
          <div class="text-card text-center mt-2 fw-bold">Milk</div>
        </div>
    </div>
      <div class="col-6 col-md-4 col-lg-2 col-xl-2 mb-3">
        <div class="card card-categories py-3">
          <div class="img-card text-center">
            <img src="assets/icons/roti.png" class="img-fluid">
          </div>
          <div class="text-card text-center mt-2 fw-bold">Bread</div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-12">
          <h1 class="heading">Popular Product</h1>
      </div>
  </div>
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-lg-3 col-xl-3 col-md-6 col-12 mb-5">
      <div><img src="assets/icons/snak.jpg" class="img-fluid"></div>
      <div class="mt-2">
        <h6>Canitos</h6>
        <div class="harga">Rp. 15.000,00</div>
      </div>
    </div>
    <div class="col-lg-3 col-xl-3 col-md-6 col-12 mb-5">
      <div><img src="assets/icons/oreo.jpg" class="img-fluid"></div>
      <div class="mt-2">
        <h6>Oreo</h6>
        <div class="harga">Rp. 8.000,00</div>
      </div>
    </div>
    <div class="col-lg-3 col-xl-3 col-md-6 col-12 mb-5">
      <div><img src="assets/icons/snak.jpg" class="img-fluid"></div>
      <div class="mt-2">
        <h6>Roti</h6>
        <div class="harga">Rp. 13.000,00</div>
      </div>
    </div>
    <div class="col-lg-3 col-xl-3 col-md-6 col-12 mb-5">
      <div><img src="assets/icons/oreo.jpg" class="img-fluid"></div>
      <div class="mt-2">
        <h6>Jus Jeruk </h6>
        <div class="harga">Rp. 7.000,00</div>
      </div>
    </div>
  </div>
      </div> 
      </main>
      <footer class="my-4 text-center">
        Copyright 2022 | All Right Reserved | Nadila Aprilla 
      </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>