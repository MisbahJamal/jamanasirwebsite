    
<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_container'])){
        
        $edit_id = $_GET['edit_container'];
        
        $get_p = "select * from container where cont_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $cont_id = $row_edit['cont_id'];
        $cont_name = $row_edit['cont_name'];
        $cont_location = $row_edit['cont_location'];
        $cont_distance = $row_edit['cont_distance'];
        $cont_distance1 = $row_edit['cont_distance1'];
        $cont_latitude = $row_edit['cont_latitude'];
    $cont_longitude = $row_edit['cont_longitude'];
    $cont_date = $row_edit['cont_date'];
    $cont_sen1 = $row_edit['cont_sen1'];
    $cont_sen2 = $row_edit['cont_sen2'];
    $cont_sen3 = $row_edit['cont_sen3'];
    $cont_width = $row_edit['cont_width'];
    $cont_height = $row_edit['cont_height'];
    $cont_status = $row_edit['cont_status'];
        
    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
               <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Container Name </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_name" value=<?php echo $cont_name; ?> type="text" class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
 
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"> Container Location </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <input name="cont_location" value=<?php echo $cont_location; ?> type="text" class="form-control" required>
                            
                        </div><!-- col-md-6 Finish -->
                         
                     </div><!-- form-group Finish -->
                     <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Distance </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_distance" type="text" value=<?php echo $cont_distance1; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Distance1 </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_distance1" type="text" value=<?php echo $cont_distance1; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Latitude </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_latitude" type="text" value=<?php echo $cont_latitude; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Longitude </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_longitude" type="text" value=<?php echo $cont_longitude; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Date </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_date" type="text" value=<?php echo $cont_date; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Sensor 1 </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_sen1" type="text" value=<?php echo $cont_sen1; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Sensor 2 </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_sen2" type="text" value=<?php echo $cont_sen2; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Sensor 3 </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_sen3" type="text" value=<?php echo $cont_sen3; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Width </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_width" type="text" value=<?php echo $cont_width; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Height </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_height" type="text" value=<?php echo $cont_height; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                        
                       <label class="col-md-3 control-label"> Container Status </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_status" type="text" value=<?php echo $cont_status; ?> class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Container" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['update'])){
    
    $cont_name = $_POST['cont_name'];
    $cont_location = $_POST['cont_location'];
    $cont_distance = $_POST['cont_distance'];
    $cont_distance1 = $_POST['cont_distance1'];
    $cont_latitude = $_POST['cont_latitude'];
    $cont_longitude = $_POST['cont_longitude'];
    $cont_date = $_POST['cont_date'];
    $cont_sen1 = $_POST['cont_sen1'];
    $cont_sen2 = $_POST['cont_sen2'];
    $cont_sen3 = $_POST['cont_sen3'];
    $cont_width = $_POST['cont_width'];
    $cont_height = $_POST['cont_height'];
    $cont_status = $_POST['cont_status'];
    
    
    $update_container = "UPDATE `container` SET `cont_name`='".$cont_name."',`cont_location`='".$cont_location."',`cont_distance`='".$cont_distance."',`cont_distance1`='".$cont_distance1."',`cont_latitude`='".$cont_latitude."',`cont_longitude`='".$cont_longitude."',`cont_date`='".$cont_date."',`cont_sen1`='".$cont_sen1."',`cont_sen2`='".$cont_sen2."',`cont_sen3`='".$cont_sen3."',`cont_width`='".$cont_width."',`cont_height`='".$cont_height."',`cont_status`='".$cont_status."' WHERE cont_id = ".$cont_id.";";
    
    $run_container = mysqli_query($con,$update_container);
    
    if($run_container){
        
       echo "<script>alert('Your Container has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_container','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>