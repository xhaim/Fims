<script type="text/javascript">
        
    $(document).ready( function () {
    
     $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
       $('#registry-crud-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ url('registry-crud-datatable') }}",
              columns: [
                        { data: 'rsbsa_id', name: 'rsbsa_id'},
                        { data: 'date_enrolled', name: 'date_enrolled' },

                        // // hh 1
                        // { data: 'hh_member', name: 'hh_member', visible: false },
                        // { data: 'surname', name: 'surname', visible: false },
                        // { data: 'firstname', name: 'firstname', visible: false },
                        // { data: 'middlename', name: 'middlename', visible: false },
                        // { data: 'gender', name: 'gender', visible: false },
                        // { data: 'age', name: 'age', visible: false },
                        // { data: 'birthdate', name: 'birthdate', visible: false },
                        // // hh 2
                        // { data: 'hh_member2', name: 'hh_member2', visible: false },
                        // { data: 'surname2', name: 'surname2', visible: false },
                        // { data: 'firstname2', name: 'firstname2', visible: false },
                        // { data: 'middlename2', name: 'middlename2', visible: false },
                        // { data: 'gender2', name: 'gender2', visible: false },
                        // { data: 'age2', name: 'age2', visible: false },
                        // { data: 'birthdate2', name: 'birthdate2', visible: false },
                        // // hh 3
                        // { data: 'hh_member3', name: 'hh_member3', visible: false },
                        // { data: 'surname3', name: 'surname3', visible: false },
                        // { data: 'firstname3', name: 'firstname3', visible: false },
                        // { data: 'middlename3', name: 'middlename3', visible: false },
                        // { data: 'gender3', name: 'gender3', visible: false },
                        // { data: 'age3', name: 'age3', visible: false },
                        // { data: 'birthdate3', name: 'birthdate3', visible: false },
                        // // hh 4
                        // { data: 'hh_member4', name: 'hh_member4', visible: false },
                        // { data: 'surname4', name: 'surname4', visible: false },
                        // { data: 'firstname4', name: 'firstname4', visible: false },
                        // { data: 'middlename4', name: 'middlename4', visible: false },
                        // { data: 'gender4', name: 'gender4', visible: false },
                        // { data: 'age4', name: 'age4', visible: false },
                        // { data: 'birthdate4', name: 'birthdate4', visible: false },
                        // // hh 5
                        // { data: 'hh_member5', name: 'hh_member5', visible: false },
                        // { data: 'surname5', name: 'surname5', visible: false },
                        // { data: 'firstname5', name: 'firstname5', visible: false },
                        // { data: 'middlename5', name: 'middlename5', visible: false },
                        // { data: 'gender5', name: 'gender5', visible: false },
                        // { data: 'age5', name: 'age5', visible: false },
                        // { data: 'birthdate5', name: 'birthdate5', visible: false },
                        // // hh 6
                        // { data: 'hh_member6', name: 'hh_member6', visible: false },
                        // { data: 'surname6', name: 'surname6', visible: false },
                        // { data: 'firstname6', name: 'firstname6', visible: false },
                        // { data: 'middlename6', name: 'middlename6', visible: false },
                        // { data: 'gender6', name: 'gender6', visible: false },
                        // { data: 'age6', name: 'age6', visible: false },
                        // { data: 'birthdate6', name: 'birthdate6', visible: false },
                        // // hh 7
                        // { data: 'hh_member7', name: 'hh_member7', visible: false },
                        // { data: 'surname7', name: 'surname7', visible: false },
                        // { data: 'firstname7', name: 'firstname7', visible: false },
                        // { data: 'middlename7', name: 'middlename7', visible: false },
                        // { data: 'gender7', name: 'gender7', visible: false },
                        // { data: 'age7', name: 'age7', visible: false },
                        // { data: 'birthdate7', name: 'birthdate7', visible: false },
                        // // hh 8
                        // { data: 'hh_member8', name: 'hh_member8', visible: false },
                        // { data: 'surname8', name: 'surname8', visible: false },
                        // { data: 'firstname8', name: 'firstname8', visible: false },
                        // { data: 'middlename8', name: 'middlename8', visible: false },
                        // { data: 'gender8', name: 'gender8', visible: false },
                        // { data: 'age8', name: 'age8', visible: false },
                        // { data: 'birthdate8', name: 'birthdate8', visible: false },
                        // // hh 9
                        // { data: 'hh_member9', name: 'hh_member9', visible: false },
                        // { data: 'surname9', name: 'surname9', visible: false },
                        // { data: 'firstname9', name: 'firstname9', visible: false },
                        // { data: 'middlename9', name: 'middlename9', visible: false },
                        // { data: 'gender9', name: 'gender9', visible: false },
                        // { data: 'age9', name: 'age9', visible: false },
                        // { data: 'birthdate9', name: 'birthdate9', visible: false },
                        // // hh 10
                        // { data: 'hh_member10', name: 'hh_member10', visible: false },
                        // { data: 'surname10', name: 'surname10', visible: false },
                        // { data: 'firstname10', name: 'firstname10', visible: false },
                        // { data: 'middlename10', name: 'middlename10', visible: false },
                        // { data: 'gender10', name: 'gender10', visible: false },
                        // { data: 'age10', name: 'age10', visible: false },
                        // { data: 'birthdate10', name: 'birthdate10', visible: false },
                        // // hh 11
                        // { data: 'hh_member11', name: 'hh_member11', visible: false },
                        // { data: 'surname11', name: 'surname11', visible: false },
                        // { data: 'firstname11', name: 'firstname11', visible: false },
                        // { data: 'middlename11', name: 'middlename11', visible: false },
                        // { data: 'gender11', name: 'gender11', visible: false },
                        // { data: 'age11', name: 'age11', visible: false },
                        // { data: 'birthdate11', name: 'birthdate11', visible: false },
                        // // hh 12
                        // { data: 'hh_member12', name: 'hh_member12', visible: false },
                        // { data: 'surname12', name: 'surname12', visible: false },
                        // { data: 'firstname12', name: 'firstname12', visible: false },
                        // { data: 'middlename12', name: 'middlename12', visible: false },
                        // { data: 'gender12', name: 'gender12', visible: false },
                        // { data: 'age12', name: 'age12', visible: false },
                        // { data: 'birthdate12', name: 'birthdate12', visible: false },
                        // // hh 13
                        // { data: 'hh_member13', name: 'hh_member13', visible: false },
                        // { data: 'surname13', name: 'surname13', visible: false },
                        // { data: 'firstname13', name: 'firstname13', visible: false },
                        // { data: 'middlename13', name: 'middlename13', visible: false },
                        // { data: 'gender13', name: 'gender13', visible: false },
                        // { data: 'age13', name: 'age13', visible: false },
                        // { data: 'birthdate13', name: 'birthdate13', visible: false },
                        // // hh 14
                        // { data: 'hh_member14', name: 'hh_member14', visible: false },
                        // { data: 'surname14', name: 'surname14', visible: false },
                        // { data: 'firstname14', name: 'firstname14', visible: false },
                        // { data: 'middlename14', name: 'middlename14', visible: false },
                        // { data: 'gender14', name: 'gender14', visible: false },
                        // { data: 'age14', name: 'age14', visible: false },
                        // { data: 'birthdate14', name: 'birthdate14', visible: false },
                        // // hh 15
                        // { data: 'hh_member15', name: 'hh_member15', visible: false },
                        // { data: 'surname15', name: 'surname15', visible: false },
                        // { data: 'firstname15', name: 'firstname15', visible: false },
                        // { data: 'middlename15', name: 'middlename15', visible: false },
                        // { data: 'gender15', name: 'gender15', visible: false },
                        // { data: 'age15', name: 'age15', visible: false },
                        // { data: 'birthdate15', name: 'birthdate15', visible: false },
                        // // hh 16
                        // { data: 'hh_member16', name: 'hh_member16', visible: false },
                        // { data: 'surname16', name: 'surname16', visible: false },
                        // { data: 'firstname16', name: 'firstname16', visible: false },
                        // { data: 'middlename16', name: 'middlename16', visible: false },
                        // { data: 'gender16', name: 'gender16', visible: false },
                        // { data: 'age16', name: 'age16', visible: false },
                        // { data: 'birthdate16', name: 'birthdate16', visible: false },
                        // // hh 17
                        // { data: 'hh_member17', name: 'hh_member17', visible: false },
                        // { data: 'surname17', name: 'surname17', visible: false },
                        // { data: 'firstname17', name: 'firstname17', visible: false },
                        // { data: 'middlename17', name: 'middlename17', visible: false },
                        // { data: 'gender17', name: 'gender17', visible: false },
                        // { data: 'age17', name: 'age17', visible: false },
                        // { data: 'birthdate17', name: 'birthdate17', visible: false },
                        // // hh 18
                        // { data: 'hh_member18', name: 'hh_member18', visible: false },
                        // { data: 'surname18', name: 'surname18', visible: false },
                        // { data: 'firstname18', name: 'firstname18', visible: false },
                        // { data: 'middlename18', name: 'middlename18', visible: false },
                        // { data: 'gender18', name: 'gender18', visible: false },
                        // { data: 'age18', name: 'age18', visible: false },
                        // { data: 'birthdate18', name: 'birthdate18', visible: false },
                        // // hh 19
                        // { data: 'hh_member19', name: 'hh_member19', visible: false },
                        // { data: 'surname19', name: 'surname19', visible: false },
                        // { data: 'firstname19', name: 'firstname19', visible: false },
                        // { data: 'middlename19', name: 'middlename19', visible: false },
                        // { data: 'gender19', name: 'gender19', visible: false },
                        // { data: 'age19', name: 'age19', visible: false },
                        // { data: 'birthdate19', name: 'birthdate19', visible: false },
                        // // hh 20
                        // { data: 'hh_member20', name: 'hh_member20', visible: false },
                        // { data: 'surname20', name: 'surname20', visible: false },
                        // { data: 'firstname20', name: 'firstname20', visible: false },
                        // { data: 'middlename20', name: 'middlename20', visible: false },
                        // { data: 'gender20', name: 'gender20', visible: false },
                        // { data: 'age20', name: 'age20', visible: false },
                        // { data: 'birthdate20', name: 'birthdate20', visible: false },

                        // INCOME
                        { data: 'income_source', name: 'income_source' },
                        // { data: 'est_annual_income', name: 'est_annual_income', visible: false },
                        { data: 'address', name: 'address' },
                        { data: 'sitio_purok', name: 'sitio_purok'},
                        { data: 'barangay', name: 'barangay' },
                        // { data: 'city', name: 'city', visible: false  },
                        // { data: 'geo_coordinates', name: 'geo_coordinates', visible: false },
                        // { data: 'years_of_residency', name: 'years_of_residency', visible: false },

                        // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS // MEMBERSHIP & AFFILIATIONS //
    
                        // // M&A 1
                        // { data: 'membership', name: 'membership', visible: false },
                        // { data: 'position', name: 'position', visible: false },
                        // { data: 'member_since', name: 'member_since', visible: false },
                        // { data: 'status', name: 'status', visible: false },
                        // // M&A 2
                        // { data: 'membership2', name: 'membership2', visible: false },
                        // { data: 'position2', name: 'position2', visible: false },
                        // { data: 'member_since2', name: 'member_since2', visible: false },
                        // { data: 'status2', name: 'status2', visible: false },
                        // // M&A 3
                        // { data: 'membership3', name: 'membership3', visible: false },
                        // { data: 'position3', name: 'position3', visible: false },
                        // { data: 'member_since3', name: 'member_since3', visible: false },
                        // { data: 'status3', name: 'status3', visible: false },
                        // // M&A 4
                        // { data: 'membership4', name: 'membership4', visible: false },
                        // { data: 'position4', name: 'position4', visible: false },
                        // { data: 'member_since4', name: 'member_since4', visible: false },
                        // { data: 'status4', name: 'status4', visible: false },
                        // // M&A 5
                        // { data: 'membership5', name: 'membership5', visible: false },
                        // { data: 'position5', name: 'position5', visible: false },
                        // { data: 'member_since5', name: 'member_since5', visible: false },
                        // { data: 'status5', name: 'status5', visible: false },
                        // // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // 
    
                        // // A&C 1
                        // { data: 'award', name: 'award', visible: false },
                        // { data: 'awarding_body', name: 'awarding_body', visible: false },
                        // { data: 'date_received', name: 'date_received', visible: false },
                        // // A&C 2
                        // { data: 'award2', name: 'award2', visible: false },
                        // { data: 'awarding_body2', name: 'awarding_body2', visible: false },
                        // { data: 'date_received2', name: 'date_received2', visible: false },
                        // // A&C 3
                        // { data: 'award3', name: 'award3', visible: false },
                        // { data: 'awarding_body3', name: 'awarding_body3', visible: false },
                        // { data: 'date_received3', name: 'date_received3', visible: false },
                        // // A&C 4
                        // { data: 'award4', name: 'award4', visible: false },
                        // { data: 'awarding_body4', name: 'awarding_body4', visible: false },
                        // { data: 'date_received4', name: 'date_received4', visible: false },
                        // // A&C 5
                        // { data: 'award5', name: 'award5', visible: false },
                        // { data: 'awarding_body5', name: 'awarding_body5', visible: false },
                        // { data: 'date_received5', name: 'date_received5', visible: false },
                        // // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS // REMARKS //
    
                        // { data: 'remarks', name: 'remarks', visible: false },
                        // // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS //
    
                        // // PARTICULAR 1
                        // { data: 'purok', name: 'purok', visible: false },
                        // { data: 'brngy', name: 'brngy', visible: false },
                        // { data: 'geographic_coordinates', name: 'geographic_coordinates', visible: false },
                        // { data: 'title_no', name: 'title_no', visible: false },
                        // { data: 'tax_declaration_no', name: 'tax_declaration_no', visible: false },
                        // { data: 'tenure', name: 'tenure', visible: false },
                        // { data: 'existing_crop', name: 'existing_crop', visible: false },
                        // { data: 'previous_crop', name: 'previous_crop', visible: false },
                        // //TOPOGRAPHY
                        // { data: 'hectares', name: 'hectares', visible: false },
                        // { data: 'land', name: 'land', visible: false },
                        // { data: 'soil_type', name: 'soil_type', visible: false },
                        // { data: 'source', name: 'source', visible: false },
   
                        // // PARTICULAR 2
                        // { data: 'purok2', name: 'purok2', visible: false },
                        // { data: 'brngy2', name: 'brngy2', visible: false },
                        // { data: 'geographic_coordinates2', name: 'geographic_coordinates2', visible: false },
                        // { data: 'title_no2', name: 'title_no2', visible: false },
                        // { data: 'tax_declaration_no2', name: 'tax_declaration_no2', visible: false },
                        // { data: 'tenure2', name: 'tenure2', visible: false },
                        // { data: 'existing_crop2', name: 'existing_crop2', visible: false },
                        // { data: 'previous_crop2', name: 'previous_crop2', visible: false },
                        // //TOPOGRAPHY
                        // { data: 'hectares2', name: 'hectares2', visible: false },
                        // { data: 'land2', name: 'land2', visible: false },
                        // { data: 'soil_type2', name: 'soil_type2', visible: false },
                        // { data: 'source2', name: 'source2', visible: false },
                        
                        // // PARTICULAR 3
                        // { data: 'purok3', name: 'purok3', visible: false },
                        // { data: 'brngy3', name: 'brngy3', visible: false },
                        // { data: 'geographic_coordinates3', name: 'geographic_coordinates3', visible: false },
                        // { data: 'title_no3', name: 'title_no3', visible: false },
                        // { data: 'tax_declaration_no3', name: 'tax_declaration_no3', visible: false },
                        // { data: 'tenure3', name: 'tenure3', visible: false },
                        // { data: 'existing_crop3', name: 'existing_crop3', visible: false },
                        // { data: 'previous_crop3', name: 'previous_crop3', visible: false },
                        // //TOPOGRAPHY
                        // { data: 'hectares3', name: 'hectares3', visible: false },
                        // { data: 'land3', name: 'land3', visible: false },
                        // { data: 'soil_type3', name: 'soil_type3', visible: false },
                        // { data: 'source3', name: 'source3', visible: false },

                        // { data: 'inspector', name: 'inspector', visible: false },
                        // { data: 'created_at', name: 'created_at'},
                        {data: 'action', name: 'action', orderable: false},
                    ],
                    order: [[0, 'desc']]
          });
    
     });
      
     function add(){
    
          $('#RegistryForm').trigger("reset");
          $('#RegistryModal').html("Add registry Tractor");
          $('#registry-modal').modal('show');
          $('#id').val('');
          
          $('#hh_member').val('');
          $('#surname').val('');
          $('#firstname').val('');
          $('#middlename').val('');
          $('#gender').val('');
          $('#age').val('');
          $('#birthdate').val('');

          for (let i = 2; i <= 20; i++) {
                $(`#hh_member${i}`).val('');
                $(`#surname${i}`).val('');
                $(`#firstname${i}`).val('');
                $(`#middlename${i}`).val('');
                $(`#gender${i}`).val('');
                $(`#age${i}`).val('');
                $(`#birthdate${i}`).val('');
                $(`#hhMemberDetails${i}`).css('display', 'none');
                $(`#remove2ndMemberButton`).css('display', 'none');
                $(`#add2ndMemberButton`).css('display', 'block')                
                $(`#add3rdMemberButton`).css('display', 'none');
                $(`#remove3rdMemberButton`).css('display', 'none');
                $(`#add${i}thMemberButton`).css('display', 'none');
                $(`#remove${i}thMemberButton`).css('display', 'none');
          }
    
     }   

     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-registry') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
            
            $('#RegistryModal').html("Edit registry Tractor");
            $('#registry-modal').modal('show');

            
            $('#first_part').removeAttr('hidden');
            $('#second_modal_part').attr('hidden', 'hidden');
            $('#third_part').attr('hidden', 'hidden');
            $('#fourth_part').attr('hidden', 'hidden');
            $('#optional_part1').attr('hidden', 'hidden');
            $('#optional_part2').attr('hidden', 'hidden');

            $("#btn-next").css('display', 'block');
            $("#btn-next1").css('display', 'none');
            $("#btn-next2").css('display', 'none');
            $("#btn-next3").css('display', 'none');
            $("#btn-next4").css('display', 'none');

            $("#btn-save").css('display', 'none');

            $("#btn-back1").css('display', 'none');
            $("#btn-back2").css('display', 'none');
            $("#btn-back3").css('display', 'none');
            $("#btn-back4").css('display', 'none');
            $("#btn-back5").css('display', 'none');


            $('#id').val(res.id);
            $('#rsbsa_id').val(res.rsbsa_id);
            $('#date_enrolled').val(res.date_enrolled);

            // INCOME
            $('#income_source').val(res.income_source);
            $('#est_annual_income').val(res.est_annual_income);
            $('#address').val(res.address);
            $('#sitio_purok').val(res.sitio_purok);
            $('#barangay').val(res.barangay);
            $('#city').val(res.city);
            $('#geo_coordinates').val(res.geo_coordinates);
            $('#years_of_residency').val(res.years_of_residency);

            // ORGANIZATION
            $('#membership').val(res.membership);
            $('#position').val(res.position);
            $('#member_since').val(res.member_since);
            $('#status').val(res.status);
            
            // HH MEMBER
            $('#hh_member').val(res.hh_member);
            $('#surname').val(res.surname);
            $('#firstname').val(res.firstname);
            $('#middlename').val(res.middlename);
            $('#gender').val(res.gender);
            $('#age').val(res.age);
            $('#birthdate').val(res.birthdate);

                     
// HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS  

            const formContainer = document.getElementById('HHMEMBERS');
            memberCount = 2;
            let lastValidMemberCount = 2;
            // HH MEMBER 2-20
            for (let i = 2; i <= 20; i++) {

              
                // Check if the required data exists in the response for the current member
                if (res[`hh_member${i}`] && typeof res[`hh_member${i}`] === 'string' && res[`hh_member${i}`].trim() !== '') {
                    const newMemberDetails = document.createElement('div');
                    newMemberDetails.id = `hhMemberDetails${i}`;
                    
                    newMemberDetails.innerHTML = `
                        <h5>HH Member Details</h5>
                        <div class="form-group">
            <label for="hh_member" class="col-sm-8 control-label">HH Member</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="hh_member${i}" name="hh_member${i}" placeholder="Enter HH Member" maxlength="100" required="">
            </div>

            <div class="form-group">
            <label for="surname" class="col-sm-8 control-label">Surname</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="surname${i}" name="surname${i}" placeholder="Enter Surname" maxlength="100" required="">
            </div>
            </div>

            <div class="form-group">
            <label for="firstname" class="col-sm-8 control-label">First Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="firstname${i}" name="firstname${i}" placeholder="Enter First Name" maxlength="100" required="">
            </div>
            </div>

            <div class="form-group">
            <label for="middlename" class="col-sm-8 control-label">Middle Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="middlename${i}" name="middlename${i}" placeholder="Enter Middle Name" maxlength="100" required="">
            </div>
            </div>

            <div class="form-group">
            <label for="gender" class="col-sm-8 control-label">Gender</label>
            <div class="col-sm-12">
                <select class="form-control" id="gender${i}" name="gender${i}" required="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
            </div>
            </div>
            
            <div class="form-group">
            <label for="age" class="col-sm-8 control-label">Age</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="age${i}" name="age${i}" placeholder="Enter Age" required="">
            </div>
            </div>

            <div class="form-group">
            <label for="birthdate" class="col-sm-8 control-label">Date of Birth (mm/dd/yyyy)</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="birthdate${i}" name="birthdate${i}" placeholder="Enter Date of Birth (mm/dd/yyyy)" required="">
            </div>
            </div>
            <button class="btn-danger" type="button" onclick="removeMember(${i})">Remove Member</button>
    
        </div>
                    `;
                
                    formContainer.appendChild(newMemberDetails);
                $(`#hh_member${i}`).val(res[`hh_member${i}`]);
                $(`#surname${i}`).val(res[`surname${i}`]);
                $(`#firstname${i}`).val(res[`firstname${i}`]);
                $(`#middlename${i}`).val(res[`middlename${i}`]);
                $(`#gender${i}`).val(res[`gender${i}`]);
                $(`#age${i}`).val(res[`age${i}`]);
                $(`#birthdate${i}`).val(res[`birthdate${i}`]);
                lastValidMemberCount = i + 1; // Update lastValidMemberCount
                }
                memberCount = lastValidMemberCount;
                console.log('Value of i:', i);
                console.log('Value of memberCount:', memberCount);
                console.log('Value of LVM:', lastValidMemberCount);
            }

// ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG //
            
            const OrgformContainer = document.getElementById('MemAfDetails');
            MemAfCount = 2;
            let lastValidMemAfCount = 2;
            // HH MEMBER 2-20
            for (let m = 2; m <= 5; m++) {

              
                // Check if the required data exists in the response for the current member
                if (res[`membership${m}`] && typeof res[`membership${m}`] === 'string' && res[`membership${m}`].trim() !== '') {
                    const newMemAfDetails = document.createElement('div');
                    newMemAfDetails.id = `MemAf${m}`;
                    
                    newMemAfDetails.innerHTML = `           
                        <h5>Organization</h5>

                            <div class="form-group">
                            <label for="membership" class="col-sm-8 control-label">Name of Organizations/Clubs/Cooperative/Associations</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="membership${m}" name="membership${m}" placeholder="Enter Name of Organizations/Clubs/Cooperative/Associations" maxlength="255" >
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="position" class="col-sm-8 control-label">Position</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="position${m}" name="position${m}" placeholder="Enter Position" maxlength="255" >
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="member_since" class="col-sm-8 control-label">Member Since</label>
                            <div class="col-sm-12">
                                <input type="number"  placeholder="Enter year" min="1900" max="2100" class="form-control" id="member_since${m}" name="member_since${m}" >
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label for="status" class="col-sm-8 control-label">Status</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="status${m}" name="status${m}">
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="INACTIVE">INACTIVE</option>
                                </select>
                            </div>
                            </div>

                            <button class="btn-danger" type="button" onclick="removeMemAf(${m})">Remove Membership & Affiliation</button>
                    
                    
                    <!-- Add other form fields here -->
                      `;
                
                      OrgformContainer.appendChild(newMemAfDetails);
                $(`#membership${m}`).val(res[`membership${m}`]);
                $(`#position${m}`).val(res[`position${m}`]);
                $(`#member_since${m}`).val(res[`member_since${m}`]);
                $(`#status${m}`).val(res[`status${m}`]);
                lastValidMemAfCount = m + 1; // Update lastValidMemAfCount
                }
                MemAfCount = lastValidMemAfCount;
                console.log('Value of m:', m);
                console.log('Value of MemAfCount:', MemAfCount);
                console.log('Value of LVMA:', lastValidMemAfCount);
            }


// ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG //
            
           }
       });
     }  

     
    
     function deleteFunc(id){
           if (confirm("Delete Record?") == true) {
           var id = id;
             
             // ajax
             $.ajax({
                 type:"POST",
                 url: "{{ url('delete-registry') }}",
                 data: { id: id },
                 dataType: 'json',
                 success: function(res){
    
                   var oTable = $('#registry-crud-datatable').dataTable();
                   oTable.fnDraw(false);
                }
             });
          }
     }
    
     $('#RegistryForm').submit(function(e) {
    
        e.preventDefault();
      
        var formData = new FormData(this);
      
        $.ajax({
           type:'POST',
           url: "{{ url('store-registry')}}",
           data: formData,
           cache:false,
           contentType: false,
           processData: false,
           success: (data) => {
             $("#registry-modal").modal('hide');
             var oTable = $('#registry-crud-datatable').dataTable();
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
