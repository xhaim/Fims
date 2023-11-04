// Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1 // Tenure 1
function handleCheckboxChange(checkbox) {
    const checkboxes = ['Owned', 'Rent', 'Tenant', 'Others'];

    checkboxes.forEach(option => {
        if (option !== checkbox) {
            document.getElementById(`${option.toLowerCase()}Checkbox`).checked = false;
        }
    });

    if (checkbox === 'Rent') {
        document.getElementById('rentYears').style.display = 'inline-block';
        document.getElementById('otherInput').style.display = 'none';
    } else if (checkbox === 'Others') {
        document.getElementById('otherInput').style.display = 'inline-block';
        document.getElementById('rentYears').style.display = 'none';
    } else {
        document.getElementById('rentYears').style.display = 'none';
        document.getElementById('otherInput').style.display = 'none';
    }
}

function setRentCheckboxValue(value) {
  const rentCheckbox = document.getElementById('rentCheckbox');
  rentCheckbox.value = 'Rent: '+value+"year(s)";
}

function setOthersCheckboxValue(value) {
  const othersCheckbox = document.getElementById('othersCheckbox');
  othersCheckbox.value = value;
}

// Tenure 2 // Tenure 2 Tenure 2 // Tenure 2 Tenure 2 // Tenure 2 Tenure 2 // Tenure 2 Tenure 2 // Tenure 2 Tenure 2 // Tenure 2

  function handleCheckboxChange2(tenure) {
  var checkboxes = document.getElementsByName('tenure2');

  checkboxes.forEach(function(checkbox) {
      if (checkbox.value !== tenure) {
          checkbox.checked = false;
      }
  });

  const rentYearsInput = document.getElementById('rentYears2');
  const otherInput = document.getElementById('otherInput2');

  if (tenure === 'Rent2' && rentYearsInput) {
      rentYearsInput.style.display = 'inline-block';
      if (otherInput) {
          otherInput.style.display = 'none';
      }
  } else if (tenure === 'Others2' && otherInput) {
      otherInput.style.display = 'inline-block';
      if (rentYearsInput) {
          rentYearsInput.style.display = 'none';
      }
  } else {
      if (rentYearsInput) {
          rentYearsInput.style.display = 'none';
      }
      if (otherInput) {
          otherInput.style.display = 'none';
      }
  }
}

function setRent2CheckboxValue(value) {
  const rentCheckbox2 = document.getElementById('rentCheckbox2');
  rentCheckbox2.value = 'Rent: '+value+"year(s)";
}

function setOthers2CheckboxValue(value) {
  const othersCheckbox2 = document.getElementById('othersCheckbox2');
  othersCheckbox2.value = value;
}

// Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3 // Tenure 3

function handleCheckboxChange3(tenure3) {
  var checkboxes3 = document.getElementsByName('tenure3');

  checkboxes3.forEach(function (checkbox) {
      if (checkbox.value !== tenure3) {
          checkbox.checked = false;
      }
  });

  const rentYearsInput3 = document.getElementById('rentYears3');
  const otherInput3 = document.getElementById('otherInput3');

  if (tenure3 === 'Rent3' && rentYearsInput3) {
      rentYearsInput3.style.display = 'inline-block';
      if (otherInput3) {
          otherInput3.style.display = 'none';
      }
  } else if (tenure3 === 'Others3' && otherInput3) {
      otherInput3.style.display = 'inline-block';
      if (rentYearsInput3) {
          rentYearsInput3.style.display = 'none';
      }
  } else {
      if (rentYearsInput3) {
          rentYearsInput3.style.display = 'none';
      }
      if (otherInput3) {
          otherInput3.style.display = 'none';
      }
  }
}

function setRent3CheckboxValue(value) {
  const rentCheckbox3 = document.getElementById('rentCheckbox3');
  rentCheckbox3.value = 'Rent: '+value+"year(s)";
}

function setOthers3CheckboxValue(value) {
  const othersCheckbox3 = document.getElementById('othersCheckbox3');
  othersCheckbox3.value = value;
}


// LAND TYPE HANDLER // LAND TYPE HANDLER // LAND TYPE HANDLER // LAND TYPE HANDLER // LAND TYPE HANDLER // LAND TYPE HANDLER //


function handleLandTypeChange(landType) {
  var checkboxes = document.getElementsByName('land');
  checkboxes.forEach(function(checkbox) {
      if (checkbox.value !== landType) {
          checkbox.checked = false;
      }
  });
}

function handleLandTypeChange2(landType) {
  var checkboxes = document.getElementsByName('land2');
  checkboxes.forEach(function(checkbox) {
      if (checkbox.value !== landType) {
          checkbox.checked = false;
      }
  });
}

function handleLandTypeChange3(landType) {
  var checkboxes = document.getElementsByName('land3');
  checkboxes.forEach(function(checkbox) {
      if (checkbox.value !== landType) {
          checkbox.checked = false;
      }
  });
}

function handleWaterSourceChange(WaterSource) {
  var watercheckboxes = document.getElementsByName('source');
  watercheckboxes.forEach(function(watercheckbox) {
      if (watercheckbox.value !== WaterSource) {
        watercheckbox.checked = false;
      }
  });
}

function handleWaterSourceChange2(WaterSource) {
var watercheckboxes = document.getElementsByName('source2');
watercheckboxes.forEach(function(watercheckbox) {
if (watercheckbox.value !== WaterSource) {
  watercheckbox.checked = false;
}
});
}

function handleWaterSourceChange3(WaterSource) {
var watercheckboxes = document.getElementsByName('source3');
watercheckboxes.forEach(function(watercheckbox) {
if (watercheckbox.value !== WaterSource) {
  watercheckbox.checked = false;
}
});
}