<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hmo & insurance</title>

<style>
div.a {
  text-align: left;
  margin-left: auto;
  margin-right: auto;

}



body {
    background-image: url('img/pexels-tima-miroshnichenko-5355865.jpg');  /* Add the background image */
    background-repeat: no-repeat;  /* Do not repeat the image */
    background-size: cover;  /* Resize the image to cover the entire background */
  }

  .module {
    background-color: white;
    border: 6px solid white;  /* Add a border to the module */
    border-radius: 22px; 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  /* Add a shadow */
    padding: 30px;  /* Add padding to the module */
    width: 560px;  /* Set the width of the module */
    height: 610px;  /* Set the height of the module */
    margin-left: auto;
    margin-right: auto; 
    
  }

  h1 {
    font-size: 26px;
  }

  h2 {
    font-size: 30px;
    height: 16px;
  }




  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  
  .category {
    width: 30%; /* wider */
    height: 70px; /* taller */
    font-size: 15px;
    margin: 0 auto;
    text-align: center;
    padding: 10px;
    border-radius: 16px;
  }


  .subcategory {
    /* Add styles for the subcategory containers */
    display: inline-block;
    padding: 10px;
    cursor: pointer;
  }
  .subcategory:hover {
    /* Add styles for when the subcategory is hovered over */
    background-color: #f2f2f2;
  }

  .button {
    border-radius: 18px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  /* Add a shadow */
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition: transform .2s;
  }

  .bigg {
    width: 30%; /* wider */
    height: 70px; /* taller */
    font-size: 16px;
    margin: 0 auto;
    text-align: center;
    padding: 10px;
    border-radius: 16px;
    
  }





 
</style>
</head>
<body>

<br>
<br>
<br><br>
<div class="module" style="background-image: url('img/photography-paper-17-640x360.jpg')">

  
    <center><h2>Health Insurance</h2></center>
    <br><br>
    <center><label for="outpatient-treatment-type">Category:</label><br>
    <select class="bigg" id="outpatient-treatment-type" name="outpatient-treatment-type">
      <option value="#">Please Select</option>
      <option value="hmo">HMO</option>
      <option value="insurance">Insurance</option>
    </select>
    </center>

    <br>
    <br>
    <br>


  <table>
    <tr>
      <th>Patient List</th>
      <th>Patient Details</th>
      <th>Patient Records</th>
    </tr>
    <tr>
      <td>John Doe</td>
      <td>Age: 35, Gender: Male, Address: 123 Main St</td>
      <td>Medical history, current medications, test results</td>
    </tr>
    <tr>
      <td>Jane Smith</td>
      <td>Age: 42, Gender: Female, Address: 456 Park Ave</td>
      <td>Medical history, current medications, test results</td>
    </tr>
  </table>
  
  <br><br><br>
  <p>"This form is intended for patient results based on a test form filled out by the patient. Any results submitted on this form that do not correspond to a test form completed by the patient will not be accepted."</p>
  <center><p>©2023 AlegarioCure Hospital | All Rights Reserved</p></center>
  </div>
  <br><br><br>

</div>

</div>



</body>
</html>