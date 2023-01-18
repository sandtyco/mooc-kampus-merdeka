<?php
$uri = current_url(true);
$segment_1 = $uri->getSegment(1);
$segment_2 = $uri->getSegment(2);
?>
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?= base_url() ?>/images/logo-color-kampusmerdeka.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text text-primary">Kampus Merdeka</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="<?= ($segment_1 == 'dashboard') ? "mm-active" : "" ?>">
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">PENDAFTARAN</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Application</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Biodata Diri</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Orang Tua</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>