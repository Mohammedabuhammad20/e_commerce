<!DOCTYPE html>
<html>

<head>
    @include('admin.css')


    <style>
        .view {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        table {
            border: 2px solid rgb(197, 98, 98);

        }

        th {
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px
        }

        td {
            border: 1px solid rgb(197, 98, 98);
            text-align: center;
            color: white
        }

        .paginate {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        input[type="search"] {
            width: 400px;
            height: 60px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.saidbar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


                <form action="{{ url('search') }}" method="get">
                    @csrf
                    <input type="search" name="search">
                    <input type="submit" value="Search" class="btn btn-secondary">
                </form>


                <div class="view">
                    <table>
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $products->title }}</td>
                                <td>{!! Str::limit($products->description, 4) !!}</td>
                                <td>{{ $products->category }}</td>
                                <td>{{ $products->price }}</td>
                                <td>{{ $products->quantity }}</td>

                                <td><img style="height: 120px; width:120px" src="products/{{ $products->image }}"></td>
                                <td><a class="btn btn-success"
                                        href="{{ url('update_product', $products->slug) }}">Update</a>
                                </td>

                                <td> <a class="btn btn-danger" onclick="confirmation(event)"
                                        href="{{ url('delete_product', $products->id) }}">Delete</a></td>

                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="paginate">
                    {{ $product->onEachSide(1)->links() }}
                </div>



            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js')



    </script>
    <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>

</html>
