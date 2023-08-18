@extends('layouts.app')

@section('content')
<h1 class="text-black-50 pt-5">Investment & Treasury Management:<b style="color: #000"> Overview</b></h1>
<br>


<div class="row g-5 g-xl-8 pt-5">
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card shadow bg-body hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"></rect>
                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"></rect>
                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"></rect>
                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">26085</div>
                <div class="fw-semibold text-gray-400">Total Investments</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card shadow bg-dark hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"></path>
                        <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"></path>
                        <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">0</div>
                <div class="fw-semibold text-gray-100">Total Pending Investments</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card shadow bg-warning hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor"></path>
                        <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="text-white fw-bold fs-2 mb-2 mt-5">0</div>
                <div class="fw-semibold text-white">Total Interest Amount</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>

<div class="row g-5 g-xl-8">
    <div class="col-xl-6">
        <!--begin::Charts Widget 5-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Invest Report</span>
                    <!-- <span class="text-muted fw-semibold fs-7">More than 500 new customers</span> -->
                </h3>
                <!--begin::Toolbar-->
                <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_year_btn">Year</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1" id="kt_charts_widget_5_month_btn">Month</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 active" id="kt_charts_widget_5_week_btn">Week</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_5_chart" style="height: 350px; min-height: 365px;">
                    <div id="apexchartst0ofjvm6" class="apexcharts-canvas apexchartst0ofjvm6 apexcharts-theme-light" style="width: 559px; height: 350px;"><svg id="SvgjsSvg6318" width="559" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG6320" class="apexcharts-inner apexcharts-graphical" transform="translate(47.920440673828125, 30)">
                                <defs id="SvgjsDefs6319">
                                    <linearGradient id="SvgjsLinearGradient6324" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop6325" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                        <stop id="SvgjsStop6326" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        <stop id="SvgjsStop6327" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskt0ofjvm6">
                                        <rect id="SvgjsRect6329" width="507.0795593261719" height="282.73" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskt0ofjvm6"></clipPath>
                                    <clipPath id="nonForecastMaskt0ofjvm6"></clipPath>
                                    <clipPath id="gridRectMarkerMaskt0ofjvm6">
                                        <rect id="SvgjsRect6330" width="505.0795593261719" height="284.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect6328" width="10.021591186523438" height="280.73" x="34.48674774169922" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient6324)" class="apexcharts-xcrosshairs" y2="280.73" filter="none" fill-opacity="0.9" x1="34.48674774169922" x2="34.48674774169922"></rect>
                                <g id="SvgjsG6362" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG6363" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText6365" font-family="inherit" x="41.756629943847656" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6366">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText6368" font-family="inherit" x="125.26988983154297" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6369">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText6371" font-family="inherit" x="208.78314971923828" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6372">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText6374" font-family="inherit" x="292.2964096069336" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6375">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText6377" font-family="inherit" x="375.8096694946289" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6378">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText6380" font-family="inherit" x="459.3229293823242" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6381">Jul</tspan>
                                            <title>Jul</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG6417" class="apexcharts-grid">
                                    <g id="SvgjsG6418" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine6420" x1="0" y1="0" x2="501.0795593261719" y2="0" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6421" x1="0" y1="28.073" x2="501.0795593261719" y2="28.073" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6422" x1="0" y1="56.146" x2="501.0795593261719" y2="56.146" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6423" x1="0" y1="84.219" x2="501.0795593261719" y2="84.219" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6424" x1="0" y1="112.292" x2="501.0795593261719" y2="112.292" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6425" x1="0" y1="140.365" x2="501.0795593261719" y2="140.365" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6426" x1="0" y1="168.43800000000002" x2="501.0795593261719" y2="168.43800000000002" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6427" x1="0" y1="196.51100000000002" x2="501.0795593261719" y2="196.51100000000002" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6428" x1="0" y1="224.58400000000003" x2="501.0795593261719" y2="224.58400000000003" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6429" x1="0" y1="252.65700000000004" x2="501.0795593261719" y2="252.65700000000004" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6430" x1="0" y1="280.73" x2="501.0795593261719" y2="280.73" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG6419" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine6432" x1="0" y1="280.73" x2="501.0795593261719" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine6431" x1="0" y1="1" x2="0" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG6331" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG6332" class="apexcharts-series" seriesName="NetxProfit" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath6336" d="M 36.74583435058594 140.365L 36.74583435058594 76.1825Q 36.74583435058594 70.1825 42.74583435058594 70.1825L 38.767425537109375 70.1825Q 44.767425537109375 70.1825 44.767425537109375 76.1825L 44.767425537109375 76.1825L 44.767425537109375 140.365L 44.767425537109375 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 36.74583435058594 140.365L 36.74583435058594 76.1825Q 36.74583435058594 70.1825 42.74583435058594 70.1825L 38.767425537109375 70.1825Q 44.767425537109375 70.1825 44.767425537109375 76.1825L 44.767425537109375 76.1825L 44.767425537109375 140.365L 44.767425537109375 140.365z" pathFrom="M 36.74583435058594 140.365L 36.74583435058594 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 36.74583435058594 140.365" cy="70.1825" cx="119.25909423828125" j="0" val="40" barHeight="70.1825" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6338" d="M 120.25909423828125 140.365L 120.25909423828125 58.636875Q 120.25909423828125 52.636875 126.25909423828125 52.636875L 122.28068542480469 52.636875Q 128.2806854248047 52.636875 128.2806854248047 58.636875L 128.2806854248047 58.636875L 128.2806854248047 140.365L 128.2806854248047 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 120.25909423828125 140.365L 120.25909423828125 58.636875Q 120.25909423828125 52.636875 126.25909423828125 52.636875L 122.28068542480469 52.636875Q 128.2806854248047 52.636875 128.2806854248047 58.636875L 128.2806854248047 58.636875L 128.2806854248047 140.365L 128.2806854248047 140.365z" pathFrom="M 120.25909423828125 140.365L 120.25909423828125 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 120.25909423828125 140.365" cy="52.636875" cx="202.77235412597656" j="1" val="50" barHeight="87.728125" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6340" d="M 203.77235412597656 140.365L 203.77235412597656 32.3184375Q 203.77235412597656 26.3184375 209.77235412597656 26.3184375L 205.7939453125 26.3184375Q 211.7939453125 26.3184375 211.7939453125 32.3184375L 211.7939453125 32.3184375L 211.7939453125 140.365L 211.7939453125 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 203.77235412597656 140.365L 203.77235412597656 32.3184375Q 203.77235412597656 26.3184375 209.77235412597656 26.3184375L 205.7939453125 26.3184375Q 211.7939453125 26.3184375 211.7939453125 32.3184375L 211.7939453125 32.3184375L 211.7939453125 140.365L 211.7939453125 140.365z" pathFrom="M 203.77235412597656 140.365L 203.77235412597656 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 203.77235412597656 140.365" cy="26.3184375" cx="286.2856140136719" j="2" val="65" barHeight="114.04656250000001" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6342" d="M 287.2856140136719 140.365L 287.2856140136719 23.545625Q 287.2856140136719 17.545625 293.2856140136719 17.545625L 289.3072052001953 17.545625Q 295.3072052001953 17.545625 295.3072052001953 23.545625L 295.3072052001953 23.545625L 295.3072052001953 140.365L 295.3072052001953 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 287.2856140136719 140.365L 287.2856140136719 23.545625Q 287.2856140136719 17.545625 293.2856140136719 17.545625L 289.3072052001953 17.545625Q 295.3072052001953 17.545625 295.3072052001953 23.545625L 295.3072052001953 23.545625L 295.3072052001953 140.365L 295.3072052001953 140.365z" pathFrom="M 287.2856140136719 140.365L 287.2856140136719 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 287.2856140136719 140.365" cy="17.545625" cx="369.7988739013672" j="3" val="70" barHeight="122.81937500000001" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6344" d="M 370.7988739013672 140.365L 370.7988739013672 58.636875Q 370.7988739013672 52.636875 376.7988739013672 52.636875L 372.8204650878906 52.636875Q 378.8204650878906 52.636875 378.8204650878906 58.636875L 378.8204650878906 58.636875L 378.8204650878906 140.365L 378.8204650878906 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 370.7988739013672 140.365L 370.7988739013672 58.636875Q 370.7988739013672 52.636875 376.7988739013672 52.636875L 372.8204650878906 52.636875Q 378.8204650878906 52.636875 378.8204650878906 58.636875L 378.8204650878906 58.636875L 378.8204650878906 140.365L 378.8204650878906 140.365z" pathFrom="M 370.7988739013672 140.365L 370.7988739013672 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 370.7988739013672 140.365" cy="52.636875" cx="453.3121337890625" j="4" val="50" barHeight="87.728125" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6346" d="M 454.3121337890625 140.365L 454.3121337890625 93.728125Q 454.3121337890625 87.728125 460.3121337890625 87.728125L 456.33372497558594 87.728125Q 462.33372497558594 87.728125 462.33372497558594 93.728125L 462.33372497558594 93.728125L 462.33372497558594 140.365L 462.33372497558594 140.365z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 454.3121337890625 140.365L 454.3121337890625 93.728125Q 454.3121337890625 87.728125 460.3121337890625 87.728125L 456.33372497558594 87.728125Q 462.33372497558594 87.728125 462.33372497558594 93.728125L 462.33372497558594 93.728125L 462.33372497558594 140.365L 462.33372497558594 140.365z" pathFrom="M 454.3121337890625 140.365L 454.3121337890625 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 454.3121337890625 140.365" cy="87.728125" cx="536.8253936767578" j="5" val="30" barHeight="52.636875" barWidth="10.021591186523438"></path>
                                        <g id="SvgjsG6334" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG6335" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6337" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6339" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6341" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6343" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6345" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG6347" class="apexcharts-series" seriesName="Revenue" rel="2" data:realIndex="1">
                                        <path id="SvgjsPath6351" d="M 36.74583435058594 140.365L 36.74583435058594 187.001875Q 36.74583435058594 193.001875 42.74583435058594 193.001875L 38.767425537109375 193.001875Q 44.767425537109375 193.001875 44.767425537109375 187.001875L 44.767425537109375 187.001875L 44.767425537109375 140.365L 44.767425537109375 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 36.74583435058594 140.365L 36.74583435058594 187.001875Q 36.74583435058594 193.001875 42.74583435058594 193.001875L 38.767425537109375 193.001875Q 44.767425537109375 193.001875 44.767425537109375 187.001875L 44.767425537109375 187.001875L 44.767425537109375 140.365L 44.767425537109375 140.365z" pathFrom="M 36.74583435058594 140.365L 36.74583435058594 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 44.767425537109375 140.365L 36.74583435058594 140.365" cy="193.001875" cx="119.25909423828125" j="0" val="-30" barHeight="-52.636875" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6353" d="M 120.25909423828125 140.365L 120.25909423828125 204.5475Q 120.25909423828125 210.5475 126.25909423828125 210.5475L 122.28068542480469 210.5475Q 128.2806854248047 210.5475 128.2806854248047 204.5475L 128.2806854248047 204.5475L 128.2806854248047 140.365L 128.2806854248047 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 120.25909423828125 140.365L 120.25909423828125 204.5475Q 120.25909423828125 210.5475 126.25909423828125 210.5475L 122.28068542480469 210.5475Q 128.2806854248047 210.5475 128.2806854248047 204.5475L 128.2806854248047 204.5475L 128.2806854248047 140.365L 128.2806854248047 140.365z" pathFrom="M 120.25909423828125 140.365L 120.25909423828125 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 128.2806854248047 140.365L 120.25909423828125 140.365" cy="210.5475" cx="202.77235412597656" j="1" val="-40" barHeight="-70.1825" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6355" d="M 203.77235412597656 140.365L 203.77235412597656 230.86593750000003Q 203.77235412597656 236.86593750000003 209.77235412597656 236.86593750000003L 205.7939453125 236.86593750000003Q 211.7939453125 236.86593750000003 211.7939453125 230.86593750000003L 211.7939453125 230.86593750000003L 211.7939453125 140.365L 211.7939453125 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 203.77235412597656 140.365L 203.77235412597656 230.86593750000003Q 203.77235412597656 236.86593750000003 209.77235412597656 236.86593750000003L 205.7939453125 236.86593750000003Q 211.7939453125 236.86593750000003 211.7939453125 230.86593750000003L 211.7939453125 230.86593750000003L 211.7939453125 140.365L 211.7939453125 140.365z" pathFrom="M 203.77235412597656 140.365L 203.77235412597656 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 211.7939453125 140.365L 203.77235412597656 140.365" cy="236.86593750000003" cx="286.2856140136719" j="2" val="-55" barHeight="-96.5009375" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6357" d="M 287.2856140136719 140.365L 287.2856140136719 239.63875000000002Q 287.2856140136719 245.63875000000002 293.2856140136719 245.63875000000002L 289.3072052001953 245.63875000000002Q 295.3072052001953 245.63875000000002 295.3072052001953 239.63875000000002L 295.3072052001953 239.63875000000002L 295.3072052001953 140.365L 295.3072052001953 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 287.2856140136719 140.365L 287.2856140136719 239.63875000000002Q 287.2856140136719 245.63875000000002 293.2856140136719 245.63875000000002L 289.3072052001953 245.63875000000002Q 295.3072052001953 245.63875000000002 295.3072052001953 239.63875000000002L 295.3072052001953 239.63875000000002L 295.3072052001953 140.365L 295.3072052001953 140.365z" pathFrom="M 287.2856140136719 140.365L 287.2856140136719 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 295.3072052001953 140.365L 287.2856140136719 140.365" cy="245.63875000000002" cx="369.7988739013672" j="3" val="-60" barHeight="-105.27375" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6359" d="M 370.7988739013672 140.365L 370.7988739013672 204.5475Q 370.7988739013672 210.5475 376.7988739013672 210.5475L 372.8204650878906 210.5475Q 378.8204650878906 210.5475 378.8204650878906 204.5475L 378.8204650878906 204.5475L 378.8204650878906 140.365L 378.8204650878906 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 370.7988739013672 140.365L 370.7988739013672 204.5475Q 370.7988739013672 210.5475 376.7988739013672 210.5475L 372.8204650878906 210.5475Q 378.8204650878906 210.5475 378.8204650878906 204.5475L 378.8204650878906 204.5475L 378.8204650878906 140.365L 378.8204650878906 140.365z" pathFrom="M 370.7988739013672 140.365L 370.7988739013672 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 378.8204650878906 140.365L 370.7988739013672 140.365" cy="210.5475" cx="453.3121337890625" j="4" val="-40" barHeight="-70.1825" barWidth="10.021591186523438"></path>
                                        <path id="SvgjsPath6361" d="M 454.3121337890625 140.365L 454.3121337890625 169.45625Q 454.3121337890625 175.45625 460.3121337890625 175.45625L 456.33372497558594 175.45625Q 462.33372497558594 175.45625 462.33372497558594 169.45625L 462.33372497558594 169.45625L 462.33372497558594 140.365L 462.33372497558594 140.365z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskt0ofjvm6)" pathTo="M 454.3121337890625 140.365L 454.3121337890625 169.45625Q 454.3121337890625 175.45625 460.3121337890625 175.45625L 456.33372497558594 175.45625Q 462.33372497558594 175.45625 462.33372497558594 169.45625L 462.33372497558594 169.45625L 462.33372497558594 140.365L 462.33372497558594 140.365z" pathFrom="M 454.3121337890625 140.365L 454.3121337890625 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 462.33372497558594 140.365L 454.3121337890625 140.365" cy="175.45625" cx="536.8253936767578" j="5" val="-20" barHeight="-35.09125" barWidth="10.021591186523438"></path>
                                        <g id="SvgjsG6349" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG6350" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6352" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6354" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6356" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6358" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6360" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG6333" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG6348" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine6433" x1="0" y1="0" x2="501.0795593261719" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine6434" x1="0" y1="0" x2="501.0795593261719" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG6435" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG6436" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG6437" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG6382" class="apexcharts-yaxis" rel="0" transform="translate(17.920440673828125, 0)">
                                <g id="SvgjsG6383" class="apexcharts-yaxis-texts-g"><text id="SvgjsText6385" font-family="inherit" x="20" y="32" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6386">80</tspan>
                                        <title>80</title>
                                    </text><text id="SvgjsText6388" font-family="inherit" x="20" y="60.073" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6389">64</tspan>
                                        <title>64</title>
                                    </text><text id="SvgjsText6391" font-family="inherit" x="20" y="88.146" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6392">48</tspan>
                                        <title>48</title>
                                    </text><text id="SvgjsText6394" font-family="inherit" x="20" y="116.219" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6395">32</tspan>
                                        <title>32</title>
                                    </text><text id="SvgjsText6397" font-family="inherit" x="20" y="144.292" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6398">16</tspan>
                                        <title>16</title>
                                    </text><text id="SvgjsText6400" font-family="inherit" x="20" y="172.365" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6401">0</tspan>
                                        <title>0</title>
                                    </text><text id="SvgjsText6403" font-family="inherit" x="20" y="200.43800000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6404">-16</tspan>
                                        <title>-16</title>
                                    </text><text id="SvgjsText6406" font-family="inherit" x="20" y="228.51100000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6407">-32</tspan>
                                        <title>-32</title>
                                    </text><text id="SvgjsText6409" font-family="inherit" x="20" y="256.58400000000006" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6410">-48</tspan>
                                        <title>-48</title>
                                    </text><text id="SvgjsText6412" font-family="inherit" x="20" y="284.65700000000004" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6413">-64</tspan>
                                        <title>-64</title>
                                    </text><text id="SvgjsText6415" font-family="inherit" x="20" y="312.73" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6416">-80</tspan>
                                        <title>-80</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG6321" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 175px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 87.418px; top: 188.5px;">
                            <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Feb</div>
                            <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">$-30 thousands</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">$-30 thousands</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 5-->
    </div>
    <div class="col-xl-6">
        <!--begin::Charts Widget 5-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Treasury Report</span>
                    <!-- <span class="text-muted fw-semibold fs-7">More than 500+ new orders</span> -->
                </h3>
                <!--begin::Toolbar-->
                <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_6_sales_btn">Sales</a>
                    <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_6_expenses_btn">Expenses</a>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_6_chart" style="height: 350px; min-height: 365px;">
                    <div id="apexchartssshf16kjj" class="apexcharts-canvas apexchartssshf16kjj apexcharts-theme-light" style="width: 559px; height: 350px;"><svg id="SvgjsSvg6439" width="559" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG6441" class="apexcharts-inner apexcharts-graphical" transform="translate(53.05797827148437, 30)">
                                <defs id="SvgjsDefs6440">
                                    <clipPath id="gridRectMasksshf16kjj">
                                        <rect id="SvgjsRect6447" width="519.9233245849609" height="282.73" x="-16.222773193359373" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMasksshf16kjj"></clipPath>
                                    <clipPath id="nonForecastMasksshf16kjj"></clipPath>
                                    <clipPath id="gridRectMarkerMasksshf16kjj">
                                        <rect id="SvgjsRect6448" width="491.47777819824216" height="284.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <line id="SvgjsLine6446" x1="0" y1="0" x2="0" y2="280.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="280.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG6486" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG6487" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText6489" font-family="inherit" x="0" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6490">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText6492" font-family="inherit" x="97.49555563964842" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6493">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText6495" font-family="inherit" x="194.99111127929686" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6496">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText6498" font-family="inherit" x="292.48666691894533" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6499">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText6501" font-family="inherit" x="389.9822225585938" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6502">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText6504" font-family="inherit" x="487.4777781982422" y="309.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan6505">Jul</tspan>
                                            <title>Jul</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG6541" class="apexcharts-grid">
                                    <g id="SvgjsG6542" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine6544" x1="-13.222773193359375" y1="0" x2="500.70055139160155" y2="0" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6545" x1="-13.222773193359375" y1="28.073" x2="500.70055139160155" y2="28.073" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6546" x1="-13.222773193359375" y1="56.146" x2="500.70055139160155" y2="56.146" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6547" x1="-13.222773193359375" y1="84.219" x2="500.70055139160155" y2="84.219" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6548" x1="-13.222773193359375" y1="112.292" x2="500.70055139160155" y2="112.292" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6549" x1="-13.222773193359375" y1="140.365" x2="500.70055139160155" y2="140.365" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6550" x1="-13.222773193359375" y1="168.43800000000002" x2="500.70055139160155" y2="168.43800000000002" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6551" x1="-13.222773193359375" y1="196.51100000000002" x2="500.70055139160155" y2="196.51100000000002" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6552" x1="-13.222773193359375" y1="224.58400000000003" x2="500.70055139160155" y2="224.58400000000003" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6553" x1="-13.222773193359375" y1="252.65700000000004" x2="500.70055139160155" y2="252.65700000000004" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine6554" x1="-13.222773193359375" y1="280.73" x2="500.70055139160155" y2="280.73" stroke="#f4f4f4" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG6543" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine6556" x1="0" y1="280.73" x2="487.47777819824216" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine6555" x1="0" y1="1" x2="0" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG6449" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG6450" class="apexcharts-series" seriesName="Expenses" data:longestSeries="true" rel="1" data:realIndex="2">
                                        <path id="SvgjsPath6453" d="M 0 280.73L 0 163.75916666666666C 34.12344447387695 163.75916666666666 63.37211116577148 93.57666666666665 97.49555563964843 93.57666666666665C 131.61900011352537 93.57666666666665 160.8676668054199 140.365 194.99111127929686 140.365C 229.11455575317382 140.365 258.36322244506835 70.1825 292.4866669189453 70.1825C 326.6101113928222 70.1825 355.8587780847168 163.75916666666666 389.9822225585937 163.75916666666666C 424.10566703247065 163.75916666666666 453.35433372436523 116.97083333333333 487.47777819824216 116.97083333333333C 487.47777819824216 116.97083333333333 487.47777819824216 116.97083333333333 487.47777819824216 280.73M 487.47777819824216 116.97083333333333z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 0 280.73L 0 163.75916666666666C 34.12344447387695 163.75916666666666 63.37211116577148 93.57666666666665 97.49555563964843 93.57666666666665C 131.61900011352537 93.57666666666665 160.8676668054199 140.365 194.99111127929686 140.365C 229.11455575317382 140.365 258.36322244506835 70.1825 292.4866669189453 70.1825C 326.6101113928222 70.1825 355.8587780847168 163.75916666666666 389.9822225585937 163.75916666666666C 424.10566703247065 163.75916666666666 453.35433372436523 116.97083333333333 487.47777819824216 116.97083333333333C 487.47777819824216 116.97083333333333 487.47777819824216 116.97083333333333 487.47777819824216 280.73M 487.47777819824216 116.97083333333333z" pathFrom="M -1 280.73L -1 280.73L 97.49555563964843 280.73L 194.99111127929686 280.73L 292.4866669189453 280.73L 389.9822225585937 280.73L 487.47777819824216 280.73"></path>
                                        <path id="SvgjsPath6454" d="M 0 163.75916666666666C 34.12344447387695 163.75916666666666 63.37211116577148 93.57666666666665 97.49555563964843 93.57666666666665C 131.61900011352537 93.57666666666665 160.8676668054199 140.365 194.99111127929686 140.365C 229.11455575317382 140.365 258.36322244506835 70.1825 292.4866669189453 70.1825C 326.6101113928222 70.1825 355.8587780847168 163.75916666666666 389.9822225585937 163.75916666666666C 424.10566703247065 163.75916666666666 453.35433372436523 116.97083333333333 487.47777819824216 116.97083333333333" fill="none" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 0 163.75916666666666C 34.12344447387695 163.75916666666666 63.37211116577148 93.57666666666665 97.49555563964843 93.57666666666665C 131.61900011352537 93.57666666666665 160.8676668054199 140.365 194.99111127929686 140.365C 229.11455575317382 140.365 258.36322244506835 70.1825 292.4866669189453 70.1825C 326.6101113928222 70.1825 355.8587780847168 163.75916666666666 389.9822225585937 163.75916666666666C 424.10566703247065 163.75916666666666 453.35433372436523 116.97083333333333 487.47777819824216 116.97083333333333" pathFrom="M -1 280.73L -1 280.73L 97.49555563964843 280.73L 194.99111127929686 280.73L 292.4866669189453 280.73L 389.9822225585937 280.73L 487.47777819824216 280.73" fill-rule="evenodd"></path>
                                        <g id="SvgjsG6451" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle6562" r="0" cx="0" cy="0" class="apexcharts-marker wq6b60c1c" stroke="#ffffff" fill="#f1faff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG6455" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG6456" class="apexcharts-series" seriesName="NetxProfit" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath6460" d="M -5.849733338378906 280.73L -5.849733338378906 187.15333333333334Q -5.849733338378906 187.15333333333334 -5.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334Q 3.849733338378906 187.15333333333334 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 280.73L 3.849733338378906 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M -5.849733338378906 280.73L -5.849733338378906 187.15333333333334Q -5.849733338378906 187.15333333333334 -5.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334Q 3.849733338378906 187.15333333333334 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 280.73L 3.849733338378906 280.73z" pathFrom="M -5.849733338378906 280.73L -5.849733338378906 280.73L 3.849733338378906 280.73L 3.849733338378906 280.73L 3.849733338378906 280.73L 3.849733338378906 280.73L 3.849733338378906 280.73L -5.849733338378906 280.73" cy="187.15333333333334" cx="4.8497333383789005" j="0" val="40" barHeight="93.57666666666668" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6462" d="M 91.64582230126952 280.73L 91.64582230126952 163.75916666666666Q 91.64582230126952 163.75916666666666 91.64582230126952 163.75916666666666L 101.34528897802733 163.75916666666666Q 101.34528897802733 163.75916666666666 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 280.73L 101.34528897802733 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 91.64582230126952 280.73L 91.64582230126952 163.75916666666666Q 91.64582230126952 163.75916666666666 91.64582230126952 163.75916666666666L 101.34528897802733 163.75916666666666Q 101.34528897802733 163.75916666666666 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 280.73L 101.34528897802733 280.73z" pathFrom="M 91.64582230126952 280.73L 91.64582230126952 280.73L 101.34528897802733 280.73L 101.34528897802733 280.73L 101.34528897802733 280.73L 101.34528897802733 280.73L 101.34528897802733 280.73L 91.64582230126952 280.73" cy="163.75916666666666" cx="102.34528897802733" j="1" val="50" barHeight="116.97083333333335" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6464" d="M 189.14137794091795 280.73L 189.14137794091795 128.66791666666668Q 189.14137794091795 128.66791666666668 189.14137794091795 128.66791666666668L 198.84084461767577 128.66791666666668Q 198.84084461767577 128.66791666666668 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 280.73L 198.84084461767577 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 189.14137794091795 280.73L 189.14137794091795 128.66791666666668Q 189.14137794091795 128.66791666666668 189.14137794091795 128.66791666666668L 198.84084461767577 128.66791666666668Q 198.84084461767577 128.66791666666668 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 280.73L 198.84084461767577 280.73z" pathFrom="M 189.14137794091795 280.73L 189.14137794091795 280.73L 198.84084461767577 280.73L 198.84084461767577 280.73L 198.84084461767577 280.73L 198.84084461767577 280.73L 198.84084461767577 280.73L 189.14137794091795 280.73" cy="128.66791666666668" cx="199.84084461767577" j="2" val="65" barHeight="152.06208333333333" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6466" d="M 286.6369335805664 280.73L 286.6369335805664 116.97083333333333Q 286.6369335805664 116.97083333333333 286.6369335805664 116.97083333333333L 296.3364002573242 116.97083333333333Q 296.3364002573242 116.97083333333333 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 280.73L 296.3364002573242 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 286.6369335805664 280.73L 286.6369335805664 116.97083333333333Q 286.6369335805664 116.97083333333333 286.6369335805664 116.97083333333333L 296.3364002573242 116.97083333333333Q 296.3364002573242 116.97083333333333 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 280.73L 296.3364002573242 280.73z" pathFrom="M 286.6369335805664 280.73L 286.6369335805664 280.73L 296.3364002573242 280.73L 296.3364002573242 280.73L 296.3364002573242 280.73L 296.3364002573242 280.73L 296.3364002573242 280.73L 286.6369335805664 280.73" cy="116.97083333333333" cx="297.3364002573242" j="3" val="70" barHeight="163.7591666666667" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6468" d="M 384.13248922021484 280.73L 384.13248922021484 163.75916666666666Q 384.13248922021484 163.75916666666666 384.13248922021484 163.75916666666666L 393.83195589697266 163.75916666666666Q 393.83195589697266 163.75916666666666 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 280.73L 393.83195589697266 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 384.13248922021484 280.73L 384.13248922021484 163.75916666666666Q 384.13248922021484 163.75916666666666 384.13248922021484 163.75916666666666L 393.83195589697266 163.75916666666666Q 393.83195589697266 163.75916666666666 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 280.73L 393.83195589697266 280.73z" pathFrom="M 384.13248922021484 280.73L 384.13248922021484 280.73L 393.83195589697266 280.73L 393.83195589697266 280.73L 393.83195589697266 280.73L 393.83195589697266 280.73L 393.83195589697266 280.73L 384.13248922021484 280.73" cy="163.75916666666666" cx="394.83195589697266" j="4" val="50" barHeight="116.97083333333335" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6470" d="M 481.6280448598633 280.73L 481.6280448598633 210.5475Q 481.6280448598633 210.5475 481.6280448598633 210.5475L 491.3275115366211 210.5475Q 491.3275115366211 210.5475 491.3275115366211 210.5475L 491.3275115366211 210.5475L 491.3275115366211 280.73L 491.3275115366211 280.73z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 481.6280448598633 280.73L 481.6280448598633 210.5475Q 481.6280448598633 210.5475 481.6280448598633 210.5475L 491.3275115366211 210.5475Q 491.3275115366211 210.5475 491.3275115366211 210.5475L 491.3275115366211 210.5475L 491.3275115366211 280.73L 491.3275115366211 280.73z" pathFrom="M 481.6280448598633 280.73L 481.6280448598633 280.73L 491.3275115366211 280.73L 491.3275115366211 280.73L 491.3275115366211 280.73L 491.3275115366211 280.73L 491.3275115366211 280.73L 481.6280448598633 280.73" cy="210.5475" cx="492.32751153662105" j="5" val="30" barHeight="70.1825" barWidth="11.699466676757812"></path>
                                        <g id="SvgjsG6458" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG6459" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6461" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6463" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6465" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6467" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6469" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG6471" class="apexcharts-series" seriesName="Revenue" rel="2" data:realIndex="1">
                                        <path id="SvgjsPath6475" d="M -5.849733338378906 187.15333333333334L -5.849733338378906 144.365Q -5.849733338378906 140.365 -1.8497333383789059 140.365L -0.15026666162109414 140.365Q 3.849733338378906 140.365 3.849733338378906 144.365L 3.849733338378906 144.365L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M -5.849733338378906 187.15333333333334L -5.849733338378906 144.365Q -5.849733338378906 140.365 -1.8497333383789059 140.365L -0.15026666162109414 140.365Q 3.849733338378906 140.365 3.849733338378906 144.365L 3.849733338378906 144.365L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334z" pathFrom="M -5.849733338378906 187.15333333333334L -5.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L 3.849733338378906 187.15333333333334L -5.849733338378906 187.15333333333334" cy="140.365" cx="4.8497333383789005" j="0" val="20" barHeight="46.78833333333334" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6477" d="M 91.64582230126952 163.75916666666666L 91.64582230126952 120.97083333333332Q 91.64582230126952 116.97083333333332 95.64582230126952 116.97083333333332L 97.34528897802733 116.97083333333332Q 101.34528897802733 116.97083333333332 101.34528897802733 120.97083333333332L 101.34528897802733 120.97083333333332L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 91.64582230126952 163.75916666666666L 91.64582230126952 120.97083333333332Q 91.64582230126952 116.97083333333332 95.64582230126952 116.97083333333332L 97.34528897802733 116.97083333333332Q 101.34528897802733 116.97083333333332 101.34528897802733 120.97083333333332L 101.34528897802733 120.97083333333332L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666z" pathFrom="M 91.64582230126952 163.75916666666666L 91.64582230126952 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 101.34528897802733 163.75916666666666L 91.64582230126952 163.75916666666666" cy="116.97083333333332" cx="102.34528897802733" j="1" val="20" barHeight="46.78833333333334" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6479" d="M 189.14137794091795 128.66791666666668L 189.14137794091795 74.1825Q 189.14137794091795 70.1825 193.14137794091795 70.1825L 194.84084461767577 70.1825Q 198.84084461767577 70.1825 198.84084461767577 74.1825L 198.84084461767577 74.1825L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 189.14137794091795 128.66791666666668L 189.14137794091795 74.1825Q 189.14137794091795 70.1825 193.14137794091795 70.1825L 194.84084461767577 70.1825Q 198.84084461767577 70.1825 198.84084461767577 74.1825L 198.84084461767577 74.1825L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668z" pathFrom="M 189.14137794091795 128.66791666666668L 189.14137794091795 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 198.84084461767577 128.66791666666668L 189.14137794091795 128.66791666666668" cy="70.1825" cx="199.84084461767577" j="2" val="25" barHeight="58.48541666666667" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6481" d="M 286.6369335805664 116.97083333333333L 286.6369335805664 50.78833333333333Q 286.6369335805664 46.78833333333333 290.6369335805664 46.78833333333333L 292.3364002573242 46.78833333333333Q 296.3364002573242 46.78833333333333 296.3364002573242 50.78833333333333L 296.3364002573242 50.78833333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 286.6369335805664 116.97083333333333L 286.6369335805664 50.78833333333333Q 286.6369335805664 46.78833333333333 290.6369335805664 46.78833333333333L 292.3364002573242 46.78833333333333Q 296.3364002573242 46.78833333333333 296.3364002573242 50.78833333333333L 296.3364002573242 50.78833333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333z" pathFrom="M 286.6369335805664 116.97083333333333L 286.6369335805664 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 296.3364002573242 116.97083333333333L 286.6369335805664 116.97083333333333" cy="46.78833333333333" cx="297.3364002573242" j="3" val="30" barHeight="70.1825" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6483" d="M 384.13248922021484 163.75916666666666L 384.13248922021484 97.57666666666665Q 384.13248922021484 93.57666666666665 388.13248922021484 93.57666666666665L 389.83195589697266 93.57666666666665Q 393.83195589697266 93.57666666666665 393.83195589697266 97.57666666666665L 393.83195589697266 97.57666666666665L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 384.13248922021484 163.75916666666666L 384.13248922021484 97.57666666666665Q 384.13248922021484 93.57666666666665 388.13248922021484 93.57666666666665L 389.83195589697266 93.57666666666665Q 393.83195589697266 93.57666666666665 393.83195589697266 97.57666666666665L 393.83195589697266 97.57666666666665L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666z" pathFrom="M 384.13248922021484 163.75916666666666L 384.13248922021484 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 393.83195589697266 163.75916666666666L 384.13248922021484 163.75916666666666" cy="93.57666666666665" cx="394.83195589697266" j="4" val="30" barHeight="70.1825" barWidth="11.699466676757812"></path>
                                        <path id="SvgjsPath6485" d="M 481.6280448598633 210.5475L 481.6280448598633 167.75916666666666Q 481.6280448598633 163.75916666666666 485.6280448598633 163.75916666666666L 487.3275115366211 163.75916666666666Q 491.3275115366211 163.75916666666666 491.3275115366211 167.75916666666666L 491.3275115366211 167.75916666666666L 491.3275115366211 210.5475L 491.3275115366211 210.5475z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasksshf16kjj)" pathTo="M 481.6280448598633 210.5475L 481.6280448598633 167.75916666666666Q 481.6280448598633 163.75916666666666 485.6280448598633 163.75916666666666L 487.3275115366211 163.75916666666666Q 491.3275115366211 163.75916666666666 491.3275115366211 167.75916666666666L 491.3275115366211 167.75916666666666L 491.3275115366211 210.5475L 491.3275115366211 210.5475z" pathFrom="M 481.6280448598633 210.5475L 481.6280448598633 210.5475L 491.3275115366211 210.5475L 491.3275115366211 210.5475L 491.3275115366211 210.5475L 491.3275115366211 210.5475L 491.3275115366211 210.5475L 481.6280448598633 210.5475" cy="163.75916666666666" cx="492.32751153662105" j="5" val="20" barHeight="46.78833333333334" barWidth="11.699466676757812"></path>
                                        <g id="SvgjsG6473" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                            <g id="SvgjsG6474" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6476" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6478" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6480" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6482" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG6484" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG6452" class="apexcharts-datalabels" data:realIndex="2"></g>
                                    <g id="SvgjsG6457" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG6472" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine6557" x1="-13.222773193359375" y1="0" x2="500.70055139160155" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine6558" x1="-13.222773193359375" y1="0" x2="500.70055139160155" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG6559" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG6560" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG6561" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect6563" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect6564" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                            </g>
                            <rect id="SvgjsRect6445" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG6506" class="apexcharts-yaxis" rel="0" transform="translate(17.835205078125, 0)">
                                <g id="SvgjsG6507" class="apexcharts-yaxis-texts-g"><text id="SvgjsText6509" font-family="inherit" x="20" y="32" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6510">120</tspan>
                                        <title>120</title>
                                    </text><text id="SvgjsText6512" font-family="inherit" x="20" y="60.073" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6513">108</tspan>
                                        <title>108</title>
                                    </text><text id="SvgjsText6515" font-family="inherit" x="20" y="88.146" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6516">96</tspan>
                                        <title>96</title>
                                    </text><text id="SvgjsText6518" font-family="inherit" x="20" y="116.219" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6519">84</tspan>
                                        <title>84</title>
                                    </text><text id="SvgjsText6521" font-family="inherit" x="20" y="144.292" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6522">72</tspan>
                                        <title>72</title>
                                    </text><text id="SvgjsText6524" font-family="inherit" x="20" y="172.365" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6525">60</tspan>
                                        <title>60</title>
                                    </text><text id="SvgjsText6527" font-family="inherit" x="20" y="200.43800000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6528">48</tspan>
                                        <title>48</title>
                                    </text><text id="SvgjsText6530" font-family="inherit" x="20" y="228.51100000000002" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6531">36</tspan>
                                        <title>36</title>
                                    </text><text id="SvgjsText6533" font-family="inherit" x="20" y="256.58400000000006" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6534">24</tspan>
                                        <title>24</title>
                                    </text><text id="SvgjsText6536" font-family="inherit" x="20" y="284.65700000000004" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6537">12</tspan>
                                        <title>12</title>
                                    </text><text id="SvgjsText6539" font-family="inherit" x="20" y="312.73" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                        <tspan id="SvgjsTspan6540">0</tspan>
                                        <title>0</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG6442" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 175px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 5-->
    </div>
</div>


<!--begin::Tables Widget 12-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1"> Inventory History</span>
            <!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new members</span> -->
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th class="ps-4 min-w-200px rounded-start">ECS Number</th>
                                <th class="min-w-200px">Company Name</th>
                                <th class="min-w-200px">Company Email</th>
                                <th class="min-w-200px">Business Area</th>
                                <th class="min-w-200px text-end rounded-end">ACTIONS</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $item->ecs_number }}
                                </td>
                                <td>
                                    {{ $item->company_name }}
                                </td>
                                <td>
                                    {{ $item->company_email }}
                                </td>
                                <td>
                                    {{ $item->business_area }}
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('employers.show', [$item->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ route('employer.employees', [$item->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-user"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <div class="card-footer clearfix">
                        <div class="float-right">
                            @include('adminlte-templates::common.paginate', [
                            'records' => $data,
                            ])
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 12-->
    </div>
</div>
@endsection

@push('page_scripts')
<script>
    $(document).ready(function() {
        $($('.apexcharts-canvas')[3]).remove();
        $($('.apexcharts-canvas')[1]).remove();
    })
</script>

@endpush