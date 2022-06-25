<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="card-body">
                    <table class="table table-striped table-bordered dt-responsive nowrap" id="mytabel" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>No. Transaksi</th>
                                <th>Anggota Peminjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Total Bayar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengembalian as $row) : ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td><?= $row['nomor_transaksi'] ?></td>
                                    <td><?= $row['nama_lengkap'] ?></td>
                                    <td><?= $row['tgl_kembali'] ?></td>
                                    <td><?= $row['total_bayar'] ?></>
                                    <td>
                                        <!-- Button Detail -->
                                        <a href="<?= base_url() ?>laporan/detail/<?= $row['nomor_transaksi'] ?>" class="btn btn-sm btn-success text-light"><i class="fas fa-fw fa-eye"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>