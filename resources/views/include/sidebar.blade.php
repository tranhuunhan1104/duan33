<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-image">
                    <img src="{{ asset('http://localhost/M3/casestudym3/storage/app/public/images/user/' . auth()->user()->image) }}"
                        alt="image">
                    <span class="sidebar-status-indicator"></span>
                </div>
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">

                    </p>

                </div>
            </div>


        </li>

        @if (Auth::user()->hasPermission('Product_viewAny'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <i class="typcn typcn-device-desktop menu-icon"></i>
                    <span class="menu-title">Sản Phẩm <span class="badge badge-primary ml-3">New</span></span>
                </a>
            </li>
        @endif

        @if (Auth::user()->hasPermission('Category_viewAny'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="typcn typcn-briefcase menu-icon"></i>
                    <span class="menu-title">Danh mục <span class="badge badge-primary ml-3">New</span></span>
                </a>
            </li>
        @endif

        @if (Auth::user()->hasPermission('Product_viewAny'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.index') }}">
                    <i class="typcn typcn-briefcase menu-icon"></i>
                    <span class="menu-title">Đơn Đặt Hàng <span class="badge badge-primary ml-3">New</span></span>
                </a>
            </li>
        @endif


        @if (Auth::user()->hasPermission('Product_viewtrash'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewtrash') }}">
                    <i class="typcn typcn-film menu-icon"></i>
                    <span class="menu-title">Thùng Rác</span>
                </a>
            </li>
        @endif


        @if (Auth::user()->hasPermission('User_viewAny'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="typcn typcn-film menu-icon"></i>
                    <span class="menu-title">Quản Lí Nhân Sự </span>
                </a>
            </li>
        @endif

        @if (Auth::user()->hasPermission('User_viewAny'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('group.index') }}">
                    <i class="typcn typcn-film menu-icon"></i>
                    <span class="menu-title">Nhóm Nhân Viên</span>
                </a>
            </li>
        @endif



</nav>
