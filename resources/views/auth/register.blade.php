@extends('layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đăng ký</li>
            </ul>
        </div>
    </div>
</div>
<div class="page-section mb-60">
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
            <form action="" method="POST">
                @csrf
                <div class="login-form">
                    <h4 class="login-title">Đăng ký</h4>
                    <div class="row">
                        <div class="col-md-12 mb-20">
                            <label>Họ tên</label>
                            <input class="mb-0" type="text" name="name" placeholder="Họ tên">
                            @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Email</label>
                            <input class="mb-0" type="email" name="email" placeholder="Email">
                            @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Mật khẩu</label>
                            <input class="mb-0" type="passwords" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Số điện thoại</label>
                            <input class="mb-0" type="number" name="phone" placeholder="Phone">
                            @if ($errors->has('phone'))
                            <div class="error">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-12">
                            <button type="submit" name="register" class="register-button mt-0">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
