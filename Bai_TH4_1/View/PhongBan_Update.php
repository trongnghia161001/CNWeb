<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phòng ban</title>
</head>
<body>
    <h2>Cập nhật phòng ban: </h2>
    <form action="C_PhongBan.php" method="post">
        <table>
        <tr>
                <td>IDPB: </td>
                <td><input type="text" name="IDPB" readonly value='<?php echo $phongban->IDPB ?>'></td>   
            </tr>
            <tr>
                <td>Tên phòng ban: </td>
                <td><input type="text" name="Tenpb" value='<?php echo $phongban->Tenpb ?>'></td>
            </tr>
            <tr>
                <td>Mô tả: </td>
                <td><input type="text" name="Mota" value='<?php echo $phongban->Mota ?>'></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="updatee" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>