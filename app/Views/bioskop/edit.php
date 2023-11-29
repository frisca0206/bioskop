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

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('bioskop-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="bioskop_id" value="<?= $cinema['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_film">Film</label>
                                            <select id="nama_film" class="form-control" name="nama_film"
                                                class="nama_film">
                                                <option value=""></option>
                                                <?php foreach ($films as $key => $film) : ?>
                                                <option value="<?php echo $film['id']; ?>"
                                                    <?php if($cinema['nama_film_id'] == $film['id']) echo "selected"; ?>>
                                                    <?php echo $film['nama_film']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="durasi">Duration</label>
                                            <input type="text" class="form-control" id="durasi" name="durasi"
                                                value="<?= $cinema['durasi'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre</label>
                                            <select id="genre" class="form-control" name="genre" class="genre">
                                                <option value=""></option>
                                                <?php foreach ($genres as $key => $genre) : ?>
                                                <option value="<?php echo $genre['id']; ?>"
                                                    <?php if($cinema['genre_id'] == $genre['id']) echo "selected"; ?>>
                                                    <?php echo $genre['genre']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_tiket">Price</label>
                                            <input type="number" class="form-control" id="harga_tiket"
                                                name="harga_tiket" value="<?= $cinema['harga_tiket'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_kursi">Seat</label>
                                            <select id="nomor_kursi" class="form-control" name="nomor_kursi"
                                                class="nomor_kursi">
                                                <option value=""></option>
                                                <?php foreach ($seats as $key => $seat) : ?>
                                                <option value="<?php echo $seat['id']; ?>"
                                                    <?php if($cinema['nomor_kursi_id'] == $seat['id']) echo "selected"; ?>>
                                                    <?php echo $seat['nomor_kursi']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="cemilan">Snack</label>
                                            <select id="cemilan" class="form-control" name="cemilan" class="cemilan">
                                                <option value=""></option>
                                                <?php foreach ($snacks as $key => $snack) : ?>
                                                <option value="<?php echo $snack['id']; ?>"
                                                    <?php if($cinema['cemilan_id'] == $snack['id']) echo "selected"; ?>>
                                                    <?php echo $snack['cemilan']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('bioskop') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Cinema
                                        Schedule</button>
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