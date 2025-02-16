<?php foreach ($data['mhs'] as $mhs) : ?>
    <div class="card mb-3" data-name="<?= $mhs['nama']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $mhs['nama']; ?></h5>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary float-end">Detail</a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success float-end me-2 tampilModalubah" data-id="<?= $mhs['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal">Ubah</a>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger float-end me-2" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
        </div>
    </div>
<?php endforeach; ?>