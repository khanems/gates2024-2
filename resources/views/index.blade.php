<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme">
  <head>
    <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href="../assets/images/logos/favicon.png"
/>

<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/styles.css" />

    <title>Ozpos {{ auth()->user()->role }}</title>
    <!-- Owl Carousel  -->
    <link
      rel="stylesheet"
      href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css"
    />
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img
        src="../assets/images/logos/favicon.png"
        alt="loader"
        class="lds-ripple img-fluid"
      />
    </div>
    <div id="main-wrapper">
      <!-- Sidebar Start -->
      <aside class="left-sidebar with-vertical">
        <div><!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="brand-logo d-flex align-items-center justify-content-between">
  <a href="../dark/index.html" class="text-nowrap logo-img">
    <img
      src="../assets/images/logos/dark-logo.svg"
      class="dark-logo"
      alt="Logo-Dark"
    />
    <img
      src="../assets/images/logos/logo.png"
      class="light-logo"
      alt="Logo-light"
      height = "45px"
    />
  </a>
  <a
    href="javascript:void(0)"
    class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none"
  >
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
      <a class="sidebar-link" href="../dark/index.html" aria-expanded="false">
        <span>
          <i class="ti ti-aperture"></i>
        </span>
        <span class="hide-menu">Modern</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="../dark/index2.html" aria-expanded="false">
        <span>
          <i class="ti ti-shopping-cart"></i>
        </span>
        <span class="hide-menu">eCommerce</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="../dark/index3.html" aria-expanded="false">
        <span>
          <i class="ti ti-currency-dollar"></i>
        </span>
        <span class="hide-menu">NFT</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="../dark/index4.html" aria-expanded="false">
        <span>
          <i class="ti ti-cpu"></i>
        </span>
        <span class="hide-menu">Crypto</span>
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
      <a
        class="sidebar-link"
        href="../dark/page-user-profile.html"
        aria-expanded="false"
      >
        <span>
          <i class="ti ti-user-circle"></i>
        </span>
        <span class="hide-menu">User Profile</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-chart-donut-3"></i>
        </span>
        <span class="hide-menu">Blog</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/blog-posts.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Posts</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/blog-detail.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Details</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-basket"></i>
        </span>
        <span class="hide-menu">Ecommerce</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/eco-shop.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Shop</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/eco-shop-detail.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Details</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/eco-product-list.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">List</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/eco-checkout.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link"
        href="../dark/page-account-settings.html"
        aria-expanded="false"
      >
        <span>
          <i class="ti ti-user-circle"></i>
        </span>
        <span class="hide-menu">Account Setting</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link"
        href="../landingpage/index.html"
        aria-expanded="false"
      >
        <span>
          <i class="ti ti-app-window"></i>
        </span>
        <span class="hide-menu">Landing Page</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-layout"></i>
        </span>
        <span class="hide-menu">Widgets</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/widgets-cards.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Cards</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/widgets-banners.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Banner</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/widgets-charts.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Charts</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/widgets-feeds.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Feed Widgets</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/widgets-apps.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Apps Widgets</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/widgets-data.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-layout-grid"></i>
        </span>
        <span class="hide-menu">UI Elements</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/ui-accordian.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Accordian</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-badge.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Badge</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-buttons.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Buttons</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-dropdowns.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Dropdowns</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-modals.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Modals</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-tab.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Tab</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-tooltip-popover.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Tooltip & Popover</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-notification.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Notification</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-progressbar.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Progressbar</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-pagination.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Pagination</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-typography.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Typography</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-bootstrap-ui.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap UI</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-breadcrumb.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Breadcrumb</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-offcanvas.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Offcanvas</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-lists.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Lists</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-grid.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Grid</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-carousel.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Carousel</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-scrollspy.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Scrollspy</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-spinner.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Spinner</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="../dark/ui-link.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-cards"></i>
        </span>
        <span class="hide-menu">Cards</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/ui-cards.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Basic Cards</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-card-customs.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Custom Cards</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-card-weather.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Weather Cards</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/ui-card-draggable.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-components"></i>
        </span>
        <span class="hide-menu">Component</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/component-sweetalert.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Sweet Alert</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/component-nestable.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Nestable</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/component-noui-slider.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Noui slider</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/component-rating.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Rating</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/component-toastr.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-file-text"></i>
        </span>
        <span class="hide-menu">Form Elements</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/form-inputs.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Forms Input</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-input-groups.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Input Groups</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-input-grid.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Input Grid</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-checkbox-radio.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Checkbox & Radios</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-bootstrap-touchspin.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap Touchspin</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-bootstrap-switch.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap Switch</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-select2.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Select2</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="../dark/form-dual-listbox.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-qrcode"></i>
        </span>
        <span class="hide-menu">Form Addons</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/form-paginator.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Paginator</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-img-cropper.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Image Cropper</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-dropzone.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Dropzone</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-mask.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Form Mask</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-typeahead.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-alert-circle"></i>
        </span>
        <span class="hide-menu">Form Validation</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/form-bootstrap-validation.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap Validation</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-custom-validation.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-file-pencil"></i>
        </span>
        <span class="hide-menu">Form Pickers</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/form-picker-colorpicker.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Colorpicker</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-picker-datetimepicker.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Datetimepicker</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a
            href="../dark/form-picker-bootstrap-rangepicker.html"
            class="sidebar-link"
          >
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap Rangepicker</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a
            href="../dark/form-picker-bootstrap-datepicker.html"
            class="sidebar-link"
          >
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bootstrap Datepicker</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-picker-material-datepicker.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-dna"></i>
        </span>
        <span class="hide-menu">Form Editor</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/form-editor-ckeditor.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Ck Editor</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-editor-quill.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Quill Editor</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-editor-summernote.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Summernote Editor</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/form-editor-tinymce.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link"
        href="../dark/form-horizontal.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link"
        href="../dark/form-row-separator.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link"
        href="../dark/form-striped-row.html"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-file-analytics"></i>
        </span>
        <span class="hide-menu">Striped Rows</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link"
        href="../dark/form-floating-input.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-layout-sidebar"></i>
        </span>
        <span class="hide-menu">Bootstrap Table</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/table-basic.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Basic Table</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/table-dark-basic.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Dark Basic Table</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/table-sizing.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Sizing Table</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="../dark/table-layout-coloured.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-air-conditioning-disabled"></i>
        </span>
        <span class="hide-menu">Datatables</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/table-datatable-basic.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Basic Initialisation</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/table-datatable-api.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">API</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/table-datatable-advanced.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link"
        href="../dark/table-responsive.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link"
        href="../dark/table-footable.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link"
        href="../dark/table-editable.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link"
        href="../dark/table-bootstrap.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-chart-pie"></i>
        </span>
        <span class="hide-menu">Apex Charts</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/chart-apex-line.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Line Chart</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/chart-apex-area.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Area Chart</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/chart-apex-bar.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Bar Chart</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/chart-apex-pie.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Pie Chart</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/chart-apex-radial.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Radial Chart</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="../dark/chart-apex-radar.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-file"></i>
        </span>
        <span class="hide-menu">Sample Pages</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/pages-animation.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Animation</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/pages-search-result.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Search Result</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/pages-gallery.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Gallery</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/pages-treeview.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Treeview</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/pages-block-ui.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Block-Ui</span>
          </a>
        </li>
        <li class="sidebar-item mb-3">
          <a href="../dark/pages-session-timeout.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
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
      <a
        class="sidebar-link sidebar-link"
        href="../dark/icon-tabler.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link sidebar-link"
        href="../dark/authentication-error.html"
        aria-expanded="false"
      >
        <span class="rounded-3">
          <i class="ti ti-alert-circle"></i>
        </span>
        <span class="hide-menu">Error</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-login"></i>
        </span>
        <span class="hide-menu">Login</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/authentication-login.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Side Login</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/authentication-login2.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Boxed Login</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-user-plus"></i>
        </span>
        <span class="hide-menu">Register</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/authentication-register.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Side Register</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/authentication-register2.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Boxed Register</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-rotate"></i>
        </span>
        <span class="hide-menu">Forgot Password</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/authentication-forgot-password.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Side Forgot Password</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/authentication-forgot-password2.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Boxed Forgot Password</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-zoom-code"></i>
        </span>
        <span class="hide-menu">Two Steps</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="../dark/authentication-two-steps.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Side Two Steps</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="../dark/authentication-two-steps2.html" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Boxed Two Steps</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link sidebar-link"
        href="../dark/authentication-maintenance.html"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link has-arrow"
        href="javascript:void(0)"
        aria-expanded="false"
      >
        <span class="d-flex">
          <i class="ti ti-box-multiple"></i>
        </span>
        <span class="hide-menu">Menu Level</span>
      </a>
      <ul aria-expanded="false" class="collapse first-level">
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Level 1</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a
            class="sidebar-link has-arrow"
            href="javascript:void(0)"
            aria-expanded="false"
          >
            <div
              class="round-16 d-flex align-items-center justify-content-center"
            >
              <i class="ti ti-circle"></i>
            </div>
            <span class="hide-menu">Level 1.1</span>
          </a>
          <ul aria-expanded="false" class="collapse two-level">
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">
                <div
                  class="round-16 d-flex align-items-center justify-content-center"
                >
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">Level 2</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                class="sidebar-link has-arrow"
                href="javascript:void(0)"
                aria-expanded="false"
              >
                <div
                  class="round-16 d-flex align-items-center justify-content-center"
                >
                  <i class="ti ti-circle"></i>
                </div>
                <span class="hide-menu">Level 2.1</span>
              </a>
              <ul aria-expanded="false" class="collapse three-level">
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <div
                      class="round-16 d-flex align-items-center justify-content-center"
                    >
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Level 3</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <div
                      class="round-16 d-flex align-items-center justify-content-center"
                    >
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
      <a
        class="sidebar-link link-disabled"
        href="#disabled"
        aria-expanded="false"
      >
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
      <a
        class="sidebar-link justify-content-between"
        href="#chip"
        aria-expanded="false"
      >
        <div class="d-flex align-items-center gap-3">
          <span class="d-flex">
            <i class="ti ti-award"></i>
          </span>
          <span class="hide-menu">Chip</span>
        </div>
        <div class="hide-menu">
          <span
            class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2"
            >9</span
          >
        </div>
      </a>
    </li>
    <li class="sidebar-item">
      <a
        class="sidebar-link justify-content-between"
        href="#outlined"
        aria-expanded="false"
      >
        <div class="d-flex align-items-center gap-3">
          <span class="d-flex">
            <i class="ti ti-mood-smile"></i>
          </span>
          <span class="hide-menu">Outlined</span>
        </div>
        <span
          class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2"
          >Outline</span
        >
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

<div
  class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded sidebar-ad mt-3"
>
  <div class="hstack gap-3">
    <div class="john-img">  
    <img
        src="{{ auth()->user()->image }}"
        class="rounded-circle"
        width="40"
        height="40"
        alt=""
      />
    </div>
    <div class="john-title">
    <h6 class="mb-0 fs-4 fw-semibold">{{ auth()->user()->name }}</h6>
      <span class="fs-2">{{ auth()->user()->role }}</span>
    </div>
    <a href="{{ route('logout') }}"
   class="border-0 bg-transparent text-primary ms-auto"
   tabindex="0"
   aria-label="Logout"
   data-bs-toggle="tooltip"
   data-bs-placement="top"
   data-bs-title="Logout"
>
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
      <div class="page-wrapper">
        <!--  Header Start -->
        <header class="topbar">
          <div class="with-vertical"><!-- ---------------------------------- -->
<!-- Start Vertical Layout Header -->
<!-- ---------------------------------- -->
<nav class="navbar navbar-expand-lg p-0">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a
        class="nav-link sidebartoggler nav-icon-hover ms-n3"
        id="headerCollapse"
        href="javascript:void(0)"
      >
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="nav-item d-none d-lg-block">
      <a
        class="nav-link nav-icon-hover"
        href="javascript:void(0)"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
      >
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
      <div
        class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0"
      >
        <div class="row">
  <div class="col-8">
    <div class="ps-7 pt-7">
      <div class="border-bottom">
        <div class="row">
          <div class="col-6">
            <div class="position-relative">
              <a
                href="../dark/app-chat.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-chat.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Chat Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                </div>
              </a>
              <a
                href="../dark/app-invoice.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-invoice.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                  <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                </div>
              </a>
              <a
                href="../dark/app-contact2.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-mobile.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Contact Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                </div>
              </a>
              <a
                href="../dark/app-email.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-message-box.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                  <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="position-relative">
              <a
                href="../dark/page-user-profile.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-cart.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    User Profile
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">learn more information</span>
                </div>
              </a>
              <a
                href="../dark/app-calendar.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-date.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Calendar App
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">Get dates</span>
                </div>
              </a>
              <a
                href="../dark/app-contact.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Contact List Table
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                </div>
              </a>
              <a
                href="../dark/app-notes.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-application.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Notes Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-8">
          <a
            class="fw-semibold text-dark d-flex align-items-center lh-1"
            href="#"
            ><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a
          >
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
          <a class="fw-semibold bg-hover-primary" href="../dark/page-pricing.html"
            >Pricing Page</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/authentication-login.html"
            >Authentication Design</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/authentication-register.html"
            >Register Now</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="authentication-error.html"
            >404 Error Page</a
          >
        </li>
        <li class="mb-3">
          <a class="fw-semibold bg-hover-primary" href="../dark/app-notes.html"
            >Notes App</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/page-user-profile.html"
            >User Application</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/page-account-settings.html"
            >Account Settings</a
          >
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
    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
  </div>
  <a
    class="navbar-toggler nav-icon-hover p-0 border-0"
    href="javascript:void(0)"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="p-2">
      <i class="ti ti-dots fs-7"></i>
    </span>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between">
      <a
        href="javascript:void(0)"
        class="nav-link d-flex d-lg-none align-items-center justify-content-center"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobilenavbar"
        aria-controls="offcanvasWithBothOptions"
      >
        <i class="ti ti-align-justified fs-7"></i>
      </a>
      <ul
        class="navbar-nav flex-row ms-auto align-items-center justify-content-center"
      >
        <!-- ------------------------------- -->
        <!-- start language Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../assets/images/svgs/icon-flag-en.svg"
              alt=""
              width="20px"
              height="20px"
              class="rounded-circle object-fit-cover round-20"
            />
          </a>
          <div
            class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            <div class="message-body">
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-en.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">English (UK)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-cn.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">中国人 (Chinese)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-fr.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">français (French)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-sa.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
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
          <a
            class="nav-link position-relative nav-icon-hover"
            href="javascript:void(0)"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
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
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            <div class="d-flex align-items-center justify-content-between py-3 px-7">
  <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
  <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
</div>
<div class="message-body" data-simplebar>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-1.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
      <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-2.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">New message</h6>
      <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-3.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
      <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-4.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
      <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-5.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
      <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-1.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
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
          <a
            class="nav-link pe-0"
            href="javascript:void(0)"
            id="drop1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div class="d-flex align-items-center">
              <div class="user-profile-img">
                <img
                  src="../assets/images/profile/user-1.jpg"
                  class="rounded-circle"
                  width="35"
                  height="35"
                  alt=""
                />
              </div>
            </div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop1"
          >
            <div class="profile-dropdown position-relative" data-simplebar>
  <div class="py-3 px-7 pb-0">
    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
  </div>
  <div class="d-flex align-items-center py-9 mx-7 border-bottom">
    <img
      src="../assets/images/profile/user-1.jpg"
      class="rounded-circle"
      width="80"
      height="80"
      alt=""
    />
    <div class="ms-3">
      <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
      <span class="mb-1 d-block">{{ auth()->user()->role }}</span>
      <p class="mb-0 d-flex align-items-center gap-2">
        <i class="ti ti-mail fs-4"></i> {{ auth()->user()->email }}
      </p>
    </div>
  </div>
  <div class="message-body">
    <a
      href="../dark/page-user-profile.html"
      class="py-8 px-7 mt-8 d-flex align-items-center"
    >
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-account.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
        <span class="fs-2 d-block text-body-secondary">Account Settings</span>
      </div>
    </a>
    <a href="../dark/app-email.html" class="py-8 px-7 d-flex align-items-center">
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-inbox.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
        <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
      </div>
    </a>
    <a href="../dark/app-notes.html" class="py-8 px-7 d-flex align-items-center">
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-tasks.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
        <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
      </div>
    </a>
  </div>
  <div class="d-grid py-4 px-7 pt-8">
    <!-- <div
      class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9"
    >
      <div class="row">
        <div class="col-6">
          <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited Access</h5>
          <button class="btn btn-primary">Upgrade</button>
        </div>
        <div class="col-6">
          <div class="m-n4 unlimited-img">
            <img
              src="../assets/images/backgrounds/unlimited-bg.png"
              alt=""
              class="w-100"
            />
          </div>
        </div>
      </div>
    </div> -->
    <a href="{{ route('logout') }}" class="btn btn-outline-primary"
      >Log Out</a
    >
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
<div
  class="offcanvas offcanvas-start"
  data-bs-scroll="true"
  tabindex="-1"
  id="mobilenavbar"
  aria-labelledby="offcanvasWithBothOptionsLabel"
>
  <nav class="sidebar-nav scroll-sidebar">
    <div class="offcanvas-header justify-content-between">
      <img src="../assets/images/logos/favicon.ico" alt="" class="img-fluid" />
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
    </div>
    <div
      class="offcanvas-body"
      data-simplebar=""
      data-simplebar style="height: calc(100vh - 80px)"
    >
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a
            class="sidebar-link has-arrow"
            href="javascript:void(0)"
            aria-expanded="false"
          >
            <span>
              <i class="ti ti-apps"></i>
            </span>
            <span class="hide-menu">Apps</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level my-3">
            <li class="sidebar-item py-2">
              <a href="../dark/app-chat.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-chat.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >New messages arrived</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-invoice.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-invoice.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >Get latest invoice</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-cotact.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-mobile.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >2 Unsaved Contacts</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-email.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-message-box.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Email App</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >Get new emails</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/page-user-profile.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-cart.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >learn more information</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-calendar.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-date.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >Get dates</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-contact2.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >Add new contact</span
                  >
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="../dark/app-notes.html" class="d-flex align-items-center">
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-application.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted"
                    >To-do and Daily tasks</span
                  >
                </div>
              </a>
            </li>
            <ul class="px-8 mt-7 mb-4">
              <li class="sidebar-item mb-3">
                <h5 class="fs-5 fw-semibold">Quick Links</h5>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/page-pricing.html">Pricing Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/authentication-login.html"
                  >Authentication Design</a
                >
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/authentication-register.html">Register Now</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/authentication-error.html">404 Error Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/app-notes.html">Notes App</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/page-user-profile.html">User Application</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="../dark/page-account-settings.html">Account Settings</a>
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
          <a
            class="sidebar-link"
            href="../dark/app-calendar.html"
            aria-expanded="false"
          >
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
      <a
        class="nav-link sidebartoggler ms-n3"
        id="sidebarCollapse"
        href="javascript:void(0)"
      >
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="nav-item d-none d-xl-block">
      <a href="../dark/index.html" class="text-nowrap nav-link">
        <img
          src="../assets/images/logos/dark-logo.svg"
          class="dark-logo"
          width="180"
          alt=""
        />
        <img
          src="../assets/images/logos/light-logo.svg"
          class="light-logo"
          width="180"
          alt=""
        />
      </a>
    </li>
    <li class="nav-item d-none d-xl-block">
      <a
        class="nav-link nav-icon-hover"
        href="javascript:void(0)"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
      >
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
      <div
        class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0"
      >
        <div class="row">
  <div class="col-8">
    <div class="ps-7 pt-7">
      <div class="border-bottom">
        <div class="row">
          <div class="col-6">
            <div class="position-relative">
              <a
                href="../dark/app-chat.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-chat.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Chat Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                </div>
              </a>
              <a
                href="../dark/app-invoice.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-invoice.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                  <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                </div>
              </a>
              <a
                href="../dark/app-contact2.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-mobile.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Contact Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                </div>
              </a>
              <a
                href="../dark/app-email.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-message-box.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                  <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="position-relative">
              <a
                href="../dark/page-user-profile.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-cart.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    User Profile
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">learn more information</span>
                </div>
              </a>
              <a
                href="../dark/app-calendar.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-date.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Calendar App
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">Get dates</span>
                </div>
              </a>
              <a
                href="../dark/app-contact.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Contact List Table
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                </div>
              </a>
              <a
                href="../dark/app-notes.html"
                class="d-flex align-items-center pb-9 position-relative"
              >
                <div
                  class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center"
                >
                  <img
                    src="../assets/images/svgs/icon-dd-application.svg"
                    alt=""
                    class="img-fluid"
                    width="24"
                    height="24"
                  />
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 fw-semibold fs-3">
                    Notes Application
                  </h6>
                  <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center py-3">
        <div class="col-8">
          <a
            class="fw-semibold text-dark d-flex align-items-center lh-1"
            href="#"
            ><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a
          >
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
          <a class="fw-semibold bg-hover-primary" href="../dark/page-pricing.html"
            >Pricing Page</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/authentication-login.html"
            >Authentication Design</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/authentication-register.html"
            >Register Now</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="authentication-error.html"
            >404 Error Page</a
          >
        </li>
        <li class="mb-3">
          <a class="fw-semibold bg-hover-primary" href="../dark/app-notes.html"
            >Notes App</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/page-user-profile.html"
            >User Application</a
          >
        </li>
        <li class="mb-3">
          <a
            class="fw-semibold bg-hover-primary"
            href="../dark/page-account-settings.html"
            >Account Settings</a
          >
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
  <div class="d-block d-xl-none">
    <a href="../dark/index.html" class="text-nowrap nav-link">
      <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
    </a>
  </div>
  <a
    class="navbar-toggler nav-icon-hover p-0 border-0"
    href="javascript:void(0)"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="p-2">
      <i class="ti ti-dots fs-7"></i>
    </span>
  </a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
      <a
        href="javascript:void(0)"
        class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobilenavbar"
        aria-controls="offcanvasWithBothOptions"
      >
        <i class="ti ti-align-justified fs-7"></i>
      </a>
      <ul
        class="navbar-nav flex-row ms-auto align-items-center justify-content-center"
      >
        <!-- ------------------------------- -->
        <!-- start language Dropdown -->
        <!-- ------------------------------- -->
        <li class="nav-item dropdown">
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../assets/images/svgs/icon-flag-en.svg"
              alt=""
              width="20px"
              height="20px"
              class="rounded-circle object-fit-cover round-20"
            />
          </a>
          <div
            class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            <div class="message-body">
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-en.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">English (UK)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-cn.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">中国人 (Chinese)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-fr.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
                </div>
                <p class="mb-0 fs-3">français (French)</p>
              </a>
              <a
                href="javascript:void(0)"
                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item"
              >
                <div class="position-relative">
                  <img
                    src="../assets/images/svgs/icon-flag-sa.svg"
                    alt=""
                    width="20px"
                    height="20px"
                    class="rounded-circle object-fit-cover round-20"
                  />
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
          <a
            class="nav-link position-relative nav-icon-hover"
            href="javascript:void(0)"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
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
          <a
            class="nav-link nav-icon-hover"
            href="javascript:void(0)"
            id="drop2"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop2"
          >
            <div class="d-flex align-items-center justify-content-between py-3 px-7">
  <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
  <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
</div>
<div class="message-body" data-simplebar>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-1.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
      <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-2.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">New message</h6>
      <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-3.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
      <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-4.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
      <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-5.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
    </span>
    <div class="w-75 d-inline-block v-middle">
      <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
      <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
    </div>
  </a>
  <a
    href="javascript:void(0)"
    class="py-6 px-7 d-flex align-items-center dropdown-item"
  >
    <span class="me-3">
      <img
        src="../assets/images/profile/user-1.jpg"
        alt="user"
        class="rounded-circle"
        width="48"
        height="48"
      />
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
          <a
            class="nav-link pe-0"
            href="javascript:void(0)"
            id="drop1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div class="d-flex align-items-center">
              <div class="user-profile-img">
                <img
                  src="../assets/images/profile/user-1.jpg"
                  class="rounded-circle"
                  width="35"
                  height="35"
                  alt=""
                />
              </div>
            </div>
          </a>
          <div
            class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
            aria-labelledby="drop1"
          >
            <div class="profile-dropdown position-relative" data-simplebar>
  <div class="py-3 px-7 pb-0">
    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
  </div>
  <div class="d-flex align-items-center py-9 mx-7 border-bottom">
    <img
      src="../assets/images/profile/user-1.jpg"
      class="rounded-circle"
      width="80"
      height="80"
      alt=""
    />
    <div class="ms-3">
      <h5 class="mb-1 fs-3">Mathew Anderson</h5>
      <span class="mb-1 d-block">Designer</span>
      <p class="mb-0 d-flex align-items-center gap-2">
        <i class="ti ti-mail fs-4"></i> info@modernize.com
      </p>
    </div>
  </div>
  <div class="message-body">
    <a
      href="../dark/page-user-profile.html"
      class="py-8 px-7 mt-8 d-flex align-items-center"
    >
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-account.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
        <span class="fs-2 d-block text-body-secondary">Account Settings</span>
      </div>
    </a>
    <a href="../dark/app-email.html" class="py-8 px-7 d-flex align-items-center">
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-inbox.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
        <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
      </div>
    </a>
    <a href="../dark/app-notes.html" class="py-8 px-7 d-flex align-items-center">
      <span
        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6"
      >
        <img
          src="../assets/images/svgs/icon-tasks.svg"
          alt=""
          width="24"
          height="24"
        />
      </span>
      <div class="w-75 d-inline-block v-middle ps-3">
        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
        <span class="fs-2 d-block text-body-secondary">To-do and Daily Tasks</span>
      </div>
    </a>
  </div>
  <div class="d-grid py-4 px-7 pt-8">
    <div
      class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9"
    >
      <div class="row">
        <div class="col-6">
          <h5 class="fs-4 mb-3 w-50 fw-semibold">Unlimited Access</h5>
          <button class="btn btn-primary">Upgrade</button>
        </div>
        <div class="col-6">
          <div class="m-n4 unlimited-img">
            <img
              src="../assets/images/backgrounds/unlimited-bg.png"
              alt=""
              class="w-100"
            />
          </div>
        </div>
      </div>
    </div>
    <a href="../dark/authentication-login.html" class="btn btn-outline-primary"
      >Log Out</a
    >
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
        <a
          class="sidebar-link has-arrow"
          href="javascript:void(0)"
          aria-expanded="false"
        >
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
            <a
              class="sidebar-link"
              href="../dark/app-email.html"
              aria-expanded="false"
            >
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
        <a
          class="sidebar-link has-arrow"
          href="javascript:void(0)"
          aria-expanded="false"
        >
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
        <a
          class="sidebar-link two-column has-arrow"
          href="#"
          aria-expanded="false"
        >
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
        <a
          class="sidebar-link sidebar-link"
          href="../dark/icon-tabler.html"
          aria-expanded="false"
        >
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
            <iconify-icon
              icon="solar:airbuds-case-minimalistic-line-duotone"
              class="ti"
            ></iconify-icon>
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

        <div class="body-wrapper">
          <div class="container-fluid">
            <!--  Owl carousel -->
            <div class="owl-carousel counter-carousel owl-theme">
              <div class="item">
                <div
                  class="card border-0 zoom-in bg-primary-subtle shadow-none"
                >
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-user-male.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-primary mb-1">
                        Employees
                      </p>
                      <h5 class="fw-semibold text-primary mb-0">96</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div
                  class="card border-0 zoom-in bg-warning-subtle shadow-none"
                >
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-briefcase.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                      <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-mailbox.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-info mb-1">Projects</p>
                      <h5 class="fw-semibold text-info mb-0">356</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-favorites.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                      <h5 class="fw-semibold text-danger mb-0">696</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div
                  class="card border-0 zoom-in bg-success-subtle shadow-none"
                >
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-speech-bubble.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-success mb-1">Payroll</p>
                      <h5 class="fw-semibold text-success mb-0">$96k</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                  <div class="card-body">
                    <div class="text-center">
                      <img
                        src="../assets/images/svgs/icon-connect.svg"
                        width="50"
                        height="50"
                        class="mb-3"
                        alt=""
                      />
                      <p class="fw-semibold fs-3 text-info mb-1">Reports</p>
                      <h5 class="fw-semibold text-info mb-0">59</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  Row 1 -->
            <div class="row">
              <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div
                      class="d-sm-flex d-block align-items-center justify-content-between mb-9"
                    >
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Revenue Updates</h5>
                        <p class="card-subtitle mb-0">Overview of Profit</p>
                      </div>
                      <select class="form-select w-auto">
                        <option value="1">March 2023</option>
                        <option value="2">April 2023</option>
                        <option value="3">May 2023</option>
                        <option value="4">June 2023</option>
                      </select>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-md-8">
                        <div id="chart"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="hstack mb-4 pb-1">
                          <div
                            class="p-8 bg-primary-subtle rounded-1 me-3 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                          </div>
                          <div>
                            <h4 class="mb-0 fs-7 fw-semibold">$63,489.50</h4>
                            <p class="fs-3 mb-0">Total Earnings</p>
                          </div>
                        </div>
                        <div>
                          <div class="d-flex align-items-baseline mb-4">
                            <span
                              class="round-8 text-bg-primary rounded-circle me-6"
                            ></span>
                            <div>
                              <p class="fs-3 mb-1">Earnings this month</p>
                              <h6 class="fs-5 fw-semibold mb-0">$48,820</h6>
                            </div>
                          </div>
                          <div class="d-flex align-items-baseline mb-4 pb-1">
                            <span
                              class="round-8 text-bg-secondary rounded-circle me-6"
                            ></span>
                            <div>
                              <p class="fs-3 mb-1">Expense this month</p>
                              <h6 class="fs-5 fw-semibold mb-0">$26,498</h6>
                            </div>
                          </div>
                          <div>
                            <button class="btn btn-primary w-100">
                              View Full Report
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-lg-12 col-md-6">
                    <!-- Yearly Breakup -->
                    <div class="card">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold">
                              Yearly Breakup
                            </h5>
                            <h4 class="fw-semibold mb-3">$36,358</h4>
                            <div class="d-flex align-items-center mb-3">
                              <span
                                class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center"
                              >
                                <i class="ti ti-arrow-up-left text-success"></i>
                              </span>
                              <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                              <p class="fs-3 mb-0">last year</p>
                            </div>
                            <div class="d-flex align-items-center">
                              <div class="me-4">
                                <span
                                  class="round-8 text-bg-primary rounded-circle me-2 d-inline-block"
                                ></span>
                                <span class="fs-2">2023</span>
                              </div>
                              <div>
                                <span
                                  class="round-8 bg-primary-subtle rounded-circle me-2 d-inline-block"
                                ></span>
                                <span class="fs-2">2023</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-center">
                              <div id="breakup"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                    <!-- Monthly Earnings -->
                    <div class="card">
                      <div class="card-body">
                        <div class="row align-items-start">
                          <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold">
                              Monthly Earnings
                            </h5>
                            <h4 class="fw-semibold mb-3">$6,820</h4>
                            <div class="d-flex align-items-center pb-1">
                              <span
                                class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center"
                              >
                                <i
                                  class="ti ti-arrow-down-right text-danger"
                                ></i>
                              </span>
                              <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                              <p class="fs-3 mb-0">last year</p>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end">
                              <div
                                class="text-white text-bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center"
                              >
                                <i class="ti ti-currency-dollar fs-6"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="earning"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  Row 2 -->
            <div class="row">
              <!-- Employee Salary -->
              <div class="col-lg-4 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div>
                      <h5 class="card-title fw-semibold mb-1">
                        Employee Salary
                      </h5>
                      <p class="card-subtitle mb-0">Every month</p>
                      <div id="salary" class="mb-7 pb-8"></div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="d-flex align-items-center">
                          <div
                            class="bg-primary-subtle rounded me-8 p-8 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                          </div>
                          <div>
                            <p class="fs-3 mb-0 fw-normal">Salary</p>
                            <h6 class="fw-semibold text-dark fs-4 mb-0">
                              $36,358
                            </h6>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div
                            class="text-bg-light rounded me-8 p-8 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-muted fs-6"></i>
                          </div>
                          <div>
                            <p class="fs-3 mb-0 fw-normal">Profit</p>
                            <h6 class="fw-semibold text-dark fs-4 mb-0">
                              $5,296
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Project -->
              <div class="col-lg-4">
                <div class="row">
                  <!-- Customers -->
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body pb-0 mb-xxl-4 pb-1">
                        <p class="mb-1 fs-3">Customers</p>
                        <h4 class="fw-semibold fs-7">36,358</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="text-dark fs-3 mb-0">+9%</p>
                        </div>
                      </div>
                      <div id="customers"></div>
                    </div>
                  </div>
                  <!-- Projects -->
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <p class="mb-1 fs-3">Projects</p>
                        <h4 class="fw-semibold fs-7">78,298</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark fs-3 mb-0">+9%</p>
                        </div>
                        <div id="projects"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Comming Soon -->
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center mb-7 pb-2">
                      <div class="me-3 pe-1">
                        <img
                          src="../assets/images/profile/user-1.jpg"
                          class="shadow-warning rounded-2"
                          alt=""
                          width="72"
                          height="72"
                        />
                      </div>
                      <div>
                        <h5 class="fw-semibold fs-5 mb-2">
                          Super awesome, Vue coming soon!
                        </h5>
                        <p class="fs-3 mb-0">22 March, 2023</p>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <ul class="hstack mb-0">
                        <li class="ms-n8">
                          <a href="javascript:void(0)" class="me-1">
                            <img
                              src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle border border-2 border-white"
                              width="44"
                              height="44"
                              alt=""
                            />
                          </a>
                        </li>
                        <li class="ms-n8">
                          <a href="javascript:void(0)" class="me-1">
                            <img
                              src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle border border-2 border-white"
                              width="44"
                              height="44"
                              alt=""
                            />
                          </a>
                        </li>
                        <li class="ms-n8">
                          <a href="javascript:void(0)" class="me-1">
                            <img
                              src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle border border-2 border-white"
                              width="44"
                              height="44"
                              alt=""
                            />
                          </a>
                        </li>
                        <li class="ms-n8">
                          <a href="javascript:void(0)" class="me-1">
                            <img
                              src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle border border-2 border-white"
                              width="44"
                              height="44"
                              alt=""
                            />
                          </a>
                        </li>
                      </ul>
                      <a
                        href="#"
                        class="text-bg-light rounded py-1 px-8 d-flex align-items-center text-decoration-none"
                      >
                        <i class="ti ti-message-2 fs-6 text-primary"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Selling Products -->
              <div class="col-lg-4 d-flex align-items-strech">
                <div class="card text-bg-primary border-0 w-100">
                  <div class="card-body pb-0">
                    <h5 class="fw-semibold mb-1 text-white card-title">
                      Best Selling Products
                    </h5>
                    <p class="fs-3 mb-3 text-white">Overview 2023</p>
                    <div class="text-center mt-3">
                      <img
                        src="../assets/images/backgrounds/piggy.png"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="card mx-2 mb-2 mt-n2">
                    <div class="card-body">
                      <div class="mb-7 pb-1">
                        <div
                          class="d-flex justify-content-between align-items-center mb-6"
                        >
                          <div>
                            <h6 class="mb-1 fs-4 fw-semibold">MaterialPro</h6>
                            <p class="fs-3 mb-0">$23,568</p>
                          </div>
                          <div>
                            <span
                              class="badge bg-primary-subtle text-primary fw-semibold fs-3"
                              >55%</span
                            >
                          </div>
                        </div>
                        <div
                          class="progress bg-primary-subtle"
                          style="height: 4px"
                        >
                          <div
                            class="progress-bar w-50"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </div>
                      <div>
                        <div
                          class="d-flex justify-content-between align-items-center mb-6"
                        >
                          <div>
                            <h6 class="mb-1 fs-4 fw-semibold">Flexy Admin</h6>
                            <p class="fs-3 mb-0">$23,568</p>
                          </div>
                          <div>
                            <span
                              class="badge bg-secondary-subtle text-secondary fw-bold fs-3"
                              >20%</span
                            >
                          </div>
                        </div>
                        <div
                          class="progress bg-secondary-subtle"
                          style="height: 4px"
                        >
                          <div
                            class="progress-bar text-bg-secondary w-25"
                            role="progressbar"
                            aria-valuenow="75"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  Row 3 -->
            <div class="row">
              <!-- Weekly Stats -->
              <div class="col-lg-4 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold">Weekly Stats</h5>
                    <p class="card-subtitle mb-0">Average sales</p>
                    <div id="stats" class="my-4"></div>
                    <div class="position-relative">
                      <div
                        class="d-flex align-items-center justify-content-between mb-7"
                      >
                        <div class="d-flex">
                          <div
                            class="p-6 bg-primary-subtle rounded me-6 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-primary fs-6"></i>
                          </div>
                          <div>
                            <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                            <p class="fs-3 mb-0">Johnathan Doe</p>
                          </div>
                        </div>
                        <div class="bg-primary-subtle badge">
                          <p class="fs-3 text-primary fw-semibold mb-0">+68</p>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between mb-7"
                      >
                        <div class="d-flex">
                          <div
                            class="p-6 bg-success-subtle rounded me-6 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-success fs-6"></i>
                          </div>
                          <div>
                            <h6 class="mb-1 fs-4 fw-semibold">Best Seller</h6>
                            <p class="fs-3 mb-0">MaterialPro Admin</p>
                          </div>
                        </div>
                        <div class="bg-success-subtle badge">
                          <p class="fs-3 text-success fw-semibold mb-0">+68</p>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="d-flex">
                          <div
                            class="p-6 bg-danger-subtle rounded me-6 d-flex align-items-center justify-content-center"
                          >
                            <i class="ti ti-grid-dots text-danger fs-6"></i>
                          </div>
                          <div>
                            <h6 class="mb-1 fs-4 fw-semibold">
                              Most Commented
                            </h6>
                            <p class="fs-3 mb-0">Ample Admin</p>
                          </div>
                        </div>
                        <div class="bg-danger-subtle badge">
                          <p class="fs-3 text-danger fw-semibold mb-0">+68</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Top Performers -->
              <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div
                      class="d-sm-flex d-block align-items-center justify-content-between mb-7"
                    >
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Top Performers</h5>
                        <p class="card-subtitle mb-0">Best Employees</p>
                      </div>
                      <div>
                        <select class="form-select">
                          <option value="1">March 2023</option>
                          <option value="2">April 2023</option>
                          <option value="3">May 2023</option>
                          <option value="4">June 2023</option>
                        </select>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table align-middle text-nowrap mb-0">
                        <thead>
                          <tr class="text-muted fw-semibold">
                            <th scope="col" class="ps-0">Assigned</th>
                            <th scope="col">Project</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Budget</th>
                          </tr>
                        </thead>
                        <tbody class="border-top">
                          <tr>
                            <td class="ps-0">
                              <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                  <img
                                    src="../assets/images/profile/user-1.jpg"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                    alt=""
                                  />
                                </div>
                                <div>
                                  <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                  <p class="fs-2 mb-0 text-muted">
                                    Web Designer
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="mb-0 fs-3">Elite Admin</p>
                            </td>
                            <td>
                              <span
                                class="badge fw-semibold py-1 w-85 bg-primary-subtle text-primary"
                                >Low</span
                              >
                            </td>
                            <td>
                              <p class="fs-3 text-dark mb-0">$3.9K</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                  <img
                                    src="../assets/images/profile/user-2.jpg"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                    alt=""
                                  />
                                </div>
                                <div>
                                  <h6 class="fw-semibold mb-1">John Deo</h6>
                                  <p class="fs-2 mb-0 text-muted">
                                    Web Developer
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="mb-0 fs-3">Flexy Admin</p>
                            </td>
                            <td>
                              <span
                                class="badge fw-semibold py-1 w-85 bg-warning-subtle text-warning"
                                >Medium</span
                              >
                            </td>
                            <td>
                              <p class="fs-3 text-dark mb-0">$24.5K</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                  <img
                                    src="../assets/images/profile/user-3.jpg"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                    alt=""
                                  />
                                </div>
                                <div>
                                  <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                  <p class="fs-2 mb-0 text-muted">
                                    Web Manager
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="mb-0 fs-3">Material Pro</p>
                            </td>
                            <td>
                              <span
                                class="badge fw-semibold py-1 w-85 bg-info-subtle text-info"
                                >High</span
                              >
                            </td>
                            <td>
                              <p class="fs-3 text-dark mb-0">$12.8K</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="ps-0">
                              <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                  <img
                                    src="../assets/images/profile/user-4.jpg"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                    alt=""
                                  />
                                </div>
                                <div>
                                  <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                                  <p class="fs-2 mb-0 text-muted">
                                    Project Manager
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="mb-0 fs-3">Xtreme Admin</p>
                            </td>
                            <td>
                              <span
                                class="badge fw-semibold py-1 w-85 bg-success-subtle text-success"
                                >Low</span
                              >
                            </td>
                            <td>
                              <p class="fs-3 text-dark mb-0">$4.8K</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="border-0 ps-0">
                              <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                  <img
                                    src="../assets/images/profile/user-5.jpg"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                    alt=""
                                  />
                                </div>
                                <div>
                                  <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                                  <p class="fs-2 mb-0 text-muted">
                                    Content Writer
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="border-0">
                              <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                            </td>
                            <td class="border-0">
                              <span
                                class="badge fw-semibold py-1 w-85 bg-danger-subtle text-danger"
                                >High</span
                              >
                            </td>
                            <td class="border-0">
                              <p class="fs-3 text-dark mb-0">$9.3K</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <i class="icon ti ti-settings fs-7"></i>
</button>

<div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel">
  <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
      Settings
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="theme-layout" id="light-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="light-layout"><i
          class="icon ti ti-brightness-up fs-7 me-2"></i>Light</label>

      <input type="radio" class="btn-check" name="theme-layout" id="dark-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="dark-layout"><i class="icon ti ti-moon fs-7 me-2"></i>Dark</label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="ltr-layout"><i
          class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR</label>

      <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="rtl-layout"><i
          class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL</label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
      <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
        autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')"
        for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout"  id="Aqua_Theme"
        autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')"
        for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')"
        for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
          <i class="ti ti-check text-white d-flex icon fs-5"></i> 
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')"
        for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')"
        for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>

      <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')"
        for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
          <i class="ti ti-check text-white d-flex icon fs-5"></i>
        </div>
      </label>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <div>
        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="vertical-layout"><i
            class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical</label>
      </div>
      <div>
        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="horizontal-layout"><i
            class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal</label>
      </div>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="boxed-layout"><i
          class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed</label>

      <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="full-layout"><i
          class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full</label>
    </div>

    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <a href="javascript:void(0)" class="fullsidebar">
        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="full-sidebar"><i
            class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full</label>
      </a>
      <div>
        <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
        <label class="btn p-9 btn-outline-primary" for="mini-sidebar"><i
            class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse</label>
      </div>
    </div>

    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

    <div class="d-flex flex-row gap-3 customizer-box" role="group">
      <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="card-with-border"><i
          class="icon ti ti-border-outer fs-7 me-2"></i>Border</label>

      <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
      <label class="btn p-9 btn-outline-primary" for="card-without-border"><i
          class="icon ti ti-border-none fs-7 me-2"></i>Shadow</label>
    </div>
  </div>
</div>
      </div>

      <!--  Search Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content rounded-1">
      <div class="modal-header border-bottom">
        <input
          type="search"
          class="form-control fs-3"
          placeholder="Search here"
          id="search"
        />
        <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
          <i class="ti ti-x fs-5 ms-3"></i>
        </a>
      </div>
      <div class="modal-body message-body" data-simplebar="">
        <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
        <ul class="list mb-0 py-2">
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Modern</span>
              <span class="fs-3 text-muted d-block"
                >/dashboards/dashboard1</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
              <span class="fs-3 text-muted d-block"
                >/dashboards/dashboard2</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
              <span class="fs-3 text-muted d-block">/apps/contacts</span>
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Posts</span>
              <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Detail</span>
              <span class="fs-3 text-muted d-block"
                >/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Shop</span>
              <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Modern</span>
              <span class="fs-3 text-muted d-block"
                >/dashboards/dashboard1</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
              <span class="fs-3 text-muted d-block"
                >/dashboards/dashboard2</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Contacts</span>
              <span class="fs-3 text-muted d-block">/apps/contacts</span>
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Posts</span>
              <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Detail</span>
              <span class="fs-3 text-muted d-block"
                >/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span
              >
            </a>
          </li>
          <li class="p-1 mb-1 bg-hover-light-black">
            <a href="#">
              <span class="fs-3 text-dark fw-normal d-block">Shop</span>
              <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

      <!--  Shopping Cart -->
<div
  class="offcanvas offcanvas-end shopping-cart"
  tabindex="-1"
  id="offcanvasRight"
  aria-labelledby="offcanvasRightLabel"
>
  <div class="offcanvas-header py-4">
    <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
      Shopping Cart
    </h5>
    <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
  </div>
  <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
    <ul class="mb-0">
      <li class="pb-7">
        <div class="d-flex align-items-center">
          <img
            src="../assets/images/products/product-1.jpg"
            width="95"
            height="75"
            class="rounded-1 me-9 flex-shrink-0"
            alt=""
          />
          <div>
            <h6 class="mb-1">Supreme toys cooker</h6>
            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
              <div class="input-group input-group-sm w-50">
                <button
                  class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                  type="button"
                  id="add1"
                >
                  -
                </button>
                <input
                  type="text"
                  class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                  placeholder=""
                  aria-label="Example text with button addon"
                  aria-describedby="add1"
                  value="1"
                />
                <button
                  class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                  type="button"
                  id="addo2"
                >
                  +
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="pb-7">
        <div class="d-flex align-items-center">
          <img
            src="../assets/images/products/product-2.jpg"
            width="95"
            height="75"
            class="rounded-1 me-9 flex-shrink-0"
            alt=""
          />
          <div>
            <h6 class="mb-1">Supreme toys cooker</h6>
            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
              <div class="input-group input-group-sm w-50">
                <button
                  class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                  type="button"
                  id="add2"
                >
                  -
                </button>
                <input
                  type="text"
                  class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                  placeholder=""
                  aria-label="Example text with button addon"
                  aria-describedby="add2"
                  value="1"
                />
                <button
                  class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                  type="button"
                  id="addon34"
                >
                  +
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="pb-7">
        <div class="d-flex align-items-center">
          <img
            src="../assets/images/products/product-3.jpg"
            width="95"
            height="75"
            class="rounded-1 me-9 flex-shrink-0"
            alt=""
          />
          <div>
            <h6 class="mb-1">Supreme toys cooker</h6>
            <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
              <div class="input-group input-group-sm w-50">
                <button
                  class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                  type="button"
                  id="add3"
                >
                  -
                </button>
                <input
                  type="text"
                  class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                  placeholder=""
                  aria-label="Example text with button addon"
                  aria-describedby="add3"
                  value="1"
                />
                <button
                  class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                  type="button"
                  id="addon3"
                >
                  +
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <div class="align-bottom">
      <div class="d-flex align-items-center pb-7">
        <span class="text-dark fs-3">Sub Total</span>
        <div class="ms-auto">
          <span class="text-dark fw-semibold fs-3">$2530</span>
        </div>
      </div>
      <div class="d-flex align-items-center pb-7">
        <span class="text-dark fs-3">Total</span>
        <div class="ms-auto">
          <span class="text-dark fw-semibold fs-3">$6830</span>
        </div>
      </div>
      <a href="../dark/eco-checkout.html" class="btn btn-outline-primary w-100"
        >Go to shopping cart</a
      >
    </div>
  </div>
</div>

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/app.dark.init.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<script src="../assets/js/sidebarmenu.js"></script>
<script src="../assets/js/theme.js"></script>

    <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/js/dashboards/dashboard.js"></script>
  </body>
</html>