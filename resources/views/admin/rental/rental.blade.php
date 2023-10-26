<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rental Tractor</title>
     
    <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <link rel="stylesheet" href="{{asset('dash-assets/css/bootstrap.min.css')}}" >

    <script src="{{asset('dash-assets/js/jquery.js')}}"></script>

    <script src="{{asset('dash-assets/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('dash-assets/css/jquery.css')}}">

    <script src="{{asset('dash-assets/js/datatables.min.js')}}"></script>
    
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



  
{{--  --}}
<div class="container mt-2">
 
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rental Tractor</h2>
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
    <div class="card-body" >
        <div class="modal fade" id="viewModal"  tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="width: 1000px; left: -90px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Record Details</h5>
                        <button onClick="closeviewModal();" type="button" class="close" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <!-- Placeholders for displaying record details -->
                        @include('admin.rental.rental-printable')
                    </div>
                </div>
            </div>
        </div>
        {{-- end of show modal --}}

        <table class="table table-bordered display responsive nowrap" id="rental-crud-datatable">
           <thead>
              <tr>
                
                <th>Name of Applicant</th>
                <th>Applicant Address</th>
                <th>Farm Location</th>
                <th>Project Description</th>
                <th>Contact Number</th>
                <th>Actual Land Area of Farm</th>
                <th>Date Inspected</th>
                <th>Inspector</th>
                <th>Fuel Requirement</th>
                <th>Estimated Hours of Operation</th>
                <th>Equipment</th>
                <th>Land Area Requested for Operation</th>
                <th>Rental Rate (ha)</th>
                <th>Total Amount of Rental</th>
                <th>Payment</th>
                <th>O.r. #</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Municipal Treasurer</th>
                <th>Source of Fund</th>
                <th>Funds Available</th>
                <th>Municipal Accountant</th>
                <th>Municipal Budget Officer</th>
                <th>Municipal Mayor</th>
                <th>Schedule of Operation</th>
                <th>Plate Number of Tractor</th>
                <th>MAO-TRACTOR INCHARGE</th>
                <th>Actual Land Area Served</th>
                <th>Actual Hours of Operation</th>
                <th>Remarks</th>
                <th>MO Field Inspector</th>
                <th>Registered-in Date</th>
                <th width="150px">Action</th>
              </tr>
           </thead>
           
        </table>
 
    </div>
</div>
</div>
</div>
  <!-- boostrap Rental model -->
  <div class="modal fade" id="rental-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="width: 500px;left:190px">
        <div class="modal-header" >
          <h4 class="modal-title" id="RentalModal"></h4>
        </div>
        <div class="modal-body">
          <form action="javascript:void(0)" id="RentalForm" name="RentalForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            
            {{-- first part --}}
            <div id="first_part">

              <div class="form-group">
                <label for="applicant" class="col-sm-8 control-label">Name of Applicant</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="applicant" name="applicant" placeholder="Enter Name of Applicant" maxlength="20" required="">
                </div>
              </div>
              
              <div class="form-group">
                <label for="address" class="col-sm-8 control-label">Applicant Address</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Applicant Address" maxlength="100" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="location" class="col-sm-8 control-label">Farm Location</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="location" name="location" placeholder="Enter Farm Location" maxlength="100" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="project_description" class="col-sm-8 control-label">Project Description</label>
                <div class="col-sm-12">
                  <input type="text" step="0.01" class="form-control" id="project_description" name="project_description" placeholder="Enter Project Description" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Contact number</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact No." maxlength="2" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="actual_land_area_of_farm" class="col-sm-8 control-label">Actual Land Area of Farm</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="actual_land_area_of_farm" name="actual_land_area_of_farm" placeholder="Enter Actual Land Area of Farm " maxlength="100" required="">
                </div>
              </div>
              <div class="form-group">
                <label for="date_inspected" class="col-sm-8 control-label">Date Inspected</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="date_inspected" name="date_inspected" placeholder="Enter Date Inspected " maxlength="100" required="">
                </div>
              </div>
      
              <div class="form-group">
                <label for="inspector" class="col-sm-8 control-label">Inspector</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="inspector" name="inspector" placeholder="Enter Inspector Name" maxlength="20" required="">
                </div>
              </div>
              
              <div class="form-group">
                <label for="requirement" class="col-sm-8 control-label">Fuel Requirement</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="fuel_requirement" name="fuel_requirement" placeholder="Enter Fuel Requirement " maxlength="20" required="">
                </div>
              </div>

            </div>
            {{-- end of first modal part --}}

            {{-- second part of form --}}
          
          <div id="second_part" style="display: none">
              <div class="form-group">
                <label for="operation" class="col-sm-8 control-label">Estimated Hours of operation</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="hours_of_operation" name="hours_of_operation" placeholder="Enter Estimated Hours of operation " maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Program Activity:</label>
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="disc_plow" name="equipment[]" value="Disc plow"> Disc plow
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="first_harrow" name="equipment[]" value="1st harrow"> 1st harrow
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="second_harrow" name="equipment[]" value="2nd harrow"> 2nd harrow
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="rotavate" name="equipment[]" value="rotavate"> Rotavate
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="area" class="col-sm-8 control-label">Land Area Requested for Operation</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="area" name="area" placeholder="Enter Land Area Requested for Operation" maxlength="20" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="rental_rate" class="col-sm-8 control-label">Rental Rate (ha)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="rental_rate" name="rental_rate" placeholder="Enter Rental Rate/ha" maxlength="20" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="total_rental_amount" class="col-sm-8 control-label">Total Amount of Rental</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="total_rental_amount" name="total_rental_amount" placeholder="Enter Total Amount of Rental" maxlength="20" required>
                </div>
              </div>
          </div>
            {{-- end of second part modal --}}

            {{-- third part of form --}}
          
          <div id="third_part" style="display: none">
              <div class="form-group">
                <label for="payment" class="col-sm-8 control-label">Payment</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="payment" name="payment" placeholder="Enter Payment" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="or_number" class="col-sm-8 control-label">O.r. #</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="or_number" name="or_number" placeholder="Enter O.r. #" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="payment_date" class="col-sm-8 control-label">Date</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="payment_date" name="payment_date" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="payment_amount" class="col-sm-8 control-label">Amount</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="payment_amount" name="payment_amount" placeholder="Enter Amount" maxlength="20" required>
                </div>
              </div>
              <div class="form-group">
                <label for="municipal_treasurer" class="col-sm-8 control-label">Municipal Treasurer</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="municipal_treasurer" name="municipal_treasurer" placeholder="Enter Municipal Treasurer" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="source_of_fund" class="col-sm-8 control-label">Source of Fund</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="source_of_fund" name="source_of_fund" placeholder="Enter Source of Fund" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="funds_available" class="col-sm-8 control-label">Funds Available</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="funds_available" name="funds_available" placeholder="Enter Funds Available" maxlength="20" required>
                </div>
              </div>
          </div>
          {{-- end of third modal part --}}

          {{-- fourth part of form --}}
          
          <div id="fourth_part" style="display: none">

              <div class="form-group">
                <label for="municipal_accountant" class="col-sm-8 control-label">Municipal Accountant</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="municipal_accountant" name="municipal_accountant" placeholder="Enter Municipal Accountant" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="municipal_budget_officer" class="col-sm-8 control-label">Municipal Budget Officer</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="municipal_budget_officer" name="municipal_budget_officer" placeholder="Enter Municipal Budget Officer" maxlength="255" required>
                </div>
              </div>
              <div class="form-group">
                <label for="municipal_mayor" class="col-sm-8 control-label">Municipal Mayor</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="municipal_mayor" name="municipal_mayor" placeholder="Enter Municipal Mayor" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="schedule_of_operation" class="col-sm-8 control-label">Schedule of Operation</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="schedule_of_operation" name="schedule_of_operation" placeholder="Enter Schedule of Operation" maxlength="255" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="plate_number_tractor" class="col-sm-8 control-label">Plate Number of Tractor</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="plate_number_tractor" name="plate_number_tractor" placeholder="Enter Plate Number of Tractor" maxlength="20" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="mao_tractor_incharge" class="col-sm-8 control-label">MAO-TRACTOR INCHARGE</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="mao_tractor_incharge" name="mao_tractor_incharge" placeholder="Enter MAO-TRACTOR INCHARGE" maxlength="255" required>
                </div>
              </div>
              <div class="form-group">
                <label for="actual_land_area_served" class="col-sm-8 control-label">Actual Land Area Served</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="actual_land_area_served" name="actual_land_area_served" placeholder="Enter Actual Land Area Served" maxlength="20" required>
                </div>
              </div>
          </div>
          {{-- end of fourth modal part --}}
          {{-- last  part of form --}}
          
          <div id="last_part" style="display: none">

            <div class="form-group">
              <label for="actual_hours_of_operation" class="col-sm-8 control-label">Actual Hours of Operation</label>
              <div class="col-sm-12">
                <input type="number" class="form-control" id="actual_hours_of_operation" name="actual_hours_of_operation" placeholder="Enter Actual Hours of Operation" maxlength="20" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="remarks" class="col-sm-8 control-label">Remarks</label>
              <div class="col-sm-12">
                <textarea class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks" rows="3" maxlength="255" required></textarea>
              </div>
            </div>
            
            <div class="form-group">
              <label for="mo_field_inspector" class="col-sm-8 control-label">MO Field Inspector</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="mo_field_inspector" name="mo_field_inspector" placeholder="Enter MO Field Inspector" maxlength="255" required>
              </div>
            </div>
          </div>
          {{-- end of last modal part  --}}
            
            <div class="col-sm-offset-2 col-sm-10" style="margin-top: 20px;">
              <button class="btn btn-primary" id="btn-back" style="display: none">Back
              </button>
              <button class="btn btn-primary" id="btn-back1" style="display: none">Back
              </button>
              <button class="btn btn-primary" id="btn-back2" style="display: none">Back
              </button>
              <button class="btn btn-primary" id="btn-back3" style="display: none">Back
              </button>
              <button type="submit" class="btn btn-success" id="btn-save" style="display: none">Save
              </button>
              <button class="btn btn-primary" id="btn-next">Next
              </button>
              <button class="btn btn-primary" id="btn-next1" style="display: none">Next
              </button>
              <button class="btn btn-primary" id="btn-next2" style="display: none">Next
              </button>
              <button class="btn btn-primary" id="btn-next3" style="display: none">Next
              </button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
           
        </div>
      </div>
    </div>
  </div>
<!-- end bootstrap model -->
    @include('admin/rental/rental-view')
  </body>
  <script src="{{asset('dash-assets/js/rentalmodal.js')}}"></script>
  <script type="text/javascript">
        
    $(document).ready( function () {
    
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#rental-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('rental-crud-datatable') }}",
              columns: [
                        { data: 'applicant', name: 'applicant' },
                        { data: 'address', name: 'address' },
                        { data: 'location', name: 'location' },
                        { data: 'project_description', name: 'project_description' },
                        { data: 'contact', name: 'contact' },
                        { data: 'actual_land_area_of_farm', name: 'actual_land_area_of_farm', visible: false  },
                        { data: 'date_inspected', name: 'date_inspected' , visible: false },
                        { data: 'inspector', name: 'inspector', visible: false },
                        { data: 'fuel_requirement', name: 'fuel_requirement', visible: false },
                        { data: 'hours_of_operation', name: 'hours_of_operation', visible: false },
                        { data: 'equipment', name: 'equipment', visible: false },
                        { data: 'area', name: 'area', visible: false},
                        { data: 'rental_rate', name: 'rental_rate', visible: false },
                        { data: 'total_rental_amount', name: 'total_rental_amount', visible: false },
                        { data: 'payment', name: 'payment', visible: false },
                        { data: 'or_number', name: 'or_number', visible: false },
                        { data: 'payment_date', name: 'payment_date', visible: false },
                        { data: 'payment_amount', name: 'payment_amount', visible: false },
                        { data: 'municipal_treasurer', name: 'municipal_treasurer', visible: false },
                        { data: 'source_of_fund', name: 'source_of_fund', visible: false },
                        { data: 'funds_available', name: 'funds_available', visible: false },
                        { data: 'municipal_accountant', name: 'municipal_accountant', visible: false },
                        { data: 'municipal_budget_officer', name: 'municipal_budget_officer', visible: false },
                        { data: 'municipal_mayor', name: 'municipal_mayor', visible: false },
                        { data: 'schedule_of_operation', name: 'schedule_of_operation', visible: false },
                        { data: 'plate_number_tractor', name: 'plate_number_tractor', visible: false },
                        { data: 'mao_tractor_incharge', name: 'mao_tractor_incharge', visible: false },
                        { data: 'actual_land_area_served', name: 'actual_land_area_served', visible: false },
                        { data: 'actual_hours_of_operation', name: 'actual_hours_of_operation', visible: false },
                        { data: 'remarks', name: 'remarks', visible: false },
                        { data: 'mo_field_inspector', name: 'mo_field_inspector', visible: false },
                        { data: 'created_at', name: 'created_at' },
                        {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
    
     });
      
     function add(){
    
          $('#RentalForm').trigger("reset");
          $('#RentalModal').html("Add Rental Tractor");
          $('#rental-modal').modal('show');
          $('#id').val('');
    
     }   
     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-rental') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
             $('#RentalModal').html("Edit Rental Tractor");
             $('#rental-modal').modal('show');
             $('#id').val(res.id);
            $('#applicant').val(res.applicant);
            $('#address').val(res.address);
            $('#location').val(res.location);
            $('#project_description').val(res.project_description);
            $('#contact').val(res.contact);
            $('#actual_land_area_of_farm').val(res.actual_land_area_of_farm);
            $('#date_inspected').val(res.date_inspected);
            $('#inspector').val(res.inspector);
            $('#fuel_requirement').val(res.fuel_requirement);
            $('#hours_of_operation').val(res.hours_of_operation);

            // Checkboxes (assuming res.equipment is an array)
            $('input[type="checkbox"]').prop('checked', false); // Clear all checkboxes first
            if (Array.isArray(res.equipment)) {
            res.equipment.forEach(function (equipment) {
                $('#' + equipment).prop('checked', true); // Check the corresponding checkboxes
            });
            }

            $('#area').val(res.area);
            $('#rental_rate').val(res.rental_rate);
            $('#total_rental_amount').val(res.total_rental_amount);
            $('#payment').val(res.payment);
            $('#or_number').val(res.or_number);
            $('#payment_date').val(res.payment_date);
            $('#payment_amount').val(res.payment_amount);
            $('#municipal_treasurer').val(res.municipal_treasurer);
            $('#source_of_fund').val(res.source_of_fund);
            $('#funds_available').val(res.funds_available);
            $('#municipal_accountant').val(res.municipal_accountant);
            $('#municipal_budget_officer').val(res.municipal_budget_officer);
            $('#municipal_mayor').val(res.municipal_mayor);
            $('#schedule_of_operation').val(res.schedule_of_operation);
            $('#plate_number_tractor').val(res.plate_number_tractor);
            $('#mao_tractor_incharge').val(res.mao_tractor_incharge);
            $('#actual_land_area_served').val(res.actual_land_area_served);
            $('#actual_hours_of_operation').val(res.actual_hours_of_operation);
            $('#remarks').val(res.remarks);
            $('#mo_field_inspector').val(res.mo_field_inspector);

           }
       });
     }  
    
     function deleteFunc(id){
           if (confirm("Delete Record?") == true) {
           var id = id;
             
             // ajax
             $.ajax({
                 type:"POST",
                 url: "{{ url('delete-rental') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function(res){
    
                   var oTable = $('#rental-crud-datatable').dataTable();
                   oTable.fnDraw(false);
                }
             });
          }
     }
    
     $('#RentalForm').submit(function(e) {
    
        e.preventDefault();
      
        var formData = new FormData(this);
      
        $.ajax({
           type:'POST',
           url: "{{ url('store-rental')}}",
           data: formData,
           cache:false,
           contentType: false,
           processData: false,
           success: (data) => {
             $("#rental-modal").modal('hide');
             var oTable = $('#rental-crud-datatable').dataTable();
             oTable.fnDraw(false);
             $("#btn-save").html('Submit');
             $("#btn-save"). attr("disabled", false);
           },
           error: function(data){
              console.log(data);
            }
          });
      });
    
    
   </script>


  </html>