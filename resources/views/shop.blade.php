<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_SHOP</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>
    <!-- Start header -->

    @include("layout.navbar")

    <!-- End header -->
    <!-- Start Hero -->

    <section id="page-header">
        <h2>Shop Now</h2>
    </section>

    <!-- End Hero -->



    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">

        <div class="pro-container">
            @foreach($res as $item)
            <div class="pro" onclick="window.location.href='product.html'">
                <img src=" img/products/{{$item->imgPath}}" alt="p1 ">
                <div class="des ">
                    <span>adidas</span>
                    <h5>{{$item->name}}</h5>

                    <h4>{{$item->price}}</h4>
                    <a href="/addCart/{{$item->id}}/{{Session::get('userID')}}" class="cart "><i class="fas fa-shopping-cart "></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @include("layout.footer")

    <script src="js/all.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>
