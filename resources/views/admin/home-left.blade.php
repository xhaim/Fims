<div class="row" id="row">
    <div class="col offset-xxl-0 text-start" id="left-nav">
        <h6 id="admin-label" class="admin-label">Administrative</h6>
        <ul class="list-unstyled" data-aos="slide-right" id="left-nav-list">
            <li id="list-item">
                <div class="d-xl-flex align-items-xl-center" id="div_left"><i class="fa fa-dashboard" id="icon"></i><a>Dashboard</a></div>
            </li>
            {{-- Files Nav --}}
            <li class="list-item">
                <div id="div_left">
                    <i class="fa fa-file-o" id="icon"></i>
                    <a id="link" href="#" class="collapse-button" data-toggle="collapse" data-target="#fileContent">
                        Files <i class="fa fa-chevron-down collapse-icon"></i>
                    </a>
                </div>
            </li>
            <div id="fileContent" class="collapse">
            <ul>
                <li><a href="{{route('association')}}" style="text-decoration: none"> Association</a></li>
                <li>Farmer's Assistance</li>
                <li>Masterlist</li>
                <li>Rental Tractor</li>
            </ul>
            </div>
            <li class="list-item">
                <div id="div_left">
                    <i class="fa fa-stack-overflow" id="icon"></i>
                    <a id="link" href="#" class="collapse-button" data-toggle="collapse" data-target="#manageContent">
                        Manage <i class="fa fa-chevron-down collapse-icon-manage"></i>
                    </a>
                </div>
            </li>
            <div id="manageContent" class="collapse">
                <ul>
                    <li> Corn</li>
                    <li>HVCDP</li>
                    <li>Fishery</li>
                    <li>Livestock</li></li>
                </ul>
            </div>
            <li class="list-item" style="margin-bottom: 10px;">
                <div id="div_left" style="font-size: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" id="icon">
                        <path d="M8.55024 10.5503C8.55024 11.1026 8.10253 11.5503 7.55024 11.5503C6.99796 11.5503 6.55024 11.1026 6.55024 10.5503C6.55024 9.99801 6.99796 9.55029 7.55024 9.55029C8.10253 9.55029 8.55024 9.99801 8.55024 10.5503Z" fill="currentColor"></path>
                        <path d="M10.5502 11.5503C11.1025 11.5503 11.5502 11.1026 11.5502 10.5503C11.5502 9.99801 11.1025 9.55029 10.5502 9.55029C9.99796 9.55029 9.55024 9.99801 9.55024 10.5503C9.55024 11.1026 9.99796 11.5503 10.5502 11.5503Z" fill="currentColor"></path>
                        <path d="M13.5502 11.5503C14.1025 11.5503 14.5502 11.1026 14.5502 10.5503C14.5502 9.99801 14.1025 9.55029 13.5502 9.55029C12.998 9.55029 12.5502 9.99801 12.5502 10.5503C12.5502 11.1026 12.998 11.5503 13.5502 11.5503Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2071 4.89344C19.0922 7.7786 19.313 12.3192 16.8693 15.4577C16.8846 15.4712 16.8996 15.4853 16.9142 15.4999L21.1568 19.7426C21.5473 20.1331 21.5473 20.7663 21.1568 21.1568C20.7663 21.5473 20.1331 21.5473 19.7426 21.1568L15.5 16.9141C15.4853 16.8995 15.4713 16.8846 15.4578 16.8693C12.3193 19.3131 7.77858 19.0923 4.89338 16.2071C1.76918 13.083 1.76918 8.01763 4.89338 4.89344C8.01757 1.76924 13.0829 1.76924 16.2071 4.89344ZM6.30759 14.7929C8.65074 17.1361 12.4497 17.1361 14.7929 14.7929C17.136 12.4498 17.136 8.6508 14.7929 6.30765C12.4497 3.96451 8.65074 3.96451 6.30759 6.30765C3.96445 8.6508 3.96445 12.4498 6.30759 14.7929Z" fill="currentColor"></path>
                    </svg><a id="link" href="#" cclass="collapse-button" data-toggle="collapse" data-target="#monitorContent">Monitor <i class="fa fa-chevron-down collapse-icon-manage"></i></a></div>
            </li>
            <div id="monitorContent" class="collapse">
                <ul>
                    <li>Rice Seeds</li>
                    <li> Corn Seeds</li>
                    <li>HVCDP</li>
                    <li>Vegetable Seeds</li>
                </ul>
            </div>
        </ul>
    </div>