<?php
if(isset($_GET['submit'])) 
{ 	
$party = $_GET['party'];
$cateringGrade = $_GET["cateringGrade"];
$startDate = $_GET["startDate"];
$endDate = $_GET["endDate"];

$username = "coa123wuser";
$password = "grt64dkh!@2FD";
$servername = "sci-mysql";
$dbName = "coa123wdb"; 

$conn = mysqli_connect($servername, $username, $password, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$table_name="venue";

$sql = "SELECT venue.name, catering.grade, venue.weekday_price, venue.weekend_price, catering.cost, venue_booking.booking_date 
from `venue` join `catering` on catering.venue_id = venue.venue_id join `venue_booking` on venue.venue_id = venue_booking.venue_id
where venue.capacity >= $party 
and catering.grade = $cateringGrade 
and venue_booking.booking_date between '$startDate' and '$endDate'";
$result = mysqli_query($conn, $sql);


//echo $sql . "<br>";
//echo mysqli_num_rows($result) . "<br>";
echo "<hr>";

echo "<table border='1'>
<tr>
<th>Name of Venue</th>
<th>Catering Grade</th>
<th>Weekday Price</th>
<th>Weekend Price</th>
<th>Catering Cost</th>
<th>Booking Dates Taken</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo "<td>" . $row['weekday_price'] . "</td>";
echo "<td>" . $row['weekend_price'] . "</td>";
echo "<td>" . $row['cost'] . "</td>";
echo "<td>" . $row['booking_date'] . "</td>";



echo "</tr>";
}
echo "</table>";




echo "<hr>";

mysqli_close($conn);

 

}
?>
