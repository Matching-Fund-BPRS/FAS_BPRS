function formatNumber(amount) {
  if (amount == NaN || amount == ''){
    return 0;
  }
  // Convert the number to a string and remove points
  const formattedAmount = amount.toString().replace(/\./g, '');

  // Convert the string back to a number
  const result = parseFloat(formattedAmount);

  return result;
}

function fixedFormatNumber(amount) {
  // Convert the number to a string
  const formattedAmount = amount.toString();

  // Use a regular expression to add a dot after every three digits
  const result = formattedAmount.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

  return result;
}

let input = [
  'plafond',
  'baki_debet',
  'tunggakan'
]

function formatInput(name) {
  let inputElements = document.querySelectorAll(`[name="${name}"]`);
  
  inputElements.forEach((inputElement) => {
    // Save the current caret position
  let caretPosition = inputElement.selectionStart;

  // Get the original value before formatting
  let originalValue = inputElement.value;

  // Format the number
  let formattedValue = fixedFormatNumber(formatNumber(originalValue));

  // Calculate the difference in length between the original and formatted values
  let lengthDiff = formattedValue.length - originalValue.length;

  // Adjust the caret position
  let newCaretPosition = caretPosition + lengthDiff;

  // Update the input value
  inputElement.value = formattedValue;

  // Restore the caret position
  inputElement.setSelectionRange(newCaretPosition, newCaretPosition);
  })
}
input.forEach(element => {
  console.log(element)
  formatInput(element);
  document.getElementsByName(element)[0].addEventListener('input', function() {
    formatInput(element);
  })
});

let selects = [
  'sektor_ekonomi_bi',
  'penggunaan_bi',
  'golongan_debitur_bi',
  'sifat_bi',
  'golongan_penjamin_bi',
  'tujuan_penggunaan_bi',
  'golongan_piutang_bi',
  'sifat_plafond_bi',
  'sektor_ekonomi_sid',
  'penggunaan_sid',
  'pembiayaan_sid',
]

selects.forEach(element => {
  setupInputValidation(element, element);
})

function setupInputValidation(id, name) {
  let inputElement = document.getElementsByName(name)[0];
  let dropdownElement = document.getElementById(id);
  let previousValue = inputElement.value;

  inputElement.addEventListener('focus', function(e) {
    // Clear the input value when it gains focus
    inputElement.value = '';
    // Remove the border-red-500 class when it gains focus
    inputElement.classList.remove('border-red-500', 'focus:border-red-500');
  });

  inputElement.addEventListener('blur', function(e) {
    if (e.target.value === '') {
      e.target.value = previousValue;
    }
  });

  inputElement.addEventListener('input', function(e) {
    // Check if the value has changed
    if (e.target.value !== previousValue) {
      // Do something when the value changes
      console.log('Value changed:', e.target.value);
      // Update the previousValue for the next comparison
      previousValue = e.target.value;

      // Check if the value exists in the options
      let result = Array.from(dropdownElement.options).find(option => option.value === e.target.value);

      // Toggle classes based on the result
      if (!result) {
        inputElement.classList.add('border-red-500', 'focus:border-red-500');
      } else {
        inputElement.classList.remove('border-red-500', 'focus:border-red-500');
      }
    }
  });
}

// Usage example
