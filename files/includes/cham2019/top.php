<?php
$sitepath    = nomad::sitePath();
$theme       = nomad::theme();

?>
<script>
jQuery(document).ready(function() {
    return;
    jQuery(document).euCookieLawPopup().init({
        cookiePolicyUrl : '<?=nomad::menuLink('/privacy-policy')?>',
        popupPosition : 'bottom',
        colorStyle : 'default',
        compactStyle : false,
        popupTitle : '',
        popupText : 'This site uses cookies. For more information about cookies and how we handle user data please consult our privacy policy.',
        buttonContinueTitle : 'Continue',
        buttonLearnmoreTitle : 'Find&nbsp;out&nbsp;more.',
        buttonLearnmoreOpenInNewWindow : false,
        agreementExpiresInDays : 3000,
        autoAcceptCookiePolicy : false,
        htmlMarkup : null
    });
});
</script>
<nav class="navbar navbar-fixed ">
    <a class="sr-only sr-only-focusable" href="#main">
        skip to content
    </a>
    <div>
        <div class="clearfix">
            <div id="navbar">
                <? include nomad::includesDir().'/tool-menu.php' ?>
            </div>
        </div>
        <div id="search-panel" class="collapse">
            <a href="#" data-toggle="collapse"
               data-target="#search-panel" aria-haspopup="true" aria-expanded="true">
                <span class="glyphicon glyphicon-remove"></span>
            </a>
            <?php if ( $google_site_search ): ?>
                <!-- Google custom site Search -->
                <div class="gcse-search"></div>
            <?php else: ?>
                (Google site search is disabled on this page)
            <?php endif ?>
        </div>
    </div>
</nav>

<div id="cham2019">
    <img id="cham2019logo3" src="<?=$sitepath?>/assets/<?=$theme?>/images/cham2019_transp.png"></div>


<div id="header" class="">
    <div id="header-logoandtext" class="">
        <div id="header-right">
            <a class="bg-cham" href="http://cham.fcsh.unl.pt/" title="CHAM" target="_blank">
                <img alt="CHAM" src="<?=$sitepath?>/assets/<?=$theme?>/images/chamlogo2019_new.png">
            </a>
            <a class="bg-green" href="http://fcsh.unl.pt/" title="Faculdade de Ciências Sociais e Humanas (FCSH)" target="_blank">
                <img alt="Faculdade de Ciências Sociais e Humanas (FCSH)" src="<?=$sitepath?>/assets/<?=$theme?>/images/fcsh.png">
            </a>

            <a class="bg-white" href="http://www.fct.pt/" title="A Fundação para a Ciência e a Tecnologia">
                <img alt="A Fundação para a Ciência e a Tecnologia" src="<?=$sitepath?>/assets/<?=$theme?>/images/fct.png">
            </a>
            <a class="bg-unesco" href="http://en.unesco.org/" title="Unesco">
                <img alt="Unesco" src="<?=$sitepath?>/assets/<?=$theme?>/images/unesco1.png">
            </a>
        </div>

        <div id="cham2019text" class="">
            <h1 class="">
                <!--<span class="--no-wrap">Innovation,<br />Invention<br />and Memory<br />in Africa</span>-->
                Innovation, Invention and Memory in Africa
            </h1>
            <h2>IV CHAM INTERNATIONAL CONFERENCE FCSH/Universidade NOVA de Lisboa</h2>
        </div>
    </div>
</div>

<div id="nav" class="no-js">
    <?=nomad::getMainMenuHtml() ?>
</div>

<div id="middle-and-footer">
    <div id="middle" class="middle container no-js">

