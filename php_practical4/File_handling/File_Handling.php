<?php
$demo="file.txt";
function Reading($demo){
    if (file_exists($demo)) {
$data= file_get_contents($demo);
echo "$data";
    }
    
}
// Reading($demo);
function writing($demo,$name,$grade){
    $data="$name:$grade";
    file_put_contents($demo,array($name,$grade));
    echo "$data";
   
    
}
// writing($demo,"Laksh","A");
function Append($demo,$name,$grade){
    $data="$name:$grade";
    file_put_contents($demo,array($name,$grade),FILE_APPEND);
    echo "$data";
   
    
}
// Append($demo,"Rahul","B");
function Delete($demo){
    if (file_exists($demo)) {
        unlink($demo);
        echo"file deleted";
    }
    else {
        echo "deleted";
            }
}
Delete($demo);
?>