
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Admins
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Admins
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Admin Name: </th>
                                <th> Admin Image: </th>
                                <th> Admin E-Mail: </th>
                                <th> Admin Country: </th>
                                <th> Admin Job: </th>
                                <th> Admin Contact: </th>
                                <th> Edit: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_admins = "select * from admins";
                                
                                $run_admins = mysqli_query($con,$get_admins);
          
                                while($row_admins=mysqli_fetch_array($run_admins)){
                                    
                                    $admin_id = $row_admins['admin_id'];
                                    
                                    $admin_name = $row_admins['Name'];
                                    
                                    $admin_img = $row_admins['Image'];
                                    
                                    $admin_email = $row_admins['Email'];
                                    
                                    $admin_country = $row_admins['Country'];
                                    
                                    $admin_job = $row_admins['Job'];
                                    
                                    $admin_contact = $row_admins['Contact'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $admin_name; ?> </td>
                                <td> <img src="../admin_area/admin_images/<?php echo $admin_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $admin_email; ?> </td>
                                <td> <?php echo $admin_country; ?></td>
                                <td> <?php echo $admin_job; ?> </td>
                                <td> <?php echo $admin_contact ?> </td>
                                <td>    
                                     
                                     <a href="index.php?admin_profile=<?php echo $admin_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?delete_admin=<?php echo $admin_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>