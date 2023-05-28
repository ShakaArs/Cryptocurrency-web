<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS SWIPPE-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--CSS-->
    <link href="<?php echo base_url()."css/style.css"?>"  rel="stylesheet" >



    
    

    <title>Cryptocurrency</title>
</head>
<body>
     <!--header section dimulai-->
     <header class="header">
        <a href="#" class="logo"><i class="fas fa-bitcoin"></i>Cryptocurrency </a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa--times"></div>
            <a href="<?php echo base_url()."index.php/hal_admin"?>">Home</a>
            <a href="tentang.php">About</a>
            <a href="index.php">News</a>
            <a href="index.php">BTC</a>
            <a href="<?php echo base_url()."index.php/hal_utama/logout"?>">Logout</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-coin"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>

    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>

        <form action="">
            <input type="search" placeholder="Cari Di sini..." id="search-box">
            <label for="search-btn" class="fas fa-search"></label>
        </form>
    </div>

    <!--Beranda-->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="second" style="background: url(<?php echo base_url()."img/cyrpto.jpg"?>) no-repeat;">
                        <div class="content">
                            <span>Mata Uang digital</span>
                            <h3>Sejuta Potensi</h3>
                            <p>sistem perlindungan cyptocurrency atau uang kripto adalah menggunakan kriptografi sebagai jaminan ,Kriptografi sendiri merupaka metode yang digunakan untuk melindungi informasi dan saluran komunikasi melalui penggunaan kode.</p>
                            <a href="#" class="btn">Jelajahi</a>
                        </div>
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="second" style="background: url(<?php echo base_url()."img/crypto1.png"?>) no-repeat;">
                    </div>
                </div>
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--Kategori-->
    <section class="category">
        <h1 class="heading">Jenis -Jenis Cryptocurrency</h1>

        <div class="box-container">
            <div class="box">
                <img src="<?php echo base_url()."img/btc.png"?>" alt="">
                <h3>Bitcoin</h3>
                <p>Jenis cryptocurrency yang pertama kali muncul pada 2009 oleh pihak yang bernama Satoshi Nakamoto.</p>
                <br>
                <br>
                <a href="https://www.bitcoin.co.id/" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="<?php echo base_url()."img/eth.jpg"?>" alt="">
                <h3>Ethereum</h3>
                <p>sistem blockchain open-source terdesentralisasi yang menampilkan cryptocurrency-nya, Ether.</p>
                <br>
                <br>
                <a href="https://ethereum.org/en/" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="<?php echo base_url()."img/terra.png"?>" alt="">
                <h3>Terra</h3>
                <p>Terra yaitu merupakan Mata uang digital yang termasuk adalah salah satu cryptocurrency terbaik yang akan bernilai investasi pada tahun 2022.</p>
                <a href="https://www.terra.money/" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="<?php echo base_url()."img/solana.png"?>" alt="">
                <h3>Solana </h3>
                <p> diluncurkan pada April 2019 untuk menyediakan solusi keuangan terdesentralisasi (DeFi) seperti pemrosesan pembayaran, kontrak pintar, stablecoin, layanan pinjaman peer-to-peer, dan banyak lagi.</p>
                <a href="https://solana.com/" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="<?php echo base_url()."img/shiba.png"?>" alt="">
                <h3>Shiba Inu</h3>
                <p> Shiba Inu atau SHIB pertama kali diluncurkan pada Agustus 2020. ni adalah salah satu mata uang kripto terbaik yang layak untuk diinvestasikan pada tahun 2022.</p>
                <br>
                <br>
                <a href="https://shibatoken.com/" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="<?php echo base_url()."img/feather.png"?>" alt="">
                <h3>Feathercoin</h3>
                <p> Feathercoin adalah jenis cryptocurrency yang bersifat open source. Jenis mata uang kripto ini dibuat oleh Peter Bushnell, seorang IT officer di Brasenose College</p>
                <br>
                <br>
                <a href="https://feathercoin.com/" class="btn">read more</a>
            </div>
        </div>
        <!--Kuliner-->
        <section class="shop" id="shop">
            <h1 class="heading">Konversi Cryptocurrency ke dollar</h1>
            <div class="swiper product-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/grafikbtc.png"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/grafikbtc.png"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Bitcoin</h3>
                            <div class="price">$29.884,50</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/grafikrth.png"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/grafikrth.png"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Ethereum </h3>
                            <div class="price">$2.062,73</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/graifterrea.png"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/graifterrea.png"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>terra </h3>
                            <div class="price">$0.0000000016</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/grafiksolana.jpg"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/grafiksolana.jpg"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Solana </h3>
                            <div class="price">$51,81 </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/grafikshiba.png"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/grafikshiba.png"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Shiba Inu</h3>
                            <div class="price">$0,00001239</div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="<?php echo base_url()."img/grafikftc.jpg"?>" alt="">
                            <div class="icons2">
                                <a href="#" class="fas fa-shopping-cart"></a>
                                <a href="<?php echo base_url()."img/grafikftc.jpg"?>" class="fas fa-eye"></a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content2">
                            <h3>Feathercoin </h3>
                            <div class="price">$0.016</div>
                        </div>
                    </div>
                        
                    </div>
                </div>
                <br>
                <br>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
        </section>
        <h1 class="heading">Para Penemu Cryptocurrency</h1>
       
                <center><table class="tabel1">
                <tr>
                    <td>No</td>
                    <td>Mata Uang</td>
                    <td>Nama</td>
                    <td>Negara</td>
                    <td>Tahun</td>
                    <td>Aksi</td>
                    <td>Aksi</td>

                </tr>
                <?php
                    foreach($data as $dat){
                        echo "<tr>";
                                echo"<td>" .$dat['no']."<br>";
                                echo"<td> " .$dat['mata_uang']."<br>";
                                echo"<td> " .$dat['nama']."<br>";
                                echo"<td> " .$dat['negara']."<br>";
                                echo"<td> " .$dat['tahun']." ";
                                echo "<td>" ."<a href=".base_url().'index.php/hal_admin/hapus_data/'.$dat['no']. ">"."Hapus</a>";
                                echo "<td>" ."<a href=".base_url().'index.php/hal_admin/ambil_datawhere/'.$dat['no']. ">"."Update</a>";
                        echo "</tr>";
                    }
                ?>

                </table>
                        </center>
                        <br>
                        <center><a href="<?php echo base_url()."index.php/hal_admin/baca_form";?>" class="btn">Tambah Data</a></center>
        
    </section>
    <!--JAVA SWIPPE-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--JAVASCRIPT-->
    <script src="<?php echo base_url()."javascript/main.js"?>"></script>

</body>
<!-- footer/Copyright -->
<footer>
    <div class="footer">
        <small>Copyright &copy; 2021 - Shaka Arisya. All Rights Reserved. </small>
    </div>
</footer>
    
</body>
</html>