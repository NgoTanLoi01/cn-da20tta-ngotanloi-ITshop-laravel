<div class="header-center">
    <nav class="main-nav">
        <ul class="menu sf-arrows">
            <li class="megamenu-container ">
                <a href="{{ route('home') }}">Trang chủ</a>
            </li>
            {{-- @foreach ($categorysLimit as $categoryParent)
                <li>
                    <a href="" class="sf-with-ul">
                        {{ $categoryParent->name }}
                    </a>
                    @include('components.child_menu', ['categoryParent' => $categoryParent])
                </li>
            @endforeach --}}
            <li>
                <a href="{{ URL::to('/product_all') }}" class="">Sản phẩm</a>
            </li>
            <li>
                <a href="{{ URL::to('/lien_he') }}" class="">Liên hệ</a>
            </li>
        </ul><!-- End .menu -->
    </nav><!-- End .main-nav -->
</div><!-- End .header-center -->
