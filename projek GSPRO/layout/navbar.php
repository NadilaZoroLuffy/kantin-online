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
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">GESJAN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-1 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Contact</a>
              </li>

              <?php if(isset($_SESSION["username"])): ?>
              <li class="nav-item">
                <a href="" class="btn px-4 py-2 me-3">Halo, <?= $_SESSION["nama_lengkap"]; ?></a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="btn btn-outline-primary px-4 py-2">Logout</a>
              </li>
                <?php endif; ?>

                <?php if(!isset($_SESSION["username"])): ?>
              <li class="nav-item">
                <a href="login/index.php" class="btn btn-primary px-4 py-2">Login</a>
              </li>
              <li class="nav-item">
                <a href="register/index.php" class="btn btn-outline-primary px-4 py-2">Register</a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
       <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>