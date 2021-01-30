<?php
add_shortcode('hero-slider-fullScreen', 'shortcode_hero_slider');
function shortcode_hero_slider()
{
    ob_start();
    $nav = get_field('navigation', 'option');
    $class = '';
    if ($nav == 1) {
        $class .= 'navTrue ';
    } else {
        $class .= 'navFalse ';
    }
    $pagi = get_field('pagination', 'option');
    if ($pagi == 1) {
        $class .= 'pageTrue ';
    } else {
        $class .= 'pageFalse ';
    }
    $scroll = get_field('scroll_bottom_icon', 'option');
    $query = new WP_Query(array(
        'post_type' => 'hero',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>
<div class="flexslider heroFullScreen <?php echo $class; ?> ">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="hero-box" data-aos="fade">
                                <?php the_content();?>
                            </div>
                            <div class="hero-btn">
                                <?php
    $link = get_field('hero_link');
            if (get_sub_field('button_size')) {
                $btnSize = 'btn-' . get_sub_field('button_size');
            } else {
                $btnSize = 'btn-small';
            }

            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                                <div class="hero-link">
                                    <!-- <a class="btn btn-<?php //echo get_field('hero_link_style') . ' ' . $btnSize; ?>"
										                                        href="<?php //echo $link_url; ?>" target="<?php //echo $link_target; ?>">
										                                        <?php //echo $link_title; ?> </a> -->

                                    <div class="icon-text">
                                        <div class="hero-icon">
                                            <img src="<?php echo site_url() ?>/wp-content/uploads/2020/09/ICON-Emergencies.svg"
                                                width="100%" class="img-fluid" style="max-height:80px;max-width:80px;">
                                        </div>
                                        <div class="hero-icon-text">
                                            <span class="icontext">Emergencies</span>
                                        </div>
                                    </div>
                                    <div class="icon-text">
                                        <div class="hero-icon">
                                            <img src="<?php echo site_url() ?>/wp-content/uploads/2020/09/ICON-Security.svg"
                                                width="100%" class="img-fluid" style="max-height:80px;max-width:80px;">
                                        </div>
                                        <div class="hero-icon-text">
                                            <span class="icontext">Security</span>
                                        </div>
                                    </div>
                                    <div class="icon-text">
                                        <div class="hero-icon">
                                            <img src="<?php echo site_url() ?>/wp-content/uploads/2020/09/ICON-Commercial.svg"
                                                width="100%" class="img-fluid" style="max-height:80px;max-width:80px;">
                                        </div>
                                        <div class="hero-icon-text">
                                            <span class="icontext">Commercial</span>
                                        </div>
                                    </div>
                                    <div class="icon-text">
                                        <div class="hero-icon">
                                            <img src="<?php echo site_url() ?>/wp-content/uploads/2020/09/ICON-Industrial.svg"
                                                width="100%" class="img-fluid" style="max-height:80px;max-width:80px;">
                                        </div>
                                        <div class="hero-icon-text">
                                            <span class="icontext">Industrial</span>
                                        </div>
                                    </div>
                                    <div class="icon-text">
                                        <div class="hero-icon">
                                            <img src="<?php echo site_url() ?>/wp-content/uploads/2020/09/ICON-Automation.svg"
                                                width="100%" class="img-fluid" style="max-height:80px;max-width:80px;">
                                        </div>
                                        <div class="hero-icon-text">
                                            <span class="icontext">Automation</span>
                                        </div>
                                    </div>
                                </div>
                                <?php ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--             <div class="downArrow"></div> -->
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>
    <?php if ($scroll == 1) {?>
    <div id="scrollBottom">
        <a href="#content">scroll down</a>
    </div>
    <?php }?>
</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('testimonial-slider', 'shortcode_testimonial_slider');
function shortcode_testimonial_slider()
{
    ob_start();

    $query = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>
<div class="flexslider testimonialSlider ">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="testimonial-content">
                <?php $content = get_the_content();
            $content = strip_tags($content)?>
                <h5 class="demiBold"><?php echo $content ?></h5>
                <p class="bold"><?php the_title();?></p>
                <?php //echo get_field("client_name")?>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>

</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('blog-slider', 'shortcode_blog_slider');
function shortcode_blog_slider($atts = array(), $content = null)
{
    ob_start();

    extract(shortcode_atts(array(
        'style' => 'style1',
    ), $atts));

    $query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {

        ?>
<div class="flexslider blogSlider">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="blog-grid">
                <div class="blog-img">
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {?>
                    <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" alt="placeholder"
                        title="placeholder" />
                    <?php }?>
                </div>
                <div class="blog-content">
                    <h4><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                    <?php
    $content = get_the_content();
            $content = strip_tags($content);
            echo substr($content, 0, 120) . "...";
            $read_link_style = get_sub_field("read_more_style", $page_id);
            if (get_sub_field('button_size')) {
                $btnSize = 'btn-' . get_sub_field('button_size');
            } else {
                $btnSize = 'btn-small';
            }
            ?>

                    <div class="content-link"><a class="btn btn-<?php echo $read_link_style . ' ' . $btnSize; ?>"
                            href="<?php echo get_permalink(); ?>">Read more </a></div>
                </div>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>
</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('project-slider', 'shortcode_project_slider');
function shortcode_project_slider($atts = array(), $content = null)
{
    ob_start();

    extract(shortcode_atts(array(
        'style' => 'style1',
    ), $atts));

    $query = new WP_Query(array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    if ($query->have_posts()) {
        ?>
<div class="flexslider projectSlider">
    <ul class="slides">
        <?php while ($query->have_posts()): $query->the_post();?>
        <li>
            <div class="project-grid">
                <div class="project-img">
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {?>
                    <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" alt="placeholder"
                        title="placeholder" />
                    <?php }?>
                </div>
                <div class="project-content">
                    <h4><?php the_title();?></h4>
                    <?php
    $content = get_the_content();
            $content = strip_tags($content);
            echo substr($content, 0, 120) . "...";
            if (get_sub_field('button_size')) {
                $btnSize = 'btn-' . get_sub_field('button_size');
            } else {
                $btnSize = 'btn-small';
            }
            $read_link_style = get_sub_field("read_more_style", $page_id);?>

                    <div class="content-link"><a class="btn btn-<?php echo $read_link_style . ' ' . $btnSize; ?>"
                            href="<?php echo get_permalink(); ?>">Read more </a></div>
                </div>
            </div>
        </li>
        <?php
endwhile;
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </ul>
</div>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode('all-services', 'shortcode_service');
function shortcode_service()
{
    ?>
<section class="services grid-normal">
    <div class="container">
        <div class="row">
            <?php
$query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
    ));
    while ($query->have_posts()): $query->the_post();?>
            <div class="col-sm-6 col-xs-12 col-md-4 " data-aos="fade-up">
                <div class="service-grid animate" animate-sequence="">
                    <!-- IMAGE -->
                    <div class="grid-img">
                        <?php the_post_thumbnail();?>
                    </div>

                    <!-- title -->
                    <div class="service-content text-left">

                        <h4 class="grid-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                        <div class="gridText "><?php $content = get_the_content();
        $content = strip_tags($content);
        echo substr($content, 0, 80);?></div>

                        <div class="content-link">
                            <a class="btn-style1" href="<?php echo get_the_permalink(); ?>">
                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile;
    wp_reset_postdata();
    wp_reset_query();?>
        </div>
    </div>
</section>
<?php
$myvariable = ob_get_clean();
    return $myvariable;
}

add_shortcode('related-services', 'shortcode_related_service');
function shortcode_related_service()
{
    global $post;
    ?>
<section class="services grid-normal">

    <div class="container">
        <div class="row">
            <?php
$query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
        'post__not_in' => array($post->ID),
    ));
    while ($query->have_posts()): $query->the_post();?>
            <div data-aos="fade-up" class="col-sm-12 col-md-4 ">
                <div class="service-grid">
                    <!-- IMAGE -->
                    <div class="grid-img">
                        <?php the_post_thumbnail();?>
                    </div>

                    <!-- title -->
                    <div class="service-content text-left">

                        <h4 class="grid-title"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
                        <div class="gridText"><?php $content = get_the_content();
        $content = strip_tags($content);
        echo substr($content, 0, 80);?></div>

                        <div class="content-link">
                            <a class="btn-style1" href="<?php echo get_the_permalink(); ?>">
                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile;
    wp_reset_postdata();
    wp_reset_query();?>
        </div>
    </div>
</section>
<?php
$myvariable = ob_get_clean();
    return $myvariable;
}
