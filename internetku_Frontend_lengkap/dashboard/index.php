<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERNETKU | Akun Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-globe me-1"></i>
                Akun Saya</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#user">
                            <i class="bi bi-person-circle fs-4 me-1"></i>
                            John Doe</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- informasi akun -->
    <section id="informasi_akun">
        <div class="container mt-4">
            <div class="account-section p-4">
                <h4>Informasi Akun</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nama Pelanggan:</strong> John Doe</p>
                        <p><strong>Nomor Pelanggan:</strong> PLG-2025001</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> john.doe@email.com</p>
                        <p><strong>Paket Aktif:</strong> Premium Plan</p>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-custom btn-primary"
                        style="background-color:rgba(76, 0, 130, 0.86); border: none;">Ubah
                        Data
                        Akun</button>
                    <button class="btn btn-custom btn-primary"
                        style="background-color:rgba(76, 0, 130, 0.86); border: none;">Ubah
                        Paket
                        Berlangganan</button>
                    <button class="btn btn-custom btn-primary ms-auto" style="background-color: #5d5a88; border: none;"
                        data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Hapus Akun</button>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir informasi akun -->

    <!-- Ubah Data Akun -->
    <section id="ubah_data_akun">
        <div class="container mt-4">
            <div class="account-section p-4">
                <h4>Ubah Data Akun</h4>
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label"><strong>Nama</strong></label>
                        <input type="text" class="form-control" id="nama" value="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>Email</strong></label>
                        <input type="email" class="form-control" id="email" value="john.doe@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label"><strong>Nomor Telepon</strong></label>
                        <input type="tel" class="form-control" id="nomor" value="+62812345678">
                    </div>
                    <button type="submit" class="btn btn-custom btn-primary"
                        style="background-color:rgba(76, 0, 130, 0.86); border: none">Simpan
                        Perubahan</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Akhir Ubah Data Akun -->

    <!-- Ubah Paket Berlangganan -->
    <section id="ubah_paket">
        <div class="container mt-4">
            <div class="account-section p-4">
                <h4>Ubah Paket Berlangganan</h4>
                <form>
                    <div class="mb-3">
                        <label for="paket" class="form-label"><strong>Pilih Paket Baru</strong></label>
                        <select class="form-select" id="paket" onchange="updateFitur()">
                            <option value="basic">Basic Plan - Rp 99.000/bulan</option>
                            <option value="growth">Growth Plan - Rp 199.000/bulan</option>
                            <option value="enterprise">Enterprise Plan - Rp 499.000/bulan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Perbedaan Fitur:</strong></label>
                        <p id="fitur">
                            <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>All analytic
                            features<br>
                            <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>20Mbps<br>
                            <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Normal Support<br>
                            <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Mobile App<br>
                            <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>up to 20
                            connections
                        </p>
                    </div>
                    <button type="submit" id="konfirmasiPaket" class="btn btn-custom btn-primary"
                        style="background-color:rgba(76, 0, 130, 0.86); border: none">Konfirmasi Perubahan
                        Paket</button>
                    <!-- untuk sekarang masih kosong, apabila di pencet menarik keatas halaman -->
                </form>
            </div>
        </div>
    </section>

    <script>
        function updateFitur() {
            let paket = document.getElementById("paket").value;
            let fiturText = "";

            if (paket === "basic") {
                fiturText = `
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> All analytic features<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> 20Mbps
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Normal Support<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Mobile App<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>up to 20
            `;
            } else if (paket === "growth") {
                fiturText = `
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> Everything on Basic Plan<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> 100Mbps
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Premium Support<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Mobile App<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>up to 100
            `;
            } else if (paket === "enterprise") {
                fiturText = `
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> Everything on Growth Plan<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i> 500Mbps
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Dedicated Support<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>Mobile App<br>
                <i class="bi bi-check-circle-fill me-2 ms-1" style="color: #4B0082;"></i>up to 300
            `;
            }

            document.getElementById("fitur").innerHTML = fiturText;
        }
    </script>

    <!-- Akhir Ubah Paket Berlangganan -->


    <!-- Footer -->
    <footer class="text-white text-center p-2 " style="background-color: #5d5a88;">
        <p>Created with Html, Bootstrap 5 CSS Framework by <a href="https://www.youtube.com/@mohammadusmanasegaf7180"
                class="text-white fw-bold">Mohammad Usman Asegaf</a></p>
    </footer>
    <!-- Akhir Footer -->



</body>

</html>