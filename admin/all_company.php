<div class="row">
<?php
include_once "../wub_php_class.php";
$obj = new wub_php_class();
?>
    <div class="col-md-11">
<h1 align="center">All Company</h1>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 60px ;">ID No</th>
            <th>Company Name</th>
            <th>Address</th>
            <th>Email ID</th>
            <th>Contact No</th>
            <th style="width: 100px ;">Image</th>
            <th style="width: 60px ;">Action</th>
        </tr>
        </thead>
        <?php
        /*Delete Query*/
        if(isset($_GET['row_id'])){
            $row_id = $_GET['row_id'];
            $del_data = $obj->company_delete($row_id);
            if(!$del_data){
                echo "Data Not Deleted!";
            }else{
                echo " Row Id : ".$row_id." Deleted";
            }
        }

        $ret_data = $obj->company_show();
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
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><img src="../img_comp/<?php echo $row['image']; ?>" width="80" height="80"></td>
            <td>
                <a class="btn-sm btn-primary" onclick="del_confirm('?page=all_company.php&row_id=<?php echo $row['id']; ?>')" href="#" >Delete</a>
            </td>
        </tr>
            <?php } ?>
    </tbody>
    </table>
</div>
    </div>
    <div class="col-md-1"></div>
</div>