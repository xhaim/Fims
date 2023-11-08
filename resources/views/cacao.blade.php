<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cacao Farmer</title>
     
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
                <h2>HVCDP Farmer</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-warning" onClick="add()" href="javascript:void(0)"> Add</a>
                <button style="background-color: #87CEEB" id="printButton"  
                onClick="printDataTable()" href="javascript:void(0)">Print DataTable</button>

            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
 
        <table class="table table-bordered" id="cacao-crud-datatable">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name </th>
                 <th>Sex</th>
                 <th>Purok</th>
                 <th>Barangay</th>
                 <th>Bearing(# of cacao trees)</th>
                 <th>Non-Bearing(# of cacao trees)</th>
                 <th>Total # of Cacao Trees</th>
                 <th>Area(in has)</th>
                 <th>Age of Trees(Years)</th>
                <th>Number of Cacao Trees Harvested</th>
                <th>No of Kilos Harvested</th>
                <th>Harvesting season</th>
                <th>Varieties</th>
                <th>Group/Organization</th>
                <th>Remark</th>
                 <th>Created at</th>
                 <th>Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
    
</div>
 
 
    <div class="modal fade" id="cacao-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="CacaoModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="CacaoForm" name="CacaoForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Name </label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name of Farmer" maxlength="100" required="">
                </div>
              </div>  
 
              <div class="form-group">
                <label for="sex" class="col-sm-2 control-label">Sex</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" name="sex" value="Male"  > Male
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="sex" value="Female"> Female
                  </label>
                </div>
              </div> 

              <div class="form-group">
                <label class="col-sm-8 control-label">Purok</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="purok" name="purok" placeholder="Enter Purok" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="barangay" class="col-sm-8 control-label">Barangay</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" maxlength="100" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label class="col-sm-8 control-label">Bearing(# of Cacao Trees)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="bearing" name="bearing" placeholder="Enter Bearing(# of Cacao Trees)" >
                </div>
              </div>
              
              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Non-Bearing(# of Cacao Trees)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="non_bearing" name="non_bearing" placeholder="Enter Contact Number" maxlength="11" >
                </div>
              </div>

              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Total # of Cacao Trees</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="total" name="total" placeholder="Total # of Cacao Trees" maxlength="11" >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Area</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="area" name="area" placeholder="Enter Area " maxlength="11">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Age of Trees(Years)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age of Trees(Years) " >
                </div>
              </div>

              <div class="form-group">
                <label for="commodity" class="col-sm-8 control-label">No. of Cacao Trees Harvested</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="cacao_trees_harvested" name="cacao_trees_harvested" placeholder="Enter No. of Cacao Trees Harvested"  >
                </div>
              </div>

             

              <div class="form-group">
                <label class="col-sm-8 control-label">No. of Kilos Harvested</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kilo" name="kilo" placeholder="Enter No. of Kilos Harvested " >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Harvesting Season</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="season" name="season" placeholder="Enter Harvesting Season " >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Varieties</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="varieties" name="varieties" placeholder="Enter Varieties " >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Group/Organization</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="group" name="group" placeholder="Enter Group/Organization " >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Remark</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Remark " >
                </div>
              </div>
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save">Save changes
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
    $('#cacao-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('cacao-crud-datatable') }}",
           
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'sex', name: 'sex' },
                    { data: 'purok', name: 'purok' },
                    { data: 'barangay', name: 'barangay' },
                    { data: 'bearing', name: 'bearing' },
                    { data: 'non_bearing', name: 'non_bearing' },
                    { data: 'total', name: 'total' },
                    { data: 'area', name: 'area' },
                    { data: 'age', name: 'commodity' },
                    { data: 'cacao_trees_harvested', name: 'cacao_trees_harvested' },
                    { data: 'kilo', name: 'number_of_hills' },
                    { data: 'season', name: 'production' },
                    { data: 'varieties', name: 'varieties' },
                    { data: 'group', name: 'group' },
                    { data: 'remark', name: 'remark' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
       $('#printButton').on('click', function () {
        $('#myDataTable').DataTable().buttons['print'].trigger();
    });

  });
   
  function add(){
 
       $('#CacaoForm').trigger("reset");
       $('#CacaoModal').html("Add ");
       $('#cacao-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-cacao') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#CacaoModal').html("Edit ");
          $('#cacao-modal').modal('show');
          $('#id').val(res.id);
          $('#name').val(res.name);
          $('#sex').val(res.sex);
          $('#purok').val(res.purok);
          $('#barangay').val(res.barangay);
          $('#bearing').val(res.bearing);
          $('#non_bearing').val(res.non_bearing);
          $('#total').val(res.total);
          $('#area').val(res.area);
          $('#age').val(res.age);
          $('#cacao_trees_harvested').val(res.cacao_trees_harvested);
          $('#kilo').val(res.kilo);
          $('#season').val(res.season);
          $('#varieties').val(res.varieties);
          $('#group').val(res.group);
          $('#remark').val(res.remark);
       }
    });
  }  
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-cacao') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#cacao-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#CacaoForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-cacao')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#cacao-modal").modal('hide');
          var oTable = $('#cacao-crud-datatable').dataTable();
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
    document.addEventListener("DOMContentLoaded", function() {
        const bearingInput = document.getElementById('bearing');
        const nonBearingInput = document.getElementById('non_bearing');
        const totalInput = document.getElementById('total');

        // Function to update the total
        function updateTotal() {
            const bearingValue = parseInt(bearingInput.value) || 0;
            const nonBearingValue = parseInt(nonBearingInput.value) || 0;
            const total = bearingValue + nonBearingValue;
            totalInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        bearingInput.addEventListener('input', updateTotal);
        nonBearingInput.addEventListener('input', updateTotal);
    });

</script>


</html>