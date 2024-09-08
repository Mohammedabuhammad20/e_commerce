<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<style>
    .add {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }

    label {
        display: inline-block;
        width: 250px;
        font-size: 20px !important;
        color: white !important;
    }

    input[type='text'] {
        width: 350px;
        height: 50px;
    }

    textarea {
        width: 450px;
        height: 80px;

    }

    .addp {
        padding: 15px
    }
</style>

<body>
    @include('admin.header')

    @include('admin.saidbar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


                <h1 style="color: white">Add Product</h1>
                <div class="add">
                    <form action="{{ url('upload_product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="addp">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="addp">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>
                        <div class="addp">
                            <label>Price</label>
                            <input type="text" name="price" required>
                        </div>
                        <div class="addp">
                            <label>Quantity</label>
                            <input type="text" name="qty">
                        </div>
                        <div class="addp">
                            <label>Product Category</label>

                            <select required name="category">
                                <option> Select a Opation</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="addp">
                            <label>Product Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="addp">

                            <input class="btn btn-primary" type="submit" value="add product">
                        </div>
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
