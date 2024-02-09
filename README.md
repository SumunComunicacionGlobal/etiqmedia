[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

etiqmedia
===

Hi. I'm a starter theme called `etiqmedia`. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

The ultra-minimal SCSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* Smartly organized starter SASS in `sass/style.scss` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/smn_woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Installation
---------------

### Requirements

`etiqmedia` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/) Just for Hybrid Themes

### Setup

To start using all the tools that come with `etiqmedia`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ npm install
```

### Available CLI commands

`etiqmedia` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:js` : compiles JS files to min.js.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
- `npm run sync` : Browser syncs listen all files. Maybe you have to change the port. By default: `localhost:8888/etiqmedia/`.
- `npm run dev` : Run watch and sync to develop your awesome theme.


### Theme.json

Remember that `etiqmedia` is a starter theme for WordPress versions higher than 6.0 and it comes with the `theme.json` file incorporated to configure, style, and many more options. Refer to: [Global Settings & Styles (theme.json)](https://developer.wordpress.org/block-editor/how-to-guides/themes/global-settings-and-styles/).

Follow these simple steps to start configuring your theme editor and its correspondences on the frontend.

#### Settings

1. Configure the color palettes, it's better if you only change the hexadecimal values, in case you need more colors follow the nomenclature, `primary-20` or `secondary-90` for example.
2. Customize the `border-radius`, `box-shadow`, `layout`, and whatever you consider necessary.
3. Incorporate the fonts into the `./assets/fonts/` folder and declare with @fontface the different weights and different typographic families. You can also adjust the `fontSize`, `fontFamily`.
4. You can change all aspects you consider necessary, but in general, adjusting the hexadecimal values and the typographic families would have everything ready!

#### Styles

You can change the general styles of the theme thanks to previously defined values and variables. You can change the variables to adjust the `color-background`, `color-text`, `fontFamily`, and `fontSize` for the body text and many other parameters.


Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
