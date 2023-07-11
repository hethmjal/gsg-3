<?php
include './student.php';
include './course.php';
include './manager.php';


$manager = new Manager;

$course1 = $manager->create_course('course1');
$course2 = $manager->create_course('course2');

$stu1 = $manager->create_student('student 10','std1@gmail.com',$course1);

$stu2 = $manager->create_student('student 12','std2@gmail.com',$course1);


echo '<pre>';

var_dump($course1,$course2,$stu1,$stu2);
$stu1 = $manager->update_student($stu1,"first student","first@gmail.com",$course2);

var_dump($stu1);
$stu1 = $manager->delete_student($stu1);
var_dump($stu1);






