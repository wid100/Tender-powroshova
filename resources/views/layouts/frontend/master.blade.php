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
   
<div id="layout-wrapper">
    @include('layouts.frontend.header')
    <div class="dashboard-wrapper d-flex">

        @include('layouts.frontend.sidebar')
        <div class="main-content">
            @yield('content')
                @include('layouts.frontend.footer')
        </div>
    </div>
     
</div>
 @include('layouts.frontend.js')
</body>

</html>
