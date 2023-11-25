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
                        { data: 'applicant', name: 'applicant' },
                        { data: 'address', name: 'address' },
                        { data: 'location', name: 'location' },
                        { data: 'project_description', name: 'project_description' },
                        { data: 'contact', name: 'contact' },
                        { data: 'actual_land_area_of_farm', name: 'actual_land_area_of_farm', visible: true  },
                        { data: 'date_inspected', name: 'date_inspected' , visible: true },
                        { data: 'inspector', name: 'inspector', visible: false },
                        { data: 'fuel_requirement', name: 'fuel_requirement', visible: false },
                        { data: 'hours_of_operation', name: 'hours_of_operation', visible: false },
                        { data: 'equipment', name: 'equipment', visible: false },
                        { data: 'area', name: 'area', visible: false},
                        { data: 'rental_rate', name: 'rental_rate', visible: false },
                        { data: 'total_rental_amount', name: 'total_rental_amount', visible: false },
                        { data: 'payment', name: 'payment', visible: false },
                        { data: 'or_number', name: 'or_number', visible: false },
                        { data: 'payment_date', name: 'payment_date', visible: false },
                        { data: 'payment_amount', name: 'payment_amount', visible: false },
                        { data: 'municipal_treasurer', name: 'municipal_treasurer', visible: false },
                        { data: 'source_of_fund', name: 'source_of_fund', visible: false },
                        { data: 'funds_available', name: 'funds_available', visible: false },
                        { data: 'municipal_accountant', name: 'municipal_accountant', visible: false },
                        { data: 'municipal_budget_officer', name: 'municipal_budget_officer', visible: false },
                        { data: 'municipal_mayor', name: 'municipal_mayor', visible: false },
                        { data: 'schedule_of_operation', name: 'schedule_of_operation', visible: false },
                        { data: 'plate_number_tractor', name: 'plate_number_tractor', visible: false },
                        { data: 'mao_tractor_incharge', name: 'mao_tractor_incharge', visible: false },
                        { data: 'actual_land_area_served', name: 'actual_land_area_served', visible: false },
                        { data: 'actual_hours_of_operation', name: 'actual_hours_of_operation', visible: false },
                        { data: 'remarks', name: 'remarks', visible: false },
                        { data: 'mo_field_inspector', name: 'mo_field_inspector', visible: false },
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
            $('#actual_land_area_of_farm').val(res.actual_land_area_of_farm);
            $('#date_inspected').val(res.date_inspected);
            $('#inspector').val(res.inspector);
            $('#fuel_requirement').val(res.fuel_requirement);
            $('#hours_of_operation').val(res.hours_of_operation);
            

            const equipmentString = res.equipment;    
            const equipmentArray = JSON.parse(equipmentString);
            Object.freeze(equipmentArray); // Freeze the array to make it a constant

            equipmentArray.forEach(item => {
                const checkboxId = item.toLowerCase().replace(/\s/g, '_'); // Generate checkbox ID
                const checkbox = document.getElementById(checkboxId);
                
                if (checkbox) {
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
            });

            console.log(equipmentArray);




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

            console.log(res);

           }
       });
     }  


     function viewFunc(id) {
    $.ajax({
        type: "GET",
        url: "{{ url('get-rental-details') }}/" + id,
        success: function (data) {
            // Populate the modal with record details
            $("#view-applicant").text(data.applicant);
            $("#view-address").text(data.address);
            $("#view-location").text(data.location);
            $("#view-project_description").text(data.project_description);
            $("#view-contact").text(data.contact);
            $('#view-actual_land_area_of_farm').text(data.actual_land_area_of_farm);
            $('#view-date_inspected').text(data.date_inspected);
            $("#view-inspector").text(data.inspector);
            $("#view-fuel_requirement").text(data.fuel_requirement);
            $("#view-hours_of_operation").text(data.hours_of_operation);
            $("#view-equipment").text(data.equipment);
            $("#view-area").text(data.area);
            $("#view-rental_rate").text(data.rental_rate);
            $("#view-total_rental_amount").text(data.total_rental_amount);
            $("#view-payment").text(data.payment);
            $("#view-or_number").text(data.or_number);
            $("#view-payment_date").text(data.payment_date);
            $("#view-payment_amount").text(data.payment_amount);
            $("#view-municipal_treasurer").text(data.municipal_treasurer);
            $("#view-source_of_fund").text(data.source_of_fund);
            $("#view-funds_available").text(data.funds_available);
            $("#view-municipal_accountant").text(data.municipal_accountant);
            $("#view-municipal_budget_officer").text(data.municipal_budget_officer);
            $("#view-municipal_mayor").text(data.municipal_mayor);
            $("#view-schedule_of_operation").text(data.schedule_of_operation);
            $("#view-plate_number_tractor").text(data.plate_number_tractor);
            $("#view-mao_tractor_incharge").text(data.mao_tractor_incharge);
            $("#view-actual_land_area_served").text(data.actual_land_area_served);
            $("#view-actual_hours_of_operation").text(data.actual_hours_of_operation);
            $("#view-remarks").text(data.remarks);
            $("#view-mo_field_inspector").text(data.mo_field_inspector);
            // Add more fields as needed

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
    
    // Function to check for conflicts in the schedule_of_operation field
function checkScheduleConflict(schedule) {
    var conflict = false;

    // Make an Ajax request to the server to check for conflicts
    $.ajax({
        type: 'POST',
        url: "{{ url('check-schedule-conflict')}}",
        data: { schedule: schedule },
        async: false, // Make the request synchronous to wait for the response
        success: function (response) {
            conflict = response.conflict;
        },
        error: function (error) {
            console.error('Error checking schedule conflict:', error);
            

        }
    });

    // Show an alert message if there's a conflict
    if (conflict) {
        alert('Schedule conflict detected! Please choose a different schedule.');
        $('#schedule_of_operation').val("");
    }

    return conflict; // Return true if there's a conflict, false otherwise
}

// Add an event listener for the input event on the "id" field
$(document).ready(function () {
    $('#schedule_of_operation').on('input', function () {
        var idValue = $(this).val(); // Get the value of the "id" field
        checkScheduleConflict(idValue); // Trigger the conflict check with the id value
    });
});

// Modify the form submission logic
$('#RentalForm').submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    var scheduleOfOperation = formData.get('schedule_of_operation');

    // Check for conflicts before submitting the form
    if (checkScheduleConflict(scheduleOfOperation)) {
        // If there's a conflict, do not submit the form
        return;
    }

    $.ajax({
        type: 'POST',
        url: "{{ url('store-rental')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#rental-modal").modal('hide');
            var oTable = $('#rental-crud-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save").attr("disabled", false);
        },
        error: function (data) {
            console.log(data);
        }
    });
});

    
    
   </script>

  {{-- View Modal JS SCRIPT --}}
  <script>
    var printClicked = false; // Initialize a flag variable

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        // Set the flag to true when printDiv is clicked
        printClicked = true;

        window.onafterprint = function() {
            document.body.innerHTML = originalContents;
        };

        window.print();
    }

    function closeviewModal() {
        var addRoomModal = document.getElementById("viewModal");
        addRoomModal.classList.remove('show');
        $("#viewModal").modal('hide');
        setTimeout(function() {
            var modalBackdrop = document.querySelector('.modal-backdrop.fade.show');
            if (modalBackdrop) {
                modalBackdrop.remove('show');
            }
            
            // Check if printDiv was clicked before running location.reload()
            if (printClicked) {
                location.reload();
            }
        }, 400);
    }
  </script>