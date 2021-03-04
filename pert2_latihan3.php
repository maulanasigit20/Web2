<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    // inisiasi variable yang digunakan
        if(isset($_POST['hitung'])){
            $bil1    =$_POST['bil1'];
            $bil2    =$_POST['bil2'];
            $operasi =$_POST['operasi'];
        
            switch ($operasi) {
                case 'tambah':
                $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                $hasil = $bil1-$bil2;
                break;
                case 'kali':
                $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                $hasil = $bil1/$bil2;
                break; 
            }
        }
    ?>
    <div class="kalkulator">
        <h4 class="judul">KALKULATOR SEDERHANA</h4>
        <form method="post" action=""> 
            <input type="text" name="bil1" class="bil" placeholder="Bilangan 1" required/>

            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>

            <input type="text" name="bil2" class="bil" placeholder="Bilangan 2" required/>
            
            <input type="submit" name="hitung" value="Submit" class="tombol"/> 
        </form>

        <?php if(isset($_POST['hitung'])){
        ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
        <?php
        }
        else{
        ?>
            <input type="text" value="" class="hasil"/>
        <?php
        }
        ?> 

    </div>
</body>
</html>