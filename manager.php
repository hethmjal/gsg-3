<?php


class Manager 
{

    public function create_course($name){
        $course = new Course($name);
        return $course;
    }

    public function create_student($name,$email,$courses){
        $student = new Student($name,$email,$courses);
        return $student;
    }

    public function delete_student(Student $student){
        $student = null;
        return $student;
    }

    public function update_student(Student $student,$name,$email,$courses){
        
        $student->name= $name;
        $student->email = $email;
        $student->courses = $courses;
        
        return $student;
    }

}