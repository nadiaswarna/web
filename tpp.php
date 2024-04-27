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

/* Tour Planner */
.container {
  border: 2px solid black;
  padding: 20px;
  width: 800px;
  margin: auto;
  margin-top: 50px;
  position: relative;
  border-radius: 4px;
}

.tour-text {
  border: 2px solid black;
  padding: 10px;
  width: 150px;
  border-radius: 10px;
  text-align: center;
  background-color: white;
  position: absolute;
  top: -50px;
  font-weight: bold;
}
.box {
  margin: 20px;
}

.box label {
  font-weight: bold;
}
.check-btn {
  text-align: right;
}
.check-btn button {
  padding: 7px 20px;
  border: 2px solid black;
  border-radius: 3px;
}


  </style>

</head>
<body>


<form action="">

<section>
        <!-- Tour Plans -->
        <div class="container">
          <h2 class="tour-text">Tour Planner</h2>
          <form class="tour-from">
            <div class="box">
              <label for="">Starting :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Destination :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Number of people :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Place to Visit :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Number of Day :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Room Type :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Starting Date :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="box">
              <label for="">Return Date :</label>
              <input type="text" name="" id="" />
            </div>
            <div class="check-btn">
              <button type="submit">Check</button>
            </div>
          </form>
        </div>
      </section>
      
      
</form>
 

</body>
</html>

