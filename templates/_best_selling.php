<!-- Best Selling -->

<?php
    shuffle($all_products);

    // REQUEST METHOD POST ON SUBMIT
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
        // addToCart()
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
?>
<section id="best-selling">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Best Selling</h4>
                <hr>
                <!-- Owl Carousel -->
                    <div class="owl-carousel owl-theme">
                    <?php
                    foreach($all_products as $item){ 
                        ?>
                            <div class="item py-2">
                                <div class="product font-raleway">
                                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>">
                                        <img src="<?php echo $item['item_image'] ?? './assets/products/1.png'?>" alt="" class="img-fluid">
                                        <div class="text-center">
                                            <h6><?php echo $item['item_name'] ?? 'No Name'?></h6>
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div class="price py-2">
                                                <span>
                                                    $<?php echo $item['item_price'] ?? '0.0'?>
                                                </span>
                                            </div>
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                                <input type="hidden" name="user_id" value="<?php echo '1';?>">
                                                <button type="submit" name="best_selling_submit" class="btn btn-warning font-size-12"> Add to Cart</button>
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                    }?>
                    </div>
                <!-- Owl Carousel End -->
            </div>
        </section>
        <!-- Best Selling End-->