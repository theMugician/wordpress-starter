# Wordpress Starter

This is a wordpress starter theme  
Created by Greg Slonina

## Get started

### Search and replace these keywords and variables
Package name : `@package Wordpress_Starter`  
Class : `Wordpress_Starter`  
Constant : `WORDPRESS_STARTER`  
Text domain : `wordpress-starter`

### Change this filename
File to change : `class-wordpress-starter.php`  
It should match your class name with dashes and lowercase letters  
If your class name is `New_Name` the file should be `class-new-name.php`

## CSS
Run `npm run sass-watch` in the terminal  
Compiles `assets/sass` folder to `assets/css/main`  
This is your main css folder  

## Javascript
`assets/js/main.js` is your javascript folder  

## Color Palette
Add colors to `class-wordpress-starter.php Line 139`  
Make sure added colors match what you have in `assets/sass/abstracts/variables/_colors.scss`  
See [Theme Support Block Color Palettes](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#block-color-palettes)