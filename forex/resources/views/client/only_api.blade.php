<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard-assets/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Ubuntu:wght@400;700&display=swap"
        rel="stylesheet">


</head>

<body id="headdd">



    <div class="container-fluid h-100">
        <div class="row h-100 ">
            <!-- <nav id="sidebar" class="col-3 col-sm-2 col-md-1 col-lg-1 bg-light sidebar">
                <div>
                    <div class="firstlogo">
                        <li class="nav-item" onclick="togglecard()">
                            <i class="fas fa-bars fa-lg"></i>
                        </li>
                    </div>




                    <ul class="nav sidebarul flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-crosshairs text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                    </ul>
                </div>


                <div class="d-flex sidebardown flex-column">
                    <i onclick="firstchart()" class="fas fa-bars mb-3 text-black fa-lg"></i>
                    <i onclick="secondchart()" class="fas fa-history text-black fa-lg"></i>
                </div>
            </nav> -->









            <div class=" ">






            </div>
            <nav id="sidebar" class="col-3 d-lg-block col-sm-2 col-md-1 col-lg-1 bg-light sidebar">

                <div id="sidebarContents " class="  d-lg-block">
                    <ul class="nav sidebarul flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-crosshairs text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-line text-black fa-lg"></i>

                            </a>
                        </li>
                    </ul>
                    <div class="d-flex sidebardown flex-column">
                        <i onclick="firstchart()" class="fas d-lg-block d-none fa-bars mb-3 text-black fa-lg"></i>
                        <i onclick="secondchart()" class="fas d-lg-block d-none fa-history text-black fa-lg"></i>
                    </div>
                </div>
            </nav>







            <main id="mainContent" class=" col-md-11 bordergiveparent   col-lg-11 col-sm-11 col-xs-11 ">


                <div id="firstcontent" class="row bordergive align-items-center firstrow text-dark">
                    <div class="dropdown">



                        <!-- The card (acting as our dropdown menu) -->
                        <div id="detailsCard" class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton"
                            style="width: 200px; height: 242px; margin-left: 20px;">
                            <div class="card-body">

                                <div class="main1 mb-4">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <p class="card-title px-3 fw-900">Ahmed Group </p>
                                        <div>
                                            <i style="font-size:24px;" onclick="logout()"  class=" mt-3 fas fa-sign-out-alt"></i>
                                        </div>
                                    </div>
                                    <h5 class="px-3"> 1234567890 - Live</h5>

                                </div>



                                <div class="mb-2 px-3 py-1 profile">
                                    English
                                </div>

                                <div class="mb-2 px-3 border-top-0 py-1 profile">
                                    <i class="fas fa-user" style="color: grey;"></i>

                                    <a style="text-decoration: none; color: black;" href="#">Change Password</a>
                                </div>

                                <div class="mb-2 border-top-0 px-3 py-1 profile">
                                    <i class="fas fa-link mr-2" style="color: grey;"></i>

                                    <a style="text-decoration: none; color: black;" href="#">Connect to Account</a>
                                </div>

                                <div class="custom-control custom-switch border-top-0 border-bottom-0 px-3 py-1 profile"
                                    id="themeToggle">
                                    <i class="fas fa-moon mr-2"></i>
                                    <label>Dark Theme</label>
                                </div>





                            </div>

                        </div>


                   
                        <div id="marketExecutionDropdown" class="dropdown-menu dropdown-container rounded-0"
                            aria-labelledby="dropdownMenuButton">
                            <div class="d-flex mb-3 innerdropdown justify-content-between align-items-center">
                                <!-- Market Execution Dropdown button -->
                                <div class="dropdown ">
                                    <button style="font-size: 14px;" class="btn specialbutton  dropdown-toggle"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Market Execution
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <form action="{{route('process_trade')}}" method="post">
                                            @csrf
                                        <li><a class="dropdown-item" href="#">Market Execution</a></li>
                                        <li><a class="dropdown-item" href="#">Buy Limit</a></li>
                                        <li><a class="dropdown-item" href="#">Sell Limit</a></li>
                                        <li><a class="dropdown-item" href="#">Buy Stop</a></li>

                                        <li><a class="dropdown-item" href="#">Sell Stop</a></li>

                                    </ul>
                                </div>

                                <!-- Close button -->
                                <button id="closeDropdownBtn" onclick="toggleDropdown()">
                                    <i style=" color: skyblue;" class="fas fa-times"></i>
                                </button>
                            </div>


                            <!-- <div class="header">
                                <span></span>
                            </div> -->
                            <div class="content1">
                                <div class="option ">
                                    <label style="font-size: 13px;">Volume</label>
                                    <div class="control innervolume">
                                        <a class="" onclick="decrementValue('volume')">
                                            <i style="font-size: 14px;" class="fas fa-minus"></i>

                                        </a>
                                        <input id="volume" name="volume" value="0.02" />
                                        <a onclick="incrementValue('volume')">

                                            <i style="font-size: 14px;" class="fas fa-plus"></i>


                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="d-flex mt-3 justify-content-between">
                                    <div class="option">
                                        <label style="font-size: 13px;">Stop Loss</label>

                                        <div class="control innervolume1 innervolume">
                                            <button onclick="decrementValue('stoploss')">
                                                <i style="font-size: 14px;" class="fas fa-minus"></i>
                                            </button>
                                            <input id="stoploss" type="text" value="0.02" />
                                            <button style="font-size: 13px;" onclick="incrementValue('stoploss')">
                                                <i style="font-size: 14px;" class="fas fa-plus"></i>

                                            </button>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <label style="font-size: 13px;">Take Profit</label>
                                        <div class="control innervolume1 innervolume">
                                            <button onclick="decrementValue('takeprofit')">
                                                <i style="font-size: 14px;" class="fas fa-minus"></i>




                                            </button>
                                            <input id="takeprofit" type="text" value="0.02" />
                                            <button onclick="incrementValue('takeprofit')">
                                                <i style="font-size: 14px;" class="fas fa-plus"></i>


                                            </button>
                                        </div>
                                    </div>
                                </div> --}}








                                <div class="option border-bottom-0 mt-3">

                                    <label style="font-size: 13px;">Comment</label>



                                </div>
                                <input class="innervolume w-100 mb-3 in mt-3" type="text" type="text" name="comment">
                                <input type="hidden" name="open_price" id="open_price">
                                <input type="hidden" name="user_symbol" id="user_symbol">
                                <input type="hidden" name="open_prices" id="open_prices">

                                <div class="prices text-center">
                                    <div style="font-size: 14px;" class="order_sell_price">1.06094</div>
                                    <div style="font-size: 14px;" class="order_buy_price">1.06094</div>
                                </div>
                                <div class="buttons-row">
                                    <button style="font-size: 14px;" class="sell" type="submit" name="action" value="sel_market">Sell by Market</button>
                                    <button style="font-size: 14px;" class="buy" type="submit" name="action" value="buy_market">Buy by Market</button>
                                </div>
                            </div>
                        </div>
                    </form>

                        <div id="detailsCard" class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton"
                            style="width: 200px; height: 242px; margin-left: 20px;">
                            <div class="card-body">

                                <div class="main1 mb-4">
                                    <div class="d-flex  align-items-center ">
                                        <p class="card-title px-3 fw-900">EtcGlobals Group </p>
                                        <div>
                                            <i style="font-size:24px;"onclick="logout()"  class=" mt-3 fas fa-sign-out-alt"></i>
                                        </div>
                                    </div>
                                    <h5 class="px-3 para"> 1234567890 - Live</h5>

                                </div>



                                <div class="mb-2 px-3 py-1 profile">
                                    English
                                </div>

                                <div class="mb-2 px-3 border-top-0 py-1 profile">
                                    <i style="color:black; background-color: white; font-size: 23px;"
                                        class="fas fa-user-circle mr-2"></i>
                                    <a style="text-decoration: none; color: black;" href="#">Change Password</a>
                                </div>

                                <div class="mb-2 border-top-0 px-3 py-1 profile">
                                    <i style="color:black; background-color: white; font-size: 23px;"
                                        class="fas fa-lock mr-2"></i>
                                    <a style="text-decoration: none; color: black;" href="#">Connect to Account</a>
                                </div>

                                <div
                                    class="custom-control custom-switch border-top-0 border-bottom-0 px-3 py-1 profile">
                                    <i class="fas fa-plug mr-2"></i>
                                    <label class="custom-control-label" for="darkSwitch">Dark Theme</label>
                                </div>



                            </div>

                        </div>



                    </div>
                    <!-- Dropdown with SVG Icon -->

                    <div class="col-1 no1 col-md-3 col-sm-3 justify-content-center f d-flex align-items-center">
                        <li style="margin-top: 20px ;" class="nav-item firstlogo d-md-none d-none d-lg-block"
                            onclick="togglecard()">
                            <i class="fas fa-bars fa-lg"></i>
                        </li>

                        <button id="toleftnavbartoggle" style="background-color: white; border: none;"
                            onclick="navtoggle()" class="d-lg-none">
                            <i class="fas fa-bars "></i>
                        </button>
                        <li id="margingiving2" class="nav-item dropdown">
                            <a class="nav-link speciala dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <svg class="barsss" width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path class="uuuuuuuu" fill-rule="evenodd" clip-rule="evenodd" fill="black"
                                        d="M20.999 15.0015H19V18.0015C19 18.2668 18.8946 18.5213 18.707 18.709C18.5193 18.8966 18.2648 19.002 17.9995 19.002C17.7342 19.002 17.4797 18.8966 17.292 18.709C17.1044 18.5213 16.999 18.2668 16.999 18.0015V8.0005H15C14.8661 8.00474 14.7327 7.98202 14.6077 7.9337C14.4828 7.88537 14.3688 7.81243 14.2725 7.7192C14.1763 7.62597 14.0998 7.51435 14.0476 7.39098C13.9953 7.2676 13.9684 7.13498 13.9684 7.001C13.9684 6.86702 13.9953 6.7344 14.0476 6.61102C14.0998 6.48765 14.1763 6.37603 14.2725 6.2828C14.3688 6.18957 14.4828 6.11663 14.6077 6.06831C14.7327 6.01998 14.8661 5.99726 15 6.0015H16.999V3.0005C16.999 2.73515 17.1044 2.48067 17.292 2.29304C17.4797 2.10541 17.7342 2 17.9995 2C18.2648 2 18.5193 2.10541 18.707 2.29304C18.8946 2.48067 19 2.73515 19 3.0005V13.0015H20.999C21.2642 13.0015 21.5186 13.1069 21.7061 13.2944C21.8936 13.4819 21.999 13.7363 21.999 14.0015C21.999 14.2667 21.8936 14.5211 21.7061 14.7086C21.5186 14.8961 21.2642 15.0015 20.999 15.0015ZM10 11.0015H6.999V21.0015C7.00324 21.1354 6.98052 21.2688 6.9322 21.3938C6.88387 21.5187 6.81093 21.6327 6.7177 21.729C6.62447 21.8252 6.51285 21.9017 6.38948 21.9539C6.2661 22.0062 6.13348 22.0331 5.9995 22.0331C5.86552 22.0331 5.7329 22.0062 5.60952 21.9539C5.48615 21.9017 5.37453 21.8252 5.2813 21.729C5.18807 21.6327 5.11513 21.5187 5.0668 21.3938C5.01848 21.2688 4.99576 21.1354 5 21.0015V18.0015H3C2.73478 18.0015 2.48043 17.8961 2.29289 17.7086C2.10536 17.5211 2 17.2667 2 17.0015C2 16.7363 2.10536 16.4819 2.29289 16.2944C2.48043 16.1069 2.73478 16.0015 3 16.0015H5V5.0015C4.99576 4.86758 5.01848 4.73418 5.0668 4.60922C5.11513 4.48425 5.18807 4.37027 5.2813 4.27404C5.37453 4.17782 5.48615 4.10131 5.60952 4.04906C5.7329 3.99681 5.86552 3.96988 5.9995 3.96988C6.13348 3.96988 6.2661 3.99681 6.38948 4.04906C6.51285 4.10131 6.62447 4.17782 6.7177 4.27404C6.81093 4.37027 6.88387 4.48425 6.9322 4.60922C6.98052 4.73418 7.00324 4.86758 6.999 5.0015V9.0005H10C10.2653 9.0005 10.5198 9.10591 10.7075 9.29354C10.8951 9.48117 11.0005 9.73565 11.0005 10.001C11.0005 10.2663 10.8951 10.5208 10.7075 10.7085C10.5198 10.8961 10.2653 11.0015 10 11.0015V11.0015Z">

                                    </path>
                                </svg>
                            </a>
                            <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">OHLC</a></li>
                                <li><a class="dropdown-item" href="#">Line</a></li>
                                <li><a class="dropdown-item" href="#">CandleStick</a></li>
                                <li><a class="dropdown-item" href="#">Candle Hollow Stick</a></li>
                                <li><a class="dropdown-item" href="#">HLC</a></li>
                                <li><a class="dropdown-item" href="#">Heikin Ashi</a></li>



                            </ul>
                        </li>
                    </div>



                    <div id="margingiving"
                        class="col-lg-6 margingiving  col-md-9 col-sm-9 col-9 d-flex align-items-center  justify-content-between">



                        <h5 class="tohide">M1</h5>
                        <h5 class="tohide">M5</h5>
                        <h5 class="tohide">M15</h5>
                        <h5 class="tohide">M30</h5>
                        <h5 class="tohide">H1</h5>
                        <h5 class="tohide">H4</h5>
                        <h5 class="tohide">D1</h5>
                        <h5 class="tohide">W1</h5>
                        <h5 class="tohide">MN</h5>

                        <li class="nav-item dropdown toshow speciali  ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                M5
                            </a>
                            <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">M5</a></li>
                                <li><a class="dropdown-item" href="#">M15</a></li>
                                <li><a class="dropdown-item" href="#">M30</a></li>
                                <li><a class="dropdown-item" href="#">H1</a></li>
                                <li><a class="dropdown-item" href="#">H4 </a></li>
                                <li><a class="dropdown-item" href="#">D1</a></li>
                                <li><a class="dropdown-item" href="#">D1</a></li>
                                <li><a class="dropdown-item" href="#">W1</a></li>
                                <li><a class="dropdown-item" href="#">MN</a></li>







                            </ul>
                        </li>





                        <svg onclick="toggleDropdown()" width="24" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#DA5244"
                                    d="M11.5 4v2.02C8.42 6.276 6 8.856 6 12c0 3.145 2.42 5.725 5.5 5.98V20H10c-4.418 0-8-3.582-8-8s3.582-8 8-8h1.5z">
                                </path>
                                <path fill="#3687ED"
                                    d="M14 4c4.418 0 8 3.582 8 8s-3.582 8-8 8h-1.5v-2.02c3.08-.256 5.5-2.836 5.5-5.98 0-3.145-2.42-5.725-5.5-5.98V4H14z">
                                </path>
                                <path fill="#B0BEC5" d="M13 8v4.186l2.657 2.657-1.414 1.414L11 13V8z"></path>
                            </g>
                        </svg>



                        <svg class="uu1" width="24" id="svgToggle" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="uu1" fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.057 18.177c.786 0 1.369-.451 1.763-.934.391-.48.699-1.108.954-1.763.474-1.22.861-2.791 1.22-4.312l-2.258.828c-.26 1.04-.527 1.991-.826 2.759-.226.58-.443.982-.64 1.223-.121.15-.194.19-.219.199-.312-.003-.62-.16-.964-.895-.354-.757-.586-1.809-.842-3.019l-.026-.122c-.235-1.108-.497-2.35-.932-3.316-.454-1.009-1.261-2.06-2.715-2.06-1.21 0-2.038.943-2.57 1.82-.562.93-1.022 2.16-1.4 3.449l2.378-.83c.233-.624.478-1.16.734-1.583.472-.78.782-.856.858-.856.26 0 .55.124.891.88.343.763.568 1.818.825 3.033l.004.019c.241 1.138.515 2.43.984 3.433.48 1.025 1.317 2.047 2.781 2.047Zm-.016-1.998s.004-.002.01-.002l-.01.002Z">
                            </path>
                            <path class="uu1"
                                d="m5.752 15.75-2.187.763a94.295 94.295 0 0 0-.554 3.34 1 1 0 1 0 1.978.295c.183-1.226.434-2.799.763-4.397Z">
                            </path>
                            <path class="uu1" fill-rule="evenodd" clip-rule="evenodd"
                                d="m16.845 7.46 2.353-.864.068-.191c.216-.585.422-.99.607-1.232A.784.784 0 0 1 20.038 5 1 1 0 0 0 20 3c-.791 0-1.354.485-1.717.96-.365.478-.653 1.102-.893 1.753-.194.526-.375 1.12-.546 1.746Zm3.211-2.47-.009.004c.006-.004.009-.004.009-.004Z">
                            </path>
                            <path class="uu1"
                                d="M21.942 7.664a1 1 0 0 1-.605 1.278l-7 2.5a1 1 0 0 1-.673-1.884l7-2.5a1 1 0 0 1 1.278.606ZM8.86 13.433a1 1 0 1 0-.719-1.866l-6.5 2.5a1 1 0 0 0 .718 1.866l6.5-2.5Z">
                            </path>
                        </svg>


                        <svg class="tohide" onclick="toggleCard()" width="24" height="24" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="uu1" d="M15 7H7v2h8V7ZM7 15h5v2H7v-2ZM17 11H7v2h10v-2Z"></path>
                            <path fill="blue" fill-rule="evenodd" fill="blue" clip-rule="evenodd"
                                d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14Zm-1 2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12Z">
                            </path>
                        </svg>




                    </div>





                    <div id="hiddingit"
                        class="  col-lg-5 no3 col-md-12 col-sm-12 col-12 increase d-flex align-items-center justify-content-end">

                        <div class="d-flex flex-column mr-3">
                            <span class="text-center tex me-3">Account ID</span>
                            <p class="tex1">80920230</p>
                        </div>

                        <div class="d-flex flex-column mr-3">
                            <span class="tex me-3">Balance</span>
                            <p class="tex1">981280</p>
                        </div>

                        <div class="d-flex flex-column mr-3">
                            <span class="text-center tex me-3">Equity</span>
                            <p class="tex1">13332.32</p>
                        </div>

                        <div class=" " id="containerToFullscreen" onclick="toggleFullScreen()"
                            style="display: inline-block;">



                            <svg width="50" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path class="uu1"
                                    d="M14.3401 8.30997L17.4001 5.17997L16.8301 4.98997C16.5968 5.00443 16.3692 4.91448 16.2089 4.74447C16.0485 4.57446 15.972 4.34198 16.0001 4.10997C16.0196 3.60145 16.4133 3.18632 16.9201 3.13997L19.9701 3.02997C19.9977 3.02807 20.0248 3.0213 20.0501 3.00997C20.0901 3.00997 20.1201 3.03997 20.1601 3.03997C20.2893 3.04581 20.4156 3.07995 20.5301 3.13997C20.5733 3.15727 20.6138 3.18086 20.6501 3.20997C20.8933 3.38413 21.0294 3.67146 21.0101 3.96997C21.0094 3.99779 21.0026 4.02511 20.9901 4.04997L20.8601 7.07997C20.8031 7.58707 20.3895 7.9796 19.8801 8.00997C19.6473 8.03373 19.4158 7.95437 19.2465 7.79279C19.0772 7.63121 18.9872 7.40362 19.0001 7.16997L18.8501 6.61997L15.6901 9.65997C15.4604 9.94995 15.0847 10.0824 14.724 10.0004C14.3632 9.91853 14.0815 9.63684 13.9996 9.2761C13.9177 8.91537 14.0501 8.53965 14.3401 8.30997ZM15.6901 14.34L18.8201 17.4L19.0101 16.83C18.995 16.5984 19.0833 16.372 19.2513 16.2118C19.4192 16.0516 19.6495 15.974 19.8801 16C20.3921 16.0154 20.8124 16.4099 20.8601 16.92L20.9601 19.97C20.9714 19.9953 20.9782 20.0223 20.9801 20.05C20.9783 20.0874 20.9716 20.1243 20.9601 20.16C20.9543 20.2891 20.9201 20.4154 20.8601 20.53C20.8428 20.5732 20.8192 20.6136 20.7901 20.65C20.6159 20.8932 20.3286 21.0293 20.0301 21.01C20.0023 21.0093 19.975 21.0025 19.9501 20.99L16.9201 20.86C16.413 20.803 16.0205 20.3894 15.9901 19.88C15.9663 19.6472 16.0457 19.4156 16.2073 19.2464C16.3689 19.0771 16.5964 18.9871 16.8301 19L17.3801 18.85L14.3401 15.69C14.0501 15.4603 13.9177 15.0846 13.9996 14.7238C14.0815 14.3631 14.3632 14.0814 14.724 13.9995C15.0847 13.9176 15.4604 14.05 15.6901 14.34ZM9.66009 15.69L6.60009 18.82L7.17009 19.01C7.40334 18.9955 7.63096 19.0855 7.79131 19.2555C7.95166 19.4255 8.02816 19.658 8.00009 19.89C7.97959 20.4018 7.5806 20.8179 7.07009 20.86L4.03009 20.96C4.00481 20.9713 3.97773 20.9781 3.95009 20.98C3.90952 20.9774 3.86931 20.9707 3.83009 20.96C3.70431 20.9528 3.58154 20.9187 3.47009 20.86C3.42687 20.8427 3.38643 20.8191 3.35009 20.79C3.10689 20.6158 2.97078 20.3285 2.99009 20.03C2.99076 20.0022 2.99759 19.9748 3.01009 19.95L3.14009 16.92C3.19708 16.4129 3.61071 16.0203 4.12009 15.99C4.35289 15.9662 4.58442 16.0456 4.75369 16.2072C4.92296 16.3687 5.013 16.5963 5.00009 16.83L5.15009 17.38L8.31009 14.34C8.53977 14.05 8.91549 13.9176 9.27623 13.9995C9.63696 14.0814 9.91865 14.3631 10.0006 14.7238C10.0825 15.0846 9.95007 15.4603 9.66009 15.69ZM8.31009 9.65997L5.01009 6.47997L4.99009 7.16997C5.00455 7.40322 4.9146 7.63084 4.74459 7.79119C4.57458 7.95154 4.3421 8.02803 4.11009 7.99997C3.59827 7.97947 3.18212 7.58047 3.14009 7.06997L3.03009 4.02997C3.02819 4.00233 3.02142 3.97525 3.01009 3.94997C3.01009 3.90997 3.04009 3.87997 3.04009 3.82997C3.04724 3.70419 3.08135 3.58142 3.14009 3.46997C3.15739 3.42674 3.18098 3.38631 3.21009 3.34997C3.38425 3.10677 3.67159 2.97066 3.97009 2.98997C3.99791 2.99063 4.02523 2.99747 4.05009 3.00997L7.08009 3.13997C7.58719 3.19695 7.97972 3.61058 8.01009 4.11997C8.03385 4.35277 7.95449 4.5843 7.79291 4.75357C7.63133 4.92284 7.40374 5.01288 7.17009 4.99997L6.50009 4.98997L9.66009 8.30997C9.95007 8.53965 10.0825 8.91537 10.0006 9.2761C9.91865 9.63684 9.63696 9.91853 9.27623 10.0004C8.91549 10.0824 8.53977 9.94995 8.31009 9.65997Z">
                                </path>
                            </svg>
                        </div>
                    </div>









                </div>

                <!-- Making the form  -->

                <div class="head111">
                    <div class="bg-primary gameee d-flex justify-content-between">
                        <div class="leftside d-flex">
                            <div class="add">
                                Add

                            </div>
                            <div class="edit">
                                Edit

                            </div>


                        </div>
                        <i class="fas crosslogo fa-times"></i>


                    </div>


                    <div class="row">
                        <div class="col-5 lefter ">

                            <p style="margin: 7px 0 10px;font-size: 13px;" class="text-center mb-3 mt-1 fw-bold">



                                Search indicator
                            </p>

                            <input class="mb-2 inn " type="text">
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>
                            <p class="mb-2 lefttext">Accelaration brands</p>



                        </div>




                        <div class="col-7 righter ">
                            <p style="font-size: 18px;" class="p-4">Accelaration brand</p>
                            <p class="series" style="font-size: 12.6px;">Series</p>

                            <br>

                            <select class="box mb-2" name="" id="">
                                <option value="">Price</option>
                                <option value="">volume</option>

                            </select>
                            <br>

                            <label class=" ms-3 mb-2" for="">index</label>
                            <br>
                            <input class="innn" type="text">
                            <br>
                            <label class=" ms-3 mb-2" for="">period</label>
                            <br>
                            <input class="innn" type="text">
                            <br>
                            <label class=" ms-3 mb-2" for="">factors</label>
                            <br>
                            <input class="innn" type="text">


                            <br>
                            <div class=" w-25 addbutton  mt-3 btn btn-primary">
                                Add
                            </div>


                        </div>

                    </div>
                </div>















                <div class="row viewss mt-lg-0 ">
                    <!-- TradingView Widget BEGIN -->
                    <div id="widgetmobilescreen"
                        class="tradingview-widget-container col-12 col-lg-8 col-md-12 col-sm-12">
                        <div id="tradingview_c6b91"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                    TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">



                            function createTradingViewWidget(theme,symbol) {
                                document.getElementById('tradingview_c6b91').innerHTML = '';

                                new TradingView.widget({
                                    "autosize": false,
                                    "width": "100%",
                                    "height": "100%",
                                    "symbol": symbol,
                                    "interval": "D",
                                    "timezone": "Etc/UTC",
                                    "style": "1",
                                    "theme": theme,
                                    "locale": "en",
                                    "enable_publishing": false,
                                    "allow_symbol_change": true,
                                    "container_id": "tradingview_c6b91"
                                });
                            }


                            createTradingViewWidget('light');

                        </script>
                    </div>
                    <!-- TradingView Widget END -->


                    <div id="mainCard" class="card col-lg-4 col-md-8 col-sm-12  me-auto ms-auto">
                        <div class="card-body">
                            <form class=" d-flex search-form  position-relative ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search search-icon" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>


                                <input class="form-control mb-0 me-2 search-input border-0 no-border" type="search"
                                    placeholder="Search" aria-label="Search">


                                <i 
                                    class="position-absolute top-50  end-0 translate-middle-y fas fa-times clickedcross"></i>

                            </form>
                            <!-- fields -->
                            <div class="dropdown-card" id="dropdownCard">
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showSecondDropdown(event)">Forex</span></span>
                                    <span class="count">10</span>
                                </div>
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showThirdDropdown(event)">Spot Metals</span></span>
                                    <span class="count">15</span>
                                </div>
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showFourthDropdown(event)">Stock</span></span>
                                    <span class="count">15</span>
                                </div>
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showFifthDropdown(event)">Stock Indices (CFDs)</span></span>
                                    <span class="count">15</span>
                                </div>
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showSixthDropdown(event)">Cryptos</span></span>
                                    <span class="count">15</span>
                                </div>
                                <div class="dropdown-row">
                                    <span class="word"><span onclick="showSeventhDropdown(event)">Energies (CFDs)</span></span>
                                    <span class="count">15</span>
                                </div>
                               

                            </div>


                            <div class="dropdown-card2" id="dropdowncard2">






                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard2)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>
                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">NZD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">New Zealand Dollar vs US Dollar</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">JPY</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Us Dollar  Vs Japanease Yen</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">USD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">British Pound Vs Us Dollar </div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">EUR</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Euro Vs Us Dollar </div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">AUD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Usd Dollar  Vs Australian Dollar</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">CAD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Us Dollar Vs Canadian Dollar </div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">JPY</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">British Pound Vs Japanease Yen </div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">CHF</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Euro Vs Swiss Franc</div>
                                </div>

                                 


                            </div>


                            <div class="dropdown-card3" id="dropdowncard3">


                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard3)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>



                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">XAUUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Gold </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">XAGUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Silver</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">COPPER</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Copper</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">XPTUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Platinum</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">XPDUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Palladium</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description"> XAGEUR</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Silver</div>
                                </div>
                              





                                

                            </div>




                            <div class="dropdown-card4" id="dropdowncard4">


                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard4)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>



                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">AAPL</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Apple </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">FB</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Facebook</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">AMZN</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Amazon</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">NFLX</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Netflix</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">TSLA</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Tesla</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BABA</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Alibaba</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">GOOGL</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Alphabet</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">TWTR</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Twitter</div>
                                </div>





                                

                            </div>


                            <div class="dropdown-card5" id="dropdowncard5">


                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard5)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>



                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">USDX</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	USD Index </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">UK100</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	FTSE 100</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">GER30</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">DAX 30</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">SPX500</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	SP500</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">FRA40</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	CAC 40</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">JPN225</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Nikkei 225</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">ESP35</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">IBEX35</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">NAS100</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Nasdaq</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">USA30</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	DOW 30</div>
                                </div>
                              





                                

                            </div>


                            <div class="dropdown-card6" id="dropdowncard6">


                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard6)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>



                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">ADAUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Cardano </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">ATOMUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Atom</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">AVAXUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Avalanche</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">AXSUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Axis infinity</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BCH</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Bitcoin Cash</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BNBUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Binance Coin</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BTCUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Bitcoin Vs Us Dollar </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BTGUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Bitcoin Gold</div>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">BUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Binance USD</div>
                                </div>



                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">DAIUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">DAI</div>
                                </div>



                                 <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">DASHUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Dashcoin</div>
                                </div>




                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">DOGEUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">DogeCoin</div>
                                </div>




                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">DOTUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Polkadot</div>
                                </div>



                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">ETHUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Ethereum</div>
                                </div>




                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">TRXUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Uk gold</div>
                                </div>



                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">FTMUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Fantom USD</div>
                                </div>



                                 <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">GALAUSD	</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Gala</div>
                                </div>



                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">LINKUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Chainlink</div>
                                </div>



                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">LRCUSD</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Loopring</div>
                                </div>

                              





                                

                            </div>





                            <div class="dropdown-card7" id="dropdowncard7">


                                <div class="dropdown-row" id="">
                                    <span onclick="gamer(dropdowncard7)">
                                        <i style='font-size:24px' class='fas'>&#xf104;</i>



                                    </span>
                                </div>


                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">UKOIL</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Brent </div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">OIL</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Nymex</div>
                                </div>

                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">NATGAS</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">	Natural GAS</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">churchill</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">UK spot oil</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">CMEGROUP</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Natural Gas</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">CENTCIMNOS</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Uk gold</div>
                                </div>
                                <div class="dropdown-row1">
                                    <div class="dropdown-row2">
                                        <span class="description">CentKimnos</span>
                                        <button class="toggle-btn" onclick="toggleIcon(this)"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="description1">Uk gold</div>
                                </div>
                              





                                

                            </div>


                            <!-- end -->


                            <div id="searchh" class="searchbottom " style="background-color: wht;">
                                <!-- Header section for labels -->
                                <div style="background-color: white;" class="row header">
                                    <div class="col">
                                        <label class="mb-0 rightside">Symbol</label>
                                    </div>
                                    <div class="col text-center">
                                        <label class="mb-0 rightside">Bid</label>
                                    </div>
                                    <div class="col text-center">
                                        <label class="mb-0 rightside">Ask</label>
                                    </div>
                                    <div class="col text-center">
                                        <label class="mb-0 rightside last-child">Spread</label>
                                    </div>
                                </div>

                                <!-- Content section for data rows -->
                                <div style="background-color:  white;height: 232px; overflow-y: scroll;" id="contentRows">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- TradingView Widget END -->



                <button style="background-color: blueviolet;"
                    class="btn btn-secondary  orders ms-1 btn btn-primary rounded-0 p-1  mb-2">Orders</button>



                <button style="background-color: blueviolet;display: none;"
                    class="btn btn-secondary orders ms-1 btn btn-primary history rounded-0 p-1  mb-2">History</button>







                    <div class="table-responsive col-12">
                        <table class="table border-0">
                            <thead>
                                <tr>
                                    <th>Symbol</th>
                                    <th>Ticket</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Volume</th>
                                    <th>Price</th>
                                    <th>S/L</th>
                                    <th>T/P</th>
                                    <th>Swap</th>
                                    <th>Profit</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
    
                                <tr>
    
                                    <td data-column="Symbol">
                                        <div>{{$order->symbols}}
                                        </div>
                                    
                                    </td>
    
                                    <td data-column="Ticket">{{$order->ticket}}</td>
                                    <td data-column="Time">{{$order->created_at}}</td>
                                    <td data-column="Type">{{$order->type}}</td>
                                    <td data-column="Volume">{{$order->volume}}</td>
                                    <td data-column="Price">{{$order->pay}}</td>
                                    <td data-column="S/L">{{$order->sl}}</td>
                                    <td data-column="T/P">{{$order->tp}}</td>
                                    <td data-column="Swap">{{$order->swap}}</td>
                                    <input type="hidden" id="profit_{{$order->id}}" value="" name="users_profit">
                                    <input type="hidden" id="current_{{$order->id}}" value="" name="current_price">
                                    <td id="symbol_{{$order->id}}" data-value="{{$order->profit}}"  data-column="Profit">{{$order->profit}}</td>
                                    <td data-column="Comment">{{$order->comment}}</td>
                                    <td data-column="Comment" onclick="stop_order({{$order->id}})">  <i style=" color: skyblue;" class="fas fa-times"></i></td>
                                </tr>
                                                        @endforeach
                            </tbody>
                        </table>
                    </div>
    
    
    
                    <div class="table-responsive2   col-12">
                        <table class="table border-0">
                            <thead>
                                <tr>
                                    <th>Symbol</th>
                                    <th>Ticket</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Volume</th>
                                    <th>Price</th>
                                    <th>S/L</th>
                                    <th>T/P</th>
                                    <th>Price</th>
                                    <th>Commission</th>
    
                                    <th>Swap</th>
                                    <th>Profit</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($close_orders as $order)
    
                                <tr>
    
                                    <td data-column="Symbol">
                                        <div>{{$order->symbols}}
                                        </div>
                                    
                                    </td>
    
                                    <td data-column="Ticket">{{$order->ticket}}</td>
                                    <td data-column="Time">{{$order->created_at}}</td>
                                    <td data-column="Type">{{$order->type}}</td>
                                    <td data-column="Volume">{{$order->volume}}</td>
                                    <td data-column="Price">{{$order->pay}}</td>
                                    <td data-column="S/L">{{$order->sl}}</td>
                                    <td data-column="T/P">{{$order->tp}}</td>
                                    <td data-column="Swap">{{$order->swap}}</td>
                                    <td >{{$order->profit}}</td>
                                    <td data-column="Comment">{{$order->comment}}</td>
                                </tr>
                                                        @endforeach
                            </tbody>
                        </table>
                    </div>
    

                <div id="trademobilepage" class="trademobilepage" style="padding: 1rem; font-size: 1rem;">

                    <!-- Order with blue underline -->
                    <div style="text-align: left; color: blue; margin-bottom: 0.5rem;">
                        <span class="boldtext">Orders</span>
                    </div>
                    <div class="div1" style="background-color: blue; margin-top:30px; height: 3px; width:50px;"></div>

                    <!-- Centered -1.64 EUR -->
                    <div class="togivered" style="text-align: center; color: red; margin-bottom: 0.5rem;">
                        <span class="smtext">-1.64 EUR</span>
                    </div>

                    <!-- HR Line -->
                    <hr style="margin-bottom: 0.5rem;" />

                    <!-- Balance and Free -->
                    <div style="display: flex; justify-content: space-around; margin-bottom: 0.5rem;">
                        <div class="towhite">


                            <span class="boldtext"> Balance:3574.19</span>

                        </div>
                        <div class="towhite">
                            <span class="boldtext"> Free: 128373729
                            </span>
                        </div>
                    </div>

                    <!-- Equity and Level -->
                    <div style="display: flex; justify-content: space-around; margin-bottom: 0.5rem;">
                        <div class="towhite">

                            <span class="boldtext"> Equity: 20833133
                            </span>
                        </div>
                        <div class="towhite">
                            <span class="boldtext"> Level:823198931%
                            </span>
                        </div>
                    </div>

                    <!-- Margin -->

                    <div class="margin towhite" style="margin-bottom: 0.5rem;margin-left:50px ;text-align:left;">

                        <span class="boldtext"> Margin: 20
                        </span>
                    </div>


                    <!-- Positions with background color -->
                    <div class="positions todark" style="background-color: #f2f2f2; padding: 0.5rem; margin-bottom: 0.5rem; ">
                        Positions
                    </div>

                    @foreach ($orders as $order)

                    <div class="box  todark bg-light arrow-left mt-4">

                        <div class="todark" style="display: flex; justify-content: space-around; margin-bottom: 0.5rem;">
                            <div class="towhite todark">
                                <span class="boldtext todark">{{$order->symbols}}</span> <span class="smtext todark">{{$order->type}}</span>
                            </div>
                            <div class="towhite todark">
    
                                <span class=" todark boldtext"> {{$order->ticket}}
                                </span>
                            </div>
                        </div>
    
                        <!-- 1.05055 and 0.02 -->
                        <div class="todark" style="display: flex; justify-content: space-around;">
                            <div class="towhite todark">
    
                                <span class="boldtext todark"> {{$order->profit}}
                                </span>
                            </div>
                            <div class="towhite todark">
                                <span class="boldtext todark" >{{$order->volume}}</span>
                            </div>
                        </div>
    

                    </div>
                    @endforeach

                    <!-- EUR SD Sell and Value -->
                  
                </div>

                <div id="isthisflex">
                    <div id="" style="display: none;" class=" d-flex">
                        <div style="text-align: left; color: blue; margin-bottom: 0.5rem;">
                            <span onclick="ordermobilepagess()" class="boldtext tohover">Orders</span>
                            <!-- <div class="div" style="background-color: blue; margin-top:30px; height: 3px; width:50px;">
                            </div> -->
                        </div>
                        <div class="ms-3" style="text-align: left; color: blue; margin-bottom: 0.5rem;">
                            <span onclick="historymobilepages()" class="active boldtext tohover">History</span>
                            <!-- <div class="div" style="background-color: blue; margin-top:30px; height: 3px; width:50px;">
                            </div> -->
                        </div>
                    </div>
                </div>


                <div id="historymobilepage" class="historymobilepage ">











                    <!-- #hongkong50, 0.01, and sell 155804 -->
                    @foreach ($close_orders as $order)

                    <div onclick="showCard()" class="box   bg-light arrow-left">

                        <div class=" todark"
                            style="display: flex; justify-content: space-evenly; align-items: center; margin-bottom: 0.5rem;">
                            <div class="todark">

                                <span class="boldtext todark" style="font-weight: bold;"> {{$order->symbols}}</span>
                                <span class="smtext todark">{{$order->type}}</span>
                            </div>

                            <div class="boldtext todark">
                                {{$order->ticket}}
                            </div>
                            <div class="mt-4 todark">{{$order->volume}}</div>


                        </div>

                        <div class="todark" style=" display: flex; justify-content: space-evenly;">
                            <div class="boldtext todark">
                                {{$order->created_at}}
                            </div>
                            <div class="boldtext todark">
                                {{$order->created_at}}
                            </div>
                            <div></div>

                        </div>

                    </div>
                    @endforeach







                  



                </div>

                <div id="ordersmobilepagesecond" style="display: none;" class="ordersmobilepage ">

                    @foreach ($orders as $order)

                    <div class=" box box1 bg-light arrow-left todark px-3">

                        <!-- Top Section -->
                        <div class="todark" style="display: flex; justify-content: space-between;">
                            <div class="boldtext todark">
                                <span class="boldtext todark" style="font-size: 15px;">Action</span>
                            </div>
                            <div class="boldtext todark">
                                <span style="font-size: 15px;" class="boldtext todark">Ticket</span>

                            </div>
                            <div class="boldtext todark"><span class="boldtext todark"></span></div>
                        </div>

                        <!-- Middle Section -->
                        <div class="todark" style="display: flex; justify-content: space-between;">
                            <div class="boldtext todark">
                                <span class="boldtext todark" style="font-size: 15px;">{{$order->profit}}</span>
                            </div>
                            <div class="boldtext todark">
                                <span style="font-size: 15px;" class="boldtext todark">{{$order->ticket }}</span>

                            </div>
                            <div class="boldtext todark"><span class="boldtext todark">{{$order->volume}}</span></div>
                        </div>

                        <!-- Date Section -->
                        <div class="todark date" style="margin-left: 20px;">
                            <div style="font-size: 13px;" class="boldtext todark">
                                Date
                            </div>
                            <div class=" boldtext todark">
                                {{$order->created_at}}
                            </div>
                        </div>

                    </div>

                 

                    @endforeach








                </div>







                <div id="card" class="car4">

                    <div class=" todark"
                        style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">Ticket</span>
                        </div>

                        <div class="boldtext todark">
                            Symbol
                        </div>
                    </div>


                    <div class=" todark"
                        style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">
                            155804


                        </div>

                        <div class="boldtext todark">


                            <span class="boldtext todark" style="font-weight: bold;"> #Hongkong50</span>
                            <span class="smtext todark">sell</span>
                        </div>


                    </div>

                    <hr>



                    <div class=" todark"
                        style="display: flex; justify-content:space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">Volume</span>
                        </div>

                        <div class="boldtext todark">
                            Profit
                        </div>
                    </div>

                    <div class=" todark"
                        style="display: flex; justify-content:space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;"> 0.01</span>
                        </div>

                        <div class=" smtext boldtext todark">
                            -0.02
                        </div>


                    </div>

                    <hr>
                    <div class=" todark"
                        style="display: flex; justify-content:space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">Stop Loss</span>
                        </div>

                        <div class="boldtext todark">
                            Take Profit
                        </div>
                    </div>

                    <div class=" todark"
                        style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">
                                0
                            </span>
                        </div>

                        <div class="  boldtext todark">
                            0

                        </div>


                    </div>

                    <hr>

                    <div class=" todark"
                        style="display: flex; justify-content:space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">Swap</span>
                        </div>

                        <div class="boldtext todark">
                            Commission
                        </div>
                    </div>

                    <div class=" todark"
                        style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 0.5rem;">
                        <div class="todark">

                            <span class="boldtext todark" style="font-weight: bold;">
                                0
                            </span>
                        </div>

                        <div class="  boldtext todark">
                            0

                        </div>


                    </div>

                    <hr>







                </div>





















                <div class="container d-lg-none">

                    <div id="endsection" class=" endsection row ms-2">
                        <div class="col-2">

                            <div class="">
                                <svg class="i" onclick="toggleCardformobile()" width="24" height="24"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path class="uu1" d="M15 7H7v2h8V7ZM7 15h5v2H7v-2ZM17 11H7v2h10v-2Z"></path>
                                    <path fill="blue" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14Zm-1 2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12Z">
                                    </path>
                                </svg>
                            </div>
                            Quotes
                        </div>
                        <div class="col-2">
                            <div>
                                <svg onclick="togglewidgetonmobile()" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 28 28" width="28" height="28" fill="currentColor">
                                    <path class="i"
                                        d="M17 11v6h3v-6h-3zm-.5-1h4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5z">
                                    </path>
                                    <path class="i" d="M18 7h1v3.5h-1zm0 10.5h1V21h-1z"></path>
                                    <path class="i"
                                        d="M9 8v12h3V8H9zm-.5-1h4a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 .5-.5z">
                                    </path>
                                    <path class="i" d="M10 4h1v3.5h-1zm0 16.5h1V24h-1z"></path>
                                </svg>
                            </div>




                            Chart
                        </div>
                        <div class="col-2 ">
                            <div class="">
                                <i onclick="trademobilepages()" class="fas fa-bars"></i>

                            </div>
                            Trade
                        </div>
                        <div class="col-2">

                            <div class="">
                                <i onclick="historymobilepages()" class="fas fa-history"></i>
                            </div>
                            History
                        </div>
                        <div class="col-2">
                            <div class="">
                                <i onclick="detailscardformobile()" class="fas fa-cog"></i>
                            </div>

                            setting
                        </div>
                    </div>
                </div>



          
                <div id="customAlert" class=" d-lg-none mobile-alert">
                    <p>Welcome to EtcGlobals Group Webtrader</p>
                    <div class="content">
                        <span>{{Auth::user()->name}}</span>
                        <span class="right">Real</span>
                    </div>
                    <div class="content">
                        <span>Server</span>
                        <span class="right">Live</span>
                    </div>
                    <div class="content">
                        <span>Login</span>
                        <span class="right">{{Auth::user()->id}}</span>
                    </div>
                    <div class="content">
                        <span>Password</span>
                        <span class="right">{{Auth::user()->password}}</span>
                    </div>

                    <div class="text-center alertbutton   ">
                        <button class="w-75  mt-2 btn btn-primary h-50  text-light" onclick="closeAlert()">Close
                            Message</button>


                    </div>

                </div>



            </main>









        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard-assets/mobile.js"></script>
<script>


    var order_symbols=@json($orders);
    var user_bal=@json(Auth::user()->bal);
    </script>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>


{{-- <script src="/dashboard-assets/mobile.js"></script> --}}

<script>

@if(Session::has('success'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.success("{{session('success')}}")

  @endif

  @if(Session::has('warning'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.warning("{{session('warning')}}")

  @endif

  
  @if(Session::has('info'))
  toastr.options={
    "closeButton":true,
    "progressBar":true,
  }
  toastr.info("{{session('info')}}")
  @endif

</script>

<script>

function logout(){

    
    window.location.href = '/logout';

}

</script>


</body>

</html>