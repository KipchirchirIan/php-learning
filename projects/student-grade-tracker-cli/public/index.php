<?php

require_once '../src/Student.php';
require_once '../src/Grade.php';
require_once '../src/GradeBook.php';

$student1 = new Student('John Doe');
$student1->addGrade(new Grade(75));
$student1->addGrade(new Grade(68));

$student2 = new Student('Jane Doe');
$student2->addGrade(new Grade(91));
$student2->addGrade(new Grade(88));

$student3 = new Student('Luke Skywalker');
$student3->addGrade(new Grade(35));
$student3->addGrade(new Grade(52));

$gradebook = new GradeBook();
$gradebook->addStudent($student1);
$gradebook->addStudent($student2);
$gradebook->addStudent($student3);

$gradebook->listGrades();