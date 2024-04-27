<?php

require_once "db_connection.php";


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $errors = array();

    
    if (empty($_POST["starting_point"])) {
        $errors[] = "Starting Point is required.";
    }
   
    if (empty($_POST["destination"])) {
        $errors[] = "Destination is required.";
    }

    if (empty($_POST["number_of_people"])) {
        $errors[] = "Number Of People is required.";
    }

    if (empty($_POST["place_to_visit"])) {
        $errors[] = "Place to Visit is required.";
    }

    if (empty($_POST["number_of_days"])) {
        $errors[] = "Number Of Days is required.";
    }

    if (empty($_POST["room_type"])) {
        $errors[] = "Room Type is required.";
    }

    if (empty($_POST["starting_date"])) {
        $errors[] = "Starting Date is required.";
    }

    if (empty($_POST["return_date"])) {
        $errors[] = "Return Date is required.";
    }

   
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
       
        $_SESSION['starting_point'] = $_POST['starting_point'];
        $_SESSION['destination'] = $_POST['destination'];
        $_SESSION['number_of_people'] = $_POST['number_of_people'];
        $_SESSION['place_to_visit'] = $_POST['place_to_visit'];
        $_SESSION['number_of_days'] = $_POST['number_of_days'];
        $_SESSION['room_type'] = $_POST['room_type'];
        $_SESSION['starting_date'] = $_POST['starting_date'];
        $_SESSION['return_date'] = $_POST['return_date'];

       
        setcookie('starting_point', $_POST['starting_point'], time() + (86400 * 30), "/"); // 86400 = 1 day

      
        header("Location: thh.php");
        exit();
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
   <title>Tour Planner</title>
<style>
 
body, h1, h2, h3, p, ul, li, label, input, select, option, button, fieldset, legend {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    width: 80%;
    margin: 0 auto;
}


fieldset {
    margin: 20px auto;
}
</style>

</head>
<body>
<fieldset style="width: 350px;">
<legend>Tour Planner</legend>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
      
      
      <tr>
    <td><label for="starting_point">Starting Point:</label></td>
    <td>
        <select name="starting_point" id="starting_point">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
           
        </select>
    </td>
</tr>

      

      <tr>
  <td><label for="destination">Destination:</label></td>
  <td>
    <select name="destination" id="destination">
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
   
    </select>
  </td>
</tr>

     

      <tr>
    <td><label for="number_of_people">Number Of People:</label></td>
    <td>
        <select name="number_of_people" id="number_of_people">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <!-- Add more options as needed -->
        </select>
    </td>
</tr>




      
   

      <tr>
  <td><label for="place_to_visit">Place to Visit:</label></td>
  <td>
    <select name="place_to_visit" id="place_to_visit">
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <!-- Add more options as needed -->
    </select>
  </td>
</tr>


  

      <tr>
  <td><label for="number_of_days">Number Of Days:</label></td>
  <td>
    <select name="number_of_days" id="number_of_days">
      <option value="1">1 day</option>
      <option value="2">2 days</option>
      <option value="3">3 days</option>
      <option value="4">4 days</option>
      <option value="5">5 days</option>
      <!-- Add more options as needed -->
    </select>
  </td>
</tr>





      <tr>
  <td><label for="room_type">Room Type:</label></td>
  <td>
    <select name="room_type" id="room_type">
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="twin">Twin</option>
      <option value="suite">Suite</option>
    
    </select>
  </td>
</tr>


     


      <tr>
  <td><label for="starting_date">Starting date:</label></td>
  <td>
    <select name="starting_date" id="starting_date">
    
      <option value="2024-03-25">March 25, 2024</option>
      <option value="2024-03-26">March 26, 2024</option>
      <option value="2024-03-27">March 27, 2024</option>
 
    </select>
  </td>
</tr>

<tr>
  <td><label for="return_date">Return date:</label></td>
  <td>
    <select name="return_date" id="return_date">
   
      <option value="2024-04-01">April 1, 2024</option>
      <option value="2024-04-02">April 2, 2024</option>
      <option value="2024-04-03">April 3, 2024</option>
   
    </select>
  </td>
</tr>



      <tr>
        <td></td>
        <td></td>
        <td colspan="2" align="left"><button type="submit" name="check">Check</button></td>
      </tr>
    </table>
  </form>
</fieldset>
</body>
</html>
