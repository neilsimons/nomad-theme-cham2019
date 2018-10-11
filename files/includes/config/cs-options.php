<?php

// when this file is included from sibling directory branches, certain vars arent derived properly (as expected), so set manually
nomad::setSitePath('/cham/shared_theme_cham2019');

// force a prefix for all menu links back to main site
nomad::setMenuLinkPrefixOverride('https://www.chamconference.org/2019');


nomad::setPreferredPageExt(''); // emptystring = no ext, eg when we utilise rewrite of /path  -> /path.phtml
nomad::setPageStyles(['style-default','style-dark']); // default first
nomad::setTheme('cham2019'); // which set of php includes and associated resources (css/js/images) to load

// todo change globals to nomad vars
$google_analytics   = 0; // Google analytics
$google_site_search = 0; // Google custom site search
$page_is_findable   = 0; // else 'no index, no follow'

