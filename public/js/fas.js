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
