<!-- componet here starts -->
<x-admin-sidebar/>
<x-admin-header/>
<!-- componet ends starts ends -->


      <!-- page started here -->

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body px-4 py-3">
    <div class="row align-items-center">
      <div class="col-9">
        <h4 class="fw-semibold mb-8">Empty Form</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="{{ route('admin')}}"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item" aria-current="page">Empty Form</li>
          </ol>
        </nav>
      </div>
      <div class="col-3">
        <div class="text-center mb-n5">
          <img
            src="../assets/images/breadcrumb/ChatBc.png"
            alt=""
            class="img-fluid mb-n4"
          />
        </div>
      </div>
    </div>
  </div>
</div>

          <div class="row">
 
            <div class="col-12">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Multi Column with Form Separator</h5>
                </div>
                <div class="card-body p-4 border-bottom">
                  <h5 class="fs-4 fw-semibold mb-4">Account Details</h5>
                  <div class="row">
                   
                  </div>
                </div>
                <div class="card-body p-4">
                  <h5 class="fs-4 fw-semibold mb-4">Personal Info</h5>
                  <div class="row">
                
                  </div>
                </div>
              </div>
            </div>
          </div>
 
        </div>
      </div>
      <script>
  function handleColorTheme(e) {
    $("html").attr("data-color-theme", e);
    $(e).prop("checked", !0);
  }
</script>
<x-setting-admin/>
</body>

</html>