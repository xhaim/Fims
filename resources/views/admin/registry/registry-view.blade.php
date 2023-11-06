function handleCheckboxChange3(checkbox) {
    const checkboxes = ['Owned', 'Rent', 'Tenant', 'Others'];

    checkboxes.forEach(option => {
        if (option !== checkbox) {
            document.getElementById(`${option.toLowerCase()}Checkbox`).checked = false;
        }
    });

    if (checkbox === 'Rent') {
        document.getElementById('rentYears3').style.display = 'inline-block';
        document.getElementById('otherInput3').style.display = 'none';
    } else if (checkbox === 'Others') {
        document.getElementById('otherInput3').style.display = 'inline-block';
        document.getElementById('rentYears3').style.display = 'none';
    } else {
        document.getElementById('rentYears3').style.display = 'none';
        document.getElementById('otherInput3').style.display = 'none';
    }
}

function setRent3CheckboxValue(value) {
  const rentCheckbox3 = document.getElementById('rentCheckbox3');
  rentCheckbox3.value = 'Rent: '+value+"year(s)";
}

function setOthers3CheckboxValue(value) {
  const othersCheckbox3 = document.getElementById('othersCheckbox3');
  othersCheckbox3.value = 'Others: '+value;
}