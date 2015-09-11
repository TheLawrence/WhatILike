<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A student object consists of a surname, first name, a number of emails,
 * and a number of grades. This information is displayed using the toString
 * method. The average grade of a student calculated using the average method.
 *
 * @author Lawrence
 */
class Student {
    
    /*
     * Constructor used to instantiate a student object
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * Mutator function used for assigning a student object an email address
     * and which type of email address
     */
    function add_email($which,$address) {
        $this->emails[$which] =
        $address;
    }
    
    /*
     * Mutator function used for assigning a student a grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * Function used to calculate the average grade of a student object
     * using each of the student's grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*
     * Function used to display the student object's information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
}
