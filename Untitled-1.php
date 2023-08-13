<?php

/*

Plugin Name: makhtabkooneh

Plugin URI: https:// maktabkhooneh.org/

Description: یک پلاگین ساده برای دنبال کردن در شبکه‌های اجتماعی

Version: 1.0

Author: kamibahrami

Author URI: https:// maktabkhooneh.org/

License: GPL2

License URI: https://www.gnu.org/licenses/gpl-2.0.html

Text Domain: makhtabkhooneh

Domain Path:/languages

*/
function wpb_follow_us($content) {

// Only do this when a single post is displayed

if ( is_single() ) {

// Message you want to display after the post

// Add URLs to your own Twitter and Facebook profiles

$content.= '<p class="follow-us">ma ra donbal konid <a href="http://twitter.com/hassan2" title=" makhtabkhooneh on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/hassanaou1 " title=" makhtabkhooneh on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';

}

// Return the content

return $content;

}

// Hook our function to WordPress the_content filter

add_filter('the_content', 'wpb_follow_us');