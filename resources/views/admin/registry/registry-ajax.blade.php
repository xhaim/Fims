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
                        { data: 'generated_id', name: 'generated_id'},
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
          $('#RegistryModal').html("Add Registry");
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
                $(`#add2ndMemberButton`).css('display', 'block');               
                $(`#add3rdMemberButton`).css('display', 'none');
                $(`#remove3rdMemberButton`).css('display', 'none');
                $(`#add${i}thMemberButton`).css('display', 'none');
                $(`#remove${i}thMemberButton`).css('display', 'none');
          }

          for (let m = 2; m <= 5; m++) {
                $(`#membership${m}`).val('');
                $(`#position${m}`).val('');
                $(`#member_since${m}`).val('');
                $(`#status${m}`).val('');
                $(`#MemAf${m}`).css('display', 'none');
          }

          for (let a = 2; a <= 5; a++) {
                $(`#award${a}`).val('');
                $(`#awarding_body${a}`).val('');
                $(`#date_received${a}`).val('');
                $(`#AwCi${a}`).css('display', 'none');
          }
    
    
     }   

     function editFunc(id){
        
       $.ajax({
           type:"POST",
           url: "{{ url('edit-registry') }}",
           data: { id: id },
           dataType: 'json',
           success: function(res){
            
            $('#RegistryModal').html("Edit Registry");
            $('#registry-modal').modal('show');

            
            $('#first_part').removeAttr('hidden');
            $('#second_modal_part').attr('hidden', 'hidden');
            $('#third_awards_part').attr('hidden', 'hidden');
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
            $('#generated_id').val(res.generated_id);
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
            // ORGANIZATION
            $('#membership').val(res.membership);
            $('#position').val(res.position);
            $('#member_since').val(res.member_since);
            $('#status').val(res.status);

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
                        <h5>Organization Details</h5>

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

                            <button class="btn-danger" type="button" id="RemMemAfBtn${m}" onclick="removeMemAf(${m})">Remove Membership & Affiliation</button>
                    
                    
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
            
// AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS 

            // ORGANIZATION
            $('#award').val(res.award);
            $('#awarding_body').val(res.awarding_body);
            $('#date_received').val(res.date_received);

            const AwCiFormContainer = document.getElementById('Awards');
            AwardsCount = 2;
            let lastValidAwardsCount = 2;
            
            for (let a = 2; a <= 5; a++) {

              
                // Check if the required data exists in the response for the current member
                if (res[`award${a}`] && typeof res[`award${a}`] === 'string' && res[`award${a}`].trim() !== '') {
                    const newAwCiDetails = document.createElement('div');
                    newAwCiDetails.id = `AwCi${a}`;
                    
                    newAwCiDetails.innerHTML = `           
                    <h5>Award Details</h5>

                    <div class="col-sm-12">
                    <h6>Awards & Citations received (if any);</h6>
                    </div>
                    <div class="form-group">
                    <label for="award" class="col-sm-8 control-label">Name of Award/Citation</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="award${AwardsCount}" name="award${AwardsCount}" placeholder="Enter Name of Award/Citation" maxlength="255" >
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="awarding_body" class="col-sm-8 control-label">Awarding Body</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="awarding_body${AwardsCount}" name="awarding_body${AwardsCount}" placeholder="Enter Awarding Body" maxlength="255" >
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="date_received" class="col-sm-8 control-label">Date Received</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="date_received${AwardsCount}" name="date_received${AwardsCount}" placeholder="Enter Date Received" maxlength="100" >
                    </div>
                    </div>
                
        
                    <button class="btn-danger" type="button" id="RemAwCiBtn${AwardsCount}" onclick="removeAwCi(${AwardsCount})">Remove Award/Citation</button>
            
                </div>
                <hr>
                <!-- Add other form fields here -->
                 `;
                
                      AwCiFormContainer.appendChild(newAwCiDetails);
                $(`#award${a}`).val(res[`award${a}`]);
                $(`#awarding_body${a}`).val(res[`awarding_body${a}`]);
                $(`#date_received${a}`).val(res[`date_received${a}`]);
                lastValidAwardsCount = a + 1; // Update lastValidAwardsCount
                }
                AwardsCount = lastValidAwardsCount;
                console.log('Value of a:', a);
                console.log('Value of AwardsCount:', AwardsCount);
                console.log('Value of LVA:', lastValidAwardsCount);
            }

            $('#remarks').val(res.remarks);

// AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS 

// PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS // PARTICULARS
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

            // Particulars 2-3
            for (let p = 2; p <= 3; p++) {
                $(`#purok${p}`).val(res[`purok${p}`]);
                $(`#brngy${p}`).val(res[`brngy${p}`]);
                $(`#geographic_coordinates${p}`).val(res[`geographic_coordinates${p}`]);
                $(`#title_no${p}`).val(res[`title_no${p}`]);
                $(`#tax_declarration_no${p}`).val(res[`tax_declarration_no${p}`]);
                $(`#tenure${p}`).val(res[`tenure${p}`]);

                // Tenure Display Saved Data

            const tenureString = "["+res[`tenure${p}`]+"]";    
            const tenureArray = JSON.parse(tenureString);
            Object.freeze(tenureArray); // Freeze the Tenure array to make it a constant

            console.log('TENUREARR',tenureArray);
            tenureArray.forEach(item => {
                const checkboxId = item; // Generate checkbox ID
                
                if(checkboxId !== null){
                if (checkboxId === "Owned") {
                    const checkbox = document.getElementById(`ownedCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId.includes("Rent")) {
                    const checkbox = document.getElementById(`rentCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                    var originalString = tenureString;
                    var strippedString = originalString.replace(/Rent: | year\(s\)/g, "");
                    var output = JSON.parse(strippedString);
                    var numberOnly = output[0].match(/\d+/);

                    $(`#rentYears${p}`).val(numberOnly[0]);
                    $(`#rentCheckbox${p}`).val('Rent: '+numberOnly[0]+"year(s)");
                    $(`#rentYears${p}`).css('display', 'block');

                    console.log(numberOnly[0]);
                    console.log(strippedString); // Output: 2 year(s)
                }
                if (checkboxId === "Tenant") {
                    const checkbox = document.getElementById(`tenantCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId.includes("Others")) {
                    const checkbox = document.getElementById(`othersCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                    var originalOthersString = checkboxId;
                    var strippedOthersString = originalOthersString.replace("Others: ", "");

                    $(`#otherInput${p}`).val(strippedOthersString);
                    $(`#othersCheckbox${p}`).val(checkboxId);
                    $(`#otherInput${p}`).css('display', 'block');

                    console.log(strippedOthersString); // Output: 
                }
            }
            });
            
                $(`#existing_crop${p}`).val(res[`existing_crop${p}`]);
                $(`#previous_crop${p}`).val(res[`previous_crop${p}`]);
                $(`#hectares${p}`).val(res[`hectares${p}`]);

            const landString = "["+res[`land${p}`]+"]";    
            const landArray = JSON.parse(landString);
            Object.freeze(landArray); // Freeze the array to make it a constant

            landArray.forEach(item => {
                const checkboxId = item; // Generate checkbox ID
                
                
                if (checkboxId === "Flat") {
                    const checkbox = document.getElementById(`flatCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "Gently Sloping") {
                    const checkbox = document.getElementById(`gentlySlopingCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "Rolling or Undulating") {
                    const checkbox = document.getElementById(`rollingUndulatingCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "Hilly or Steep Slopes") {
                    const checkbox = document.getElementById(`hillySteepSlopesCheckbox${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
            });
            
            $(`#soil_type${p}`).val(res[`soil_type${p}`]);

            const sourceString = "["+res[`source${p}`]+"]";    
            const sourceArray = JSON.parse(sourceString);
            Object.freeze(sourceArray); // Freeze the array to make it a constant

            sourceArray.forEach(item => {
                const checkboxId = item; // Generate checkbox ID
                
                
                if (checkboxId === "Irrigated") {
                    const checkbox = document.getElementById(`irrigated${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "SWIP or SIS") {
                    const checkbox = document.getElementById(`swip${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "Water Pump") {
                    const checkbox = document.getElementById(`pump${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
                if (checkboxId === "Rainfed") {
                    const checkbox = document.getElementById(`rainfed${p}`);
                    checkbox.checked = true; // Check the checkbox if the item exists in the array
                }
            });
                
                console.log('Value of p:', p);
                $(`#notes${p}`).val(res[`notes${p}`]);
            }

           }
       });
     }  

     function viewFunc(id) {
    $.ajax({
        type: "GET",
        url: "{{ url('get-registry-details') }}/" + id,
        success: function (data) {
            // // Populate the modal with record details
            $('#view-rsbsa_id').text(data.rsbsa_id);
            $('#view-date_enrolled').text(data.date_enrolled);

            // INCOME
            $('#view-income_source').text(data.income_source);
            $('#view-est_annual_income').text('PHP '+data.est_annual_income);
            $('#view-address').text(data.address);
            $('#view-sitio_purok').text(data.sitio_purok);
            $('#view-barangay').text(data.barangay);
            $('#view-city').text(data.city);
            $('#view-geo_coordinates').text(data.geo_coordinates);
            $('#view-years_of_residency').text(data.years_of_residency+' year(s)');

            // HH MEMBER
            $('#view-hh_member').text(data.hh_member);
            $('#view-surname').text(data.surname);
            $('#view-firstname').text(data.firstname);
            $('#view-middlename').text(data.middlename);
            $('#view-gender').text(data.gender);
            $('#view-age').text(data.age);
            $('#view-birthdate').text(data.birthdate);

// HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS // HHMEMBERS  

            const formContainer = document.getElementById('HHMemberView');
            memberCount = 2;
            let lastValidMemberCount = 2;
            // HH MEMBER 2-20
            for (let i = 2; i <= 20; i++) {

              
                // Check if the required data exists in the response for the current member
                if (data[`hh_member${i}`] && typeof data[`hh_member${i}`] === 'string' && data[`hh_member${i}`].trim() !== '') {
                    const newMemberDetails = document.createElement('div')
                    newMemberDetails.id = `HHMList${i}`;
                    
                    if(data[`hh_member${i}`] == ''){
                        $(`#HHMList${i}`).attr('hidden', 'hidden');
                    }

                    newMemberDetails.innerHTML = `
                    <div class="columns2">
                        <div class="column3" style="height:25px;">
                <p id="view-hh_member${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
              
            <div class="column3" style="height:25px;">
                <p id="view-surname${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
          
            <div class="column3" style="height:25px;">
                <p id="view-firstname${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
          
            <div class="column3" style="height:25px;">
                <p id="view-middlename${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
          
            <div class="column3" style="height:25px;">
                <p id="view-gender${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
          
            <div class="column3" style="height:25px;">
                <p id="view-age${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
          
            <div class="column3" style="height:25px;">
                <p id="view-birthdate${i}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
            </div>
        </div>
        </div>
                    `;
                
                    formContainer.appendChild(newMemberDetails);
                $(`#view-hh_member${i}`).text(data[`hh_member${i}`]);
                $(`#view-surname${i}`).text(data[`surname${i}`]);
                $(`#view-firstname${i}`).text(data[`firstname${i}`]);
                $(`#view-middlename${i}`).text(data[`middlename${i}`]);
                $(`#view-gender${i}`).text(data[`gender${i}`]);
                $(`#view-age${i}`).text(data[`age${i}`]);
                $(`#view-birthdate${i}`).text(data[`birthdate${i}`]);
                lastValidMemberCount = i + 1; // Update lastValidMemberCount
                }
                memberCount = lastValidMemberCount;
                console.log('Value of i:', i);
                console.log('Value of memberCount:', memberCount);
                console.log('Value of LVM:', lastValidMemberCount);
            }

// ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG //
            // ORGANIZATION
            $('#view-membership').text(data.membership);
            $('#view-position').text(data.position);
            $('#view-member_since').text(data.member_since);
            $('#view-status').text(data.status);

            const OrgformContainer = document.getElementById('ViewOrg');
            MemAfCount = 2;
            let lastValidMemAfCount = 2;
            // HH MEMBER 2-20
            for (let m = 2; m <= 5; m++) {

              
                // Check if the required data exists in the response for the current member
                if (data[`membership${m}`] && typeof data[`membership${m}`] === 'string' && data[`membership${m}`].trim() !== '') {
                    const newMemAfDetails = document.createElement('div');
                    newMemAfDetails.id = `ORGList${m}`;

                    if(data[`membership${m}`] == ''){
                        $(`#ORGList${m}`).attr('hidden', 'hidden');
                    }
                    
                    newMemAfDetails.innerHTML = `           
                    <div class="columns2" style="margin-top:0px;">
                        <div class="column3" style="height:25px;">
                            <p id="view-membership${m}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
                        </div>
                        <div class="column3" style="height:25px;">
                            <p id="view-position${m}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
                        </div>
                        <div class="column3" style="height:25px;">
                            <p id="view-member_since${m}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
                        </div>
                        <div class="column3" style="height:25px;">
                            <p id="view-status${m}" style="font-size:12px; height:1px; margin-top:-1px;"></p>
                        </div>
                    </div>
                      `;
                
                      OrgformContainer.appendChild(newMemAfDetails);
                $(`#view-membership${m}`).text(data[`membership${m}`]);
                $(`#view-position${m}`).text(data[`position${m}`]);
                $(`#view-member_since${m}`).text(data[`member_since${m}`]);
                $(`#view-status${m}`).text(data[`status${m}`]);
                lastValidMemAfCount = m + 1; // Update lastValidMemAfCount
                }
                MemAfCount = lastValidMemAfCount;
                console.log('Value of m:', m);
                console.log('Value of MemAfCount:', MemAfCount);
                console.log('Value of LVMA:', lastValidMemAfCount);
            }


// ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG // ORG //
            
// AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS 

            // ORGANIZATION
            $('#view-award').text(data.award);
            $('#view-awarding_body').text(data.awarding_body);
            $('#view-date_received').text(data.date_received);

            const AwCiString = data[`award`];
            console.log(AwCiString);
            if(AwCiString == null){
                $(`#AwardList`).attr('hidden', 'hidden');
            }

            $('#view-award2').text(data.award2);
            $('#view-awarding_body2').text(data.awarding_body2);
            $('#view-date_received2').text(data.date_received2);

            const AwCiString2 = data[`award2`];
            console.log(AwCiString2);
            if(AwCiString2 == null){
                $(`#AwardList2`).attr('hidden', 'hidden');
            }

            $('#view-award3').text(data.award3);
            $('#view-awarding_body3').text(data.awarding_body3);
            $('#view-date_received3').text(data.date_received3);

            const AwCiString3 = data[`award3`];
            console.log(AwCiString3);
            if(AwCiString3 == null){
                $(`#AwardList3`).attr('hidden', 'hidden');
            }

            $('#view-award4').text(data.award4);
            $('#view-awarding_body4').text(data.awarding_body4);
            $('#view-date_received4').text(data.date_received4);

            const AwCiString4 = data[`award4`];
            console.log(AwCiString4);
            if(AwCiString4 == null){
                $(`#AwardList4`).attr('hidden', 'hidden');
            }

            $('#view-award5').text(data.award5);
            $('#view-awarding_body5').text(data.awarding_body5);
            $('#view-date_received5').text(data.date_received5);

            const AwCiString5 = data[`award5`];
            console.log(AwCiString5);
            if(AwCiString5 == null){
                $(`#AwardList5`).attr('hidden', 'hidden');
            }


            $('#view-remarks').text(data.remarks);

// AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS // AWARDS & CITATIONS 

            // Particulars
            $('#view-FarmAddress').text("Purok " + data.purok + "," + data.brngy + "," + data.city);
            $('#view-purok').text(data.purok);
            $('#view-brngy').text(data.brngy);
            $('#view-geographic_coordinates').text(data.geographic_coordinates);
            $('#view-title_no').text(data.title_no);
            $('#view-tax_declarration_no').text(data.tax_declarration_no);
            $('#view-tenure').text(data.tenure);
            $(`#view-existing_crop`).text(data[`existing_crop`]);
            $(`#view-previous_crop`).text(data[`previous_crop`]);
            $(`#view-hectares`).text(data[`hectares`]);
            $(`#view-land_type`).text(data[`land`]);
            $(`#view-soil_type`).text(data[`soil_type`]);
            $(`#view-source`).text(data[`source`]);
            $(`#view_notes`).text(data[`notes`]);
            


            for (let p = 2; p <= 3; p++) {

                const FarmString = "Purok " + data[`purok${p}`] + "," + data[`brngy${p}`]  + "," + data.city;
                if (FarmString.includes('null')){
                    $(`#view-FarmAddress${p}`).text(" ");
                }else{
                    $(`#view-FarmAddress${p}`).text(FarmString);
                }
                
                $(`#view-purok${p}`).text(data[`purok${p}`]);
                $(`#view-brngy${p}`).text(data[`brngy${p}`]);
                $(`#view-geographic_coordinates${p}`).text(data[`geographic_coordinates${p}`]);
                $(`#view-title_no${p}`).text(data[`title_no${p}`]);
                $(`#view-tax_declarration_no${p}`).text(data[`tax_declarration_no${p}`]);

                const TenureString = data[`tenure${p}`];
                if (TenureString.includes('null')){
                    $(`#view-tenure${p}`).text(" ");
                }else{
                    $(`#view-tenure${p}`).text(TenureString);
                }

                $(`#view-existing_crop${p}`).text(data[`existing_crop${p}`]);
                $(`#view-previous_crop${p}`).text(data[`previous_crop${p}`]);
                $(`#view-hectares${p}`).text(data[`hectares${p}`]);

                const LandString = data[`land${p}`];
                if (LandString.includes('null')){
                    $(`#view-land_type${p}`).text(" ");
                }else{
                    $(`#view-land_type${p}`).text(LandString);
                }

                $(`#view-soil_type${p}`).text(data[`soil_type${p}`]);

                const SourceString = data[`source${p}`];
                if (SourceString.includes('null')){
                    $(`#view-source${p}`).text(" ");
                }else{
                    $(`#view-source${p}`).text(SourceString);
                }

                
                $(`#view_notes${p}`).text(data[`notes${p}`]);
            
            }

            $('#hhm_ownerSig').text(data.firstname + " " +data.surname);
           
            // Certification
            $('#hhm_owner').text(data.firstname + " " +data.surname);
            $('#brgny_cert').text(data.brngy);

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
