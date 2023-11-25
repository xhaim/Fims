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
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
 
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
                  <input type="number" class="form-control" id="rsbsa" name="rsbsa" placeholder="Enter RSBSA ID " maxlength="50" required="">
                </div>
              </div>  
 
              <div class="form-group">
                <label for="generated" class="col-sm-2 control-label">Generated ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="generated" name="generated" placeholder="Enter Generated" maxlength="20" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label for="barangay" class="col-sm-2 control-label">Barangay</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Farmer's Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Farmer's Name" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="birth" class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="birth" name="birth" placeholder="Enter Date of Birth" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" maxlength="2" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">Sex</label>
                <div class="col-sm-12">
                  <select class="form-select" aria-label="select sex" id="sex" name="sex">
                    <option value="1">Female</option>
                    <option value="2">Male</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="commodity" class="col-sm-3 control-label">Commodity Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="commodity" name="commodity" placeholder="Enter Commodity Name" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="head" class="col-sm-3 control-label">Number of head/s</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="head" name="head" placeholder="Enter no. of head/s" maxlength="20" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="deceased" class="col-sm-2 control-label">Deceased</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="deceased" name="deceased" placeholder="Enter no. of deceased" maxlength="50" required="">
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
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-livestock') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#livestock-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
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
</html>