
<div class="footer-area  d-none d-sm-none d-md-block d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="footer-heading">Mac Kaon FoodHub</h4>
                <div class="footer-underline"></div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
            </div>
            <div class="col-md-3">
                <h4 class="footer-heading">Quick Links</h4>
                <div class="footer-underline"></div>
                <div class="mb-2"><a href="{{url('/')}}" class="text-white">Home</a></div>
                <div class="mb-2"><a href="{{url('/about')}}" class="text-white">About Us</a></div>
            </div>
            <div class="col-md-3">
                @php
                    $categories = DB::table('categories')->where('status','active')->get();
                @endphp
                <h4 class="footer-heading">Order Now</h4>
                <div class="footer-underline"></div>
                @foreach ($categories as $category)
                    <div class="mb-2"><a href="{{url('/collections/'.$category->category_name)}}" class="text-white">{{$category->category_name}}</a></div>
                @endforeach
            </div>
            <div class="col-md-3">
                <h4 class="footer-heading">Reach Us</h4>
                <div class="footer-underline"></div>
                <div class="mb-2">
                    <p>
                        <i class="fa fa-map-marker"></i> #444, some main road, some area, some street, bangalore, india - 560077
                    </p>
                </div>
                <div class="mb-2">
                    <a href="" class="text-white">
                        <i class="fa fa-phone"></i> +91 888-XXX-XXXX
                    </a>
                </div>
                <div class="mb-2">
                    <a href="" class="text-white">
                        <i class="fa fa-envelope"></i> fundaofwebit@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-area">
    <div class="container ">
        <div class="row">
            <div class="col-md-8">
                <p class=""> &copy; 2022 - Mac Kaon FoodHub. All rights reserved.</p>
            </div>
            <div class="col-md-4">
                <div class="social-media">
                    Get Connected:
                    <a href="https://www.facebook.com/macjemsmackaon/"><i class="fab fa-facebook-square"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
