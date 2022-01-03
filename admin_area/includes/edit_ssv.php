
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_ssv'])){
        
        $edit_ssv_id = $_GET['edit_ssv'];
        
        $edit_ssv_query = "select * from ssv where ssv_id='$edit_ssv_id'";
        
        $run_edit = mysqli_query($con,$edit_ssv_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        

        $ssv_id = $row_edit['ssv_id'];
        $ssv_name = $row_edit['ssv_name'];
        $ssv_type = $row_edit['ssv_type'];
        $start_date = $row_edit['start_date'];
        $ssv_phone = $row_edit['ssv_phone'];
        $ssv_area = $row_edit['ssv_area'];
        $ssv_mail = $row_edit['ssc_mail'];
        
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit SSV
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit SSV
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            SSV Name
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $ssv_name; ?> " name="ssv_name" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            SSV Type
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $ssv_type; ?> " name="ssv_type" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Start Date
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $start_date; ?> " name="start_date" type="date" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            SSV Phone
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $ssv_phone; ?> " name="ssv_phone" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            SSV Area 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $ssv_area; ?> " name="ssv_area" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            SSV Mail 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $ssv_mail; ?> " name="ssv_mail" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update'])){
              
            $ssv_name = $_POST['ssv_name'];
    $ssv_type = $_POST['ssv_type'];
    $start_date = $_POST['start_date'];
    $ssv_phone = $_POST['ssv_phone'];
    $ssv_area = $_POST['ssv_area'];
    $ssv_mail = $_POST['ssv_mail'];

              
              $update_ssv = "UPDATE `ssv` SET `ssv_name`='".$ssv_name."',`ssv_type`='".$ssv_type."',`start_date`='".$start_date."',`ssv_phone`='".$ssv_phone."',`ssv_area`='".$ssv_area."',`ssc_mail`='".$ssv_mail."' WHERE  ssv_id='$ssv_id';";
              
              $run_ssv = mysqli_query($con,$update_ssv);
              
              if($run_ssv){
                  
                  echo "<script>alert('Your SSV Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_ssv','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 