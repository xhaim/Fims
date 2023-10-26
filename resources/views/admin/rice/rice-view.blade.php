<script type="text/javascript">
      
    $(document).ready( function () {
    
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#ricehybrid-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('ricehybrid-crud-datatable') }}",
              columns: [
                      
                       { data: 'rsbsa', name: 'rsbsa' },
                       { data: 'name_first', name: 'name_first' },
                       { data: 'name_middle', name: 'name_middle' },
                       { data: 'name_last', name: 'name_last' },
                       { data: 'barangay', name: 'barangay' },
                       { data: 'farm_location', name: 'farm_location' },
                       { data: 'birthdate', name: 'birthdate' },
                       { data: 'sex', name: 'sex' },
                       {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
    
     });
      
     function add(){
    
          $('#FarmersForm').trigger("reset");
          $('#FarmersModal').html("Add Farmer");
          $('#farmers-modal').modal('show');
          $('#id').val('');
    
     }   
     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-ricehybrid') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
             $('#FarmersModal').html("Edit Farmer");
             $('#farmers-modal').modal('show');
             $('#id').val(res.id);
             $('#rsbsa').val(res.rsbsa);
             $('#name_first').val(res.name_first);
             $('#name_middle').val(res.name_middle);
             $('#name_last').val(res.name_last);
             $('#barangay').val(res.barangay);
             $('#farm_location').val(res.farm_location);
             $('#birthdate').val(res.birthdate);
             $('#farm_area').val(res.farm_area);
             $('#sex').val(res.sex);
             // Checkboxes (assuming res.equipment is an array)
             $('input[type="checkbox"]').prop('checked', false); // Clear all checkboxes first
               if (Array.isArray(res.y_n)) {
               res.y_n.forEach(function (y_n) {
                   $('#' + y_n).prop('checked', true); // Check the corresponding checkboxes
               });
               }
             $('#quantity').val(res.quantity);
             $('#date_received').val(res.date_received);
          }
       });
     }  
    
     function viewFunc(id) {
       $.ajax({
           type: "GET",
           url: "{{ url('get-farmer-details') }}/" + id,
           success: function (data) {
               // Populate the modal with record details
               $("#view-rsbsa").text(data.rsbsa);
               $("#view-name").text(data.name_first + ' ' + data.name_middle + ' ' + data.name_last);
               $("#view-barangay").text(data.barangay);
               $("#view-farm_location").text(data.farm_location);
               $("#view-birthdate").text(data.birthdate);
               $("#view-farm_area").text(data.farm_area);
               $("#view-sex").text(data.sex);
               $("#view-y_n").text(data.y_n);
               $("#view-quantity").text(data.quantity);
               $("#view-date_received").text(data.date_received);
   
               // Show the modal
               $("#viewModal").modal("show");
           },
           error: function (data) {
               console.log("Error:", data);
           },
       });
   }
   
     function deleteFunc(id){
           if (confirm("Delete Record?") == true) {
           var id = id;
             
             // ajax
             $.ajax({
                 type:"POST",
                 url: "{{ url('delete-ricehybrid') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function(res){
    
                   var oTable = $('#ricehybrid-crud-datatable').dataTable();
                   oTable.fnDraw(false);
                }
             });
          }
     }
    
     $('#FarmersForm').submit(function(e) {
    
        e.preventDefault();
      
        var formData = new FormData(this);
      
        $.ajax({
           type:'POST',
           url: "{{ url('store-ricehybrid')}}",
           data: formData,
           cache:false,
           contentType: false,
           processData: false,
           success: (data) => {
             $("#farmers-modal").modal('hide');
             var oTable = $('#ricehybrid-crud-datatable').dataTable();
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
       $(document).ready(function() {
           // Add a change event listener to the farm_area input
           $('#farm_area').on('change', function() {
               // Get the entered value
               var value = $(this).val();
               
               // Check if the value is a valid decimal
               if (/^\d+(\.\d{1,2})?$/.test(value)) {
                   // Valid decimal format
                   $(this).removeClass('is-invalid'); // Remove validation styling
               } else {
                   // Invalid format
                   $(this).addClass('is-invalid'); // Add validation styling
               }
           });
       });
   </script>
