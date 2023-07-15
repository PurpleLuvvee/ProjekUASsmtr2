<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--bootstrap 5 css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- custom js file link  -->
    <script src="js/card.js" defer></script>
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style type="text/css">
    a,
    h3 {
        font-family: 'Acme', sans-serif;
    }
    </style>

</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent">
        <div class="container">
            <div class="icon">
                <a href="welcome.blade.php" class="navbar-brand"><img src="assets/images/logoBem.png" alt="" width="69px"
                        height="83px" /></a>
                <a class="navbar-brand fw-bold" href="welcome.blade.php"><i></i>BEM STT NF</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/anggota">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/loginadmin">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
        </div>
    </nav>

    <!-- card -->
    <div class="container">

        <h3 class="title"> Anggota </h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="assets/images/card/presma.png" alt="">
                <h3>PRESMA</h3>
            </div>

            <div class="product" data-name="p-2">
                <img src="assets/images/card/wapresma.png" alt="">
                <h3>WAPRESMA</h3>
            </div>

            <div class="product" data-name="p-3">
                <img src="assets/images/card/mendagri.png" alt="">
                <h3>MENDAGRI</h3>
            </div>

            <div class="product" data-name="p-4">
                <img src="assets/images/card/mukm.png" alt="">
                <h3>MUKM</h3>
            </div>

            <div class="product" data-name="p-5">
                <img src="assets/images/card/seskab.png" alt="">
                <h3>SESKAB</h3>
            </div>

            <div class="product" data-name="p-6">
                <img src="assets/images/card/admin.png" alt="">
                <h3>ADMIN</h3>
            </div>

        </div>

    </div>

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/presma.png" alt="">
            <h3>Presiden Mahasiswa</h3>
            <p>Iqbal Ibrahim</p>
            <p>Sistem Informasi 2020</p>
        </div>

        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/wapresma.png" alt="">
            <h3>Wakil Presiden Mahasiswa</h3>
            <p>Muhammad Farhan</p>
            <p>Teknik Informatika 2020</p>
        </div>

        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/mendagri.png" alt="">
            <h3>Menteri Koordinator Dalam Negeri</h3>
            <p>Achmad Irvan Fauzi</p>
            <p>Teknik Informatika 2020</p>
        </div>

        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/mukm.png" alt="">
            <h3>Biro Manajemen UMKM</h3>
            <ul>
                <li>Huzaifah A. | Teknik Informatika 2020 | kepala Biro</li>
                <li>Fadhlulrrohman Z. | Teknik Informatika 2020 | Staff</li>
                <li>Fitria Nur Aini | Sistem Informasi 2022 | Staff</li>
                <li>Sefviana Anggaraeni | Sistem Informasi 2022 | Staff</li>
            </ul>
        </div>

        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/seskab.png" alt="">
            <h3>Menteri Koordinator Sekretaris Kabinet</h3>
            <p>Zakiyuddin Rahman</p>
            <p>Teknik Informatika 2020</p>
        </div>

        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="assets/images/card/admin.png" alt="">
            <h3>Biro Administrasi</h3>
            <ul>
                <li>Addina K. | Teknik Informatika 2021 | Kepala Biro</li>
                <li>Dea Amnesty | Sistem Infomasi 2022 | Staff</li>
                <li>Nayla Azizah Zahwa | Sistem Informasi 2022 | Staff</li>
                <li>Siti Nur Kaffah | Teknik Informatika 2021 | Staff</li>
            </ul>
        </div>

    </div>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; BEM STT NF 2023
            </p>
        </div>
    </footer>
</body>

</html>