<div class="sidebar-wrapper" data-layout="stroke-svg">
  <div class="logo-wrapper">
    <a href="index.html">
      <img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
    </a>
    <div class="back-btn">
      <i class="fa fa-angle-left"></i>
    </div>
    <div class="toggle-sidebar" checked="checked">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid status_toggle middle sidebar-toggle">
        <rect x="3" y="3" width="7" height="7"></rect>
        <rect x="14" y="3" width="7" height="7"></rect>
        <rect x="14" y="14" width="7" height="7"></rect>
        <rect x="3" y="14" width="7" height="7"></rect>
      </svg>
    </div>
  </div>
  <div class="logo-icon-wrapper">
    <a href="index.html">
      <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
    </a>
  </div>
  <nav class="sidebar-main">
    <div class="left-arrow disabled" id="left-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
        <line x1="19" y1="12" x2="5" y2="12"></line>
        <polyline points="12 19 5 12 12 5"></polyline>
      </svg>
    </div>
    <div id="sidebar-menu">
      <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
        <div class="simplebar-wrapper" style="margin: 0px;">
          <div class="simplebar-height-auto-observer-wrapper">
            <div class="simplebar-height-auto-observer"></div>
          </div>
          <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
              <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                <div class="simplebar-content" style="padding: 0px;">
                  <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="kanban.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-board"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-board"></use>
                      </svg>
                      <span>Kanban Board</span>
                      <div class="according-menu">
                        <i class="fa fa-angle-right"></i>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title active" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg>
                      <span>Product</span>
                      <div class="according-menu">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </a>
                    <ul class="sidebar-submenu" style="">
                      <li>
                        <a href="{{ route('products.list') }}">Add Products</a>
                      </li>
                      <li>
                        <a href="{{ route('products.create') }}">Product list</a>
                      </li>
                    </ul>
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </ul>
      
    </div>
  </nav>
</div>
