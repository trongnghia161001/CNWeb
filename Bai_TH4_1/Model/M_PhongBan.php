<?php
include_once("E_PhongBan.php");
class Model_PhongBan
{
    public function __construct()
    {
    }

    public function getAllPhongBan()
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_connect_error());
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "SELECT * FROM phongban");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $Tenpb = $row['Tenpb'];
            $Mota = $row['Mota'];
            while ($i != (int)$IDPB)    $i++;
            $phongbans[$i++] = new Entity_PhongBan($IDPB, $Tenpb, $Mota);
        }
        return $phongbans;
    }

    public function getPhongBanDetail($IDPB)
    {
        $allPhongBan = $this->getAllPhongBan();
        return $allPhongBan[$IDPB];
    }

    public function addPhongBan($IDPB, $Tenpb, $Mota)
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_connect_error());
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "INSERT INTO phongban (`IDPB`, `Tenpb`, `Mota`) VALUES ('$IDPB','$Tenpb','$Mota')");
        mysqli_close($link);
    }

    public function updatePhongBan($IDPB, $Tenpb, $Mota)
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_connect_error());
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "UPDATE phongban SET `Tenpb` = '" . $Tenpb . "', `Mota` = '" . $Mota . "' WHERE IDPB = '" . $IDPB . "'");
        mysqli_close($link);
    }

    public function deletePhongBan($IDPB)
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_connect_error());
        mysqli_select_db($link, 'DULIEU');
        $rs = mysqli_query($link, "DELETE FROM phongban WHERE IDPB = '" . $IDPB . "'");
        mysqli_close($link);
    }

    public function searchPhongBan($thongtin, $timkiem)
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_connect_error());
        $db_selected = mysqli_select_db($link, 'dulieu');
        if ($timkiem == "IDPB") {
            if ($thongtin == false) {
                $rs = mysqli_query($link, "SELECT * FROM phongban");
            } else {
                $rs = mysqli_query($link, "SELECT * FROM phongban WHERE IDPB='$thongtin'");
            }
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu bang PHONG BAN</caption>';
            echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
            }
            echo '<TABLE>';
        } else if ($timkiem == "Tenpb") {
            if ($thongtin == false) {
                $rs = mysqli_query($link, "SELECT * FROM phongban");
            } else {
                $rs = mysqli_query($link, "SELECT * FROM phongban WHERE Tenpb like '%$thongtin%'");
            }
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu bang PHONG BAN</caption>';
            echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
            }
            echo '<TABLE>';
        } elseif ($thongtin == false && $timkiem == false) {
            $rs = mysqli_query($link, "SELECT * FROM phongban");
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu bang PHONG BAN</caption>';
            echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
            }
            echo '<TABLE>';
        } elseif ($timkiem == false) {
            $rs = mysqli_query($link, "SELECT * FROM phongban");
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu bang PHONG BAN</caption>';
            echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
            }
            echo '<TABLE>';
        } else {
            if ($thongtin == false) {
                $rs = mysqli_query($link, "SELECT * FROM phongban");
            } else {
                $rs = mysqli_query($link, "SELECT * FROM phongban WHERE Mota like '%$thongtin%'");
            }
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu bang PHONG BAN</caption>';
            echo '<TR><TH>IDPB</TH><TH>Tên phòng ban</TH><TH>Mô tả</TH><</TR>';
            while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                echo '<TR><TD>' . $row['IDPB'] . '</TD><TD>' . $row['Tenpb'] . '</TD><TD>' . $row['Mota'] . '</TD><TR>';
            }
            echo '<TABLE>';
        }
    }
}
