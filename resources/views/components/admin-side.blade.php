<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="#" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Forex Infotech</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin-assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Forex Infotech</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Orders</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/Live-orders" class="dropdown-item">Live</a>
                    <a href="/Close-orders" class="dropdown-item">Closed</a>
                </div>
            </div>
            <a href="/Users" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Users</a>
            <a href="/Admin-Withdraw" class="nav-item nav-link"><i class="fa fa-dollar-sign me-2"></i>Withdraw</a>
            <a href="/admin-deposit" class="nav-item nav-link"><i class="fa fa-dollar-sign me-2"></i>Deposit Proof</a>
        
        </div>
    </nav>
</div>




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