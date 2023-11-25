<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Corn Grower</title>
     
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
<div class="container mt-2">
 
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Corn Growers</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-warning" onClick="add()" href="javascript:void(0)">Add</a>
               <a class="btn btn-secondary" onClick="printDataTable()" href="javascript:void(0)">printAll </a>
            </div>
            
              
          
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
 
        <table class="table table-bordered display responsive nowrap display responsive nowrap" id="corn-crud-datatable">
           <thead>
              <tr>
                <th>RSBSA ID</th>
                <th>Generated ID</th>
                <th>Name of Association</th>
                <th>Barangay</th>
                <th>Farmer's Name</th>
                <th>Date of Birth</th>
                <th>Season</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Cropping Season</th>
                <th>Area</th>
                <th>Location</th>
                <th>Registered-in Date</th>
                <th width="150px">Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
</div>
</div>
</div>
  <!-- boostrap corn model -->
    <div class="modal fade" id="corn-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content"style="width: 500px;left:190px">
          <div class="modal-header" style="height: 80px;">
            <h4 class="modal-title" id="CornModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="CornForm" name="CornForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">

              <div class="form-group">
                <label for="rsbsa" class="col-md-auto control-label" >RSBSA ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="rsbsa" name="rsbsa" placeholder="Enter RSBSA ID " maxlength="50" required="">
                </div>
              </div>  
 
              <div class="form-group">
                <label for="generated" class="col-md-auto control-label">Generated ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="generated" name="generated" placeholder="Enter Generated" maxlength="20" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label for="association" class="col-sm-8 control-label">Name of Association</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="association" name="association" placeholder="Enter Name of Association" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="barangay" class="col-md-auto control-label">Barangay</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label">Farmer's Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Farmer's Name" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="birth" class="col-md-auto control-label">Date of Birth</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="birth" name="birth" placeholder="Enter Date of Birth" maxlength="20" required="">
                </div>
              </div>
              
              <div class="form-group">
                <label for="season" class="col-md-auto control-label">Season</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="select season" id="season" name="season">
                    <option value="1">Wet</option>
                    <option value="2">Dry</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-md-auto control-label">Age</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" maxlength="2" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="sex" class="col-md-auto control-label">Sex</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="select sex" id="sex" name="sex">
                    <option value="1">Female</option>
                    <option value="2">Male</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="cropping" class="col-sm-8 control-label">Cropping Season</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="cropping" name="cropping" placeholder="Enter Cropping Season" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="area" class="col-md-auto control-label">Area</label>
                <div class="col-sm-12">
                  <input type="number" step="0.01" class="form-control" id="area" name="area" placeholder="Enter no. of hectare/s" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="location" class="col-md-auto control-label">Location</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" maxlength="50" required="">
                </div>
              </div>
              <div class="col-sm-offset-2 col-md-auto" style="margin-top: 20px;">
                <button type="submit" class="btn btn-success" id="btn-save">Save
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

</body>
<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#corn-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('corn-crud-datatable') }}",
           columns: [
                   
                    { data: 'rsbsa', name: 'rsbsa' },
                    { data: 'generated', name: 'generated' },
                    { data: 'association', name: 'association' },
                    { data: 'barangay', name: 'barangay' },
                    { data: 'name', name: 'name' },
                    { data: 'birth', name: 'birth' },
                    { data: 'season', name: 'season' },
                    { data: 'age', name: 'age' },
                    { data: 'sex', name: 'sex' },
                    { data: 'cropping', name: 'cropping' },
                    { data: 'area', name: 'area' },
                    { data: 'location', name: 'location' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function add(){
 
       $('#CornForm').trigger("reset");
       $('#CornModal').html("Add Corn");
       $('#corn-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-corn') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#CornModal').html("Edit Corn");
          $('#corn-modal').modal('show');
          $('#id').val(res.id);
          $('#rsbsa').val(res.rsbsa);
          $('#generated').val(res.generated);
          $('#association').val(res.association);
          $('#barangay').val(res.barangay);
          $('#name').val(res.name);
          $('#birth').val(res.birth);
          $('#season').val(res.season);
          $('#age').val(res.age);
          $('#sex').val(res.sex);
          $('#cropping').val(res.cropping);
          $('#area').val(res.area);
          $('#location').val(res.location);
       }
    });
  }  
 // AJAX request to fetch data from the server
 function printDataTable() {
          $.ajax({
              url: '/print-corn', // Replace with your Laravel route URL to fetch data
              method: 'GET',
              success: function (data) {
                  // Once the data is fetched successfully, you can proceed to print it
                  printData(data);
              },
              error: function (error) {
                  console.error('Error fetching data:', error);
              }
          });
      }

      // Function to print the data fetched from the server
      function printData(data) {
          // Columns to exclude (you can adjust these according to your requirements)
          const excludedColumns = ['generated','created_at', 'updated_at'];

          const headers = [{columns:['Id', 'Rsbsa', 'Association', 'Barangay','Name','Birth',
                            'Season','Age','Sex', 'Cropping','Area','Location']}];

          // Create a new window for printing
          let printWindow = window.open('', '_blank');
          

          // Construct the HTML content to be printed with CSS styles for table borders
          let htmlContent = `
              <html>
              <head>
                  <title>Corn Print</title>
                  <style>
                      table {
                          border-collapse: collapse;
                          width: 100%;
                      }
                      table, th, td {
                          border: 1px solid black;
                      }
                      th, td {
                          padding: 8px;
                          text-align: left;
                      }
                  </style>
              </head>
              <body>

               

                  <table>
          `;

         

              // Generate sub-headers for "Farmer's Name" columns
    headers.forEach(header => {
        if (typeof header === 'object') {
            header.columns.forEach(column => {
                htmlContent += `<th>${column}</th>`;
            });
        }
    });

          // Assuming each data row is an object
          data.forEach(row => {
              htmlContent += '<tr>';
              for (const key in row) {
                  if (row.hasOwnProperty(key) && !excludedColumns.includes(key)) {
                      htmlContent += '<td>' + row[key] + '</td>';
                  }
              }
              htmlContent += '</tr>';
          });

          htmlContent += `
                  </table>
              </body>
              </html>
          `;

          // Write the HTML content to the new window and print it
          printWindow.document.write(htmlContent);
          printWindow.document.close();
          printWindow.print();
      }
  
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-corn') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#corn-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#CornForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-corn')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#corn-modal").modal('hide');
          var oTable = $('#corn-crud-datatable').dataTable();
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