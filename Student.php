<?php
/**
* COMP4711 Lab 1 
* Student Class to represent a student obejct
* 
* @author Eva Yu
* @version 1.0
**/

class Student{
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
