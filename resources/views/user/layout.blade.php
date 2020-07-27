<ul class="nav flex-column">
    <li class="nav-item">
        <span data-feather="layers"></span>
        {{ get_data_user('web', 'name') }}
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('user.dashboard') }}">
        <span data-feather="home"></span>
        Trang tổng quan <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.update.info') }}">
        <span data-feather="layers"></span>
        Cập nhập thông tin
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.update.password') }}">
        <span data-feather="layers"></span>
        Cập nhập mật khẩu
        </a>
    </li>
</ul>