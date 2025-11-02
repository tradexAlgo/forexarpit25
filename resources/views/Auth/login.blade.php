<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forex Infotech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">






    <style>
        .responsive-card {
            width: 100%;

            background-color: white;

            max-width: 420px;
            min-height: 450px;
        }

        input {
            height: 34px;
            border: 1px solid black;
        }

        .toright {
            margin-top: -10px;
        }

        .padding {
            padding: 10px;
            background-color: blueviolet !important;
        }

        body {
            background-color: azure;
        }

        @media (max-width: 767px) {
            .toright {
                text-align: center;
            }

        }

        @media (max-width: 300px) {
            .padding {
                font-size: 13px !important;
            }

        }

        @media (max-width: 400px) {
            .connect {
                width: 100% !important;
            }

        }

        .container2 {
            display: none;
        }

  .first{
    cursor: pointer;
  }

  .first:hover{
    background-color: azure;
  }

  .second{
    cursor: pointer;
  }

  .second:hover{
    background-color: azure;
  }
img{
    /* border: 2px solid black !important;
    height: 100px ;
    width: 100px; */
}


    </style>



</head>




<body>

    <div class="d-flex justify-content-center mt-3">
        <img class="img-fluid" src="/logo.png" width="140px" alt="Logo">
    </div>


    <div id="container1" class="container container1  mt-5">

        <div class="d-flex  justify-content-center align-items-center">

            <div class="card1  responsive-card">
                <div class="title  padding text-light">Trading accounts: Forex Infotech</div>

                <div class="d-flex  justify-content-between">

                    <div class="first text-center">
                        <div class="logo"><i style="color: lightslategray;" class="fas fa-link"></i>
                        </div>
                        <p class="px-4">connect to account</p>
                    </div>
                    <div onclick="toggle()" class="second text-center">
                        <div class="logo"><i style="color: green;" class="fas fa-user"></i>
                        </div>
                        <p class="px-4" >Open Real account</p>
                    </div>
                </div>

                <h4 class="p-3">Connect to Account</h4>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                <div class="d-flex flex-column flex-md-row justify-content-between mx-1 p-3">
                    <label class="fw-bolder" for="">Login</label>
                    <input class="bg-light"type="text" name="id" type="text">
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mx-1 p-3">
                    <label class="fw-bolder">Password</label>
                    <input class="bg-light" name="password" type="password">
                </div>
                <p style="font-size: 14px;" class="mx-2 toright  text-end">Forgot Password? <a href="#"
                        class="text-decoration-none">Contact Broker</a></p>

                <div class="p-3 mx-1 d-flex flex-column flex-md-row justify-content-between">
                    <label class="fw-bolder" for="">Server</label>
                    <div class="dropdown">
                        <button style="border: 1px solid black;" class="rounded-1 btn w-100  btn-light dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Forex Infotech
                        </button>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                    </div>
                </div>

                <div class="text-end  mx-3">
                    <button type="submit" style="background-color:green; color: white;" class=" w-50 connect rounded-1 btn mx-1">
                        Connect to account
                    </button>
                </div>
                                                </form>


                <div class="text-center text-primary mt-4 "><a href="" class="text-decoration-none ">Create Account</a>
                </div>
            </div>
        </div>

    </div>

    <div id="container2" class="container container2  mt-5">

        <div class="d-flex  justify-content-center align-items-center">

            <div class="card1  responsive-card">
                <div class="title  padding text-light">Trading accounts: Forex Infotech</div>

                <div class="d-flex justify-content-between">

                    <div onclick="toggle()" class="first text-center">
                        <div class="logo"><i style="color: lightslategray;" class="fas fa-link"></i>
                        </div>
                        <p class="px-4" >connect to account</p>
                    </div>
                    <div class="second text-center">
                        <div class="logo"><i style="color: green;" class="fas fa-user"></i>
                        </div>
                        <p class="px-4">Open Real account</p>
                    </div>
                </div>
                <h4 class="p-3">Open Account</h4>
                <form action="{{ route('register.post') }}" method="POST"> 
                    @csrf
                <div class="d-flex flex-column flex-md-row justify-content-between mx-1 p-3">
                    <label class="fw-bolder" for="">Name</label>
                    <input class="bg-light" type="text" name="name">
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mx-1 p-3">
                    <label class="fw-bolder" for="">Email</label>
                    <input class="bg-light" type="email" name="email">
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mx-1 p-3">
                    <label class="fw-bolder">Password</label>
                    <input class="bg-light" ype="password" name="password">
                </div>
                
           


                <div class="p-3 mx-1 d-flex flex-column flex-md-row justify-content-between">
                    <label class="fw-bolder" for="">Server</label>
                    <div class="dropdown">
                        <button style="border: 1px solid black;" class="rounded-1 btn w-100  btn-light dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Forex Infotech
                        </button>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                    </div>
                </div>

                <div class="text-end  mx-3">
                    <button   type="submit" style="background-color:green; color: white;" class=" w-50 connect rounded-1 btn mx-1">
                        Open account
                    </button>
                </div>
            </form>


            </div>
        </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


    <script>

function toggle() {
    const con1 = document.getElementById('container1');
    const con2 = document.getElementById('container2');
    const first=document.getElementsByClassName('.first');


    if (con1.style.display === 'none') {
    
        con1.style.display = 'block';
        con2.style.display = 'none';
    } else {
        con1.style.display = 'none';
        con2.style.display = 'block';
    }
}


    </script>
</body>

</html>