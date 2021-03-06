<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COMP4711Lab1</title>
</head>
<body>
    <?php
    /*------------------------------------------------------------------------------
    -- SOURCE FILE: index.php - main php file
    -- DATE: JAN. 13, 2017
    -- VERSION: 
    --      1.0 - [EY] - 2017/01/13 
    -- AUTHOR: Eva Yu
    --
    -- NOTES:
    -- This is a test class to play with php 
    -- and running a local apache server with virtual hosting
    -- this program will use the Student class ( in Student.php )
    -- and create 3 students, then it will sort them 
    -- and display them 
    ------------------------------------------------------------------------------*/
    include('Student.php');
    
    $students = array();

    //first student creation: 
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;
    
    //second student creation:
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
    
    //third student creation:
    $third = new Student();
    $third->surname = "Eva";
    $third->first_name = "Yu";
    $third->add_email('home','eva@coolpeople.com');
    $third->add_grade(100);
    $students['e789'] = $third;
    
    ksort($students); // one of the many sort functions
    foreach($students as $student)
        echo $student->toString();
    
    ?>
    

</body>
</html>