<div class="row">
<?php
include_once "../wub_php_class.php";
$obj = new wub_php_class();
?>
    <div class="col-md-11">
<h1 align="center">All Discount Card</h1>
<a href="?page=add_discount.php" class="btn-lg btn-primary" value="">Add Discount Card</a><br><br>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID No</th>
            <th>Title</th>
            <th>Features1</th>
            <th>Features2</th>
            <th>Features3</th>
            <th>Features4</th>
            <th>Features5</th>
            <th>Price</th>
            <th style="width: 100px ;">Image</th>
            <th style="width: 120px ;">Action</th>
        </tr>
        </thead>
<?php
    /*Delete Query*/
    if(isset($_GET['row_id'])){
        $row_id = $_GET['row_id'];
        $del_data = $obj->discount_card_delete($row_id);
        if(!$del_data){
            echo "Data Not Deleted!";
        }else{
             echo " Row Id : ".$row_id." Deleted";
        }
    }

    $ret_data = $obj->discount_card_show();
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
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['feature1']; ?></td>
            <td><?php echo $row['feature2']; ?></td>
            <td><?php echo $row['feature3']; ?></td>
            <td><?php echo $row['feature4']; ?></td>
            <td><?php echo $row['feature5']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><img src="../discountcard/<?php echo $row['card']; ?>" width="80" height="80"></td>
            <td>
                <a class="btn-sm btn-primary" onclick="return confirm('are Sure Edit?')" href="?page=update_discount_card.php&row_id=<?php echo $row['id']; ?>"  >Edit</a>
                <a class="btn-sm btn-primary" onclick="del_confirm('?page=all_discount_card.php&row_id=<?php echo $row['id']; ?>')" href="#" >Delete</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
<div class="col-md-1"></div>
</div>