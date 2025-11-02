<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Balance Form </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin-assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <x-admin-side></x-admin-side>

        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <x-admin-nav></x-admin-nav>

            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Change Order Details </h6>
                            <form action="{{route('update_price')}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Symbol</label>
                                    <input type="text" name="symbols" class="form-control" value="{{$symbols}}" id="exampleInputEmail1">
                                  
                                   
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Open</label>
                                    <input type="number" step="any" name="open_price" value="{{$open_price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                   
                                </div>



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Volume</label>
                                    <input type="text" name="volume" class="form-control" value="{{$volume}}">

                                    <input type="hidden" name="id" value="{{$id}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>



                         
                                <button type="submit" class="btn btn-primary">Change </button>
                            </form>
                        </div>
                    </div>
                  
                  
                </div>
            </div>
            <!-- Form End -->

            <!-- Table End -->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
                        <!-- Footer Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-secondary rounded-top p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center text-sm-start">
                                        &copy; <a href="{{url('/')}}">etcglobals</a>, All Right Reserved. 
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-assets/lib/chart/chart.min.js"></script>
    <script src="/admin-assets/lib/easing/easing.min.js"></script>
    <script src="/admin-assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/admin-assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/admin-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/admin-assets/js/main.js"></script>
</body>

</html>