<!doctype html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#table_id').dataTable({
        "bProcessing": true,
        "sAjaxSource": "get",
        "aoColumns": [
              { mData: 'Name' } ,
              { mData: 'Surname' },
              { mData: 'Telephone' }
            ]
      });  
  });
</script>


</head>
<body>

<h1> Tilefonikos Katalogos me Datatable </h1>

<?php
$servername   = "localhost";
$database = "table_website";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";

?>

<br>
<br>
<div class="container" id="get">
  <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
	    <th>Telephone</th>
        </tr>
    </thead>
  </table>
</div>
<br>
<br>
<em>&copy; Nikolaos Psaroudakis - 2022</em>
</body>
</html>
