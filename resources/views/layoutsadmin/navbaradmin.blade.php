<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Lion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <style>
        .logo img {
            max-width: 100px; /* Đặt kích thước tối đa cho logo là 100px */
            height: auto; /* Đảm bảo chiều cao tự động điều chỉnh tương ứng với kích thước */
        }
    </style>
</head>
<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <div class="wrapper">
        <nav id="sidebar">
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="http://127.0.0.1:8000/admin">Admin Management</a>
                </li>
                <li>
                    <a href="http://127.0.0.1:8000/product">Book Management</a>
                </li>
                <li>
                    <a href="http://127.0.0.1:8000/contactadmin">Contact Management</a>
                </li>
                <!-- <li>
                    <a href="http://127.0.0.1:8000/contact">Contact</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li> -->
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </ul>
        </nav>
        <div id="content">
            <header>
                <div class="head_top">
                    <div class="header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="admin"><img src="images/logosach.jpg" alt="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <li class="menu_iconb">
                                                <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" />123456789</a>
                                            </li>
                                            
                                            <li class="menu_iconb">
                                                <a href="http://127.0.0.1:8000/register">Signup<img style="margin-left: 15px;" src="icon/6.png" alt="#" /></a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="http://127.0.0.1:8000/login">Log in <img style="margin-right: 15px;" src="icon/5.png" alt="#" /> </a>
                                            </li>
                                           
                                            <li class="menu_iconb">
                                                <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
                                            </li>
                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    <img src="images/menu_icon.png" alt="#" />
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="overlay"></div>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery-3.0.0.min.js"></script>
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/custom.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#sidebar").mCustomScrollbar({
                        theme: "minimal"
                    });

                    $('#dismiss, .overlay').on('click', function() {
                        $('#sidebar').removeClass('active');
                        $('.overlay').removeClass('active');
                    });

                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').addClass('active');
                        $('.overlay').addClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
            </script>
        </div>
    </div>
</body>
</html>
