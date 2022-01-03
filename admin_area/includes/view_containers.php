
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{
        

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th>  ID: </th>
                                <th>  Name: </th>
                                <th>  Location: </th>
                                <th>  Distance: </th>
                                <th>  Distance1: </th>
                                <th>  Latitude: </th>
                                <th>  Longitude: </th>
                                <th>  Date: </th>
                                <th>  Sen1: </th>
                                <th>  Sen2: </th>
                                <th>  Sen3: </th>
                                <th>  Width: </th>
                                <th>  Height: </th>
                                <th>  Status: </th>
                                <th>  Delete: </th>
                                <th>  Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_cont = "select * from `container`";
                                
                                $run_cont = mysqli_query($con,$get_cont);
          
                                while($row_cont=mysqli_fetch_array($run_cont)){
                                    
                                    $cont_id = $row_cont['cont_id'];
                                    
                                    $cont_name = $row_cont['cont_name'];
                                    
                                    $cont_location = $row_cont['cont_location'];
                                    
                                    $cont_distance = $row_cont['cont_distance'];
                                    
                                    $cont_distance1 = $row_cont['cont_distance1'];
                                    
                                    $cont_latitude = $row_cont['cont_latitude'];

                                    $cont_longitude = $row_cont['cont_longitude'];
                                    
                                    $cont_date = $row_cont['cont_date'];
                                    
                                    $cont_sen1 = $row_cont['cont_sen1'];
                                    
                                    $cont_sen2 = $row_cont['cont_sen2'];
                                    
                                    $cont_sen3 = $row_cont['cont_sen3'];
                                    
                                    $cont_width = $row_cont['cont_width'];

                                    $cont_height = $row_cont['cont_height'];
                                    
                                    $cont_status = $row_cont['cont_status'];
                                    
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $cont_id; ?> </td>
                                <td> <?php echo $cont_name; ?> </td>
                                <td> <?php echo $cont_location; ?> </td>
                                <td> <?php echo $cont_distance; ?> </td>
                                <td> <?php echo $cont_distance1; ?> </td>
                                <td> <?php echo $cont_latitude; ?> </td>
                                <td> <?php echo $cont_longitude; ?> </td>
                                <td> <?php echo $cont_date; ?> </td>
                                <td> <?php echo $cont_sen1; ?> </td>
                                <td> <?php echo $cont_sen2; ?> </td>
                                <td> <?php echo $cont_sen3; ?> </td>
                                <td> <?php echo $cont_width; ?> </td>
                                <td> <?php echo $cont_height; ?> </td>
                                <td> <?php echo $cont_status; ?> </td>




                                
                                <td> 
                                     
                                     <a href="index.php?delete_container=<?php echo $cont_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_container=<?php echo $cont_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
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