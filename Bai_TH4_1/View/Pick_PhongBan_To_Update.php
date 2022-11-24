<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phòng ban</title>
</head>
<body>
    <h2>Chọn phòng ban:</h2>
    <form action="C_PhongBan.php" method="post">
        <table>
            <tr>
                <td>Chọn ID phòng ban cần cập nhật: </td>
                <td>
                <?php
                    $link = mysqli_connect('localhost','root','') or die('Could not connect:' .mysqli_connect_error());
                    $db_selected = mysqli_select_db($link,'DULIEU');
                ?>
                <select name="IDPB">
                <option value="" hidden>Chọn ID phòng ban</option>
                <?php
                    $query = "SELECT IDPB FROM phongban";
                    $result = $link->query($query);
                    if ($result->num_rows > 0) {
                        while ($optionData = $result->fetch_assoc())
                        {
                            $option = $optionData['IDPB'];
                ?>
                            <option ><?php echo $option;?> </option>
                <?php
                    }
                }
                ?>
            </select>
                </td>
            </tr>
            <tr>
                <td colspan="1" align="center"><input type="submit" name="chooseToUpdatee" value="Chọn"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>