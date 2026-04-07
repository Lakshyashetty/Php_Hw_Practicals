
<?php
session_start();
$_SESSION["task_id"]="Laksh101";
echo "Current Active Task ID:<b> " . $_SESSION['task_id'] ."</b>" ."<br><br>";
?>
<a href="task_session2.php">Next Page</a>