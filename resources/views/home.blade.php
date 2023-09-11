<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DASHBOARD dESIGN</title>
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
</head>

<body>
   @include('admin.home-top')
   @include('admin.home-left')
        <div class="col" id="main-container">
            <div id="dashboard_cont">
                <div class="container" id="main_cont">
                    <div class="row" id="main_row">
                        <div class="col-md-6 column">
                            <div id="column_div">
                                <div id="column_div1">
                                    <h1 class="text-center" id="text_h1">Total No. of Farmers</h1>
                                    <h1 class="text-center" id="farmers_number">0</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex-row" id="column_flex_row">
                                <div id="column_div1">
                                    <h1 class="text-center" id="texth1">Total No. of Associations</h1>
                                    <h1 class="text-center" id="associations_number">0</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex-row" id="column_flex_row">
                                <div id="column_div1">
                                    <h1 class="text-center" id="text_h1">Farmers with RSBSA</h1>
                                    <h1 class="text-center" id="generated_id_no">0</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex-row" id="column_flex_row">
                                <div id="column_div1">
                                    <h1 class="text-center" id="text_h1">Farmers with Generated I.D</h1>
                                    <h1 class="text-center" id="generated_id_no">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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