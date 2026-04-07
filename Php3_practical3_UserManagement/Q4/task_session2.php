<?php
session_start();
echo "Task retrievel". "<br><br>";
echo "Hello Task:<b>" .$_SESSION["task_id"]."</b>";
?>