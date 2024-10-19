<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <label for="email">Password:</label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault()

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.")
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password tidak boleh kurang dari 8 Karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika validasi berhasil
                if (valid) {
                    $.ajax({
                        url: 'proses_validasi.php', // Lokasi server-side script
                        type: 'POST', // Metode pengiriman data
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            // Lakukan sesuatu dengan respons dari server
                            alert("Form berhasil dikirim: " + response);
                        },
                        error: function() {
                            // Jika terjadi kesalahan dalam pengiriman
                            alert("Terjadi kesalahan saat mengirim form.");
                        }
                    });
                }    
            });
        }); 
    </script>
</body>
</html>