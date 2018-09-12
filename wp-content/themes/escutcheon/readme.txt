=== Escutcheon ===
Contributors: automattic
Donate link:
Tags: responsive-layout, two-columns, left-sidebar, dark, blue, gray, custom-header, site-logo, custom-background, flexible-header, custom-menu, featured-images, infinite-scroll, rtl-language-support, translation-ready, clean, contemporary, minimal, modern, blog, journal
Tested up to: 4.1
Stable tag: 3.9
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==



== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does Escutcheon support widgets? =

Yes! You can add widgets to single posts or pages (not archives) under Appearance -> Widgets, and they will appear in the sidebar, beneath the header area.

= How do I add links to my favorite social networks? =

You can add links to a multitude of social services underneath your site title following these steps:

* Create a new Custom Menu, and assign it to the Social Links Menu location.
* Add links to each of your social services using the Links panel.
* Icons for your social links will automatically appear in the header.

= Does Escutcheon use featured images? =

Featured Images look best at 1080 pixels wide or larger, and are displayed below the post title on single posts only.

== How can I add a site logo? == 

Brand your site and make it yours by including your business' logo with Jetpack (jetpack.me) Site Logos. Install Jetpack (jetpack.me) and navigate to Customize -> Site Branding and upload a logo image in the space provided. The logo will appear next to your site title in the header; it can be any size, but will display at a maximum width and height of 200px.


= Quick Specs (all measurements in pixels) =

1. The main column width is 756.
2. The main sidebar width is 270.
3. Featured Images are displayed at 1080 with flexible height.
4. The site logo appears at a maximum width and height of 200.
5. The custom header appears at a maximum width of 1080; the height is flexible.

== Changelog ==

= 25 August 2017 =
* Fix incorrect text domain and update version number.
* Update version number in preparation for WP.org submission

= 22 August 2017 =
* Remove unnecessary left and right margins from figure elements in the Image widget.

= 30 June 2017 =
* Adding hover effects to social icons widget. Removing unnecessary spaces from CSS.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 2 February 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 13 June 2016 =
* Mention Jetpack in readme with regards to site logos in preparation for .org submission.

= 7 June 2016 =
* Add Headtstart annotations;

= 30 May 2016 =
* Update version number in prep for WP.org submission

= 12 May 2016 =
* Add new classic-menu tag.

= 25 February 2016 =
* Add blog-excerpts tag.

= 27 January 2016 =
* Update version number and readme
* Add bypostauthor and sticky classes for WP.org; convert to using tabs instead of spaces, detaching stylesheet from Sass

= 26 January 2016 =
* Update readme and style.css for submission to .org
* Make sure social menus plugin is supported before calling it to avoid fatal errors for users who don't have Jetpack.

= 20 January 2016 =
* Add theme description

= 19 January 2016 =
* Adjust menu toggle trigger width to match the rest of the theme
* Reduce breakpoint from 60em to 50em

= 15 January 2016 =
* Update Customizer JS to latest version from _s
* Fix broken link to Customizer JS
* Add correct default background color
* Spacing after edit links on mobile view
* More space between entry meta tags and categories; display on two lines on smaller screens
* Hover colors for main navigation weren't working on visited links; that's fixed now!
* Reduce margins/padding on single main navigation list items to reduce space when two or more levels of menus are present
* Adjust letter spacing and round font sizes to the nearest whole number
* Account for presence of social links menu without adding extra padding to the top of main navigation
* Add link hover to comment meta
* Spacing cleanup, replacing spaces with tabs in SCSS files
* Improvements to spacing in the header area; fix overlapping menu button when no social links are present; add readme.txt; use tabs instead of spacing in style-wpcom.css
* Remove unnecessary config file from SVN
* Account for portfolio titles on single portfolio items
* Adjust portfolio titles to match regular post titles in size and style
* Convert white spaces to tabs in functions.php
* Add bottom margin to featured images on small screens

= 11 January 2016 =
* Adjust navigation between single posts for small screens
* Improve display of search widget input
* Improvements to spacing after entry meta and widget areas
* Add screenshot.png
* Fix menu touch taps on tablets; add POT file
* Tweak to social links spacing and colors
* Make submenus in mobile more apparent
* More convenient display of social links when in mobile view; rearranged markup to accomodate more links, and positioned the menu button more exactly.
* Improvements to function of mobile toggle menu, hiding social links underneath
* Better styles for mobile comment form
* Mobile spacing reduced a bit; styling for mobile menu

= 22 December 2015 =
* Add menu toggle and begin styling social links for mobile
* Improve navigation styles on mobile
* Improve comment styles on mobile devices
* Begin styling comments for better mobile experience; add full HTML5 support for text inputs
* Remove unnecessary padding on infinite footer container

= 21 December 2015 =
* Add hover styles to entry meta
* Adjust entry footer margin bottom to be less drastic
* Comment form label cleanup for WP.com
* Give titles on blog index/archives more breathing room
* Better styling for 404 page
* Move comments area so it appears before the sidebar content
* Rework markup so sidebar comes after entry content and featured images; probably not ideal to have the sidebar in the article itself, but better than having to include it before.
* Style site logo
* Style custom header
* Add a more reasonably sized custom header size; add bottom margin to entry titles on single posts/pages
* Fixes for RTL styles, set correct $content_width

= 18 December 2015 =
* First pass at RTL styles

= 16 December 2015 =
* Ensure labels for form fields look better on WP.com
* Reduce space between social links; adjustments to WP.com comment form styles
* Add top and bottom margins to centered items
* Add top and bottom margins to right and left-aligned items

= 15 December 2015 =
* Work around entry title :after element overhang using calc
* Give social links a blue hover color rather than white
* Adjust main navigation to match most recent mockups; add padding to invidual links and more spacing between
* Attempt to fix overhanging hover styles on entry titles
* Adjust spacing on single posts/pages; fix letter-spacing after last letter for menu items
* Remove unnecessary border from comments area on pages
* Fix current menu item styles; add social link margins for small screens
* Ensure hovering over parent LI produces the same hover effect on the parent item
* Delete unused IE stylesheet; fix submenus so they're easier to target on hover
* Adjust position of sub-submenus
* Center submenus
* Ensure long URLs wrap/break in the content areas
* Remove unused slidepanel CSS
* Adjust link hover text decoration; remove slide panel call from navigation scss
* Adjust link hover color; delete unused CSS files
* Ensure entry title hover styles have the same transition speed
* Force Google Fonts to load over https
* Add transitions to widget links, too; give posts some breathing room
* Add some transitions to links
* Improvements to padding on main navigation submenus
* Playing with submenu navigation styles, still don't have them right; add transitions to main navigation and entry titles
* Style blockquotes
* Additional fix for social links menu so links float to the right; begin styling submenus in main navigation
* Fix for submenus, too much right padding on lis
* Ensure social links float to the far right
* More
* More adjustments to social links
* Begin adjusting styles for social links menu
* Begin adjusting submenu styles; swap out theme-specific social links menu for Jetpack Social Links
* Adjust button backrounds, add transitions
* Adjust border color for wpcom-specific colors
* Adjust border color
* Add bold font support for Oswald, adjust padding on form fields, messing with single post view

= 14 December 2015 =
* Add social links menu to header area
* Adjust border color for $themecolors
* Adjust display of date/time when using the F j Y format
* Adjust height of HRs to better match theme
* Adjust HR background colors
* Adjust PRE/INS background colors
* Make lists less indented
* Styling for page links, related posts headline
* Minor tweaks to comments/pingbacks/reply forms; attempts to fix floating sidebar issue that doesn't actually fix anything but doesn't break anything, either.
* Add WP.com-specific styles

= 10 December 2015 =
* Continue styling comments area
* Set up Sass config; begin working with comments styles
* Allow theme to display a fallback navigation menu
* Initial commit to /pub
