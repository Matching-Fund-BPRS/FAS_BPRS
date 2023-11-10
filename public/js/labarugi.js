let labaRugiForm = document.getElementById('laba_rugi_form')
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
 'penjualan_bersih',
 'hpp',
 'total_biaya_ops_nonops',
 'angsuran_bank_lain',
 'pendapatan_lain',
 'biaya_lain',
 'biaya_margin',
 'biaya_pajak',
 'laba_kotor',
 'laba_kotor_ops',
 'laba_bersih_operasional',
 'ebit',
 'eait',
]
function formatInput(id) {
  let inputElement = document.getElementById(id);
  
  // Save the current caret position
  let caretPosition = inputElement.selectionStart;

  let val = fixedFormatNumber(formatNumber(inputElement.value));
  
  // Update the input value
  inputElement.value = val;

  // Restore the caret position
  inputElement.setSelectionRange(caretPosition, caretPosition);
}
input.forEach(element => {
  formatInput(element);
  document.getElementById(element).addEventListener('keyup', function(){
    formatInput(element);
  })
});


function labaRugiCount(){
  let omsetValue = formatNumber(document.getElementById('penjualan_bersih').value)||0;
  let hppValue = formatNumber(document.getElementById('hpp').value)||0;

  let totalBiayaValue = formatNumber(document.getElementById('total_biaya_ops_nonops').value)||0;

  let angsuranLainValue = formatNumber(document.getElementById('angsuran_bank_lain').value)||0;

  let pendapatanLainValue = formatNumber(document.getElementById('pendapatan_lain').value)||0;
  let biayaLainValue = formatNumber(document.getElementById('biaya_lain').value)||0;

  let biayaMarginValue = formatNumber(document.getElementById('biaya_margin').value)||0;
  let biayaPajakValue = formatNumber(document.getElementById('biaya_pajak').value)||0;

  let labaKotorValue = omsetValue - hppValue;
  let labaKotorOpsValue = labaKotorValue - totalBiayaValue;
  let labaBersihOpsValue = labaKotorOpsValue - angsuranLainValue;
  let ebitValue = labaBersihOpsValue + pendapatanLainValue - biayaLainValue;
  let eaitValue = ebitValue - biayaMarginValue - biayaPajakValue;
  
  document.getElementById('laba_kotor').value = fixedFormatNumber(labaKotorValue);
  document.getElementById('laba_kotor_ops').value= fixedFormatNumber(labaKotorOpsValue);
  document.getElementById('laba_bersih_operasional').value= fixedFormatNumber(labaBersihOpsValue);
  document.getElementById('ebit').value= fixedFormatNumber(ebitValue);
  document.getElementById('eait').value= fixedFormatNumber(eaitValue);
  
}
labaRugiCount()
labaRugiForm.addEventListener('change', labaRugiCount)