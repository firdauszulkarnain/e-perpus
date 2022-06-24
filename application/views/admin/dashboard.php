<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= $title ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"> <i class="fas fa-book"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bolder">Jumlah Buku</span>
                    <span class="info-box-number">
                        <?php if ($buku >= 10 || $buku == 0) : ?>
                            <?= $buku ?>
                        <?php else : ?>
                            0<?= $buku  ?>
                        <?php endif ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class=" fas fa-list-ul"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text font-weight-bolder">Jumlah Kategori Buku</span>
                    <span class="info-box-number">
                        <?php if ($kategori >= 10 || $kategori == 0) : ?>
                            <?= $kategori ?>
                        <?php else : ?>
                            0<?= $kategori  ?>
                        <?php endif ?>
                    </span>
                </div>
            </div>
        </div>


        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text font-weight-bolder">Jumlah Anggota</span>
                    <span class="info-box-number">
                        <?php if ($anggota >= 10 || $anggota == 0) : ?>
                            <?= $anggota ?>
                        <?php else : ?>
                            0<?= $anggota  ?>
                        <?php endif ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-calculator"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text font-weight-bolder">Transaksi Berhasil</span>
                    <span class="info-box-number">
                        <?php if ($peminjaman >= 10 || $peminjaman == 0) : ?>
                            <?= $peminjaman ?>
                        <?php else : ?>
                            0<?= $peminjaman  ?>
                        <?php endif ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>