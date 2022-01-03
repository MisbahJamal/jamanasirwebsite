
<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/tinymce/jquery.tinymce.min.js"></script>
    <script>
        
        tinymce.init({selector: "textarea"});           ///to select all <textarea> as an text-editor
        
    
    </script>
    <title> Insert Container </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Container
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Container 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Container Location </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="cont_location" type="text" class="form-control" required>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Distance </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_distance" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Distance1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_distance1" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Latitude </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_latitude" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Longitude </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_longitude" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Date </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_date" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Sensor 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_sen1" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Sensor 2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_sen2" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Sensor 3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_sen3" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Width </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_width" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Height </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_height" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Container Status </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="cont_status" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Insert Container" type="submit" class="btn btn-primary form-control">
                          
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

if(isset($_POST['submit'])){
    
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
    
    $insert_container = "INSERT INTO `container`(`cont_name`, `cont_location`, `cont_distance`, `cont_distance1`, `cont_latitude`, `cont_longitude`, `cont_date`, `cont_sen1`, `cont_sen2`, `cont_sen3`, `cont_width`, `cont_height`, `cont_status`) VALUES ('".$cont_name."','".$cont_location."','".$cont_distance."','".$cont_distance1."','".$cont_latitude."','".$cont_longitude."','".$cont_date."','".$cont_sen1."','".$cont_sen2."','".$cont_sen3."','".$cont_width."','".$cont_height."','".$cont_status."')";
    
    $run_container = mysqli_query($con,$insert_container);
    
    if($run_container){
        
        echo "<script>alert('Container has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_container','_self')</script>";
        
    }
    else{
        echo "<script>alert('Failed to insert the product')</script>";
    }
    
}

?>


<?php } ?>