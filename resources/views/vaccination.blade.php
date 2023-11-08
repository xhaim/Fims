<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vaccination Report</title>
     
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
                <h2>Vaccination Report</h2>
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
 
        <table class="table table-bordered" id="vacc-crud-datatable">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Owner's Name</th>
                 <th>Birthday</th>
                 <th>Dog's Name</th>
                 <th>Origin</th>
                 <th>Breed</th>
                 <th>Color</th>
                 <th>Age Yr</th>
                 <th>Age Month</th>
                <th>Sex (Male)</th>
                <th>Sex(Female)</th>
                 <th>Created at</th>
                 <th>Action</th>
              </tr>
           </thead>
        </table>
 
    </div>
    
</div>
 
 
    <div class="modal fade" id="vacc-modal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="VaccModal"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="VaccForm" name="VaccForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-8 control-label"> Owner's Name </label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Enter Owner's Name" maxlength="100" required="">
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-8 control-label">Birthday</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Enter Birthday" required="">
                </div>
              </div>

              <div class="form-group">
                <label for="barangay" class="col-sm-8 control-label">Dog's Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="dog_name" name="dog_name" placeholder="Enter Dog's Name" maxlength="100" required="">
                </div>
              </div>
 
              <div class="form-group">
                <label for="origin" class="col-sm-2 control-label">Origin</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" name="origin" value="Local"  > Local
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="origin" value="Outsider"> Outsider
                  </label>
                </div>
              </div> 

              <label>
            <input type="radio" name="breed" value="mongrel" checked>
            Mongrel
        </label>
        <label>
            <input type="radio" name="breed" value="exotic">
            Exotic
        </label>

        <div id="exotic-specify" style="display: none;">
            <label for="exotic_type">Exotic Type:</label>
            <input type="text" id="exotic_type" name="exotic_type">
        </div>

              <div class="form-group">
                <label class="col-sm-8 control-label">Color</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color" >
                </div>
              </div>
              
              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Age (Yr)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="ageyr" name="ageyr" placeholder="Enter Age(Yr)"   >
                </div>
              </div>

              <div class="form-group">
                <label for="contact" class="col-sm-8 control-label">Age(Month)</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="age_month" name="age_month" placeholder="Enter Age(Month)"   >
                </div>
              </div>

              <div class="form-group">
                <label for="sex_male" class="col-sm-2 control-label">Sex(Male)</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" name="sex_male" value="Castrated"  > Castrated
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="sex_male" value="Intact"> Intact
                  </label>
                </div>
              </div> 

              <div class="form-group">
                <label for="sex_female" class="col-sm-2 control-label">Sex(Female)</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" name="sex_female" value="Spayed"  > Spayed
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="sex_female" value="Intact"> Intact
                  </label>
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
    $('#vacc-crud-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('vacc-crud-datatable') }}",
           
           columns: [
                    { data: 'id', name: 'id' },
                    { data: 'owner_name', name: 'owner_name' },
                    { data: 'birthday', name: 'birthday' },
                    { data: 'dog_name', name: 'dog_name' },
                    { data: 'origin', name: 'origin' },
                    { data: 'breed', name: 'breed' },
                    { data: 'color', name: 'color' },
                    { data: 'ageyr', name: 'ageyr' },
                    { data: 'age_month', name: 'age_month' },
                    { data: 'sex_male', name: 'sex_male' },
                    { data: 'sex_female', name: 'sex_female' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
     
  });
   
  function add(){
 
       $('#VaccForm').trigger("reset");
       $('#VaccModal').html("Add ");
       $('#vacc-modal').modal('show');
       $('#id').val('');
 
  }   
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-vacc') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#VaccModal').html("Edit ");
          $('#vacc-modal').modal('show');
          $('#id').val(res.id);
          $('#name').val(res.name);
          $('#owner_name').val(res.owner_name);
        $('#birthday').val(res.birthday);
        $('#dog_name').val(res.dog_name);
        $('#origin').val(res.origin);
        $('#breed').val(res.breed);
        $('#exotic_type').val(res.exotic_type);
        $('#color').val(res.color);
        $('#ageyr').val(res.ageyr);
        $('#age_month').val(res.age_month);
        $('#sex_male').val(res.sex_male);
        $('#sex_female').val(res.sex_female);
       }
    });
  }  
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-vacc') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#vacc-crud-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#VaccForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-vacc')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#vacc-modal").modal('hide');
          var oTable = $('#vacc-crud-datatable').dataTable();
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
  function handleCheckboxChange(checkbox) {
    const checkboxes = ['Mongrel', ' ExoticSpecify'];

    checkboxes.forEach(option => {
      if (option !== checkbox) {
        document.getElementById(`${option.toLowerCase()}Checkbox`).checked = false;
      }
    });

    if (checkbox === 'ExoticSpecify') {
      document.getElementById('otherInput').style.display = 'inline-block';
    } else {
      document.getElementById('otherInput').style.display = 'none';
    }
  }
  </script>
 <script>
        const exoticSpecifyRadio = document.querySelector('input[value="exotic"]');
        const exoticSpecifyInput = document.getElementById('exotic-specify');

        exoticSpecifyRadio.addEventListener('change', function() {
            if (exoticSpecifyRadio.checked) {
                exoticSpecifyInput.style.display = 'block';
            } else {
                exoticSpecifyInput.style.display = 'none';
            }
        });
    </script>
</html>