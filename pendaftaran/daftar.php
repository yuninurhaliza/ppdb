<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#alamat'
      });
    </script>

    <title>Daftar Calon Siswa</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
    <div class='container'>
    <a class="navbar-brand" href="#">PPDB ONLINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pendaftaran/daftar.php">Daftar Calon Siswa Baru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="panduan.php">Panduan PPDB Online</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hasil.php">Lihat Siswa Diterima</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

    <div class="container mb-5 mt-5">
        <h1 class="text-center mt-5 mb-4">Daftar Calon Siswa Baru</h1>
        <div class="row justify-content-center">
        <small class="mb-2">Sebelum Anda Mengisi Formulir Pendaftaran Pastikan Anda Sudah Membaca Panduan PPDB Online</small>
            <div class="col-md-8">
                <form method="post" action="doDaftar.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="ttl" placeholder="contoh : Pasuruan, 01-01-2003" required>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor HP</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Pastikan Nomor Masih AKtif" required>
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai UN</label>
                        <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai UN" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" name="foto" id="foto">
                    </div>
                    <div class="form-group">
                        <h5 class="mb-2">Upload Dokumen Persyaratan</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="akta">Akta Kelahiran</label>
                                <input type="file" class="form-control-file" name="akta" id="akta">
                            </div>
                            <div class="col-md-6">
                                <label for="kk">Kartu Keluarga</label>
                                <input type="file" class="form-control-file" name="kk" id="kk">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" style="width: 100px;"><i class="fas fa-plus mr-2"></i>Daftar</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>