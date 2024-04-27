<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Search Functionalty</title>
    <style>
   
fieldset {
  width: 600px;
  height: 150px;
  border: 2px solid #ccc;
  border-radius: 5px;
  padding: 20px;
}


legend {
  font-size: 20px;
  font-weight: bold;
}


label {
  display: block;
  margin-bottom: 5px;
}


select {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}


input[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}


hr {
  border: 0;
  border-top: 1px solid #ccc;
  margin: 10px 0;
}


a {
  text-decoration: none;
  color: #007bff;
}

a:hover {
  text-decoration: underline;
}

</style>
  </head>
  <body>
  <fieldset style="width: 600px; height: 150px;">
  <legend >Search Option</legend><br>


   <!--<td><button name="check">Where are you going?</button> -->
   <td colspan="1">
   <a href ="tpp.php" >Tour Planner</a>
                <hr width="95%" align="right">

            </td>

           
 

 <!--</td>
  <td><button name="check">Check In-Check Out</button></td>

        <td><button name="check">How many Person?</button></td>

        <td><button name="check">Search</button></td> -->




       <!-- <form action="/submit-form" method="post">
  <label for="checkbox">Check me:</label> 
  <input type="checkbox" id="checkbox" name="checkbox">
  <input type="submit" value="Submit">
</form> -->


<form action="/submit-form" method="post">
  <label for="select">Where are you going?</label>
  <select id="select" name="select">
    <option value="option1">cox bazar</option>
    <option value="option2">bandarban</option>
    <option value="option3">sundarban</option>
    <option value="option4">sylhet</option>
    
  </select>
  <input type="submit" value="Submit">
</form>

<form action="/submit-form" method="post">
  <label for="select">Check In-Check Out</label>
  <select id="select" name="select">
    <option value="option1">10am-4pm</option>
    <option value="option2">4pm-10am</option>
    <option value="option3">8am-2am</option>
    <option value="option4">6pm-2am</option>
   
  </select>
  <input type="submit" value="Submit">
</form>


<form action="/submit-form" method="post">
  <label for="select">How many Person?</label>
  <select id="select" name="select">
    <option value="option1">1</option>
    <option value="option2">2</option>
    <option value="option3">3-5</option>
    <option value="option4">6-10</option>
   
  </select>
  <input type="submit" value="Submit">
</form>


<form action="/submit-form" method="post">
  <label for="select">Search</label>
  <select id="select" name="select">
    <option value="option1">anything</option>
    <option value="option2">something</option>
    <option value="option3">nothing</option>
    <option value="option4">wondering</option>

  </select>
  <input type="submit" value="Submit">
</form>



       <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["action"]) && !empty($_POST["action"])) {
        $action = $_POST["action"];

        
        switch ($action) {
            case "where":
         
                echo "Where are you going? functionality goes here.";
                break;
            case "checkinout":
            
                echo "Check In-Check Out functionality goes here.";
                break;
            case "person":
              
                echo "How many Person? functionality goes here.";
                break;
            case "search":
         
                echo "Search functionality goes here.";
                break;
            default:
              
                echo "Invalid action.";
        }
    } else {
    
        echo "No action specified.";
    }
}

?>


    
</body>
</html>