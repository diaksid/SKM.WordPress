<?php
/**
 * Template Name: Главная страница
*/

get_header();

// Основная информация
$main_logo = get_field("main_logo", 2);
$main_bg = get_field("main_bg", 2);
$main_title = get_field("main_title", 2);
$main_subttie = get_field("main_subttie", 2);
$main_address = get_field("main_address", 2);
$main_phone = get_field("main_phone", 2);
$main_email = get_field("main_email", 2);

// О компании
$company_section_title = get_field("company_section_title", 2);
$company_text = get_field("company_text", 2);
$company_img = get_field("company_img", 2);

// Направления деятельности
$activity_section_title = get_field("activity_section_title", 2);
$activity_subtitle = get_field("activity_subtitle", 2);
$activity_bg = get_field("activity_bg", 2);

// Портфолио
$portfolio_section_title = get_field("portfolio_section_title", 2);

// Наши партнеры
$partners_section_title = get_field("partners_section_title", 2);

// Контакты
$contacts_section_title = get_field("contacts_section_title", 2);
$contacts_map = get_field("contacts_map", 2);

// Допуски
$permission_section_title = get_field("permission_section_title", 2);

?>

<section class="section company" id="company">
    <div class="container">
        <div class="section-title"><?php echo $company_section_title ?></div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="company-text">
                    <?php echo $company_text ?>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?php echo $company_img ?>" class="company-img" alt="">
            </div>
        </div>
    </div>
</section>  

<section class="section activity" id="activity" style="margin: 100px 0; padding: 70px 0; background: url(<?php echo $activity_bg; ?>); background-size: cover; background-position: center;">
    <div class="container">
        <div class="section-title"><?php echo $activity_section_title ?></div>
        <div class="section-subtitle">
            <?php echo $activity_subtitle ?>
        </div>
        <div class="row">
            <?php
            $i = 1;
            if( have_rows('activity_list') ):
                while ( have_rows('activity_list') ) : the_row();
                    $activity_list_icon = get_sub_field('activity_list_icon');
                    $activity_list_title = get_sub_field('activity_list_title');
                    $activity_list_desc = get_sub_field('activity_list_desc');
                    $activity_list_popup = get_sub_field('activity_list_popup');
                    ?>
                    
                    <div class="modal fade" id="activityItem<?php echo $i ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <?php echo $activity_list_popup ?>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <a href="" data-toggle="modal" data-target="#activityItem<?php echo $i ?>" class="activity-item border-none">
                            <div class="activity-item__img">
                                <img src="<?php echo $activity_list_icon; ?>" alt="" class="">
                            </div>
                            <div class="activity-item__title"><?php echo $activity_list_title; ?></div>
                            <div class="activity-item__desc"><?php echo $activity_list_desc; ?></div>
                        </a>
                    </div>
                    
                <?php    
                $i++;
                endwhile;
            endif;    
            ?>
        </div>
    </div>
</section>

<section class="section permission" id="permission">
    <div class="container">
        <div class="section-title"><?php echo $permission_section_title ?></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider slider-permission">
                    <?php
                    if( have_rows('permission_list') ):
                        while ( have_rows('permission_list') ) : the_row();
                            $permission_list_img = get_sub_field('permission_list_img');
                            ?>
                            <div class="col-lg-3">
                                <div class="portfolio-item">
                                    <a style="display: block;" class="border-none" href="<?php echo $permission_list_img; ?>" data-fancybox>
                                        <img src="<?php echo $permission_list_img; ?>" alt="" class="permission-item__img">
                                    </a>
                                </div>
                            </div>
                        <?php    
                        endwhile;
                    endif;    
                    ?>
                    </div>
                </div>
                
        </div>
    </div>
</section>  

<section class="section portfolio" id="projects">
    <div class="container">
        <div class="section-title"><?php echo $portfolio_section_title ?></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="slider slider-projects">
                <?php
                if( have_rows('portfolio_list') ):
                    while ( have_rows('portfolio_list') ) : the_row();
                        $portfolio_list_img = get_sub_field('portfolio_list_img');
                        ?>
                        <div class="portfolio-item">
                            <a href="<?php echo $portfolio_list_img; ?>" data-fancybox>
                                <img src="<?php echo $portfolio_list_img; ?>" alt="" class="portfolio-item__img">
                            </a>
                        </div>
                    <?php    
                    endwhile;
                endif;    
                ?>
                </div>
            </div>
            
        </div>
    </div>
</section>  

<section class="section partners" id="partners">
    <div class="container">
        <div class="section-title"><?php echo $partners_section_title ?></div>
        <div class="row">
            <?php
            if( have_rows('partners_list') ):
                while ( have_rows('partners_list') ) : the_row();
                    $partners_list_img = get_sub_field('partners_list_img');
                    ?>
                    <div class="col-lg-6">
                        <div class="partners-item">
                            <img src="<?php echo $partners_list_img; ?>" alt="" class="partners-item__img">
                        </div>
                    </div>
                <?php    
                endwhile;
            endif;    
            ?>
        </div>
    </div>
</section>  

<section class="contacts" id="contacts">
    <div class="container">
        <div class="section-title"><?php echo $contacts_section_title ?></div>
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
    </div>
    <div id="map">
        <?php echo $contacts_map ?>
        <div class="contacts-block">
            <a href="/" class="border-none logo">
                <img src="<?php echo $main_logo ?>" alt="<?php bloginfo("name") ?>" class="logo-img">
                <span><?php echo $main_title ?></span>
            </a>
            <div class="contacts-item">
                <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $main_address ?>
            </div>
            <div class="contacts-item">
                <a href="tel:<?php echo $main_phone ?>" class="border-none contacts-item_link"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo $main_phone ?></a>
            </div>
            <div class="contacts-item">
                <a href="mailto:<?php echo $main_email ?>" class="border-none contacts-item_link"><i class="fa fa-envelope-open" aria-hidden="true"></i> <?php echo $main_email ?></a>
            </div>
        </div>
    </div>
    
    <div class="contacts-block_mobile">
         
            <div class="contacts-item">
                <i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $main_address ?>
            </div>
            <div class="contacts-item">
                <a href="tel:<?php echo $main_phone ?>" class="border-none contacts-item_link"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?php echo $main_phone ?></a>
            </div>
            <div class="contacts-item">
                <a href="mailto:<?php echo $main_email ?>" class="border-none contacts-item_link"><i class="fa fa-envelope-open" aria-hidden="true"></i> <?php echo $main_email ?></a>
            </div>
        </div>
    
</section>

<?php
get_sidebar();
get_footer();
