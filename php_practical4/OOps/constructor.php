<?php
class Employee{
public $Student_id;
public $Student_name;
public $Student_grade;

public function __construct($Student_id,$Student_name,$Student_grade){
    $this->id=$Student_id;
    $this->name=$Student_name;
    $this->salary=$Student_grade;
}
function displayDetails(){
   echo  $this->id;
    echo $this->name;
    echo $this->salary;
}
}
$ob=new Employee(1,":","Laksh".":"."O");
$ob->displayDetails();

?>