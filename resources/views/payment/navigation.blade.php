<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayur</title>
    <link rel="stylesheet" href="{{ asset('css/ayurhome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ayurlist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/43c81dd888.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="main-navigation">
            <div class="left">
                <a class="icon" href="#">
                    <img src="{{ asset('image/icon.jpg') }}" alt="">
                </a>
                <a class="sitename" href="#">
                    <h3>ayurmedical</h3>
                </a>
            </div>
            <div class="right">
    <a href="/ayurhome">
        <span>Home</span>
    </a>
    <a href="/medi-list">
        <span>Medicine</span>
    </a>
    <a href="/checkout">
        <span>Checkout</span>
    </a>
    <a href="/userdata">
        <span>Datatable</span>
    </a>
    <a href="/login">
        <span>Authenticate</span>
    </a>
    <a  class="cart" href="/checkout">
        <span>{{ $cart_item }}</span>
        <i class="fas fa-shopping-cart"></i>
    </a>
            </div>
        </div>

        <div class="content">
          @yield('contents')
        </div>
    </div>

</body>
</html>
