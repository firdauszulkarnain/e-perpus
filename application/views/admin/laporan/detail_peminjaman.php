<section class="content-header">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_transaksi">Nomor Transasi</label>
                        <input type="text" class="form-control" id="no_transaksi" name="no_transaksi" value="<?= $peminjaman['nomor_transaksi'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="buku">Buku Pinjam</label>
                                <input type="text" class="form-control" id="buku" name="buku" value="<?= $peminjaman['judul_buku'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-3">
                            <!-- Button Detail -->
                            <button type="button" class="btn mt-3 btn-success text-light btn-block" data-toggle="modal" data-target="#detail_buku">
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="anggota_peminjam">Anggota Peminjam</label>
                                <input type="text" class="form-control" id="anggota_peminjam" value="<?= $peminjaman['nama_lengkap'] ?>" name="anggota_peminjam" readonly>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-3">
                            <!-- Button Detail -->
                            <button type="button" class="btn mt-3 btn-success text-light btn-block" data-toggle="modal" data-target="#detail_anggota">
                                <i class="fas fa-fw fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card py-3">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                            <input type="text" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $peminjaman['tanggal_pinjam'] ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenggat">Tenggat Penggembalian</label>
                            <input type="text" class="form-control" id="tenggat" name="tenggat" value="<?= $peminjaman['tanggal_kembali'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 px-3 mt-3">
                            <h5 class="font-weight-bolder">TOTAL BAYAR</h5>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control font-weight-bolder" id="exampleFormControlTextarea1" rows="1" readonly style="text-align: right !important; font-size: 28px;"><?= number_format($peminjaman['total'], 0, ',', '.'); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="detail_buku" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bolder" id="staticBackdropLabel">Detail buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <div class="form-group">
                    <label for="kode_buku">Kode Buku</label>
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" readonly>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="kategori_buku">Kategori Buku</label>
                        <input type="text" class="form-control" id="kategori_buku" name="kategori_buku" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-body px-4">
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" readonly>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detail_anggota" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="kode_anggota">Kode Anggota</label>
                        <input type="text" class="form-control" id="kode_anggota" name="kode_anggota" readonly>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="notelp">No. Telpon Anggota</label>
                        <input type="text" class="form-control" id="notelp" name="notelp" readonly>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="email">Email Anggota</label>
                        <input type="text" class="form-control" id="email" name="email" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    var id = $("#no_transaksi").val();
    var url = "<?= base_url('peminjaman/cari_peminjaman/') ?>";
    $.ajax({
        type: "post",
        url: url,
        dataType: "html",
        data: "id_peminjaman=" + id,
        success: function(result) {
            let tmp = JSON.parse(result);
            // BUKU
            $(".modal-body #kode_buku").val(tmp.kode_buku);
            $(".modal-body #judul_buku").val(tmp.judul_buku);
            $(".modal-body #kategori_buku").val(tmp.kategori);
            $(".modal-body #pengarang").val(tmp.pengarang);
            $(".modal-body #tahun_terbit").val(tmp.tahun_terbit);
            // ANGGOTA
            $(".modal-body #kode_anggota").val(tmp.kode_anggota);
            $(".modal-body #username").val(tmp.username);
            $(".modal-body #nama_lengkap").val(tmp.nama_lengkap);
            $(".modal-body #notelp").val(tmp.notelp);
            $(".modal-body #email").val(tmp.email);

            $("#anggota_peminjam").val(tmp.nama_lengkap);
            $("#buku").val(tmp.judul_buku);
            $("#tanggal_pinjam").val(tmp.tgl_pinjam);
            $("#tenggat").val(tmp.tgl_kembali);
            $("#total").val(tmp.total);
        }
    });
</script>