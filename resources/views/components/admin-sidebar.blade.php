<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>Ozpos {{ auth()->user()->role }}</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
</head>


<body>
    <!-- Preloader -->
    <div class="preloader" style="background-color: #2A3447;">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>


    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical">
            <div><!-- ---------------------------------- -->



                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="../admin" class="text-nowrap logo-img">
                        <!-- dark logo needed here -->
                        <img src="../assets/images/logos/logo.png" width="180" class="dark-logo" alt="Logo-Dark" />
                        <img src="../assets/images/logos/logo.png" class="light-logo" alt="Logo-light"
                            height = "45px" />
                    </a>
                    <a href="javascript:void(0)"
                        class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                        <i class="ti ti-x"></i>
                    </a>
                </div>
                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/admin" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('system-user') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                                <span class="hide-menu">System User</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('system-user2') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-currency-dollar"></i>
                                </span>
                                <span class="hide-menu">Empty Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('empty') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cpu"></i>
                                </span>
                                <span class="hide-menu">empty page</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/index5.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-activity-heartbeat"></i>
                                </span>
                                <span class="hide-menu">General</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/index6.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-playlist"></i>
                                </span>
                                <span class="hide-menu">Music</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Apps -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Apps</span>
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
                            <a class="sidebar-link" href="../dark/apps-kanban.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-kanban"></i>
                                </span>
                                <span class="hide-menu">Kanban</span>
                            </a>
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
                            <a class="sidebar-link" href="../dark/app-email.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-mail"></i>
                                </span>
                                <span class="hide-menu">Email</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/app-notes.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-notes"></i>
                                </span>
                                <span class="hide-menu">Notes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/app-contact.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-phone"></i>
                                </span>
                                <span class="hide-menu">Contact Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/app-contact2.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-list-details"></i>
                                </span>
                                <span class="hide-menu">Contact List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/app-invoice.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-text"></i>
                                </span>
                                <span class="hide-menu">Invoice</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/page-user-profile.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-circle"></i>
                                </span>
                                <span class="hide-menu">User Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-chart-donut-3"></i>
                                </span>
                                <span class="hide-menu">Blog</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/blog-posts.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Posts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/blog-detail.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-basket"></i>
                                </span>
                                <span class="hide-menu">Ecommerce</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/eco-shop.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Shop</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/eco-shop-detail.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Details</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/eco-product-list.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">List</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/eco-checkout.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Checkout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- PAGES -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">PAGES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/page-pricing.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-currency-dollar"></i>
                                </span>
                                <span class="hide-menu">Pricing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/page-faq.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-help"></i>
                                </span>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/page-account-settings.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-circle"></i>
                                </span>
                                <span class="hide-menu">Account Setting</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../landingpage/index.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-app-window"></i>
                                </span>
                                <span class="hide-menu">Landing Page</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-layout"></i>
                                </span>
                                <span class="hide-menu">Widgets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-cards.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-banners.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Banner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-charts.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Charts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-feeds.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Feed Widgets</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-apps.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Apps Widgets</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/widgets-data.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Data Widgets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- UI -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">UI</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- UI Elements -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-layout-grid"></i>
                                </span>
                                <span class="hide-menu">UI Elements</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/ui-accordian.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Accordian</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-badge.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Badge</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-buttons.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-dropdowns.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-modals.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-tab.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-tooltip-popover.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tooltip & Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-notification.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-progressbar.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-pagination.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Pagination</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-typography.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-bootstrap-ui.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-breadcrumb.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-offcanvas.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-lists.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Lists</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-grid.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-carousel.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-scrollspy.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-spinner.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="../dark/ui-link.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Link</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Cards -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Cards</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/ui-cards.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Basic Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-card-customs.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Custom Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-card-weather.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Weather Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/ui-card-draggable.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Draggable Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Component -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-components"></i>
                                </span>
                                <span class="hide-menu">Component</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/component-sweetalert.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/component-nestable.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/component-noui-slider.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Noui slider</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/component-rating.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Rating</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/component-toastr.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Toastr</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Forms -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Forms</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Form Elements -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-text"></i>
                                </span>
                                <span class="hide-menu">Form Elements</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/form-inputs.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Forms Input</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-input-groups.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Input Groups</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-input-grid.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Input Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-checkbox-radio.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Checkbox & Radios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-bootstrap-touchspin.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-bootstrap-switch.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Switch</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-select2.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="../dark/form-dual-listbox.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dual Listbox</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Form Addons -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-qrcode"></i>
                                </span>
                                <span class="hide-menu">Form Addons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/form-paginator.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Paginator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-img-cropper.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-dropzone.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-mask.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Mask</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-typeahead.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Form Typehead</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Form Validation -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Form Validation</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/form-bootstrap-validation.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Validation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-custom-validation.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Custom Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Form Pickers -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-pencil"></i>
                                </span>
                                <span class="hide-menu">Form Pickers</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/form-picker-colorpicker.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Colorpicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-picker-datetimepicker.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Datetimepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Rangepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-picker-bootstrap-datepicker.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bootstrap Datepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-picker-material-datepicker.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Material Datepicker</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Form Editor -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-dna"></i>
                                </span>
                                <span class="hide-menu">Form Editor</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/form-editor-ckeditor.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Ck Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-editor-quill.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Quill Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-editor-summernote.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Summernote Editor</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/form-editor-tinymce.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Tinymce Edtor</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Form Input -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-basic.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Basic Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-vertical.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-box-align-left"></i>
                                </span>
                                <span class="hide-menu">Form Vertical</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-horizontal.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-box-align-bottom"></i>
                                </span>
                                <span class="hide-menu">Form Horizontal</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-actions.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-export"></i>
                                </span>
                                <span class="hide-menu">Form Actions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-row-separator.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-separator-horizontal"></i>
                                </span>
                                <span class="hide-menu">Row Separator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-bordered.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-outer"></i>
                                </span>
                                <span class="hide-menu">Form Bordered</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-detail.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Form Detail</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-striped-row.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-analytics"></i>
                                </span>
                                <span class="hide-menu">Striped Rows</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-floating-input.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file-dots"></i>
                                </span>
                                <span class="hide-menu">Form Floating Input</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Form Wizard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-wizard.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-files"></i>
                                </span>
                                <span class="hide-menu">Form Wizard</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Form Repeater -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/form-repeater.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-topology-star-3"></i>
                                </span>
                                <span class="hide-menu">Form Repeater</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Tables -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Tables</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Bootstrap Table -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-layout-sidebar"></i>
                                </span>
                                <span class="hide-menu">Bootstrap Table</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/table-basic.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/table-dark-basic.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Dark Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/table-sizing.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Sizing Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="../dark/table-layout-coloured.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Coloured Table</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Datatable -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-air-conditioning-disabled"></i>
                                </span>
                                <span class="hide-menu">Datatables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/table-datatable-basic.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Basic Initialisation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/table-datatable-api.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">API</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/table-datatable-advanced.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Advanced Initialisation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Table Jsgrid -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/table-jsgrid.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-top"></i>
                                </span>
                                <span class="hide-menu">Table Jsgrid</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Table Responsive -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/table-responsive.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-style"></i>
                                </span>
                                <span class="hide-menu">Table Responsive</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Table Footable -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/table-footable.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-none"></i>
                                </span>
                                <span class="hide-menu">Table Footable</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Table Editable -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/table-editable.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-all"></i>
                                </span>
                                <span class="hide-menu">Table Editable</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Table Bootstrap -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../dark/table-bootstrap.html" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-border-outer"></i>
                                </span>
                                <span class="hide-menu">Table Bootstrap</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Charts -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Charts</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Apex Chart -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-chart-pie"></i>
                                </span>
                                <span class="hide-menu">Apex Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/chart-apex-line.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Line Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/chart-apex-area.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Area Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/chart-apex-bar.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/chart-apex-pie.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Pie Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/chart-apex-radial.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Radial Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="../dark/chart-apex-radar.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Radar Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Sample Pages -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Sample Pages</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-file"></i>
                                </span>
                                <span class="hide-menu">Sample Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/pages-animation.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Animation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/pages-search-result.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Search Result</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/pages-gallery.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Gallery</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/pages-treeview.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Treeview</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/pages-block-ui.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Block-Ui</span>
                                    </a>
                                </li>
                                <li class="sidebar-item mb-3">
                                    <a href="../dark/pages-session-timeout.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Session Timeout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Icons -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Icons</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Tabler Icon -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="../dark/icon-tabler.html"
                                aria-expanded="false">
                                <span class="rounded-3">
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Tabler Icon</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- AUTH -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AUTH</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="../dark/authentication-error.html"
                                aria-expanded="false">
                                <span class="rounded-3">
                                    <i class="ti ti-alert-circle"></i>
                                </span>
                                <span class="hide-menu">Error</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-login.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Side Login</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-login2.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Login</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-register.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Side Register</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-register2.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-rotate"></i>
                                </span>
                                <span class="hide-menu">Forgot Password</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-forgot-password.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Side Forgot Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-forgot-password2.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Forgot Password</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-zoom-code"></i>
                                </span>
                                <span class="hide-menu">Two Steps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-two-steps.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Side Two Steps</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="../dark/authentication-two-steps2.html" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Boxed Two Steps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="../dark/authentication-maintenance.html"
                                aria-expanded="false">
                                <span class="rounded-3">
                                    <i class="ti ti-settings"></i>
                                </span>
                                <span class="hide-menu">Maintenance</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- OTHER -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">OTHER</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-box-multiple"></i>
                                </span>
                                <span class="hide-menu">Menu Level</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Level 1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-circle"></i>
                                        </div>
                                        <span class="hide-menu">Level 1.1</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse two-level">
                                        <li class="sidebar-item">
                                            <a href="#" class="sidebar-link">
                                                <div
                                                    class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-circle"></i>
                                                </div>
                                                <span class="hide-menu">Level 2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                                aria-expanded="false">
                                                <div
                                                    class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-circle"></i>
                                                </div>
                                                <span class="hide-menu">Level 2.1</span>
                                            </a>
                                            <ul aria-expanded="false" class="collapse three-level">
                                                <li class="sidebar-item">
                                                    <a href="#" class="sidebar-link">
                                                        <div
                                                            class="round-16 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-circle"></i>
                                                        </div>
                                                        <span class="hide-menu">Level 3</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item">
                                                    <a href="#" class="sidebar-link">
                                                        <div
                                                            class="round-16 d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-circle"></i>
                                                        </div>
                                                        <span class="hide-menu">Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-ban"></i>
                                </span>
                                <span class="hide-menu">Disabled</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#sub" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-star"></i>
                                </span>
                                <div class="lh-base">
                                    <span class="hide-menu">SubCaption</span>
                                    <span class="hide-menu fs-2">This is the sutitle</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-flex">
                                        <i class="ti ti-award"></i>
                                    </span>
                                    <span class="hide-menu">Chip</span>
                                </div>
                                <div class="hide-menu">
                                    <span
                                        class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link justify-content-between" href="#outlined"
                                aria-expanded="false">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="d-flex">
                                        <i class="ti ti-mood-smile"></i>
                                    </span>
                                    <span class="hide-menu">Outlined</span>
                                </div>
                                <span
                                    class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-star"></i>
                                </span>
                                <span class="hide-menu">External Link</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded sidebar-ad mt-3">
                    <div class="hstack gap-3">
                        <div class="john-img">
                            <img src="{{ auth()->user()->image }}" class="rounded-circle" width="40"
                                height="40" alt="" />
                        </div>
                        <div class="john-title">
                            <h6 class="mb-0 fs-4 fw-semibold">{{ auth()->user()->name }}</h6>
                            <span class="fs-2">{{ auth()->user()->role }}</span>
                        </div>
                        <a href="{{ route('logout') }}" class="border-0 bg-transparent text-primary ms-auto"
                            tabindex="0" aria-label="Logout" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Logout">
                            <i class="ti ti-power fs-6"></i>
                        </a>
                    </div>
                </div>

                <!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
            </div>
        </aside>
        <!--  Sidebar End -->
