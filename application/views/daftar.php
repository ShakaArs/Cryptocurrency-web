<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>REGISTRATION</title>
            <link rel="stylesheet" href="<?php echo base_url()."css/daftar.css"?>">
    </head>
        <body>
            <div class="center">
                <h1>DAFTAR AKUN</h1>
                <form action="<?php echo base_url()."index.php/hal_utama/aksi_daftar";?>" method="POST">
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
                        <div class="lupapass">Klik daftar untuk membuat akun</div>
                        <input type="submit" value="Daftar"name="masuk">
                        <div class="signup_link">
                            Sudah punya akun ? <a href="<?php echo base_url()."index.php/hal_utama/logout";?>">Login</a>
                        </div>                                             
                    </form>
            </div>
        </body>
</html>