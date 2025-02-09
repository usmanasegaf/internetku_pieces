<!DOCTYPE html>
<!-- Mohammad Usman Asegaf Bagian FrontEnd-->

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />

  <title>INTERNETKU | Internet Provider</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-globe me-1"></i>
        INTERNETKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#benefit">Benefit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#login" onclick="openLoginModal(event)">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbrotron -->
  <section class="jumbotron text-center">
    <div class="container mt-4">
      <!-- Carousel -->
      <div id="carouselPaket" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselPaket" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="https://placehold.co/600x400" class="d-block w-100" alt="Image 1"
              style="max-height: 550px; object-fit: cover;">
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaket" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPaket" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- JavaScript untuk interval -->
    <script>
      const myCarousel = document.querySelector('#carouselPaket');
      const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,
        wrap: true,
      });
    </script>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Benefit -->
  <section id="benefit" class="container my-5">
    <div class="text-center">
      <h2 class="fw-bold" style="color: #5d5a88;">Mengapa Memilih <span style="color: #800080;">INTERNETKU?</span></h2>
      <p class="text-muted">Layanan internet cepat, stabil, dan terbaik untuk kebutuhan Anda!</p>
    </div>

    <div class="row text-center mt-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-speedometer2 fs-1" style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Kecepatan Tinggi</h5>
          <p class="text-muted">Streaming, gaming, dan bekerja tanpa hambatan dengan koneksi super cepat hingga 1 Gbps.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-wifi fs-1 " style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Jaringan Stabil</h5>
          <p class="text-muted">Teknologi fiber optic memastikan koneksi stabil tanpa gangguan.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-headset fs-1 " style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Customer Support 24/7</h5>
          <p class="text-muted">Tim support kami siap membantu kapan saja, 24 jam sehari.</p>
        </div>
      </div>
    </div>

    <div class="row text-center mt-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-house-door fs-1 " style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Paket Rumah & Bisnis</h5>
          <p class="text-muted">Pilihan paket fleksibel sesuai kebutuhan rumah atau usaha Anda.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-shield-lock fs-1 " style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Keamanan Terjamin</h5>
          <p class="text-muted">Jaga privasi Anda dengan teknologi keamanan tingkat tinggi.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-3">
          <i class="bi bi-rocket fs-1 " style="color: #800080;"></i>
          <h5 class="fw-bold mt-3">Instalasi Cepat</h5>
          <p class="text-muted">Pemasangan hanya dalam 24 jam setelah pendaftaran.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Akhir Benefit -->

  <!-- Products -->
  <section id="products">
    <div class="container">
      <div class="row text-center">
        <div class="col mb-3">
          <h4 style="color: #5d5a88;" class="mb-3">Products</h4>
          <h2 style="color: #5d5a88;">Affordable Pricing Plans</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-2" id="packagesContainer">
        <!-- Paket/product akan ditampilkan di sini -->
      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 640">
    <path fill="#5d5a88" fill-opacity="0.3"
      d="M0,160L26.7,186.7C53.3,213,107,267,160,256C213.3,245,267,171,320,138.7C373.3,107,427,117,480,154.7C533.3,192,587,256,640,272C693.3,288,747,256,800,218.7C853.3,181,907,139,960,144C1013.3,149,1067,203,1120,218.7C1173.3,235,1227,213,1280,202.7C1333.3,192,1387,192,1413,192L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
    </path>
    <path fill="#5d5a88" fill-opacity="0.3"
      d="M0,480L26.7,480C53.3,480,107,480,160,474.7C213.3,469,267,459,320,421.3C373.3,384,427,320,480,330.7C533.3,341,587,427,640,426.7C693.3,427,747,341,800,330.7C853.3,320,907,384,960,410.7C1013.3,437,1067,427,1120,400C1173.3,373,1227,331,1280,336C1333.3,341,1387,395,1413,421.3L1440,448L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
    </path>
  </svg>

  <!-- get data product -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      fetch('http://localhost:3000/api/packages')
        .then(response => response.json())
        .then(packages => {
          const container = document.getElementById('packagesContainer');
          container.innerHTML = ''; // Kosongkan kontainer sebelum menambahkan data baru

          packages.forEach(pkg => {
            const card = `
              <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                  <div class="card-header text-center bg-light" style="border-bottom: none;">
                    <h5 style="color: #5d5a88;">${pkg.package_name}</h5>
                    <h1 class="fw-semibold" style="color: #5d5a88;">Rp ${parseFloat(pkg.price).toLocaleString()}</h1>
                    <p style="color: #5d5a88;">Billed ${pkg.billing_cycle === 'monthly' ? 'Monthly' : 'Yearly'}</p>
                    <a href="#pendaftaran" class="btn btn-primary custom-btn mb-1" 
                        style="background-color: #5d5a88; border: none;" 
                        onclick="openRegistrationModal(event,${pkg.package_id})">
                      Get Started
                    </a>
                  </div>
                  <div class="card-body text-start ms-4">
                    <p><i class="bi bi-speedometer2 me-2" style="color: #5d5a88;"></i> Speed: ${pkg.speed}</p>
                    <p><i class="bi bi-people-fill me-2" style="color: #5d5a88;"></i> Max Connections: ${pkg.max_connections}</p>
                    <p><i class="bi bi-phone-fill me-2" style="color: #5d5a88;"></i> Mobile App: ${pkg.mobile_app_available ? 'Available' : 'Not Available'}</p>
                    <p><i class="bi bi-headset me-2" style="color: #5d5a88;"></i> Support: ${pkg.support_type}</p>
                    <hr>
                    ${pkg.features.split(',').map(feature => `
                      <p><i class="bi bi-check-circle-fill me-2" style="color: #5d5a88;"></i> ${feature.trim()}</p>
                    `).join('')}
                  </div>
                </div>
              </div>`;
            container.innerHTML += card;
          });
        })
        .catch(error => console.error('Error:', error));
    });
  </script>
  <!-- Akhir products -->

  <!-- Pendaftaran -->
  <section id="pendaftaran">
    <!-- Modals form -->
    <div id="registrationModal" class="modal-registration">
      <div class="modal-content">
        <h4>Formulir Pendaftaran</h4>
        <form id="registrationForm">
          <input type="hidden" id="selectedPackageId" name="package_id">

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="full_name" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="form-group">
            <label>Telepon</label>
            <input type="tel" class="form-control" name="phone" required>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="address" required></textarea>
          </div>

          <button type="submit" class="submit-btn">Daftar</button>
        </form>
      </div>
    </div>

    <script>
      function openRegistrationModal(event, packageId) {
        event.preventDefault(); // Prevent default anchor behavior
        document.getElementById('selectedPackageId').value = packageId;
        document.getElementById('registrationModal').style.display = 'block';
      }

      document.getElementById('registrationForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch('http://localhost:3000/api/register', {
          method: 'POST',
          body: JSON.stringify(Object.fromEntries(formData)),
          headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
          if (data.defaultPassword) {
            alert(`Registrasi berhasil!\nUsername: ${data.username}\nPassword: ${data.defaultPassword}`);
          } else {
            alert('Registrasi berhasil!');
          }
          document.getElementById('registrationModal').style.display = 'none';
        })
        .catch(error => console.error('Error:', error));
      });

      // Untuk close modal registrasi 
      document.getElementById('registrationModal').addEventListener('click', function (event) {
        if (event.target === this) {  // 'this' mengacu pada registrationModal
          this.style.display = 'none';
        }
      });
    </script>
  </section>
  <!-- Akhir Pendaftaran-->

  <!-- Login -->

  <!-- Modal -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <h4 class="modal-title">Login</h4>

      <form id="loginForm">
        <div class="form-group">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="username" required>
        </div>

        <div class="form-group">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="password" required>
        </div>

        <button type="submit" class="submit-btn">Login</button>

        <div style="text-align: center; margin-top: 15px;">
          <span style="color: #666;">
            Belum mempunyai akun?
            <a href="#" onclick="switchToRegister(event)"
              style="color: #5d5a88; text-decoration: none; cursor: pointer;">
              Daftar disini
            </a>
          </span>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Fungsi untuk membuka modal login
    function openLoginModal(event) {
      event.preventDefault();
      document.getElementById('loginModal').style.display = 'block';
    }

    // Fungsi untuk beralih ke modal registrasi
    function switchToRegister(event) {
      event.preventDefault();
      document.getElementById('loginModal').style.display = 'none';
      document.getElementById('registrationModal').style.display = 'block';
    }

    // Event listener untuk submit form login
    document.getElementById('loginForm').onsubmit = function (e) {
      e.preventDefault();

      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      fetch('http://localhost:3000/api/login', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify({ username, password })
      })
      .then(response => response.json())
      .then(data => {
          if (data.token) {
              alert('Login berhasil!');
              document.getElementById('loginModal').style.display = 'none';
              localStorage.setItem('authToken', data.token);
          } else {
              alert(data.message || 'Login gagal!');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat login.');
      });
    }

    // Event listener untuk menutup modal dengan klik di luar
    document.getElementById('loginModal').addEventListener('click', function (event) {
      if (event.target === this) {
        this.style.display = 'none';
      }
    });

    // Event listener untuk menutup modal dengan tombol ESC
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape') {
        document.getElementById('loginModal').style.display = 'none';
      }
    });
  </script>

  <!-- Akhir Login -->

  

  <!-- Footer -->
  <footer class="text-white text-center p-2 " style="background-color: #5d5a88;">
    <p>Created with Html, Bootstrap 5 CSS Framework by <a href="https://www.youtube.com/@mohammadusmanasegaf7180"
        class="text-white fw-bold">Mohammad Usman Asegaf</a></p>
  </footer>
  <!-- Akhir Footer -->


</body>

</html>