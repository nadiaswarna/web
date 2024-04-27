<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>FAQ</title>

<style>
  

body, h1, h2, h3, p, ul, li, label, input, textarea, button, fieldset, legend {
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

/* Form styles */
fieldset {
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
}

legend {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

.error {
    color: red;
    margin-bottom: 10px;
}

.success {
    color: green;
    margin-bottom: 10px;
}

</style>

  </head>
  <body>
  <fieldset style="width: 600px;">
  <legend >FAQ</legend>
   
    
        <label>1. What We are About ?</label><br>
        <label>Answer : .......</label><br>
        <label>2. What is Your Main Purpose ?</label><br>
        <label>Answer : .......</label><br>
        <label>3. What type of tour we are offering ?</label><br>
        <label>Answer : .......</label>
     
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $errors = array();
  
 
  if (empty($_POST["question1"])) {
    $errors[] = "Question 1 is required.";
  }
  if (empty($_POST["answer1"])) {
    $errors[] = "Answer 1 is required.";
  }

  
  if (empty($_POST["question2"])) {
    $errors[] = "Question 2 is required.";
  }
  if (empty($_POST["answer2"])) {
    $errors[] = "Answer 2 is required.";
  }

  
  if (empty($_POST["question3"])) {
    $errors[] = "Question 3 is required.";
  }
  if (empty($_POST["answer3"])) {
    $errors[] = "Answer 3 is required.";
  }

  if (empty($errors)) {
   
    echo "Form submitted successfully!";
  } else {
   
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  }
}

?>

   
  </body>
</html>