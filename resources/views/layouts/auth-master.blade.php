<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Sign In HRM System</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('asset/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('asset/css/signin.css') !!}" rel="stylesheet">
       
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center" style=" position: fixed;  top: 0;  left: 0;  min-width: 100%; min-height: 100%; background-image: url(../images/bg.png);">
    
    <main class="form-signin">

        @yield('content')
        
    </main>
    

</body>
</html>