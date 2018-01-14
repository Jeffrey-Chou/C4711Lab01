<?php


/**
 * A simple student class
 *
 * @author Jeff
 */
class Student {
    //put your code here
    /**
     * Constructor for class Student
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add an email to the student
     * @param type $which the type of email being added
     * @param type $address the email address being added
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade to the student
     * @param type $grade the grade being added represented by an int
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the average grade for the student
     * @return type the average calculated
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Returns the info contained by the student as a string
     * @return type the student info as a string
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
