<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vegetable Seeds</title>
     
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
                <h2>Vegetable Seeds</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-warning" onClick="add()" href="javascript:void(0)">Add </a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
 
        <table class="table table-bordered" id="vegseeds-crud-datatable">
           <thead>
              <tr>
                
                <th>Variety</th>
                <th>No. of Seeds Received</th>
                <th>Date Received</th>
                <th>Source of Funds</th>
                <th>Registered-in Date</th>
                <th width="150px">Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
</div>
</div>
</div>
  <!-- boostrap company model -->
    <div class="modal fade" id="vegseeds-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="height: 80px;">
            <h4 class="modal-title" id="VegSeedsModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="VegSeedsForm" name="VegSeedsForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">

              <div class="form-group">
                <label for="var" class="col-sm-2 control-label" >Variety</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="variety" name="variety" placeholder="Enter Variety Name" maxlength="50" required="">
                </div>
              </div>  
 
              <div class="form-group">
                <label for="no." class="col-sm-3 control-label">No. of Seeds Received</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="seeds_received" name="seeds_received" placeholder="Enter No. of Seeds Received" maxlength="20" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label class="col-sm-3 control-label">Date Received</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="date_received" name="date_received" maxlength="11" placeholder="Enter Date Received" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Source of Funds</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="source_of_funds" name="source_of_funds" placeholder="Enter Source of Funds" maxlength="50" required="">
                </div>
              </div>

 
              <div class="col-sm-offset-2 col-sm-10" style="margin-top: 20px;">
                <button type="submit" class="btn btn-success" id="btn-save">Submit
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
    $('#vegseeds-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('vegseeds-crud-datatable') }}",
           columns: [
                    
                    { data: 'variety', name: 'variety' },
                    { data: 'seeds_received', name: 'seeds_received' },
                    { data: 'date_received', name: 'date_received' },
                    { data: 'source_of_funds', name: 'source_of_funds' }, 
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function add(){
 
       $('#VegSeedsForm').trigger("reset");
       $('#VegSeedsModal').html("Add Vegetable Seeds");
       $('#vegseeds-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-vegseeds') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#VegseedsModal').html("Edit Vegetable Seeds");
          $('#vegseeds-modal').modal('show');
          $('#id').val(res.id);
          $('#variety').val(res.variety);
          $('#seeds_received').val(res.seeds_received);
          $('#date_received').val(res.date_received);
          $('#sources_of_funds').val(res.sources_of_funds);
       }
    });
  }  
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-vegseeds') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#vegseeds-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#VegSeedsForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-vegseeds')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#vegseeds-modal").modal('hide');
          var oTable = $('#vegseeds-crud-datatable').dataTable();
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