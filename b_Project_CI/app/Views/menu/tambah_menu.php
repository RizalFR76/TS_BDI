<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Menu - Index</title>
</head>
<body>
    <div class="container">
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
        <h1 align="center"> TAMBAH DATA</h1>
        <form method="post" action="<?=base_url('menu/store'); ?>">
            <div class="form-group">
                <label for="nama">nama</label>
                <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukan nama makanan">
            </div>
            <div class="form-group">
                <label for="jenis">jenis</label>
                <input name="jenis" type="text" class="form-control" id="jenis" placeholder="jenis">
            </div>
            <div class="form-group">
                <label for="harga">harga</label>
                <input name="harga" type="number" class="form-control" id="harga" placeholder="harga">
            </div>
            <div class="form-group">
                <label for="penyajian">penyajian</label>
                <input name="penyajian" type="text" class="form-control" id="penyajian" placeholder="penyajian">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
            </center>
        </form>
    </div>
</body>
</html>