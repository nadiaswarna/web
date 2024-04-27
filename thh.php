<?php

require_once "db_connection.php";


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $transaction_amount = $_POST["transaction_amount"];
    if (!is_numeric($transaction_amount) || $transaction_amount <= 0) {
        $error = "Please enter a valid transaction amount.";
    } else {
       
        $_SESSION['transaction_amount'] = $transaction_amount;
        
       
        setcookie('transaction_amount', $transaction_amount, time() + (86400 * 30), "/"); // 86400 = 1 day
        
      
        header("Location: faq.php");
        exit();
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
   <title>Transaction History</title>
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
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
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


table {
    width: 100%;
    border-collapse: collapse;
}

table td, table th {
    border: 1px solid #ccc;
    padding: 8px;
}

table th {
    background-color: #f2f2f2;
    text-align: left;
}


input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    margin-top: 5px;
}


input[type="submit"] {
    padding: 8px 12px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
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
<fieldset style="width: 600px;">
<button name="check">Logo</button>
<hr>
<p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
      <tr>
        <td><button name="check">Transaction His</button></td> 
        <td colspan="5"><b>Transaction History:1-10 out of 100</b></td>
      </tr>
      
      <tr>
        <td><button name="check">Reservation His</button></td>
        <td><label>1.Cox's Three Days</label></td>       
        <td><label>-Trx 129AW4112</label></td>
        <td><label>-$400</label></td>
      </tr>
      
      <tr>
        <td><button name="check">View Profile</button></td>
        <td><label>2.Sajek's Two Days</label></td>
        <td><label>-Trx 129AW4112</label></td>
        <td><label>-$400</label></td>
      </tr>

      <tr>
        <td><button name="check">Edit Profile</button></td>
        <td><label>3.Chittagong Flight</label></td>
        <td><label>-Trx 129AW4112</label></td>
      </tr>
      
      <tr>
        <td><button name="check">Booking List</button></td>
        <td><label>4.Singapore Tour</label></td>
        <td><label>-Trx 129AW4112<br></label></td>
        <td><label>-$200</label></td>
      </tr>
       
      <tr>
        <td><button name="check">Change Password</button></td>
        <td><label>5.Dhaka-Chittagong Dhaka</label></td>
        <td><label>-Trx 129AW4112</label></td>
        <td><label>-$150</label></td>
      </tr>
    </table>

    <br>
    <label for="transaction_amount">Enter Transaction Amount:</label>
    <input type="text" id="transaction_amount" name="transaction_amount">
    <br>
    <input type="submit" value="Submit">
  </form>
  
  <?php
  // Display validation error if exists
  if (isset($error)) {
      echo $error;
  }
  ?>
  
</fieldset>
</body>
</html>
