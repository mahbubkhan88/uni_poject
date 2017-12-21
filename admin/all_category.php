<?php
include_once "../wub_php_class.php";
$obj = new wub_php_class();
?>
<div class="row">
    <div class="col-md-11">
<h1 align="center">All Category</h1>
<a href="?page=add_category.php" class="btn-lg btn-primary" value="">Add Category</a><br><br>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID No</td>
            <td>Category Name</td>
            <td style="width: 130px; align:center;" >Action</td>
        </tr>
        </thead>
    <?php
    /*Delete Query*/
    if(isset($_GET['row_id'])){
        $row_id = $_GET['row_id'];
        $del_data = $obj->category_delete($row_id);
        if(!$del_data){
            echo "Data Not Deleted!";
        }else{
           echo "Data Is Deleted";
        }
    }


    $ret_data = $obj->category_show();
    while($row = mysqli_fetch_array($ret_data)){
        ?>
         <script type="text/javascript">
             function del_confirm(url){
                 var msg = "Are you Sure want to delete this record?";
                 if(confirm(msg))
                 {
                     window.location.href=url
                 }
                 else
                 {
                     false;
                 }

             }

         </script>
        <tbody>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>
                <a class="btn-sm btn-primary" onclick="return confirm('are Sure?')" href="?page=update_category.php&row_id=<?php echo $row['id']; ?>"  >Edit</a>
                <a class="btn-sm btn-primary" onclick="del_confirm('?page=all_category.php&row_id=<?php echo $row['id']; ?>')" href="#" >Delete</a>
            </td>

        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
    </div>