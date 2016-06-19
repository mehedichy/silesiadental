<?php
/*
Plugin Name: Better Archives
Version: 1.0
Plugin URI: http://saddamazad.com/2010/10/better-archives-for-wordpress/
Description: A simple, clean, and future-proof way to present your archives.
Author: Saddam Azad
Author URI: http://saddamazad.com

+ 	Based on Justin Blanton's Smart Archives for WordPress:
+ 	http://justinblanton.com/projects/smartarchives
*/
 
// generate archives
function wp_better_archives() {
 
    global $wpdb, $PHP_SELF;
    setlocale(LC_ALL,WPLANG); // set localization language; please see instructions
    $now = gmdate("Y-m-d H:i:s",(time()+(( get_option('gmt_offset') )*3600)));  // get the current GMT date
    $bogusDate = "/01/2001"; // used for the strtotime() function below   
 
    $catID='';
 
    $yearsWithPosts = $wpdb->get_results("
        SELECT distinct year(post_date) AS `year`, count(ID) as posts
        FROM $wpdb->posts
        WHERE post_type = 'post'
        AND post_status = 'publish'
        GROUP BY year(post_date)
        ORDER BY post_date DESC");
 
    foreach ($yearsWithPosts as $currentYear) {
 
        for ($currentMonth = 1; $currentMonth <= 12; $currentMonth++) {
 
            $monthsWithPosts[$currentYear->year][$currentMonth] = $wpdb->get_results("
            SELECT ID, post_title, post_date FROM $wpdb->posts
            WHERE post_type = 'post'
            AND post_status = 'publish'
            AND year(post_date) = '$currentYear->year'
            AND month(post_date) = '$currentMonth'
            ORDER BY post_date DESC");
        }
    }
 
    for($currentMonth = 1; $currentMonth <= 12; $currentMonth++) $shortMonths[$currentMonth] = ucfirst(strftime("%B", strtotime("$currentMonth"."$bogusDate")));
 
    if ($yearsWithPosts) {

        $archives = '';
        $archives .= '<div class="better-archives">';
 
        foreach ($yearsWithPosts as $currentYear) {
 
            $archives .= '<h2 class="year">'.$currentYear->year.'</h2> ';
 
            $archives .= '<div class="months">';
            for ($currentMonth = 1; $currentMonth <= 12; $currentMonth++) {
 
                if ($monthsWithPosts[$currentYear->year][$currentMonth]) {
                    $archives .= '<div class="month">';
                    $archives .= '<h3>'.$shortMonths[$currentMonth].'</h3> ';
 
                    $archives .= '<ul>';
 
                    foreach ($monthsWithPosts[$currentYear->year][$currentMonth] as $post) {

                        if ($post->post_date <= $now) {
                            //$cats = wp_get_post_categories($post->ID);
                            $found = false;
 
                            //foreach ($cats as $cat) if (in_array($cat, $catIDs)) $found = true;
 
                            if (!$found) $archives .= '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
                        }
                    }
                    $archives .= '</ul>';
                    $archives .= '</div>';
                } // end if
 
            } // end for
            $archives .= '</div>';
 
        } // foreach $yearsWithPosts as $currentYear
        
        $archives .= '</div>';
    } // if $yearsWithPosts
 
    echo $archives;
}?>