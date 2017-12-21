<?php
$card_id= $_SESSION['card_id'];
$com_id= $_SESSION['com_id'];
$card_id_search = $obj->search_rsult($card_id);
$card_id_search1 = $obj->search_rsult1($com_id,$card_id);
?>
<div class="row">
    <div class="col-md-6">
        <?php
        $row = mysqli_fetch_array($card_id_search)
        ?>
        <h2 class="remove_margin" STYLE="color: #C73834;">Discount Card Name:- <?php   echo $row['card_name'] ; ?></h2>
        <ul class="remove_margin">
            <li><h2 style="color: #bf800c;">Customer Name: <?php   echo $row['nam'] ; ?></h2></li>
            <li><h2 style="color: #bf800c;">Address: <?php   echo $row['address'] ; ?></h2></li>
            <li><h2 style="color: #bf800c;">Email ID: <?php   echo $row['email'] ; ?></h2></li>
            <li><h3 style="color: #53A318"><?php   echo $row['feature1'] ; ?></h3></li>
            <li><h3 style="color: #53A318"><?php   echo $row['feature2'] ; ?></h3></li>

        </ul>
    </div>
    <div class="col-md-6">
        <h1 align="center">All Purchases Product</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr style="color: #53A318">
                    <td>Sl No</td>
                    <td style="width: 35%">Company Name</td>
                    <td>Product Name</td>
                </tr>
                </thead>
                <?php
                $i=1;
                while($row1 = mysqli_fetch_array($card_id_search1)){
                    ?>

        <tbody>
        <tr >
            <td style="width: 60px" align="center"><?php  echo $i; ?></td>
            <td><?php echo $row1['comp_name']; ?></td>
            <td><?php echo $row1['prod_name']; ?></td>

        </tr>
                    <?php $i++; } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>