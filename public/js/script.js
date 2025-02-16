$(function() {
    $('.tampilModalubah').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('#formMahasiswa').attr('action', BASEURL + '/mahasiswa/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: BASEURL + '/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

    $('.tampilModalTambah').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#formMahasiswa').attr('action', BASEURL + '/mahasiswa/tambah');

        $('#id').val('');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
    });
});

function filterMahasiswa() {
    const input = document.getElementById('keyword').value.toLowerCase();
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const name = card.getAttribute('data-name').toLowerCase();
        if (name.includes(input)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });

    if (input === '') {
        cards.forEach(card => {
            card.style.display = 'block';
        });
    }
}