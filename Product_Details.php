    <!-- Start Header -->
    <?php include('header.php'); ?>
    <!-- End Header -->

    <section class="container" style="margin-top:55px" class="SliderContainer">
        <div class="row" >
            <div class="col-md-7 col-sm" style="border-left:2px solid silver;border-bottom:2px solid silver">
                <div class="mySlides">
                    <div class="numbertext">1 / 4</div>
                    <img src="img/almonds.png" clas="SliderImg" height="300" width="100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 4</div>
                    <img src="img/apples.png" clas="SliderImg" height="300" width="100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 4</div>
                    <img src="img/vege1.png" height="300" width="100%" clas="SliderImg">
                </div>
                    
                <div class="mySlides">
                    <div class="numbertext">4 / 4</div>
                    <img src="img/vege2.jpg"  clas="SliderImg" height="300" width="100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <div class="row SlideSmallImg">
                    <div class="columnSlide">
                <img class="demo cursor" src="img/almonds.png" height="100"  onclick="currentSlide(1)" alt="100% Good Quality Almonds">
                    </div>
                    <div class="columnSlide">
                    <img class="demo cursor" src="img/apples.png" height="100"  onclick="currentSlide(2)" alt="Fresh Kasmiri Apples">
                    </div>
                    <div class="columnSlide">
                    <img class="demo cursor" src="img/vege1.png" height="100"  onclick="currentSlide(3)" alt="Frressh Vegetables">
                    </div>
                    <div class="columnSlide">
                    <img class="demo cursor" src="img/vege2.jpg" height="100"  onclick="currentSlide(4)" alt="Frressh Vegetables">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm">
                <div class="row" style="margin:30px 30px">
                    <div class="col-sm-12">
                        <a href="#" class="ItemTitle">Almonds</a>
                        <p class="AboutItems">BB Popular Almond/Badam - Californian, Giri, 500 g Pouch</p>
                        <div class="ImgStar"><img src="img/star-icon.png" height="13" alt="">&nbsp; 4.3</div><br>
                        <span class="OriginalPrice"><strike >MRP : ₹699/Kg</strike></span><br>
                        <span class="OfferPrice">Offer Price : ₹299/kg </span>
                        <p class="Delivry">Standard: Tomorrow 9:00AM - 1:30PM</p>
                    </div>
                    <div class="col-sm-6">
                        <a href="Product_CheckOut.php">
                    <button class="CartButton">Add to Cart</button></a>
                </div>
                <div class="col-sm-6">
                <div class="Quantity">
                    <span class="Minus" style="font-size:20px;padding:10px">-</span>
                    <span class="Num">1</span>
                    <span class="Plus" style="font-size:15px">+</span>
                    <img src="img/trash.png" height="20" style="margin-right:1px;" alt="">
                     </div>
                </div>
                <div class="col-md-12 col-sm" style="margin-top:40px">
                <span style="color:gray;font-size:15px;font-weight:bold">Delivery  : &nbsp;&nbsp;&nbsp;</span>
                <input type="text" placeholder="Check Delivery Pincode" class="PinInput">
            </div>
            <div class="col-md-12 col-sm" style="margin-top:40px">
            </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Start Item Description -->

        <section class="container-fluid ItemDetailRow">
            <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12">
                <h4 style="padding-top:40px">BB Popular Almond/Badam - Californian, Giri <hr></h4>
                <h6>About the Product</h6>
                    <ul class="ItemDetails">
                        <li>Almonds are light brown skinned, tough, edible seeds of the almond fruit.</li>
                        <li>They have a wealthy yet subtle bitter-sweet flavor.</li>
                        <li>Click here for unique and delicious recipes - https://www.bigbasket.com/flavors/collections/231/dry-fruits-berries-nuts/</li>
                        <li>Also, it is wealthy in vitamin E and minerals such as potassium, calcium, manganese, zinc, iron and selenium.</li>
                        <li>These are assets of nutrients, especially protein, dietary fibre, mono-unsaturated fatty acids and B complex vitamins.</li>
                    </ul>
                <hr>
                <h6>Ingredients</h6>
                <p class="ItemDetails">These seeds, being so nutritious promote wellness and possess "anti-carcinogenic", antioxidant and "anti-inflammatory" properties. They help treat iron deficiency and "menopause", and also help lower cholesterol. The healthy fats present in almonds help nourish hair, skin and nails.</p>
            </div>
        </div>
    </div>
</section>

<!-- End Item Description -->


        <!-- Start SIMILAR PRODUCTS-->
            
          <div class="container" style="margin-top:80px">
                      <h3 class="Main_heading">Similar Products <hr></h3>
                            <div class="row" style="margin-top:60px">
                              <div class="col-md-12">
                              <div class="carousel" data-flickity='{ "groupCells":3}'>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/Bread.png" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/DryFruits.png" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/DryFruits.png" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                                <div class="carousel-cell2 SimilarProducts">
                                    <div class="">
                                    <img src="img/EnergyDrinks.jpg" class="SectionImg" >
                                    </div>
                                    <h6 class="aboutImg " >Almonds</h6>
                                <p class="title">BB Popular Almond/Californian, Giri, 500 g Pouch</p>
                                <div class="Ratings">
                                <img src="img/star-icon.png" height="13" alt="">&nbsp;2.5
                                </div>
                        <div class="priceSection">
                        <div class="row">
                            <div class="col-sm-7">
                                MRP : <span class="LowPrice">₹99/Kg</span>
                                <span class="HighPrice"> <STRIKE>₹ 150/Kg</STRIKE></span>
                                <p class="Delivry">Standard Delivery : Tomorrow 9:00-12:00PM</p>
                                </div>
                                <div class="col-sm-5">
                                <button class="CartButton2" onclick="addToCart(item1)">Add To Cart</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    <!-- Start Footer -->
    <?php include('footer.php'); ?>
    <!-- End Footer -->

 