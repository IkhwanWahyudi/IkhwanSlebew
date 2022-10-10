<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="Foto/shoes.ico">
        <title> Website Penjualan Sepatu </title>
        <link rel="stylesheet" href="stylebuy.css">
        </style>
    </head>
    <body>
        <header class="head">
            <nav>
                <a> <img src="Foto/shoes.png"> </a>
                <div class="nav-links" align="center"> </div>
                <ul>
                    <li> <a href="index.php"> HOME </a> </li>
                    <li id="beli"> <a href = "buy.php"> BUY </a> </li>
                    <li> <a href="faqs.php"> FAQs </a> </li>
                    <li> <a href="tentang.php"> ABOUT ME </a> </li>
                </ul>
            </nav>
        </header>
        <div class="text-box">
            <h1 id="tema"> Website Penjualan Sepatu </h1>
            <p> Website Online Shop Terpercaya Sejak Dahulu Kala<br/>Beli Sepatu Impian Anda di Website Kami!
            </p>
        </div>
        <button>Dark Mode</button>
        <div align="center" class="formulir">
            <form action="formbuy.php" method="post">
                <table border="0" width="80%">
                    <tr class="judul">
                        <td colspan="4" align="center">
                            <strong>
                                <font size="5"> 
                                    <p>Order Sepatu!</p> 
                                    <hr color="black"> 
                                </font>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td> <br> Nama Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <input type="text" maxlength="100" name="nama" size="50" placeholder="Nama Lengkap" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> Email</td>
                        <td> <br> : </td>
                        <td> <br> <input type="email" name="email" placeholder="Alamat Email" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> Ukuran Sepatu</td>
                        <td> <br> : </td>
                        <td> <br> <input type="number" name="ukuran" min="30" max="50"></td>
                    </tr>
                    <tr>
                        <td> <br> Barang</td>
                        <td> <br> :</td>
                        <td> <br> <select name="barang" required="">
                            <option></option>
                            <option value="AeroStreet">AeroStreet</option>
                            <option value="Nike">Nike</option>
                            <option value="Converse">Converse</option>
                            <option value="Vans">Vans</option>
                            <option value="Reebok">Reebok</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> <br> Jumlah Pembelian</td>
                        <td> <br> : </td>
                        <td> <br> <input type="number" name="jumlah" min="1"></td>
                    </tr>
                    <tr>
                        <td> <br> Alamat</td>
                        <td> <br> :</td>
                        <td> <br> <textarea name="alamat" placeholder="Alamat Penerima" required=""></textarea></td>
                    </tr>
                    <tr>
                        <td> <br> Metode Pembayaran</td>
                        <td> <br> :</td>
                        <td> <br> <input type="radio" name="pembayaran" value="Credit" required=""> Credit &emsp;
                        <input type="radio" name="pembayaran" value="Cash" required=""> Cash</td>
                    </tr>
                    <tr>
                        <td colspan="4"> <br> <hr color="black"> <br> </td>
                    </tr>
                </table>
                <div class="submit">
                    <input type="submit" value="Simpan"> &emsp; <input type="reset" value="Batal">
                </div>
            </form>
        </div>
        <script src="script.js"></script>
        <!-- footer -->
        <footer class="foot1">
            <div class="icon" align="center">
                <i> <img src="Foto/whatsapp.png"> 0896 9382 7183 &emsp; </i>
                <i> <img src="Foto/instagram.png"> ikhwan_whydi &emsp; </i>
                <i> <img src="Foto/email.png"> ikhwanw06@gmail.com &emsp; </i>
            </div>
            <p align="center"> <br> @Copyright 2022 - Ikhwan - Made with HTML - CSS </p>
        </footer>
    </body>
</html>