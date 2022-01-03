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

<center>
<table  class="table table-striped table-bordered " style="color: black;width: 60%; border: 1px black solid; margin-top: 40px;">
<?php
                if ($cont_id = $_GET['cont_id']){
                    
                   $get_cont = "SELECT * FROM `container` WHERE `cont_id`=".$cont_id.";";
                   
                   $cont_query_result = run_query($get_cont);
                   
                   while($cont=mysqli_fetch_array($cont_query_result)){
                    ?>
  <tr>
    <th>Id:</th>
    <td><?php echo $cont['cont_id']; ?></td>
  </tr>
  <tr>
    <th>Name:</th>
    <td><?php echo $cont['cont_name']; ?></td>
  </tr>
  <tr>
    <th>Location:</th>
    <td><?php echo $cont['cont_location']; ?></td>
  </tr>
  <tr>
    <th>Distance:</th>
    <td><?php echo $cont['cont_distance']; ?></td>
  </tr>
  <tr>
    <th>Distance1:</th>
    <td><?php echo $cont['cont_distance1']; ?></td>
  </tr>
  <tr>
    <th>Latitude:</th>
    <td><?php echo $cont['cont_latitude']; ?></td>
  </tr>
  <tr>
    <th>Longitude:</th>
    <td><?php echo $cont['cont_longitude']; ?></td>
  </tr>
  <tr>
    <th>Status:</th>
    <td><?php echo $cont['cont_status']; ?></td>
  </tr>
  <tr>
    <th>Sensor 1:</th>
    <td><?php echo $cont['cont_sen1']; ?></td>
  </tr>
  <tr>
    <th>Sensor 2:</th>
    <td><?php echo $cont['cont_sen2']; ?></td>
  </tr>
  <tr>
    <th>Sensor 3:</th>
    <td><?php echo $cont['cont_sen3']; ?></td>
  </tr>
  <tr>
    <th>Width:</th>
    <td><?php echo $cont['cont_width']; ?></td>
  </tr>
  <tr>
    <th>Height:</th>
    <td><?php echo $cont['cont_height']; ?></td>
  </tr>
  <tr>
    <th>Date:</th>
    <td><?php echo $cont['cont_date']; ?></td>
  </tr>
  <?php 
}
}
?>
</table>

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
</center>
<script src="bootstrap5/js1/bootstrap.min.js"></script>
</body>
</html>



<!-- Modal -->

