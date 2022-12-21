<template>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <Link href="/admin/dashboard" class="nav-link" >
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </Link>
            </li>
            <li class="nav-item nav-category">Tables</li>
            <li class="nav-item">
                <Link href="/admin/service" class="nav-link" >
                    <i class="mdi mdi-server-network menu-icon"></i>
                    <span class="menu-title">Services</span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/test" class="nav-link" >
                    <i class="mdi mdi-server-network menu-icon"></i>
                    <span class="menu-title">Tests</span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/location" class="nav-link" >
                    <i class="mdi mdi-server-network menu-icon"></i>
                    <span class="menu-title">Locations</span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/testimonial" class="nav-link" >
                    <i class="mdi mdi-server-network menu-icon"></i>
                    <span class="menu-title">Testmonials</span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/messege" class="nav-link" >
                    <i class="mdi mdi-message-text-outline menu-icon"></i>
                    <span class="menu-title">Messeges</span>
                </Link>
            </li>
            <!-- <li class="nav-item">
                <Link href="/admin/client" class="nav-link" >
                    <i class="menu-icon mdi mdi-human-greeting"></i>
                    <span class="menu-title">Clients</span>
                </Link>
            </li> -->
            <li class="nav-item nav-category">Mail</li>
            <li class="nav-item">
                <Link href="/admin/subscriber" class="nav-link" >
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title"> Subscribers </span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/newsletter" class="nav-link" >
                    <i class="menu-icon mdi mdi-email-outline"></i>
                    <span class="menu-title"> Newsletters </span>
                </Link>
            </li>
            <li class="nav-item nav-category">Help</li>
            <li class="nav-item">
                <Link href="/admin/seo-managment" class="nav-link" >
                    <i class="mdi mdi-file-find menu-icon"></i>
                    <span class="menu-title"> SEO Management </span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/admin/settings" class="nav-link" >
                    <i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title"> Setting </span>
                </Link>
            </li>
        </ul>
    </nav>

</template>
