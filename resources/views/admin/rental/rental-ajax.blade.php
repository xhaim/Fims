<script type="text/javascript">
        
    $(document).ready( function () {
    
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#rental-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('rental-crud-datatable') }}",
              columns: [
                        { data: 'id', name: 'id' },
                        { data: 'applicant', name: 'applicant' },
                        { data: 'address', name: 'address' },
                        { data: 'location', name: 'location' },
                        { data: 'project_description', name: 'project_description' },
                        { data: 'contact', name: 'contact' },
                        { data: 'inspector', name: 'inspector' },
                        { data: 'fuel_requirement', name: 'fuel_requirement' },
                        { data: 'hours_of_operation', name: 'hours_of_operation' },
                        { data: 'equipment', name: 'equipment' },
                        { data: 'area', name: 'area' },
                        { data: 'rental_rate', name: 'rental_rate' },
                        { data: 'total_rental_amount', name: 'total_rental_amount' },
                        { data: 'payment', name: 'payment' },
                        { data: 'or_number', name: 'or_number' },
                        { data: 'payment_date', name: 'payment_date' },
                        { data: 'payment_amount', name: 'payment_amount' },
                        { data: 'municipal_treasurer', name: 'municipal_treasurer' },
                        { data: 'source_of_fund', name: 'source_of_fund' },
                        { data: 'funds_available', name: 'funds_available' },
                        { data: 'municipal_accountant', name: 'municipal_accountant' },
                        { data: 'municipal_budget_officer', name: 'municipal_budget_officer' },
                        { data: 'municipal_mayor', name: 'municipal_mayor' },
                        { data: 'schedule_of_operation', name: 'schedule_of_operation' },
                        { data: 'plate_number_tractor', name: 'plate_number_tractor' },
                        { data: 'mao_tractor_incharge', name: 'mao_tractor_incharge' },
                        { data: 'actual_land_area_served', name: 'actual_land_area_served' },
                        { data: 'actual_hours_of_operation', name: 'actual_hours_of_operation' },
                        { data: 'remarks', name: 'remarks' },
                        { data: 'mo_field_inspector', name: 'mo_field_inspector' },
                        { data: 'created_at', name: 'created_at' },
                        {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
    
     });
      
     function add(){
    
          $('#RentalForm').trigger("reset");
          $('#RentalModal').html("Add Rental Tractor");
          $('#rental-modal').modal('show');
          $('#id').val('');
    
     }   
     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-rental') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
             $('#RentalModal').html("Edit Rental Tractor");
             $('#rental-modal').modal('show');
             $('#id').val(res.id);
            $('#applicant').val(res.applicant);
            $('#address').val(res.address);
            $('#location').val(res.location);
            $('#project_description').val(res.project_description);
            $('#contact').val(res.contact);
            $('#inspector').val(res.inspector);
            $('#fuel_requirement').val(res.fuel_requirement);
            $('#hours_of_operation').val(res.hours_of_operation);

            // Checkboxes (assuming res.equipment is an array)
            $('input[type="checkbox"]').prop('checked', false); // Clear all checkboxes first
            if (Array.isArray(res.equipment)) {
            res.equipment.forEach(function (equipment) {
                $('#' + equipment).prop('checked', true); // Check the corresponding checkboxes
            });
            }

            $('#area').val(res.area);
            $('#rental_rate').val(res.rental_rate);
            $('#total_rental_amount').val(res.total_rental_amount);
            $('#payment').val(res.payment);
            $('#or_number').val(res.or_number);
            $('#payment_date').val(res.payment_date);
            $('#payment_amount').val(res.payment_amount);
            $('#municipal_treasurer').val(res.municipal_treasurer);
            $('#source_of_fund').val(res.source_of_fund);
            $('#funds_available').val(res.funds_available);
            $('#municipal_accountant').val(res.municipal_accountant);
            $('#municipal_budget_officer').val(res.municipal_budget_officer);
            $('#municipal_mayor').val(res.municipal_mayor);
            $('#schedule_of_operation').val(res.schedule_of_operation);
            $('#plate_number_tractor').val(res.plate_number_tractor);
            $('#mao_tractor_incharge').val(res.mao_tractor_incharge);
            $('#actual_land_area_served').val(res.actual_land_area_served);
            $('#actual_hours_of_operation').val(res.actual_hours_of_operation);
            $('#remarks').val(res.remarks);
            $('#mo_field_inspector').val(res.mo_field_inspector);

           }
       });
     }  
    
     function deleteFunc(id){
           if (confirm("Delete Record?") == true) {
           var id = id;
             
             // ajax
             $.ajax({
                 type:"POST",
                 url: "{{ url('delete-rental') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function(res){
    
                   var oTable = $('#rental-crud-datatable').dataTable();
                   oTable.fnDraw(false);
                }
             });
          }
     }
    
     $('#RentalForm').submit(function(e) {
    
        e.preventDefault();
      
        var formData = new FormData(this);
      
        $.ajax({
           type:'POST',
           url: "{{ url('store-rental')}}",
           data: formData,
           cache:false,
           contentType: false,
           processData: false,
           success: (data) => {
             $("#rental-modal").modal('hide');
             var oTable = $('#rental-crud-datatable').dataTable();
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