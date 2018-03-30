<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Engin/gohome';

$route['login'] = 'Engin/login';
$route['register'] = 'Engin/register';
$route['logout'] = 'Engin/logout';
$route['gotologregpage'] = 'Engin/gotologreg';
$route['addpost']='Engin/addpost';
$route['editprofile']='Engin/edit';
$route['editnewinfo']='Engin/editnewinfo';
$route['insertingpost']='Engin/insertingpost';
$route['showallvacanccies']='Engin/showallvacanccies';
$route['gobacktoyourprofile']='Engin/gobacktoyourprofile';

$route['viewcompanies']='Engin/viewcompanies';
$route['viewposts']='Engin/viewposts'; //view all posts in the CP of the admin
$route['editpost/(:any)']='Engin/editpost/$1';
$route['editing/(:any)']='Engin/editing/$1';
$route['approvepost/(:any)']='Engin/approvepost/$1';
$route['rejectpost/(:any)']='Engin/rejectpost/$1';
$route['logoutcp'] = 'Engin/logoutadmin';// to logout form the admin home
$route['cpadmin'] = 'Engin/gotologregadmin';// for admins
$route['adminlog'] = 'Engin/loginadmin';
$route['registeradmin'] = 'Engin/registeradmin';
$route['cpshowcompanies']='Engin/cpshowcompanies';
$route['gotocpeditpostspage']='Engin/gotocpeditpostspage'; //here now 
$route['deletecompany/(:any)']='Engin/deletecompany/$1';
$route['deletepost/(:any)']='Engin/deletepost/$1';
$route['filter/(:any)']='Engin/filter/$1';

$route['viewone/(:any)']='Engin/viewone/$1';//view one details post
$route['gohomeadmin']='Engin/gohomeadmin';//view one details post



$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

