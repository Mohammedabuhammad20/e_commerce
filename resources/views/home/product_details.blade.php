<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>


<style>
    .img {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 25px
    }
</style>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <!-- slider section -->





        <!-- Product details section -->


        <section class="shop_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Latest Products
                    </h2>
                </div>
                <div class="row">


                    <div class="col-md-10 ">
                        <div class="box">

                            <div class="img">
                                <img width="400" src="/products/{{ $data->image }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    {{ $data->title }}
                                </h6>
                                <h6>
                                    Price
                                    <span>
                                        {{ $data->price }}
                                    </span>
                                </h6>
                            </div>
                            <div style="padding: 15px 0" class="detail-box">
                                <h6>
                                    Category : {{ $data->category }}
                                </h6>
                                <h6>
                                    Available Quantity
                                    <span>
                                        {{ $data->quantity }}
                                    </span>
                                </h6>
                            </div>
                            <div class="detail-box">

                                <p> {{ $data->description }}</p>


                            </div>
                            <div>

                                <a class="btn btn-primary" href="{{ url('add_cart', $data->id) }}">Add To Cart</a>

                            </div>
                        </div>
                    </div>






                </div>

            </div>

        </section>








        <!-- end Product details section -->














        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- shop section -->


    <!-- end shop section -->







    <!-- contact section -->



    <!-- end contact section -->



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
