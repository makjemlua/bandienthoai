<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Admin System</title>
        <script src="https://kit.fontawesome.com/4c8856cbf6.js"></script>
        <link rel="stylesheet" href="{{asset('theme_admin/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }
            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="{{asset('theme_admin/css/dashboard.css')}}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('admin.home') }}">Xin chào {{ get_data_user('admins', 'name') }}</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Tìm kiếm" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('get.logout.admin') }}">Đăng xuất</a>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }}">
                                <a class="nav-link active" href="{{ route('admin.home') }}">
                                <span data-feather="home"></span>
                                Trang tổng quan <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.category') }}">
                                <span data-feather="layers"></span>
                                Danh mục
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.product') }}">
                                <span data-feather="shopping-cart"></span>
                                Sản phẩm
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.rating' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.rating') }}">
                                <span data-feather="shopping-cart"></span>
                                Đánh giá
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.article' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.article') }}">
                                <span data-feather="file"></span>
                                Tin tức
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.transaction') }}">
                                <span data-feather="bar-chart-2"></span>
                                Đơn hàng
                                </a>
                            </li>
                            <li class="nav-item" class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.get.list.user') }}">
                                <span data-feather="users"></span>
                                Thành viên
                                </a>
                            </li>
                            <li class="nav-item" class="">
                                <a class="nav-link" href="{{ route('admin.get.list.contact') }}">
                                <span data-feather="users"></span>
                                Liên hệ
                                </a>
                            </li>
                            <li class="nav-item" class="">
                                <a class="nav-link" href="{{ route('admin.get.list.page_static') }}">
                                <span data-feather="users"></span>
                                Page Static
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    </div> -->
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thành công!</strong> {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Thất bại!</strong> {{ Session::get('danger') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
                </main>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{{asset('theme_admin/js/feather.min.js')}}"></script>
        <script>
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                  $('#out_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
              }
            }

            $("#input_img").change(function() {
              readURL(this);
            });
        </script>
        @yield('script')
    </body>
</html>