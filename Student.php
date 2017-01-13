<?php
/*------------------------------------------------------------------------------
-- SOURCE FILE: Student.php - Student Class
-- DATE: JAN. 13, 2016
-- FUNCTIONS:
--      add_email($which,$address)
--      add_grade($grade)
--      average()
--      toString()
-- VERSION 
--      1.0 - [EY] - 2016/JAN/13 
-- AUTHOR: Eva Yu
-- NOTES:
-- This is the student class that tracks name, emails, and grades
------------------------------------------------------------------------------*/

class Student{
    
    //CTOR of the student class 
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Function will add a email to an array of emails of a student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //Function will add a grade to an array of grades of a student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Function will calculate the average of a student based on grades 
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //a basic to string operation that will show the details of the student 
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n\t";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n\t";
        $result .= "\n\t";
        return '<pre>'.$result.'</pre>';
    }
}
