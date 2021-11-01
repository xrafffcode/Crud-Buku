<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class='row'>
                <nav class='navbar navbar-light bg-white'>
                    <div class='container-fluid'>
                        <h1>Input Buku</h1>                   
                        <a href='tampil.php'>
                            <button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal'>
                            Tampil Data Buku
                            </button>
                        </a>
                    </div>
                 </nav>
        </div>
            <div class="row mt-5">
                <form action="simpan.php" method="POST" enctype="multipart/form-data">               
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control"></label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Buku</label>
                            <input type="text" name="jenis_buku" class="form-control"></label>
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Gambar Buku</label>
                            <input type="file" name="gambar_buku" value="" class="form-control"></label>
                        </div>
                    <button type="submit" name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       
            
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>