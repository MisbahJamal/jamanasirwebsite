
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('../login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Product Categories
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Product Categories
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                        <tr><!-- tr begin -->
                                <th>  ID: </th>
                                <th>  Name: </th>
                                <th>  Type: </th>
                                <th>  Date: </th>
                                <th>  Phone: </th>
                                <th>  Area: </th>
                                <th>  Mail: </th>
                                <th>  Delete: </th>
                                <th>  Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_ssv = "select * from ssv";
          
                                $run_ssv = mysqli_query($con,$get_ssv);
          
                                while($row_ssv=mysqli_fetch_array($run_ssv)){
                                    
                                    $ssv_id = $row_ssv['ssv_id'];
                                    $ssv_name = $row_ssv['ssv_name'];
                                    $ssv_type = $row_ssv['ssv_type'];
                                    $ssv_date = $row_ssv['ssv_date'];
                                    $ssv_phone = $row_ssv['ssv_phone'];
                                    $ssv_area = $row_ssv['ssv_area'];
                                    $ssv_mail = $row_ssv['ssc_mail'];

                                    
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $ssv_id; ?> </td>
                                <td> <?php echo $ssv_name; ?> </td>
                                <td> <?php echo $ssv_type; ?> </td>
                                <td> <?php echo $ssv_date; ?> </td>
                                <td> <?php echo $ssv_phone; ?> </td>
                                <td> <?php echo $ssv_area; ?> </td>
                                <td> <?php echo $ssv_mail; ?> </td>
                                <td> 
                                    <a href="index.php?edit_ssv=<?php echo $ssv_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_ssv=<?php echo $ssv_id; ?> ">
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