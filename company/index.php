<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Welcome| Company Login</title>
    <link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<body>
<?php
include_once"../wub_php_class.php";
$obj = new wub_php_class();
?>
<div id="AdminBody">
    <div id="AdminPanel" style="height:370px;">
        <div align="center" class="text_position" id="AdminHead">Company Login</div>
        <div id="AdminErrorMsg">
        </div>

        <?php
        if(isset($_POST['CompLogin'])){
            $company_info = $obj->company_login($_POST['emailid'],$_POST['Password']);
            if(mysqli_num_rows($company_info)>0){
                $row = mysqli_fetch_array($company_info);
                $_SESSION['company_name'] = $row['company_name'];
                $_SESSION['id']= $row['id'];
                echo"<script>window.location.href='home.php'</script>";
            }
        }

        ?>

        <form id="AdminForm" action="" method="post">
            <fieldset>
                <legend><strong>Company Login</strong></legend>
                <table border="0" cellpadding="6" cellspacing="6">
                    <tr>
                        <td style="text-align:right;"><b><div style="width:100px;">Email ID :</div></b></td>
                        <td><input type="text" style="padding:3px;" size="30" name="emailid" id="emailid"></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;"><b>Password :</b></td>
                        <td><input type="password" style="padding:3px;" size="30" name="Password" id="Password"></td>
                    </tr>
                    <tr style="height:50px; margin-top:15px;">
                        <td>&nbsp;</td>
                        <td><input type="submit" name="CompLogin" value="Login"/></td>
                        <!--<input type="hidden" name="AdminLogin" value="ok"/>-->
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>