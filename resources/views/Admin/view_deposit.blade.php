<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Deposit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/admin-assets/img/favicon.ico" rel="icon">

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


        <x-admin-side></x-admin-side>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
               <!-- Navbar Start -->
        <x-admin-nav></x-admin-nav>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  @forelse ($doc as $doc)

                    <div class="col-sm-12 col-xl-6">

                        <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Payment Proof </h6>
                        <div class="card bg-transparent" >
                            <img class="card-img-top" src="{{asset('images')}}/{{$doc->image}}" alt="Card image cap">
                          

                            <div class="card-body">
                            
                            </div>
                        

                          </div>
                       
                        </div>
                    </div>
                   
                    @empty
                    <div class="col-md-6 col-xl-4">
                      <div class="card mb-3">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.
                          </p>
                          <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    @endforelse
                 
                 
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Forex Infotech</a>, All Right Reserved. 
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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