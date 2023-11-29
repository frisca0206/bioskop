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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('bioskop-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_film">Film</label>
                                            <select id="nama_film" name="nama_film" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($films as $key => $film) : ?>
                                                <option value="<?php echo $film['id']; ?>">
                                                    <?php echo $film['nama_film']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="durasi">Duration</label>
                                            <input type="text" class="form-control" id="durasi" name="durasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre</label>
                                            <select id="genre" name="genre" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($genres as $key => $genre) : ?>
                                                <option value="<?php echo $genre['id']; ?>">
                                                    <?php echo $genre['genre']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_tiket">Price</label>
                                            <input type="number" class="form-control" id="harga_tiket"
                                                name="harga_tiket" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_kursi">Seat</label>
                                            <select id="nomor_kursi" name="nomor_kursi" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($seats as $key => $seat) : ?>
                                                <option value="<?php echo $seat['id']; ?>">
                                                    <?php echo $seat['nomor_kursi']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cemilan">Snack</label>
                                            <select id="cemilan" name="cemilan" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($snacks as $key => $snack) : ?>
                                                <option value="<?php echo $snack['id']; ?>">
                                                    <?php echo $snack['cemilan']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('bioskop') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Add Schedule</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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