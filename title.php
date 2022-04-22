<?php
    switch ((string)getPage()){
           case '404.php':
?>
<title><?php echo  $language ['TITLE_ONE'];?> </title>
<?php
           break;
           case 'comingsoon-split.php':
?>
<title><?php echo $language['TITLE_TWO'];?> </title>
<?php
           break;
           case 'contact-split.php':
?>
<title><?php echo $language['TITLE_THREE'];?> </title>
<?php
           break;
           case 'faq.php':
?>
<title><?php echo $language['TITLE_FOUR'];?> </title>
<?php
           break;
           case 'forget-password.php':
?>
<title><?php echo $language['TITLE_FIVE'];?> </title>
<?php
           break;
           case 'login.php':
?>
<title><?php echo $language['TITLE_SIX'];?> </title>
<?php
           break;
           case 'pricing-creative.php':
?>
<title><?php echo $language['TITLE_SEVEN'];?> </title>
<?php
           break;
           case 'shop-cart.php':
           case 'shop-detail.php':
?>
<title><?PHP echo $language['TITLE_EIGHT'];?></title>
<?php
           break;
           case  'register.php':
?>
<title><?php echo $language['TITLE_NINE'];?> </title>
<?php
           break;
           case 'team-classic-half.php':
?>
<title><?PHP echo $language['TITLE_TEN'];?></title>
<?php
           break;
           case  'index.php':
?>
<title><?php echo $language['TITLE_ELEVEN'];?> </title>
<?php

    }


