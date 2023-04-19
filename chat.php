<?php
    include('config.php');
    $query = "select * from appchat ORDER BY id DESC";
    $run = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($run)){
        $name = $row['name'];
        $mag = $row['mag'];
        $dta = $row['data'];
?>
<div class="list-user">
        <span  style="color: #ffffffd5;"><?php echo $name ?></span>
        <span id="on"></span>
            <span style="color: rgba(250, 235, 215, 0.479);font-size: 15px;">:</span>
               <span><?php echo $mag ?></span>
                <span style="float: right; color:#ffffff70"><?php echo $dta?></span>
</div>
<?php }?>
