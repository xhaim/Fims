<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Association</title>
     
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
                <h2>Association</h2>
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
 {{-- view --}}
      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" >
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">View Record Details</h5>
                </div>
                <div class="modal-body">
                    <!-- Placeholders for displaying record details -->
                    <p><strong>Name of Association:</strong> <span id="view-association"></span></p>
                    <p><strong>Barangay:</strong> <span id="view-barangay"></span></p>
                    <p><strong>Chairman:</strong> <span id="view-chairman"></span></p>
                    <p><strong>Contact Number:</strong> <span id="view-contact"></span></p>
                    <p><strong>Number of farmers:</strong> <span id="view-no_of_farmers"></span></p>
                    <p><strong>Date registered:</strong> <span id="view-registered"></span></p>
                  
                </div>
            </div>
        </div>
    </div>

        <table class="table table-bordered display responsive nowrap display responsive nowrap" id="assoc-crud-datatable">
           <thead>
              <tr>
                <th>Name of Association</th>
                <th>Barangay</th>
                <th>Chairman</th>
                <th>Contact</th>
                <th>Number of farmers</th>
                <th>Date registered</th>
                <th>Registered-in Date</th>
                <th width="150px">Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
</div>
</div>
</div>
  <!-- boostrap Assoc model -->
    <div class="modal fade" id="assoc-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <<div class="modal-content" style="width: 500px;left:190px">
          <div class="modal-header" style="height: 80px;">
            <h4 class="modal-title" id="AssocModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="AssocForm" name="AssocForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
 
              <div class="form-group">
                <label for="association" class="col-sm-8 control-label">Name of Association</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="association" name="association" placeholder="Enter Name of Association" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="barangay" class="col-sm-8 control-label">Barangay</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label">Chairman</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="chairman" name="chairman" placeholder="Enter Chairman's Name" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-sm-8 control-label">Contact number</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact No." maxlength="2" required="">
                </div>
              </div>
      
              <div class="form-group">
                <label for="area" class="col-sm-8 control-label">Number of farmers</label>
                <div class="col-sm-12">
                  <input type="number" step="0.01" class="form-control" id="no_of_farmers" name="no_of_farmers" placeholder="Enter no. of farmers" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="birth" class="col-sm-8 control-label">Date registered</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="registered" name="registered" placeholder="Enter Date registered" maxlength="20" required="">
                </div>
              </div>
              
              <div class="col-sm-offset-2 col-sm-10" style="margin-top: 20px;">
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
<script>
  function viewFunc(id) {
      $.ajax({
          type: "GET",
          url: "{{ url('get-association-details') }}/" + id,
          success: function (data) {
              // Populate the modal with record details
              $("#view-association").text(data.association);
              $("#view-barangay").text(data.barangay);
              $("#view-chairman").text(data.chairman);
              $("#view-contact").text(data.contact);
              $("#view-no_of_farmers").text(data.no_of_farmers);
              $("#view-registered").text(data.registered);
              // Add more fields as needed

              // Show the modal
              $("#viewModal").modal("show");
          },
          error: function (data) {
              console.log("Error:", data);
          },
      });
  }
</script>
</body>
<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#assoc-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('assoc-crud-datatable') }}",
           columns: [
                    
                    { data: 'association', name: 'association' },
                    { data: 'barangay', name: 'barangay' },
                    { data: 'chairman', name: 'chairman' },
                    { data: 'contact', name: 'contact' },
                    { data: 'no_of_farmers', name: 'no_of_farmers' },
                    { data: 'registered', name: 'registered' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function add(){
 
       $('#AssocForm').trigger("reset");
       $('#AssocModal').html("Add Association");
       $('#assoc-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-assoc') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#AssocModal').html("Edit Association");
          $('#assoc-modal').modal('show');
          $('#id').val(res.id);
          $('#association').val(res.association);
          $('#barangay').val(res.barangay);
          $('#chairman').val(res.chairman);
          $('#contact').val(res.contact);
          $('#no_of_farmers').val(res.no_of_farmers);
          $('#registered').val(res.registered);
        }
    });
  }  
 
   // AJAX request to fetch data from the server
   function printDataTable() {
          $.ajax({
              url: '/print-assoc', // Replace with your Laravel route URL to fetch data
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
          const excludedColumns = ['created_at', 'updated_at'];

          const headers = [{columns:['Id', 'Name of Association','Barangay', 'Chairman', 'Contact Number','Number of Farmers', 'Date Registered']}];

          // Create a new window for printing
          let printWindow = window.open('', '_blank');
          

          // Construct the HTML content to be printed with CSS styles for table borders
          let htmlContent = `
              <html>
              <head>
                  <title>Association Print</title>
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
              url: "{{ url('delete-assoc') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#assoc-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#AssocForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-assoc')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#assoc-modal").modal('hide');
          var oTable = $('#assoc-crud-datatable').dataTable();
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