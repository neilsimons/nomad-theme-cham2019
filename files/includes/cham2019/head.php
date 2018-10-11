<?php
$sitepath    = nomad::sitePath();
$theme       = nomad::theme();
$pagestyle   = nomad::getPageStyle();

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<? if ( ! $page_is_findable ): ?>
    <meta name="robots" content="nofollow"/>
    <meta name="robots" content="noindex"/>
<? endif ?>

<!-- icons -->
<link rel="icon" href="<?=nomad::resourcePath("/favicon.ico")?>"/>
<link rel="apple-touch-icon" href="<?=nomad::resourcePath("/assets/$theme/images/nomad-icon-114.png")?>"/>
<link rel="apple-touch-icon" href="<?=nomad::resourcePath("/assets/$theme/images/nomad-icon-72.png")?>" sizes="72x72" />
<link rel="apple-touch-icon" href="<?=nomad::resourcePath("/assets/$theme/images/nomad-icon-114.png")?>" sizes="114x114" />

<!-- css -->
<link href="<?=nomad::resourcePath("/assets/shared01/css/strap.css", true)?>" rel="stylesheet" type="text/css" title="css"/>
<link href="<?=nomad::resourcePath("/assets/$theme/css/site_v1.css", true)?>" rel="stylesheet" type="text/css" title="css"/>
<link href="<?=nomad::resourcePath("/assets/$theme/css/all.css", true)?>" rel="stylesheet" type="text/css" title="css"/>
<link href="<?=nomad::resourcePath("/assets/$theme/css/fixups.css", true)?>" rel="stylesheet" type="text/css" title="css"/>
<link href="<?=nomad::resourcePath("/assets/$theme/css/$pagestyle.css", true)?>" rel="stylesheet" type="text/css" title="css"/>

<!-- css extras : fonts etc -->
<link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet"><!--Google font added by Eli -->

<!-- javascript -->
<? if ( $google_analytics ): ?>
    <!-- google analytics using ga.js -->
    <script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/ga.js", true)?>"></script>
<? endif ?>
<script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/jquery-3.1.1.min.js") ?>"></script>
<script type="text/javascript"> jQuery.noConflict() </script>
<? if ( $google_site_search ): // add the site search and other external js?>
    <script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/gcs.js", true)?>"></script>
    <!--[if lt IE 9]>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<? endif ?>
<script src="<?=nomad::resourcePath("/assets/$theme/js/but-col-drop-tab-tran.js", true)?>"></script>
<?=nomad::getPageStylesJavascript() ?>
<script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/site-functions.js", true)?>"></script>
<script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/style-changer.js", true)?>"></script>
<script type="text/javascript" src="<?=nomad::resourcePath("/assets/$theme/js/jquery-eu-cookie-law-popup.js", true)?>"></script>
<script> // jQuery(document).ready(function($){try{top.setPageLoaded(window,'<?=nomad::pagePath()?>');}catch(e){ }}); // to do - frameset based previous site comparison tool </script>


