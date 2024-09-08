<!DOCTYPE html>
<html>

<head>
    @include('home.css')


    <style>
        .cart {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: 1px solid black;
        }

        .total {
            position: relative;

            left: 30%;
            top: -10px;
            padding-bottom: 20px;
            margin-top: 20px;

        }

        .order {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 100px;
            margin-top: -50px;
        }

        label {
            display: inline-block;
            width: 150px;
            text-align: center;
        }

        .order div {
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

    </div>
    <!-- end hero area -->


    <div class="cart">





        <table>
            <tr>
                <th> Product Title</th>
                <th>Image</th>
                <th>Price </th>
                <th>Remove</th>
            </tr>

            <?php
            
            $value = 0;
            
            ?>
            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->product->title }}</td>
                    <td><img width="150px" src="/products/{{ $cart->product->image }}" </td>
                    <td>
                        {{ $cart->product->price }}$
                    </td>

                    <td> <a class="btn btn-danger" href="{{ url('remove_product', $cart->id) }}">Remove</a></td>

                    <?php
                    
                    $value = $value + intval($cart->product->price);
                    ?>
            @endforeach
        </table>
    </div>
    <div class="order">
        <form action="{{ url('confirm_order') }}" method="post">
            @csrf
            <div>
                <label> Receiver Name</label>
                <input type="text" name="name" value="{{ Auth::user()->name }}">

            </div>

            <div>
                <label> Receiver Address</label>
                <textarea class="address">{{ Auth::user()->address }}</textarea>

            </div>

            <div>
                <label> Receiver phone</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}">

            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="cash on delivery">
                <a class="btn btn-success" href="{{ url('stripe', $value) }}">Pay Using Card</a>
            </div>

        </form>
    </div>

    <div class="total ">
        <h3>
            Total Value of Cart is: ${{ $value }}
        </h3>
    </div>






    <!-- info section -->

    @include('home.info')
    <!-- footer section -->
    @include('home.footer')
    <!-- footer section -->

    </section>

    <!-- end info section -->


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
