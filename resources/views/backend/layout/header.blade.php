<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus="">
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close-search">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper">
        <a href="index.html">
          <img class="img-fluid for-light" src="../assets/images/logo/logo_dark.png" alt="logo-light">
          <img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="logo-dark">
        </a>
      </div>
      <div class="toggle-sidebar" checked="checked">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center status_toggle middle sidebar-toggle">
          <line x1="18" y1="10" x2="6" y2="10"></line>
          <line x1="21" y1="6" x2="3" y2="6"></line>
          <line x1="21" y1="14" x2="3" y2="14"></line>
          <line x1="18" y1="18" x2="6" y2="18"></line>
        </svg>
      </div>
    </div>
    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div>
        <a class="toggle-sidebar" href="#" checked="checked">
          <i class="iconly-Category icli"> </i>
        </a>
        <div class="d-flex align-items-center gap-2">
          <h4 class="f-w-600">Welcome, {{ Auth::guard('admin')->user()->name }}</h4>
        </div>
      </div>
    </div>
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus">
        <li class="profile-nav onhover-dropdown">
          <div class="media profile-media">
            <img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
            <div class="media-body d-xxl-block d-none box-col-none">
              <div class="d-flex align-items-center gap-2">
                <span>{{ Auth::guard('admin')->user()->name }}</span>
                <i class="middle fa fa-angle-down"> </i>
              </div>
              <p class="mb-0 font-roboto">Admin</p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="{{ route('admin.profile.edit') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg><span>My Profile</span></a></li>
            <li>
              <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-pill btn-outline-primary btn-sm">Log Out</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

