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

$route['chat'] = 'ChatController/index';
$route['send-message'] = 'ChatController/send_text_message';
$route['chat-attachment/upload'] = 'ChatController/send_text_message';
$route['get-chat-history-vendor'] = 'ChatController/get_chat_history_by_vendor';

$route['update-notification'] = 'ChatController/update_notification';
$route['D_O/update-notification'] = 'ChatController/update_notification';
$route['JOTO/update-notification'] = 'ChatController/update_notification';

$route['update-activity'] = 'ChatController/update_activity';
$route['D_O/update-activity'] = 'ChatController/update_activity';
$route['JOTO/update-activity'] = 'ChatController/update_activity';

$route['check-notification'] = 'ChatController/check_notification';

$route['D_O/check-notification'] = 'ChatController/check_notification';
$route['JOTO/check-notification'] = 'ChatController/check_notification';

$route['check-activity'] = 'ChatController/check_activity';
$route['D_O/check-activity'] = 'ChatController/check_activity';
$route['JOTO/check-activity'] = 'ChatController/check_activity';


$route['D_O/add_physical_milestone/update-notification'] = 'ChatController/update_notification';
$route['D_O/add_physical_milestone/update-activity'] = 'ChatController/update_activity';
$route['D_O/add_physical_milestone/check-notification'] = 'ChatController/check_notification';
$route['D_O/add_physical_milestone/check-activity'] = 'ChatController/check_activity';


$route['D_O/view_edit_observation/update-notification'] = 'ChatController/update_notification';
$route['D_O/view_edit_observation/update-activity'] = 'ChatController/update_activity';
$route['D_O/view_edit_observation/check-notification'] = 'ChatController/check_notification';
$route['D_O/view_edit_observation/check-activity'] = 'ChatController/check_activity';

$route['D_O/view_edit_warning/update-notification'] = 'ChatController/update_notification';
$route['D_O/view_edit_warning/update-activity'] = 'ChatController/update_activity';
$route['D_O/view_edit_warning/check-notification'] = 'ChatController/check_notification';
$route['D_O/view_edit_warning/check-activity'] = 'ChatController/check_activity';

$route['D_O/view_edit_inspection/update-notification'] = 'ChatController/update_notification';
$route['D_O/view_edit_inspection/update-activity'] = 'ChatController/update_activity';
$route['D_O/view_edit_inspection/check-notification'] = 'ChatController/check_notification';
$route['D_O/view_edit_inspection/check-activity'] = 'ChatController/check_activity';

$route['D_O/view_edit_officer_record/update-notification'] = 'ChatController/update_notification';
$route['D_O/view_edit_officer_record/update-activity'] = 'ChatController/update_activity';
$route['D_O/view_edit_officer_record/check-notification'] = 'ChatController/check_notification';
$route['D_O/view_edit_officer_record/check-activity'] = 'ChatController/check_activity';

$route['D_O/view_edit_personal_record/update-notification'] = 'ChatController/update_notification';
$route['D_O/view_edit_personal_record/update-activity'] = 'ChatController/update_activity';
$route['D_O/view_edit_personal_record/check-notification'] = 'ChatController/check_notification';
$route['D_O/view_edit_personal_record/check-activity'] = 'ChatController/check_activity';


$route['chat-clear'] = 'ChatController/chat_clear_client_cs';



$route['mission/(:any)']='Mission/mission/$1';
$route['mission']='CO/mission';
$route['get_values/(:any)']='Manager/Get_Values/$1';
$route['show_records/(:any)']='Manager/show_records/$1';
$route['default_controller'] = 'User_Login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
