<?php
nomad::setPreferredPageExt('');
nomad::setPageStyles(['style-default','style-dark']); // default first
nomad::setTheme('cham2019'); // which theme (set of includes and assets (css/js/images)) to use

// todo change globals to nomad vars
$google_analytics   = 1; // Google analytics
$google_site_search = 1; // Google custom site search
$page_is_findable   = 1; // else 'no index, no follow'


date_default_timezone_set( 'Europe/London' );