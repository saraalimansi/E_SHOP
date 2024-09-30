<!DOCTYPE html>

<head>

    <style>
    /* Example color changes for a fresh design */
body {
    font-family: 'Alegreya Sans', sans-serif;
    background-color: #f4f4f4; /* Light gray background */
    color: #333; /* Dark gray text */
}

#hero {
    background-color: #2a9d8f; /* Cool teal background */
    color: #fff; /* White text */
    text-align: center;
    padding: 100px 0;
}

#hero h4 {
    color: #f4a261; /* Orange accent color */
    font-size: 1.2rem;
}

#hero h2 {
    font-size: 2.5rem;
    color: #e76f51; /* Warm coral */
}

#hero h1 {
    font-size: 4rem;
    font-weight: bold;
}

#hero p {
    font-size: 1.2rem;
}

#hero button {
    background-color: #e76f51;
    color: #fff;
    padding: 10px 20px;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    font-size: 1.1rem;
}

#hero button:hover {
    background-color: #f4a261;
}

.section-p1 {
    padding: 50px 0;
    text-align: center;
}

#feature .fe-1 {
    background-color: #264653; /* Dark teal */
    color: #fff;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    transition: background-color 0.3s;
}

#feature .fe-1:hover {
    background-color: #2a9d8f;
}

#product1 h2 {
    color: #e76f51; /* Coral */
    font-size: 2.2rem;
}

#product1 p {
    color: #f4a261; /* Soft orange */
    margin-bottom: 40px;
}

.pro-container .pro {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s;
}

.pro-container .pro:hover {
    transform: scale(1.05);
}

.pro-container .pro img {
    width: 100%;
    border-bottom: 1px solid #e0e0e0;
}

.pro-container .pro .des {
    padding: 15px;
    text-align: left;
}

.pro-container .pro .des h5 {
    color: #333;
    font-size: 1.2rem;
}

.pro-container .pro .des span {
    color: #2a9d8f; /* Teal text for brand */
    font-weight: bold;
}

.pro-container .pro .des .cart {
    background-color: #264653;
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    float: right;
}

#bannar3 .bannar-box {
    background-color: #f4a261;
    color: #fff;
    padding: 40px;
    margin: 10px;
    border-radius: 15px;
    text-align: center;
}

#bannar3 .bannar-box2 {
    background-color: #e76f51;
}

#bannar3 .bannar-box3 {
    background-color: #2a9d8f;
}

/* Footer */
footer {
    background-color: #264653;
    color: #fff;
    padding: 30px 0;
    text-align: center;
}

footer a {
    color: #f4a261;
    text-decoration: none;
}

footer a:hover {
    color: #e76f51;
}
</style>

    <!-- Start Links -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Start Home Style -->
    <link rel="stylesheet" href="css/index_style.css">
    <!-- End Home Style -->

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,400&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- End Links -->


</head>


<body>

    @include("layout.navbar")
    <!-- Start Hero -->

    <section id="hero">

        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more woth coupons & up to 70% off!</p>
        <button>Shop Now!</button>

    </section>

    <!-- End Hero -->

    <!-- start Feature-->
    <section id="feature" class="section-p1">
        <div class="fe-1">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f4.png" alt="">
            <h6>Promitions</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f6.png" alt="">
            <h6>F7/24 Support</h6>
        </div>
    </section>
    <!-- End Feature-->

    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
            @foreach($res as $item)
            <div class="pro">
                <img src="img/products/{{$item->imgPath}}" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>{{$item->name}}</h5>

                    <h4>{{$item->price}}</h4>
                    <a href="/addCart/{{$item->id}}/{{Session::get('userID')}}" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End New Arrival -->

    <section id="bannar3" class="section-p1">
        <div class="bannar-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
    </section>

    @include("layout.footer")

    <script src="js/all.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/main.js"></script>
</body>

</html>

</html>
