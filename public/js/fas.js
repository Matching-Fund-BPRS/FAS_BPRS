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
  let inputElement = document.querySelectorAll(`[name="${name}"]`);
  
  inputElement.forEach((element) => {
    let caretPosition = element.selectionStart;
    val = fixedFormatNumber(formatNumber(element.value));
  
    // Update the input value
    element.value = val;
  
    // Restore the caret position
    element.setSelectionRange(caretPosition, caretPosition);
  // Save the current caret position
  })
}
input.forEach(element => {
  console.log(element)
  formatInput(element);
  document.getElementsByName(element)[0].addEventListener('input', function() {
    formatInput(element);
  })
});
