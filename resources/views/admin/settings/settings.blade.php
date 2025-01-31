<!-- componet here starts slid bar -->
<x-admin-sidebar />
<x-admin-header />
<!-- componet ends starts slid bar -->

<!-- page started here -->

<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Account Setting</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Account Setting</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                        id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button"
                        role="tab" aria-controls="pills-account" aria-selected="true">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Account</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                        id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications"
                        type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                        <i class="ti ti-bell me-2 fs-6"></i>
                        <span class="d-none d-md-block">Notifications</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                        id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button"
                        role="tab" aria-controls="pills-bills" aria-selected="false">
                        <i class="ti ti-article me-2 fs-6"></i>
                        <span class="d-none d-md-block">Bills</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                        id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button"
                        role="tab" aria-controls="pills-security" aria-selected="false">
                        <i class="ti ti-lock me-2 fs-6"></i>
                        <span class="d-none d-md-block">Security</span>
                    </button>
                </li>
            </ul>
            <div class="card-body">
                <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                            aria-labelledby="pills-account-tab" tabindex="0">
                            <div class="row">

                                {{-- <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="card w-100 position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-semibold">Change Profile</h5>
                                        <p class="card-subtitle mb-4">Change your profile picture from here</p>
                                        <div class="text-center">

                                            <!-- User Profile Image -->
                                            <img id="profileImage" src="{{ auth()->user()->image }}" alt="Profile Image"
                                                class="img-fluid rounded-circle" width="120" height="120">

                                            <!-- Hidden File Input -->
                                            <input type="file" id="imageUpload" hidden accept="image/*"
                                                onchange="previewImage(this)">

                                            <!-- Upload & Reset Buttons -->
                                            <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                                                <button class="btn btn-primary"
                                                    onclick="document.getElementById('imageUpload').click()">Upload</button>
                                                <button class="btn btn-outline-danger"
                                                    onclick="resetImage()">Reset</button>
                                            </div>

                                            <!-- JavaScript for Image Preview -->
                                            <script>
                                                function previewImage(input) {
                                                    if (input.files && input.files[0]) {
                                                        let reader = new FileReader();
                                                        reader.onload = function(e) {
                                                            document.getElementById('profileImage').src = e.target.result;
                                                        };
                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                function resetImage() {
                                                    document.getElementById('profileImage').src = "{{ auth()->user()->image }}";
                                                    document.getElementById('imageUpload').value = ""; // Clear input
                                                }
                                            </script>



                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                                @csrf
                                @method('PUT')

                                <div class="col-lg-5 d-flex align-items-stretch">
                                    <div class="card w-100 position-relative overflow-hidden">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-semibold">Website Details</h5>
                                            <p class="card-subtitle mb-4">To change your website details please add here
                                            </p>

                                            <div class="mb-4">
                                                <label for="website_name" class="form-label fw-semibold">Website
                                                    Name</label>
                                                <input type="text" class="form-control" id="website_name"
                                                    value="{{ $settings->website_name}} " name="website_name">
                                            </div>

                                            <div class="mb-4">
                                                <label for="tagline" class="form-label fw-semibold">Tagline</label>
                                                <input type="text" class="form-control" id="tagline"
                                                    value="{{ $settings->tagline }}" name="tagline">
                                            </div>

                                            <select class="form-select" aria-label="Default select example"
                                                name="country">
                                                <option value="PK"
                                                    {{ $settings->country == 'PK' ? 'selected' : '' }}>Pakistan
                                                </option>
                                                <option value="AU"
                                                    {{ $settings->country == 'AU' ? 'selected' : '' }}>Australia
                                                </option>
                                                <option value="GB"
                                                    {{ $settings->country == 'GB' ? 'selected' : '' }}>United
                                                    Kingdom
                                                </option>
                                                <option value="US"
                                                    {{ $settings->country == 'US' ? 'selected' : '' }}>United States
                                                </option>
                                                <option value="IN"
                                                    {{ $settings->country == 'IN' ? 'selected' : '' }}>India
                                                </option>
                                                <option value="RU"
                                                    {{ $settings->country == 'RU' ? 'selected' : '' }}>Russia
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 d-flex align-items-stretch">
                                    <div class="card w-100 position-relative overflow-hidden">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-semibold">Change Settings</h5>
                                            <p class="card-subtitle mb-4">Change your website logos and favicon from
                                                here
                                            </p>
                                            <div class="d-flex justify-content-between text-center">


                                                <!-- Dark Logo -->
                                                <div class="mb-4">
                                                    <h6>Light theme Logo</h6>
                                                    <img id="darkLogo" name="dark_logo"
                                                        src="{{ old('dark_logo', $settings->dark_logo) }}"
                                                        alt="Dark Logo" class="img-fluid rounded-circle"
                                                        width="80" height="80">
                                                    <input type="file" id="darkLogoUpload" name="dark_logo" hidden
                                                        accept="image/*" onchange="previewLogo('darkLogo', this)">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="document.getElementById('darkLogoUpload').click()">Upload</button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            onclick="resetLogo('darkLogo')">Reset</button>
                                                    </div>
                                                </div>

                                                <!-- Light Logo -->
                                                <div class="mb-4">
                                                    <h6>Dark theme Logo</h6>
                                                    <img id="lightLogo"
                                                        src="{{ old('light_logo', $settings->light_logo) }}"
                                                        alt="Light Logo" class="img-fluid rounded-circle"
                                                        width="80" height="80">
                                                    <input type="file" id="lightLogoUpload" name="light_logo"
                                                        hidden accept="image/*"
                                                        onchange="previewLogo('lightLogo', this)">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="document.getElementById('lightLogoUpload').click()">Upload</button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            onclick="resetLogo('lightLogo')">Reset</button>
                                                    </div>
                                                </div>

                                                <!-- Favicon -->
                                                <div class="mb-4">
                                                    <h6>Favicon</h6>
                                                    <img id="faviconImage"
                                                        src="{{ old('favicon', $settings->favicon) }}" alt="Favicon"
                                                        class="img-fluid rounded-circle" width="80"
                                                        height="80">
                                                    <input type="file" id="faviconUpload" name="favicon" hidden
                                                        accept="image/*" onchange="previewLogo('faviconImage', this)">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="document.getElementById('faviconUpload').click()">Upload</button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                            onclick="resetLogo('faviconImage')">Reset</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- JavaScript for Image Preview -->
                                            <script>
                                                function previewLogo(imageId, input) {
                                                    if (input.files && input.files[0]) {
                                                        let reader = new FileReader();
                                                        reader.onload = function(e) {
                                                            document.getElementById(imageId).src = e.target.result;
                                                        };
                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }

                                                function resetLogo(imageId) {
                                                    document.getElementById(imageId).src = "{{ auth()->user()->image }}";
                                                    document.getElementById(imageId.replace('Image', 'Upload')).value = ""; // Clear input
                                                }
                                            </script>

                                            <p class="mb-0">Allowed JPG, GIF, or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="card w-100 position-relative overflow-hidden mb-0">
                                        <div class="card-body p-4">
                                            <h5 class="card-title fw-semibold">Personal Details</h5>
                                            <p class="card-subtitle mb-4">To change your personal detail , edit and
                                                save
                                                from here</p>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="exampleInputtext"
                                                            class="form-label fw-semibold">Your
                                                            Name</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputtext" placeholder="Mathew Anderson">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label fw-semibold">Currency Symbol</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example"
                                                            name="currency_symbol">
                                                            <option value="AUD"
                                                                {{ $settings->currency_symbol == 'AUD' ? 'selected' : '' }}>
                                                                AUD</option>
                                                            <option value="PKR"
                                                                {{ $settings->currency_symbol == 'PKR' ? 'selected' : '' }}>
                                                                PKR</option>
                                                            <option value="$"
                                                                {{ $settings->currency_symbol == '$' ? 'selected' : '' }}>
                                                                $</option>
                                                            <option value="GBP"
                                                                {{ $settings->currency_symbol == 'GBP' ? 'selected' : '' }}>
                                                                GBP</option>
                                                            <option value="INR"
                                                                {{ $settings->currency_symbol == 'INR' ? 'selected' : '' }}>
                                                                INR</option>
                                                            <option value="RUB"
                                                                {{ $settings->currency_symbol == 'RUB' ? 'selected' : '' }}>
                                                                RUB</option>
                                                            <option value="EUR"
                                                                {{ $settings->currency_symbol == 'EUR' ? 'selected' : '' }}>
                                                                €</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="exampleInputtext1"
                                                            class="form-label fw-semibold">Email</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputtext1" placeholder="info@modernize.com" name="email" value="{{ $settings->email }}">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="form-label fw-semibold">Time Format</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example" name="time_format">
                                                            <option value="h:i A"
                                                                {{ $settings->time_format == 'h:i A' ? 'selected' : '' }}>
                                                                12-hour</option>
                                                            <option value="H:i"
                                                                {{ $settings->time_format == 'H:i' ? 'selected' : '' }}>
                                                                24-hour</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="mb-4">
                                                        <label class="form-label fw-semibold">Currency</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example" name="currency">
                                                            <option value="Australian Dollar"
                                                                {{ $settings->currency == 'Australian Dollar' ? 'selected' : '' }}>
                                                                Australian Dollar</option>
                                                            <option value="Pakistani Rupee"
                                                                {{ $settings->currency == 'Pakistani Rupee' ? 'selected' : '' }}>
                                                                Pakistani Rupee</option>
                                                            <option value="US Dollar"
                                                                {{ $settings->currency == 'US Dollar' ? 'selected' : '' }}>
                                                                US Dollar</option>
                                                            <option value="United Kingdom Pound"
                                                                {{ $settings->currency == 'United Kingdom Pound' ? 'selected' : '' }}>
                                                                United Kingdom Pound</option>
                                                            <option value="India Rupee"
                                                                {{ $settings->currency == 'India Rupee' ? 'selected' : '' }}>
                                                                India Rupee</option>
                                                            <option value="Russian Ruble"
                                                                {{ $settings->currency == 'Russian Ruble' ? 'selected' : '' }}>
                                                                Russian Ruble</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="form-label fw-semibold"> Currency Symbol
                                                            Location</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example"
                                                            name="currency_symbol_location">
                                                            <option value="PRE"
                                                                {{ $settings->currency_symbol_location == 'PRE' ? 'selected' : '' }}>
                                                                PRE - {{ $settings->currency_symbol }} 100 </option>
                                                            <option value="POST"
                                                                {{ $settings->currency_symbol_location == 'POST' ? 'selected' : '' }}>
                                                                POST - 100 {{ $settings->currency_symbol }}</option>

                                                        </select>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="exampleInputtext3"
                                                            class="form-label fw-semibold">Phone</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputtext3" placeholder="+92 12345 65478"
                                                            name="phone_number"
                                                            value="{{ $settings->phone_number }}">
                                                    </div>
                                                    @php
                                                        $currentDate = \Carbon\Carbon::now();
                                                    @endphp

                                                    <div class="mb-4">
                                                        <label class="form-label fw-semibold">Date Format</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example" name="date_format">
                                                            <option value="d/m/Y"
                                                                {{ $settings->date_format == 'd/m/Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('d/m/Y') }} (DD/MM/YYYY)
                                                            </option>
                                                            <option value="m/d/Y"
                                                                {{ $settings->date_format == 'm/d/Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('m/d/Y') }} (MM/DD/YYYY)
                                                            </option>
                                                            <option value="Y-m-d"
                                                                {{ $settings->date_format == 'Y-m-d' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('Y-m-d') }} (YYYY-MM-DD)
                                                            </option>
                                                            <option value="d-m-Y"
                                                                {{ $settings->date_format == 'd-m-Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('d-m-Y') }} (DD-MM-YYYY)
                                                            </option>
                                                            <option value="m-d-Y"
                                                                {{ $settings->date_format == 'm-d-Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('m-d-Y') }} (MM-DD-YYYY)
                                                            </option>
                                                            <option value="Y/m/d"
                                                                {{ $settings->date_format == 'Y/m/d' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('Y/m/d') }} (YYYY/MM/DD)
                                                            </option>
                                                            <option value="d.m.Y"
                                                                {{ $settings->date_format == 'd.m.Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('d.m.Y') }} (DD.MM.YYYY)
                                                            </option>
                                                            <option value="m.d.Y"
                                                                {{ $settings->date_format == 'm.d.Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('m.d.Y') }} (MM.DD.YYYY)
                                                            </option>
                                                            <option value="l, F j, Y"
                                                                {{ $settings->date_format == 'l, F j, Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('l, F j, Y') }} (e.g., Monday,
                                                                January 1, 2025)
                                                            </option>
                                                            <option value="F j, Y"
                                                                {{ $settings->date_format == 'F j, Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('F j, Y') }} (e.g., January 1,
                                                                2025)
                                                            </option>
                                                            <option value="l, d F Y"
                                                                {{ $settings->date_format == 'l, d F Y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('l, d F Y') }} (e.g., Monday, 1
                                                                January 2025)
                                                            </option>

                                                            <option value="d/m/y"
                                                                {{ $settings->date_format == 'd/m/y' ? 'selected' : '' }}>
                                                                {{ $currentDate->format('d/m/y') }} (DD/MM/YY)
                                                            </option>
                                                        </select>
                                                    </div>



                                                </div>
                                                <div class="col-12">
                                                    <div class="">
                                                        <label for="exampleInputtext4"
                                                            class="form-label fw-semibold">Address</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputtext4"
                                                            placeholder="814 Howard Street, 120065, Pakistan"
                                                            name="address" value="{{ $settings->address }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div
                                                        class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                                        <button class="btn btn-primary">Save</button>
                                                        <button
                                                            class="btn bg-danger-subtle text-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                </Form>

            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab"
    tabindex="0">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Notification Preferences</h4>
                    <p>
                        Select the notificaitons ou would like to receive via email. Please note
                        that you cannot opt
                        out of receving service
                        messages, such as payment, security or legal notifications.
                    </p>
                    <form class="mb-7">
                        <label for="exampleInputtext5" class="form-label fw-semibold">Email
                            Address*</label>
                        <input type="text" class="form-control" id="exampleInputtext5" placeholder="" required name="email" value="{{ $settings->email }}">
                        <p class="mb-0">Required for notificaitons.</p>
                    </form>
                    <div class="">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-article text-dark d-block fs-7" width="22"
                                        height="22"></i>
                                </div>
                                <div>
                                    <h5 class="fs-4 fw-semibold">Our newsletter</h5>
                                    <p class="mb-0">We'll always let you know about important
                                        changes</p>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-checkbox text-dark d-block fs-7" width="22"
                                        height="22"></i>
                                </div>
                                <div>
                                    <h5 class="fs-4 fw-semibold">Order Confirmation</h5>
                                    <p class="mb-0">You will be notified when customer order any
                                        product</p>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked1" checked>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22"
                                        height="22"></i>
                                </div>
                                <div>
                                    <h5 class="fs-4 fw-semibold">Order Status Changed</h5>
                                    <p class="mb-0">You will be notified when customer make
                                        changes to the order</p>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked2" checked>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-truck-delivery text-dark d-block fs-7" width="22"
                                        height="22"></i>
                                </div>
                                <div>
                                    <h5 class="fs-4 fw-semibold">Order Delivered</h5>
                                    <p class="mb-0">You will be notified once the order is
                                        delivered</p>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked3">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div
                                    class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-mail text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                    <h5 class="fs-4 fw-semibold">Email Notification</h5>
                                    <p class="mb-0">Turn on email notificaiton to get updates
                                        through email</p>
                                </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked4" checked>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Date & Time</h4>
                    <p>Time zones and calendar display settings.</p>
                    <div class="d-flex align-items-center justify-content-between mt-7">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22"
                                    height="22"></i>
                            </div>
                            <div>
                                <p class="mb-0">Time zone</p>
                                <h5 class="fs-4 fw-semibold">(UTC + 02:00) Athens, Bucharet</h5>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Download">
                            <i class="ti ti-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Ignore Tracking</h4>
                    <div class="d-flex align-items-center justify-content-between mt-7">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-player-pause text-dark d-block fs-7" width="22"
                                    height="22"></i>
                            </div>
                            <div>
                                <h5 class="fs-4 fw-semibold">Ignore Browser Tracking</h5>
                                <p class="mb-0">Browser Cookie</p>
                            </div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end gap-3">
                <button class="btn btn-primary">Save</button>
                <button class="btn bg-danger-subtle text-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-bills" role="tabpanel" aria-labelledby="pills-bills-tab" tabindex="0">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Billing Information</h4>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputtext6" class="form-label fw-semibold">Business
                                        Name*</label>
                                    <input type="text" class="form-control" id="exampleInputtext6"
                                        placeholder="Visitor Analytics">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputtext7" class="form-label fw-semibold">Business
                                        Address*</label>
                                    <input type="text" class="form-control" id="exampleInputtext7"
                                        placeholder="">
                                </div>
                                <div class="">
                                    <label for="exampleInputtext8" class="form-label fw-semibold">First Name*</label>
                                    <input type="text" class="form-control" id="exampleInputtext8"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="exampleInputtext9" class="form-label fw-semibold">Business
                                        Sector*</label>
                                    <input type="text" class="form-control" id="exampleInputtext9"
                                        placeholder="Arts, Media & Entertainment">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputtext10" class="form-label fw-semibold">Country*</label>
                                    <input type="text" class="form-control" id="exampleInputtext10"
                                        placeholder="Romania">
                                </div>
                                <div class="">
                                    <label for="exampleInputtext11" class="form-label fw-semibold">Last Name*</label>
                                    <input type="text" class="form-control" id="exampleInputtext11"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Current Plan : <span class="text-success">Executive</span></h4>
                    <p>Thanks for being a premium member and supporting our development.</p>
                    <div class="d-flex align-items-center justify-content-between mt-7 mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-package text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                                <p class="mb-0">Current Plan</p>
                                <h5 class="fs-4 fw-semibold">750.000 Monthly Visits</h5>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Add">
                            <i class="ti ti-circle-plus"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-primary">Change Plan</button>
                        <button class="btn btn-outline-danger">Reset Plan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Payment Method</h4>
                    <p>On 26 December, 2023</p>
                    <div class="d-flex align-items-center justify-content-between mt-7">
                        <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-credit-card text-dark d-block fs-7" width="22"
                                    height="22"></i>
                            </div>
                            <div>
                                <h5 class="fs-4 fw-semibold">Visa</h5>
                                <p class="mb-0 text-dark">*****2102</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                            href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Edit">
                            <i class="ti ti-pencil-minus"></i>
                        </a>
                    </div>
                    <p class="my-2">If you updated your payment method, it will only be dislpayed
                        here after your
                        next billing cycle.</p>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-outline-danger">Cancel Subscription</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end gap-3">
                <button class="btn btn-primary">Save</button>
                <button class="btn bg-danger-subtle text-danger">Cancel</button>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-3">Two-factor Authentication</h4>
                    <div class="d-flex align-items-center justify-content-between pb-7">
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Corporis sapiente
                            sunt earum officiis laboriosam ut.</p>
                        <button class="btn btn-primary">Enable</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                        <div>
                            <h5 class="fs-4 fw-semibold mb-0">Authentication App</h5>
                            <p class="mb-0">Google auth app</p>
                        </div>
                        <button class="btn bg-primary-subtle text-primary">Setup</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                        <div>
                            <h5 class="fs-4 fw-semibold mb-0">Another e-mail</h5>
                            <p class="mb-0">E-mail to send verification link</p>
                        </div>
                        <button class="btn bg-primary-subtle text-primary">Setup</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-3 border-top">
                        <div>
                            <h5 class="fs-4 fw-semibold mb-0">SMS Recovery</h5>
                            <p class="mb-0">Your phone number or something</p>
                        </div>
                        <button class="btn bg-primary-subtle text-primary">Setup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body p-4">
                    <div
                        class="text-bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="ti ti-device-laptop text-primary d-block fs-7" width="22" height="22"></i>
                    </div>
                    <h5 class="fs-5 fw-semibold mb-0">Devices</h5>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem.
                    </p>
                    <button class="btn btn-primary mb-4">Sign out from all devices</button>
                    <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ti ti-device-mobile text-dark d-block fs-7" width="26" height="26"></i>
                            <div>
                                <h5 class="fs-4 fw-semibold mb-0">iPhone 14</h5>
                                <p class="mb-0">London UK, Oct 23 at 1:15 AM</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                            href="javascript:void(0)">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ti ti-device-laptop text-dark d-block fs-7" width="26" height="26"></i>
                            <div>
                                <h5 class="fs-4 fw-semibold mb-0">Macbook Air</h5>
                                <p class="mb-0">Gujarat India, Oct 24 at 3:15 AM</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                            href="javascript:void(0)">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                    </div>
                    <button class="btn bg-primary-subtle text-primary w-100 py-1">Need Help
                        ?</button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-end gap-3">
                <button class="btn btn-primary">Save</button>
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
<x-setting-admin />
</body>

</html>
