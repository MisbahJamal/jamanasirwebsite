<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="bootstrap5/css1/main.css" rel="stylesheet">
    <link href="bootstrap5/css1/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ssvprofile</title>
</head>
<body>
    <?php
    include("functions/function.php");
    
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
                if ($ssv_id = $_GET['ssv_id']){
                    
                   $get_ssv = "SELECT * FROM `ssv` WHERE `ssv_id`=".$ssv_id.";";
                   
                   $ssv_query_result = run_query($get_ssv);
                   
                   while($ssv=mysqli_fetch_array($ssv_query_result)){

                    ?>
                <form action="/fyp_design/functions/control.php" method="GET">
                    <input type="hidden" name="update_ssv" value = <?php echo $ssv['ssv_id']; ?> ><?php echo $ssv['ssv_id']; ?></p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-name">Name</span>
                        <input type="text" class="form-control" name="ssv_name" placeholder=<?php echo $ssv['ssv_name']; ?>
                            aria-label="Name" aria-describedby="basic-name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-email">Email</span>
                        <input type="email" class="form-control" name="ssc_mail" placeholder=<?php echo $ssv['ssc_mail']; ?>
                            aria-label="Email" aria-describedby="basic-email">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-ssv-type">SSV Type</span>
                        
                        <select class="form-select form-select-sm" name= "ssv_type" aria-label=".form-select-sm basic-ssv-type">
                            <option>Click Here to Select</option>
                            <?php 
                            if ($ssv['ssv_type'] === 'Manager'){
                            ?>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Manager" selected>Vehicle Manager</option>
                            <?php
                            }
                            elseif($ssv['ssv_type'] === 'Supervisor'){
                                ?>
                            <option value="Supervisor" selected>Supervisor</option>
                            <option value="Manager">Vehicle Manager</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-num">Phone</span>
                        <input type="text" class="form-control" name="ssv_phone" placeholder=<?php echo $ssv['ssv_phone']; ?>
                            aria-label="Phone" aria-describedby="basic-num">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-date">Start Date</span>
                        <input type="date" class="form-control" name="start_date" placeholder=<?php echo $ssv['start_date']; ?>
                            aria-label="date" aria-describedby="basic-date">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-area">Area</span>
                        <input type="text" class="form-control" name="ssv_area" placeholder=<?php echo $ssv['ssv_area']; ?>
                            aria-label="council" aria-describedby="basic-area">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="employee-img">
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
    <div class="card p-3" style="border: black 3px solid;">
        <div class="d-flex align-items-center">
            <div style="height: 200px !important;" > <img src="images/banuci.JPEG" class="" width="140" height="170px"
                    style=" border-radius:30px !important; padding-right: 10px;"> 
                    
                </div>
            <div class="ml-3 w-100">
                <?php
                if ($ssv_id = $_GET['ssv_id']){
                    
                   $get_ssv = "SELECT * FROM `ssv` WHERE `ssv_id`=".$ssv_id.";";
                   
                   $ssv_query_result = run_query($get_ssv);
                   
                   while($ssv=mysqli_fetch_array($ssv_query_result)){
                    ?>
                    <h5 class="mb-0 mt-0"><?php echo $ssv['ssv_name']; ?></h5> 
                <span style=""><b> <?php echo $ssv['ssv_type']; ?> </b></span>
                <h6 class="mb-0 mt-2"><?php echo $ssv['ssv_phone']; ?> </h6>
                <h6 class="mb-1 mt-1"> <a href="mailto: abdulsamad31650@gmail.com"><?php echo $ssv['ssc_mail']; ?></a> </h6>

                <h6 class="mb-0 mt-2"><?php echo $ssv['ssv_area']; ?> </h6>
                <h6 class="mb-0 mt-2"><?php echo $ssv['start_date']; ?> </h6>


                <div class="button mt-2 d-flex flex-row align-items-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#editProfile">
                        Edit
                    </button>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container justify-content-center" style = "position:relative; top:30px">
    <h3 style = "text-align: center;">Bildaars Under this SSV</h3>
</div>

<center>
<table class="table table-striped " style="color: black;width: 90%; border: 1px black solid; margin-top: 40px;">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Area</th>
        <th scope="col">Type</th>
        <th scope="col">Phone</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    <tbody>
    <?php 
                //    include("functions/function.php");
                   $get_bildaar = "SELECT * FROM `bildaar` WHERE ssv_id = '".$ssv_id."';";
                   
                   $bildaar_query_result = run_query($get_bildaar);
                   
                   while($bildaar=mysqli_fetch_array($bildaar_query_result)){
                       $bildaar_id = $bildaar['bildaar_id']
                    ?>
                       <tr>
        <th scope="row"><?php echo $bildaar['bildaar_id']; ?></th>
        <td><?php echo $bildaar['bildaar_name']; ?></td>
        <td><?php echo $bildaar['bildaar_area']; ?></td>
        <td><?php echo $bildaar['bildaar_type']; ?></td>
        <td><?php echo $bildaar['bildaar_phone']; ?></td>
        <td><?php echo '<a href="bildaarprofile.php?bildaar_id=' . $bildaar_id . '"><button class="btn btn-dark">View Profile</button></a>'; ?> </td>
        <!-- <td><a href="ssvprofile.php?".$ssv_id.><button class="btn btn-dark">View Profile</button></a></td> -->
      </tr>
                       
                       
                    <?php
                       
                   }
                   ?>
      <!-- <tr>
        <th scope="row">1</th>
        <td>Abdul Samad Khan</td>
        <td>baktganj</td>
        <td>Waste manager</td>
        <td><a href="ssvprofile.html"><button class="btn btn-dark">View Profile</button></a></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Muhammad Afaq</td>
        <td>Sheikh Multoon</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Muhammad Adnan</td>
        <td>Dosehra Chowk</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sami Ullah</td>
        <td>baktganj</td>
        <td>Waste manager</td>
        <td><button class="btn btn-dark">View Profile</button></td>
      </tr> -->
    </tbody>
  </table>
</center>

<script src="bootstrap5/js1/bootstrap.min.js"></script>
</body>
</html>



<!-- Modal -->

