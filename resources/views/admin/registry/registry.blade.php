<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registry Tractor</title>
     
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <link rel="stylesheet" href="{{asset('dash-assets/css/bootstrap.min.css')}}" >

    <script src="{{asset('dash-assets/js/jquery.js')}}"></script>

    <script src="{{asset('dash-assets/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('dash-assets/css/jquery.css')}}">

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
    <link rel="icon" type="image/png" sizes="1024x1024" href="{{asset('dash-assets/img/DA_Logo.png')}}">
</head>
<body>
  @include('admin.home-top')
  <div class="row" id="row">
   <div class="col offset-xxl-0 text-start" id="left-nav">
  @include('admin.home-left')
   </div>
<div class="col" id="main-container">
<div class="container mt-2">
 
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>registry Tractor</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-warning" onClick="add()" href="javascript:void(0)">Add</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 {{-- show modal --}}
    <div class="card-body">
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Record Details</h5>
                    </div>
                    <div class="modal-body">
                        <!-- Placeholders for displaying record details -->
                        <p><strong>Name of Applicant:</strong> <span id="view-applicant"></span></p>
                        <p><strong>Applicant Address:</strong> <span id="view-address"></span></p>
                        <p><strong>Farm Location:</strong> <span id="view-location"></span></p>
                        <p><strong>Project Description:</strong> <span id="view-project_description"></span></p>
                        <p><strong>Contact Number:</strong> <span id="view-contact"></span></p>
                        <p><strong>Inspector:</strong> <span id="view-inspector"></span></p>
                        <p><strong>Fuel Requirement:</strong> <span id="view-fuel_requirement"></span></p>
                        <p><strong>Estimated Hours of Operation:</strong> <span id="view-hours_of_operation"></span></p>
                        <p><strong>Equipment:</strong> <span id="view-equipment"></span></p>
                        <p><strong>Land Area Requested for Operation:</strong> <span id="view-area"></span></p>
                        <p><strong>registry Rate (ha):</strong> <span id="view-registry_rate"></span></p>
                        <p><strong>Total Amount of registry:</strong> <span id="view-total_registry_amount"></span></p>
                        <p><strong>Payment:</strong> <span id="view-payment"></span></p>
                        <p><strong>O.r. #:</strong> <span id="view-or_number"></span></p>
                        <p><strong>Date:</strong> <span id="view-payment_date"></span></p>
                        <p><strong>Amount:</strong> <span id="view-payment_amount"></span></p>
                        <p><strong>Municipal Treasurer:</strong> <span id="view-municipal_treasurer"></span></p>
                        <p><strong>Source of Fund:</strong> <span id="view-source_of_fund"></span></p>
                        <p><strong>Funds Available:</strong> <span id="view-funds_available"></span></p>
                        <p><strong>Municipal Accountant:</strong> <span id="view-municipal_accountant"></span></p>
                        <p><strong>Municipal Budget Officer:</strong> <span id="view-municipal_budget_officer"></span></p>
                        <p><strong>Municipal Mayor:</strong> <span id="view-municipal_mayor"></span></p>
                        <p><strong>Schedule of Operation:</strong> <span id="view-schedule_of_operation"></span></p>
                        <p><strong>Plate Number of Tractor:</strong> <span id="view-plate_number_tractor"></span></p>
                        <p><strong>MAO-TRACTOR INCHARGE:</strong> <span id="view-mao_tractor_incharge"></span></p>
                        <p><strong>Actual Land Area Served:</strong> <span id="view-actual_land_area_served"></span></p>
                        <p><strong>Actual Hours of Operation:</strong> <span id="view-actual_hours_of_operation"></span></p>
                        <p><strong>Remarks:</strong> <span id="view-remarks"></span></p>
                        <p><strong>MO Field Inspector:</strong> <span id="view-mo_field_inspector"></span></p>
                        <!-- Add more fields as needed -->
                    </div>
                </div>
            </div>
        </div>
        {{-- end of show modal --}}

        <table class="table table-bordered display responsive nowrap" id="registry-crud-datatable">
           <thead>
              <tr>
                
                <th>RSBSA ID</th>
                <th>Date Enrolled</th>
                <th>Income Source</th>
                <th>Address</th>
                <th>Purok</th>
                <th>Barangay</th>
                <th width="150px">Action</th>
              </tr>
           </thead>
           
        </table>
 
    </div>
</div>
</div>
</div>
  <!-- boostrap registry model -->
    @include('admin.registry.registry-modal')
  <!-- end bootstrap model -->
    @include('admin/registry/registry-view')
  </body>
  <script src="{{asset('dash-assets/js/registry/Modal.js')}}"></script>
  <script src="{{asset('dash-assets/js/registry/CheckBoxHandler.js')}}"></script>
  <script src="{{asset('dash-assets/js/registry/HouseholdMemberHandler.js')}}"></script>
  <script src="{{asset('dash-assets/js/registry/MemAf.js')}}"></script>
  @include('admin.registry.registry-ajax')
  
  </html>