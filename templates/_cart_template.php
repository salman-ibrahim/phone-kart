<!-- Shopping Cart Start -->
<section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                <!-- Cart Items Start -->
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                    <?php
                        foreach ($product->getData('cart') as $item):
                            $cartItem = $product->getProduct($item['item_id']);
                            $subTotal[] = array_map(function($item){
                    ?>
                        <!-- Single Cart Item Start-->
                        <div class="row border-top py-3 my-3">
                            <div class="col-md-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png";?>" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                                <small>by <?php echo $item['item_brand'] ?? "No Brand";?></small>
                                <!-- Product Rating Start-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-14 px-2">1512 Ratings</a>
                                </div>
                                <!-- Product Rating End-->

                                <!-- Product Quantity Start-->
                                <div class="qty d-flex py-2">
                                    <div class="d-flex font-raleway w-25">
                                        <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input type="number" name="quantity" class="qty-input px-2 w-100 bg-light border" value="1" placeholder="1" disabled>
                                        <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button type="submit" class="btn font-baloo text-danger px-3 border-end">Delete</button>
                                    <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                </div>
                                <!-- Product Quantity End-->
                            </div>

                            <div class="col-md-2 text-end">
                                <div class="font-baloo font-size-20 text-danger">
                                    $<span class="product-price"><?php echo $item['item_price'] ?? "0.0";?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Cart Item End-->
                    
                    <?php
                        return $item['item_price'];
                        }, $cartItem); // Closing Array Map
                        endforeach;

                        // Get Subtotal of cart
                        // print_r($subTotal);
                        $subTotalFinal = $cart->getSubTotal($subTotal)
                    ?>
                    </div>
                    <!-- Cart Subtotal Section Start -->
                    <div class="col-md-3 col-sm-12">
                        <div class="sub-total border mt-3">
                            <h6 class="font-raleway font-size-12 text-success py-3 <?php echo isset($subTotal)?($subTotalFinal >= 200? "" : "d-none"): "d-none";?> "><i class="fas fa-check"></i> Your Order is Eligible for Free Delivery.</h6>
                            <div class="border-top py-4 text-center">
                                <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal)?count($subTotal):0;?> Item):&nbsp;<span class="text-danger">$<span id="cart-price"><?php echo isset($subTotal)?$subTotalFinal: 0; ?></span></span></h5>
                                <button type="submit" class="btn btn-warning font-rubik mt-3"> Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Subtotal Section Start -->
                </div>
                <!-- Cart Items End -->
            </div>
        </section>
        <!-- Shopping Cart End -->