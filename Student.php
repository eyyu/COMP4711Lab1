<?php
/**
* COMP4711 Lab 1 
* Student Class to represent a student obejct
* 
* @author Eva Yu
* @version 1.0
**/

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
