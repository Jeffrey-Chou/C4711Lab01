<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        // initialize student array
        $students = array();
        
        //create new student first
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; // add first to array
        
        $second = new Student(); // create new student second
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second; // add second to array
        
        $third = new Student(); // create new student third
        $third->surname = "Chou";
        $third->first_name = "Jeffrey";
        $third->add_email('school','jchou43@my.bcit.ca'); // add third to array
        $third->add_grade(50);
        $students['jc43'] = $third;

        ksort($students); // one of the many sort functions
        
        // print all of info contained in the array
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
