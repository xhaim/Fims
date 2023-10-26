<script>
    
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
            $('#actual_land_area_of_farm').text(data.actual_land_area_of_farm);
            $('#date_inspected').text(data.date_inspected);
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