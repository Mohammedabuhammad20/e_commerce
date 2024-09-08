<!DOCTYPE html>
<html>

<head>
    @include('admin.css')


    <style>
        .table {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        table {
            border: 2px solid rgb(188, 91, 91);
            text-align: center;

        }

        th {
            background-color: rgb(213, 91, 91);
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        td {

            align-content: center;
            padding: 10px;
            color: white;
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
                <h3> All Orders</h3>
                <br>

                <div class="table">
                    <table>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th> Change Status</th>
                            <th> Print Pdf</th>
                        </tr>

                        @foreach ($data as $data)
                            <tr>
                                <td style="border: 1px solid white">{{ $data->name }}</td>
                                <td style="border: 1px solid white">{{ $data->rec_address }}</td>
                                <td style="border: 1px solid white">{{ $data->phone }}</td>
                                <td style="border: 1px solid white">{{ $data->product->title }}</td>
                                <td style="border: 1px solid white">{{ $data->product->price }}</td>
                                <td style="border: 1px solid white"> <img width="150px"
                                        src="products/{{ $data->product->image }}"></td>
                                <td style="border: 1px solid white">{{ $data->payment_status }}</td>
                                <td style="border: 1px solid white; padding:15px;">
                                    @if ($data->status == 'in progress')
                                        <span style="color: red ;"> {{ $data->status }}</span>
                                    @elseif ($data->status == 'on the way')
                                        <span style="color: skyblue">{{ $data->status }}</span>
                                    @elseif ($data->status == 'delivered')
                                        <span style="color: green">{{ $data->status }}</span>
                                    @endif
                                </td>

                                <td style="border: 1px solid white"> <a style="width: 50%px" class="btn btn-primary"
                                        href="{{ url('on_the_way', $data->id) }}">On the way</a>
                                    <a class="btn btn-success" href="{{ url('delivered', $data->id) }}">Delivered</a>

                                </td>
                                <td style="border: 1px solid white ;margin-top:40px;">
                                    <a class="btn btn-secondary" style="color: white"
                                        href="{{ url('print_pdf', $data->id) }}">Print Pdf</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- JavaScript files-->
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
