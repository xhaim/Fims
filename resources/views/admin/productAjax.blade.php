<!DOCTYPE html>
<html>
<head>
    <title>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
      
<div class="container">
    
    <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Association Name</th>
                <th>Barangay</th>
                <th>Contact Number</th>
                <th>Chairman</th>
                <th>Number of Farmers</th>
                <th>Registered-in Date</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<!-- Modal for creating/editing associations -->
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="margin-top:0px; height:50px;">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="associationForm" name="associationForm" class="form-horizontal">
                    <input type="hidden" name="association_id" id="association_id">
                    <div class="form-group">
                        <label for="association_name" class="col-sm-4 control-label">Association Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="association_name" name="association_name"  required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="barangay" class="col-sm-4 control-label">Barangay</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_number" class="col-sm-4 control-label">Contact Number</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="chairman" class="col-sm-4 control-label">Chairman</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="chairman" name="chairman" placeholder="Enter Chairman" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="number_of_farmers" class="col-sm-4 control-label">Number of Farmers</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="number_of_farmers" name="number_of_farmers" placeholder="Enter Number of Farmers" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registered_in_date" class="col-sm-4 control-label">Registered-in Date</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="registered_in_date" name="registered_in_date" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10" style="margin-top: 10px">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

      
</body>
      
<script type="text/javascript">
  $(function () {
      
    /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/ 
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      
    /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('products-ajax-crud.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'association_name', name: 'association_name'},
            {data: 'barangay', name: 'barangay'},
            {data: 'contact_number', name: 'contact_number'},
            {data: 'chairman', name: 'chairman'},
            {data: 'number_of_farmers', name: 'number_of_farmers'},
            {data: 'registered_in_date', name: 'registered_in_date'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#associationForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('#ajaxModel').modal('show');
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('products-ajax-crud.index') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#product_id').val(data.id);
          $('#association_name').val(data.association_name);
          $('#barangay').val(data.barangay);
          $('#contact_number').val(data.contact_number);
          $('#chairman').val(data.chairman);
          $('#number_of_farmers').val(data.number_of_farmers);
          $('#registered_in_date').val(data.registered_in_date);
      })
    });
      
    /*------------------------------------------
    --------------------------------------------
    Create Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#associationForm').serialize(),
          url: "{{ route('products-ajax-crud.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#associationForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
      
    /*------------------------------------------
    --------------------------------------------
    Delete Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteProduct', function () {
     
        var product_id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ route('products-ajax-crud.store') }}"+'/'+product_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
       
  });
</script>
</html>