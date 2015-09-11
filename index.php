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
        // put your code here
        //    echo 'Super!';
        include('student.php');
        
            //Creating an array called students
            $students = array();
            
            //Creating the 1st student and adding it to the students array
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            //Creating 2nd student and adding it to the students array
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //Creating 3rd student and adding it to the students array
            $third = new Student();
            $third->surname = "Sarmiento";
            $third->first_name = "Lawrence";
            $third->add_email('work','lsarmiento@bcit.ca');
            $third->add_grade(100);
            $third->add_grade(50);
            $third->add_grade(1);
            $students['a123'] = $third;
            
            //sort the students array before displaying the students
            ksort($students);
            
            //Display each student in the students array
            foreach($students as $student)
                echo $student->toString();
        ?>
    </body>
</html>
