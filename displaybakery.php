<!DOCTYPE html>
<html>
<head>
<title>Bakery</title>
<style>
body{
background-image: url("image/add1.jpg");
}
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
button.a{
  color: blue;
}

button.b{
 color: red;
}
th {
text-align: center;
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {
text-align: center;
background-color: #f2f2f2}
tr:nth-child(odd) {
text-align: center;
}
</style>
</head>
<body border="2">
<center>
<h1>BAKERY</h1>
<table border="2">
<tr>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
require_once('dbsample.php');
$sql = "SELECT * FROM bakery";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["item"]. "</td><td>" . $row["price"] . "</td><td>"
. $row["quantity"]. "</td><td><a href='updatebakery.html'  ><button class='a'>Update</button></a></td> 
<td><a href='deletebakery.html'><button class='b'>Delete</button></a></td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</center>
</body>
</html>