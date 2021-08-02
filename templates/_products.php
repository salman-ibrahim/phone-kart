        <!-- Product -->
        <?php
            $item_id = $_GET['item_id'] ?? '1';
            foreach($product->getData() as $item) :
                if($item['item_id'] === $item_id) :
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="<?php echo $item['item_image'] ?? './assets/products/1.png'?>" alt="product image" class="img-fluid">
                        <div class="row form-row py-3 font-baloo font-size-16">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Buy Now</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 py-4">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'No Name'?></h5>
                        <small>by <?php echo $item['item_brand'] ?? 'No Brand'?></small>
                        <div class="d-flex row">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="font-rubik font-size-14 px-2">1512 Ratings | 6512 Answered Questions</a>
                        </div>
                        <hr class="m-0">

                        <!-- Product Pricing Start -->
                        <table class="my-3">
                            <tr class="font-raleway font-size-14">
                                <td>M.R.P.</td>
                                <td><strike>$<?php echo $item['item_price']+10 ?? '0.0'?></strike></td>
                            </tr>

                            <tr class="font-raleway font-size-14">
                                <td>Discounted Price</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? '0.0'?></span>&nbsp; <small class="text-dark font-size-12">incl.taxes</small></td>
                            </tr>

                            <tr class="font-raleway font-size-16">
                                <td>You Save</td>
                                <td class="text-danger">$<?php echo isset($item['item_price'])? "10": "0.0";?></td>
                            </tr>
                        </table>
                        <!-- Product Pricing End -->

                        <!-- Policies Start -->
                        <div id="policies">
                            <div class="d-flex">
                                <div class="return text-center mx-4">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">7 Days Replacement</a>
                                </div>
                                <div class="return text-center mx-4">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">Express Delivery</a>
                                </div>
                                <div class="return text-center mx-4">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">1 Year Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- Policies End -->
                        <hr>

                        <!-- Product Specifications  Start -->
                        <div id="specifications" class="font-raleway d-flex flex-column text-dark">
                            <small>Delivers in: 7 Days</small>
                            <small>Sold by: <a href="#"><?php echo $item['item_brand'] ?? 'No Brand'?></a> (4.5 out of 5 | 18192 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i> &nbsp; Delivers to Customer - 63100 </small>
                        </div>
                        <!-- Product Specifications  End -->

                        <!-- Product Add Ons Start -->
                        <div class="row">
                            <div class="col-6">
                                <!-- Color Choice start -->
                                <div id="color" class="mt-5">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color: </h6>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-secondary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- Color choice end -->
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex mt-5">
                                    <h6 class="font-baloo">Qty: </h6>
                                    <div class="px-4 d-flex button font-raleway">
                                        <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input type="number" name="quantity" class="qty-input px-2 w-50 bg-light border" value="1" placeholder="1" disabled>
                                        <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Add Ons End -->

                        <!-- Phone Memory Choice Start -->
                        <div class="memory mt-4">
                            <h6 class="font-baloo">Memory: </h6>
                            <div class="d-flex justigy-content-between w-75">
                                <div class="font-rubik border p-2 mx-2">
                                    <button class="btn p-0 font-size-14"> 4 GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2 mx-2">
                                    <button class="btn p-0 font-size-14"> 6 GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2 mx-2">
                                    <button class="btn p-0 font-size-14"> 8 GB RAM</button>
                                </div>
                            </div>  
                        </div>
                        <!-- Phone Memory Choice End -->

                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik"> Product Description</h6>
                        <hr>
                        <p class="font-raleway font-size-14">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sequi ullam velit nihil officiis, minima excepturi quaerat consequatur nesciunt facilis maiores id explicabo dolorum! A molestiae dolorem atque. Aliquam, iste. Porro laboriosam sequi eligendi dolores minima quidem numquam atque! Eius, voluptatibus quas totam sint nisi deleniti, saepe asperiores officia inventore tempore dolor, nulla incidunt adipisci sit rem natus dicta aliquid odio numquam maiores. Ratione sapiente esse maxime consectetur iure nemo vitae nostrum omnis assumenda, explicabo tenetur obcaecati! Inventore itaque, maxime eius quaerat ea molestias in iste! Delectus excepturi, sit ipsum repellendus voluptates aspernatur, ut quod corrupti neque adipisci labore soluta.
                        </p>
                        <p class="font-raleway font-size-14">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sequi ullam velit nihil officiis, minima excepturi quaerat consequatur nesciunt facilis maiores id explicabo dolorum! A molestiae dolorem atque. Aliquam, iste. Porro laboriosam sequi eligendi dolores minima quidem numquam atque! Eius, voluptatibus quas totam sint nisi deleniti, saepe asperiores officia inventore tempore dolor, nulla incidunt adipisci sit rem natus dicta aliquid odio numquam maiores. Ratione sapiente esse maxime consectetur iure nemo vitae nostrum omnis assumenda, explicabo tenetur obcaecati! Inventore itaque, maxime eius quaerat ea molestias in iste! Delectus excepturi, sit ipsum repellendus voluptates aspernatur, ut quod corrupti neque adipisci labore soluta.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php
                endif;
            endforeach;
        ?>
        <!-- Product End -->