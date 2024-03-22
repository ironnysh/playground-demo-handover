# WordPress Assets

## Description

Show how to use WordPress Playground for interactive project handovers.

In this demo, we create a post that explains the client how to use a custom plugin.

### Themes

The [`themes`](themes) directory includes a customized copy of [Blue Note](https://wordpress.org/themes/blue-note/), a community theme developed by WordPress contributors.

### Plugins

The [`plugins`](plugins) directory includes a custom plugin used in the website:

2. **Meta Block Sidebar** (see [`meta-block-sidebar`](plugins/meta-block-sidebar/readme.txt)): A custom block-based plugin that adds two custom meta fields (`team` and `joined`) specifying the person's team name and the date (Month, Year) they joined the company, and displays them in the frontend. See the _Description_ for more information.

The website also includes the community plugin [Create Block Theme](https://wordpress.org/plugins/create-block-theme/).

## Playground

We use [WordPress Playground](https://wordpress.github.io/wordpress-playground/) to run an in-browser instance of WordPress with the adapted **Blue Note** theme and the plugin **already installed and activated**:

- Click [here to open the live demo we prepared](https://playground-demo-handover.vercel.app/playground/).

OR

- Click [here to see the official Plyground demo](https://playground.wordpress.net/).

**Note:** The files that power the demo [are here](playground). You can change the behavior by editing the `blueprint` section in [`index.html`](playground/index.html#L44-L107).
