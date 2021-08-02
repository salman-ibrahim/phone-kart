<?php
// Header
require 'header.php';


// Main Site Start
echo '<main id="main-site">';

// Banner Area
require '/templates/_banner_area.php';
// Best Selling
require '/templates/_best_selling.php';
// Hot Products
require '/templates/_hot_products.php';
// Promotions
require '/templates/_promotions.php';
// New and Trending
require '/templates/_new_and_trending.php';
// Latest Blogs
require '/templates/_blogs.php';

echo '</main>';
// Main Site End

// Footer
require 'footer.php';
