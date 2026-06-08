<!DOCTYPE html>
<html>
<head>

    <title>Laporan Keluhan Masyarakat</title>

    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-5">

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    @yield('content')

</div>

</body>
</html>