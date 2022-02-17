<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hi! Chakitan Vyas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="{{asset('front_assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
       
    @yield('container')
      
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                </ul>
                
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted small mb-0" style="margin-top: 10rem;">CopyRight &copy; 2021-&infin;</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('front_assets/assets/img/loveindia.svg')}}" style="width:10rem;height:10rem;margin-top: 3rem;" />
                    </div>
                </div>
                
            </div>
        </footer>
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('front_assets/js/scripts.js')}}"></script>
    </body>
</html>
