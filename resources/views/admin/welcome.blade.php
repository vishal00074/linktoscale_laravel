<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
      
  <body>
    <div class="container-scroller">
    @include('admin.layouts.sidebar')
      
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        @include('admin.layouts.header')     


        <div class="main-panel">
          
          
          
          
        @include('admin.layouts.footer')  
        </div>
      </div>
    </div>


    <!-- plugins:js -->
    <script src="/frontend/static/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/frontend/static/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/frontend/static/admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="/frontend/static/admin/assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    
    <!-- inject:js -->
    <script src="/frontend/static/admin/assets/js/off-canvas.js"></script>
    <script src="/frontend/static/admin/assets/js/hoverable-collapse.js"></script>
    <script src="/frontend/static/admin/assets/js/misc.js"></script>
    <script src="/frontend/static/admin/assets/js/dashboard.js"></script>
    <!-- End inject js -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="{% static 'admin/assets/js/toastr.min.js' %}"></script>  -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    

  
    
   
  </body>
</html>