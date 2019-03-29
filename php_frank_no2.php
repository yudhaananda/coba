<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        function tampil($nim) {
            $fak = cekFak(substr($nim, 2, 3));
            $jur = cekJur($fak, substr($nim, 5, 2));
            $jal = cekJal(substr($nim, 7, 3));
            echo "Informasi Anda:<br>";
            echo "Lama Kuliah: ".(date('Y') - ((int) "20".substr($nim, 0, 2)))." Tahun.<br>";
            echo "Fakultas: ".$fak."<br>";
            echo "Jurusan: ".$jur."<br>";
            echo "Jalur: ".$jal."<br>";
        }

        function cekFak($kode) {
            if ($kode == 515) {
                return "FILKOM";
            } else if ($kode == 521) {
                return "FISIP";
            } else if ($kode == 522) {
                return "FTP";
            }
        }
        
        function cekJur($fak, $kode) {
            switch ($fak) {
                case "FILKOM":
                if ($kode == 01) {
                    return "TIF";
                } else if ($kode == 02) {
                    return "SI";
                } else if ($kode == 03) {
                    return "PTI";
                } else if ($kode == 04) {
                    return "TI";
                }
                break;
                case "FISIP":
                if ($kode == 01) {
                    return "SOSIOLOGI";
                }
                break;
                case "FTP":
                if ($kode == 01) {
                    return "ILMU POLITIK";
                }
                break;
            }
        }

        function cekJal($kode) {
            if ($kode == 011) {
                return "MANDIRI";
            } else if ($kode == 521) {
                return "SBMPTN";
            } else {
                return "SNMPTN";
            }
        }
    ?>
</head>
<body>
<body>
    <form action="nomor2.php" method="post" name="input">
        Nama Anda: <input type="text" name="nim" pattern="\d{15}" required>
        <br>
        <input type="submit">
    </form>
    <h1>
        <?php
            if ($_POST != null) {
                tampil($_POST['nim']);
            }
        ?>
    </h1>
</body>
</html>