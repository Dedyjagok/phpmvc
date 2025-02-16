

<div class="container m-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tampilModalTambah" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br>
        </div>
    </div>
    <div>
    <form id="searchForm" oninput="filterMahasiswa()">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword">
            <button class="btn btn-primary" type="button" id="tombolCari">Cari</button>
        </div>
    </form>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <br>
            <div id="dataMahasiswa">
                <?php include 'data.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data</h5>
        <button type="button" class="btn-close tombolTambahData" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formMahasiswa" action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                    <option selected>Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>