
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_bildaar'])){
        
        $delete_bildaar_id = $_GET['delete_bildaar'];
        
        $delete_bildaar = "delete from bildaar where bildaar_id='$delete_bildaar_id'";
        
        $run_delete = mysqli_query($con,$delete_bildaar);
        
        if($run_delete){
            
            echo "<script>alert('One of Your Bildaar Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_bildaar','_self')</script>";
            
        }
        
    }

?>




<?php } ?>