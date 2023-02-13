<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESULT</title>
</head>
<style>
  /* Add CSS styles here */
  /* Define the table layout */
  table {
    width: 85%;
    margin: auto;
    border-collapse: collapse;
    text-align: left;
  }
  /* Define the table headers */
  th {
    background-color: #f2f2f2;
    padding: 12px;
    border: 1px solid #ddd;
  }
  /* Define the table data */
  td {
    padding: 12px;
    border: 1px solid #ddd;
  }
  .module {
    background-color: white;
    border: 2px solid white;  /* Add a border to the module */
    border-radius: 22px; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  /* Add a shadow */
    padding: 50px;  /* Add padding to the module */
    width: 570px;  /* Set the width of the module */
    height: 720px;  /* Set the height of the module */
    margin-left: auto;
    margin-right: auto; 
    
  }
  
body {
  background-image: url('img/pexels-tima-miroshnichenko-5355865.jpg');  /* Add the background image */
  background-repeat: no-repeat;  /* Do not repeat the image */
  background-size: cover;  /* Resize the image to cover the entire background */
}
 /* Add styles to the pop-up message */
#alert {
  background-color: lightblue;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  width: 200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
}
#screenshot-btn {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  width: fit-content;
  margin: 0 auto;
}
</style>
</head>
<body>
  <br>
  <br><br>
  <div class="module" style="background-image: url('img/photography-paper-17-640x360.jpg')">
    <img src="img/logoo-removebg.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/logoo-removebg.png"/>
<h1>&nbsp; Patient Laboratory Results</h1>
<table>
  <tr>
    <th>Result ID</th>
    <th>Name</th>
    <th>Date of Test</th>
    <th>Date of Result</th>
    <th>Doctor</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Contact Number</th>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
<br>
  <table><br><br>
    <tr>
      <th>Test Name</th>
      <th>Result</th>
      <th>Normal Range</th>
    </tr>
    <tr>
      <td>Complete Blood Count (CBC)</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td>Liver Function Test (LFT)</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td>Kidney Function Test (KFT)</td>
      <td> </td>
      <td> </td>
    </tr>
    
</table>
   <script>
  
	 // Show the pop-up message
document.addEventListener("DOMContentLoaded", function() {
  alert("Here is the result of your laboratory test.");
});
   </script>
   
   
   
   
   
   <script>
			// Function for Screenshot 
			const screenshotBtn = document.getElementById("screenshot-btn");
screenshotBtn.addEventListener("click", () => {
  html2canvas(document.body).then(canvas => {
    const image = canvas.toDataURL("image/png");
    download(image, "screenshot.png");
  });
});
function download(data, filename) {
  const a = document.createElement("a");
  a.href = data;
  a.download = filename;
  document.body.appendChild(a);
  a.click();
  a.remove();
}
   </script>
   
<br><br><br>
<p>"This form is intended for patient results based on a test form filled out by the patient. Any results submitted on this form that do not correspond to a test form completed by the patient will not be accepted."</p>
<center><p>©2023 AlegarioCure Hospital | All Rights Reserved</p></center>
</div>
<br><br><br>
</body>
  <button id="screenshot-btn">Take Screenshot</button>
	  <br><br><br>
</html>
