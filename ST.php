<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Search Functionalty</title>

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
    width: 600px;
    height: 70px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
}

legend {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}


button[name="check"] {
    padding: 8px 12px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}

button[name="check"]:hover {
    background-color: #555;
}


.error {
    color: red;
    margin-top: 10px;
    display: block;
}

</style>
  </head>
  <body>
  <fieldset style="width: 600px; height: 70px;">
  <legend >Search Option</legend><br>
  <td><button name="check">Starting Point</button></td>
  <td><button name="check">Destination Point</button></td>

        <td><button name="check">Date</button></td>

        <td><button name="check">Search</button></td>
        <td><button name="check">Search Type</button></td>
       

        <?php

require_once "db_connection.php";
        
        

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the action is set and not empty
    if (isset($_POST["action"]) && !empty($_POST["action"])) {
        $action = $_POST["action"];

        // Process the form based on the action
        switch ($action) {
            case "starting_point":
                // Handle "Starting Point" action
                echo "Starting Point functionality goes here.";
                break;
            case "destination_point":
                // Handle "Destination Point" action
                echo "Destination Point functionality goes here.";
                break;
            case "date":
                // Handle "Date" action
                echo "Date functionality goes here.";
                break;
            case "search":
                // Handle "Search" action
                echo "Search functionality goes here.";
                break;
            case "search_type":
                // Handle "Search Type" action
                echo "Search Type functionality goes here.";
                break;
            default:
                // Invalid action
                echo "Invalid action.";
        }
    } else {
        // No action specified
        echo "No action specified.";
    }
}

?>




</body>
</html>