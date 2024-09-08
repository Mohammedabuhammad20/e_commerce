<!DOCTYPE html>
<html>

<head>
    @include('admin.css')


    <style type="text/css">
        input[type="text"] {
            width: 400px;
            height: 50px;
        }

        .all {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px
        }

        .table {
            text-align: center;
            margin: auto;
            border: 2px solid rgb(235, 139, 139);
        }

        th {
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;

        }

        td {
            color: wheat;
            padding: 10px;
            border: 1px solid white;
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

                <div class="all">

                    <form action="{{ url('add_category') }}" method="post">
                        @csrf


                        <div>

                            <input type="text" name="category" placeholder="Add Category" style="padding: 0 10px">
                            <input class="btn btn-primary" type="submit" value="add category">

                        </div>

                    </form>

                </div>

                <div>



                    <table class="table">
                        <tr>
                            <th> Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->category_name }}</td>

                                <td>
                                    <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirmation(event)"
                                        href="{{ url('delete_category', $data->id) }}">Delete</a>
                                </td>



                            </tr>
                        @endforeach

                    </table>
                </div>



            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
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
