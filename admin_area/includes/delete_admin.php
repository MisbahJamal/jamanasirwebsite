
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_admin'])){
        
        $delete_id = $_GET['delete_admin'];
        
        $delete_c = "delete from admins where admin_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('One of your Admin has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_admins','_self')</script>";
            
        }
        
    }

?>

<?php } ?>