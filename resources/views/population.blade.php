<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livestock Population</title>
     
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
                <h2>Livestock Population</h2>
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
 
        <table class="table table-bordered display responsive nowrap" id="popu-crud-datatable">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Name</th>
                <th>Kabaw Male</th>
                <th>Kabaw Female</th>
                <th>Total Kabaw</th>
                <th>Baka Male</th>
                <th>Baka Female</th>
                <th>Total Baka</th>
                <th>Anay</th>
                <th>Butakal</th>
                <th>Total Baboy</th>
                <th>Kanding Male</th>
                <th>Kanding Female</th>
                <th>Total Kanding</th>
                <th>Kabayo Male</th>
                <th>Kabayo Female</th>
                <th>Total Kabayo</th>
                <th>Iro Male</th>
                <th>Iro Female</th>
                <th>Total Iro</th>
                <th>Inahan</th>
                <th>Sonoy</th>
                <th>Total Manok</th>
                <th>Bebe Male</th>
                <th>Bebe Female</th>
                <th>Total Bebe</th>
                <th>Quail Male</th>
                <th>Quail Female</th>
                <th>Total Quail</th>
                <th>Broiler Male</th>
                <th>Broiler Female</th>
                <th>Total Broiler</th>
                <th>Rabbit Male</th>
                <th>Rabbit Female</th>
                <th>Total Rabbit</th>
                 <th>Created at</th>
                 <th>Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
    
</div>
 
 
    <div class="modal fade" id="popu-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="PopuModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="PopuForm" name="PopuForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Name </label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="100"  >
                </div>
              </div>  
                <!-- kabaw -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Kabaw </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kabawm" name="kabawm" placeholder="Enter Number of Male Kabaw" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Kabaw </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kabawf" name="kabawf" placeholder="Enter Number of Female Kabaw" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Kabaw) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalkabaw" name="totalkabaw" placeholder="Enter Total Number of  Kabaw" maxlength="100"  >
                </div>
              </div>  
              <!-- baka -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label">Male Baka </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="bakam" name="bakam" placeholder="Enter Number of Male Baka" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Baka </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="bakaf" name="bakaf" placeholder="Enter Number of Female Baka" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Baka) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalbaka" name="totalbaka" placeholder="Enter Total Number of  Baka" maxlength="100"  >
                </div>
              </div>  
              <!-- baboy -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Anay</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="baboyf" name="baboyf" placeholder="Enter Number of baboyf Baboy" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Butakal </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="baboym" name="baboym" placeholder="Enter Number of baboym Baboy" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Baboy) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalbaboy" name="totalbaboy" placeholder="Enter Total Number of  Baboy" maxlength="100"  >
                </div>
              </div> 
              <!--kanding  -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Kanding </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kandingm" name="kandingm" placeholder="Enter Number of Male Kanding" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Kanding </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kandingf" name="kandingf" placeholder="Enter Number of Female Kanding" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Kanding) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalkanding" name="totalkanding" placeholder="Enter Total Number of  Kanding" maxlength="100"  >
                </div>
              </div> 
              <!-- kabayo -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Kabayo </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kabayom" name="kabayom" placeholder="Enter Number of Male Kabayo" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Kabayo </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="kabayof" name="kabayof" placeholder="Enter Number of Male Kabayo" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Kabayo) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalkabayo" name="totalkabayo" placeholder="Enter Total Number of  Kabayo" maxlength="100"  >
                </div>
              </div> 
              <!-- iro -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Iro </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="irom" name="irom" placeholder="Enter Number of Male Iro" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Iro </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="irof" name="irof" placeholder="Enter Number of Iro" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Iro) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totaliro" name="totaliro" placeholder="Enter Total Number of  Iro" maxlength="100"  >
                </div>
              </div> 
              <!-- manok -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Inahan </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="manokf" name="manokf" placeholder="Enter Number of manokf Manok" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Sonoy </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="manokm" name="manokm" placeholder="Enter Number of manokm Manok" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Manok) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalmanok" name="totalmanok" placeholder="Enter Total Number of  Manok" maxlength="100"  >
                </div>
              </div> 
              <!-- bebe -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Bebe </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="bebem" name="bebem" placeholder="Enter Number of Male Bebe" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Bebe </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="bebef" name="bebef" placeholder="Enter Number of Female Bebe" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Bebe) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalbebe" name="totalbebe" placeholder="Enter Total Number of  Bebe" maxlength="100"  >
                </div>
              </div> 
              <!-- quail -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Quail </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="quailm" name="quailm" placeholder="Enter Number of Male Quail" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Quail </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="quailf" name="quailf" placeholder="Enter Number of Femaile Quail" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Quail) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalquail" name="totalquail" placeholder="Enter Total Number of  Quail" maxlength="100"  >
                </div>
              </div> 
              <!-- broiler -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Broiler </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="broilerm" name="broilerm" placeholder="Enter Number of Male Broiler" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Broiler </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="broilerf" name="broilerf" placeholder="Enter Number of Female Broiler" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Broiler) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalbroiler" name="totalbroiler" placeholder="Enter Total Number of  Broiler" maxlength="100"  >
                </div>
              </div> 
              <!-- rabbit -->
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Male Rabbit </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="rabbitm" name="rabbitm" placeholder="Enter Number of Male Rabbit" maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Female Rabbit </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="rabbitf" name="rabbitf" placeholder="Enter Number of Female Rabbit " maxlength="100"  >
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Total (Rabbit) </label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="totalrabbit" name="totalrabbit" placeholder="Enter Total Number of  Rabbit" maxlength="100"  >
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
    $('#popu-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('popu-crud-datatable') }}",
           
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'kabawm', name: 'kabawm'},
                    { data: 'kabawf', name: 'kabawf'},
                    { data: 'totalkabaw', name: 'totalkabaw' },
                    { data: 'bakam', name: 'bakam' },
                    { data: 'bakaf', name: 'bakaf' },
                    { data: 'totalbaka', name: 'totalbaka' },
                    { data: 'baboyf', name: 'baboyf' },
                    { data: 'baboym', name: 'baboym' },
                    { data: 'totalbaboy', name: 'totalbaboy' },
                    { data: 'kandingm', name: 'kandingm' },
                    { data: 'kandingf', name: 'kandingf' },
                    { data: 'totalkanding', name: 'totalkanding' },
                    { data: 'kabayom', name: 'kabayom' },
                    { data: 'kabayof', name: 'kabayof' },
                    { data: 'totalkabayo', name: 'totalkabayo' },
                    { data: 'irom', name: 'irom' },
                    { data: 'irof', name: 'irof' },
                    { data: 'totaliro', name: 'totaliro' },
                    { data: 'manokf', name: 'manokf' },
                    { data: 'manokm', name: 'manokm' },
                    { data: 'totalmanok', name: 'totalmanok' },
                    { data: 'bebem', name: 'bebem' },
                    { data: 'bebef', name: 'bebef' },
                    { data: 'totalbebe', name: 'totalbebe' },
                    { data: 'quailm', name: 'quailm' },
                    { data: 'quailf', name: 'quailf' },
                    { data: 'totalquail', name: 'totalquail' },
                    { data: 'broilerm', name: 'broilerm' },
                    { data: 'broilerf', name: 'broilerf' },
                    { data: 'totalbroiler', name: 'totalbroiler' },
                    { data: 'rabbitm', name: 'rabbitm' },
                    { data: 'rabbitf', name: 'rabbitf' },
                    { data: 'totalrabbit', name: 'totalrabbit' },
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
 
       $('#PopuForm').trigger("reset");
       $('#PopuModal').html("Add ");
       $('#popu-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-popu') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#PopuModal').html("Edit ");
          $('#popu-modal').modal('show');
          $('#id').val(res.id);
          $('#name').val(res.name);
        $('#kabawm').val(res.kabawm);
        $('#kabawf').val(res.kabawf);
        $('#totalkabaw').val(res.totalkabaw);
        $('#bakam').val(res.bakam);
        $('#bakaf').val(res.bakaf);
        $('#totalbaka').val(res.totalbaka);
        $('#baboyf').val(res.baboyf);
        $('#baboym').val(res.baboym);
        $('#totalbaboy').val(res.totalbaboy);
        $('#kandingm').val(res.kandingm);
        $('#kandingf').val(res.kandingf);
        $('#totalkanding').val(res.totalkanding);
        $('#kabayom').val(res.kabayom);
        $('#kabayof').val(res.kabayof);
        $('#totalkabayo').val(res.totalkabayo);
        $('#irom').val(res.irom);
        $('#irof').val(res.irof);
        $('#totaliro').val(res.totaliro);
        $('#manokf').val(res.manokf);
        $('#manokm').val(res.manokm);
        $('#totalmanok').val(res.totalmanok);
        $('#bebem').val(res.bebem);
        $('#bebef').val(res.bebef);
        $('#totalbebe').val(res.totalbebe);
        $('#quailm').val(res.quailm);
        $('#quailf').val(res.quailf);
        $('#totalquail').val(res.totalquail);
        $('#broilerm').val(res.broilerm);
        $('#broilerf').val(res.broilerf);
        $('#totalbroiler').val(res.totalbroiler);
        $('#rabbitm').val(res.rabbitm);
        $('#rabbitf').val(res.rabbitf);
        $('#totalrabbit').val(res.totalrabbit);

       }
    });
  }  
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-popu') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#popu-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#PopuForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-popu')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#popu-modal").modal('hide');
          var oTable = $('#popu-crud-datatable').dataTable();
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
        const kabawmInput = document.getElementById('kabawm');
        const kabawfInput = document.getElementById('kabawf');
        const totalkabawInput = document.getElementById('totalkabaw');

        // Function to update the total
        function updateTotalkabaw() {
            const kabawmValue = parseInt(kabawmInput.value) || 0;
            const kabawfValue = parseInt(kabawfInput.value) || 0;
            const total = kabawmValue + kabawfValue;
            totalkabawInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        kabawmInput.addEventListener('input', updateTotalkabaw);
        kabawfInput.addEventListener('input', updateTotalkabaw);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const bakamInput = document.getElementById('bakam');
        const bakafInput = document.getElementById('bakaf');
        const totalbakaInput = document.getElementById('totalbaka');

        // Function to update the total
        function updateTotalbaka() {
            const bakamValue = parseInt(bakamInput.value) || 0;
            const bakafValue = parseInt(bakafInput.value) || 0;
            const total = bakamValue + bakafValue;
            totalbakaInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        bakamInput.addEventListener('input', updateTotalbaka);
        bakafInput.addEventListener('input', updateTotalbaka);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const baboyfInput = document.getElementById('baboyf');
        const baboymInput = document.getElementById('baboym');
        const totalbaboyInput = document.getElementById('totalbaboy');

        // Function to update the total
        function updateTotalbaboy() {
            const baboyfValue = parseInt(baboyfInput.value) || 0;
            const baboymValue = parseInt(baboymInput.value) || 0;
            const total = baboyfValue + baboymValue;
            totalbaboyInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        baboyfInput.addEventListener('input', updateTotalbaboy);
        baboymInput.addEventListener('input', updateTotalbaboy);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const kandingmInput = document.getElementById('kandingm');
        const kandingfInput = document.getElementById('kandingf');
        const totalkandingInput = document.getElementById('totalkanding');

        // Function to update the total
        function updateTotalkanding() {
            const kandingmValue = parseInt(kandingmInput.value) || 0;
            const kandingfValue = parseInt(kandingfInput.value) || 0;
            const total = kandingmValue + kandingfValue;
            totalkandingInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        kandingmInput.addEventListener('input', updateTotalkanding);
        kandingfInput.addEventListener('input', updateTotalkanding);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const kabayomInput = document.getElementById('kabayom');
        const kabayofInput = document.getElementById('kabayof');
        const totalkabayoInput = document.getElementById('totalkabayo');

        // Function to update the total
        function updateTotalkabayo() {
            const kabayomValue = parseInt(kabayomInput.value) || 0;
            const kabayofValue = parseInt(kabayofInput.value) || 0;
            const total = kabayomValue + kabayofValue;
            totalkabayoInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        kabayomInput.addEventListener('input', updateTotalkabayo);
        kabayofInput.addEventListener('input', updateTotalkabayo);
    });

    document.addEventListener("DOMContentLoaded", function() {
    const iromInput = document.getElementById('irom');
        const irofInput = document.getElementById('irof');
        const totaliroInput = document.getElementById('totaliro');

        // Function to update the total
        function updateTotaliro() {
            const iromValue = parseInt(iromInput.value) || 0;
            const irofValue = parseInt(irofInput.value) || 0;
            const total = iromValue + irofValue;
            totaliroInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        iromInput.addEventListener('input', updateTotaliro);
        irofInput.addEventListener('input', updateTotaliro);
    });

     document.addEventListener("DOMContentLoaded", function() {
        const manokfInput = document.getElementById('manokf');
        const manokmInput = document.getElementById('manokm');
        const totalmanokInput = document.getElementById('totalmanok');

        // Function to update the total
        function updateTotalmanok() {
            const manokfValue = parseInt(manokfInput.value) || 0;
            const manokmValue = parseInt(manokmInput.value) || 0;
            const total = manokfValue + manokmValue;
            totalmanokInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        manokfInput.addEventListener('input', updateTotalmanok);
        manokmInput.addEventListener('input', updateTotalmanok);
    });
    document.addEventListener("DOMContentLoaded", function() {
    const bebemInput = document.getElementById('bebem');
        const bebefInput = document.getElementById('bebef');
        const totalbebeInput = document.getElementById('totalbebe');

        // Function to update the total
        function updateTotalbebe() {
            const bebemValue = parseInt(bebemInput.value) || 0;
            const bebefValue = parseInt(bebefInput.value) || 0;
            const total = bebemValue + bebefValue;
            totalbebeInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        bebemInput.addEventListener('input', updateTotalbebe);
        bebefInput.addEventListener('input', updateTotalbebe);
    });
    document.addEventListener("DOMContentLoaded", function() {
    const quailmInput = document.getElementById('quailm');
        const quailfInput = document.getElementById('quailf');
        const totalquailInput = document.getElementById('totalquail');

        // Function to update the total
        function updateTotalquail() {
            const quailmValue = parseInt(quailmInput.value) || 0;
            const quailfValue = parseInt(quailfInput.value) || 0;
            const total = quailmValue + quailfValue;
            totalquailInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        quailmInput.addEventListener('input', updateTotalquail);
        quailfInput.addEventListener('input', updateTotalquail);
    });

    document.addEventListener("DOMContentLoaded", function() {
    const broilermInput = document.getElementById('broilerm');
        const broilerfInput = document.getElementById('broilerf');
        const totalbroilerInput = document.getElementById('totalbroiler');

        // Function to update the total
        function updateTotalbroiler() {
            const broilermValue = parseInt(broilermInput.value) || 0;
            const broilerfValue = parseInt(broilerfInput.value) || 0;
            const total = broilermValue + broilerfValue;
            totalbroilerInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        broilermInput.addEventListener('input', updateTotalbroiler);
        broilerfInput.addEventListener('input', updateTotalbroiler);
    });

    document.addEventListener("DOMContentLoaded", function() {
    const rabbitmInput = document.getElementById('rabbitm');
        const rabbitfInput = document.getElementById('rabbitf');
        const totalrabbitInput = document.getElementById('totalrabbit');

        // Function to update the total
        function updateTotalrabbit() {
            const rabbitmValue = parseInt(rabbitmInput.value) || 0;
            const rabbitfValue = parseInt(rabbitfInput.value) || 0;
            const total = rabbitmValue + rabbitfValue;
            totalrabbitInput.value = total;
        }

        // Add input event listeners to both 'bearing' and 'non-bearing' inputs
        rabbitmInput.addEventListener('input', updateTotalrabbit);
        rabbitfInput.addEventListener('input', updateTotalrabbit);
    });
</script>


</html>