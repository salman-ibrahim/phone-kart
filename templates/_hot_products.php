<!-- Hot Products -->
<?php
    $brands = array();
    foreach($all_products as $item){
        $brands[] = $item['item_brand'];
    }
    shuffle($all_products);
    $brands = array_unique($brands);
    sort($brands);

    // REQUEST METHOD POST ON SUBMIT
    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
        // addToCart()
        if(isset($_POST['hot_product_submit'])){
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<section id="hot-products">
            <div class="container">
                <h4 class="font-rubik font-size-20">Hot Products</h4>
                <div id="filters" class="button-group text-end">
                    <button class="btn is-checked" data-filter="*">All Brands</button>
                    <?php foreach($brands as $brand){?>
                    <button class="btn" data-filter=".<?php echo $brand?>"><?php echo $brand?></button>
                    <?php }?>
                </div>
                <div class="grid">
                <?php foreach($all_products as $item){?>
                    <div class="grid-item <?php echo " ".$item['item_brand']." "?> border">
                        <div class="item py-2" style="width: 200px;">
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
                                                <button type="submit" name="hot_product_submit" class="btn btn-warning font-size-12"> Add to Cart</button>
                                        </form>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- Hot Products End -->