<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('home.css')
    <title>Document</title>

    <style>
        .order {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;

        }

        th {
            border: 2px solid skyblue;
            background-color: black;
            color: white;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }

        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
    </div>


    <div class="order">
        <table>
            <tr>
                <th>Product name</th>
                <th>Price</th>
                <th>Delivert Status</th>
                <th>Image</th>
            </tr>

            @foreach ($order as $order)
                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td><img height="170px" width="180px;" src="products/{{ $order->product->image }}" alt="">
                    </td>
                </tr>
            @endforeach


        </table>
    </div>
    @include('home.info')
    @include('home.footer')

</body>

</html>
