<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>

                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/users/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/users') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input class="form-control " type="text" name="nik" placeholder="Masukkan NIK" />

                            </div>

                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_lengkap" min="0" placeholder="Masukkan Nama Lengkap" />

                            </div>


                            <label for="jenis_kelamin">Jenis Kelamin</label>

                            <select class="form-control mb-3" aria-label="Default select example" name='jenis_kelamin'>
                                <option selected>--- Pilih Jenis Kelamin ---</option>
                                <option value="Laki-laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                            <div class="form-group">
                                <label for="name">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" min="0" placeholder="Masukkan Nama Lengkap" />
                            </div>

                            <div class="form-group">
                                <label for="name">Alamat Lengkap</label>
                                <textarea rows="10" class="form-control" name=" alamat_lengkap" placeholder="Masukkan Alamat Lengkap..."></textarea>

                            </div>



                            <input class="btn btn-primary w-100 py-3" type="submit" name="btn" value="Tambah Data" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>