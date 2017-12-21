<div class="row">
    <div class="col-md-11">
        <h1 align="center">All Discount Product</h1>
        <?php
        $com_id=$_SESSION['id'];
        ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 60px ;">ID No</th>
                    <th>Product Name</th>
                    <th>Product Deteils</th>
                    <th>Product Price</th>
                    <th>Maxmimum Purchases</th>
                    <th>Discount</th>
                    <th style="width: 60px ;">Action</th>
                </tr>
                </thead>
                <?php
                /*Delete Query*/
                if(isset($_GET['row_id'])){
                    $row_id = $_GET['row_id'];
                    $del_data = $obj->single_company_product_delete($row_id);
                    if(!$del_data){
                        echo "Data Not Deleted!";
                    }else{
                        echo " Row Id : ".$row_id." Deleted";
                    }
                }

                $ret_data = $obj->sigle_com_all_product_show($com_id);
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
            <td><?php echo $row['prod_name']; ?></td>
            <td><?php echo $row['deteils']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['max_purchases']; ?></td>
            <td><?php echo $row['discount']; ?></td>
            <td>
                <a class="btn-sm btn-primary" onclick="del_confirm('?page=com_wise_all_product.php&row_id=<?php echo $row['id']; ?>')" href="#" >Delete</a>
            </td>
        </tr>
                    <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>