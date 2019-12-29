<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Mini-Weibo App</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">编辑资料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                    <li class="nav-item" ><a class="nav-link" href="{{ route('login.create') }}">登录</a></li>
                @endif
            </ul>
        </div>
{{--        <ul class="navbar-nav justify-content-end">--}}

{{--            --}}
{{--        </ul>--}}
    </div>
</nav>
