<div class="page_nav bg-white d-inline-block">
    <span><?PHP echo $language['LOCATION PATH_YOU_ARE_HERE'];?></span> <a class="d-inline-block color-black" href="index.html"><?PHP echo $language['LOCATION PATH_HOME'];?></a> <span
    class="color-summer-sky"><i class="ti ti-angle-double-right"></i>

    <?php
switch ((string)getPage()){
    case '404.php';
    ?>
        <title><?php echo $language['TITLE_ONE'];?></title>
        <?php
        break;
    case 'contact-split.php';
    ?>
        <title><?php echo $language['TITLE_TWO'];?></title>
        <?php
        break;
    case 'faq.php';
    ?>
       <title><?php echo $language['TITLE_THREE'];?></title>
        <?php
        break;
    case 'pricing-creative.php';
    ?>
       <title><?php echo $language['TITLE_FOUR'];?></title>
        <?php
        break;
    case 'shop-cart.php';
    ?>
        <title><?php echo $language['TITLE_FIVE'];?></title>
        <?php
        break;
    case 'shop-detail.php';
        ?>
       <title><?php echo $language['TITLE_SIX'];?></title>
        <?php
        break;
    case 'team-classic-half.php';
    ?>
       <title><?php echo $language['TITLE_SEVEN'];?></title>
     <?php
}
    ?>
    </span>
</div>

