<div class="page-wrapper">
    <!--  Header Start -->
    <header class="topbar">
        <div class="with-vertical"><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Header -->
            <!-- ---------------------------------- -->
            <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav">


                                        {{-- show or hide one start  --}}
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="mini-sidebar"
                            href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="full-sidebar"
                            href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>

                    <script>
                        // Function to toggle between mini and full sidebar
                        function toggleSidebar(state) {
                            if (state === 'full-sidebar') {
                                // Hide mini sidebar icon and show full sidebar icon
                                document.getElementById('mini-sidebar').style.display = 'none';
                                document.getElementById('full-sidebar').style.display = 'inline-block';
                            } else {
                                // Hide full sidebar icon and show mini sidebar icon
                                document.getElementById('full-sidebar').style.display = 'none';
                                document.getElementById('mini-sidebar').style.display = 'inline-block';
                            }

                            // Save sidebar state in localStorage
                            localStorage.setItem('sidebar', state);
                        }

                        // Initial state based on localStorage
                        document.addEventListener("DOMContentLoaded", function() {
                            const savedState = localStorage.getItem('sidebar') ||
                            'mini-sidebar'; // Default to 'mini-sidebar' if not set
                            toggleSidebar(savedState);
                        });

                        // Event listeners for toggling sidebar
                        document.getElementById('mini-sidebar').addEventListener('click', function() {
                            toggleSidebar('full-sidebar'); // Switch to full sidebar
                        });

                        document.getElementById('full-sidebar').addEventListener('click', function() {
                            toggleSidebar('mini-sidebar'); // Switch to mini sidebar
                        });
                    </script>


                    {{-- show or hide one end  --}}


                    
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="ti ti-search"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav quick-links d-none d-lg-flex">
                    <!-- ------------------------------- -->
                    <!-- start apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item dropdown hover-dd d-none d-lg-block">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                            Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-8">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../dark/app-chat.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Chat Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New
                                                                    messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-invoice.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    latest invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-contact2.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">2 Unsaved
                                                                    Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-email.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get new
                                                                    emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../dark/page-user-profile.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    User Profile
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">learn
                                                                    more information</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-calendar.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-date.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Calendar App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-contact.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact List Table
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Add new
                                                                    contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-notes.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-application.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Notes Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">To-do
                                                                    and Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                    href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently
                                                    Asked Questions</a>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end pe-4">
                                                    <button class="btn btn-primary">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 ms-n4">
                                    <div class="position-relative p-7 border-start h-100">
                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                        <ul class="">
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/authentication-login.html">Authentication Design</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/authentication-register.html">Register Now</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="authentication-error.html">404 Error Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/app-notes.html">Notes App</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-user-profile.html">User Application</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-account-settings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <!-- ------------------------------- -->
                    <!-- end apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-chat.html">Chat</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-calendar.html">Calendar</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-email.html">Email</a>
                    </li>

                    
                </ul>

                <div class="d-block d-lg-none">
                    <img src="../assets/images/logos/logo.png" width="180" alt="" />
                </div>
                <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="p-2">
                        <i class="ti ti-dots fs-7"></i>
                    </span>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0)"
                            class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                            aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">





                                                        {{-- Dark mode amd light mode  starts --}}
                            <li class="nav-item" style="padding-top: 4px;">
                                <a class="nav-link moon dark-layout nav-link nav-icon-hover" href="javascript:void(0)"
                                    id="dark-layout">
                                    <i class="ti ti-moon moon"></i>
                                </a>
                                <a class="nav-link sun light-layout nav-link nav-icon-hover" href="javascript:void(0)"
                                    id="light-layout">
                                    <i class="ti ti-sun sun"></i>
                                </a>
                            </li>


                            <script>
                                // Function to set the theme and toggle icons
                                function setTheme(theme) {
                                    if (theme === 'dark') {
                                        document.body.classList.add('dark-mode');
                                        document.body.classList.remove('light-mode');
                                        document.getElementById('dark-layout').style.display = 'none'; // Hide dark icon
                                        document.getElementById('light-layout').style.display = 'inline-block'; // Show light icon
                                        localStorage.setItem('theme', 'dark'); // Save preference
                                    } else {
                                        document.body.classList.add('light-mode');
                                        document.body.classList.remove('dark-mode');
                                        document.getElementById('dark-layout').style.display = 'inline-block'; // Show dark icon
                                        document.getElementById('light-layout').style.display = 'none'; // Hide light icon
                                        localStorage.setItem('theme', 'light'); // Save preference
                                    }
                                }

                                // Load saved theme on page load
                                document.addEventListener("DOMContentLoaded", function() {
                                    const savedTheme = localStorage.getItem('theme') || 'light';
                                    setTheme(savedTheme); // Set the initial theme based on the saved value
                                });

                                // Add event listeners to switch themes when icons are clicked
                                document.getElementById('dark-layout').addEventListener('click', function() {
                                    setTheme('dark');
                                });
                                document.getElementById('light-layout').addEventListener('click', function() {
                                    setTheme('light');
                                });
                            </script>


                            {{-- Dark mode amd light mode  ends --}}
                            <!-- ------------------------------- -->
                            <!-- start language Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/svgs/icon-flag-en.svg" alt="" width="20px"
                                        height="20px" class="rounded-circle object-fit-cover round-20" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-en.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">English (UK)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-cn.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-fr.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">français (French)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-sa.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">عربي (Arabic)</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end language Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start shopping cart Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item">
                                <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">
                                    <i class="ti ti-basket"></i>
                                    <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                </a>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end shopping cart Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ auth()->user()->image }}" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you new
                                                    message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-3.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your
                                                    earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-4.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new
                                                    tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-5.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted from
                                                    account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ auth()->user()->image }}" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{ auth()->user()->image }}" class="rounded-circle"
                                                width="35" height="35" alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{ auth()->user()->image }}" class="rounded-circle"
                                                width="80" height="80" alt="" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
                                                <span class="mb-1 d-block">{{ auth()->user()->role }}</span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="{{route('vendor-profile')}}"
                                                class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-account.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Vendor Account</span>
                                                </div>
                                            </a>
                                            <a href="{{ route('vendor-edit-profile') }}"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-inbox.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">Edit profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Vendor
                                                        settings</span>
                                                </div>
                                            </a>
                                            <a href="../dark/app-notes.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-tasks.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                    <span class="fs-2 d-block text-body-secondary">To-do and Daily
                                                        Tasks</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">


                                            <a href="{{ route('logout') }}" class="btn btn-outline-primary">Log
                                                Out</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ---------------------------------- -->
            <!-- End Vertical Layout Header -->
            <!-- ---------------------------------- -->

            <!-- ------------------------------- -->
            <!-- apps Dropdown in Small screen -->
            <!-- ------------------------------- -->
            <!--  Mobilenavbar -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <nav class="sidebar-nav scroll-sidebar">
                    <div class="offcanvas-header justify-content-between">
                        <img src="../assets/images/logos/favicon.ico" alt="" class="img-fluid" />
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" data-simplebar="" data-simplebar style="height: calc(100vh - 80px)">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-apps"></i>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level my-3">
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-chat.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-chat.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">New messages
                                                    arrived</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-invoice.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-invoice.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get latest
                                                    invoice</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-cotact.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-mobile.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">2 Unsaved
                                                    Contacts</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-email.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/page-user-profile.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-cart.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">learn more
                                                    information</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-calendar.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-date.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-contact2.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-lifebuoy.svg" alt=""
                                                    class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="../dark/app-notes.html" class="d-flex align-items-center">
                                            <div
                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="../assets/images/svgs/icon-dd-application.svg"
                                                    alt="" class="img-fluid" width="24"
                                                    height="24" />
                                            </div>
                                            <div class="d-inline-block">
                                                <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                <span class="fs-2 d-block fw-normal text-muted">To-do and Daily
                                                    tasks</span>
                                            </div>
                                        </a>
                                    </li>
                                    <ul class="px-8 mt-7 mb-4">
                                        <li class="sidebar-item mb-3">
                                            <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="../dark/page-pricing.html">Pricing
                                                Page</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark"
                                                href="../dark/authentication-login.html">Authentication Design</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark"
                                                href="../dark/authentication-register.html">Register Now</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark"
                                                href="../dark/authentication-error.html">404 Error Page</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="../dark/app-notes.html">Notes
                                                App</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark"
                                                href="../dark/page-user-profile.html">User Application</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark"
                                                href="../dark/page-account-settings.html">Account Settings</a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../dark/app-chat.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-message-dots"></i>
                                    </span>
                                    <span class="hide-menu">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../dark/app-calendar.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <span class="hide-menu">Calendar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../dark/app-email.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <span class="hide-menu">Email</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
        <div class="app-header with-horizontal">
            <nav class="navbar navbar-expand-xl container-fluid p-0">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                        <a href="../dark/index.html" class="text-nowrap nav-link">
                            <img src="../assets/images/logos/logo.png" class="dark-logo" width="180"
                                alt="" />
                            <img src="../assets/images/logos/light-logo.svg" class="light-logo" width="180"
                                alt="" />
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="ti ti-search"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav quick-links d-none d-xl-flex">
                    <!-- ------------------------------- -->
                    <!-- start apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item dropdown hover-dd d-none d-lg-block">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">
                            Apps<span class="mt-1"><i class="ti ti-chevron-down fs-3"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-8">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../dark/app-chat.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-chat.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Chat Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New
                                                                    messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-invoice.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    latest invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-contact2.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-mobile.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">2
                                                                    Unsaved Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-email.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-message-box.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get new
                                                                    emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../dark/page-user-profile.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-cart.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    User Profile
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">learn
                                                                    more information</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-calendar.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-date.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Calendar App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-contact.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact List Table
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Add new
                                                                    contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="../dark/app-notes.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="../assets/images/svgs/icon-dd-application.svg"
                                                                    alt="" class="img-fluid" width="24"
                                                                    height="24" />
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Notes Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">To-do
                                                                    and Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold text-dark d-flex align-items-center lh-1"
                                                    href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently
                                                    Asked Questions</a>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end pe-4">
                                                    <button class="btn btn-primary">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 ms-n4">
                                    <div class="position-relative p-7 border-start h-100">
                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                        <ul class="">
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/authentication-login.html">Authentication Design</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/authentication-register.html">Register Now</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="authentication-error.html">404 Error Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/app-notes.html">Notes App</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-user-profile.html">User Application</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../dark/page-account-settings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <!-- ------------------------------- -->
                    <!-- end apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-chat.html">Chat</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-calendar.html">Calendar</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="../dark/app-email.html">Email</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link moon dark-layout" href="javascript:void(0)" style="display: none;">
                            <iconify-icon icon="solar:moon-line-duotone" class="moon fs-7"
                                style="display: none;"></iconify-icon>
                        </a>
                        <a class="nav-link sun light-layout" href="javascript:void(0)" style="display: flex;">
                            <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-7"
                                style="display: flex;"></iconify-icon>
                        </a>
                        <a class="nav-link clear" href="javascript:void(0)" style="display: none;">
                            <iconify-icon icon="bi:trash-duotone" class="clear fs-7"
                                style="display: none;"></iconify-icon>
                        </a>
                    </li>
                </ul>
                <div class="d-block d-xl-none">
                    <a href="../dark/index.html" class="text-nowrap nav-link">
                        <img src="../assets/images/logos/logo.png" width="180" alt="" />
                    </a>
                </div>
                <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="p-2">
                        <i class="ti ti-dots fs-7"></i>
                    </span>
                </a>


                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                        <a href="javascript:void(0)"
                            class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                            aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">


                            <!-- ------------------------------- -->
                            <!-- start language Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/svgs/icon-flag-en.svg" alt="" width="20px"
                                        height="20px" class="rounded-circle object-fit-cover round-20" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-en.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">English (UK)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-cn.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">中国人 (Chinese)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-fr.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">français (French)</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                            <div class="position-relative">
                                                <img src="../assets/images/svgs/icon-flag-sa.svg" alt=""
                                                    width="20px" height="20px"
                                                    class="rounded-circle object-fit-cover round-20" />
                                            </div>
                                            <p class="mb-0 fs-3">عربي (Arabic)</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end language Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start shopping cart Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item">
                                <a class="nav-link position-relative nav-icon-hover" href="javascript:void(0)"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">
                                    <i class="ti ti-basket"></i>
                                    <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                </a>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end shopping cart Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ auth()->user()->image }}" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-2.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you new
                                                    message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-3.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your
                                                    earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-4.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new
                                                    tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="../assets/images/profile/user-5.jpg" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted from
                                                    account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{ auth()->user()->image }}" alt="user"
                                                    class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{ auth()->user()->image }}" class="rounded-circle"
                                                width="35" height="35" alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{ auth()->user()->image }}" class="rounded-circle"
                                                width="80" height="80" alt="" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
                                                <span class="mb-1 d-block">{{ auth()->user()->role }}</span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="../dark/page-user-profile.html"
                                                class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-account.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Account
                                                        Settings</span>
                                                </div>
                                            </a>
                                            <a href="../dark/app-email.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-inbox.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Messages &
                                                        Emails</span>
                                                </div>
                                            </a>
                                            <a href="../dark/app-notes.html"
                                                class="py-8 px-7 d-flex align-items-center">
                                                <span
                                                    class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="../assets/images/svgs/icon-tasks.svg" alt=""
                                                        width="24" height="24" />
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                    <span class="fs-2 d-block text-body-secondary">To-do and Daily
                                                        Tasks</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                            <div
                                                class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited Access</h5>
                                                        <button class="btn btn-primary">Upgrade</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="m-n4 unlimited-img">
                                                            <img src="../assets/images/backgrounds/unlimited-bg.png"
                                                                alt="" class="w-100" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="../dark/authentication-login.html"
                                                class="btn btn-outline-primary">Log Out</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <!--  Header End -->



    <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar container-fluid">
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Home -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-home-2"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/index.html" class="sidebar-link">
                                    <i class="ti ti-aperture"></i>
                                    <span class="hide-menu">Modern</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/index2.html" class="sidebar-link">
                                    <i class="ti ti-shopping-cart"></i>
                                    <span class="hide-menu">eCommerce</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/index3.html" class="sidebar-link">
                                    <i class="ti ti-currency-dollar"></i>
                                    <span class="hide-menu">NFT</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/index4.html" class="sidebar-link">
                                    <i class="ti ti-cpu"></i>
                                    <span class="hide-menu">Crypto</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/index5.html" class="sidebar-link">
                                    <i class="ti ti-activity-heartbeat"></i>
                                    <span class="hide-menu">General</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/index6.html" class="sidebar-link">
                                    <i class="ti ti-playlist"></i>
                                    <span class="hide-menu">Music</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Apps -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Apps</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-archive"></i>
                            </span>
                            <span class="hide-menu">Apps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/app-calendar.html" class="sidebar-link">
                                    <i class="ti ti-calendar"></i>
                                    <span class="hide-menu">Calendar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/apps-kanban.html" class="sidebar-link">
                                    <i class="ti ti-layout-kanban"></i>
                                    <span class="hide-menu">Kanban</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/app-chat.html" class="sidebar-link">
                                    <i class="ti ti-message-dots"></i>
                                    <span class="hide-menu">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../dark/app-email.html" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <span class="hide-menu">Email</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/app-contact.html" class="sidebar-link">
                                    <i class="ti ti-phone"></i>
                                    <span class="hide-menu">Contact Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/app-contact2.html" class="sidebar-link">
                                    <i class="ti ti-list-details"></i>
                                    <span class="hide-menu">Contact List</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/app-notes.html" class="sidebar-link">
                                    <i class="ti ti-notes"></i>
                                    <span class="hide-menu">Notes</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/app-invoice.html" class="sidebar-link">
                                    <i class="ti ti-file-text"></i>
                                    <span class="hide-menu">Invoice</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/page-user-profile.html" class="sidebar-link">
                                    <i class="ti ti-user-circle"></i>
                                    <span class="hide-menu">User Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/blog-posts.html" class="sidebar-link">
                                    <i class="ti ti-article"></i>
                                    <span class="hide-menu">Posts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/blog-detail.html" class="sidebar-link">
                                    <i class="ti ti-details"></i>
                                    <span class="hide-menu">Detail</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/eco-shop.html" class="sidebar-link">
                                    <i class="ti ti-shopping-cart"></i>
                                    <span class="hide-menu">Shop</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/eco-shop-detail.html" class="sidebar-link">
                                    <i class="ti ti-basket"></i>
                                    <span class="hide-menu">Shop Detail</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/eco-product-list.html" class="sidebar-link">
                                    <i class="ti ti-list-check"></i>
                                    <span class="hide-menu">List</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/eco-checkout.html" class="sidebar-link">
                                    <i class="ti ti-brand-shopee"></i>
                                    <span class="hide-menu">Checkout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- PAGES -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">PAGES</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-notebook"></i>
                            </span>
                            <span class="hide-menu">Pages</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/page-faq.html" class="sidebar-link">
                                    <i class="ti ti-help"></i>
                                    <span class="hide-menu">FAQ</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/page-account-settings.html" class="sidebar-link">
                                    <i class="ti ti-user-circle"></i>
                                    <span class="hide-menu">Account Setting</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/page-pricing.html" class="sidebar-link">
                                    <i class="ti ti-currency-dollar"></i>
                                    <span class="hide-menu">Pricing</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/widgets-cards.html" class="sidebar-link">
                                    <i class="ti ti-cards"></i>
                                    <span class="hide-menu">Card</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/widgets-banners.html" class="sidebar-link">
                                    <i class="ti ti-ad"></i>
                                    <span class="hide-menu">Banner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/widgets-charts.html" class="sidebar-link">
                                    <i class="ti ti-chart-bar"></i>
                                    <span class="hide-menu">Charts</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../../../landingpage/index.html" class="sidebar-link">
                                    <i class="ti ti-app-window"></i>
                                    <span class="hide-menu">Landing Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- UI -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">UI</span>
                    </li>
                    <!-- =================== -->
                    <!-- UI Elements -->
                    <!-- =================== -->
                    <li class="sidebar-item mega-dropdown">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-layout-grid"></i>
                            </span>
                            <span class="hide-menu">UI</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/ui-accordian.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Accordian</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-badge.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Badge</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-buttons.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-dropdowns.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dropdowns</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-modals.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Modals</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-tab.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Tab</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-tooltip-popover.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Tooltip & Popover</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-notification.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Notification</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-progressbar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Progressbar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-pagination.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Pagination</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-typography.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Typography</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-bootstrap-ui.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap UI</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-breadcrumb.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-offcanvas.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Offcanvas</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-lists.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Lists</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-grid.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-carousel.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Carousel</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-scrollspy.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Scrollspy</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-spinner.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Spinner</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/ui-link.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Link</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Forms -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Forms</span>
                    </li>
                    <!-- =================== -->
                    <!-- Forms -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link two-column has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-file-text"></i>
                            </span>
                            <span class="hide-menu">Forms</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <!-- form elements -->
                            <li class="sidebar-item">
                                <a href="../dark/form-inputs.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Forms Input</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-input-groups.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Input Groups</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-input-grid.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Input Grid</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-checkbox-radio.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Checkbox & Radios</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-bootstrap-touchspin.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap Touchspin</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-bootstrap-switch.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bootstrap Switch</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-select2.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Select2</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-dual-listbox.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dual Listbox</span>
                                </a>
                            </li>
                            <!-- form inputs -->
                            <li class="sidebar-item">
                                <a href="../dark/form-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Form</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-vertical.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Vertical</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-horizontal.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Horizontal</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-actions.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Actions</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-row-separator.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Row Separator</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-bordered.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Bordered</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/form-detail.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Detail</span>
                                </a>
                            </li>
                            <!-- form wizard -->
                            <li class="sidebar-item">
                                <a href="../dark/form-wizard.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Form Wizard</span>
                                </a>
                            </li>
                            <!-- Quill Editor -->
                            <li class="sidebar-item">
                                <a href="../dark/form-editor-quill.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Quill Editor</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Tables -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Tables</span>
                    </li>
                    <!-- =================== -->
                    <!-- Bootstrap Table -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-layout-sidebar"></i>
                            </span>
                            <span class="hide-menu">Tables</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/table-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-dark-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Dark Basic Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-sizing.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Sizing Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-layout-coloured.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Coloured Table</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-datatable-basic.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Basic Initialisation</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-datatable-api.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">API</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/table-datatable-advanced.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Advanced Initialisation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Charts -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Charts</span>
                    </li>
                    <!-- =================== -->
                    <!-- Apex Chart -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-chart-pie"></i>
                            </span>
                            <span class="hide-menu">Charts</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-line.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Line Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-area.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Area Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-bar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Bar Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-pie.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Pie Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-radial.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Radial Chart</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../dark/chart-apex-radar.html" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Radar Chart</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================= -->
                    <!-- Icons -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Icons</span>
                    </li>
                    <!-- =================== -->
                    <!-- Tabler Icon -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="../dark/icon-tabler.html"
                            aria-expanded="false">
                            <span class="rounded-3">
                                <i class="ti ti-archive"></i>
                            </span>
                            <span class="hide-menu">Icon</span>
                        </a>
                    </li>
                    <!-- multi level -->
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                            <span class="rounded-3">
                                <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"
                                    class="ti"></iconify-icon>
                            </span>
                            <span class="hide-menu">Multi DD</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 1</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link has-arrow">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 2</span>
                                </a>
                                <ul aria-expanded="false" class="collapse second-level">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <i class="ti ti-circle"></i>
                                            <span class="hide-menu">Page 2.3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                    <i class="ti ti-circle"></i>
                                    <span class="hide-menu">Page 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->

    </aside>
