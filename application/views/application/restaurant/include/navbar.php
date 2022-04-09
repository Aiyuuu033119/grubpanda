<header class="header_in clearfix">
    <div class="container">
        <div id="logo">
            <a href="<?php echo base_url(); ?>/store/list" style="display: flex;align-items: center;justify-content: center;">
                <img src="<?php echo base_url(); ?>assets/img/dist/logo.png" width="60" height="45" alt="">
                <h2 class="ml-2 mb-0 text-center" style="color: #fff;font-weight: 600;font-size: 1.25rem;">GrubPanda</h2>
            </a>
        </div>
        <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
        <!-- /top_menu -->
        <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="index.html"><img src="img/logo.svg" width="162" height="35" alt=""></a>
            </div>
            <ul>
                <!-- <li class="submenu">
                    <a href="<?php echo base_url(); ?>/store/list" class="show-submenu">Store</a>
                </li>
                <li class="submenu">
                    <a href="#0" class="show-submenu">Cart</a>
                </li>
                <li class="submenu">
                    <a href="#0" class="show-submenu">Orders</a>
                </li>
                <li class="submenu">
                    <a href="#0" class="show-submenu">Wishlist</a>
                </li> -->
                <li class="submenu">
                    <a href="<?php echo base_url()?>auth/userLogout" class="show-submenu">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</header>