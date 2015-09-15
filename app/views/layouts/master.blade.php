<!-- Stored in app/views/master.blade.php -->
<!doctype html>
{{--<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->--}}
{{--<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->--}}
{{--<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->--}}
{{--<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->--}}
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link id="bootstrap-style" href="/assets/styles/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/styles/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/assets/styles/main.min.css" rel="stylesheet">

</head>
<body>


<div class="container">
    @yield('content')
</div>


<script src="/assets/scripts/main-plugins.js"></script>
</body>
</html>