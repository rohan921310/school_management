<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['login_check'] = 'login/login_check';
$route['logout'] = 'login/logout';



$route['class_master'] = 'all_master/class_master';
$route['add_class'] = 'all_master/add_class';
$route['delete_class_master'] = 'all_master/delete_class_master';
$route['get_class_master'] = 'all_master/get_class_master';
$route['edit_class_master'] = 'all_master/edit_class_master';



$route['subject_master'] = 'all_master/subject_master';
$route['add_subject'] = 'all_master/add_subject';
$route['delete_subject_master'] = 'all_master/delete_subject_master';
$route['get_subject_master'] = 'all_master/get_subject_master';
$route['edit_subject_master'] = 'all_master/edit_subject_master';



$route['teacher_master'] = 'all_master/teacher_master';
$route['add_teacher'] = 'all_master/add_teacher';
$route['delete_teacher_master'] = 'all_master/delete_teacher_master';
$route['get_teacher_master'] = 'all_master/get_teacher_master';
$route['edit_teacher_master'] = 'all_master/edit_teacher_master';

$route['assign_master'] = 'all_master/assign_master';
$route['add_assign'] = 'all_master/add_assign';
$route['delete_assign_master'] = 'all_master/delete_assign_master';



$route['student_master'] = 'all_master/student_master';
$route['add_student'] = 'all_master/add_student';
$route['delete_student_master'] = 'all_master/delete_student_master';
$route['get_student_master'] = 'all_master/get_student_master';
$route['edit_student_master'] = 'all_master/edit_student_master';


$route['assign_attendance'] = 'all_master/assign_attendance';
$route['add_assign_attendance'] = 'all_master/add_assign_attendance';
$route['delete_assign_attendance'] = 'all_master/delete_assign_attendance';
$route['get_assign_attendance'] = 'all_master/get_assign_attendance';
$route['edit_assign_attendance'] = 'all_master/edit_assign_attendance';


$route['attendance_report'] = 'all_master/attendance_report';
$route['view_attendance'] = 'all_master/view_attendance';


$route['time_table'] = 'all_master/time_table';
$route['set_time_table'] = 'all_master/set_time_table';
$route['submit_time_table'] = 'all_master/submit_time_table';




$route['teacher_report'] = 'all_master/teacher_report';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
