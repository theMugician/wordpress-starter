# Wordpress Starter

This is based on a wordpress starter theme created by Greg Slonina  
See [Wordpress Starter Theme](https://github.com/theMugician/wordpress-starter)

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

### Color
You can find all the sass, css variables and css classes for color under `sass/abstracts/variables/_colors.scss`  
Create, edit and rename what you want to use

### Typography
You can find all the default typography styles under `sass/abstracts/variables/_typography.scss`  
All the main typogrophy element styles are under `sass/base/typography/.*`  
Edit what you want to use

### Global
A lot of the components use these classes so many components have consistency in spacing and design  

`.section`  
Adds padding for top and bottom  
See `sass/utilities/_section.scss`  
  
`.container`  
Adds a `max-width` to the main container of a component with a left and right padding or margin  
See `sass/utilities/_container.scss`

## Javascript
`assets/js/main.js` is your javascript folder  

## Color Palette
Add colors to `class-wordpress-starter.php Line 139`  
Make sure the slug of added colors matches what you have in `assets/sass/abstracts/variables/_colors.scss`  
See [Theme Support Block Color Palettes](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#block-color-palettes)