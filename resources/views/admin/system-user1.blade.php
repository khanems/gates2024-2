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
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputtext3" class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control" id="exampleInputtext3" placeholder="John Deo">
                      </div>
                      <div class="">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Password</label>
                        <div class="input-group border rounded-1">
                          <input type="password" class="form-control border-0" id="inputPassword"
                            placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                              class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                        <div class="input-group border rounded-1">
                          <input type="text" class="form-control border-0" placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0"
                            id="basic-addon1">@example.com</span>
                        </div>
                      </div>
                      <div class="">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                        <div class="input-group border rounded-1">
                          <input type="password" class="form-control border-0" id="inputPassword"
                            placeholder="John Deo">
                          <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                              class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4">
                  <h5 class="fs-4 fw-semibold mb-4">Personal Info</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Country</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">India</option>
                          <option value="1">United Kingdom</option>
                          <option value="2">Srilanka</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Birth Date</label>
                        <input id="startDate" class="form-control" type="date" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="Deo">
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Language</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">English</option>
                          <option value="1">French</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                        <input type="text" class="form-control" id="exampleInputtext" placeholder="123 4567 201">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-primary">Submit</button>
                        <button class="btn bg-danger-subtle text-danger">Cancel</button>
                      </div>
                    </div>
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