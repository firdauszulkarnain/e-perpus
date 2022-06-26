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
                    <table class="table dt-responsive nowrap" id="tabelbuku" width="100%">
                        <thead class="thead-light">
                            <tr class="">
                                <th width="15%">Kode Buku</th>
                                <th width="45%">Judul Buku</th>
                                <th>Kategori Buku</th>
                                <th>Detail Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($buku as $row) : ?>
                                <tr>
                                    <td class="text-capitalize"><?= $row['kode_buku'] ?></td>
                                    <td class="text-capitalize"><?= $row['judul_buku'] ?></td>
                                    <td class="text-capitalize"><?= $row['nama_kategori'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-success">Lihat Detail</a>
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