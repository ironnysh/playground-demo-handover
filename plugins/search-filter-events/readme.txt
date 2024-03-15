=== Search Filter Events ===
Author:            Ronny Shani
Tags:              block
Tested up to:      6.2
Stable tag:        1.0.0

A search/filter feature based on an example block scaffolded with Create Block tool.

== Description ==

A custom block that creates a search/filter feature that site editors can add to any post or page on the site.

The block integrates the styles and scripts needed for displaying and using the feature, enqueues, and loads them (only) on relevant pages.

The styles are defined in two files:
1. `editor.scss`: Styles that get applied inside the editor. You can remove it by deleting the file and deleting/commenting out line 22 in `edit.js` (`import './editor.scss';`) and line 15 in `block.json` (`"editorStyle": "file:./index.css",`).
2. `style.scss`: Styles that get applied both on the front of your site and in the editor.

The filtering script is in `searchFilter.js`.

The form element that contains the search field is in `edit.js`. Since the site editors can use the block as-is, there are no editing options, and the same search field is duplicated in `save.js`.

See the _Development_ section below if you'd like to add functionality.

== Installation ==

1. Upload the unzipped plugin files to the `/wp-content/plugins/search-filter-events` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the _Plugins_ screen in WordPress.

== Usage ==

To use the block, click the + icon inside the editor and select the block named _Search Filter Events_.

You can see an example in the Tag: Program template.

== Development ==

If it's your first time working with blocks, it's recommended to read WordPress' [official guide](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/) in the Block Editor Handbook.

Otherwise, download this directory and see relevant commands in `package.json`.