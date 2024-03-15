<?php
/**
 * Plugin Name:       Search Filter Events
 * Description:       A search/filter feature based on an example block scaffolded with Create Block tool.
 * Requires at least: 6.2
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Ronny Shani
 * Text Domain:       search-filter-events
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function search_filter_events_search_filter_events_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'search_filter_events_search_filter_events_block_init' );
