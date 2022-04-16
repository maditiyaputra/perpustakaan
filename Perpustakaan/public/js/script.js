$(function() {

    $('.tombolTambahData').on('click', function() {

        $('#formModalLabel').html('Tambah Buku');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    
    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Buku');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            // dataType: 'json',
            success: function() {
                console.log(data);
            }
        });

    });

});