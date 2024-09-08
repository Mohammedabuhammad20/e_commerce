<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .update {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label {
            display: inline-block;
            width: 200px;
            padding: 20px;
            color: white;
        }

        textarea {
            width: 300px;
            height: 80px
        }

        input[type="text"] {
            width: 300px;
            height: 60px;
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

                <h2> Update Product </h2>

                <div class="update">
                    <form action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $data->title }}">
                        </div>
                        <div>
                            <label>Dexcription</label>
                            <textarea name="description">{{ $data->description }}</textarea>
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $data->price }}">
                        </div>
                        <div>
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{ $data->quantity }}">
                        </div>

                        <div>
                            <label>Category</label>
                            <select name="category">
                                <option value="">{{ $data->category }}</option>
                                @foreach ($category as $category)
                                    <option>{{ $category->category_name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div>
                            <label>Current Image</label>
                            <img style="width: 200px ; height:200px" src="/products/{{ $data->image }}" alt="">
                        </div>
                        <div><label>New Image</label>
                            <input type="file" name="image">
                        </div>

                        <input type="submit" class="btn btn-success" value="Update product">
                    </form>
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
