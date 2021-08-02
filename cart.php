<?php
    // Header
    require 'header.php';

    
    // Main Site Start
        echo '<main id="main-site">';

        // Cart Items Template
        require 'templates/_cart_template.php';
        // New and Trending
        require 'templates/_new_and_trending.php';

        echo '</main>';
    // Main Site End

    // Footer
    require 'footer.php';