<?php
/*
 * array definition describing the main menu
 * for internal links, don't use extention for normal pages
 *
 */

return [

    'Home' => '/', // normal use where /index.phtml is home page
    #'Home' => '/home', // allows separate /home to be used as home page where /index.phtml is a one-off landing page, ie shiftingstates.info
    'Concept'                => "/concept",
    'Call for panels'        => "/cfpan",
    'Past conferences'       => '/past',

];