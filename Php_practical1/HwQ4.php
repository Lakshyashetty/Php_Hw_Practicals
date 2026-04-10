<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
 <input type="text" name="uname" placeholder="Enter Username"><br>
        
        <input type="password" name="pass" placeholder="Enter Password"><br>

        <div class="checkbox-box">
            <input type="checkbox" name="terms" value="agreed"> I agree to the terms and conditions
        </div><br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>

<?php
$uname= $_GET['uname'];
$cbx=isset($_GET['terms'])?"Agreed":"Not agreed";

echo "<h2>Form Output</h2>";
echo "Welcome, " . $uname . ". You have " . $cbx . " to the terms and conditions.";
?>