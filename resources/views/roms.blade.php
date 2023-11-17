<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROMSP</title>
     
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
                <h2>ROMS</h2>
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
 
        <table class="table table-bordered display responsive nowrap" id="roms-crud-datatable">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name of Farmer</th>
                 <th>Address</th>
                 <th>Animal Id</th>
                 <th>Breed of dam</th>
                 <th>Yr. Born</th>
                 <th>BCS</th>
                 <th>Date of last calving</th>
                 <th>Date of ROMS(1)</th>
                <th>Ovarian</th>
                <th>Result</th>
                <th>date of AI</th>
                <th>UT</th>
                <th>W/IEC</th>
                <th>Bull ID/Name</th>
                <th>No.of straws used</th>
                <th>Remarks</th>
                 <th>Created at</th>
                 <th>Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
    
</div>
 
 
    <div class="modal fade" id="roms-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="RomsModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="RomsForm" name="RomsForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Name </label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name of Farmer" maxlength="100" required="">
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-8 control-label">Address</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="barangay" class="col-sm-8 control-label">Animal ID</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="animal_id" name="animal_id" placeholder="Enter Animal ID" maxlength="100" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label class="col-sm-8 control-label">Breed of dam</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="breed" name="breed" placeholder="Enter Breed of dam" >
                </div>
              </div>
              
              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Yr. Born</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="born" name="born" placeholder="Enter Yr. Born"   >
                </div>
              </div>

              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">BCS</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="bcs" name="bcs" placeholder="Enter BCS"   >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Date of last Calving</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="lastcalving" name="lastcalving" placeholder="Enter Date of last Calving "  >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Date ROMS</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="romsdate" name="romsdate" placeholder="Enter Date of last Calving "  >
                </div>
              </div>

              <div class="form-group">
                <label for="ovarian" class="col-sm-2 control-label">Ovarian</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" name="ovarian" value="RO"  > RO
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="ovarian" value="LO"> LO
                  </label>
                </div>
              </div> 

              <div class="form-group">
                <label class="col-sm-8 control-label">Result</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="result" name="result" placeholder="Enter Result"  >
                </div>
              </div>

             

              <div class="form-group">
                <label class="col-sm-8 control-label">Date of AI</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="ai" name="ai" placeholder="EnterDate of AI" >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">UT</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="ut" name="ut" placeholder="Enter UT " >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">W/IEC</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="w_iec" name="w_iec" placeholder="Enter W/IEC " >
                </div>
              </div>

              
              <div class="form-group">
                <label class="col-sm-8 control-label">Bull ID/Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="bullid" name="bullid" placeholder="Enter Bull ID/Name " >
                </div>
              </div>

              
              <div class="form-group">
                <label class="col-sm-8 control-label">No. of straws used</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="straws" name="straws" placeholder="Enter No. of straws used " >
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
    $('#roms-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('roms-crud-datatable') }}",
           
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'address', name: 'address' },
                    { data: 'animal_id', name: 'animal_id' },
                    { data: 'breed', name: 'breed' },
                    { data: 'born', name: 'born' },
                    { data: 'bcs', name: 'bcs' },
                    { data: 'lastcalving', name: 'lastcalving' },
                    { data: 'romsdate', name: 'romsdate' },
                    { data: 'ovarian', name: 'ovarian' },
                    { data: 'result', name: 'result' },
                    { data: 'ai', name: 'ai' },
                    { data: 'ut', name: 'ut' },
                    { data: 'w_iec', name: 'w_iec' },
                    { data: 'bullid', name: 'bullid' },
                    { data: 'straws', name: 'straws' },
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
 
       $('#RomsForm').trigger("reset");
       $('#RomsModal').html("Add ");
       $('#roms-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-roms') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#RomsModal').html("Edit ");
          $('#roms-modal').modal('show');
          $('#id').val(res.id);
          $('#name').val(res.name);
            $('#address').val(res.address);
            $('#animal_id').val(res.animal_id);
            $('#breed').val(res.breed);
            $('#born').val(res.born);
            $('#bcs').val(res.bcs);
            $('#lastcalving').val(res.lastcalving);
            $('#romsdate').val(res.romsdate);
            $('#ovarian').val(res.ovarian);
            $('#result').val(res.result);
            $('#ai').val(res.ai);
            $('#ut').val(res.ut);
            $('#w_iec').val(res.w_iec);
            $('#bullid').val(res.bullid);
            $('#straws').val(res.straws);
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
              url: "{{ url('delete-roms') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#roms-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#RomsForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-roms')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#roms-modal").modal('hide');
          var oTable = $('#roms-crud-datatable').dataTable();
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