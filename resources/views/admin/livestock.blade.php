<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livestock Owner</title>
     
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
                <h2>Livestock Owner</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-warning" onClick="add()" href="javascript:void(0)">Add</a>
                <a class="btn btn-secondary" onClick="printDataTable()" href="javascript:void(0)">printAll </a>
                <a class="btn btn-info" id="toggleDatatables" style=" color: white; margin-left:960px;" onclick="toggleDatatables()">View Archive</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
          <div id="MainTable">
            <table class="table table-bordered display responsive nowrap display responsive nowrap" id="livestock-crud-datatable">
              <thead>
                  <tr>
                    <th>RSBSA ID</th>
                    <th>Generated ID</th>
                    <th>Barangay</th>
                    <th>Farmer's Name</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Commodity Name</th>
                    <th>Number of Head/s</th>
                    <th>Deceased</th>
                    <th>Registered-in Date</th>
                    <th width="150px">Action</th>
                  </tr>
              </thead>
            </table>
        </div>
        <div id="Archive" hidden="hidden">
          <table class="table table-bordered display responsive nowrap display responsive nowrap" id="livestock-archive-datatable">
            <thead>
               <tr>
                 <th>RSBSA ID</th>
                 <th>Generated ID</th>
                 <th>Barangay</th>
                 <th>Farmer's Name</th>
                 <th>Date of Birth</th>
                 <th>Age</th>
                 <th>Sex</th>
                 <th>Commodity Name</th>
                 <th>Number of Head/s</th>
                 <th>Deceased</th>
                 <th>Registered-in Date</th>
                 <th width="150px">Action</th>
               </tr>
            </thead>
         </table>
        </div>
    </div>
</div>
</div>
</div>
  <!-- boostrap livestock model -->
    <div class="modal fade" id="livestock-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width: 500px;left:190px">
          <div class="modal-header" style="height: 80px;">
            <h4 class="modal-title" id="LivestockModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="LivestockForm" name="LivestockForm" class="form-horizontal" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="rsbsa" class="col-sm-2 control-label" >RSBSA ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="rsbsa" name="rsbsa" placeholder="Enter RSBSA ID " maxlength="50" >
                </div>
              </div>  
 
              <div class="form-group">
                <label for="generated" class="col-sm-2 control-label">Generated ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="generated" name="generated" placeholder="Enter Generated" maxlength="20" >
                </div>
              </div>
 
              <div class="form-group">
                <label for="barangay" class="col-sm-2 control-label">Barangay</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" maxlength="20" >
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Farmer's Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Farmer's Name" maxlength="20" >
                </div>
              </div>

              <div class="form-group">
                <label for="birth" class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="birth" name="birth" placeholder="Enter Date of Birth" maxlength="20" >
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" maxlength="2" >
                </div>
              </div>

              <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">Sex</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="select sex" id="sex" name="sex">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="commodity" class="col-sm-3 control-label">Commodity Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="commodity" name="commodity" placeholder="Enter Commodity Name" maxlength="20" >
                </div>
              </div>

              <div class="form-group">
                <label for="head" class="col-sm-3 control-label">Number of head/s</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="head" name="head" placeholder="Enter no. of head/s" maxlength="20" >
                </div>
              </div>

              <div class="form-group">
                <label for="deceased" class="col-sm-2 control-label">Deceased</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="deceased" name="deceased" placeholder="Enter no. of deceased" maxlength="50" >
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

</body>
<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#livestock-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('livestock-crud-datatable') }}",
           columns: [
                    { data: 'rsbsa', name: 'rsbsa' },
                    { data: 'generated', name: 'generated' },
                    { data: 'barangay', name: 'barangay' },
                    { data: 'name', name: 'name' },
                    { data: 'birth', name: 'birth' },
                    { data: 'age', name: 'age' },
                    { data: 'sex', name: 'sex' },
                    { data: 'commodity', name: 'commodity' },
                    { data: 'head', name: 'head' },
                    { data: 'deceased', name: 'deceased' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function add(){
 
       $('#LivestockForm').trigger("reset");
       $('#LivestockModal').html("Add Livestock");
       $('#livestock-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-livestock') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#LivestockModal').html("Edit livestock");
          $('#livestock-modal').modal('show');
          $('#rsbsa').val(res.rsbsa);
          $('#generated').val(res.generated);
          $('#barangay').val(res.barangay);
          $('#name').val(res.name);
          $('#birth').val(res.birth);
          $('#age').val(res.age);
          $('#sex').val(res.sex);
          $('#commodity').val(res.commodity);
          $('#head').val(res.head);
          $('#deceased').val(res.deceased);
       }
    });
  }  
   // AJAX request to fetch data from the server
   function printDataTable() {
          $.ajax({
              url: '/print-livestock', // Replace with your Laravel route URL to fetch data
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
          const excludedColumns = ['id','generated','created_at', 'updated_at'];

          const headers = [{columns:['RSBSA ID','Barangay', 'Farmer Name', 'Date of Birth','Age', 'Sex','Commodity Name','Number of Head/s','Deceased']}];

          // Create a new window for printing
          let printWindow = window.open('', '_blank');
          

          // Construct the HTML content to be printed with CSS styles for table borders
          let htmlContent = `
              <html>
              <head>
                  <title>Livestock Print</title>
                  <style>
                    body{
                        text-align:center;
                      }
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

            <h4>Livestock Owners </h4>


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
                            const cellValue = row[key] !== null ? row[key] : ''; // Check for null and replace with an empty string
                              htmlContent += '<td>' + cellValue + '</td>';
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
 
      //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //

      $('#livestock-archive-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('livestock-archive-datatable') }}",
              columns: [ 
                          { data: 'rsbsa', name: 'rsbsa' },
                          { data: 'generated', name: 'generated' },
                          { data: 'barangay', name: 'barangay' },
                          { data: 'name', name: 'name' },
                          { data: 'birth', name: 'birth' },
                          { data: 'age', name: 'age' },
                          { data: 'sex', name: 'sex' },
                          { data: 'commodity', name: 'commodity' },
                          { data: 'head', name: 'head' },
                          { data: 'deceased', name: 'deceased' },
                          { data: 'created_at', name: 'created_at' },
                          {data: 'action', name: 'action', orderable: false},
                      ],
                      order: [[0, 'desc']]
          });

        function archiveFunc(id) {
            if (confirm("Archive Record?") == true) {
                // Make an AJAX request to the archive route
                $.ajax({
                    type: "POST",
                    url: "{{ url('livestock/archive') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        // Handle success, e.g., show a success message
                        console.log(response.success);
                        // Optionally, you may want to refresh the data table
                        var ArcTable = $('#livestock-archive-datatable').DataTable();
                        var oTable = $('#livestock-crud-datatable').DataTable();
                        ArcTable.ajax.reload(); // Reload the DataTable
                        oTable.ajax.reload(); // Reload the DataTable
                    },
                    error: function (error) {
                        // Handle error, e.g., show an error message
                        console.error('Error archiving record:', error);
                    }
                });
            }
        } 

        function restoreFunc(id) {
            if (confirm("Restore Record?") == true) {
                // Make an AJAX request to the archive route
                $.ajax({
                    type: "POST",
                    url: "{{ url('livestock/restore') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        // Handle success, e.g., show a success message
                        console.log(response.success);
                        // Optionally, you may want to refresh the data table
                        var ArcTable = $('#livestock-archive-datatable').DataTable();
                        var oTable = $('#livestock-crud-datatable').DataTable();
                        ArcTable.ajax.reload(); // Reload the DataTable
                        oTable.ajax.reload(); // Reload the DataTable
                    },
                    error: function (error) {
                        // Handle error, e.g., show an error message
                        console.error('Error archiving record:', error);
                    }
                });
            }
        } 



        function deleteFunc(id) {
            if (confirm("Delete Record?") == true) {
                // Make an AJAX request to the archive route
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-livestock') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        // Handle success, e.g., show a success message
                        console.log(response.success);
                        // Optionally, you may want to refresh the data table
                        var ArcTable = $('#livestock-archive-datatable').DataTable();
                        var oTable = $('#livestock-crud-datatable').DataTable();
                        ArcTable.ajax.reload(); // Reload the DataTable
                        oTable.ajax.reload(); // Reload the DataTable
                    },
                    error: function (error) {
                        // Handle error, e.g., show an error message
                        console.error('Error archiving record:', error);
                    }
                });
            }
        } 

      //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //

 
  $('#LivestockForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-livestock')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#livestock-modal").modal('hide');
          var oTable = $('#livestock-crud-datatable').dataTable();
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
<script>
  function toggleDatatables() {
    var div1 = document.getElementById('MainTable');
    var div2 = document.getElementById('Archive');
    var toggleButton = document.getElementById('toggleDatatables');

    // Toggle the 'hidden' attribute
    if (div1.hasAttribute('hidden')) {
      div1.removeAttribute('hidden');
      div2.setAttribute('hidden', 'hidden');
      toggleButton.innerHTML = 'View Archive';
    } else {
      div1.setAttribute('hidden', 'hidden');
      div2.removeAttribute('hidden');
      toggleButton.innerHTML = 'Hide Archive';
    }
  }
</script>
</html>