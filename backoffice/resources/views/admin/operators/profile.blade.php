@extends('layouts.dashboard.app')

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xxl-8">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="assets/media/avatars/300-1.jpg" alt="image">
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                </div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max
                                            Smith</a>
                                        <a href="#">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                        fill="white"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="#"
                                            class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                                        fill="currentColor"></path>
                                                    <rect x="7" y="6" width="4" height="4"
                                                        rx="2" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Developer
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->SF, Bay Area
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->max@kt.com
                                        </a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                <div class="d-flex my-4">
                                    <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                        <span class="svg-icon svg-icon-3 d-none">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Follow</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                                    <!--begin::Menu-->
                                    <div class="me-0">
                                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="bi bi-three-dots fs-3"></i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        aria-label="Specify a target name for future usage and reference"
                                                        data-kt-initialized="1"></i></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span
                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6"
                                                            width="13" height="2" rx="1"
                                                            transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                                    data-kt-initialized="1">$4,500</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11" y="18"
                                                            width="13" height="2" rx="1"
                                                            transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                        <path
                                                            d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                    data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6"
                                                            width="13" height="2" rx="1"
                                                            transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                    data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                    data-kt-initialized="1">%60</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>
                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                href="../../demo1/dist/pages/user-profile/overview.html">Overview</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                href="../../demo1/dist/pages/user-profile/projects.html">Projects</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                href="../../demo1/dist/pages/user-profile/campaigns.html">Campaigns</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                href="../../demo1/dist/pages/user-profile/documents.html">Documents</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                href="../../demo1/dist/pages/user-profile/followers.html">Followers</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                href="../../demo1/dist/pages/user-profile/activity.html">Activity</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Row-->
            <div class="row g-5 g-xxl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Feeds Widget 1-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-6.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace
                                            Green</a>
                                        <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor"></rect>
                                                    <rect x="14" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                <!--begin::Editor-->
                                <div id="kt_forms_widget_1_editor" class="py-6 ql-container ql-snow">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                        data-placeholder="What is on your mind ?">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com"
                                            data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>
                                <!--end::Editor-->
                                <div class="separator"></div>
                                <!--begin::Toolbar-->
                                <div id="kt_forms_widget_1_editor_toolbar"
                                    class="ql-toolbar d-flex flex-stack py-2 ql-snow">
                                    <div class="me-2">
                                        <span class="ql-formats ql-size ms-0">
                                            <span class="ql-size w-75px ql-picker"><span class="ql-picker-label"
                                                    tabindex="0" role="button" aria-expanded="false"
                                                    aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                        <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11">
                                                        </polygon>
                                                        <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                        </polygon>
                                                    </svg></span><span class="ql-picker-options" aria-hidden="true"
                                                    tabindex="-1" id="ql-picker-options-0"><span tabindex="0"
                                                        role="button" class="ql-picker-item"
                                                        data-value="small"></span><span tabindex="0" role="button"
                                                        class="ql-picker-item ql-selected"></span><span tabindex="0"
                                                        role="button" class="ql-picker-item"
                                                        data-value="large"></span><span tabindex="0" role="button"
                                                        class="ql-picker-item"
                                                        data-value="huge"></span></span></span><select
                                                class="ql-size w-75px" style="display: none;">
                                                <option value="small"></option>
                                                <option selected="selected"></option>
                                                <option value="large"></option>
                                                <option value="huge"></option>
                                            </select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold" type="button"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                    </path>
                                                    <path class="ql-stroke"
                                                        d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-italic" type="button"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="13" y1="4"
                                                        y2="4"></line>
                                                    <line class="ql-stroke" x1="5" x2="11" y1="14"
                                                        y2="14"></line>
                                                    <line class="ql-stroke" x1="8" x2="10" y1="14"
                                                        y2="4"></line>
                                                </svg></button>
                                            <button class="ql-underline" type="button"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                    </path>
                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                        width="12" x="3" y="15">
                                                    </rect>
                                                </svg></button>
                                            <button class="ql-strike" type="button"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke ql-thin" x1="15.5" x2="2.5"
                                                        y1="8.5" y2="9.5"></line>
                                                    <path class="ql-fill"
                                                        d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z">
                                                    </path>
                                                    <path class="ql-fill"
                                                        d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-image" type="button"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12" x="3"
                                                        y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7"
                                                        r="1"></circle>
                                                    <polyline class="ql-even ql-fill"
                                                        points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                </svg></button>
                                            <button class="ql-link" type="button"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="11" y1="7"
                                                        y2="11"></line>
                                                    <path class="ql-even ql-stroke"
                                                        d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                                    </path>
                                                    <path class="ql-even ql-stroke"
                                                        d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-clean" type="button"><svg class=""
                                                    viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="5" x2="13" y1="3"
                                                        y2="3"></line>
                                                    <line class="ql-stroke" x1="6" x2="9.35" y1="12"
                                                        y2="3"></line>
                                                    <line class="ql-stroke" x1="11" x2="15" y1="11"
                                                        y2="15"></line>
                                                    <line class="ql-stroke" x1="15" x2="11" y1="11"
                                                        y2="15"></line>
                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                        width="7" x="2" y="14">
                                                    </rect>
                                                </svg></button>
                                        </span>
                                    </div>
                                    <div class="me-n3">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                            <i class="flaticon2-clip-symbol icon-ms"></i>
                                        </span>
                                        <span class="btn btn-icon btn-sm btn-active-color-primary">
                                            <i class="flaticon2-pin icon-ms"></i>
                                        </span>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 1-->
                    <!--begin::Feeds Widget 2-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-23.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick
                                            Logan</a>
                                        <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor"></rect>
                                                    <rect x="14" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Post-->
                            <div class="mb-5">
                                <!--begin::Text-->
                                <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from
                                    indulging in poorly thought-out metaphors about driving and keep you focused on the
                                    overall structure of your post</p>
                                <!--end::Text-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center mb-5">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="currentColor"></path>
                                                <rect x="6" y="12" width="7" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="6" y="7" width="12" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->120
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->15
                                    </a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Post-->
                            <!--begin::Separator-->
                            <div class="separator mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Reply input-->
                            <form class="position-relative mb-6">
                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"
                                    placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; height: 25px;"></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                        <span class="svg-icon svg-icon-3 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </form>
                            <!--edit::Reply input-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 2-->
                    <!--begin::Feeds Widget 3-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center mb-3">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-21.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles
                                            Nilson</a>
                                        <span class="text-gray-400 fw-bold">Yestarday at 5:06 PM</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor"></rect>
                                                    <rect x="14" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Post-->
                            <div class="mb-7">
                                <!--begin::Text-->
                                <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging
                                    in poorly thought-out metaphors about driving and keep you focused on the overall
                                    structure of your post</div>
                                <!--end::Text-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center mb-5">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="currentColor"></path>
                                                <rect x="6" y="12" width="7" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="6" y="7" width="12" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->12
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->150
                                    </a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Post-->
                            <!--begin::Replies-->
                            <div class="mb-7">
                                <!--begin::Reply-->
                                <div class="d-flex mb-5">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-14.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice
                                                Danchik</a>
                                            <span class="text-gray-400 fw-semibold fs-7">1 day</span>
                                            <a href="#"
                                                class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Post-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put
                                            digital pen to paper you need to make sure you have to sit down and
                                            write.</span>
                                        <!--end::Post-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Reply-->
                                <!--begin::Reply-->
                                <div class="d-flex">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-9.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column flex-row-fluid">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris
                                                Bold</a>
                                            <span class="text-gray-400 fw-semibold fs-7">2 days</span>
                                            <a href="#"
                                                class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Post-->
                                        <span class="text-gray-800 fs-7 fw-normal pt-1">Outlines keep you honest. They
                                            stop you from indulging in poorly</span>
                                        <!--end::Post-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Reply-->
                            </div>
                            <!--end::Replies-->
                            <!--begin::Separator-->
                            <div class="separator mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Reply input-->
                            <form class="position-relative mb-6">
                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"
                                    placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; height: 25px;"></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                        <span class="svg-icon svg-icon-3 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </form>
                            <!--edit::Reply input-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 3-->
                    <!--begin::Feeds Widget 4-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-7.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles
                                            Nilson</a>
                                        <span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor"></rect>
                                                    <rect x="14" y="5" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5" height="5"
                                                        rx="1" fill="currentColor" opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Post-->
                            <div class="mb-7">
                                <!--begin::Text-->
                                <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging
                                    in poorly thought-out metaphors about driving and keep you focused on the overall
                                    structure of your post</div>
                                <!--end::Text-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center mb-5">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="currentColor"></path>
                                                <rect x="6" y="12" width="7" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="6" y="7" width="12" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->22
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->59
                                    </a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Post-->
                            <!--begin::Separator-->
                            <div class="separator mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Reply input-->
                            <form class="position-relative mb-6">
                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"
                                    placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word; height: 25px;"></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                        <span class="svg-icon svg-icon-3 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </form>
                            <!--edit::Reply input-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 4-->
                    <!--begin::Feeds widget 5-->
                    <div class="card d-none" id="kt_widget_5">
                        <!--begin::Body-->
                        <div class="card-body pb-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center mb-5">
                                <!--begin::User-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-7.jpg" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles
                                            Nilson</a>
                                        <span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Menu-->
                                <div class="my-0">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5"
                                                        height="5" rx="1" fill="currentColor"></rect>
                                                    <rect x="14" y="5" width="5"
                                                        height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="5" y="14" width="5"
                                                        height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                    <rect x="14" y="14" width="5"
                                                        height="5" rx="1" fill="currentColor"
                                                        opacity="0.3"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                    Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Post-->
                            <div class="mb-7">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5"
                                    style="background-image:url('assets/media/stock/900x600/19.jpg');"></div>
                                <!--end::Image-->
                                <!--begin::Text-->
                                <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging
                                    in poorly thought-out metaphors about driving and keep you focused on the overall
                                    structure of your post</div>
                                <!--end::Text-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center mb-5">
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="currentColor"></path>
                                                <rect x="6" y="12" width="7" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="6" y="7" width="12" height="2"
                                                    rx="1" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->20
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->50
                                    </a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Post-->
                            <!--begin::Separator-->
                            <div class="separator mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Reply input-->
                            <form class="position-relative mb-6">
                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"
                                    placeholder="Reply.." data-kt-initialized="1" style="overflow: hidden; overflow-wrap: break-word;"></textarea>
                                <div class="position-absolute top-0 end-0 me-n5">
                                    <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com008.svg-->
                                        <span class="svg-icon svg-icon-3 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-2 mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </form>
                            <!--edit::Reply input-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds widget 5-->
                    <!--begin::Feeds widget 4, 5 load more-->
                    <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                        <span class="indicator-label">More Feeds</span>
                        <span class="indicator-progress">Loading...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Feeds widget 4, 5 load more-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Charts Widget 1-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                                <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="14" y="5" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                                <rect x="5" y="14" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                                <rect x="14" y="14" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_62cfa2c3b4978">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_62cfa2c3b4978"
                                                    data-allow-clear="true" data-select2-id="select2-data-10-0vlb"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-12-uqfi"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-11-qx70"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-npjr-container"
                                                            aria-controls="select2-npjr-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-npjr-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;">
                                <div id="apexchartsgg18nyy3"
                                    class="apexcharts-canvas apexchartsgg18nyy3 apexcharts-theme-light"
                                    style="width: 413px; height: 350px;"><svg id="SvgjsSvg1102" width="413"
                                        height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1104" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(47.835205078125, 30)">
                                            <defs id="SvgjsDefs1103">
                                                <linearGradient id="SvgjsLinearGradient1108" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1109" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1110" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1111" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskgg18nyy3">
                                                    <rect id="SvgjsRect1113" width="361.164794921875" height="282.73"
                                                        x="-3" y="-1" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskgg18nyy3"></clipPath>
                                                <clipPath id="nonForecastMaskgg18nyy3"></clipPath>
                                                <clipPath id="gridRectMarkerMaskgg18nyy3">
                                                    <rect id="SvgjsRect1114" width="359.164794921875" height="284.73"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1112" width="8.879119873046875" height="280.73"
                                                x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient1108)" class="apexcharts-xcrosshairs"
                                                y2="280.73" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1146" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1147" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1149"
                                                        font-family="inherit" x="29.597066243489582" y="309.73"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1150">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1152" font-family="inherit"
                                                        x="88.79119873046875" y="309.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1153">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1155" font-family="inherit"
                                                        x="147.9853312174479" y="309.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1156">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1158" font-family="inherit"
                                                        x="207.17946370442706" y="309.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1159">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1161" font-family="inherit"
                                                        x="266.37359619140625" y="309.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1162">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1164" font-family="inherit"
                                                        x="325.56772867838544" y="309.73" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;">
                                                        <tspan id="SvgjsTspan1165">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1183" class="apexcharts-grid">
                                                <g id="SvgjsG1184" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1186" x1="0" y1="0"
                                                        x2="355.164794921875" y2="0" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1187" x1="0" y1="70.1825"
                                                        x2="355.164794921875" y2="70.1825" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1188" x1="0" y1="140.365"
                                                        x2="355.164794921875" y2="140.365" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1189" x1="0" y1="210.5475"
                                                        x2="355.164794921875" y2="210.5475" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1190" x1="0" y1="280.73"
                                                        x2="355.164794921875" y2="280.73" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1185" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1192" x1="0" y1="280.73"
                                                    x2="355.164794921875" y2="280.73" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1191" x1="0" y1="1"
                                                    x2="0" y2="280.73" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1115" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1116" class="apexcharts-series" rel="1"
                                                    seriesName="NetxProfit" data:realIndex="0">
                                                    <path id="SvgjsPath1120"
                                                        d="M 20.717946370442707 280.73L 20.717946370442707 181.79566666666668Q 20.717946370442707 177.79566666666668 24.717946370442707 177.79566666666668L 23.597066243489582 177.79566666666668Q 27.597066243489582 177.79566666666668 27.597066243489582 181.79566666666668L 27.597066243489582 181.79566666666668L 27.597066243489582 280.73L 27.597066243489582 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 20.717946370442707 280.73L 20.717946370442707 181.79566666666668Q 20.717946370442707 177.79566666666668 24.717946370442707 177.79566666666668L 23.597066243489582 177.79566666666668Q 27.597066243489582 177.79566666666668 27.597066243489582 181.79566666666668L 27.597066243489582 181.79566666666668L 27.597066243489582 280.73L 27.597066243489582 280.73z"
                                                        pathFrom="M 20.717946370442707 280.73L 20.717946370442707 280.73L 27.597066243489582 280.73L 27.597066243489582 280.73L 27.597066243489582 280.73L 27.597066243489582 280.73L 27.597066243489582 280.73L 20.717946370442707 280.73"
                                                        cy="177.79566666666668" cx="78.91207885742188" j="0"
                                                        val="44" barHeight="102.93433333333334"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1122"
                                                        d="M 79.91207885742188 280.73L 79.91207885742188 156.06208333333333Q 79.91207885742188 152.06208333333333 83.91207885742188 152.06208333333333L 82.79119873046875 152.06208333333333Q 86.79119873046875 152.06208333333333 86.79119873046875 156.06208333333333L 86.79119873046875 156.06208333333333L 86.79119873046875 280.73L 86.79119873046875 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 79.91207885742188 280.73L 79.91207885742188 156.06208333333333Q 79.91207885742188 152.06208333333333 83.91207885742188 152.06208333333333L 82.79119873046875 152.06208333333333Q 86.79119873046875 152.06208333333333 86.79119873046875 156.06208333333333L 86.79119873046875 156.06208333333333L 86.79119873046875 280.73L 86.79119873046875 280.73z"
                                                        pathFrom="M 79.91207885742188 280.73L 79.91207885742188 280.73L 86.79119873046875 280.73L 86.79119873046875 280.73L 86.79119873046875 280.73L 86.79119873046875 280.73L 86.79119873046875 280.73L 79.91207885742188 280.73"
                                                        cy="152.06208333333333" cx="138.10621134440103" j="1"
                                                        val="55" barHeight="128.66791666666668"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1124"
                                                        d="M 139.10621134440103 280.73L 139.10621134440103 151.38325Q 139.10621134440103 147.38325 143.10621134440103 147.38325L 141.9853312174479 147.38325Q 145.9853312174479 147.38325 145.9853312174479 151.38325L 145.9853312174479 151.38325L 145.9853312174479 280.73L 145.9853312174479 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 139.10621134440103 280.73L 139.10621134440103 151.38325Q 139.10621134440103 147.38325 143.10621134440103 147.38325L 141.9853312174479 147.38325Q 145.9853312174479 147.38325 145.9853312174479 151.38325L 145.9853312174479 151.38325L 145.9853312174479 280.73L 145.9853312174479 280.73z"
                                                        pathFrom="M 139.10621134440103 280.73L 139.10621134440103 280.73L 145.9853312174479 280.73L 145.9853312174479 280.73L 145.9853312174479 280.73L 145.9853312174479 280.73L 145.9853312174479 280.73L 139.10621134440103 280.73"
                                                        cy="147.38325" cx="197.3003438313802" j="2"
                                                        val="57" barHeight="133.34675000000001"
                                                        barWidth="8.879119873046875"></path>
                                                    <path id="SvgjsPath1126"
                                                        d="M 198.3003438313802 280.73L 198.3003438313802 153.72266666666667Q 198.3003438313802 149.72266666666667 202.3003438313802 149.72266666666667L 201.17946370442706 149.72266666666667Q 205.17946370442706 149.72266666666667 205.17946370442706 153.72266666666667L 205.17946370442706 153.72266666666667L 205.17946370442706 280.73L 205.17946370442706 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 198.3003438313802 280.73L 198.3003438313802 153.72266666666667Q 198.3003438313802 149.72266666666667 202.3003438313802 149.72266666666667L 201.17946370442706 149.72266666666667Q 205.17946370442706 149.72266666666667 205.17946370442706 153.72266666666667L 205.17946370442706 153.72266666666667L 205.17946370442706 280.73L 205.17946370442706 280.73z"
                                                        pathFrom="M 198.3003438313802 280.73L 198.3003438313802 280.73L 205.17946370442706 280.73L 205.17946370442706 280.73L 205.17946370442706 280.73L 205.17946370442706 280.73L 205.17946370442706 280.73L 198.3003438313802 280.73"
                                                        cy="149.72266666666667" cx="256.4944763183594" j="3"
                                                        val="56" barHeight="131.00733333333335"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1128"
                                                        d="M 257.4944763183594 280.73L 257.4944763183594 142.02558333333334Q 257.4944763183594 138.02558333333334 261.4944763183594 138.02558333333334L 260.37359619140625 138.02558333333334Q 264.37359619140625 138.02558333333334 264.37359619140625 142.02558333333334L 264.37359619140625 142.02558333333334L 264.37359619140625 280.73L 264.37359619140625 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 257.4944763183594 280.73L 257.4944763183594 142.02558333333334Q 257.4944763183594 138.02558333333334 261.4944763183594 138.02558333333334L 260.37359619140625 138.02558333333334Q 264.37359619140625 138.02558333333334 264.37359619140625 142.02558333333334L 264.37359619140625 142.02558333333334L 264.37359619140625 280.73L 264.37359619140625 280.73z"
                                                        pathFrom="M 257.4944763183594 280.73L 257.4944763183594 280.73L 264.37359619140625 280.73L 264.37359619140625 280.73L 264.37359619140625 280.73L 264.37359619140625 280.73L 264.37359619140625 280.73L 257.4944763183594 280.73"
                                                        cy="138.02558333333334" cx="315.68860880533856" j="4"
                                                        val="61" barHeight="142.70441666666667"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1130"
                                                        d="M 316.68860880533856 280.73L 316.68860880533856 149.04383333333334Q 316.68860880533856 145.04383333333334 320.68860880533856 145.04383333333334L 319.56772867838544 145.04383333333334Q 323.56772867838544 145.04383333333334 323.56772867838544 149.04383333333334L 323.56772867838544 149.04383333333334L 323.56772867838544 280.73L 323.56772867838544 280.73z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 316.68860880533856 280.73L 316.68860880533856 149.04383333333334Q 316.68860880533856 145.04383333333334 320.68860880533856 145.04383333333334L 319.56772867838544 145.04383333333334Q 323.56772867838544 145.04383333333334 323.56772867838544 149.04383333333334L 323.56772867838544 149.04383333333334L 323.56772867838544 280.73L 323.56772867838544 280.73z"
                                                        pathFrom="M 316.68860880533856 280.73L 316.68860880533856 280.73L 323.56772867838544 280.73L 323.56772867838544 280.73L 323.56772867838544 280.73L 323.56772867838544 280.73L 323.56772867838544 280.73L 316.68860880533856 280.73"
                                                        cy="145.04383333333334" cx="374.88274129231775" j="5"
                                                        val="58" barHeight="135.68616666666668"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <g id="SvgjsG1118" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1119" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1121" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1123" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1125" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1127" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1129" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1131" class="apexcharts-series" rel="2"
                                                    seriesName="Revenue" data:realIndex="1">
                                                    <path id="SvgjsPath1135"
                                                        d="M 29.597066243489582 280.73L 29.597066243489582 106.93433333333334Q 29.597066243489582 102.93433333333334 33.59706624348958 102.93433333333334L 32.476186116536454 102.93433333333334Q 36.476186116536454 102.93433333333334 36.476186116536454 106.93433333333334L 36.476186116536454 106.93433333333334L 36.476186116536454 280.73L 36.476186116536454 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 29.597066243489582 280.73L 29.597066243489582 106.93433333333334Q 29.597066243489582 102.93433333333334 33.59706624348958 102.93433333333334L 32.476186116536454 102.93433333333334Q 36.476186116536454 102.93433333333334 36.476186116536454 106.93433333333334L 36.476186116536454 106.93433333333334L 36.476186116536454 280.73L 36.476186116536454 280.73z"
                                                        pathFrom="M 29.597066243489582 280.73L 29.597066243489582 280.73L 36.476186116536454 280.73L 36.476186116536454 280.73L 36.476186116536454 280.73L 36.476186116536454 280.73L 36.476186116536454 280.73L 29.597066243489582 280.73"
                                                        cy="102.93433333333334" cx="87.79119873046875" j="0"
                                                        val="76" barHeight="177.79566666666668"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1137"
                                                        d="M 88.79119873046875 280.73L 88.79119873046875 85.87958333333333Q 88.79119873046875 81.87958333333333 92.79119873046875 81.87958333333333L 91.67031860351562 81.87958333333333Q 95.67031860351562 81.87958333333333 95.67031860351562 85.87958333333333L 95.67031860351562 85.87958333333333L 95.67031860351562 280.73L 95.67031860351562 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 88.79119873046875 280.73L 88.79119873046875 85.87958333333333Q 88.79119873046875 81.87958333333333 92.79119873046875 81.87958333333333L 91.67031860351562 81.87958333333333Q 95.67031860351562 81.87958333333333 95.67031860351562 85.87958333333333L 95.67031860351562 85.87958333333333L 95.67031860351562 280.73L 95.67031860351562 280.73z"
                                                        pathFrom="M 88.79119873046875 280.73L 88.79119873046875 280.73L 95.67031860351562 280.73L 95.67031860351562 280.73L 95.67031860351562 280.73L 95.67031860351562 280.73L 95.67031860351562 280.73L 88.79119873046875 280.73"
                                                        cy="81.87958333333333" cx="146.9853312174479" j="1"
                                                        val="85" barHeight="198.8504166666667"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1139"
                                                        d="M 147.9853312174479 280.73L 147.9853312174479 48.44891666666666Q 147.9853312174479 44.44891666666666 151.9853312174479 44.44891666666666L 150.86445109049478 44.44891666666666Q 154.86445109049478 44.44891666666666 154.86445109049478 48.44891666666666L 154.86445109049478 48.44891666666666L 154.86445109049478 280.73L 154.86445109049478 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 147.9853312174479 280.73L 147.9853312174479 48.44891666666666Q 147.9853312174479 44.44891666666666 151.9853312174479 44.44891666666666L 150.86445109049478 44.44891666666666Q 154.86445109049478 44.44891666666666 154.86445109049478 48.44891666666666L 154.86445109049478 48.44891666666666L 154.86445109049478 280.73L 154.86445109049478 280.73z"
                                                        pathFrom="M 147.9853312174479 280.73L 147.9853312174479 280.73L 154.86445109049478 280.73L 154.86445109049478 280.73L 154.86445109049478 280.73L 154.86445109049478 280.73L 154.86445109049478 280.73L 147.9853312174479 280.73"
                                                        cy="44.44891666666666" cx="206.17946370442706" j="2"
                                                        val="101" barHeight="236.28108333333336"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1141"
                                                        d="M 207.17946370442706 280.73L 207.17946370442706 55.46716666666666Q 207.17946370442706 51.46716666666666 211.17946370442706 51.46716666666666L 210.05858357747394 51.46716666666666Q 214.05858357747394 51.46716666666666 214.05858357747394 55.46716666666666L 214.05858357747394 55.46716666666666L 214.05858357747394 280.73L 214.05858357747394 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 207.17946370442706 280.73L 207.17946370442706 55.46716666666666Q 207.17946370442706 51.46716666666666 211.17946370442706 51.46716666666666L 210.05858357747394 51.46716666666666Q 214.05858357747394 51.46716666666666 214.05858357747394 55.46716666666666L 214.05858357747394 55.46716666666666L 214.05858357747394 280.73L 214.05858357747394 280.73z"
                                                        pathFrom="M 207.17946370442706 280.73L 207.17946370442706 280.73L 214.05858357747394 280.73L 214.05858357747394 280.73L 214.05858357747394 280.73L 214.05858357747394 280.73L 214.05858357747394 280.73L 207.17946370442706 280.73"
                                                        cy="51.46716666666666" cx="265.37359619140625" j="3"
                                                        val="98" barHeight="229.26283333333336"
                                                        barWidth="8.879119873046875">
                                                    </path>
                                                    <path id="SvgjsPath1143"
                                                        d="M 266.37359619140625 280.73L 266.37359619140625 81.20075Q 266.37359619140625 77.20075 270.37359619140625 77.20075L 269.2527160644531 77.20075Q 273.2527160644531 77.20075 273.2527160644531 81.20075L 273.2527160644531 81.20075L 273.2527160644531 280.73L 273.2527160644531 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 266.37359619140625 280.73L 266.37359619140625 81.20075Q 266.37359619140625 77.20075 270.37359619140625 77.20075L 269.2527160644531 77.20075Q 273.2527160644531 77.20075 273.2527160644531 81.20075L 273.2527160644531 81.20075L 273.2527160644531 280.73L 273.2527160644531 280.73z"
                                                        pathFrom="M 266.37359619140625 280.73L 266.37359619140625 280.73L 273.2527160644531 280.73L 273.2527160644531 280.73L 273.2527160644531 280.73L 273.2527160644531 280.73L 273.2527160644531 280.73L 266.37359619140625 280.73"
                                                        cy="77.20075" cx="324.56772867838544" j="4"
                                                        val="87" barHeight="203.52925000000002"
                                                        barWidth="8.879119873046875"></path>
                                                    <path id="SvgjsPath1145"
                                                        d="M 325.56772867838544 280.73L 325.56772867838544 39.09125Q 325.56772867838544 35.09125 329.56772867838544 35.09125L 328.4468485514323 35.09125Q 332.4468485514323 35.09125 332.4468485514323 39.09125L 332.4468485514323 39.09125L 332.4468485514323 280.73L 332.4468485514323 280.73z"
                                                        fill="rgba(228,230,239,1)" fill-opacity="1"
                                                        stroke="transparent" stroke-opacity="1" stroke-linecap="round"
                                                        stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="1"
                                                        clip-path="url(#gridRectMaskgg18nyy3)"
                                                        pathTo="M 325.56772867838544 280.73L 325.56772867838544 39.09125Q 325.56772867838544 35.09125 329.56772867838544 35.09125L 328.4468485514323 35.09125Q 332.4468485514323 35.09125 332.4468485514323 39.09125L 332.4468485514323 39.09125L 332.4468485514323 280.73L 332.4468485514323 280.73z"
                                                        pathFrom="M 325.56772867838544 280.73L 325.56772867838544 280.73L 332.4468485514323 280.73L 332.4468485514323 280.73L 332.4468485514323 280.73L 332.4468485514323 280.73L 332.4468485514323 280.73L 325.56772867838544 280.73"
                                                        cy="35.09125" cx="383.7618611653646" j="5"
                                                        val="105" barHeight="245.63875000000002"
                                                        barWidth="8.879119873046875"></path>
                                                    <g id="SvgjsG1133" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1134" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1136" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1138" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1140" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1142" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                        <g id="SvgjsG1144" className="apexcharts-bar-goals-groups">
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1117" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                                <g id="SvgjsG1132" class="apexcharts-datalabels" data:realIndex="1">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1193" x1="0" y1="0"
                                                x2="355.164794921875" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1194" x1="0" y1="0"
                                                x2="355.164794921875" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1195" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1196" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1197" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1166" class="apexcharts-yaxis" rel="0"
                                            transform="translate(17.835205078125, 0)">
                                            <g id="SvgjsG1167" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText1169" font-family="inherit" x="20"
                                                    y="31.4" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1170">120</tspan>
                                                    <title>120</title>
                                                </text><text id="SvgjsText1172" font-family="inherit" x="20"
                                                    y="101.58250000000001" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1173">90</tspan>
                                                    <title>90</title>
                                                </text><text id="SvgjsText1175" font-family="inherit" x="20"
                                                    y="171.76500000000001" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1176">60</tspan>
                                                    <title>60</title>
                                                </text><text id="SvgjsText1178" font-family="inherit" x="20"
                                                    y="241.94750000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1179">30</tspan>
                                                    <title>30</title>
                                                </text><text id="SvgjsText1181" font-family="inherit" x="20"
                                                    y="312.13" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan1182">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1105" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(228, 230, 239);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                    <!--begin::List Widget 5-->
                    <div class="card mb-5 mb-xxl-8">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bold mb-2 text-dark">Activities</span>
                                <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5"
                                                    rx="1" fill="currentColor"></rect>
                                                <rect x="14" y="5" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                                <rect x="5" y="14" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                                <rect x="14" y="14" width="5" height="5"
                                                    rx="1" fill="currentColor" opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_62cfa2c3b5134">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_62cfa2c3b5134"
                                                    data-allow-clear="true" data-select2-id="select2-data-13-oubg"
                                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option data-select2-id="select2-data-15-u2c8"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-14-rzhy"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-7rhe-container"
                                                            aria-controls="select2-7rhe-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-7rhe-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                            <div class="timeline-label">
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest.
                                        And keep structure</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                        driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                        driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item mb-9">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app
                                        launch preparion meeting</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection
