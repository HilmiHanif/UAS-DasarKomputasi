<?php
date_default_timezone_set("Asia/Jakarta")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>My Portofolio | Hilmi Hanif</title>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
      <div class="container">
      <img src="img/profil.png"  class="rounded-circle me-2" alt="" width="25" >
        <a class="navbar-brand" href="#">Hilmi Hanif</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Pojects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center" id="home">
      <img src="img/profil.png" alt="profil" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4 fw-bold text-white">Hilmi Hanif</h1>
      <p class="lead fw-bolder text-white">Web Developer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L34.3,128C68.6,128,137,128,206,149.3C274.3,171,343,213,411,224C480,235,549,213,617,176C685.7,139,754,85,823,80C891.4,75,960,117,1029,144C1097.1,171,1166,181,1234,181.3C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="fw-bolder">About Me</h2>
          </div>
        </div>
        <div class="row justify-content-evenly fs-5">
          <div class="col-md-4">
            <p>Hai Saya <span class="fw-bolder">Hilmi Hanif</span> Mahasiswa Universitas Dian Nuswantoro Fakultas Ilmu Komputer Program Studi Teknik Informatika</p>
          </div>
          <div class="col-md-4">
            <p>Saya mimiliki <span class="fw-bolder">Cita Cita</span> tuntuk mendirikan Perusahaan di bidang teknologi yang dapat membantu masyarakat dalam melaksanakan kegiatan yang berbasis Online</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ebebeb"
          fill-opacity="1"
          d="M0,96L30,128C60,160,120,224,180,240C240,256,300,224,360,186.7C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,197.3C960,171,1020,117,1080,128C1140,139,1200,213,1260,218.7C1320,224,1380,160,1410,128L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="fw-bolder">My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="Projects/project1.jpg" class="card-img-top" alt="Project1">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="Projects/project2.jpg" class="card-img-top" alt="project2">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
          <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="Projects/project3.jpg" class="card-img-top" alt="projrct3">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
            <div class="col-md-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="Projects/project4.jpg" class="card-img-top" alt="projrct3">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,160L30,181.3C60,203,120,245,180,229.3C240,213,300,139,360,133.3C420,128,480,192,540,192C600,192,660,128,720,101.3C780,75,840,85,900,122.7C960,160,1020,224,1080,218.7C1140,213,1200,139,1260,117.3C1320,96,1380,128,1410,144L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="contact">
      <div>
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2 class="fw-bolder">Contact Me</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="proses.php" method="post" name="contact-form">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" name="name"/>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" />
                </div>
                <div class="mb-3">
                  <label for="phonenumber" class="form-label">Phone number</label>
                  <input type="tel" class="form-control" id="phonenumber" aria-describedby="number" name="phone"/>
                </div>
                <div class="mb-3">
                  <label for="massage" class="form-label">Massage</label>
                  <textarea class="form-control" id="massage" rows="3" name="massage"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" value = <?php  echo date("h:i:sa");?>>Kirim</button>
              </form>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#6c757d"
            fill-opacity="1"
            d="M0,160L30,144C60,128,120,96,180,117.3C240,139,300,213,360,234.7C420,256,480,224,540,192C600,160,660,128,720,133.3C780,139,840,181,900,213.3C960,245,1020,267,1080,240C1140,213,1200,139,1260,128C1320,117,1380,171,1410,197.3L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
          ></path>
        </svg>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center pb-3">
      <p>Create with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/hani.eef/" class="text-white fw-bold">Hilmi Hanif</a></p>
    </footer>

    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <script>
    VANTA.BIRDS({
      el: "#home",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00
    })
</script>
  </body>
</html>
