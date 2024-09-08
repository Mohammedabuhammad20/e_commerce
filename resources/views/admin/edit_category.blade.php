<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<style>
    .update {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 50px
    }

    input[type=text] {
        width: 300px;
        height: 40px
    }
</style>

<body>
    @include('admin.header')

    @include('admin.saidbar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="color: white"> Update Category </h1>

                <div class="update">

                    <form action="{{ url('update_category', $data->id) }}" method="post">
                        @csrf
                        <input type="text" name="category" value="{{ $data->category_name }}">

                        <input class="btn btn-secondary" type="submit" value="Update Category">
                    </form>
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