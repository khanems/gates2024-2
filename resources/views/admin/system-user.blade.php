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
        <h4 class="fw-semibold mb-8">Vertical Form</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="../dark/index.html"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item" aria-current="page">Vertical Form</li>
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
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Basic Layout</h5>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="exampleInputtext" class="form-label fw-semibold">Name</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputtext1" class="form-label fw-semibold">Company</label>
                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="ACME Inc.">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                    <div class="input-group border rounded-1">
                      <input type="text" class="form-control border-0" placeholder="John Deo">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1">@example.com</span>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputtext2" class="form-label fw-semibold">Phone No</label>
                    <input type="text" class="form-control" id="exampleInputtext2" placeholder="412 2150 451">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword2" class="form-label fw-semibold">Message</label>
                    <textarea class="form-control p-7" name="" id="" cols="20" rows="1"
                      placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h5 class="card-title fw-semibold mb-0">Basic Layout</h5>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="exampleInputPassword3" class="form-label fw-semibold">Name</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                          class="ti ti-user fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword4" class="form-label fw-semibold">Company</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                          class="ti ti-building-arch fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="ACME Inc.">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword5" class="form-label fw-semibold">Email</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                          class="ti ti-mail fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword6" class="form-label fw-semibold">Phone No</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                          class="ti ti-phone fs-6"></i></span>
                      <input type="text" class="form-control border-0 ps-2" placeholder="412 2150 451">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword7" class="form-label fw-semibold">Message</label>
                    <div class="input-group border rounded-1">
                      <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                          class="ti ti-message-2 fs-6"></i></span>
                      <textarea class="form-control p-7 border-0 ps-2" name="" id="" cols="20" rows="1"
                        placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                    </div>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
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
          <div class="collapsible-section mb-4">
            <h5 class="card-title fw-semibold mb-4">Collapsible Section</h5>
            <div class="accordion accordion-flush position-relative overflow-hidden" id="accordionFlushExample">
              <div class="accordion-item mb-3 shadow-none border rounded-top">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-top"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    Delivery Address
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="John">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Phone no</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="1340 2154 123">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Address</label>
                          <textarea class="form-control p-7" name="" id="" cols="20" rows="1"
                            placeholder="150, Ring Road"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Pincode</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="120125">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Landmark</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="Nr. Wall Street">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">City</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="Jackson">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">State</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">Alaska</option>
                            <option value="1">Arizona</option>
                            <option value="2">Hawaii</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h6 class="fw-semibold">Address Type</h6>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1">Home (All day delivery)</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1"> Office (Delivery between 10 AM - 5
                          PM)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                    Delivery Options
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">Standard 3-5 Days</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">Express</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                      <label class="form-check-label" for="inlineRadio1">Overnight</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border rounded-bottom">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-bottom"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                    aria-controls="flush-collapseThree">
                    Payment Method
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="mb-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1">Credit/Debit/ATM Card</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="form-check-label" for="inlineRadio1">Cash on Delivery</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Card Number</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="1250 4521 5630 1540">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-4">
                              <label for="exampleInputPassword1" class="form-label fw-semibold">Name</label>
                              <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputPassword1" class="form-label fw-semibold">Exp. Date</label>
                              <input type="text" class="form-control" id="exampleInputtext" placeholder="MM/YY">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputtext1" class="form-label fw-semibold">CCV Code</label>
                              <div class="input-group border rounded-1">
                                <input type="text" class="form-control border-0" id="inputtext" placeholder="456">
                                <span class="input-group-text bg-transparent px-6 border-0" id="basic-addon1"><i
                                    class="ti ti-help fs-6"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
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
          <div class="form-with-tabs">
            <h5 class="card-title fw-semibold mb-4">Form with Tabs</h5>
            <div class="card">
              <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-personal-info-tab" data-bs-toggle="pill" data-bs-target="#pills-personal-info"
                    type="button" role="tab" aria-controls="pills-personal-info" aria-selected="true">
                    Personal Info
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-account-details-tab" data-bs-toggle="pill" data-bs-target="#pills-account-details"
                    type="button" role="tab" aria-controls="pills-account-details" aria-selected="false">
                    Account Details
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-social-links-tab" data-bs-toggle="pill" data-bs-target="#pills-social-links" type="button"
                    role="tab" aria-controls="pills-social-links" aria-selected="false">
                    Social Links
                  </button>
                </li>
              </ul>
              <div class="card-body p-4">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-personal-info" role="tabpanel"
                    aria-labelledby="pills-personal-info-tab" tabindex="0">
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
                          <label for="exampleInputPassword1" class="form-label fw-semibold">First Name</label>
                          <input id="startDate" class="form-control" type="date">
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
                  <div class="tab-pane fade" id="pills-account-details" role="tabpanel"
                    aria-labelledby="pills-account-details-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Username</label>
                          <input type="text" class="form-control" id="exampleInputtext" placeholder="John Deo">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Password</label>
                          <div class="input-group border rounded-1">
                            <input type="password" class="form-control border-0" id="inputPassword"
                              placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1"><i
                                class="ti ti-eye fs-6"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Email</label>
                          <div class="input-group border rounded-1">
                            <input type="text" class="form-control border-0" placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1">@example.com</span>
                          </div>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Confirm Password</label>
                          <div class="input-group border rounded-1">
                            <input type="password" class="form-control border-0" id="inputPassword"
                              placeholder="John Deo">
                            <span class="input-group-text bg-transparent px-6" id="basic-addon1"><i
                                class="ti ti-eye fs-6"></i></span>
                          </div>
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
                  <div class="tab-pane fade" id="pills-social-links" role="tabpanel"
                    aria-labelledby="pills-social-links-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Twitter</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://twitter.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Google</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://plus.google.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Instagram</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://instagram.com/abc">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Facebook</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://facebook.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Linkedin</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://linkedin.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Quora</label>
                          <input type="text" class="form-control" id="exampleInputtext"
                            placeholder="https://quora.com/abc">
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