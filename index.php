<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap Icons CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Self CSS -->
  <link href="style.css" rel="stylesheet" />

  <title>Barberian | Your Haircut Solution</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" data-aos="fade-bottom" data-aos-duration="500">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">BARBERIAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#price">Price</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <?php if (isset($_SESSION["name"])) {
          } else { ?>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-primary" href="login.php">Sign Up / Login</a>
            </li>
          <?php } ?>

          <?php if (isset($_SESSION["name"])) { ?>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-danger ms-2" href="logout.php">Log Out</a>
            </li>
          <?php } else {
          } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Banner -->
  <div class="container-fluid banner d-flex align-items-center">
    <div class="container text-center">
      <h1 class="text-light display-1 fw-bold">BARBERIAN</h1>
      <h4 class="lead text-light">THE PERFECT HAIRCUT SOLUTION IN ANY SITUATION</h4>
      <?php if (isset($_SESSION["name"])) { ?>
        <a href="https://wa.me/6281234567890"><button type="button" class="btn btn-light btn-outline-dark btn-lg text-center mt-5">Make a Reservation Now</button></a>
      <?php } else { ?>
        <a href="login.php"><button type="button" class="btn btn-light btn-outline-dark btn-lg text-center mt-5">Log In First For Make a Reseravtion</button></a>
      <?php } ?>

    </div>
  </div>
  <!-- Akhir Banner -->

  <!-- About -->
  <section id="about" data-aos="fade-up" data-aos-duration="500">
    <div class="container-fluid">
      <div class="row text-center mt-5">
        <div class="col mb-3 mt-5">
          <h2 class="fw-bold">About Us</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center fs-5 mx-auto">
        <div class="col-md-8 mb-3">
          <p>
            Welcome to Barberian, your number one source for all things Hairstyle. We're dedicated to giving you the very best of Barbershop, with a focus on giving best services, best haircut, best equipment.
            Founded in 2022 by Dikky Setiyanto, Barberian has come a long way from its beginnings in Indonesia. When Dikky Setiyanto first started out, his passion for the perfect haircut solution in any situation drove them to make online barbershop order system so that Barberian can offer you unforgettable experience. We now serve customers all over place in Indonesia, and are thrilled that we're able to turn our passion into our own website.
            we hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- Features -->
  <section id="features" class="w-100 mx-auto mb-5 pb-3" data-aos="fade-up" data-aos-duration="500">
    <div class="container">
      <div class="row text-center mt-2">
        <div class="col-md-8 mx-auto col mb-3 mt-4">
          <h2 class="text-center fw-bold mb-3">Why Choose Us</h2>
          <div id="carouselExampleCaptions" class="carousel slide border border-5 border-dark" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="img/img1.jpg" class="d-block w-100" alt="img1">
                <div class="carousel-caption d-none d-md-block">
                  <h5>PROFESSIONAL BARBER</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/img2.jpg" class="d-block w-100" alt="img2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>COMFORTABLE PLACE</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/img3.jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>HYGENIC EQUIPMENT</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="img/img4.jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>AFFORDABLE PRICE</h5>
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
        </div>
      </div>
    </div>
  </section>
  <!-- Features End -->

  <!-- Price List -->
  <section id="price" class="mb-5 mt-5">
    <div class="container">
      <div class="row text-center mt-4">
        <div class="col mb-3">
          <h2 class="fw-bold" data-aos="fade-in">Price List</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-duration="500">
          <div class="card">
            <img src="img/model/model1.jpg" class="card-img-top" alt="Regular Haircut">
            <div class="card-body">
              <h5 class="card-title">Regular Haircut</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 45k IDR</h6>
              <p class="card-text">A regular men's grooming service. Starting with cleaning the face with a cold towel then cutting hair and shampooing, then cleaning the face with a warm towel, getting a head and back massage then ending with the application of tonic or pomade.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
          <div class="card">
            <img src="img/model/model2.jpg" class="card-img-top" alt="Kids Haircut">
            <div class="card-body">
              <h5 class="card-title">Kids Haircut</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 45k IDR</h6>
              <p class="card-text">A complete kids grooming service. Starting with cleaning the face with a cold towel then cutting hair and shampooing, then cleaning the face with a warm towel, getting a head and back massage then ending with the application of tonic or pomade.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400">
          <div class="card">
            <img src="img/model/model3.jpg" class="card-img-top" alt="Premium Haircut">
            <div class="card-body">
              <h5 class="card-title">Premium Haircut</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 65k IDR</h6>
              <p class="card-text">Cutting your hair and shampooing your hair, then cleaning your face with a warm towel, then applying a hair mask to keep your hair healthy & nourished, getting a head and back massage, then ending with the application of a tonic or pomade.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-duration="500">
          <div class="card">
            <img src="img/model/model4.jpg" class="card-img-top" alt="Gentlemen Grooming">
            <div class="card-body">
              <h5 class="card-title">Gentlemen Grooming</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 85k IDR</h6>
              <p class="card-text">Cutting hair and shampooing, then cleaning the face with a warm towel, getting a head and back massage then ending with the application of tonic or pomade.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
          <div class="card">
            <img src="img/model/model7.jpg" class="card-img-top" alt="Hair Coloring">
            <div class="card-body">
              <h5 class="card-title">Hair Coloring</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 135k IDR</h6>
              <p class="card-text">Color your hair (without bleaching) perfectly according to your dream color with our experienced barberman.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="400">
          <div class="card">
            <img src="img/model/model6.jpg" class="card-img-top" alt="Beard Shaving">
            <div class="card-body">
              <h5 class="card-title">Beard Shaving</h5>
              <h6 class="card-subtitle mb-2 text-muted">Price: 45k IDR</h6>
              <p class="card-text">Starting with a hot towel to relax the facial skin and open the pores of the face then followed by a comfortable shave.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Price List End -->

  <!-- Blog -->
  <section id="blog" class="mb-5">
    <div class="container">
      <div class="row mt-5 mb-3">
        <div class="col text-center mt-3">
          <h2 class="fw-bold">Blog & Articles</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-duration="500">
          <div class="card">
            <img src="img/blog/blog1.jpg" class="card-img-top" alt="Blog 1">
            <div class="card-body">
              <h5 class="card-title">Bottleneck Bangs Are the Perfect Way to Ease Yourself Into Full Fringe</h5>
              <h6 class="card-subtitle mb-2 text-muted">Hairstyle</h6>
              <p class="card-text">And they're way cuter than they sound.</p>
              <a href="https://www.instyle.com/hair/bottleneck-bangs" class="btn btn-dark">Read More...</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
          <div class="card">
            <img src="img/blog/blog2.jpg" class="card-img-top" alt="Blog 2">
            <div class="card-body">
              <h5 class="card-title">Here's What To Do If You're Losing Way Too Much Hair Right Now</h5>
              <h6 class="card-subtitle mb-2 text-muted">Treatment</h6>
              <p class="card-text">Trichologists get to the *root* of this problem.</p>
              <a href="https://www.instyle.com/hair/why-am-i-losing-so-much-hair" class="btn btn-dark">Read More...</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
          <div class="card">
            <img src="img/blog/blog3.jpg" class="card-img-top" alt="Blog 3">
            <div class="card-body">
              <h5 class="card-title">5 Ways to Have Healthy Hair After Turning 40</h5>
              <h6 class="card-subtitle mb-2 text-muted">Tips & Tricks</h6>
              <p class="card-text">These expert tips are simple.</p>
              <a href="https://www.instyle.com/hair/how-to-keep-hair-healthy-women-over-40" class="btn btn-dark">Read More...</a>
            </div>
          </div>
        </div>
        <!-- Blog End -->

        <!-- Contact Us -->
        <section id="contact">
          <div class="container">
            <div class="row mt-5 mb-5">
              <div class="col text-center mt-4">
                <h2 class="fw-bold">Contact Us</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8 mb-5">
                <div class="alert alert-light alert-dismissible fade show d-none my-alert" role="alert">
                  <strong>Thank You!</strong> We have received your message.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form name="barberian-contact-form">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-dark btn-kirim">Submit</button>
                  <button class="btn btn-dark btn-loading d-none" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </form>
              </div>
            </div>
        </section>
        <!-- Contact Us End -->

        <!-- Question -->
        <section id="question">
          <div class="container">
            <div class="row mt-5 mb-3">
              <div class="col text-center mt-4">
                <h2 class="fw-bold">Got a Questions?</h2>
              </div>
            </div>
            <div class="row text-center">
              <h3 class="bi bi-geo-alt" data-aos="fade-in" data-aos-duration="500"></h3>
              <p class="pb-3" data-aos="fade-in" data-aos-duration="500">Jalan Lembur 3 No. 60A, RT01/RW06, Kel. Jatirangga, Kec. Jatisampurna, Kota Bekasi, 17434</p>
              <a class="text-reset text-decoration-none" href="https://www.instagram.com/dikkysetiyanto">
                <h3 class="bi bi-instagram" data-aos="fade-in" data-aos-duration="500" data-aos-delay="200"></h3>
              </a>
              <p class="pb-3" data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">barberian.id</p>
              <h3 class="bi bi-telephone" data-aos="fade-in" data-aos-duration="500" data-aos-delay="400"></h3>
              <p class="pb-3 mb-3" data-aos="fade-in" data-aos-duration="500" data-aos-delay="400">081234567890<br><br><br></p>
            </div>
        </section>
        <!-- Question End -->

        <!-- Footer -->
        <footer>
          <div class="row text-center">
            <p>Copyright &copy; 2022 | Dikky Setiyanto</p>
          </div>
        </footer>
        <!-- Footer End -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script>
          gsap.from('.banner h1', {
            duration: 1.25,
            x: 150,
            opacity: 0
          })
          gsap.from('.banner h4', {
            duration: 1.25,
            x: -150,
            opacity: 0
          })
          gsap.from('.banner button', {
            duration: 1.25,
            y: 150,
            opacity: 0
          })
          gsap.from('body', {
            duration: 1.5,
            opacity: 0
          })
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

        <script>
          const scriptURL = 'https://script.google.com/macros/s/AKfycbzJkw3I4b0FTfLcjF3Z2qz3WeGVpxgewVpAK2E-NuKSWuFqmpnv1SOAAPMS0leZtiYvog/exec'
          const form = document.forms['barberian-contact-form']
          const btnKirim = document.querySelector('.btn-kirim')
          const btnLoading = document.querySelector('.btn-loading')
          const myAlert = document.querySelector('.my-alert')

          form.addEventListener('submit', e => {
            e.preventDefault()
            // Ketika Tombol Submit Diklik
            // Tampilkan Tombol Loading Hilangkan Tombol Kirim
            btnLoading.classList.toggle('d-none')
            btnKirim.classList.toggle('d-none')


            fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
              })
              .then(response => {
                // Tampilkan Tombol Kirim Hilangkan Tombol Loading
                btnLoading.classList.toggle('d-none')
                btnKirim.classList.toggle('d-none')
                // Tampilkan Alert
                myAlert.classList.toggle('d-none')
                // Kosongkan Form Setelah Submit
                form.reset()
                console.log('Success!', response)
              })
              .catch(error => console.error('Error!', error.message))
          })
        </script>

</body>

</html>