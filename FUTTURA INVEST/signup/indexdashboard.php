<?php
    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<!--begin::Head-->

<head>
    <titleb>BOA NOITE</title>

    <link rel="shortcut icon" href="../../img/favicon.png" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="../dashboard/bootstrap5admindashboard/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../dashboard/bootstrap5admindashboard-main/css/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="../dashboard/bootstrap5admindashboard-main/css/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../dashboard/bootstrap5admindashboard-main/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>


    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside " data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_toggle">

                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto pt-9 pb-7 px-9" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="index.html">
                        <img style="width: 50%; height: 50%;" alt="Logo" src="../../img/LogotipoFuttura.png"
                            class="max-h-50px logo-default" />
                        <img style="width: 50%; height: 50%;" alt="Logo" src="../../img/LogotipoFuttura.png"
                            class="max-h-50px logo-minimize" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->

                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid px-3 px-lg-6">
                    <!--begin::Aside Menu-->

                    <!--begin::Menu-->
                    <div class="menu menu-column menu-sub-indention menu-active-bg menu-pill menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-arrow-gray-500 fw-semibold fs-5 my-5 mt-lg-2 mb-lg-0"
                        id="kt_aside_menu" data-kt-menu="true">

                        <div class="hover-scroll-y me-n3 pe-3" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                            data-kt-scroll-wrappers="#kt_aside_menu"
                            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="20px">

                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion mb-1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i></span><span class="menu-title">Meus
                                        investimentos</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                            href="index.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Minhas participações</span></a><!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="../pages/avisosimportantes.html" target="_blank"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Avisos importantes</span></a><!--end:Menu link-->
                                    </div>
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <a href="../../empreendimentos.html" target="_blank">
                                <div class="menu-item menu-accordion mb-1">
                                    <span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-gift fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i></span><span class="menu-title">Novas
                                            oportunidades</span></span>
                                </div>
                            </a>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <!--begin:Menu link-->
                                <span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-user fs-2"><span
                                                class="path1"></span><span class="path2"></span></i></span><span
                                        class="menu-title">Grupo de Investidores</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/account/overview.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Todos os investidores</span></a><!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/account/settings.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Minhas conexões</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/account/security.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Soliticações</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sign In</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-in/basic.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Basic</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-in/password-reset.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Password Reset</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-in/new-password.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">New Password</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Sign Up</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-up/basic.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Basic</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-up/multi-steps.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Multi-steps</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-up/free-trial.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Free Trial</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/sign-up/coming-soon.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Coming Soon</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/welcome.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Welcome Message</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/verify-email.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Verify Email</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/password-confirmation.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Password Confirmation</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/deactivation.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Account Deactivation</span></a><!--end:Menu link-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/error-404.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Error 404</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/authentication/general/error-500.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Error 500</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Email Templates</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/email/verify-email.html"
                                                    target="_blank"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Verify Email</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/email/invitation.html"
                                                    target="_blank"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Account
                                                        Invitation</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/email/password-reset.html"
                                                    target="_blank"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Password Reset</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/authentication/email/password-change.html"
                                                    target="_blank"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Password
                                                        Changed</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-handcart fs-2"></i></span><span
                                        class="menu-title">Futurra Shop</span></span>
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <a href="../pages/avisosimportantes.html">
                                <div class="menu-item menu-accordion mb-1">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-briefcase fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i></span><span class="menu-title">Avisos
                                            importantes</span></span>
                                </div>
                            </a>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-shield-tick fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">PAdmin</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">

                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Usuários</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/apps/user-management/users/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Alterar/Excluir</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/apps/user-management/users/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Chamados</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Empreendimentos</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/apps/user-management/roles/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Alterações</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="/rider-html-pro/apps/user-management/roles/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Chamados</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/apps/user-management/permissions.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">FAQ Administração</span></a><!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                            class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i></span><span
                                        class="menu-title">Chats</span><span
                                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/apps/chat/private.html"><span
                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Chats privados</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/apps/chat/group.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Chat geral</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                            href="/rider-html-pro/apps/chat/drawer.html"><span class="menu-bullet"><span
                                                    class="bullet bullet-dot"></span></span><span
                                                class="menu-title">Chat Administração</span></a><!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div><!--end:Menu sub-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                    href="../pages/calendar.html" target="_blank"><span class="menu-icon"><i
                                            class="ki-duotone ki-calendar-8 fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span><span
                                                class="path6"></span></i></span><span class="menu-title">Próximos
                                        encontros</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item"><!--begin:Menu content-->
                                <div class="menu-content">
                                    <div class="separator mx-1 my-4"></div>
                                </div><!--end:Menu content-->
                            </div><!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item mb-1"><!--begin:Menu link--><a class="menu-link"
                                    href="https://www.youtube.com/" target="_blank"
                                    title="Check out over 200 in-house components, plugins and ready for use solutions"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right"><span class="menu-icon"><i
                                            class="ki-duotone ki-element-8 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span class="menu-title">Conteúdos e
                                        Podcasts</span></a><!--end:Menu link--></div>
                            <!--end:Menu item--><!--begin:Menu item-->
                            <div class="menu-item mb-1"><!--begin:Menu link--><a class="menu-link" href="#"
                                    target="_blank" title="Check out the complete documentation"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                    data-bs-placement="right"><span class="menu-icon"><i
                                            class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span
                                                class="path2"></span></i></span><span
                                        class="menu-title">Documentação</span></a><!--end:Menu link--></div>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside menu-->

                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto px-6 pb-5" id="kt_aside_footer">
                    <a href="../../contato.html" class="btn btn-light-primary w-100">
                        Precisa de ajuda?</a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->


            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">


                <!--begin::Header-->
                <div id="kt_header" class="header " data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">

                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex align-items-stretch justify-content-between"
                        id="kt_header_container">

                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 mb-5 mb-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">

                            <!--begin::Heading-->
                            <h1 class="text-gray-900 fw-bold mt-1 mb-1 fs-2">
                                Olá, seja bem-vindo! <small class="text-muted fs-6 fw-normal ms-1"></small>
                            </h1>
                            <!--end::Heading-->
                        </div>
                        <!--end::Page title--->

                        <!--begin::Logo bar-->
                        <div class="d-flex d-lg-none align-items-center flex-grow-1">
                            <!--begin::Aside Toggle-->
                            <div class="btn btn-icon btn-circle btn-active-light-primary ms-n2 me-1"
                                id="kt_aside_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                            <!--end::Aside Toggle-->

                            <!--begin::Logo-->
                            <a href="/rider-html-pro/index.html" class="d-lg-none">
                                <img alt="Logo" src="images/logo-compact.svg" class="max-h-40px" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Logo bar-->

                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <!--begin::Search-->
                            <div class="d-flex align-items-stretch ms-2 ms-lg-3">

                                <!--begin::Search-->
                                <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                                    <!--begin::Search toggle-->
                                    <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                        id="kt_header_search_toggle">
                                        <div
                                            class="btn btn-icon btn-active-light-primaryw-35px h-35px w-md-40px h-md-40px">
                                            <i class="ki-duotone ki-magnifier fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                    </div>
                                    <!--end::Search toggle-->

                                    <!--begin::Menu-->
                                    <div data-kt-search-element="content"
                                        class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                        <!--begin::Wrapper-->
                                        <div data-kt-search-element="wrapper">
                                            <!--begin::Form-->
                                            <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                                autocomplete="off">
                                                <!--begin::Icon-->
                                                <i
                                                    class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Icon-->

                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="search-input  form-control form-control-flush ps-10"
                                                    name="search" value="" placeholder="Search..."
                                                    data-kt-search-element="input" />
                                                <!--end::Input-->

                                                <!--begin::Spinner-->
                                                <span
                                                    class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                    data-kt-search-element="spinner">
                                                    <span
                                                        class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                </span>
                                                <!--end::Spinner-->

                                                <!--begin::Reset-->
                                                <span
                                                    class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                    data-kt-search-element="clear">
                                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span
                                                            class="path1"></span><span class="path2"></span></i> </span>
                                                <!--end::Reset-->

                                                <!--begin::Toolbar-->
                                                <div class="position-absolute top-50 end-0 translate-middle-y"
                                                    data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                        data-bs-toggle="tooltip" title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Preferences toggle-->

                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                            <!--end::Form-->

                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200 mb-6"></div>
                                            <!--end::Separator-->
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-350px">
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0  pb-5"
                                                        data-kt-search-element="category-title">
                                                        Users </h3>
                                                    <!--end::Category title-->




                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="images/avatars/300-6.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Karina Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing
                                                                Manager</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="images/avatars/300-2.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                            <span class="fs-7 fw-semibold text-muted">Software
                                                                Engineer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="images/avatars/300-9.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Ana Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI/UX
                                                                Designer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="images/avatars/300-14.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                            <span class="fs-7 fw-semibold text-muted">Art
                                                                Director</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="images/avatars/300-11.jpg" alt="" />
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                            <span class="fs-7 fw-semibold text-muted">System
                                                                Administrator</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Customers </h3>
                                                    <!--end::Category title-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="images/svg/brand-logos/volicity-9.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="images/svg/brand-logos/tvit.svg" alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                            <span class="fs-7 fw-semibold text-muted">Web
                                                                Development</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="images/svg/misc/infography.svg" alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                            <span
                                                                class="fs-7 fw-semibold text-muted">Administration</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="images/svg/brand-logos/leaf.svg" alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="images/svg/brand-logos/tower.svg" alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                            <span class="fs-7 fw-semibold text-muted">Google
                                                                Adwords</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->

                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Projects </h3>
                                                    <!--end::Category title-->


                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Si-Fi Project by AU
                                                                Themes</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Shopix Mobile App
                                                                Planning</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                                Discussion</span>
                                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->



                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Dashboard Analitics
                                                                Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Icon-->
                                                <div class="pt-10 pb-10">
                                                    <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Message-->
                                                <div class="pb-15 fw-semibold">
                                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                    <div class="text-muted fs-7">Please try again with a different query
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Contains the word" name="query" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type" value="has"
                                                            checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                            All
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="users" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Users
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="orders" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Orders
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="projects" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Projects
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="assignedto"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Assigned to" value="" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="collaborators"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Collaborators" value="" />
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="has" checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                            Has attachment
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->

                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="any" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                            Any
                                                        </span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <select name="timezone" aria-label="Select a Timezone"
                                                    data-control="select2" data-dropdown-parent="#kt_header_search"
                                                    data-placeholder="date_period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="next">Within the next</option>
                                                    <option value="last">Within the last</option>
                                                    <option value="between">Between</option>
                                                    <option value="on">On</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <input type="number" name="date_number"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Lenght" value="" />
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="date_typer" aria-label="Select a Timezone"
                                                        data-control="select2" data-dropdown-parent="#kt_header_search"
                                                        data-placeholder="Period"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="days">Days</option>
                                                        <option value="weeks">Weeks</option>
                                                        <option value="months">Months</option>
                                                        <option value="years">Years</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                                <a href="/rider-html-pro/utilities/search/horizontal.html"
                                                    class="btn btn-sm fw-bold btn-primary"
                                                    data-kt-search-element="advanced-options-form-search">Search</a>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="pb-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Projects
                                                    </span>

                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Targets
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Affiliate Programs
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Referrals
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                        Users
                                                    </span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end pt-7">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="preferences-dismiss">Cancel</button>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                                    Changes</button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Search-->

                            <!--begin::Activities-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3">
                            </div>
                            <!--end::Activities-->

                            <!--begin::Notifications-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-active-light-primary position-relative w-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i>
                                </div>

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px" data-kt-menu="true">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Notifications
                                                <span class="badge badge-light-success fs-7 fw-500 ms-3">24
                                                    reports</span>
                                            </h3>
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body p-0">
                                            <!--begin::Notifications-->
                                            <div class="mh-350px scroll-y py-3">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-abstract-26 text-warning fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Developer
                                                            Library added</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">2 hours ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-credit-cart text-danger fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Credit
                                                            card expired</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">1 day ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-basket text-primary fs-1"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">New
                                                            Order placed</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">5 days ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-duotone ki-profile-circle text-info fs-1"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span class="path3"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">New
                                                            user library added</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">2 weeks ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-heart text-primary fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Mark
                                                            Simpson liked your page</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">1 month ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-price-tag text-success fs-1"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span class="path3"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">New
                                                            project saved</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">2 hours ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-setting-2 text-warning fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Review
                                                            privacy policy</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">1 day ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-trash text-danger fs-1"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Order
                                                            deleted</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">5 days ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-arrows-circle text-primary fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">System
                                                            update reminder</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">2 weeks ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-hover-lighten py-3 px-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-credit-cart text-warning fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="mb-1 pe-3 flex-grow-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-900 text-hover-primary fw-semibold">Credit
                                                            card expiring</a>
                                                        <div class="text-gray-500 fw-semibold fs-7">1 week ago</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Notifications-->
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card footer-->
                                        <div class="card-footer text-center py-5">
                                            <a href="/rider-html-pro/account/activity.html"
                                                class="btn btn-light btn-active-light-primary btn-sm">All
                                                Notifications</a>
                                        </div>
                                        <!--end::Card footer-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Menu--> <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->

                            <!--begin::Chat-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-active-light-primary position-relative w-35px h-35px w-md-40px h-md-40px"
                                    id="kt_drawer_chat_toggle">
                                    <i class="ki-duotone ki-message-text-2 fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
                                    </span>
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <div class="d-flex align-items-center ms-2 ms-lg-3">

                                <!--begin::Menu toggle-->
                                <a href="#"
                                    class="btn btn-icon btn-active-light-primaryw-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-2"><span class="path1"></span><span
                                            class="path2"></span></i></a>
                                <!--begin::Menu toggle-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span><span class="path7"></span><span
                                                        class="path8"></span><span class="path9"></span><span
                                                        class="path10"></span></i> </span>
                                            <span class="menu-title">
                                                Claro
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Escuro
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i> </span>
                                            <span class="menu-title">Sistema</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->

                            </div>
                            <!--end::Theme mode-->

                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <img alt="Pic" src="../dashboard/css/images/avatars/300-1.jpg" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="../dashboard/css/images/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Max Smith <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    max@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/rider-html-pro/account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/rider-html-pro/apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span
                                                    class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/rider-html-pro/account/referrals.html" class="menu-link px-5">
                                                    Referrals
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/rider-html-pro/account/billing.html" class="menu-link px-5">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/rider-html-pro/account/statements.html"
                                                    class="menu-link px-5">
                                                    Payments
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/rider-html-pro/account/statements.html"
                                                    class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                        title="View your statements">
                                                        <i class="ki-duotone ki-information-5 fs-5"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">
                                                            Notifications
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/rider-html-pro/account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="/rider-html-pro/account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="signout.php"
                                            class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User -->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid fs-6" id="kt_content">
                    <!--begin::Container-->
                    <div class=" container-xxl " id="kt_content_container">
                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-10">

                                <!--begin::Engage widget 1-->
                                <div class="card h-md-100" dir="ltr">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column flex-center">
                                        <!--begin::Heading-->
                                        <div class="mb-2">
                                            <!--begin::Title-->
                                            <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                                Faça seu  <br />
                                                <span class="fw-bolder"> Bid a New Shipment</span>
                                            </h1>
                                            <!--end::Title-->

                                            <!--begin::Illustration-->
                                            <div class="py-10 text-center">
                                                <img src="images/svg/illustrations/easy/3.svg"
                                                    class="theme-light-show w-200px" alt="" />
                                                <img src="images/svg/illustrations/easy/3-dark.svg"
                                                    class="theme-dark-show w-200px" alt="" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Links-->
                                        <div class="text-center mb-1">
                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_bidding"
                                                data-bs-toggle="modal">
                                                Start Now </a>
                                            <!--end::Link-->

                                            <!--begin::Link-->
                                            <a class="btn btn-sm btn-light"
                                                href="/rider-html-pro/apps/invoices/view/invoice-2.html">
                                                Quick Guide </a>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Links-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Engage widget 1-->

                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-8 mb-5 mb-xl-10">
                                <!--begin::Row-->
                                <div class="row g-lg-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                                        <!--begin::Card widget 12-->
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <!--begin::Statistics-->
                                                <div class="mb-4 px-9">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center mb-2">


                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->
                                                        <span
                                                            class="d-flex align-items-end text-gray-500 fs-6 fw-semibold">
                                                            Tons </span>

                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Total Online
                                                        Sales</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_12_chart" class="min-h-auto"
                                                    style="height: 125px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 12-->


                                        <!--begin::Card widget 10-->
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                                    <!--end::Amount-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings
                                                        This Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Chart-->
                                                    <div class="d-flex me-7 me-xxl-10">
                                                        <div id="kt_card_widget_10_chart" class="min-h-auto"
                                                            style="height: 78px; width: 78px" data-kt-size="78"
                                                            data-kt-line="11">
                                                        </div>
                                                    </div>
                                                    <!--end::Chart-->

                                                    <!--begin::Labels-->
                                                    <div class="d-flex flex-column content-justify-center flex-grow-1">
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 bg-success me-3">
                                                            </div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                Used Truck freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">45%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3">
                                                            </div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                Used Ship freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">21%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 me-3"
                                                                style="background-color: #E4E6EF"></div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">
                                                                Used Plane freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">34%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 10-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">

                                        <!--begin::Card widget 13-->
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <!--begin::Statistics-->
                                                <div class="mb-4 px-9">
                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center mb-2">


                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->

                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Statistics-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-500">Total Shipments</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_13_chart" class="min-h-auto"
                                                    style="height: 125px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 13-->




                                        <!--begin::Card widget 7-->
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span
                                                        class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                                    <!--end::Amount-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This
                                                        Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                                <!--begin::Title-->
                                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                                                    Heroes</span>
                                                <!--end::Title-->

                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Alan Warden">
                                                        <span
                                                            class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Michael Eberon">
                                                        <img alt="Pic" src="images/avatars/300-11.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Susan Redwood">
                                                        <span
                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Melody Macy">
                                                        <img alt="Pic" src="images/avatars/300-2.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Perry Matthew">
                                                        <span
                                                            class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Barry Walter">
                                                        <img alt="Pic" src="images/avatars/300-12.jpg" />
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span
                                                            class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                                    </a>
                                                </div>
                                                <!--end::Users group-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 7-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4 mb-xl-10">

                                <!--begin::List widget 10-->
                                <div class="card card-flush h-lg-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Shipment History</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip'
                                                data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse"
                                                title="Logistics App is coming soon">View All</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Nav-->
                                        <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 p-0">
                                                <!--begin::Link-->
                                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                        Notable
                                                    </span>
                                                    <!--end::Subtitle-->

                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                        Delivered
                                                    </span>
                                                    <!--end::Subtitle-->

                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="nav-item col-4 mx-0 px-0">
                                                <!--begin::Link-->
                                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                                    data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                                    <!--begin::Subtitle-->
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                                        Shipping
                                                    </span>
                                                    <!--end::Subtitle-->

                                                    <!--begin::Bullet-->
                                                    <span
                                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Bullet-->
                                            <span
                                                class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                            <!--end::Bullet-->
                                        </ul>
                                        <!--end::Nav-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-content">

                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">

                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                    Harbor</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Sicily,
                                                                    Italy</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Tallin,
                                                                    EST</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Brussels,
                                                                    Belgium</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-delivery text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-500 fs-6 fw-semibold">Delivery
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                    Drydock Boston</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Boston,
                                                                    USA</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-danger fw-bold my-2 fs-8">Delayed</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                                    Singapore</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Tap pane-->

                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade " id="kt_list_widget_10_tab_2">

                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                                    Singapore</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Brussels,
                                                                    Belgium</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                    Drydock Boston</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Boston,
                                                                    USA</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                    Harbor</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Sicily,
                                                                    Italy</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Tallin,
                                                                    EST</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Tap pane-->

                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade " id="kt_list_widget_10_tab_3">

                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Mina
                                                                    St - Zayed Port</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Abu Dhabi,
                                                                    UAE</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">27
                                                                    Drydock Boston</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Boston,
                                                                    USA</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-airplane-square text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span class="fs-6 text-gray-500 fw-semibold d-block">KLM
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Schipol
                                                                    Airport, Amsterdam</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                                    Cargo</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                                    Singapore</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i class="ki-duotone ki-ship text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                                    Harbor</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Sicily,
                                                                    Italy</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Hektor
                                                                    Container Hotel</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Tallin,
                                                                    EST</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-6"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="m-0">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-sm-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-45px me-4">
                                                            <span class="symbol-label bg-primary">
                                                                <i
                                                                    class="ki-duotone ki-truck text-inverse-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                                    Freight</a>

                                                                <span
                                                                    class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                            </div>

                                                            <span
                                                                class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Wrapper-->

                                                    <!--begin::Timeline-->
                                                    <div class="timeline">
                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center mb-7">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-cd fs-2 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Haven
                                                                    van Rotterdam</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Rotterdam,
                                                                    Netherlands</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->

                                                        <!--begin::Timeline item-->
                                                        <div class="timeline-item align-items-center">
                                                            <!--begin::Timeline line-->
                                                            <div class="timeline-line"></div>
                                                            <!--end::Timeline line-->

                                                            <!--begin::Timeline icon-->
                                                            <div class="timeline-icon">
                                                                <i class="ki-duotone ki-geolocation fs-2 text-info"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Timeline icon-->

                                                            <!--begin::Timeline content-->
                                                            <div class="timeline-content m-0">
                                                                <!--begin::Title-->
                                                                <span
                                                                    class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                                <!--end::Title-->

                                                                <!--begin::Title-->
                                                                <span class="fs-6 fw-bold text-gray-800">Brussels,
                                                                    Belgium</span>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Timeline content-->
                                                        </div>
                                                        <!--end::Timeline item-->
                                                    </div>
                                                    <!--end::Timeline-->
                                                </div>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Tap pane-->

                                        </div>
                                        <!--end::Tab Content-->
                                    </div>
                                    <!--end: Card Body-->
                                </div>
                                <!--end::List widget 10-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-8 mb-5 mb-xl-10">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xxl-6">
                                        <!--begin::Chart widget 6-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7 mb-3">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Top Selling
                                                        Categories</span>
                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social
                                                        visitors</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="/rider-html-pro/apps/ecommerce/sales/listing.html"
                                                        class="btn btn-sm btn-light">View All</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body py-0 ps-6 mt-n12">
                                                <div id="kt_charts_widget_6"></div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 6-->


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xxl-6 mb-5 mb-xl-0">

                                        <!--begin::List widget 8-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7 mb-5">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Visits by
                                                        Country</span>
                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">20 countries share
                                                        97% visits</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="/rider-html-pro/apps/ecommerce/sales/listing.html"
                                                        class="btn btn-sm btn-light">View All</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Items-->
                                                <div class="m-0">

                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/united-states.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                                                    States</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        2.6%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/brazil.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All
                                                                    Social Channels </span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        0.4%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/turkey.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                                    Campaigns</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        0.2%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/france.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                                    Radius visits</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        4.1%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/india.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many
                                                                    Sources</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        8.3%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="images/flags/sweden.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="" />
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                        1.9%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::LIst widget 8-->


                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row h-xxl-50">
                                    <!--begin::Col-->
                                    <div class="col">


                                        <!--begin::Chart widget 10-->
                                        <div class="card card-flush h-xxl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Freight
                                                        Tonnage</span>
                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">3,567,457
                                                        tons</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                                    <div data-kt-daterangepicker="true"
                                                        data-kt-daterangepicker-opens="left"
                                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                        <!--begin::Display range-->
                                                        <div class="text-gray-600 fw-bold">
                                                            Loading date range...
                                                        </div>
                                                        <!--end::Display range-->

                                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span><span class="path6"></span></i>
                                                    </div>
                                                    <!--end::Daterangepicker-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                                                <!--begin::Nav-->
                                                <ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_1"
                                                            href="#kt_charts_widget_10_tab_content_1">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-ship fs-1 p-0"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Ship </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        " data-bs-toggle="pill" id="kt_charts_widget_10_tab_2"
                                                            href="#kt_charts_widget_10_tab_content_2">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-truck fs-1 p-0"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Truck </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        " data-bs-toggle="pill" id="kt_charts_widget_10_tab_3"
                                                            href="#kt_charts_widget_10_tab_content_3">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-airplane-square fs-1 p-0"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Plane </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                        " data-bs-toggle="pill" id="kt_charts_widget_10_tab_4"
                                                            href="#kt_charts_widget_10_tab_content_4">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-bus fs-1 p-0"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span><span
                                                                        class="path5"></span></i>
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Title-->
                                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                                Train </span>
                                                            <!--end::Title-->

                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                </ul>
                                                <!--end::Nav-->

                                                <!--begin::Tab Content-->
                                                <div class="tab-content ps-4 pe-6">
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade active show"
                                                        id="kt_charts_widget_10_tab_content_1">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_10_chart_1" class="min-h-auto"
                                                            style="height: 270px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_2">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_10_chart_2" class="min-h-auto"
                                                            style="height: 270px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_3">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_10_chart_3" class="min-h-auto"
                                                            style="height: 270px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_10_tab_content_4">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_10_chart_4" class="min-h-auto"
                                                            style="height: 270px"></div>
                                                        <!--end::Chart-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::Chart widget 10-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-4">

                                <!--begin::List widget 11-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7 mb-3">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Our Fleet Tonnage</span>
                                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 1,247
                                                vehicles</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip'
                                                data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse"
                                                title="Logistics App is coming soon">Review Fleet</a>
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-ship text-gray-600 fs-1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Ships</a>
                                                    <!--end::Title-->

                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">234
                                                        Ships</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Wrapper-->
                                            <div class="text-gray-500 fw-bold fs-7 text-end">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 d-block">2,345,500</span>
                                                <!--end::Number-->

                                                Tons
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Separator-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-truck text-gray-600 fs-1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Trucks</a>
                                                    <!--end::Title-->

                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">1,460
                                                        Trucks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Wrapper-->
                                            <div class="text-gray-500 fw-bold fs-7 text-end">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 d-block">457,200</span>
                                                <!--end::Number-->

                                                Tons
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Separator-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-airplane-square text-gray-600 fs-1"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Planes</a>
                                                    <!--end::Title-->

                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">8
                                                        Aircrafts</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Wrapper-->
                                            <div class="text-gray-500 fw-bold fs-7 text-end">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 d-block">1,240</span>
                                                <!--end::Number-->

                                                Tons
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--end::Separator-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center me-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-bus text-gray-600 fs-1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Trains</a>
                                                    <!--end::Title-->

                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">36
                                                        Trains</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Wrapper-->
                                            <div class="text-gray-500 fw-bold fs-7 text-end">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-6 d-block">804,300</span>
                                                <!--end::Number-->

                                                Tons
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Item-->




                                        <div class="text-center pt-9">
                                            <a href="/rider-html-pro/apps/ecommerce/catalog/add-product.html"
                                                class="btn btn-primary">Add Vehicle</a>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List widget 11-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-xl-8">
                                <!--begin::Chart widget 17-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900">Sales Statistics</span>

                                            <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling
                                                Countries</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button
                                                class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span></i>
                                            </button>

                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Remove
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Mute
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Settings
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->

                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Chart container-->
                                        <div id="kt_charts_widget_16_chart" class="w-100 h-350px"></div>
                                        <!--end::Chart container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Chart widget 17-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div class=" container-fluid  d-flex flex-column flex-md-row flex-stack">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-gray-500 fw-semibold me-1">with love</span>
                            <a href="#" target="_blank"
                                class="text-muted text-hover-primary fw-semibold me-2 fs-6">Jassa</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="#" target="_blank" class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="#" target="_blank" class="menu-link px-2">Support</a></li>

                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">
                                    Demos
                                </a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Drawers-->
    <!--begin::Activities drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                You can get more demos by clicking here: <a
                                    href="https://therichpost.com">therichpost.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="images/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span
                                    class="path2"></span></i> </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/rider-html-pro/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="images/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers--> <!--begin::Engage drawers-->

    <!--begin::Exolore drawer-->
    <div id="kt_explore" class="explore bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '440px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_explore_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Purchase Rider HTML Pro </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_explore_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body"
                    data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">

                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-6 px-8 mb-5">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Price-->
                            <h3 class="fs-3 fw-bold mb-0">All-in License</h3>
                            <!--end::Price-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-7">
                            <span class="text-gray-500">Unlimited End Products and SaaS sites with paying users.</span>
                            <a class="explore-link" href="#">License Terms</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Purchase-->
                        <div class="mb-7">
                            <a href="#" class="btn btn-lg explore-btn-primary w-100">
                                Buy Now
                            </a>
                        </div>
                        <!--end::Purchase-->

                        <!--begin::Payment info-->
                        <div class="d-flex flex-column flex-center mb-3">

                            <!--end::Heading-->

                            <!--begin::Payment methods-->
                            <div class="mb-2">
                                <img src="images/svg/payment-methods/paypal.svg" alt="" class="h-30px me-3 rounded-1" />

                                <img src="images/svg/payment-methods/visa.svg" alt="" class="h-30px me-3 rounded-1" />

                                <img src="images/svg/payment-methods/mastercard.svg" alt=""
                                    class="h-30px me-3 rounded-1" />

                                <img src="images/svg/payment-methods/americanexpress.svg" alt=""
                                    class="h-30px rounded-1" />
                            </div>
                            <!--end::Payment methods-->

                            <!--begin::Notice-->
                            <div class="text-gray-500 fs-7">
                                100% money back guarantee!
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Payment info-->
                    </div>
                    <!--end::Licenses-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

        </div>
        <!--end::Card-->
    </div>
    <!--end::Exolore drawer-->
    <!--begin::Help drawer-->
    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Learn & Get Inspired
                </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">

                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at <a href="#" class="">Jassa</a></h2>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question
                                and help others.</span>
                            <a class="explore-link d-none" href="#">FAQs</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Link-->
                        <a href="#" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->

                    <!--begin::Link-->
                    <a href="#" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Documentation </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    From guides and how-tos, to live demos and code examples to get started right away.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="#" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Plugins & Components </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Check out our 300+ in-house components and customized 3rd-party plugins. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="/rider-html-pro/layout-builder.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <i class="ki-duotone ki-design text-info fs-2x fs-lg-3x"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Layout Builder </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Build your layout, preview it and export the HTML for server side integration.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="#" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-gray-900 parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    What's New ? </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Latest features and improvements added with our users feedback in mind. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-500 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->
    <!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_bidding_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Place your bids</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                If you need more info, please check <a href="#" class="fw-bold link-primary">Bidding
                                    Guidelines</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Bid Amount</span>


                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify the bid amount to place in.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <!--begin::Bid options-->
                            <div class="d-flex flex-stack gap-5 mb-3">
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">10</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">50</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">100</button>
                            </div>
                            <!--begin::Bid options-->

                            <input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount"
                                name="bid_amount" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Currency Type</span>


                                <span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                name="currency_type" data-placeholder="Select a Currency Type" name="currency_type">
                                <option value=""></option>
                                <option value="dollar" selected>Dollar</option>
                                <option value="crypto">Crypto</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->


                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Currency</span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Dollar type-->
                            <div class="" data-kt-modal-bidding-type="dollar">
                                <!--begin::Select2-->
                                <select name="currency_dollar" aria-label="Select a Currency"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD"
                                        selected><b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
                                        <b>GBP</b>&nbsp;-&nbsp;British pound
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
                                        <b>AUD</b>&nbsp;-&nbsp;Australian dollar
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
                                        <b>JPY</b>&nbsp;-&nbsp;Japanese yen
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
                                        <b>SEK</b>&nbsp;-&nbsp;Swedish krona
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
                                        <b>CAD</b>&nbsp;-&nbsp;Canadian dollar
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
                                        <b>CHF</b>&nbsp;-&nbsp;Swiss franc
                                    </option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Dollar type-->

                            <!--begin::Crypto type-->
                            <div class="d-none" data-kt-modal-bidding-type="crypto">
                                <!--begin::Select2-->
                                <select name="currency_crypto" aria-label="Select a Coin"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1"
                                        selected>Bitcoin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">
                                        Chainlink</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">
                                        Ethereum</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">
                                        Filecoin</option>

                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Crypto type-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Notice-->

                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-wallet fs-2tx text-primary me-4"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Top up funds</h4>

                                    <div class="fs-6 text-gray-700 "> Not enough funds in your wallet? <a
                                            href="/rider-html-pro/utilities/modals/wizards/top-up-wallet.html"
                                            class="text-bolder">Top up wallet</a>.</div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->


                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
    <!--begin::Modal - View Users-->
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Browse Users</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out our
                            <a href="#" class="link-primary fw-bold">Users Directory</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Users-->
                    <div class="mb-15">
                        <!--begin::List-->
                        <div class="mh-375px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Smith

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Art Director </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Melody Macy

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Analytic </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$50,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Max Smith

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Enginer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$75,900</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Sean Bean

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Developer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$10,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Brian Cox

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                UI/UX Designer </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$20,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Mikaela Collins

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Head Of Marketing </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$9,300</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Francis Mitcham

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Software Arcitect </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$15,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Olivia Wild

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                System Admin </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Neil Owen

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Account Manager </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,800</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Dan Wilson

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Web Desinger </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$90,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Emma Bold

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Corporate Finance </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$5,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Ana Crown

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Customer Relationship </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$70,000</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                            Robert Doe

                                            <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                Marketing Executive </span>
                                        </a>
                                        <!--end::Name-->

                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,500</div>

                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Label-->
                        <div class="fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>

                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                    class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="images/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="images/illustrations/dozzy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="images/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                            Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                            Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="images/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "/rider-html-pro/assets/";        </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="js/plugins.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="js/datatables.bundle.js"></script>
    <script src="js/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="js/widgets.bundle.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/bidding.js"></script>
    <script src="js/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>