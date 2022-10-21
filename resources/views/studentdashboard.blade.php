<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>LC Student_Dashboard</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
   
    

    <style>
        body {
            background: white;
        }


        .widget-style3 .widget-icon {

            background: #343a46;
            color: #212529c2;
        }

        i.icon-copy.fa.fa-users {
            color: white;
        }

        .left-side-bar {

            z-index: 1000;
            /* background: #142127; */
            background: rgb(52 58 70);
        }

        .menu-icon,
        .search-toggle-icon {
          
            color: #fff;
        }

.header {
    position: fixed;
    height: 70px;
    
    background: #343a46;}

    .crd-clr{
        background-color: #00e396;
    }
    .crd-clr1{
        background-color:hwb(213deg 2% 11%);
    }
  
    </style>
     @include('layouts.links')
</head>

<body>


@include('layouts.header')

@include('layouts.rightsidebar')

@include('layouts.leftsidebar')
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0"> Student </h2>
            </div>

            <div class="row pb-10">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">75</div>
                                <div class="font-14 text-secondary weight-500">
                                    Student Applications
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#fff">
                                    <i class="icon-copy dw dw-calendar1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">124,551</div>
                                <div class="font-14 text-secondary weight-500">
                                    Pending Applic
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#fff">
                                    <span class="icon-copy ti-heart"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">400+</div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Students
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i class="icon-copy fa fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-12 mb-20">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card-box min-height-200px pd-20 mb-20 crd-clr1" data-bgcolor="#265ed7"  >
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-white">
                                        <div class="font-14">Total student</div>
                                        <div class="font-24 weight-500">1865</div>
                                    </div>
                                    <div class="max-width-150">
                                        <div id="appointment-chart"></div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h1 text-white">
        
                                        <i class="icon-copy fa fa-users" aria-hidden="true"></i>
                                        <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                                    </div>
                                    <div class="font-14 text-right">
                                        <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                                        <div class="font-12">Since last month</div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-box min-height-200px pd-20 crd-clr" data-bgcolor="" style="background-color: #00e396 !important;
                        ">
                                <div class="d-flex justify-content-between pb-20 text-white">
                                    <div class="icon h1 text-white">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    <div class="font-14 text-right">
                                        <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                                        <div class="font-12">Since last month</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="text-white">
                                        <div class="font-14">Total Application</div>
                                        <div class="font-24 weight-500">250</div>
                                    </div>
                                    <div class="max-width-150">
                                        <div id="surgery-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="bg-white pd-20 card-box mb-30" style="position: relative;">
                        <h4 class="h4 text-blue">Student Chart</h4>
                        <div id="chart5" style="min-height: 365px;">
                            <div id="apexcharts85fab4"
                                class="apexcharts-canvas apexcharts85fab4 apexcharts-theme-light apexcharts-zoomable"
                                style="width: 979px; height: 350px;"><svg id="SvgjsSvg2948" width="979" height="350"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg hovering-zoom" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="979" height="350">
                                        <div class="apexcharts-legend apexcharts-align-center position-bottom"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="inset: auto 0px 5px; position: absolute;">
                                            <div class="apexcharts-legend-series" rel="1" data:collapsed="false"
                                                style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1"
                                                    data:collapsed="false"
                                                    style="background: rgb(0, 143, 251); color: rgb(0, 143, 251); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Team%20A" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                    A</span></div>
                                            <div class="apexcharts-legend-series" rel="2" data:collapsed="false"
                                                style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2"
                                                    data:collapsed="false"
                                                    style="background: rgb(0, 227, 150); color: rgb(0, 227, 150); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Team%20B" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                    B</span></div>
                                            <div class="apexcharts-legend-series" rel="3" data:collapsed="false"
                                                style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="3"
                                                    data:collapsed="false"
                                                    style="background: rgb(254, 176, 25); color: rgb(254, 176, 25); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="3" i="2"
                                                    data:default-text="Team%20C" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Team
                                                    C</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }
    
                                            .apexcharts-legend.position-bottom,
                                            .apexcharts-legend.position-top {
                                                flex-wrap: wrap
                                            }
    
                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }
    
                                            .apexcharts-legend.position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.position-top.apexcharts-align-left,
                                            .apexcharts-legend.position-right,
                                            .apexcharts-legend.position-left {
                                                justify-content: flex-start;
                                            }
    
                                            .apexcharts-legend.position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }
    
                                            .apexcharts-legend.position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }
    
                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }
    
                                            .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }
    
                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }
    
                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }
    
                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }
    
                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }
    
                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }
    
                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }
    
                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG2950" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(58.050283469945356, 40)">
                                        <defs id="SvgjsDefs2949">
                                            <clipPath id="gridRectMask85fab4">
                                                <rect id="SvgjsRect2970" width="950.890625" height="267"
                                                    x="-21.440908469945356" y="-2.5" rx="0" ry="0" fill="#ffffff"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask85fab4">
                                                <rect id="SvgjsRect2971" width="910.0088080601092" height="264" x="-1"
                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine2956" x1="91.78941983561765" y1="0" x2="91.78941983561765"
                                            y2="262" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                            x="91.78941983561765" y="0" width="1" height="262" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG2998" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2999" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText3001"
                                                    font-family="Helvetica, Arial, sans-serif" x="2.977078059213473" y="291"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="600" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3002">2020</tspan>
                                                    <title>2020</title>
                                                </text><text id="SvgjsText3004" font-family="Helvetica, Arial, sans-serif"
                                                    x="95.26649789483113" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3005">Feb '20</tspan>
                                                    <title>Feb '20</title>
                                                </text><text id="SvgjsText3007" font-family="Helvetica, Arial, sans-serif"
                                                    x="181.60176161202185" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3008">Mar '20</tspan>
                                                    <title>Mar '20</title>
                                                </text><text id="SvgjsText3010" font-family="Helvetica, Arial, sans-serif"
                                                    x="273.8911814476395" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3011">Apr '20</tspan>
                                                    <title>Apr '20</title>
                                                </text><text id="SvgjsText3013" font-family="Helvetica, Arial, sans-serif"
                                                    x="363.2035232240437" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3014">May '20</tspan>
                                                    <title>May '20</title>
                                                </text><text id="SvgjsText3016" font-family="Helvetica, Arial, sans-serif"
                                                    x="455.49294305966134" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3017">Jun '20</tspan>
                                                    <title>Jun '20</title>
                                                </text><text id="SvgjsText3019" font-family="Helvetica, Arial, sans-serif"
                                                    x="544.8052848360655" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3020">Jul '20</tspan>
                                                    <title>Jul '20</title>
                                                </text><text id="SvgjsText3022" font-family="Helvetica, Arial, sans-serif"
                                                    x="637.0947046716832" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3023">Aug '20</tspan>
                                                    <title>Aug '20</title>
                                                </text><text id="SvgjsText3025" font-family="Helvetica, Arial, sans-serif"
                                                    x="729.3841245073008" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3026">Sep '20</tspan>
                                                    <title>Sep '20</title>
                                                </text><text id="SvgjsText3028" font-family="Helvetica, Arial, sans-serif"
                                                    x="818.696466283705" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3029">Oct '20</tspan>
                                                    <title>Oct '20</title>
                                                </text><text id="SvgjsText3031" font-family="Helvetica, Arial, sans-serif"
                                                    x="910.9858861193227" y="291" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3032"></tspan>
                                                    <title></title>
                                                </text></g>
                                            <line id="SvgjsLine3033" x1="0" y1="263" x2="908.0088080601093" y2="263"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG3060" class="apexcharts-grid">
                                            <g id="SvgjsG3061" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine3073" x1="0" y1="0" x2="908.0088080601092" y2="0"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3074" x1="0" y1="26.2" x2="908.0088080601092" y2="26.2"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3075" x1="0" y1="52.4" x2="908.0088080601092" y2="52.4"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3076" x1="0" y1="78.6" x2="908.0088080601092" y2="78.6"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3077" x1="0" y1="104.8" x2="908.0088080601092" y2="104.8"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3078" x1="0" y1="131" x2="908.0088080601092" y2="131"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3079" x1="0" y1="157.2" x2="908.0088080601092" y2="157.2"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3080" x1="0" y1="183.39999999999998"
                                                    x2="908.0088080601092" y2="183.39999999999998" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3081" x1="0" y1="209.59999999999997"
                                                    x2="908.0088080601092" y2="209.59999999999997" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3082" x1="0" y1="235.79999999999995"
                                                    x2="908.0088080601092" y2="235.79999999999995" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3083" x1="0" y1="261.99999999999994"
                                                    x2="908.0088080601092" y2="261.99999999999994" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG3062" class="apexcharts-gridlines-vertical" style="display: none;">
                                            </g>
                                            <line id="SvgjsLine3063" x1="2.977078059213473" y1="263" x2="2.977078059213473"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3064" x1="95.26649789483113" y1="263" x2="95.26649789483113"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3065" x1="181.60176161202185" y1="263"
                                                x2="181.60176161202185" y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3066" x1="273.8911814476395" y1="263" x2="273.8911814476395"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3067" x1="363.2035232240437" y1="263" x2="363.2035232240437"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3068" x1="455.49294305966134" y1="263"
                                                x2="455.49294305966134" y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3069" x1="544.8052848360655" y1="263" x2="544.8052848360655"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3070" x1="637.0947046716832" y1="263" x2="637.0947046716832"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3071" x1="729.3841245073008" y1="263" x2="729.3841245073008"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3072" x1="818.696466283705" y1="263" x2="818.696466283705"
                                                y2="269" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3085" x1="0" y1="262" x2="908.0088080601092" y2="262"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine3084" x1="0" y1="1" x2="0" y2="262" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG2973" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2974" class="apexcharts-series" seriesName="TeamxB"
                                                data:longestSeries="true" rel="1" data:realIndex="1">
                                                <path id="SvgjsPath2977"
                                                    d="M 0 262L 0 96.84240687679079C 32.30129694246617 96.84240687679079 59.98812289315148 55.55300859598847 92.28941983561765 55.55300859598847C 122.50676213663439 55.55300859598847 148.40734125179162 108.10315186246413 178.62468355280836 108.10315186246413C 210.92598049527456 108.10315186246413 238.61280644595985 10.510028653295052 270.91410338842604 10.510028653295052C 302.1734230101675 10.510028653295052 328.96712554308874 179.4212034383954 360.2264451648302 179.4212034383954C 392.5277421072964 179.4212034383954 420.21456805798164 100.5959885386819 452.51586500044783 100.5959885386819C 483.77518462218933 100.5959885386819 510.5688871551106 183.1747851002865 541.8282067768521 183.1747851002865C 574.1295037193182 183.1747851002865 601.8163296700036 108.10315186246413 634.1176266124697 108.10315186246413C 666.4189235549359 108.10315186246413 694.1057495056212 51.79942693409734 726.4070464480874 51.79942693409734C 757.6663660698289 51.79942693409734 784.4600686027501 160.6532951289398 815.7193882244916 160.6532951289398C 848.0206851669577 160.6532951289398 875.7075111176431 100.5959885386819 908.0088080601092 100.5959885386819C 908.0088080601092 100.5959885386819 908.0088080601092 100.5959885386819 908.0088080601092 262M 908.0088080601092 100.5959885386819z"
                                                    fill="rgba(0,227,150,0.25)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="1" clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 0 262L 0 96.84240687679079C 32.30129694246617 96.84240687679079 59.98812289315148 55.55300859598847 92.28941983561765 55.55300859598847C 122.50676213663439 55.55300859598847 148.40734125179162 108.10315186246413 178.62468355280836 108.10315186246413C 210.92598049527456 108.10315186246413 238.61280644595985 10.510028653295052 270.91410338842604 10.510028653295052C 302.1734230101675 10.510028653295052 328.96712554308874 179.4212034383954 360.2264451648302 179.4212034383954C 392.5277421072964 179.4212034383954 420.21456805798164 100.5959885386819 452.51586500044783 100.5959885386819C 483.77518462218933 100.5959885386819 510.5688871551106 183.1747851002865 541.8282067768521 183.1747851002865C 574.1295037193182 183.1747851002865 601.8163296700036 108.10315186246413 634.1176266124697 108.10315186246413C 666.4189235549359 108.10315186246413 694.1057495056212 51.79942693409734 726.4070464480874 51.79942693409734C 757.6663660698289 51.79942693409734 784.4600686027501 160.6532951289398 815.7193882244916 160.6532951289398C 848.0206851669577 160.6532951289398 875.7075111176431 100.5959885386819 908.0088080601092 100.5959885386819C 908.0088080601092 100.5959885386819 908.0088080601092 100.5959885386819 908.0088080601092 262M 908.0088080601092 100.5959885386819z"
                                                    pathFrom="M -1 262L -1 262L 92.28941983561765 262L 178.62468355280836 262L 270.91410338842604 262L 360.2264451648302 262L 452.51586500044783 262L 541.8282067768521 262L 634.1176266124697 262L 726.4070464480874 262L 815.7193882244916 262L 908.0088080601092 262">
                                                </path>
                                                <path id="SvgjsPath2978"
                                                    d="M 0 96.84240687679079C 32.30129694246617 96.84240687679079 59.98812289315148 55.55300859598847 92.28941983561765 55.55300859598847C 122.50676213663439 55.55300859598847 148.40734125179162 108.10315186246413 178.62468355280836 108.10315186246413C 210.92598049527456 108.10315186246413 238.61280644595985 10.510028653295052 270.91410338842604 10.510028653295052C 302.1734230101675 10.510028653295052 328.96712554308874 179.4212034383954 360.2264451648302 179.4212034383954C 392.5277421072964 179.4212034383954 420.21456805798164 100.5959885386819 452.51586500044783 100.5959885386819C 483.77518462218933 100.5959885386819 510.5688871551106 183.1747851002865 541.8282067768521 183.1747851002865C 574.1295037193182 183.1747851002865 601.8163296700036 108.10315186246413 634.1176266124697 108.10315186246413C 666.4189235549359 108.10315186246413 694.1057495056212 51.79942693409734 726.4070464480874 51.79942693409734C 757.6663660698289 51.79942693409734 784.4600686027501 160.6532951289398 815.7193882244916 160.6532951289398C 848.0206851669577 160.6532951289398 875.7075111176431 100.5959885386819 908.0088080601092 100.5959885386819"
                                                    fill="none" fill-opacity="1" stroke="#00e396" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="1" clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 0 96.84240687679079C 32.30129694246617 96.84240687679079 59.98812289315148 55.55300859598847 92.28941983561765 55.55300859598847C 122.50676213663439 55.55300859598847 148.40734125179162 108.10315186246413 178.62468355280836 108.10315186246413C 210.92598049527456 108.10315186246413 238.61280644595985 10.510028653295052 270.91410338842604 10.510028653295052C 302.1734230101675 10.510028653295052 328.96712554308874 179.4212034383954 360.2264451648302 179.4212034383954C 392.5277421072964 179.4212034383954 420.21456805798164 100.5959885386819 452.51586500044783 100.5959885386819C 483.77518462218933 100.5959885386819 510.5688871551106 183.1747851002865 541.8282067768521 183.1747851002865C 574.1295037193182 183.1747851002865 601.8163296700036 108.10315186246413 634.1176266124697 108.10315186246413C 666.4189235549359 108.10315186246413 694.1057495056212 51.79942693409734 726.4070464480874 51.79942693409734C 757.6663660698289 51.79942693409734 784.4600686027501 160.6532951289398 815.7193882244916 160.6532951289398C 848.0206851669577 160.6532951289398 875.7075111176431 100.5959885386819 908.0088080601092 100.5959885386819"
                                                    pathFrom="M -1 262L -1 262L 92.28941983561765 262L 178.62468355280836 262L 270.91410338842604 262L 360.2264451648302 262L 452.51586500044783 262L 541.8282067768521 262L 634.1176266124697 262L 726.4070464480874 262L 815.7193882244916 262L 908.0088080601092 262">
                                                </path>
                                                <g id="SvgjsG2975" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3091" r="0" cx="92.28941983561765"
                                                            cy="55.55300859598847" class="apexcharts-marker wqtfbyttk"
                                                            stroke="#ffffff" fill="#00e396" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2979" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG2980" class="apexcharts-series" rel="1" seriesName="TeamxA"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2982"
                                                    d="M -8.633526371719071 262L -8.633526371719071 175.66762177650426L 8.633526371719071 175.66762177650426L 8.633526371719071 262L -8.633526371719071 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M -8.633526371719071 262L -8.633526371719071 175.66762177650426L 8.633526371719071 175.66762177650426L 8.633526371719071 262L -8.633526371719071 262"
                                                    pathFrom="M -8.633526371719071 262L -8.633526371719071 262L 8.633526371719071 262L 8.633526371719071 262L -8.633526371719071 262"
                                                    cy="175.66762177650426" cx="8.633526371719071" j="0" val="23"
                                                    barHeight="86.33237822349574" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2983"
                                                    d="M 83.65589346389858 262L 83.65589346389858 220.7106017191977L 100.92294620733672 220.7106017191977L 100.92294620733672 262L 83.65589346389858 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 83.65589346389858 262L 83.65589346389858 220.7106017191977L 100.92294620733672 220.7106017191977L 100.92294620733672 262L 83.65589346389858 262"
                                                    pathFrom="M 83.65589346389858 262L 83.65589346389858 262L 100.92294620733672 262L 100.92294620733672 262L 83.65589346389858 262"
                                                    cy="220.7106017191977" cx="100.92294620733672" j="1" val="11"
                                                    barHeight="41.2893982808023" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2984"
                                                    d="M 169.9911571810893 262L 169.9911571810893 179.4212034383954L 187.25820992452745 179.4212034383954L 187.25820992452745 262L 169.9911571810893 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 169.9911571810893 262L 169.9911571810893 179.4212034383954L 187.25820992452745 179.4212034383954L 187.25820992452745 262L 169.9911571810893 262"
                                                    pathFrom="M 169.9911571810893 262L 169.9911571810893 262L 187.25820992452745 262L 187.25820992452745 262L 169.9911571810893 262"
                                                    cy="179.4212034383954" cx="187.25820992452745" j="2" val="22"
                                                    barHeight="82.5787965616046" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2985"
                                                    d="M 262.28057701670696 262L 262.28057701670696 160.6532951289398L 279.5476297601451 160.6532951289398L 279.5476297601451 262L 262.28057701670696 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 262.28057701670696 262L 262.28057701670696 160.6532951289398L 279.5476297601451 160.6532951289398L 279.5476297601451 262L 262.28057701670696 262"
                                                    pathFrom="M 262.28057701670696 262L 262.28057701670696 262L 279.5476297601451 262L 279.5476297601451 262L 262.28057701670696 262"
                                                    cy="160.6532951289398" cx="279.5476297601451" j="3" val="27"
                                                    barHeight="101.34670487106021" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2986"
                                                    d="M 351.5929187931111 262L 351.5929187931111 213.20343839541545L 368.8599715365492 213.20343839541545L 368.8599715365492 262L 351.5929187931111 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 351.5929187931111 262L 351.5929187931111 213.20343839541545L 368.8599715365492 213.20343839541545L 368.8599715365492 262L 351.5929187931111 262"
                                                    pathFrom="M 351.5929187931111 262L 351.5929187931111 262L 368.8599715365492 262L 368.8599715365492 262L 351.5929187931111 262"
                                                    cy="213.20343839541545" cx="368.8599715365492" j="4" val="13"
                                                    barHeight="48.79656160458455" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2987"
                                                    d="M 443.88233862872875 262L 443.88233862872875 179.4212034383954L 461.14939137216686 179.4212034383954L 461.14939137216686 262L 443.88233862872875 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 443.88233862872875 262L 443.88233862872875 179.4212034383954L 461.14939137216686 179.4212034383954L 461.14939137216686 262L 443.88233862872875 262"
                                                    pathFrom="M 443.88233862872875 262L 443.88233862872875 262L 461.14939137216686 262L 461.14939137216686 262L 443.88233862872875 262"
                                                    cy="179.4212034383954" cx="461.14939137216686" j="5" val="22"
                                                    barHeight="82.5787965616046" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2988"
                                                    d="M 533.194680405133 262L 533.194680405133 123.1174785100286L 550.4617331485712 123.1174785100286L 550.4617331485712 262L 533.194680405133 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 533.194680405133 262L 533.194680405133 123.1174785100286L 550.4617331485712 123.1174785100286L 550.4617331485712 262L 533.194680405133 262"
                                                    pathFrom="M 533.194680405133 262L 533.194680405133 262L 550.4617331485712 262L 550.4617331485712 262L 533.194680405133 262"
                                                    cy="123.1174785100286" cx="550.4617331485712" j="6" val="37"
                                                    barHeight="138.8825214899714" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2989"
                                                    d="M 625.4841002407506 262L 625.4841002407506 183.1747851002865L 642.7511529841888 183.1747851002865L 642.7511529841888 262L 625.4841002407506 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 625.4841002407506 262L 625.4841002407506 183.1747851002865L 642.7511529841888 183.1747851002865L 642.7511529841888 262L 625.4841002407506 262"
                                                    pathFrom="M 625.4841002407506 262L 625.4841002407506 262L 642.7511529841888 262L 642.7511529841888 262L 625.4841002407506 262"
                                                    cy="183.1747851002865" cx="642.7511529841888" j="7" val="21"
                                                    barHeight="78.82521489971349" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2990"
                                                    d="M 717.7735200763683 262L 717.7735200763683 96.84240687679079L 735.0405728198065 96.84240687679079L 735.0405728198065 262L 717.7735200763683 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 717.7735200763683 262L 717.7735200763683 96.84240687679079L 735.0405728198065 96.84240687679079L 735.0405728198065 262L 717.7735200763683 262"
                                                    pathFrom="M 717.7735200763683 262L 717.7735200763683 262L 735.0405728198065 262L 735.0405728198065 262L 717.7735200763683 262"
                                                    cy="96.84240687679079" cx="735.0405728198065" j="8" val="44"
                                                    barHeight="165.1575931232092" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2991"
                                                    d="M 807.0858618527725 262L 807.0858618527725 179.4212034383954L 824.3529145962107 179.4212034383954L 824.3529145962107 262L 807.0858618527725 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 807.0858618527725 262L 807.0858618527725 179.4212034383954L 824.3529145962107 179.4212034383954L 824.3529145962107 262L 807.0858618527725 262"
                                                    pathFrom="M 807.0858618527725 262L 807.0858618527725 262L 824.3529145962107 262L 824.3529145962107 262L 807.0858618527725 262"
                                                    cy="179.4212034383954" cx="824.3529145962107" j="9" val="22"
                                                    barHeight="82.5787965616046" barWidth="17.267052743438143"></path>
                                                <path id="SvgjsPath2992"
                                                    d="M 899.3752816883901 262L 899.3752816883901 149.39255014326642L 916.6423344318283 149.39255014326642L 916.6423344318283 262L 899.3752816883901 262"
                                                    fill="rgba(0,143,251,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 899.3752816883901 262L 899.3752816883901 149.39255014326642L 916.6423344318283 149.39255014326642L 916.6423344318283 262L 899.3752816883901 262"
                                                    pathFrom="M 899.3752816883901 262L 899.3752816883901 262L 916.6423344318283 262L 916.6423344318283 262L 899.3752816883901 262"
                                                    cy="149.39255014326642" cx="916.6423344318283" j="10" val="30"
                                                    barHeight="112.60744985673357" barWidth="17.267052743438143"></path>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2993" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG2994" class="apexcharts-series" seriesName="TeamxC"
                                                data:longestSeries="true" rel="1" data:realIndex="2">
                                                <path id="SvgjsPath2997"
                                                    d="M 0 149.39255014326642C 32.30129694246617 149.39255014326642 59.98812289315148 168.16045845272203 92.28941983561765 168.16045845272203C 122.50676213663439 168.16045845272203 148.40734125179162 126.87106017191974 178.62468355280836 126.87106017191974C 210.92598049527456 126.87106017191974 238.61280644595985 149.39255014326642 270.91410338842604 149.39255014326642C 302.1734230101675 149.39255014326642 328.96712554308874 93.08882521489966 360.2264451648302 93.08882521489966C 392.5277421072964 93.08882521489966 420.21456805798164 130.62464183381084 452.51586500044783 130.62464183381084C 483.77518462218933 130.62464183381084 510.5688871551106 21.770773638968393 541.8282067768521 21.770773638968393C 574.1295037193182 21.770773638968393 601.8163296700036 66.81375358166181 634.1176266124697 66.81375358166181C 666.4189235549359 66.81375358166181 694.1057495056212 40.538681948424 726.4070464480874 40.538681948424C 757.6663660698289 40.538681948424 784.4600686027501 126.87106017191974 815.7193882244916 126.87106017191974C 848.0206851669577 126.87106017191974 875.7075111176431 115.61031518624637 908.0088080601092 115.61031518624637"
                                                    fill="none" fill-opacity="1" stroke="rgba(254,176,25,1)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                    stroke-dasharray="0" class="apexcharts-line" index="2"
                                                    clip-path="url(#gridRectMask85fab4)"
                                                    pathTo="M 0 149.39255014326642C 32.30129694246617 149.39255014326642 59.98812289315148 168.16045845272203 92.28941983561765 168.16045845272203C 122.50676213663439 168.16045845272203 148.40734125179162 126.87106017191974 178.62468355280836 126.87106017191974C 210.92598049527456 126.87106017191974 238.61280644595985 149.39255014326642 270.91410338842604 149.39255014326642C 302.1734230101675 149.39255014326642 328.96712554308874 93.08882521489966 360.2264451648302 93.08882521489966C 392.5277421072964 93.08882521489966 420.21456805798164 130.62464183381084 452.51586500044783 130.62464183381084C 483.77518462218933 130.62464183381084 510.5688871551106 21.770773638968393 541.8282067768521 21.770773638968393C 574.1295037193182 21.770773638968393 601.8163296700036 66.81375358166181 634.1176266124697 66.81375358166181C 666.4189235549359 66.81375358166181 694.1057495056212 40.538681948424 726.4070464480874 40.538681948424C 757.6663660698289 40.538681948424 784.4600686027501 126.87106017191974 815.7193882244916 126.87106017191974C 848.0206851669577 126.87106017191974 875.7075111176431 115.61031518624637 908.0088080601092 115.61031518624637"
                                                    pathFrom="M -1 262L -1 262L 92.28941983561765 262L 178.62468355280836 262L 270.91410338842604 262L 360.2264451648302 262L 452.51586500044783 262L 541.8282067768521 262L 634.1176266124697 262L 726.4070464480874 262L 815.7193882244916 262L 908.0088080601092 262">
                                                </path>
                                                <g id="SvgjsG2995" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3092" r="0" cx="92.28941983561765"
                                                            cy="168.16045845272203" class="apexcharts-marker wcb9eap38"
                                                            stroke="#ffffff" fill="#feb019" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2976" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            <g id="SvgjsG2981" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2996" class="apexcharts-datalabels" data:realIndex="2"></g>
                                        </g>
                                        <line id="SvgjsLine3086" x1="0" y1="0" x2="908.0088080601092" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3087" x1="0" y1="0" x2="908.0088080601092" y2="0"
                                            stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG3088" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3089" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3090" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect3093" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect3094" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect2955" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                    <g id="SvgjsG3034" class="apexcharts-yaxis" rel="0" transform="translate(19.109375, 0)">
                                        <g id="SvgjsG3035" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3036"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="42" text-anchor="end"
                                                dominant-baseline="auto" font-size="11px" font-weight="regular"
                                                fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3037">70</tspan>
                                            </text><text id="SvgjsText3038" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="68.2" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3039">63</tspan>
                                            </text><text id="SvgjsText3040" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="94.4" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3041">56</tspan>
                                            </text><text id="SvgjsText3042" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="120.60000000000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3043">49</tspan>
                                            </text><text id="SvgjsText3044" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="146.8" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3045">42</tspan>
                                            </text><text id="SvgjsText3046" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="173" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3047">35</tspan>
                                            </text><text id="SvgjsText3048" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="199.2" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3049">28</tspan>
                                            </text><text id="SvgjsText3050" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="225.39999999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3051">21</tspan>
                                            </text><text id="SvgjsText3052" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="251.59999999999997" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3053">14</tspan>
                                            </text><text id="SvgjsText3054" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="277.79999999999995" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3055">7</tspan>
                                            </text><text id="SvgjsText3056" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="303.99999999999994" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan3057">0</tspan>
                                            </text></g>
                                        <g id="SvgjsG3058" class="apexcharts-yaxis-title"><text id="SvgjsText3059"
                                                font-family="Helvetica, Arial, sans-serif" x="8.364837646484375" y="171"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="900" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-title-text "
                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                transform="rotate(-90 -8.598442077636719 167)">Points</text></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 156.34px; top: 166px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; display: flex;">
                                        31 Jan</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 143, 251);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Team A: </span><span
                                                    class="apexcharts-tooltip-text-value">11 points</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(0, 227, 150);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Team B: </span><span
                                                    class="apexcharts-tooltip-text-value">55 points</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;">
                                        <span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(254, 176, 25);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Team C: </span><span
                                                    class="apexcharts-tooltip-text-value">25 points</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 114.246px; top: 304px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 49.1875px;">
                                        31 Jan</div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1020px; height: 441px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
               

            </div>

					 
				</div> 
            <div class="row">

                <div class="card-box pb-10 col-md-12 ">
                    <div class="h5 pd-20 mb-0"> New Students</div>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus">S.no</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile no</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>

                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>

                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-plus">
                                    <div class="name-avatar d-flex align-items-center">

                                        <div class="txt">
                                            <div class="weight-600">Jennifer O. Oster</div>
                                        </div>
                                    </div>
                                </td>

                                <td>7088888888</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.scripts')
</body>

</html>
<script>
    $(document).ready(function () {
        $('#notify').click(function () {
            $('#test').show();
        })
    })
</script>