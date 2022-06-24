<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            <!-- <a class="btn btn-sm btn-success px-4 py-2" href="<?= base_url() ?>produk/tambah_produk"><i class="fas fa-fw fa-plus"></i> Tambah Produk</a> -->
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
                                <th width="5%">No</th>
                                <th width="40%">Username</th>
                                <th>Nama Anggota</th>
                                <th width="12%">Tanggal Daftar</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($anggota as $row) : ?>
                                <tr class="text-center">
                                    <td></td>
                                    <td class="text-capitalize"><?= $row['username'] ?></td>
                                    <td class="text-capitalize"><?= $row['nama_lengkap'] ?></td>
                                    <td class="text-capitalize"><?= $row['tanggal_daftar'] ?></td>
                                    <td>
                                        <!-- Button Detail -->
                                        <a href="<?= base_url() ?>anggota/detail/<?= $row['id_anggota'] ?>" class="btn btn-sm btn-success text-light"><i class="fas fa-fw fa-eye"></i> </a>
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