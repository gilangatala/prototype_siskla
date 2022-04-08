<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Klasifikasi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Sistem Klasifikasi</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-secondary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/UMG.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Sistem Klasifikasi</h1>
            <h1 class="masthead-heading text-uppercase mb-0">Waktu Penyelesaian Skripsi</h1>
            <h1 class="masthead-subheading text-uppercase mb-0">Mahasiswa Teknik Informatika</h1>
            <h1 class="masthead-subheading text-uppercase mb-0">Universitas Muhammadiyah Gresik</h1>
            <br>
            <!-- Masthead Subheading-->
            <!-- <p class="masthead-subheading font-weight-light mb-0">Mahasiswa Teknik Informatika Universitas Muhammadiyah Gresik</p>
                <p class="masthead-subheading font-weight-light mb-0">Universitas Muhammadiyah Gresik</p> -->
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="login">
    
            <div class="container">
            
                <!-- Portfolio Section Heading
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2> -->
                <div class="container d-flex align-items-center flex-column">
                <?php if(isset($_GET["info"])){ echo "<span class='btn btn-danger col-md-6'>Username dan Password Tidak Terdaftar</span>";} ?>
                <br>
                <form method="POST" action="proses_login.php" class="container d-flex align-items-center flex-column">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                </div>
                <br>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <input style="margin-left: 0px;" type="submit" name="submit" value="LOGIN" class="btn btn-info col-md-12"/>
                </div>
                </form>
            </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>