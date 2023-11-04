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