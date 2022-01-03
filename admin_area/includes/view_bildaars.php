
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Bildaar
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Bildaar
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th>  ID: </th>
                                <th>  Name: </th>
                                <th>  CNIC: </th>
                                <th>  Type: </th>
                                <th>  Phone: </th>
                                <th>  Mail: </th>
                                <th>  Area: </th>
                                <th>  Start Date: </th>
                                <th>  End Date: </th>
                                <th>  SSV id: </th>
                                <th>  Delete: </th>
                                <th>  Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_bildaar = "select * from bildaar";
          
                                $run_bildaar = mysqli_query($con,$get_bildaar);
          
                                while($row_bildaar=mysqli_fetch_array($run_bildaar)){
                                    
                                    $bildaar_id = $row_bildaar['bildaar_id'];
                                    $bildaar_name = $row_bildaar['bildaar_name'];
                                    $bildaar_cnic = $row_bildaar['bildaar_cnic'];
                                    $bildaar_type = $row_bildaar['bildaar_type'];
                                    $bildaar_phone = $row_bildaar['bildaar_phone'];
                                    $bildaar_area = $row_bildaar['bildaar_area'];
                                    $bildaar_mail = $row_bildaar['bildaar_mail'];
                                    $start_date = $row_bildaar['start_date'];
                                    $end_date = $row_bildaar['end_date'];
                                    $ssv_id = $row_bildaar['ssv_id'];
                                    
                                   
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $bildaar_id; ?> </td>
                                <td> <?php echo $bildaar_name; ?> </td>
                                <td> <?php echo $bildaar_cnic; ?> </td>
                                <td> <?php echo $bildaar_type; ?> </td>
                                <td> <?php echo $bildaar_phone; ?> </td>
                                <td> <?php echo $bildaar_area; ?> </td>
                                <td> <?php echo $bildaar_mail; ?> </td>
                                <td> <?php echo $start_date; ?> </td>
                                <td> <?php echo $end_date; ?> </td>
                                <td> <?php echo $ssv_id; ?> </td>

                                <td> 
                                    <a href="index.php?edit_bildaar=<?php echo $bildaar_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_bildaar=<?php echo $bildaar_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>