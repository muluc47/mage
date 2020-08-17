{{-- navabar  --}}
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu 
@if(isset($configData['navbarType'])){{$configData['navbarClass']}} @endif" 
data-bgcolor="@if(isset($configData['navbarBgColor'])){{$configData['navbarBgColor']}}@endif">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          @if (request()->is('sk-layout-1-column'))
          <ul class="nav navbar-nav nav-back">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main hidden-xs font-small-3 d-flex align-items-center" href="{{asset('sk-layout-2-columns')}}">
                <i class="bx bx-left-arrow-alt"></i>Back
              </a>
            </li>
          </ul>
          @else
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                <i class="ficon bx bx-menu"></i>
              </a>
            </li>
          </ul>
          @endif
          
          
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="starter-list">
                <ul class="search-list"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav float-right">

          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
              <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="starter-list">
              <div class="search-input-close"><i class="bx bx-x"></i></div>
              <ul class="search-list"></ul>
            </div>
          </li>
          
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name">John Doe</span>
                <span class="user-status text-muted">Available</span>
              </div>
              <span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="#">
                <i class="bx bx-user mr-50"></i> Edit Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="bx bx-envelope mr-50"></i> My Inbox
              </a>
              <a class="dropdown-item" href="#">
                <i class="bx bx-check-square mr-50"></i> Task</a>
                <a class="dropdown-item" href="#"><i class="bx bx-message mr-50"></i> Chats
              </a>
              <div class="dropdown-divider mb-0"></div>
              <a class="dropdown-item" href="#"><i class="bx bx-power-off mr-50"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
