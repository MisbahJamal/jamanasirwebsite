<?php 
function run_query($query) {
    
// $con = mysqli_connect("localhost","root","","solid_waste");

// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
//   }
// echo $query;
// $result = mysqli_query($con, $query); 

// echo $result;
// // Perform query
// if ($result = mysqli_query($con, $query)) {

//     echo $result;
//     echo "Returned rows are: " . mysqli_num_rows($result);
//     // Free result set
//     mysqli_free_result($result);
//     return $result;
//   }
// else{
//     echo "HERE IN ELSE";
// }
  
//   mysqli_close($con);

$con = mysqli_connect("localhost", "root", "", "solid_waste");
// echo "in run query";
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

// echo "<pre>Debug: $query</pre>\m";
$result = mysqli_query($con, $query);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($con));
}
else {
  // echo 'done.';
  return $result;
}
}
?>