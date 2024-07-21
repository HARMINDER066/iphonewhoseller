
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('backend.layout.head')

  </head>
  <body> 
    <!-- loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader"> 
        <div class="loader4"></div>
      </div>
    </div> -->
    <!-- loader ends-->
    <!-- tap on top starts-->
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper null compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('backend.layout.header')

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('backend.layout.sidebar')

        <!-- Page Sidebar Ends-->
        @yield('content')
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2024 © Riho theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    @include('backend.layout.footer')

  </body>
</html>