<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gate Web Studio</title>
</head>
<body>
    <?php include("navbar.php");?>
    <div class="container-fluid">
        <div class="row pt-3 justify-content-lg-end">
            <div class="col-lg-5">
                <form class="input-group" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input type="search" name="searchBox" class="form-control" placeholder="Customer Name">
                    <button class="btn btn-primary" type="submit">SEARCH</button> 
                </form>     
            </div>
            <div class="col-lg-1">
                <form class="input-group" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input class="btn btn-danger" type="submit" name="clear" value="CLEAR"></input>
                </form>  
            </div> 
        </div>   
    </div>
    
    <div class="container-fluid">
        <h1 class="d-flex justify-content-center text-light p-4 fw-bold">REQUIREMENT LIST</h1>
        <button class="btn btn-primary dropdown-toggle dropdown-toggle-split mb-3" data-toggle="dropdown">
            <span class="sr-only">SORT</span>
        </button>
        <table class="table table-light table-striped table-responsive shadow rounded" id="tableShow">
            <tr>
                <th>ID</th>
                <th>CUSTOMER NAME</th>
                <th>TEL.</th>
                <th>HEADING</th>
                <th>DATELINE</th>
                <th>CATEGORY WORK</th>
                <th>EARNEST PRICE</th>
                <th>TOTAL PRICE</th>
                <th>RESPONABLE</th>
                <th>DETAIL</th>
            </tr>
            
            <?php
                include("connect.php");
             
                if(isset($_POST["searchBox"])){
                    $_value = $_POST["searchBox"];
                    $sql = "SELECT *
                    FROM (((tblwork
                    INNER JOIN tblcustomer ON tblwork.tel = tblcustomer.tel)
                    INNER JOIN tblcategory ON tblwork.categoryWorkId = tblcategory.categoryWorkId)
                    INNER JOIN tblemployee ON tblwork.employeeId = tblemployee.employeeId)
                    WHERE tblcustomer.name = '$_value'";
                }elseif(isset($_POST["CLEAR"])){
                    $value = $_POST["CLEAR"];
                    echo $value;
                    $sql = "SELECT *
                    FROM (((tblwork
                    INNER JOIN tblcustomer ON tblwork.tel = tblcustomer.tel)
                    INNER JOIN tblcategory ON tblwork.categoryWorkId = tblcategory.categoryWorkId)
                    INNER JOIN tblemployee ON tblwork.employeeId = tblemployee.employeeId)";
                }else{
                    $sql = "SELECT *
                    FROM (((tblwork
                    INNER JOIN tblcustomer ON tblwork.tel = tblcustomer.tel)
                    INNER JOIN tblcategory ON tblwork.categoryWorkId = tblcategory.categoryWorkId)
                    INNER JOIN tblemployee ON tblwork.employeeId = tblemployee.employeeId)";
                }
                
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo "เกิดข้อผิดพลาด";
                }else{
                    $num_data = mysqli_num_rows($result);
                     
                    if($num_data!=0)
                    while($rs = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>$rs[idWork]</td>";
                        echo "<td>$rs[name]</td>";
                        echo "<td>$rs[tel]</td>";
                        echo "<td>$rs[headingWork]</td>";
                        echo "<td>$rs[dateLine]</td>";
                        echo "<td>$rs[categoryName]</td>";
                        echo "<td>$rs[earnestMoney]</td>";
                        echo "<td>$rs[totalCash]</td>";
                        echo "<td>$rs[employeeName] $rs[employeeLastname]</td>";
                        echo "<td><a href='detail.php?w_id=$rs[idWork]'><button class='btn btn-primary'>DETAIL</button></a></td>";
                        echo "</tr>";
                    }else{
                        echo "<tr>";
                        echo "<td colspan = '11'>ไม่พบข้อมูลที่ต้องการ</td>";
                        echo "</tr>";
                    }
                }  
                mysqli_close($conn);
            ?> 
        </table>
    </div>
</body>
</html>