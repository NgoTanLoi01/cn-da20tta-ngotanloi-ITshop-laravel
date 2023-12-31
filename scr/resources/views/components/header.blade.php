<header class="header header-intro-clearance header-3">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i
                        class="icon-phone"></i>{{ getConfigValueFromSettingTable('Phone_contact') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div><!-- End .header-left -->
            <div class="header-left">
                <a href="tel:#"><i class="icon-envelope"></i>{{ getConfigValueFromSettingTable('Email') }}</a>
            </div><!-- End .header-left -->
            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <ul>
                            <?php
                            $customer_id = Session::get('customer_id');
                            $customer_name = Session::get('customer_name');
            
                            if ($customer_id != NULL) {
                            ?>
                            <li><a href="#">{{ $customer_name }}</a></li>
                            <li><a href="{{ URL::to('/logout-checkout') }}">Đăng xuất</a></li>
                            
                            <?php
                            } else {
                            ?>
                            <li><a href="{{ URL::to('/login-checkout') }}">Đăng nhập / Đăng ký</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="" class="logo" style="text-align: center; display: block;">
                    <img src="{{ asset('UserLTE/assets/images/demos/demo-3/Logo.jpg') }}" alt="Molla Logo"
                        width="50" height="10 " style="border-radius: 50%; margin: 0 auto;">
                    <p style="margin: 0;">NGO TAN LOI</p>
                    <p>Digital Technologies</p>
                </a>

            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="{{ URL::to('/tim_kiem') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn btn-primary" name="search_items" type="submit"><i
                                    class="icon-search"></i></button>
                            <input type="search" class="form-control" name="keywords_submit" id="q"
                                placeholder="Tìm kiếm sản phẩm ..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">

                <div class="wishlist">
                    <a href="{{ URL::to('/yeu_thich') }}">
                        <div class="icon">
                            <i class="icon-heart-o"></i>
                            {{-- <span class="wishlist-count badge">3</span> --}}
                        </div>
                        <p>Yêu thích</p>
                    </a>
                </div><!-- End .compare-dropdown -->

                <div class="wishlist">
                    <a href="{{ URL::to('/show-cart') }}">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>

                        </div>
                        <p>Giỏ hàng</p>
                    </a>
                </div><!-- End .cart-dropdown -->

                <?php
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if ($customer_id != NULL && $shipping_id == NULL) {
                ?>
                <div class="wishlist">
                    <a href="{{ URL::to('/checkout') }}">
                        <div class="icon">
                            <i class="icon-usd"></i>
                        </div>
                        <p>Thanh toán</p>
                    </a>
                </div><!-- End .compare-dropdown -->
                <?php
                    }elseif($customer_id != NULL && $shipping_id != NULL) {
                ?>
                <div class="wishlist">
                    <a href="{{ URL::to('/payment') }}">
                        <div class="icon">
                            <i class="icon-usd"></i>
                        </div>
                        <p>Thanh toán</p>
                    </a>
                </div><!-- End .compare-dropdown -->
                <?php
                }else{
                ?>
                <div class="wishlist">
                    <a href="{{ URL::to('/login-checkout') }}">
                        <div class="icon">
                            <i class="icon-usd"></i>
                        </div>
                        <p>Thanh toán</p>
                    </a>
                </div><!-- End .compare-dropdown -->
                <?php
                    } 
                ?>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            @include('components/siderbar')

            @include('components/main_menu')

            <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Khai trương<span class="highlight">&nbsp;<span style="color: red; font-size: 20px">SỐC</span> không
                        giảm giá!</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
