<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>e-Tender Portal</title>
    @include('layouts.frontend.style')
</head>


<body>
   @include('layouts.user.header')
       @yield('content')
   @include('layouts.frontend.footer')

 @include('layouts.frontend.js')
</body>

</html>
