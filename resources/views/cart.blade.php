<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>

    <!-- Start header -->

    @include("layout.navbar")

    <!-- End header -->
    <section id="page-header" class="about-header">
        <h2>Cart</h2>
        <p>Let's see what you have.</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>price</td>
                    <td>Quntaty</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td><a href="delete/{{$item->cartID}}"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/{{$item->imgPath}}" alt="product1"></td>
                    <td>{{$item->itemName}}</td>
                    <td>${{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>${{$item->price*$item->quantity}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">

        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$0.00</td>
                </tr>

                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>${{$total}}</strong></td>
                </tr>
            </table>
            <button onclick="window.location.href='/checkout'" class="normal">proceed to checkout</button>
        </div>
    </section>

    @include("layout.footer")
    <script src="js/main.js"></script>
</body>



</html>
