<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/chats.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 15:04:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chats - Vetra | E-Commerce HTML Admin Dashboard Template </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="./dist/css/bootstrap-docs.css" type="text/css">

    
    <!-- Main style file -->
    <link rel="stylesheet" href="./dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- notifications sidebar -->
<div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
        <div class="align-items-center d-flex justify-content-between py-4">
            Notifications
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content">
        <div class="tab-content">
            <div class="tab-pane active" id="activities">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        You joined a group
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Storage is running low!
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-secondary me-3">
                                            <span
                                                class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        1 person sent a file
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Reports ready to download
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="px-0 list-group-item">
                            <a href="#" class="d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        2 steps verification
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> 20 min ago
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="notes">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                This month's report will be prepared.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                An email will be sent to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Today
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                The meeting will be held.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                Conversation with users.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> Yesterday
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                Payment refund will be made to the customer.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                        <li class="px-0 list-group-item">
                            <p class="mb-0 d-flex justify-content-between">
                                Payment form will be activated.
                            </p>
                            <span class="text-muted small">
                                <i class="bi bi-clock me-1"></i> 20 min ago
                            </span>
                            <div class="mt-2">
                                <a href="#">Edit</a>
                                <a href="#" class="text-danger ms-2">Delete</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-primary btn-block">
                        <i class="bi bi-plus me-2"></i> Add Notes
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="alerts">
                <div class="tab-pane-body">
                    <ul class="list-group list-group-flush">
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Signed in with a different device.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 fw-bold d-flex justify-content-between">
                                    Your billing information is not active.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your subscription has expired.
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                        <li class="px-0 list-group-item d-flex">
                            <div class="flex-shrink-0">
                                <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                </figure>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-0 d-flex justify-content-between">
                                    Your storage space is running low
                                </p>
                                <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane-footer">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-check2 me-2"></i> Make All Read
                    </a>
                    <a href="#" class="btn btn-danger ms-2">
                        <i class="bi bi-trash me-2"></i> Delete all
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ notifications sidebar -->

<!-- settings sidebar -->
<div class="sidebar" id="settings">
    <div class="sidebar-header">
        <div>
            <i class="bi bi-gear me-2"></i>
            Settings
        </div>
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    <label class="form-check-label" for="flexCheckDefault1">
                        Remember next visits
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                    <label class="form-check-label" for="flexCheckDefault2">
                        Enable report generation.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                    <label class="form-check-label" for="flexCheckDefault3">
                        Allow notifications.
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                    <label class="form-check-label" for="flexCheckDefault4">
                        Hide user requests
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                    <label class="form-check-label" for="flexCheckDefault5">
                        Speed up demands
                    </label>
                </div>
            </li>
            <li class="list-group-item px-0 border-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hide menus
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-primary">All Settings</a>
    </div>
</div>
<!-- ./ settings sidebar -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<?php include "sidebar.php" ?>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="index-2.html" class="logo">
        <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">Chats</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/3.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/4.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/5.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="./assets/images/products/6.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                    <button class="btn btn-primary btn-icon">
        <i class="bi bi-plus-circle"></i> New Chat
    </button>
            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">
        
    <div class="chat-block">

        <!-- begin::chat sidebar -->
        <div class="chat-sidebar">

            <!-- begin::chat sidebar search -->
            <div class="chat-sidebar-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">All Chats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">Calls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                           role="tab" aria-controls="pills-contact" aria-selected="false">Contacts</a>
                    </li>
                </ul>
                <form class="my-4">
                    <input type="text" class="form-control" placeholder="Search">
                </form>
            </div>
            <!-- begin::chat sidebar search -->

            <!-- end::chat list -->
            <div class="chat-sidebar-content">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="chat-lists">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item active d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="./assets/images/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Cyril Ralston</p>
                                        <span class="text-muted">
                                            <i class="bi bi-image me-1"></i> Photo
                                        </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center unread-message">
                                    <div class="pe-3">
                                        <div class="avatar avatar-info avatar-state-danger">
                                            <span class="avatar-text rounded-circle">M</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Michelina Mackley</p>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center unread-message">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="./assets/images/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jessi Maylin</p>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                            <span class="avatar avatar-state-info">
                                                <img src="./assets/images/user/man_avatar1.jpg"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Hobie Kember</p>
                                        <span class="text-muted">
                                                <i class="bi bi-camera-video me-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-warning avatar-state-secondary">
                                            <span class="avatar-text rounded-circle">D</span>
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-1">Dudley Laborde</p>
                                        <span class="text-muted">Hello how are you?</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">2:32 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-success">
                                            <img src="./assets/images/user/man_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-1">Boony Gidden</p>
                                        <span class="text-muted">Hi!</span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">08:27 PM</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-danger">
                                            <img src="./assets/images/user/women_avatar3.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Vivianne Sothcott</p>
                                        <span class="text-muted">
                                                <i class="bi bi-image me-1"></i> Photo
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Yesterday</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <span class="avatar avatar-state-warning">
                                            <img src="./assets/images/user/man_avatar4.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Brandais Reisen</p>
                                        <span class="text-muted">
                                                <i class="bi bi-camera-video me-1"></i> Video
                                            </span>
                                    </div>
                                    <div class="text-end ms-auto d-flex flex-column">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">Profile</a>
                                                <a href="#" class="dropdown-item">View Chat</a>
                                                <a href="#" class="dropdown-item">Mark as read</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                        <span class="small text-muted">Last week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="./assets/images/user/women_avatar2.jpg"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1">Orelie Rockhall</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-down me-1 text-danger small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-camera-video text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-success">
                                        <img src="./assets/images/user/man_avatar1.jpg"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-1">Barbette Bolf</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-warning">
                                        <img src="./assets/images/user/women_avatar1.jpg"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow- 1">
                                    <p class="mb-1">Natale Janu</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-info avatar-state-secondary">
                                        <span class="avatar-text rounded-circle">T</span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-1">Terra Fehner</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-down me-1 text-danger small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-camera-video text-danger"></i>
                                </div>
                            </a>
                            <a href="#" class="list-group-item d-flex align-items-center">
                                <div class="pe-3">
                                    <div class="avatar avatar-state-info">
                                        <img src="./assets/images/user/women_avatar2.jpg"
                                             class="rounded-circle"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1">Orelie Rockhall</p>
                                    <div class="text-muted d-flex align-items-center">
                                        <i class="bi bi-arrow-up me-1 text-success small"></i>
                                        Today, 03:11 AM
                                    </div>
                                </div>
                                <div class="text-end ms-auto">
                                    <i class="bi bi-telephone text-success"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                         aria-labelledby="pills-contact-tab">
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-secondary avatar-state-danger">
                                            <span class="avatar-text rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Alene Ranyelld</p>
                                        <div class="text-muted">United Kingdom</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="./assets/images/user/man_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Chloette Fewster</p>
                                        <div class="text-muted">Estonia</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="./assets/images/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Stephanus Shergill</p>
                                        <div class="text-muted">Austria</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-info">
                                            <img src="./assets/images/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Elvyn Frowde</p>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-success avatar-state-secondary">
                                            <span class="avatar-text rounded-circle">A</span>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Alene Ranyelld</p>
                                        <div class="text-muted">Canada</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-success">
                                            <img src="./assets/images/user/man_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Chloette Fewster</p>
                                        <div class="text-muted">Spain</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-danger">
                                            <img src="./assets/images/user/women_avatar1.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <p class="mb-1">Stephanus Shergill</p>
                                        <div class="text-muted">Romania</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="pe-3">
                                        <div class="avatar avatar-state-warning">
                                            <img src="./assets/images/user/women_avatar2.jpg"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-1">Elvyn Frowde</p>
                                        <div class="text-muted">New Zealand</div>
                                    </div>
                                    <div class="text-end ms-auto">
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">Chat</a>
                                                <a href="#" class="dropdown-item">Voice call</a>
                                                <a href="#" class="dropdown-item">Video call</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::chat list -->

        </div>
        <!-- end::chat sidebar -->

        <!-- begin::chat content -->
        <div class="chat-content empty-chat-wrapper">

            <div class="empty-chat">
                <div class="row mb-5">
                    <div class="col-md-4 m-auto">
                        <img class="img-fluid" src="https://vetra.laborasyon.com/assets/svg/not-selected-chat.svg" alt="image">
                    </div>
                </div>
                <p>Select chat to view messages</p>
            </div>

            <!-- begin::messages -->
            <div class="messages">
                <div class="message-item">
                    <div class="message-item-content">Hi!</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                    </div>
                    <span class="time small text-muted font-italic">Yesterday</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Hello! How are you today?</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content d-flex">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        <div>
                            <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">Download</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">View</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item me message-media">
                    <img src="./assets/images/photo1.jpg" alt="image">
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
                <div class="message-item message-item-divider">
                    <span>Today</span>
                </div>
                <div class="message-item">
                    <div class="message-item-content">Lorem ipsum dolor sit.</div>
                    <span class="time small text-muted font-italic">02:30 PM</span>
                </div>
            </div>
            <!-- end::messages -->

            <!-- begin::chat footer -->
            <div class="chat-footer">
                <form class="d-flex">
                    <div class="dropdown flex-shrink-0 me-3">
                        <button class="btn btn-primary btn-rounded" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-three-dots"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Add Emoji</a>
                            <a href="#" class="dropdown-item">Attach files</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" autofocus placeholder="Write message...">
                    <button class="btn btn-primary btn-rounded flex-shrink-0 ms-3">Send</button>
                </form>
            </div>
            <!-- end::chat footer -->

        </div>
        <!-- begin::chat content -->

    </div>
    <!-- end::chat sidebar -->

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="./libs/bundle.js"></script>

    <!-- Examples -->
    <script src="./dist/js/examples/chat.js"></script>

<!-- Main Javascript file -->
<script src="./dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/chats.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 15:04:36 GMT -->
</html>
