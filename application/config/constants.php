<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



// ESTIMATES STATUS
define('ESTIMATE_STATUS',serialize(array(0=>"cancelled",1=>"active")));

// LIVING_ROOM_ITEM
define('ONEBHK_LIVING_ROOM_ITEMS',serialize(array("Furnitures"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronics'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1))));
define('TWOBHK_LIVING_ROOM_ITEMS',serialize(array("Furnitures"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronics'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1))));
define('THREEBHK_LIVING_ROOM_ITEMS',serialize(array("Furnitures"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronics'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1))));
define('THREEPLUSBHK_LIVING_ROOM_ITEMS',serialize(array("Furnitures"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronics'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1))));

// BED_ROOM_ITEM
define('ONEBHK_BED_ROOM_ITEMS',serialize(array('furnitures'=>array('baby_bed'=>1,'bed_mattress'=>2,'bunk_bed'=>1,'diwan_bed'=>2,'double_cot_bed_boxed'=>1,'double_cot_bed_regular'=>3,'dressing_table'=>1,'folding_bed'=>1,'single_cot_bed_regular'=>1,'trolley_bag'=>1,'wardrobe_steel'=>1,'wardrobe_wooden'=>1),'electronics'=>array('air_cooler'=>1,'table_fan'=>1,'split_ac'=>1,'windows_ac'=>1))));
define('TWOBHK_BED_ROOM_ITEMS',serialize(array('furnitures'=>array('baby_bed'=>1,'bed_mattress'=>2,'bunk_bed'=>1,'diwan_bed'=>2,'double_cot_bed_boxed'=>1,'double_cot_bed_regular'=>3,'dressing_table'=>1,'folding_bed'=>1,'single_cot_bed_regular'=>1,'trolley_bag'=>1,'wardrobe_steel'=>1,'wardrobe_wooden'=>1),'electronics'=>array('air_cooler'=>1,'table_fan'=>1,'split_ac'=>1,'windows_ac'=>1))));
define('THREEBHK_BED_ROOM_ITEMS',serialize(array('furnitures'=>array('baby_bed'=>1,'bed_mattress'=>2,'bunk_bed'=>1,'diwan_bed'=>2,'double_cot_bed_boxed'=>1,'double_cot_bed_regular'=>3,'dressing_table'=>1,'folding_bed'=>1,'single_cot_bed_regular'=>1,'trolley_bag'=>1,'wardrobe_steel'=>1,'wardrobe_wooden'=>1),'electronics'=>array('air_cooler'=>1,'table_fan'=>1,'split_ac'=>1,'windows_ac'=>1))));
define('THREEPLUSBHK_BED_ROOM_ITEMS',serialize(array('furnitures'=>array('baby_bed'=>1,'bed_mattress'=>2,'bunk_bed'=>1,'diwan_bed'=>2,'double_cot_bed_boxed'=>1,'double_cot_bed_regular'=>3,'dressing_table'=>1,'folding_bed'=>1,'single_cot_bed_regular'=>1,'trolley_bag'=>1,'wardrobe_steel'=>1,'wardrobe_wooden'=>1),'electronics'=>array('air_cooler'=>1,'table_fan'=>1,'split_ac'=>1,'windows_ac'=>1))));

// KITCHEN_ITEMS
define('ONEBHK_KITCHEN_ITEMS',serialize(array('electronics'=>array('coffee_maker'=>1,'dish_washer'=>1,'mixer_grinder'=>1,'oven'=>1,'refrigerator'=>1,'water_purifier'=>2,'utensils_stand'=>3),'others'=>array('dining_table_4_chairs'=>1,'dining_table_6_chairs'=>1,'gas_cylinder'=>1,'gas_stove'=>1))));
define('TWOBHK_KITCHEN_ITEMS',serialize(array('electronics'=>array('coffee_maker'=>1,'dish_washer'=>1,'mixer_grinder'=>1,'oven'=>1,'refrigerator'=>1,'water_purifier'=>2,'utensils_stand'=>3),'others'=>array('dining_table_4_chairs'=>1,'dining_table_6_chairs'=>1,'gas_cylinder'=>1,'gas_stove'=>1))));
define('THREEBHK_KITCHEN_ITEMS',serialize(array('electronics'=>array('coffee_maker'=>1,'dish_washer'=>1,'mixer_grinder'=>1,'oven'=>1,'refrigerator'=>1,'water_purifier'=>2,'utensils_stand'=>3),'others'=>array('dining_table_4_chairs'=>1,'dining_table_6_chairs'=>1,'gas_cylinder'=>1,'gas_stove'=>1))));
define('THREEPLUSBHK_KITCHEN_ITEMS',serialize(array('electronics'=>array('coffee_maker'=>1,'dish_washer'=>1,'mixer_grinder'=>1,'oven'=>1,'refrigerator'=>1,'water_purifier'=>2,'utensils_stand'=>3),'others'=>array('dining_table_4_chairs'=>1,'dining_table_6_chairs'=>1,'gas_cylinder'=>1,'gas_stove'=>1))));

// MISC ITEMS
define('ONEBHK_MISC_ITEMS',serialize(array('miscellaneous'=>array('book_shelf'=>1,'cross_trainer'=>1,'exercise_cycle'=>1,'geyser'=>1,'plastic_drum'=>1,'pooja_temple'=>'','sewing_machine'=>'','shoe_rack'=>1,'treadmill'=>'','vaccuum_cleaner'=>2,'washing_machine'=>1),'boxes'=>array('book_boxes'=>1,'cloth_boxes'=>3,'kitchen_boxes'=>1,'misc_boxes'=>1),'vehicle'=>array('bicycle'=>1,'moped'=>'','bike'=>1,'bike_geared'=>1,'car_hatchback'=>1,'car_sedan'=>'','car_SUV'=>''))));
define('TWOBHK_MISC_ITEMS',serialize(array('miscellaneous'=>array('book_shelf'=>1,'cross_trainer'=>1,'exercise_cycle'=>1,'geyser'=>1,'plastic_drum'=>1,'pooja_temple'=>'','sewing_machine'=>'','shoe_rack'=>1,'treadmill'=>'','vaccuum_cleaner'=>2,'washing_machine'=>1),'boxes'=>array('book_boxes'=>1,'cloth_boxes'=>3,'kitchen_boxes'=>1,'misc_boxes'=>1),'vehicle'=>array('bicycle'=>1,'moped'=>'','bike'=>1,'bike_geared'=>1,'car_hatchback'=>1,'car_sedan'=>'','car_SUV'=>''))));
define('THREEBHK_MISC_ITEMS',serialize(array('miscellaneous'=>array('book_shelf'=>1,'cross_trainer'=>1,'exercise_cycle'=>1,'geyser'=>1,'plastic_drum'=>1,'pooja_temple'=>'','sewing_machine'=>'','shoe_rack'=>1,'treadmill'=>'','vaccuum_cleaner'=>2,'washing_machine'=>1),'boxes'=>array('book_boxes'=>1,'cloth_boxes'=>3,'kitchen_boxes'=>1,'misc_boxes'=>1),'vehicle'=>array('bicycle'=>1,'moped'=>'','bike'=>1,'bike_geared'=>1,'car_hatchback'=>1,'car_sedan'=>'','car_SUV'=>''))));
define('THREEPLUSBHK_MISC_ITEMS',serialize(array('miscellaneous'=>array('book_shelf'=>1,'cross_trainer'=>1,'exercise_cycle'=>1,'geyser'=>1,'plastic_drum'=>1,'pooja_temple'=>'','sewing_machine'=>'','shoe_rack'=>1,'treadmill'=>'','vaccuum_cleaner'=>2,'washing_machine'=>1),'boxes'=>array('book_boxes'=>1,'cloth_boxes'=>3,'kitchen_boxes'=>1,'misc_boxes'=>1),'vehicle'=>array('bicycle'=>1,'moped'=>'','bike'=>1,'bike_geared'=>1,'car_hatchback'=>1,'car_sedan'=>'','car_SUV'=>''))));