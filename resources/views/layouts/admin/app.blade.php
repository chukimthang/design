<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin page</title>

    {{ Html::style('css/app.css') }}
    {{ Html::style('admin/css/admin.css') }}
    {{ Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ Html::style('bower_components/font-awesome/css/font-awesome.min.css') }}

    {{ Html::script('js/app.js') }}
    {{ Html::script('admin/js/admin.js') }}
    {{ Html::script('bower_components/jquery/dist/jquery.min.js') }}
    {{ Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
</head>
<body>
    <div id="wrapper">
        @include('layouts.admin.header')
        @include('layouts.admin.menu')
        @yield('content')
    </div>
</body>
