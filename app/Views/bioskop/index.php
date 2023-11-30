<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Cinema Schedule</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('bioskop-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="bioskop_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Film</th>
                                        <th>Duration</th>
                                        <th>Genre</th>
                                        <th>Price</th>
                                        <th>Seat</th>
                                        <th>Snack</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cinemas as $key => $cinema) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $cinema['nama_film'] ?></td>
                                        <td><?= $cinema['durasi'] ?></td>
                                        <td><?= $cinema['genre'] ?></td>
                                        <td><?= $cinema['harga_tiket'] ?></td>
                                        <td><?= $cinema['nomor_kursi'] ?></td>
                                        <td><?= $cinema['cemilan'] ?></td>
                                        <td>
                                            <a href="<?= url_to('bioskop-edit', $cinema['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('bioskop-delete', $cinema['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-boody -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>