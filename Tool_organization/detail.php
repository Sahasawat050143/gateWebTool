<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Detail</title>
</head>
<body class="bg-dark">
    <div class="container">
        <button class="btn btn-danger mt-4"><a class="text-light fw-bold" href="index.php"><i class="bi bi-arrow-bar-left"></i></a></button>
        <h1 class="d-flex justify-content-center pt-4 pb-5 fw-bold text-light">WORKING DETAIL</h1>
        <div class="row">
            <div class="col-sm-12">
                <?php include('connect.php');
                    $_work_id = $_GET['w_id'];
                    $sql = "SELECT * FROM (((tblwork INNER JOIN tblcustomer ON tblwork.tel = tblcustomer.tel)
                    INNER JOIN tblcategory ON tblwork.categoryWorkId = tblcategory.categoryWorkId)
                    INNER JOIN tblemployee ON tblwork.employeeId = tblemployee.employeeId)
                    WHERE tblwork.idwork = '$_work_id'";

                    $result = mysqli_query($conn,$sql);
                    if(!$result){
                        echo "เกิดข้อผิดพลาดในการแสดงผล";
                    }
                    else{
                        $num_row = mysqli_num_rows($result);

                        if($num_row != 0){
                            while($rs = mysqli_fetch_array($result)){
                                echo "<div class='card mb-5'>";
                                echo "<div class='card-header'>";
                                echo "<div class='row'>";
                                echo "<div class='col-lg-10 fs-5'>";
                                echo "<b class = 'text-primary'><i class='bi bi-card-list'></i> WORK ID</b> : $rs[idWork]<br>"; 
                                echo "<b class = 'text-primary'><i class='bi bi-person-fill'></i> CUSTOMER NAME</b> : $rs[name]<br>";
                                echo "<b class = 'text-primary'><i class='bi bi-calendar3'></i> DATELINE</b> : $rs[dateLine]<br>";
                                echo "<b class = 'text-primary'><i class='bi bi-person-workspace'></i> RESPONABLE PERSON</b> : $rs[employeeName] $rs[employeeLastname]";
                                echo "</div>";
                                echo "<div class='col-lg-2'>";
                                if($rs['status'] == 1){
                                    echo "<p class='p-3 bg-danger rounded text-light text-center fw-bold mt-3'>Working</p>";
                                }else{
                                    echo "<p class='p-3 bg-success rounded text-light text-center fw-bold mt-3'>Success</p>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='card-body'>";
                                echo "<h4 class='card-title pb-3 pt-3'>";
                                echo "<b class='text-primary'><i class='bi bi-clipboard2-check-fill'></i> Requirement</b>";
                                echo "</h4>";
                                echo "<h5 class='card-title'>";
                                echo "$rs[headingWork]";
                                echo "</h5>";
                                echo "<div class='card-text'>";
                                echo "$rs[requireWork] Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempora culpa laudantium vitae quo magnam incidunt rerum saepe excepturi. Cumque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis voluptatem, quia vitae blanditiis error est dignissimos rem commodi earum cum officia illo explicabo vel dicta repellendus magnam ducimus iste. Voluptatum iure magnam accusamus pariatur quidem. Est molestiae nisi atque corporis consequuntur excepturi illo explicabo, laborum perferendis. Distinctio molestias aliquid dicta aut culpa nihil exercitationem nostrum, animi praesentium beatae asperiores iusto. Expedita tenetur eum dignissimos sed commodi ea pariatur beatae nisi culpa doloremque velit nemo illum rerum vitae quidem repellendus impedit dolorum doloribus ex, facere, laborum dicta consequatur optio! Rem at ex placeat reprehenderit quos quo mollitia? Esse, ullam rem? Itaque quibusdam quasi iure eaque at autem corrupti est recusandae? Esse odit error mollitia quas et! Qui temporibus reiciendis veniam ut quibusdam sunt aliquam accusantium enim fugit harum quo fugiat voluptates pariatur quod nemo sed recusandae, cupiditate minus atque itaque suscipit fuga? Eveniet delectus fugit libero doloribus, magni illo, facilis voluptas nam laborum odio, error architecto tenetur doloremque harum ullam aspernatur corrupti. Quod doloribus quas facere, nostrum minima fugiat voluptates rerum consectetur architecto hic ad et ullam nisi tempora, laboriosam delectus dolores eum? Enim soluta et officia inventore nesciunt eligendi repellendus sequi natus repudiandae laborum delectus distinctio maiores aperiam, voluptas ipsa.";
                                echo "</div>";
                                echo "<h4 class='card-title pt-5 pb-2'>";
                                echo "<b class='text-primary'><i class='bi bi-graph-up-arrow'></i> Progress</b>";
                                echo "</h4>";
                                echo "<div class='card-text'>";
                                echo "$rs[progress] Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempora culpa laudantium vitae quo magnam incidunt rerum saepe excepturi. Cumque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis voluptatem, quia vitae blanditiis error est dignissimos rem commodi earum cum officia illo explicabo vel dicta repellendus magnam ducimus iste. Voluptatum iure magnam accusamus pariatur quidem. Est molestiae nisi atque corporis consequuntur excepturi illo explicabo, laborum perferendis. Distinctio molestias aliquid dicta aut culpa nihil exercitationem nostrum, animi praesentium beatae asperiores iusto. Expedita tenetur eum dignissimos sed commodi ea pariatur beatae nisi culpa doloremque velit nemo illum rerum vitae quidem repellendus impedit dolorum doloribus ex, facere, laborum dicta consequatur optio! Rem at ex placeat reprehenderit quos quo mollitia? Esse, ullam rem? Itaque quibusdam quasi iure eaque at autem corrupti est recusandae? Esse odit error mollitia quas et! Qui temporibus reiciendis veniam ut quibusdam sunt aliquam accusantium enim fugit harum quo fugiat voluptates pariatur quod nemo sed recusandae, cupiditate minus atque itaque suscipit fuga? Eveniet delectus fugit libero doloribus, magni illo, facilis voluptas nam laborum odio, error architecto tenetur doloremque harum ullam aspernatur corrupti. Quod doloribus quas facere, nostrum minima fugiat voluptates rerum consectetur architecto hic ad et ullam nisi tempora, laboriosam delectus dolores eum? Enim soluta et officia inventore nesciunt eligendi repellendus sequi natus repudiandae laborum delectus distinctio maiores aperiam, voluptas ipsa.";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='card-footer d-flex p-3 pe-4 justify-content-lg-end'>";
                                // echo "<button type='button' data-bs-toggle='modal' class='btn btn-primary' data-bs-target='#modal_edit' data-whatever='@getbootstrap'>EDIT</button>";
                                echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modal_edit' data-whatever='@getbootstrap'>Edit</button>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                    }
                ?>
               <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT REQUIREMENT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <button class="btn-close" data-bs-dismiss=""></button>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Requirement:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Progress:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Edit</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>