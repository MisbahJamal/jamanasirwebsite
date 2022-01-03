<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="bootstrap5/css1/main.css" rel="stylesheet">
    <link href="bootstrap5/css1/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bildaarpro</title>
</head>
<body>
    <?php
    include("functions/function.php")
    ?>
    <div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php

                $bildaar_id = 1;
                echo $bildaar_id;
                if ($bildaar_id = $_GET['bildaar_id']){
                    
                   $get_bildaar = "SELECT * FROM `bildaar` WHERE `bildaar_id`=".$bildaar_id.";";
                   
                   $bildaar_query_result = run_query($get_bildaar);
                   
                   while($bildaar=mysqli_fetch_array($bildaar_query_result)){

                    ?>
                <form action="/fyp_design/functions/control.php" method="GET">
                    <input type="hidden" name="update_bildaar" value = <?php echo $bildaar['bildaar_id']; ?> ><?php echo $bildaar['bildaar_id']; ?></p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-name">Name</span>
                        <input type="text" class="form-control" name="bildaar_name" placeholder=<?php echo $bildaar['bildaar_name']; ?> aria-label="Name"
                            aria-describedby="basic-name">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-work-type">Work Type</span>
                        
                        <select class="form-select form-select-sm" name='bildaar_type' aria-label=".form-select-sm basic-work-type">
                            <option selected>Click Here to Select</option>
                            <option value="driver">Driver</option>
                            <option value="truck_loader">Truck Loader</option>
                            <option value="sweeper">Sweeper</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-email">Email</span>
                        <input type="email" class="form-control" name="bildaar_mail" placeholder=<?php echo $bildaar['bildaar_mail'];?>
                            aria-label="Email" aria-describedby="basic-email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-num">Phone</span>
                        <input type="text" class="form-control" name="bildaar_phone" placeholder=<?php echo $bildaar['bildaar_phone']; ?>
                            aria-label="Phone" aria-describedby="basic-num">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-cnic">CNIC</span>
                        <input type="text" class="form-control" name="bildaar_cnic" placeholder=<?php echo $bildaar['bildaar_cnic']; ?>
                            aria-label="Cnic" aria-describedby="basic-cnic">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-date">Start Date</span>
                        <input type="date" class="form-control" name="start_date" placeholder=<?php echo $bildaar['start_date']; ?>
                            aria-label="startdate" aria-describedby="basic-date">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-enddate">End Date</span>
                        <input type="date" class="form-control" name="end_date" placeholder=<?php echo $bildaar['end_date']; ?>
                            aria-label="enddate" aria-describedby="basic-enddate">
                    </div>

                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-ssv">Select SSV</span>
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm basic-ssv">
                            <option selected>Click Here to Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-area">Area</span>
                        <input type="text" class="form-control" name="bildaar_area" placeholder=<?php echo $bildaar['bildaar_area']; ?>
                            aria-label="council" aria-describedby="basic-area">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="bildaar-img">
                    </div>
                    <center>
                    <?php echo '<input  type = "submit" value="Update Profile">'; ?>
                    </center>
                </form>
                <?php
                }
            }
            ?>
            </div>

        </div>
    </div>
</div>

<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-3 " style="border: black 3px solid;">
        <div class="d-flex">
            <div class="image"> <img src="images/banuci.JPEG"  width="140" height="220"
                    style=" border-radius:25px; padding-right: 10px;"> </div>
            <div class="ml-3 w-100">
                <?php 
                
                
                $get_bildaar = "SELECT * FROM `bildaar` WHERE `bildaar_id`=".$bildaar_id.";";

                $bildaar_query_result = run_query($get_bildaar);
                   
                   while($bildaar=mysqli_fetch_array($bildaar_query_result)){
                ?>
                <h5 class="mb-0 mt-0"><?php echo $bildaar['bildaar_name']; ?></h5> <span><?php echo $bildaar['bildaar_type']; ?></span>
                <h6 class="mb-0 mt-2"><?php echo $bildaar['bildaar_phone']; ?></h6>
                <h6 class="mb-0 mt-2"><?php echo $bildaar['bildaar_cnic']; ?></h6>
                <h6 class="mb-1 mt-1"> <a href="mailto: abdulsamad31650@gmail.com"><?php echo $bildaar['bildaar_mail']; ?></a> </h6>
                <h6 class="mb-0 mt-2">Start Date: <?php echo $bildaar['start_date']; ?> </h6>
                <h6 class="mb-0 mt-2">End Date: <?php echo $bildaar['end_date']; ?> </h6>
        
                <div class="button mt-2 d-flex flex-row align-items-center">
                    <!-- <button style="margin-right:10px;" class="btn btn-sm btn-outline-primary w-100"> -->
                    <?php echo '<a href="ssvprofile.php?ssv_id='.$bildaar['ssv_id'].'"><button class="btn btn-sm btn-dark w-100 ">SSV Profile</button></a>'; ?>
                    <!-- <a href="ssvprofile.php?ssv_id='"<?php echo $bildaar['bildaar_name']; ?>"'" style="text-decoration: none;">  SSV Profile </a> -->
                    <!-- </button> -->
                    <!-- Button trigger modal -->

                    <button type="button" class="btn btn-sm btn-primary w-50 " data-bs-toggle="modal"
                        data-bs-target="#editProfile">
                        Edit
                    </button>
                   <?php
                   }
                    ?>
                </div>
            </div>
        </div>
    </div>





    <!--  -->

</div>


<script src="bootstrap5/js1/bootstrap.min.js"></script>
</body>
</html>



<!-- Modal -->

