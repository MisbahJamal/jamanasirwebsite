   
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_bildaar'])){
        
        $edit_bildaar_id = $_GET['edit_bildaar'];
        
        $edit_bildaar_query = "select * from bildaar where bildaar_id='$edit_bildaar_id'";
        
        $run_edit = mysqli_query($con,$edit_bildaar_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $bildaar_id = $row_edit['bildaar_id'];
        $bildaar_name = $row_edit['bildaar_name'];
        $bildaar_type = $row_edit['bildaar_type'];
        $bildaar_cnic = $row_edit['bildaar_cnic'];
        $start_date = $row_edit['start_date'];
        $end_date = $row_edit['end_date'];
        $bildaar_phone = $row_edit['bildaar_phone'];
        $bildaar_area = $row_edit['bildaar_area'];
        $bildaar_mail = $row_edit['bildaar_mail'];
        $ssv_id = $row_edit['ssv_id'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Bildaar
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Bildaar
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar Name 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_name" value=<?php echo $bildaar_name ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar CNIC 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_cnic" value=<?php echo $bildaar_cnic ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar Type
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_type" value=<?php echo $bildaar_type ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar Phone 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_phone" value=<?php echo $bildaar_phone ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar Mail 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_mail" value=<?php echo $bildaar_mail ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bildaar Area
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="bildaar_area" value=<?php echo $bildaar_area ; ?> type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Start Date 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="start_date" value=<?php echo $start_date ; ?> type="date" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        End Date 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="end_date" value=<?php echo $end_date ; ?> type="date" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                <div class="form-group"><!-- form-group begin -->
                
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        SSV ID 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="ssv_id" value=<?php echo $ssv_id ; ?> type="text" class="form-control">
                    
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
              
            $bildaar_name = $_POST['bildaar_name'];
            $bildaar_cnic = $_POST['bildaar_cnic'];
    $bildaar_type = $_POST['bildaar_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $bildaar_phone = $_POST['bildaar_phone'];
    $bildaar_area = $_POST['bildaar_area'];
    $bildaar_mail = $_POST['bildaar_mail'];  
            $ssv_id = $_POST['ssv_id'];
              
              $update_bildaar = "UPDATE `bildaar` SET `bildaar_name`='$bildaar_name',`bildaar_cnic`='$bildaar_cnic',`bildaar_type`='$bildaar_type',`bildaar_phone`='$bildaar_phone',`bildaar_mail`='$bildaar_mail',`bildaar_area`='$bildaar_area',`start_date`='$start_date',`end_date`='$end_date',`ssv_id`='$ssv_id' WHERE bildaar_id='$bildaar_id';";
              
              $run_bildaar = mysqli_query($con,$update_bildaar);
              
              if($run_bildaar){
                  
                  echo "<script>alert('Your Bildaar Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_bildaar','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 