<?php
class wub_php_class{
    public $localhost="localhost";
    public $username="root";
    public $password="";
    public $dbname="final_wub";
    public $connet_db;

    public function __construct(){
        $this->connet_db = new mysqli($this->localhost,$this->username,$this->password,$this->dbname);
        if($this->connet_db->connect_error){
            echo mysqli_connect_error()."Database Not Connected";
        }else{
            //echo"Database Connected";
        }
    }
    public function admin_login($username,$pw){
        $del = "SELECT * FROM admin WHERE user_name  = '$username' AND password = '$pw'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }
    public function user_profile_show($id){
        $show = "SELECT * FROM customer WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Company Show */
    public function company_profile_show($id){
        $show = "SELECT * FROM company WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    public function show_my_discard_id($id){
        $show = "SELECT * FROM card_purchases WHERE custo_id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    public function company_login($email,$pw){
        $del = "SELECT * FROM company WHERE email  = '$email' AND password = '$pw'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }

    public function customer_login($email,$pw){
        $del = "SELECT * FROM customer WHERE email  = '$email' AND password = '$pw'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;

    }

    public function slider_insert($image){

        $imagesource = $image["tmp_name"];
        $image = $image["name"];
        $ins = " INSERT INTO slider(image) VALUES ('$image')";
        if (!mysqli_query($this->connet_db,$ins)){
            echo"Data Not Save";
        }else{
            move_uploaded_file($imagesource, "../slider/" . $image);
            echo"Slider Image Insert Success";

        }
    }
    /*Company Registration Insert */
    public function company_info_insert ($companyname,$cat_id,$address,$email,$phoneno,$pass,$image){

        $imagesource = $image["tmp_name"];
        $image = $image["name"];
        $ins = "INSERT INTO company (company_name,cat_id,address,email,contact_no,password,image) VALUES ('$companyname','$cat_id','$address','$email','$phoneno','$pass','$image')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            move_uploaded_file($imagesource, "img_comp/" . $image);
            if(success)
            {
                echo "<script type=\"text/javascript\">".
                    "alert('Registration Successful');".
                    "</script>";
            }
        }
    }
    /*Customer Registration Insert */
    public function customer_info_insert ($name,$address,$email,$phoneno,$pass,$image){

        $imagesource = $image["tmp_name"];
        $image = $image["name"];
        $ins = "INSERT INTO customer (name,address,email,contact_no,password,image) VALUES ('$name','$address','$email','$phoneno','$pass','$image')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            move_uploaded_file($imagesource, "img_custo/" . $image);
         /*   if(success)*/
            {
                echo "<script type=\"text/javascript\">".
                    "alert('Registration Successful');".
                    "</script>";
            }
        }
    }
    /*Category Insert */
    public function category_insert ($name){

        $ins = "INSERT INTO category (name) VALUES ('$name')";
        if(!mysqli_query($this->connet_db,$ins)) {
            echo"Data is not saved";
        }else{
            /*echo "Category Add Successful";*/

            {
                echo "<script type=\"text/javascript\">".
                    "alert('Category Add Successful');".
                    "</script>";
            }
        }
    }
    /*Product Insert */
    public function product_insert ($comp_id,$prod_name,$deteils,$price,$max_purces,$discount,$image){
        $imagesource = $image["tmp_name"];
        $image = $image["name"];
        $ins = "INSERT INTO add_product (com_id,prod_name,deteils,price,max_purchases,discount,image) VALUES ('$comp_id','$prod_name','$deteils','$price','$max_purces','$discount','$image')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            move_uploaded_file($imagesource, "../img_product/" . $image);
           /* echo "Product Add Successful";*/
            {
                echo "<script type=\"text/javascript\">".
                    "alert('Product Add Successful');".
                    "</script>";
            }
        }
    }
    /*Discount Card Add */
    public function dicountcard_insert ($title,$feature1,$feature2,$feature3,$feature4,$feature5,$price,$image){
        $imagesource = $image["tmp_name"];
        $image = $image["name"];
        $ins = "INSERT INTO add_discount_card (title,feature1,feature2,feature3,feature4,feature5,price,card) VALUES ('$title','$feature1','$feature2','$feature3','$feature4','$feature5','$price','$image')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            move_uploaded_file($imagesource, "../discountcard/" . $image);
           /* echo "Discount Card Add Successful";*/
            {
                echo "<script type=\"text/javascript\">".
                    "alert('Discount Card Add Successful');".
                    "</script>";
            }
        }
    }
    /* All Cpmpany */
    public function data_show_allcompany(){
        $show = "SELECT * FROM company order by id desc LIMIT 9";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* cat_wise_show_allcompany */
    public function cat_wise_show_allcompany($id){
        $show = "SELECT * FROM company where cat_id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    public function card_search($cardid,$com_id){
        $show = "SELECT * FROM customer_product_buy WHERE card_id  ='$cardid' and com_id  ='$com_id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    public function card_search_id($cardid){
        $show = "SELECT * FROM customer_product_buy WHERE card_id  ='$cardid' ";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* cat_wise_show_allcompany */
    public function card_search1($cardid){
        $show = "SELECT * FROM customer_product_buy WHERE card_id  ='$cardid'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Perchases product show*/
    public function search_rsult($id){
        $show = "SELECT cpb.comp_name as comp_name,cpb.prod_name as prod_name,adcrd.title as card_name,adcrd.feature1 as feature1,adcrd.feature2 as feature2,
                        cum.name as nam,cum.address as address,cum.email as email
                FROM customer_product_buy cpb
                 INNER JOIN card_purchases crdp ON crdp.card_id=cpb.card_id
                 INNER JOIN add_discount_card adcrd ON adcrd.id=crdp.dis_card_id
                 INNER JOIN customer cum ON cum.id=crdp.custo_id
                  WHERE cpb.card_id='$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* Id and company  Wise All Product show */
    public function search_rsult1($com_id,$card_id){
        $show = "SELECT * FROM customer_product_buy where com_id = '$com_id' and card_id = '$card_id'  ";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* Id Wise All Product show */
    public function search_rsult_id($card_id){
        $show = "SELECT * FROM customer_product_buy where card_id = '$card_id'  ";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* All Product */
    public function data_show_allproduct($com_id){
        $show = "SELECT * FROM add_product where com_id = '$com_id' order by id desc";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* All discount card */
    public function data_show_discountcard(){
        $show = "SELECT * FROM add_discount_card order by id desc";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* All discount Product */
    public function discount_all_product_show(){
        $show = "SELECT * FROM add_product order by id desc";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* Silder Show */
    public function slider_show(){
        $show = "SELECT * FROM slider ";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /* Customer Product Buy  */
    public function customer_product_buy ($com_id,$CardNo,$com_name,$prod_name){

        $ins = "INSERT INTO customer_product_buy (com_id,card_id,comp_name,prod_name) VALUES ('$com_id','$CardNo','$com_name','$prod_name')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            /*echo "Product Buy Entry Successful";*/
            echo "<script type=\"text/javascript\">".
                "alert('Product Buy Entry Successful');".
                "</script>";
        }
    }

    public function show_company_product($com_id){

        $show = "SELECT * FROM add_product where com_id = '$com_id' order by id desc";
        $res = mysqli_query($this->connet_db,$show);

          while($product = mysqli_fetch_array($res)){
              echo"<option value='".$product['prod_name']."'>".$product['prod_name']."</option>";
          }
    }

    public function customer_product_buy_dashboard ($CardNo,$com_name,$prod_name){

        $ins = "INSERT INTO customer_product_buy (com_id,card_id,comp_name,prod_name) VALUES ($CardNo','$com_name','$prod_name')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            /*echo "Product Buy Entry Successful";*/
            echo "<script type=\"text/javascript\">".
                "alert('Product Buy Entry Successful');".
                "</script>";
        }
    }
    /*Category Delete*/
    public function category_delete($id){
        $del = "DELETE FROM category WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }
    /*Category Show*/
    public function category_show(){
        $show = "SELECT * FROM category";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Category Update*/
    public function category_show_edit($id){
        $show = "SELECT * FROM category WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Category Update*/
    public function category_update($id,$name){
        $up = "UPDATE category SET name='$name' WHERE id='$id'";
        if(!mysqli_query($this->connet_db,$up)){
            echo"Category not Updated!";
        }else{
            echo"Category Updated";
        }
    }
    /*Discount card Delete*/
    public function discount_card_delete($id){
        $del = "DELETE FROM add_discount_card WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }
    /*Discount Card Show*/
    public function discount_card_show(){
        $show = "SELECT * FROM add_discount_card";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    /*Discount Card Edit*/
    public function discount_show_edit($id){
        $show = "SELECT * FROM add_discount_card WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }

    /*Discount Card Update*/
    public function dicountcard_update($id,$title,$feature1,$feature2,$feature3,$feature4,$feature5,$price,$image){
       if(!empty($_FILES['Image']['name'])){
            $imagesource = $image["tmp_name"];
            $image = $image["name"];
        }else{
            $image= $_POST['curr_image'];
        }

        $up = "UPDATE add_discount_card SET title='$title',feature1='$feature1',feature2='$feature2',feature3='$feature3',feature4='$feature4',feature5='$feature5',price='$price',card='$image' WHERE id='$id'";
        if(!mysqli_query($this->connet_db,$up)){
            echo"Discount Card not Updated!";
        }else{
            echo"Discount Card Updated Successfull";

            move_uploaded_file($imagesource, "../discountcard/" . $image);

        }
    }
    /*Company Show*/
    public function company_show(){
        $show = "SELECT * FROM company";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Company Delete*/
    public function company_delete($id){
        $del = "DELETE FROM company WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }
    /*Customer Show*/
    public function customer_show(){
        $show = "SELECT * FROM customer";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Customer Delete*/
    public function customer_delete($id){
        $del = "DELETE FROM customer WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }

    /*Single product deteils Show*/
    public function sigle_product_show($id){
        $show = "SELECT * FROM add_product where id='$id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Single company all product deteils Show*/
    public function sigle_com_all_product_show($com_id){
        $show = "SELECT * FROM add_product where com_id='$com_id'";
        $res = mysqli_query($this->connet_db,$show);
        return $res;
    }
    /*Single company all product delete*/
    public function single_company_product_delete($id){
        $del = "DELETE FROM add_product WHERE id = '$id'";
        $res = mysqli_query($this->connet_db,$del);
        return $res;
    }
    /*Singale Company all product show*/
    public function product_all_info($id){
            $sql = "SELECT p.prod_name as p_name,p.deteils as deteils,p.price as price,p.max_purchases as purcestime,p.discount as discount,p.image as image,com.company_name  as com_name ,p.id as id
                FROM company com
                 INNER JOIN add_product p ON  p.com_id=com.id
                  WHERE com.id='$id' ORDER by p.id DESC";
        $res = mysqli_query($this->connet_db,$sql);
        return $res;
    }

    /*Customer Discount Card Purches */
    public function discount_card_purches ($custo_id,$card_row,$card_title,$price){


        $sql = "Select id FROM card_purchases order by id DESC";
        $res = mysqli_query($this->connet_db,$sql);
        if(mysqli_num_rows($res)>0){
            $row= mysqli_fetch_array($res);
            $last_id =$row['id'];

            $card_id =$card_title+1600000+$last_id;
        }else{
            $card_id =$card_title+1600000;
        }
   $ins = "INSERT INTO card_purchases(custo_id,dis_card_id,card_id,price) VALUES ('$custo_id','$card_row','$card_id','$price')";
        if(!mysqli_query($this->connet_db,$ins)){
            echo"Data is not saved";
        }else{
            echo"<script>window.location.href='?page=customer_report.php'</script>";
        }



    }

}