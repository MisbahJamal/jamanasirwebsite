<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where Email='$admin_session'";   //ADmins info Fetching
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['Name'];
        
        $admin_email = $row_admin['Email'];
        
        $admin_image = $row_admin['Image'];
        
        $admin_country = $row_admin['Country'];
        
        $admin_about = $row_admin['About'];
        
        $admin_contact = $row_admin['Contact'];
        
        $admin_job = $row_admin['Job'];
        
        $get_products = "select * from products";       //Products info Fetching

        $run_products = mysqli_query($con,$get_products);

        $count_products = mysqli_num_rows($run_products);

        $get_customers = "select * from customers";     //Customers info Fetching

        $run_customers = mysqli_query($con,$get_customers);

        $count_customers = mysqli_num_rows($run_customers);

        $get_p_categories = "select * from product_categories";         //Product Categories info Fetching

        $run_p_categories = mysqli_query($con,$get_p_categories);

        $count_p_categories = mysqli_num_rows($run_p_categories);

        $get_pending_orders = "select * from pending_orders";       //Pending orders info Fetching

        $run_pending_orders = mysqli_query($con,$get_pending_orders);

        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electrozonics | Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styling.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                  
                  <?php
                
                        if(isset($_GET['dashboard'])){
                        
                            include("includes/dashboard.php");
                        
                            }
                        if(isset($_GET['insert_container'])){

                            include("includes/insert_container.php");

                            }
                        if(isset($_GET['view_container'])){
                        
                            include("includes/view_containers.php");
                        
                            }   
                        if(isset($_GET['delete_container'])){
                        
                            include("includes/delete_container.php");
                        
                            }  
                        if(isset($_GET['edit_container'])){
                        
                            include("includes/edit_container.php");
                        
                            }
                        if(isset($_GET['insert_ssv'])){
                        
                            include("includes/insert_ssv.php");
                        
                            }   
                        if(isset($_GET['view_ssv'])){
                        
                            include("includes/view_ssvs.php");
                        
                            }
                        if(isset($_GET['delete_ssv'])){
                        
                            include("includes/delete_ssv.php");
                        
                            }
                        if(isset($_GET['edit_ssv'])){
                        
                            include("includes/edit_ssv.php");
                        
                            }
                        if(isset($_GET['insert_bildaar'])){
                        
                            include("includes/insert_bildaar.php");
                        
                            }   
                        if(isset($_GET['view_bildaar'])){
                        
                            include("includes/view_bildaars.php");
                        
                            }   
                        if(isset($_GET['edit_bildaar'])){
                        
                            include("includes/edit_bildaar.php");
                        
                            }  
                        if(isset($_GET['delete_bildaar'])){
                        
                            include("includes/delete_bildaar.php");
                        
                            }  
                        if(isset($_GET['insert_slide'])){
                        
                            include("includes/insert_slide.php");
                        
                            }   
                        if(isset($_GET['view_slides'])){
                        
                            include("includes/view_slides.php");
                        
                            }   
                        if(isset($_GET['delete_slide'])){
                        
                            include("includes/delete_slide.php");
                        
                            }  
                        if(isset($_GET['edit_slide'])){
                        
                            include("includes/edit_slide.php");
                        
                            }
                        if(isset($_GET['view_customers'])){
                        
                            include("includes/view_customers.php");
                        
                            }
                        if(isset($_GET['delete_customer'])){
                        
                            include("includes/delete_customer.php");
                        
                            }
                        if(isset($_GET['view_orders'])){
                        
                            include("includes/view_orders.php");
                        
                            }
                        if(isset($_GET['delete_order'])){
                        
                            include("includes/delete_order.php");
                        
                            }
                        if(isset($_GET['view_payments'])){
                        
                            include("includes/view_payments.php");
                        
                            }
                        if(isset($_GET['delete_payment'])){
                            include("includes/delete_payment.php");
                        }
                        if(isset($_GET['view_admins'])){
                            include("includes/view_admins.php");
                        }
                        if(isset($_GET['delete_admin'])){
                            include("includes/delete_admin.php");
                        }
                        if(isset($_GET['insert_admin'])){
                            include("includes/insert_admin.php");
                        }
                       if(isset($_GET['admin_profile'])){
                            include("includes/admin_profile.php");
                        }
                
                    ?>
                
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap.min.js"></script>           
</body>
</html>


<?php } ?>