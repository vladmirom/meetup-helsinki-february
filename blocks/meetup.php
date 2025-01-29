<?php
/**
 * The template for displaying the Meetup block.
 *
 */

 $title = get_field('block_meetup_title');
 $image = get_field('block_meetup_image');
 $tootlip = get_field('block_meetup_tooltip');

 $o = '<div class="meetup__wrapper">';
    $o .= '<div class="meetup__content">';
        if ($image) {
            $o .= '<img class="meetup__content-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
        }

        $o .= '<div class="meetup__content-text">';
            $o .= $title ? '<h4 class="meetup__content-text-title">' . $title . '</h4>' : '';
            $o .= '<div class="meetup__content-text-subtitle">';

                $o .= '<p>' . __( 'Public group', 'twentytwentyfive' ) . '</p>';

                if ($tootlip) {
                    $o .= '<span class="meetup__content-text-tooltip-icon"></span>';
                    $o .= '<p class="meetup__content-text-tooltip">' . $tootlip . '</p>';
                }

            $o .= '</div>';
        $o .= '</div>';

    $o .= '</div>';
 $o .= '</div>';

 echo $o;

 ?>
