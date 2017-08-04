<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>轻松学会laravel @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('static/bootstrap.css') }}">
        @section('style')

        @show
    </head>
    <body>

        <!-- 头部 -->
        @section('header')
            <div class="jumbotron">
                <div class="container">
                    <h2>轻松学会laravel</h2>
                    <p>-玩转laravel表单</p>
                </div>
            </div>
        @show


    <!-- 中间内容区 -->
    <div class="container">
        <div class="row">

            <!-- 左侧菜单区域 -->
            <div class="col-md-3">
                @section('leftmenu')
                    <div class="list-group">
                        <a href="{{url('student/index')}}" class="list-group-item
                         {{ Request::getPathInfo() != '/student/create' ? 'active' : ''}}
                        ">学生列表</a>
                        <a href="{{url('student/create')}}" class="list-group-item
                        {{ Request::getPathInfo() == '/student/create' ? 'active' : ''}}
                        ">新增学生</a>
                    </div>
                @show
            </div>

            <!-- 右侧内容区域 -->
            <div class="col-md-9">

                @yield('content')

            </div>

        </div>

    </div>


    {{-- 尾部 --}}
        @section('footer')
            <div class="jumbotron" style="margin: 0px;">
                <div class="container">
                    <span> @2017 immooc</span>
                </div>
            </div>
        @show



    </body>

    {{-- jquery--}}
    <script src="{{ asset('static/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('static/bootstrap.min.js') }}"></script>

    @section('javascript')
    @show


</html>