<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>LOGIN</title>
            <link rel="stylesheet" href="css/daftar.css">
    </head>
        <body>
            <div class="center">
                <h1>LOGIN</h1>
                <form action="<?php echo base_url()."index.php/hal_utama/aksi_login";?>" method="POST">
                        <div class="txt_field">
                            <input type="text" required name="username">
                            <span></span>
                            <label >Username </label>
                        </div>   
                        <div class="txt_field">
                            <input type="password" required name="password">
                            <span></span>
                            <label >Password </label> 
                        </div>
                        <div class="lupapass">Lupa Password</div>
                        <input type="submit" value="login"name="masuk">
                        <div class="signup_link">
                            Tidak punya akun ? <a href="<?php echo base_url()."index.php/hal_utama/konekto_daftar";?>">Daftar akun</a>
                        </div>                                             
                    </form>
            </div>
        </body>
</html>