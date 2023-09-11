
    <div class="row d-flex" id="top-nav">
        <div class="col text-center d-md-flex d-xxl-flex flex-row align-self-center justify-content-md-center align-items-md-center justify-content-xxl-center align-items-xxl-center" id="col-header">
            <h1 class="text-center d-xxl-flex justify-content-center align-items-center align-self-center align-items-xxl-center" id="fims-heading"><img id="logo" src="{{asset('dash-assets/img/DA_Logo.png')}} ">DoA<span id="header">MSoC</span></h1><i class="fa fa-align-justify" id="burger"></i>
        </div>
        <div class="col d-flex d-sm-flex d-md-flex d-xl-flex d-xxl-flex align-items-center align-items-sm-center align-items-md-center justify-content-xl-end align-items-xl-center justify-content-xxl-end align-items-xxl-center" id="col-head-2">
            <div class="d-xxl-flex justify-content-xxl-start align-items-xxl-end" id="div"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search d-xxl-flex align-items-xxl-center" id="search_i">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg><input class="form-control-lg search-input" type="search" placeholder="Search here..."></div>
            <div id="div2" class="profile">
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/home') }}">
                            <button class="btn btn-primary border-white shadow buttons button-top"
                                data-bss-hover-animate="pulse" type="button">Log in</button>
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown" style="list-style: none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: var(--bs-light);"
                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </div>
        </div>
    </div>
   
   