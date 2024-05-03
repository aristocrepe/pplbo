<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css stylesheet -->
    <link rel="stylesheet" href="yes.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register_process.php">
                <h1>Sistem Informasi Administrasi Kemahasiswaan</h1><br>
                <h3>Buat Akun</h3>
                <div class="infield">
                    <input type="text" name="nim" placeholder="NIM" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="password" placeholder="Kata Sandi" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi" />
                    <label></label>
                </div>
                <button>Daftar</button>
            </form>
        </div>

</body>
</html>