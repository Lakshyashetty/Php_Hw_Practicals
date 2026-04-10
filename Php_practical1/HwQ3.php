<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">

   <input type="text" name="fullname" placeholder="Enter Full Name" >

        <input type="text" name="phone" placeholder="Enter Phone Number" >
         
        <select name="carbrand">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
        </select>

        <button type="submit">Submit</button>

    </form>
</body>
</html>
<?php
$name = $_POST['fullname'];
$phone = $_POST['phone'];
$brand = $_POST['carbrand'];

echo "<h2>Form Output</h2>";
echo "Hello, $name .Your phone number is  $phone Your preferred car brand is  $brand";
?>