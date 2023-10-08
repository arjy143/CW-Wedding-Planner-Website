<!DOCTYPE html>
<html lang ="en">
<head>
<title>Wedding Planner</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
body {
	font-family: "Apple Chancery", Times, serif;
	background-color: #D6D6D6;
}
.center {
	text-align:center;
}
body,td,th {
	color: #06F; 
}
.larger {
	font-size:larger;
	
}
table {
	margin-left:auto;
	margin-right:auto;
}
.hidden>div {
	display:none;
}
.visible>div {
	display:block;
}
</style>
</head>
<body>

<h3 class="center">COA123 - Web Programming</h3>
<h2 class="center">Individual Coursework - Wedding Planner</h2>

<h1 class="center">Task 4 - Wedding (wedding.php)</h1>
  <form action="weddinginfo.php" method="get" id="wedding">
    <table border="1">
      <tr>
        <th scope="col">Key</th>
        <th scope="col">Value</th>
      </tr>
      <tr>
        <td><label for="party">Number of guests</label></td>
        <td>
          <input name="party" type="number" class="larger" id="party" value="" size="12" >
        </td>
      </tr>
      <tr>
        <td><label for="cateringGrade">Catering grade</label></td>
        <td><input name="cateringGrade" type="number" class="larger" id="cateringGrade" value="" size="12" ></td>
      </tr>
      <tr>
        <td><label for="startDate">Start date of wedding</label></td>
        <td><input name="startDate" type="date" class="larger" id="startDate" size="12" ></td>
      </tr>
      <tr>
        <td><label for="endDate">End date of wedding</label></td>
        <td><input name="endDate" type="date" class="larger" id="endDate" size="12" ></td>
      </tr>
      <tr>
        <td>List names and prices of available licensed venues with given capacity</td>
        <td><input type="submit" name="submit" id="submit" value="Submit" class="larger" onclick=toggleClick()></td>
      </tr>
    </table>
  </form>

<script>

document.querySelector('#startDate').onchange = function(){
  let dtFrom = document.querySelector('#startDate').value;
  let dtTo = new Date(dtFrom);
  dtTo.setDate(dtTo.getDate() + 7);
  let sMonthTo = ((dtTo.getMonth() + 1) < 10 ? '0' + (dtTo.getMonth() + 1) : (dtTo.getMonth() + 1));
  let sDayTo = (dtTo.getDate() < 10 ? '0' + dtTo.getDate() : dtTo.getDate());
  document.querySelector('#endDate').setAttribute('max', dtTo.getFullYear() + '-' + sMonthTo + '-' + sDayTo);
};

function toggleClick(){
var x = document.getElementById("data");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
x.style.display = "none";
}
}

</script>

<div id = "data">

</div>


</body>
</html>
