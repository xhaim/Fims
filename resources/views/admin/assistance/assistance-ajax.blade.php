<script type="text/javascript">
     
    $(document).ready( function () {
   
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#assistance-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('assistance-crud-datatable') }}",
              columns: [
                       { data: 'rsbsa', name: 'rsbsa' },
                       { data: 'name', name: 'name' },
                       { data: 'gender', name: 'gender' },
                       { data: 'birthdate', name: 'birthdate' },
                       { data: 'created_at', name: 'created_at' },
                       {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
   
     });
     
     function add(){
   
          $('#AssistanceForm').trigger("reset");
          $('#AssistanceModal').html("Add Farmers Assistance");
          $('#assistance-modal').modal('show');
          $('#btn-save').removeAttr('hidden');
          $('#btn-save-withIMG').attr('hidden', 'hidden');

          $('#id').val('');

   
     }   
     function editFunc(id){
       
       $.ajax({
           type:"POST",
           url: "{{ url('edit-assistance') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
            $('#btn-save').attr('hidden', 'hidden');
            
            $('#btn-save-withIMG').removeAttr('hidden');

             $('#AssistanceModal').html("Edit Farmers Assistance");
             $('#assistance-modal').modal('show');
             $('#id').val(res.id);
             $('#rsbsa').val(res.rsbsa);
             $('#date').val(res.date);
             $('#timepicker').val(res.timepicker);
             $('#name').val(res.name);
             $('#gender').val(res.gender);
             $('#birthdate').val(res.birthdate);
             $('#spouse').val(res.spouse);
             $('#spouse_gender').val(res.spouse_gender);
             $('#spouse_birthdate').val(res.spouse_birthdate);
             $('#dependents').val(res.dependents);
             $('#income').val(res.income);
             $('#address').val(res.address);
             // Particulars
             $('#purok').val(res.purok);
               $('#brngy').val(res.brngy);
               $('#geographic_coordinates').val(res.geographic_coordinates);
               $('#title_no').val(res.title_no);
               $('#tax_declarration_no').val(res.tax_declarration_no);
               
   
               // Tenure Display Saved Data
   
               const tenureString = "["+res.tenure+"]";    
               const tenureArray = JSON.parse(tenureString);
               Object.freeze(tenureArray); // Freeze the Tenure array to make it a constant
   
               tenureArray.forEach(item => {
                   const checkboxId = item; // Generate checkbox ID
                   
                   if(checkboxId !== null){
                   if (checkboxId === "Owned") {
                       const checkbox = document.getElementById('ownedCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId.includes("Rent")) {
                       const checkbox = document.getElementById('rentCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                       var originalString = tenureString;
                       var strippedString = originalString.replace(/Rent: | year\(s\)/g, "");
                       var output = JSON.parse(strippedString);
                       var numberOnly = output[0].match(/\d+/);
   
                       $(`#rentYears`).val(numberOnly[0]);
                       $(`#rentCheckbox`).val('Rent: '+numberOnly[0]+"year(s)");
                       $(`#rentYears`).css('display', 'block');
   
                       console.log(numberOnly[0]);
                       console.log(strippedString); // Output: 2 year(s)
                   }
                   if (checkboxId === "Tenant") {
                       const checkbox = document.getElementById('tenantCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId.includes("Others")) {
                       const checkbox = document.getElementById('othersCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                       var originalOthersString = checkboxId;
                       var strippedOthersString = originalOthersString.replace("Others: ", "");
   
                       $('#otherInput').val(strippedOthersString);
                       $('#othersCheckbox').val(checkboxId);
                       $('#otherInput').css('display', 'block');
   
                       console.log(strippedOthersString); // Output: 
                   }
               }
               });
   
               $('#existing_crop').val(res.existing_crop);
               $('#previous_crop').val(res.previous_crop);
               $('#hectares').val(res.hectares);
               console.log(res);
   
               // Land Checkbox Edit Res
               const landString = "["+res.land+"]";    
               const landArray = JSON.parse(landString);
               Object.freeze(landArray); // Freeze the array to make it a constant
   
               landArray.forEach(item => {
                   const checkboxId = item; // Generate checkbox ID
                   
                   
                   if (checkboxId === "Flat") {
                       const checkbox = document.getElementById('flatCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "Gently Sloping") {
                       const checkbox = document.getElementById('gentlySlopingCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "Rolling or Undulating") {
                       const checkbox = document.getElementById('rollingUndulatingCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "Hilly or Steep Slopes") {
                       const checkbox = document.getElementById('hillySteepSlopesCheckbox');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
               });
   
               console.log(landArray);
   
               $('#soil_type').val(res.soil_type);
   
               const sourceString = "["+res.source+"]";    
               const sourceArray = JSON.parse(sourceString);
               Object.freeze(sourceArray); // Freeze the array to make it a constant
   
               sourceArray.forEach(item => {
                   const checkboxId = item; // Generate checkbox ID
                   
                   
                   if (checkboxId === "Irrigated") {
                       const checkbox = document.getElementById('irrigated');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "SWIP or SIS") {
                       const checkbox = document.getElementById('swip');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "Water Pump") {
                       const checkbox = document.getElementById('pump');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
                   if (checkboxId === "Rainfed") {
                       const checkbox = document.getElementById('rainfed');
                       checkbox.checked = true; // Check the checkbox if the item exists in the array
                   }
               });
   
               $(`#notes`).val(res[`notes`]);
   
             $('#intended_crop').val(res.intended_crop);
   $('#evaluation_intended_crop').val(res.evaluation_intended_crop);
   $('#target_date_intended_crop').val(res.target_date_intended_crop);
   $('#completion_date_intended_crop').val(res.completion_date_intended_crop);
   $('#servedby_intended_crop').val(res.servedby_intended_crop);
   $('#conform_intended_crop').val(res.conform_intended_crop);
   
   $('#program_applied').val(res.program_applied);
   $('#evaluation_program_applied').val(res.evaluation_program_applied);
   $('#target_date_program_applied').val(res.target_date_program_applied);
   $('#completion_date_program_applied').val(res.completion_date_program_applied);
   $('#servedby_program_applied').val(res.servedby_program_applied);
   $('#conform_program_applied').val(res.conform_program_applied);
   // Area Applied
   $('#area_applied').val(res.area_applied);
   $('#evaluation_area_applied').val(res.evaluation_area_applied);
   $('#target_date_area_applied').val(res.target_date_area_applied);
   $('#completion_date_area_applied').val(res.completion_date_area_applied);
   $('#servedby_area_applied').val(res.servedby_area_applied);
   $('#conform_area_applied').val(res.conform_area_applied);
   
   // Land Preparation
   $('#land_preparation').val(res.land_preparation);
   $('#evaluation_land_preparation').val(res.evaluation_land_preparation);
   $('#target_date_land_preparation').val(res.target_date_land_preparation);
   $('#completion_date_land_preparation').val(res.completion_date_land_preparation);
   $('#servedby_land_preparation').val(res.servedby_land_preparation);
   $('#conform_land_preparation').val(res.conform_land_preparation);
   
   // Lay Outing
   $('#lay_outing').val(res.lay_outing);
   $('#evaluation_lay_outing').val(res.evaluation_lay_outing);
   $('#target_date_lay_outing').val(res.target_date_lay_outing);
   $('#completion_date_lay_outing').val(res.completion_date_lay_outing);
   $('#servedby_lay_outing').val(res.servedby_lay_outing);
   $('#conform_lay_outing').val(res.conform_lay_outing);
   
   // Farm Development
   $('#farm_development').val(res.farm_development);
   $('#evaluation_farm_development').val(res.evaluation_farm_development);
   $('#target_date_farm_development').val(res.target_date_farm_development);
   $('#completion_date_farm_development').val(res.completion_date_farm_development);
   $('#servedby_farm_development').val(res.servedby_farm_development);
   $('#conform_farm_development').val(res.conform_farm_development);
   
   // Plowing
   $('#plowing').val(res.plowing);
   $('#evaluation_plowing').val(res.evaluation_plowing);
   $('#target_date_plowing').val(res.target_date_plowing);
   $('#completion_date_plowing').val(res.completion_date_plowing);
   $('#servedby_plowing').val(res.servedby_plowing);
   $('#conform_plowing').val(res.conform_plowing);
   
   // Harrowing
   $('#harrowing').val(res.harrowing);
   $('#evaluation_harrowing').val(res.evaluation_harrowing);
   $('#target_date_harrowing').val(res.target_date_harrowing);
   $('#completion_date_harrowing').val(res.completion_date_harrowing);
   $('#servedby_harrowing').val(res.servedby_harrowing);
   $('#conform_harrowing').val(res.conform_harrowing);
   
   // Rotavator
   $('#rotavator').val(res.rotavator);
   $('#evaluation_rotavator').val(res.evaluation_rotavator);
   $('#target_date_rotavator').val(res.target_date_rotavator);
   $('#completion_date_rotavator').val(res.completion_date_rotavator);
   $('#servedby_rotavator').val(res.servedby_rotavator);
   $('#conform_rotavator').val(res.conform_rotavator);
   
   // Seeds
   $('#seeds').val(res.seeds);
   $('#evaluation_seeds').val(res.evaluation_seeds);
   $('#target_date_seeds').val(res.target_date_seeds);
   $('#completion_date_seeds').val(res.completion_date_seeds);
   $('#servedby_seeds').val(res.servedby_seeds);
   $('#conform_seeds').val(res.conform_seeds);
   
   // Inoculant
   $('#inoculant').val(res.inoculant);
   $('#evaluation_inoculant').val(res.evaluation_inoculant);
   $('#target_date_inoculant').val(res.target_date_inoculant);
   $('#completion_date_inoculant').val(res.completion_date_inoculant);
   $('#servedby_inoculant').val(res.servedby_inoculant);
   $('#conform_inoculant').val(res.conform_inoculant);
   
   // Enrollment
   $('#enrollment').val(res.enrollment);
   $('#evaluation_enrollment').val(res.evaluation_enrollment);
   $('#target_date_enrollment').val(res.target_date_enrollment);
   $('#completion_date_enrollment').val(res.completion_date_enrollment);
   $('#servedby_enrollment').val(res.servedby_enrollment);
   $('#conform_enrollment').val(res.conform_enrollment);
   
   // Insurance Claim
   $('#insurance_claim').val(res.insurance_claim);
   $('#evaluation_insurance_claim').val(res.evaluation_insurance_claim);
   $('#target_date_insurance_claim').val(res.target_date_insurance_claim);
   $('#completion_date_insurance_claim').val(res.completion_date_insurance_claim);
   $('#servedby_insurance_claim').val(res.servedby_insurance_claim);
   $('#conform_insurance_claim').val(res.conform_insurance_claim);
   
   // Production
   $('#production').val(res.production);
   $('#evaluation_production').val(res.evaluation_production);
   $('#target_date_production').val(res.target_date_production);
   $('#completion_date_production').val(res.completion_date_production);
   $('#servedby_production').val(res.servedby_production);
   $('#conform_production').val(res.conform_production);
   
   // Fertilizer
   $('#evaluation_fertilizer').val(res.evaluation_fertilizer);
   $('#target_date_fertilizer').val(res.target_date_fertilizer);
   $('#completion_date_fertilizer').val(res.completion_date_fertilizer);
   $('#servedby_fertilizer').val(res.servedby_fertilizer);
   $('#conform_fertilizer').val(res.conform_fertilizer);
   
   // Feeding Inputs
   $('#evaluation_feeding_inputs').val(res.evaluation_feeding_inputs);
   $('#target_date_feeding_inputs').val(res.target_date_feeding_inputs);
   $('#completion_date_feeding_inputs').val(res.completion_date_feeding_inputs);
   $('#servedby_feeding_inputs').val(res.servedby_feeding_inputs);
   $('#conform_feeding_inputs').val(res.conform_feeding_inputs);
   
   // Pest Control
   $('#evaluation_pest_control').val(res.evaluation_pest_control);
   $('#target_date_pest_control').val(res.target_date_pest_control);
   $('#completion_date_pest_control').val(res.completion_date_pest_control);
   $('#servedby_pest_control').val(res.servedby_pest_control);
   $('#conform_pest_control').val(res.conform_pest_control);
   
   // Irrigation
   $('#evaluation_irrigation').val(res.evaluation_irrigation);
   $('#target_date_irrigation').val(res.target_date_irrigation);
   $('#completion_date_irrigation').val(res.completion_date_irrigation);
   $('#servedby_irrigation').val(res.servedby_irrigation);
   $('#conform_irrigation').val(res.conform_irrigation);
   
   // Post Harvest
   $('#evaluation_post_harvest').val(res.evaluation_post_harvest);
   $('#target_date_post_harvest').val(res.target_date_post_harvest);
   $('#completion_date_post_harvest').val(res.completion_date_post_harvest);
   $('#servedby_post_harvest').val(res.servedby_post_harvest);
   $('#conform_post_harvest').val(res.conform_post_harvest);
   
   // Harvester
   $('#harvester').val(res.harvester);
   $('#evaluation_harvester').val(res.evaluation_harvester);
   $('#target_date_harvester').val(res.target_date_harvester);
   $('#completion_date_harvester').val(res.completion_date_harvester);
   $('#servedby_harvester').val(res.servedby_harvester);
   $('#conform_harvester').val(res.conform_harvester);
   
   // Hauling
   $('#hauling').val(res.hauling);
   $('#evaluation_hauling').val(res.evaluation_hauling);
   $('#target_date_hauling').val(res.target_date_hauling);
   $('#completion_date_hauling').val(res.completion_date_hauling);
   $('#servedby_hauling').val(res.servedby_hauling);
   $('#conform_hauling').val(res.conform_hauling);
   
   // Drying
   $('#drying').val(res.drying);
   $('#evaluation_drying').val(res.evaluation_drying);
   $('#target_date_drying').val(res.target_date_drying);
   $('#completion_date_drying').val(res.completion_date_drying);
   $('#servedby_drying').val(res.servedby_drying);
   $('#conform_drying').val(res.conform_drying);
   
   // Milling
   $('#milling').val(res.milling);
   $('#evaluation_milling').val(res.evaluation_milling);
   $('#target_date_milling').val(res.target_date_milling);
   $('#completion_date_milling').val(res.completion_date_milling);
   $('#servedby_milling').val(res.servedby_milling);
   $('#conform_milling').val(res.conform_milling);
   
   // Grading
   $('#grading').val(res.grading);
   $('#evaluation_grading').val(res.evaluation_grading);
   $('#target_date_grading').val(res.target_date_grading);
   $('#completion_date_grading').val(res.completion_date_grading);
   $('#servedby_grading').val(res.servedby_grading);
   $('#conform_grading').val(res.conform_grading);
   
   // Marketing
   $('#marketing').val(res.marketing);
   $('#evaluation_marketing').val(res.evaluation_marketing);
   $('#target_date_marketing').val(res.target_date_marketing);
   $('#completion_date_marketing').val(res.completion_date_marketing);
   $('#servedby_marketing').val(res.servedby_marketing);
   $('#conform_marketing').val(res.conform_marketing);
   
   // Others
   $('#others').val(res.others);
   $('#evaluation_others').val(res.evaluation_others);
   $('#target_date_others').val(res.target_date_others);
   $('#completion_date_others').val(res.completion_date_others);
   $('#servedby_others').val(res.servedby_others);
   $('#conform_others').val(res.conform_others);
   
   // Notes
   $('#notes').val(res.notes);
   
            // Set image preview for imageUpload1
            if (res.imageUpload1 !== null) {
                $('#imagePreview1').attr('src',res.imageUpload1);
                $('#imageUploadData1').val(res.imageUpload1)
                $('#imagePreview1').removeClass("d-none");
            } else {
                // If there is no image, you can set a default image or hide the preview
                $('#imagePreview1').attr('src',"images/defaultimg/no_image.jpg");
                $('#imagePreview1').removeClass("d-none");
            }

            // Set image preview for imageUpload2
            if (res.imageUpload2 !== null) {
                $('#imagePreview2').attr('src',res.imageUpload2);
                $('#imageUploadData2').val(res.imageUpload2)
                $('#imagePreview2').removeClass("d-none");
            } else {
                // If there is no image, you can set a default image or hide the preview
                $('#imagePreview2').attr('src',"images/defaultimg/no_image.jpg");
                $('#imagePreview2').removeClass("d-none");
            }
   
            // Special Notes
            $('#special_notes').val(res.special_notes);  
        }
       });
     }  
   
     //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //  START ARCHIVE AJAX   //
   
   $('#assistance-archive-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('assistance-archive-datatable') }}",
           columns: [ 
                       { data: 'rsbsa', name: 'rsbsa' },
                       { data: 'name', name: 'name' },
                       { data: 'gender', name: 'gender' },
                       { data: 'birthdate', name: 'birthdate' },
                       { data: 'created_at', name: 'created_at' },
                       {data: 'action', name: 'action', orderable: false},
                    ],
                   
                   order: [[0, 'desc']]
       });
   
     function archiveFunc(id) {
         if (confirm("Archive Record?") == true) {
             // Make an AJAX request to the archive route
             $.ajax({
                 type: "POST",
                 url: "{{ url('assistance/archive') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function (response) {
                     // Handle success, e.g., show a success message
                     console.log(response.success);
                     // Optionally, you may want to refresh the data table
                     var ArcTable = $('#assistance-archive-datatable').DataTable();
                     var oTable = $('#assistance-crud-datatable').DataTable();
                     ArcTable.ajax.reload(); // Reload the DataTable
                     oTable.ajax.reload(); // Reload the DataTable
                 },
                 error: function (error) {
                     // Handle error, e.g., show an error message
                     console.error('Error archiving record:', error);
                 }
             });
         }
     } 
   
     function restoreFunc(id) {
         if (confirm("Restore Record?") == true) {
             // Make an AJAX request to the archive route
             $.ajax({
                 type: "POST",
                 url: "{{ url('assistance/restore') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function (response) {
                     // Handle success, e.g., show a success message
                     console.log(response.success);
                     // Optionally, you may want to refresh the data table
                     var ArcTable = $('#assistance-archive-datatable').DataTable();
                     var oTable = $('#assistance-crud-datatable').DataTable();
                     ArcTable.ajax.reload(); // Reload the DataTable
                     oTable.ajax.reload(); // Reload the DataTable
                 },
                 error: function (error) {
                     // Handle error, e.g., show an error message
                     console.error('Error archiving record:', error);
                 }
             });
         }
     } 
   
   
   
     function deleteFunc(id) {
         if (confirm("Delete Record?") == true) {
             // Make an AJAX request to the archive route
             $.ajax({
                 type: "POST",
                 url: "{{ url('delete-assistance') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function (response) {
                     // Handle success, e.g., show a success message
                     console.log(response.success);
                     // Optionally, you may want to refresh the data table
                     var ArcTable = $('#assistance-archive-datatable').DataTable();
                     var oTable = $('#assistance-crud-datatable').DataTable();
                     ArcTable.ajax.reload(); // Reload the DataTable
                     oTable.ajax.reload(); // Reload the DataTable
                 },
                 error: function (error) {
                     // Handle error, e.g., show an error message
                     console.error('Error archiving record:', error);
                 }
             });
         }
     } 
   
   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //  END ARCHIVE AJAX   //


    $('#btn-save').click(function() {
        var formData = new FormData($('#AssistanceForm')[0]);

        $.ajax({
            type: 'POST',
            url: "{{ url('store-assistance')}}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#assistance-modal").modal('hide');
                var oTable = $('#assistance-crud-datatable').dataTable();
                oTable.fnDraw(false);
                $("#btn-save").html('Submit');
                $("#btn-save").attr("disabled", false);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    // Manually trigger form submission when the button is clicked
    $('#btn-save').click(function() {
        $('#AssistanceForm').submit();
    });


    //   EDIT WITH IMG SUBMIT
    $('#btn-save-withIMG').click(function() {
        var formData = new FormData($('#AssistanceForm')[0]);

        $.ajax({
            type: 'POST',
            url: "{{ url('store-assistance-withIMG')}}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#assistance-modal").modal('hide');
                var oTable = $('#assistance-crud-datatable').dataTable();
                oTable.fnDraw(false);
                $("#btn-save-withIMG").html('Submit');
                $("#btn-save-withIMG").attr("disabled", false);
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    // Manually trigger form submission when the button is clicked
    $('#btn-save-withIMG').click(function() {
        $('#AssistanceForm').submit();
    });

   
   </script>
   
   <script>
     function toggleContent(contentId, triangleId) {
        var hiddenContent = document.getElementById(contentId);
        var triangleIcon = document.getElementById(triangleId);

        if (hiddenContent.classList.contains('show')) {
            // Close the content
            hiddenContent.classList.remove('show');
            triangleIcon.style.transform = 'rotate(0deg)';
        } else {
            // Open the content
            hiddenContent.classList.add('show');
            triangleIcon.style.transform = 'rotate(90deg)';

            // Calculate the scroll position to center the content vertically
            var scrollPosition = hiddenContent.offsetTop - (window.innerHeight / 2 - hiddenContent.offsetHeight / 2);

            // Smooth scroll to the opened content
            window.scrollTo({ top: scrollPosition, behavior: 'smooth' });
        }
    }
   </script>
   <script>
     function toggleDatatables() {
       var div1 = document.getElementById('MainTable');
       var div2 = document.getElementById('Archive');
       var toggleButton = document.getElementById('toggleDatatables');
   
       // Toggle the 'hidden' attribute
       if (div1.hasAttribute('hidden')) {
         div1.removeAttribute('hidden');
         div2.setAttribute('hidden', 'hidden');
         toggleButton.innerHTML = 'View Archive';
       } else {
         div1.setAttribute('hidden', 'hidden');
         div2.removeAttribute('hidden');
         toggleButton.innerHTML = 'Hide Archive';
       }
     }
   </script>
   
   <script>
     function previewImage(input, previewId) {
         var preview = document.getElementById(previewId);
         var previewContainer = document.getElementById(previewId + 'Container');
   
         // Ensure that a file is selected
         if (input.files && input.files[0]) {
             var reader = new FileReader();
   
             reader.onload = function (e) {
                 preview.src = e.target.result;
                 preview.classList.remove('d-none'); // Show the image preview
             };
   
             reader.readAsDataURL(input.files[0]);
         } else {
             preview.src = '#';
             preview.classList.add('d-none'); // Hide the image preview
         }
     }
   </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fileInput1 = document.getElementById('imageUpload1');
        var textInput1 = document.getElementById('imageUploadData1');

        // Add an event listener to the file input field
        fileInput1.addEventListener('change', function () {
            // Check if a file is selected
            if (this.files && this.files[0]) {
                // Enable the text input and set its value
                textInput1.disabled = false;
                textInput1.value = 'Not null';
            } else {
                // Disable the text input and reset its value
                textInput1.disabled = true;
                textInput1.value = '';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var fileInput2 = document.getElementById('imageUpload2');
        var textInput2 = document.getElementById('imageUploadData2');

        // Add an event listener to the file input field
        fileInput2.addEventListener('change', function () {
            // Check if a file is selected
            if (this.files && this.files[0]) {
                // Enable the text input and set its value
                textInput2.disabled = false;
                textInput2.value = 'Not null';
            } else {
                // Disable the text input and reset its value
                textInput2.disabled = true;
                textInput2S.value = '';
            }
        });
    });
</script>