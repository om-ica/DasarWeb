$(document).ready(function() {
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });
    
    $('#upload-form').submit(function(e) {
        e.preventDefault();
        console.log('Form sedang dikirim...');

        var formData = new FormData(this);
        console.log(formData);

        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
                console.log('Respons dari server:', response);
            },
            error: function() {
                console.log('Terjadi kesalahan dalam AJAX request');
                $('#status').html('Terjadi kesalahan saat mengunggah file');

            }
        });
    });
});