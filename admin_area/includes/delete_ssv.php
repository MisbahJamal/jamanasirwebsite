
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_ssv'])){
        
        $delete_ssv_id = $_GET['delete_ssv'];
        
        $delete_ssv = "delete from ssv where ssv_id='$delete_ssv_id'";
        
        $run_delete = mysqli_query($con,$delete_ssv);
        
        if($run_delete){
            
            echo "<script>alert('One of Your SSV Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_ssv','_self')</script>";
            
        }
        
    }

?>




<?php } ?>