
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGBEOcjPPVl-dKhMQLag_OaUnSQP-5JbOPiQ&usqp=CAU" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">

            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>

        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">Products <span class="badge badge-primary ml-3">New</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Categories</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="typcn typcn-film menu-icon"></i>
            <span class="menu-title">Order</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('category.trash') }}">
            <i class="typcn typcn-film menu-icon"></i>
            <span class="menu-title">Trash</span>
          </a>
      </li>

  </nav>
