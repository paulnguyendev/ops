<ul class="navigation navigation-main navigation-accordion">
    <li data-label="Quản Lý Chung">
        <a href="{{ route('admin/index') }}">
            <i class="icon-home4"></i>
            <span>Quản Lý Chung</span>
        </a>
    </li>
    <li data-label="Quản Lý Bài Viết">
        <a href="javascript:void(0)">
            <i class="icon-price-tag2"></i>
            <span>Quản lý Sản phẩm</span>
        </a>
        <ul class="second-menu-level">
            <li>
                <a href="{{route('product/form')}}">
                    <span>Tạo Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{route('product/index')}}">
                    <span>Tất cả sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{route('productCategory/index')}}">
                    <span>Danh mục Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{route('supplier/index')}}">
                    <span>Danh sách nhà cung cấp</span>
                </a>
            </li>
        </ul>
    </li>
    {{-- <li data-label="Quản Lý Bài Viết">
        <a href="javascript:void(0)">
            <i class="icon-magazine"></i>
            <span>Quản Lý Bài Viết</span>
        </a>
        <ul class="second-menu-level">
            <li>
                <a href="#">
                    <span>Tạo bài viết</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>Tất cả bài viết</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>Danh mục bài viết</span>
                </a>
            </li>
        </ul>
    </li> --}}
    <li data-label="Quản Lý Bán Hàng">
        <a href="javascript:void(0)" class="has-ul admin-menu-active">
            <i class="icon-cart5"></i>
            <span>Quản Lý Bán Hàng</span>
        </a>
        <ul class="second-menu-level">
            {{-- <li>
                <a href="#">
                    <span>Tạo đơn hàng mới</span>
                </a>
            </li> --}}
            <li>
                <a href="{{route('admin_order/index')}}">
                    <span>Quản lý đơn hàng</span>
                </a>
            </li>
            {{-- <li>
                <a href="#">
                    <span>Quản lý tồn kho</span>
                </a>
            </li> --}}
        </ul>
    </li>
    <li data-label="Tài khoản">
        <a href="{{ route('admin_profile/form') }}">
            <i class="icon-info3"></i>
            <span>Tài khoản</span>
        </a>
    </li>
    <li data-label="Đăng xuất">
        <a href="{{ route('auth/logout') }}">
            <i class="icon-switch2"></i>
            <span>Đăng xuất</span>
        </a>
    </li>
</ul>
