<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>App Name - @yield('title')</title>
	<link rel="stylesheet" href="">
</head>
<body>
	@section('sidebar')
        This is the master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>