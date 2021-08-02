<?php
// Header
    require 'header.php';

    // Main Site Start
        echo '<main id="main-site">';
    
        // Product 
        require ('templates/_products.php');
        // Best Selling
        require 'templates/_best_selling.php';
    
        echo '</main>';
    // Main Site End

// Footer
require 'footer.php';