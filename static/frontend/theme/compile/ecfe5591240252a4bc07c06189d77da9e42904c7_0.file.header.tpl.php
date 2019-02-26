<?php
/* Smarty version 3.1.34-dev-7, created on 2018-11-14 12:50:25
  from '/var/www/kabbi.site/public_html/frontend/theme/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5bebefe1734cc6_13611954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecfe5591240252a4bc07c06189d77da9e42904c7' => 
    array (
      0 => '/var/www/kabbi.site/public_html/frontend/theme/templates/header.tpl',
      1 => 1542189010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebefe1734cc6_13611954 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kabbi corporative site</title>
    <meta name="description" content="Kabbi corporative site">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    <?php echo '</script'; ?>
>
    <link href="/frontend/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" />
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
<div class="m-grid m-grid--hor m-grid--root m-page">
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.php" class="m-brand__logo-wrapper">
                                <img alt="" src="/frontend/img/clogo.png" />
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <h2 style="position: absolute; margin-left: 20px; margin-top: 25px;">Kabbi hotel</h2>
                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch"
                             m-quicksearch-mode="default">

                            <!--BEGIN: Search Results -->
                            <div class="m-dropdown__wrapper">
                                <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                                            <div class="m-dropdown__content m-list-search m-list-search--skin-light">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--BEGIN: END Results -->
                        </div>
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                                    <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                        <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-share"></i>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic m--hide">
													<img src="/frontend/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
												</span>
                                        <span class="m-nav__link-icon m-topbar__usericon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
                                        <span class="m-topbar__username m--hide">Nick</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center">
                                                <div class="m-card-user m-card-user--skin-light">
                                                    <div class="m-card-user__pic">
                                                        <img src="/frontend/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">Mark Andre</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">2</span>
																				</span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

            <!-- BEGIN: Brand -->
            <div class="m-brand  m-brand--skin-light ">
                <a href="index.html" class="m-brand__logo">
                    <img alt="" src="/frontend/img/clogo.png" />
                </a>
            </div>

            <!-- END: Brand -->

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="true" m-menu-dropdown-timeout="500">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight" aria-haspopup="true" m-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-menu"></i>
                            <span class="m-menu__link-text">Applications</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <div class="m-menu__wrapper">
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item  m-menu__item--parent m-menu__item--submenu-fullheight" aria-haspopup="true">
												<span class="m-menu__link">
													<span class="m-menu__link-text">Applications</span>
												</span>
                                    </li>
                                    <li class="m-menu__section ">
                                        <h4 class="m-menu__section-text">Modules</h4>
                                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-mode="accordion">
                                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__link-text">Resources</span>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu ">
                                            <span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Timesheet</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Payroll</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Clients</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Finance</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-mode="accordion" m-menu-link-redirect="1">
                                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">Support</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--danger">23</span>
															</span>
														</span>
													</span>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu ">
                                            <span class="m-menu__arrow"></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-mode="accordion" m-menu-link-redirect="1">
                                                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Cases</span>
                                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                    <div class="m-menu__submenu ">
                                                        <span class="m-menu__arrow"></span>
                                                        <ul class="m-menu__subnav">
                                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">Pending</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--warning">10</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">Urgent</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--danger">6</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">Done</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--success">2</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                                <a href="inner.html" class="m-menu__link ">
                                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                                    <span class="m-menu__link-title">
																				<span class="m-menu__link-wrap">
																					<span class="m-menu__link-text">Archive</span>
																					<span class="m-menu__link-badge">
																						<span class="m-badge m-badge--info m-badge--wide">245</span>
																					</span>
																				</span>
																			</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Clients</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                    <a href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                            <span></span>
                                                        </i>
                                                        <span class="m-menu__link-text">Audit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Administration</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Management</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section ">
                                        <h4 class="m-menu__section-text">Orders</h4>
                                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Order Management</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">Delivery</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--focus">2</span>
															</span>
														</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Products</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__section ">
                                        <h4 class="m-menu__section-text">Reports</h4>
                                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Accounting</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
													<span class="m-menu__link-title">
														<span class="m-menu__link-wrap">
															<span class="m-menu__link-text">Products</span>
															<span class="m-menu__link-badge">
																<span class="m-badge m-badge--accent m-badge--wide m-badge--rounded">new</span>
															</span>
														</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">Sales</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                        <a href="inner.html" class="m-menu__link ">
                                            <span class="m-menu__link-text">IPO</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-add"></i>
                            <span class="m-menu__link-text">Add</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Add</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-commenting"></i>
                                        <span class="m-menu__link-text">Post</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-user"></i>
                                        <span class="m-menu__link-text">Member</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-cart-arrow-down"></i>
                                        <span class="m-menu__link-text">Order</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-icon la la-coffee"></i>
                                        <span class="m-menu__link-text">Entry</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true" m-menu-link-redirect="1">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-stopwatch"></i>
                            <span class="m-menu__link-text">Customers</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu ">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom" aria-haspopup="true" m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Customers</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Cases</span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Pending</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--warning">10</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Urgent</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--danger">6</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Done</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--success">2</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Archive</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--info m-badge--wide">245</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Clients</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Audit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-settings"></i>
                            <span class="m-menu__link-text">Settings</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Settings</span>
											</span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Profile</span>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu ">
                                        <span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-computer"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Pending</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--warning">10</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Urgent</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--danger">6</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Done</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--success">2</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                                <a href="inner.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                                    <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Archive</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--info m-badge--wide">245</span>
																	</span>
																</span>
															</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Accounts</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Help</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle">
                            <i class="m-menu__link-icon flaticon-info"></i>
                            <span class="m-menu__link-text">Help</span>
                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                        </a>
                        <div class="m-menu__submenu m-menu__submenu--up">
                            <span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">Help</span>
											</span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Support</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Blog</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Documentation</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                                    <a href="inner.html" class="m-menu__link ">
                                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="m-menu__link-text">Terms</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- END: Aside Menu -->
        </div>
        <div class="m-aside-menu-overlay"></div>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">Moscow</h3> <!------------------------------City hotel-------------------------->
                    </div>
                    <div>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content"><!--======================================================================================== START MAIN CONTENT =======================================-->
            <!--==========================================================================================================================================================================--><?php }
}
