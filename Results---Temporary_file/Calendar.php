<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESULT</title>
    <!-- Favicons -->
 <link rel="icon" type="image/x-icon" href="img/logoo1.ico">

<style>

	@media screen and (max-width: 700px) {
img {width: 200px}
}

   .calendar {
  width: 500px;
  margin: 0 auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #ddd;
}

h1 {
  text-align: center;	
}	

p {
  text-align: center;	
}

footer {
	text-align: center;
}

#currentDate {
	    text-align: center;
        width: 200px;
        margin: 0 auto;
        display: block;
	
}

         body {
        background-image: url('img/photography-paper-17-640x360.jpg');  /* Add the background image */
        background-repeat: no-repeat;  /* Do not repeat the image */
        background-size: cover;  /* Resize the image to cover the entire background */
      }

</style>


	     <script>
      function displayDate() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        document.getElementById("currentDate").value = today;
      }
    </script>

</head>
<body onload="displayDate()">

<br><br><br>

<h1>Doctor's Surgery schedule</h1>
<p>List of Available Doctor for Outpatient treatment.</p>
			  <br>
    <form>
	<b><p>Current Date:</p></b>
      <!----<label for="currentDate" text-align="center">Current Date:</label>---->
      <input type="text" id="currentDate" readonly>
    </form>
		<br>

<div class="calendar">
  <table>
    <thead>
      <tr>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dr. Smith</td>
        <td>Dr. Johnson</td>
        <td>Dr. Lee</td>
        <td>Dr. Chen</td>
        <td>Dr. Martinez</td>
      </tr>
      <tr>
        <td>Dr. Thesa</td>
        <td>Dr. Sonny</td>
        <td>Dr. Lee</td>
        <td>Dr. Chen</td>
        <td>Dr. Martinez</td>
      </tr>
    </tbody>
  </table>
</div>

<br><br><br>
<footer>©2023 AlegarioCure Hospital | All Rights Reserved</p></footer>

</body>

</html>


