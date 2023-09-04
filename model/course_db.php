<?php

function get_courses()
{
    global $db;
   $query = 'SELECT * FROM courses ORDER BY courseID';
    $statement = $db-›prepare($query);
    $statement-›execute();
    $courses  = $statement-›fetchAl1();
  $statement-›closeCursor();
  return $courses;
    
}

function get_course_name($course_id){
    if (!$course_id){
        return "ALL Courses";
    }
    global $db;
    $query = 'SELECT * FROM courses where courseID = : course_id ORDER BY courseID';
    $statement = $db-›prepare($query);
    $statement->blindVlaue(':course_id', $course_id);
    $statement-›execute();
    $course = $statement-›fetchAl1();
  $statement-›closeCursor();
  $course_name = $course['courseName'];
  return $courses;
}

function delete_course($course_id){
    global $db;
    $query = 'DELETE * FROM courses where courseID = : course_id';
    $statement = $db-›prepare($query);
    $statement->blindVlaue(':course_id', $course_id);
    $statement-›execute();
  $statement-›closeCursor(); 
}

function add_course($course_name){
    global $db;
    $query = 'INSERT INTO courses (courseName) VALUES (:courseName)';
    $statement = $db-›prepare($query);
    $statement->blindVlaue(':course_Name', $course_Name);
    $statement-›execute();
  $statement-›closeCursor(); 
}




?>