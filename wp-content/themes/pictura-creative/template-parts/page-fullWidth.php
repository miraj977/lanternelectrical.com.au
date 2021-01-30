<?php
if (have_rows('flexible_rows')):
    while (have_rows('flexible_rows')): the_row();

        if (get_row_layout() == 'faq') {
            $faq_layout = get_sub_field('choose_faq_style');
            echo get_template_part('template-parts/faq/layout', $faq_layout);
        } else if (get_row_layout() == 'content') {

        echo get_template_part('template-parts/content/content', 'layout');
    } else if (get_row_layout() == 'shortcode') {

    echo get_template_part('template-parts/shortcode/shortcode', 'layout');
} else if (get_row_layout() == 'grid_layout') {
    $equal = get_sub_field('equal_columns');
    if ($equal == 1) {
        echo get_template_part('template-parts/grid/grid', 'equal');
    } else {
        echo get_template_part('template-parts/grid/grid', 'normal');
    }
} else if (get_row_layout() == 'right_left_column') {
    $rightLeft = get_sub_field('choose_style');
    echo get_template_part('template-parts/rightLeft-columns/grid', $rightLeft);
} else if (get_row_layout() == 'call_to_action') {
    $cta_layout = get_sub_field('choose_style');
    echo get_template_part('template-parts/call-to-action/cta', $cta_layout);
} else if (get_row_layout() == 'contact_form') {
    echo get_template_part('template-parts/contactform/form');
} else if (get_row_layout() == 'testimonial') {
    $tesimonial = get_sub_field('choose_style');
    echo get_template_part('template-parts/testimonial/testimonial', $tesimonial);
} else if (get_row_layout() == 'client_logos') {
    $clientLogos = get_sub_field('choose_style');
    echo get_template_part('template-parts/clientLogos/clientLogos', $clientLogos);
} else if (get_row_layout() == 'title') {
    $title = get_sub_field('choose_style');
    echo '<' . $title . '>' . get_sub_field('title') . '</' . $title . '>';
} else if (get_row_layout() == 'blog_section') {
    $blogs = get_sub_field('blog_style');
    echo get_template_part('template-parts/blog/blog', $blogs);
} else if (get_row_layout() == 'privacy') {
    echo get_template_part('template-parts/privacy/policiy');
} else if (get_row_layout() == 'project_section') {
    $project = get_sub_field('project_style');
    echo get_template_part('template-parts/project/project', $project);
} else if (get_row_layout() == 'tips_section') {
    echo get_template_part('template-parts/tips/tricks');
} else if (get_row_layout() == 'latest_section') {
    echo get_template_part('template-parts/blog/latest');
} else if (get_row_layout() == 'background_image_with_text') {
    echo get_template_part('template-parts/background-image-with-text/bgimage', 'text');
} else if (get_row_layout() == 'text_grid_layout') {
    echo get_template_part('template-parts/grid-text/grid', 'text');
} else if (get_row_layout() == 'contact-section') {
    echo get_template_part('template-parts/contact-section/contact');
} else if (get_row_layout() == 'news_block') {
    echo get_template_part('template-parts/news-box/boxsection');
} else if (get_row_layout() == 'quote_section') {
    echo get_template_part('template-parts/quote/section', 'quote');
} else if (get_row_layout() == 'team_member') {
    echo get_template_part('template-parts/team/team', 'grid');
} else if (get_row_layout() == 'box_with_icon') {
    echo get_template_part('template-parts/box/box', 'grid');
} else if (get_row_layout() == 'page_info') {
    echo get_template_part('template-parts/page-info/section', 'pageInfo');
} else {

}
endwhile;
else:
endif;
