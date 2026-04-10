<?php
abstract class StudentRecord {
    public $name;
    abstract function calculateGrade();
}

class UndergraduateStudent extends StudentRecord {
    public $assignment;
    public $exam;

    function __construct($name, $assignment, $exam) {
        $this->name = $name;
        $this->assignment = $assignment;
        $this->exam = $exam;
    }

    function calculateGrade() {
        return ($this->assignment * 0.4) + ($this->exam * 0.6);
    }
}


class GraduateStudent extends StudentRecord {
    public $project;
    public $exam;

    function __construct($name, $project, $exam) {
        $this->name = $name;
        $this->project = $project;
        $this->exam = $exam;
    }

    function calculateGrade() {
        return ($this->project * 0.5) + ($this->exam * 0.5);
    }
}
$ug = new UndergraduateStudent("Laksh", 80, 70);
$grad = new GraduateStudent("Rahul", 90, 85);

echo $ug->name.":". "UG Grade: " . $ug->calculateGrade() . "<br>";
echo $grad->name .":". "Graduate Grade: " . $grad->calculateGrade();

?>