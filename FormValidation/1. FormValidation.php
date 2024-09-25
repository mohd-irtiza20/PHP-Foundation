<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<style>
    .error {
        color: #C7253E;
    }
</style>

<body>

    <?php

    # Defined Variables
    $fname = $lname = $email = $password = $mobile = $gender = $dob = $anniversary = $term = "";

    # Defined Error Variables
    $Err_fname = $Err_lname = $Err_email = $Err_password = $Err_mobile = $Err_gender = $Err_dob = $Err_anniversary = $Err_term = "";

    # var_dump($_POST);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # Validation For First Name
        if (empty($_POST["fname"])) {
            $Err_fname = "First Name is Required";
        } else {
            $fname = $_POST["fname"];
        }

        # Validation For Last Name 
        if (empty($_POST["lname"])) {
            $lname = "";
        } else {
            $lname = $_POST["lname"];
        }

        # Validation For Email
        if (empty($_POST["email"])) {
            $Err_email = "Email is Required";
        } else {
            $email = $_POST["email"];
        }

        # Validation For Password
        if (empty($_POST["password"])) {
            $Err_password = "Password is Required";
        } else {
            $password = $_POST["password"];
        }

        # Validation For Mobile
        if (empty($_POST["number"])) {
            $Err_mobile = "Number is Required";
        } else {
            $mobile = $_POST["number"];
        }

        # Validation For Gender
        if (empty($_POST["gender"])) {
            $Err_gender = "Gender is Required";
        } else {
            $gender = $_POST["gender"];
        }

        # Validation For DOB
        if (empty($_POST["dob"])) {
            $Err_dob = "DOB is Required";
        } else {
            $dob = $_POST["dob"];
        }

        # Validation For Anniversary
        if (empty($_POST["anniversary"])) {
            $anniversary = "";
        } else {
            $anniversary = $_POST["anniversary"];
        }

        # Validation For Terms and Conditions
        if (empty($_POST["term"])) {
            $Err_term = "Accept Terms and Conditions";
        } else {
            $term = $_POST["term"];
        }

    }

    ?>

    <h1>User Registration</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <!-- First Name -->
        <strong>First Name</strong>
        <input type="text" name="firstname" id="fname" value=" <?php echo htmlspecialchars($fname); ?>">
        <span class="error">*<?php echo $Err_fname; ?></span>
        <br> <br>

        <!-- Last Name -->
        <strong>Last Name</strong>
        <input type="text" name="lastname" id="lname" value=" <?php echo htmlspecialchars($lname); ?>">
        <span class="error"> <?php echo $Err_lname; ?></span>
        <br> <br>

        <!-- Email -->
        <strong>Email</strong>
        <input type="email" name="email" id="mail" value=" <?php echo htmlspecialchars($email); ?>">
        <span class="error">*<?php echo $Err_email ?></span>
        <br> <br>

        <!-- Password -->
        <strong>Password</strong>
        <input type="password" name="password" id="pass" value="<?php echo htmlspecialchars($password); ?>">
        <span class="error">*<?php echo $Err_password; ?></span>
        <br> <br>

        <!-- Mobile -->
        <strong>Mobile</strong>
        <input type="number" name="number" id="phn" value=" <?php echo htmlspecialchars($mobile); ?>">
        <span class="error">*<?php echo $Err_mobile; ?></span>
        <br> <br>

        <!-- Gender -->
        <strong>Gender</strong>
        <input type="radio" name="gender" id="gender" value="female" <?php if ($gender == "female")
            echo "checked"; ?>>
        Female
        <input type="radio" name="gender" id="gender" value="male" <?php if ($gender == "male")
            echo "checked"; ?>> Male
        <input type="radio" name="gender" id="gender" value="other" <?php if ($gender == "other")
            echo "checked"; ?>>
        Others
        <span class="error">*<?php echo $Err_gender; ?></span>
        <br> <br>

        <!-- Date of Birth -->
        <strong>Date of Birth</strong>
        <input type="date" name="dob" id="dob" value=" <?php echo htmlspecialchars($dob); ?>">
        <span class="error">*<?php echo $Err_dob; ?></span>
        <br> <br>

        <!-- Anniversary -->
        <strong>Anniversary</strong>
        <input type="date" name="anniversary" id="anniversary" value=" <?php echo htmlspecialchars($anniversary); ?>">
        <span class="error"> <?php echo $Err_anniversary ?></span>
        <br> <br>

        <!-- Term and Conditions -->
        <strong>Term and Conditions</strong>
        <input type="checkbox" name="term" id="term" value="accept" <?php if ($term == "accept")
            echo "checked"; ?>>
        <span class="error">*<?php echo $Err_term; ?></span>
        <br> <br>

        <!-- Submit -->
        <input type="submit" value="Submit">
    </form>
    <br> <br>

    <!-- Output will be displayed here -->
    <div class="data">
        <?php
        foreach ($_POST as $key => $value) {
            echo "$key: $value <br>";
        }
        ?>
    </div>

</body>


</html>