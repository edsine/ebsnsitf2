<!-- HTML Code -->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">

        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="kt_app_sidebar_menu" data-kt-menu="true">

            <!-- Main Menu 1: Dashboards -->
            <div class="menu-item">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @include('layouts.dashboard')
                </div>
            </div>

            <!-- Main Menu 2: My Tasks -->
            <div class="menu-item">
                <a href="javascript:;" class="menu-link menu-toggle">My Tasks</a>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @include('shared::layouts.menu')
                </div>
            </div>

            <!-- Main Menu 3: General Tasks -->
            <div class="menu-item">
                <a href="javascript:;" class="menu-link menu-toggle">General Tasks</a>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @include('documentmanager::layouts.menu')
                    @include('claimscompensation::layouts.menu')
                    @include('employermanager::layouts.menu')
                    @include('dtarequests::layouts.menu')
                    @include('humanresource::layouts.menu')
                </div>
            </div>

            <!-- Main Menu 4: Operational Tasks -->
            <div class="menu-item">
                <a href="javascript:;" class="menu-link menu-toggle">Operational Tasks</a>
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @include('layouts.user')
                </div>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>


<!-- JavaScript Code -->
<script>
    // Function to close all dropdowns
    function closeAllDropdowns() {
        const dropdownMenus = document.querySelectorAll('.menu-item');

        dropdownMenus.forEach(dropdown => {
            dropdown.classList.remove('show');
        });
    }

    // Function to toggle dropdown on click
    function toggleDropdown(event) {
        const currentMenu = event.target.closest('.menu-item');
        const allMenus = document.querySelectorAll('.menu-item');

        allMenus.forEach(menu => {
            if (menu !== currentMenu && menu.classList.contains('show')) {
                menu.classList.remove('show');
            }
        });

        currentMenu.classList.toggle('show');
    }

    // Add click event listener to menu toggles
    const menuToggles = document.querySelectorAll('.menu-link.menu-toggle');
    menuToggles.forEach(toggle => {
        toggle.addEventListener('click', toggleDropdown);
    });

    // Close all dropdowns on load or reload
    window.addEventListener('load', closeAllDropdowns);
</script>