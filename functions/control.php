<?php
include("../functions/function.php");

# UPDATE SSV
if ($ssv_id = $_GET['update_ssv']){
    $get_ssv = "SELECT * FROM `ssv` WHERE `ssv_id`=".$ssv_id.";";
               
    $ssv_query_result = run_query($get_ssv);
               
    while($ssv=mysqli_fetch_array($ssv_query_result)){
        $ssv_name = $ssv['ssv_name'];
        $ssv_phone = $ssv['ssv_phone'];
        $ssv_type = $ssv['ssv_type'];
        $start_date = $ssv['start_date'];
                                                $ssv_area = $ssv['ssv_area'];
                   $ssc_mail = $ssv['ssc_mail'];
                   
                   echo $ssv_name;
                   echo $ssv_phone;
                   echo $ssv_type;
                   echo $start_date;
                   echo $ssv_area;
                   echo $ssc_mail;
                   if( $_GET['ssv_name']){
                       $ssv_name = $_GET['ssv_name'];
                   }
                   if ( $_GET['ssv_phone']){
                       $ssv_phone = $_GET['ssv_phone'];
                   }
                   if ( $_GET['ssv_type']){
                    $ssv_type = $_GET['ssv_type'];
                    }
                    if ( $_GET['start_date']){
                        $start_date = $_GET['start_date'];
                    }
                    if ( $_GET['ssv_area']){
                        $ssv_area = $_GET['ssv_area'];
                    }
                    if ( $_GET['ssc_mail']){
                        $ssc_mail = $_GET['ssc_mail'];
                    }
                    echo "#########################";
                    echo $ssv_name;
                   echo $ssv_phone;
                   echo $ssv_type;
                   echo $start_date;
                   echo $ssv_area;
                   echo $ssc_mail;

                   $update_query = "UPDATE `ssv` SET `ssv_name`='".$ssv_name."',`ssv_type`='".$ssv_type."',`start_date`='".$start_date."',`ssv_phone`='".$ssv_phone."',`ssv_area`='".$ssv_area."',`ssc_mail`='".$ssc_mail."' WHERE ssv_id = ".$ssv_id.";";
                    $result = run_query($update_query);
                    echo $result;
                    if($result){
                        echo "Updated Query";;
                    }
                    else{
                        echo "Update else";
                        
                    }
                    header("Location: ../ssvprofile.php?ssv_id=".$ssv_id);
                    exit();
                } 
}

else{
    echo "NOT SET";
}


#UPDATE BILDAAR
if ($bildaar_id = $_GET['update_bildaar']){
    $get_bildaar = "SELECT * FROM `bildaar` WHERE `bildaar_id`=".$bildaar_id.";";
               
    $bildaar_query_result = run_query($get_bildaar);
               
    while($bildaar=mysqli_fetch_array($bildaar_query_result)){
        $bildaar_name = $bildaar['bildaar_name'];
        $bildaar_phone = $bildaar['bildaar_phone'];
        $bildaar_cnic = $bildaar['bildaar_cnic'];
        $bildaar_area = $bildaar['bildaar_area'];
        $bildaar_mail = $bildaar['bildaar_mail'];
        $bildaar_type = $bildaar['bildaar_type'];
        $bildaar_pic = $bildaar['bildaar_pic'];
        $start_date = $bildaar['start_date'];
        $end_date = $bildaar['end_date'];
                   
                   echo $bildaar_name;
                   echo $bildaar_phone;
                   echo $bildaar_cnic;
                   echo $bildaar_area;
                   echo $bildaar_mail;
                   echo $start_date;
                   echo $end_date;
                   if( $_GET['bildaar_name']){
                       $bildaar_name = $_GET['bildaar_name'];
                   }
                   if ( $_GET['bildaar_phone']){
                       $bildaar_phone = $_GET['bildaar_phone'];
                   }
                   if ( $_GET['bildaar_cnic']){
                    $bildaar_cnic = $_GET['bildaar_cnic'];
                    }
                    if ( $_GET['bildaar_area']){
                        $bildaar_area = $_GET['bildaar_area'];
                    }
                    if ( $_GET['bildaar_mail']){
                        $bildaar_mail = $_GET['bildaar_mail'];
                    }
                    if ( $_GET['bildaar_type']){
                        $bildaar_type = $_GET['bildaar_type'];
                    }
                    if ( $_GET['bildaar_pic']){
                        $bildaar_pic = $_GET['bildaar_pic'];
                    }
                    if ( $_GET['start_date']){
                        $start_date = $_GET['start_date'];
                    }
                    if ( $_GET['end_date']){
                        $end_date = $_GET['end_date'];
                    }
                    
                    echo "#########################";
                    echo $bildaar_name;
                   echo $bildaar_phone;
                   echo $bildaar_cnic;
                   echo $bildaar_area;
                   echo $bildaar_mail;
                   echo $start_date;
                   echo $end_date;
                   $update_query = "UPDATE `bildaar` SET `bildaar_name`='".$bildaar_name."',`bildaar_cnic`='".$bildaar_cnic."',`bildaar_type`='".$bildaar_type."',`bildaar_phone`='".$bildaar_phone."',`bildaar_mail`='".$bildaar_mail."',`bildaar_area`='".$bildaar_area."',`start_date`='".$start_date."',`end_date`='".$end_date."',`bildaar_pic`='".$bildaar_pic."' WHERE bildaar_id = ".$bildaar_id.";";
                    $result = run_query($update_query);
                    echo $result;
                    if($result){
                        echo "Updated Query";;
                    }
                    else{
                        echo "Update else";
                        
                    }
                    header("Location: ../bildaarprofile.php?bildaar_id=".$bildaar_id);
                    exit();
                } 
}

else{
    echo "NOT SET";
}
?>