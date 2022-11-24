<?php 
    include_once("../Model/M_PhongBan.php");
    class Controller_PhongBan
    {
    public function __invoke()
    {
        if(isset($_GET['IDPB']))
        {
            $modelPhongBan = new Model_PhongBan();
            $phongban = $modelPhongBan->getPhongBanDetail($_GET['IDPB']);
            include_once("../View/PhongBan_Detail.php");
        }

        elseif(isset($_GET['mod0'])) {
            $phongBan = new Model_PhongBan();
            $phongbanList = $phongBan->getAllPhongBan();
            include_once("../View/PhongBan_List.php");
        }

        // Thêm phòng ban

        else if(isset($_GET['mod1']))
        {
            include_once("../View/PhongBan_Add.php");
        }  
        else if(isset($_POST['insertt']))
        {
            $IDPB = $_REQUEST['IDPB'];
            $Tenpb = $_REQUEST['Tenpb'];
            $Mota = $_REQUEST['Mota'];
            $phongban = new Model_PhongBan();
            $phongban->addPhongBan($IDPB, $Tenpb, $Mota);
            $phongbanList = $phongban->getAllPhongBan();
            include_once("../View/PhongBan_List.php");
        }


        // Sửa phòng ban

        else if(isset($_GET['mod2']))
        {
            $modelPhongBan = new Model_PhongBan();
            $phongbanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/Pick_PhongBan_To_Update.php");
        }  
        else if(isset($_POST['updatee']))
        {
            $IDPB = $_REQUEST['IDPB'];
            $Tenpb = $_REQUEST['Tenpb'];
            $Mota = $_REQUEST['Mota'];
            $phongban = new Model_PhongBan();
            $phongban->updatePhongBan($IDPB, $Tenpb, $Mota);
            $phongbanList = $phongban->getAllPhongBan();
            include_once("../View/PhongBan_List.php");
        }
        else if(isset($_POST['chooseToUpdatee']))
        {
            $IDPB = $_REQUEST['IDPB'];
            $modelPhongBan = new Model_PhongBan();
            $phongban = $modelPhongBan->getPhongBanDetail($IDPB);
            include_once("../View/PhongBan_Update.php");
        }



        // Xóa phòng ban

        else if(isset($_GET['mod3']))
        {
            $modelPhongBan = new Model_PhongBan();
            $phongbanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/Pick_PhongBan_To_Delete.php");
        }  
        else if(isset($_POST['chooseToDeletee']))
        {
            $IDPB = $_REQUEST['IDPB'];
            $phongban = new Model_PhongBan();
            $phongban->deletePhongBan($IDPB);
            $phongbanList = $phongban->getAllPhongBan();
            include_once("../View/PhongBan_List.php");
        }




        //Tìm kiếm phòng ban



        else if(isset($_GET['mod4']))
        {
            include_once("../View/search.php");
        }
        else if(isset($_POST['submit'])) {
            if (isset($_POST['nhapvaothongtin'])) {
                $thongtin = $_POST['nhapvaothongtin'];
            } else {
                $thongtin = false;
            }
            if (isset($_POST['timkiem'])) {
                $timkiem = $_POST['timkiem'];
            } else {
                $timkiem = false;
            }
            $phongban = new Model_PhongBan();
            $phongban->searchPhongBan($thongtin, $timkiem);
            
        }   
    }
};
$C_PhongBan = new Controller_PhongBan();
$C_PhongBan->__invoke();
?>
