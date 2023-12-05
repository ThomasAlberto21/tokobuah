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
                <div class="card mb-3">
                    <div class="card-header">
                        <button class="btn btn-primary">
                            <a class="text-white" href="<?php echo site_url('admin/users/add') ?>"><i class="fas fa-plus"></i> Tambah Users</a>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td width="150">
                                                <?php echo $user->nik ?>
                                            </td>
                                            <td width="150">
                                                <?php echo $user->nama_lengkap ?>
                                            </td>
                                            <td width="150">
                                                <?php echo $user->jenis_kelamin ?>
                                            </td>
                                            <td width="150">
                                                <?php echo $user->tanggal_lahir ?>
                                            </td>
                                            <td width="150">
                                                <?php echo $user->alamat_lengkap ?>
                                            </td>

                                            <td width="150">

                                                <a onclick="deleteConfirm('<?php echo site_url('admin/users/delete/' . $user->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>