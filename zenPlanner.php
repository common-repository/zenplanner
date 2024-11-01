<?php
/*
*Plugin Name: Zen Planner
*Plugin URI: http://www.zenplanner.com
*Description: Embeds data from your Zen Planner website into this WordPress blog
*Version: 0.2
*Author: Zen Planner
*Author URI: http://www.zenplanner.com
*License: GPLv2 http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

ShortCodes

label: Calendar
shortcode: [ZENPLANNER CALENDAR]
URL: http://x.zenplanner.com/zenplanner/portal/calendar.cfm

label: Appointment Scheduler
shortcode: [ZENPLANNER APPOINTMENT]
URL: http://x.zenplanner.com/zenplanner/portal/scheduler.cfms

label: Membership Signup Page
shortcode: [ZENPLANNER MEMBERSHIP]
URL: http://x.zenplanner.com/zenplanner/portal/sign-up-now.cfm

label: Retail Store
shortcode: [ZENPLANNER RETAIL]
URL: http://x.zenplanner.com/zenplanner/portal/retail.cfm

label: Free Trial Class
shortcode: [ZENPLANNER FREETRIAL]
URL: http://x.zenplanner.com/zenplanner/portal/freeTrial.cfm

label: Member Profile
shortcode: [ZENPLANNER PROFILE]
URL: http://x.zenplanner.com/zenplanner/portal/person.cfm
*/

function calendarLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/calendar.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}

//function to handle appointment shortcode
function appointmentLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/scheduler.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}

function membershipLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/sign-up-now.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}

function retailLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/retail.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}


function freeTrialLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/freeTrial.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}

function profileLoader(){
?>
<iframe
src="http://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/portal/person.cfm"
height="950"
width="100%"
id="idZenPlannerFrame"
frameborder="0">
</iframe>
<script src="https://<?echo get_option("userKey");?>.zenplanner.com/zenplanner/skin/js/resize.js"></script>
<?
}

//include file for admin menu code
//called from zenFrameAdminActions from admin action hook
function zenPlanner_admin(){
  include('zenPlannerAdmin.php');
}
//function call from action hook. Creates option page
function zenFrameAdminActions(){
  add_options_page("Zen Planner", "Zen Planner", 1, "Zen_Planner", "zenPlanner_admin"); 
}
//admin menu action hook
add_action('admin_menu','zenFrameAdminActions');

//hooks to load shortcodes
add_shortcode('ZENPLANNER CALENDAR','calendarLoader');
add_shortcode('ZENPLANNER APPOINTMENT','appointmentLoader');
add_shortcode('ZENPLANNER MEMBERSHIP','membershipLoader');
add_shortcode('ZENPLANNER RETAIL','retailLoader');
add_shortcode('ZENPLANNER FREETRIAL','freeTrialLoader');
add_shortcode('ZENPLANNER PROFILE','profileLoader');
?>
