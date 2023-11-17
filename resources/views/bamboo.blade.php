<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rice Seeds</title>
     
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
               

            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <div class="card-body">
 
        <table class="table table-bordered display responsive nowrap" id="bamboo-crud-datatable">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name </th>
                 <th>Sex</th>
                 <th>Birthday</th>
                 <th>Purok</th>
                 <th>Barangay</th>
                 <th>Newly Planted(# of bamboo )</th>
                 <th>Harvestable(# of bamboo )</th>
                 <th>Total # of bamboo</th>
                 <th>Area(Ha./Sq. M)</th>
                 <th>Age of Bamboo Trees</th>
                 <th>Average No. of Bamboo Pole Per Month</th>
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
 
 
    <div class="modal fade" id="bamboo-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="BambooModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="BambooForm" name="BambooForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                <label class="col-sm-8 control-label">Birthday</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Enter Birthday" required="">
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
                <label class="col-sm-8 control-label">Newly Planted(# of bamboo)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="newly" name="newly" placeholder="Enter Newly Planted(# of bamboo)" >
                </div>
              </div>
              
              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Harvestable(# of bamboo )</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="harvestable" name="harvestable" placeholder="Enter Harvestable(# of bamboo )" maxlength="100" >
                </div>
              </div>

              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Total # of bamboo</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="total" name="total" placeholder="Total # of bamboo" maxlength="100" >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Area(Ha./Sq. M)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="area" name="area" placeholder="Enter Area " maxlength="100">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Age of Bamboo Trees</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age of Trees(Years) " >
                </div>
              </div>

              <div class="form-group">
                <label for="commodity" class="col-sm-8 control-label">Average No. of Bamboo Pole Per Month</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="per_month" name="per_month" placeholder="Enter No. of bamboo Trees Harvested"  >
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
    $('#bamboo-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('bamboo-crud-datatable') }}",
           
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'sex', name: 'sex' },
                    { data: 'birthday', name: 'birthday' },
                    { data: 'purok', name: 'purok' },
                    { data: 'barangay', name: 'barangay' },
                    { data: 'newly', name: 'newly' },
                    { data: 'harvestable', name: 'harvestable' },
                    { data: 'total', name: 'total' },
                    { data: 'area', name: 'area' },
                    { data: 'age', name: 'commodity' },
                    { data: 'per_month', name: 'per_month' },
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
 
       $('#BambooForm').trigger("reset");
       $('#BambooModal').html("Add ");
       $('#bamboo-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-bamboo') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#BambooModal').html("Edit ");
          $('#bamboo-modal').modal('show');
          $('#id').val(res.id);
          $('#name').val(res.name);
          $('#sex').val(res.sex);
          $('#birthday').val(res.birthday);
          $('#purok').val(res.purok);
          $('#barangay').val(res.barangay);
          $('#newly').val(res.newly);
          $('#harvestable').val(res.harvestable);
          $('#total').val(res.total);
          $('#area').val(res.area);
          $('#age').val(res.age);
          $('#per_month').val(res.per_month);
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
              url: "{{ url('delete-bamboo') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#bamboo-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#BambooForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-bamboo')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#bamboo-modal").modal('hide');
          var oTable = $('#bamboo-crud-datatable').dataTable();
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
        const newlyInput = document.getElementById('newly');
        const nonnewlyInput = document.getElementById('harvestable');
        const totalInput = document.getElementById('total');

        // Function to update the total
        function updateTotal() {
            const newlyValue = parseInt(newlyInput.value) || 0;
            const nonnewlyValue = parseInt(nonnewlyInput.value) || 0;
            const total = newlyValue + nonnewlyValue;
            totalInput.value = total;
        }

        // Add input event listeners to both 'newly' and 'non-newly' inputs
        newlyInput.addEventListener('input', updateTotal);
        nonnewlyInput.addEventListener('input', updateTotal);
    });

</script>


</html>