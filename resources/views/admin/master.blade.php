<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('admin/style/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        BASE_URL = "<?php echo url(''); ?>";
    </script>
    
    {{-- <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <style>
        table{
            border:1px solid black;
            width: 1100px;
            text-align: center;
        }
        th{
            border:1px solid black;
            padding: 10px 10px;
        }
        td{
            border:1px solid black;
            padding: 10px 10px;
        }
        .slug {
            text-decoration: none; 
            color: black;
        }
        .slug:hover {
            color: rgb(214, 150, 11);
            font-size: 110%;
        }

        .book_content {
            width: 100%;
            border: 1px solid #333;
            padding: 10px;
        }
        #content_1 {
            width: 50%;
            height: 300px;
            text-align: center;
            float: left;
            margin-top: 80px;
        }
        #content_2 {
            width: 50%;
            height: 300px;
            text-align: center;
            float: right;
        }
        #content_1 .img{
            width: 40%;
            float: left;
        }
        #content_1 .description{
            width: 60%;
            float: right;
            
        }
        #content_1 .description button{
            padding: 10px 10px;
            background-color: rgb(156, 158, 158)
        }
        /* #content_1 .description button:hover{
            background-color: rgb(8, 208, 243);
            color: rgb(131, 90, 1);
        } */

        .td_warning{
            background-color: red;
            pointer-events: none;
        }
    </style>

    @yield('head')

    <title>Document</title>
</head>
<body class="dark">
    <div class="container">
        <div class="sidebar-1">
            <div class="header">
                <a href="#" class="name">
                    <img src="{{asset('admin/image/977438.jpg')}}" alt="" class="avatar">
                    <h3 class="title">
                        <span>Không phải Weeaboo</span>
                    </h3>
                </a>
            </div>

            <hr class="solid">

            <div class="sidebar-menu">
                <div class="sidebar-menu-1">
                    <ul>
                        <li>
                            <a href="#">
                                <i class='bx bx-customize'></i>
                                <span>Dashboard</span>
                                <!-- <span class="none"></span> -->
                            </a>
                        </li>
                
                        <hr class="solid">

                        <li>
                            <a href="#">
                                <i class='bx bx-category' ></i>
                                <span>Product</span>
                                <i class='bx bxs-chevron-down arrow'></i>
                            </a>
                            <div class="chil-item">
                                <a href="{{route('product.index')}}" class="chil-item-menu">Home Product</a>
                                <a href="{{route('product.create')}}" class="chil-item-menu">Create</a>
                                <a href="#" class="chil-item-menu">...</a>
                            </div>
                        </li>
                        {{-- <li>
                            <a href="#">
                                <i class='bx bx-news' ></i>
                                <span>News</span>
                                <i class='bx bxs-chevron-down arrow'></i>
                            </a>
                            <div class="chil-item">
                                <a href="#" class="chil-item-menu">News Page</a>
                                <a href="#" class="chil-item-menu">Add news</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-book-content' ></i>
                                <span>Page Content</span>
                                <i class='bx bxs-chevron-down arrow'></i>
                            </a>
                            <div class="chil-item">
                                <a href="#" class="chil-item-menu">Page Content</a>
                                <a href="#" class="chil-item-menu">Add news</a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            
                <hr class="solid">

                <div class="sidebar-menu-2">
                    <ul>
                        <li>
                            <a href="#">
                                <i class='bx bx-plug'></i>
                                <span>Plugins</span>
                                <!-- <span class="none"></span> -->
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-game' ></i>
                                <span>Page Action</span>
                                <!-- <span class="none"></span> -->
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-cog' ></i>
                                <span>Settings</span>
                                <!-- <span class="none"></span> -->
                            </a>
                        </li>
            
                        <hr class="solid">

                        <li class="mode">
                            <div class="moon-sun">
                                <div class="icon">
                                    <i class='bx bx-moon icon moon' ></i>
                                    <i class='bx bx-sun icon sun' ></i>
                                </div>

                                <span class="mode-text text">Dark mode</span>

                                <div class="toggle-switch">
                                    <span class="switch"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="solid">

            <div class="footer">
                <a href="#">
                    <span>Logout</span>
                    <i class='bx bx-log-out' ></i>
                </a>
            </div>
        </div>
        
        <div class="sidebar-2">
            <div class="header">
                <nav class="main-header">
                    <ul class="nav-bar">
                        <li class="nav-item">
                            <a href="#" class="item">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="item">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="item">Social</a>
                        </li>
                    </ul>

                    <ul class="nav-bar right">
                        <li class="nav-item">
                            <a href="#" class="item">
                                <i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="item">
                                <i class='bx bx-message-square-dots' ></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="page">
                <div class="content-header">
                    <div class="title">
                        <span>Dashboard</span>
                    </div>

                    <div class="breadcrumb-header">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="item" id="test">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#" class="item" id="test">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#" class="item" id="test">Dashboard-2</a>
                            </li>
                        </ol> --}}
                    </div>
                </div>
                
                <div class="main-content">
                    @yield('content')
                </div>

            </div>

            <div class="footer">
                <span>footer</span>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/style/js/scrip.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    @yield('js')
</body>
</html>