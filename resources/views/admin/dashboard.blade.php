<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="stylesheet" href="{{asset('dash-assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash-assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash-assets/css/Article-List.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{asset('dash-assets/css/styles.css')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    {{-- Datatables --}}


</head>

<body>
   @include('admin.home-top')
   <div class="row" id="row">
    <div class="col offset-xxl-0 text-start" id="left-nav">
   @include('admin.home-left')
</div> 
<div class="col" id="main-container">
    @yield('content')
    @include('admin.productAjax')
</div>
</div>
        
      <script src="{{asset('dash-assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dash-assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{asset('dash-assets/js/maincontnav.js')}}"></script>
    <script>
        // JavaScript to handle the collapse functionality
        document.addEventListener('DOMContentLoaded', function() {
            const collapseButtons = document.querySelectorAll('[data-toggle="collapse"]');
            
            collapseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetElement = document.querySelector(targetId);
                    const iconElement = this.querySelector('i.fa');
                    if (targetElement.style.display === 'none' || targetElement.style.display === '') {
                        targetElement.style.display = 'block';
                        iconElement.classList.remove('fa-chevron-down');
                        iconElement.classList.add('fa-chevron-up');
                    } else {
                        targetElement.style.display = 'none';
                        iconElement.classList.remove('fa-chevron-up');
                        iconElement.classList.add('fa-chevron-down');
                    }
                });
            });
        });
    </script>
</body>

</html>