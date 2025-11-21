<?php

function latest_events($posts_per_page)
{
    // Get today's date in Ymd format
    $today = date('Ymd');

    // Arguments for querying events
    $args = [
        'post_type' => 'event',
        'post_status' => 'publish',
        'posts_per_page' => -1, // Default to fetching all events
        'meta_key' => 'dates_start', // Replace with your actual ACF field name for start date
        'orderby' => [
            'meta_value_num' => 'ASC', // Sort by start date (ascending)
            'post_date' => 'DESC', // If dates are the same, sort by post date
        ],
        'meta_query' => [
            'relation' => 'OR',
            [
                // Event start date is greater than or equal to today
                'key' => 'dates_start',
                'value' => $today,
                'compare' => '>=',
                'type' => 'DATE',
            ],
            [
                // Event end date is greater than or equal to today
                'key' => 'dates_end',
                'value' => $today,
                'compare' => '>=',
                'type' => 'DATE',
            ],
        ],
    ];

    // If posts per page is provided and is a valid number, update the query
    if ($posts_per_page && intval($posts_per_page) != 0) {
        $args['posts_per_page'] = intval($posts_per_page);
    }

    // Return the posts using Timber
    return Timber::get_posts($args);
}
