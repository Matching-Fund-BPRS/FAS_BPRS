
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
  'angsuran_bulan',
  'provisi',
  'biaya_notaris',
  'administrasi',
  'biaya_asuransi',
  'biaya_materai',
  'biaya_lainnya',
  'angsuran_pokok',
  'angsuran_bunga',
  'ebit'
 ]
 function formatInput(id) {
  let inputElement = document.getElementsByName(id)[0];

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
}
 input.forEach(element => {
   formatInput(element);
   document.getElementsByName(element)[0].addEventListener('keyup', () => {
     formatInput(element);
   })
 });

 function rekomendasiCount(){
  let plafondValue = formatNumber(document.getElementsByName('plafond')[0].value)||0;
  let ebitValue = formatNumber(document.getElementsByName('ebit')[0].value)||0;
  let marginValue = parseFloat(document.getElementsByName('margin')[0].value)||0;
  let jangkaWaktuValue = parseFloat(document.getElementsByName('jangka_waktu')[0].value)||0;
  let limit_kredit = formatNumber(document.getElementsByName('plafond')[0].value)||0;
  let jenis_permohonan = document.getElementsByName('sifat')[0].value;
  console.log(limit_kredit,jenis_permohonan);
  let margin =parseInt(document.getElementsByName('margin')[0].value*formatNumber(limit_kredit) / 100)
  console.log(margin,limit_kredit,marginValue,plafondValue,jangkaWaktuValue)

  if (document.getElementsByName('tipe_angsuran')[0].value == 1){
    let angsuran = parseInt(Math.round(plafondValue / jangkaWaktuValue) + (plafondValue * marginValue / 100));

  document.getElementsByName('angsuran_bulan')[0].value = fixedFormatNumber(angsuran);
  document.getElementsByName('angsuran_pokok')[0].value = fixedFormatNumber(parseInt(formatNumber(limit_kredit) / document.getElementsByName('jangka_waktu')[0].value));
  

  document.getElementsByName('angsuran_bunga')[0].value = fixedFormatNumber(margin);
  }
  else{
    let angsuran_pmt = pmt(
      marginValue/100,
      jangkaWaktuValue,
      plafondValue,
    )
    document.getElementsByName('angsuran_bulan')[0].value = fixedFormatNumber(parseInt(angsuran_pmt));
    document.getElementsByName('angsuran_pokok')[0].value = fixedFormatNumber(parseInt(formatNumber(limit_kredit) / document.getElementsByName('jangka_waktu')[0].value));
    document.getElementsByName('angsuran_bunga')[0].value = fixedFormatNumber(margin);

  }
  
}
rekomendasiCount()
let rekomendasiForm = document.getElementById('rekomendasi_form');

rekomendasiForm.addEventListener('change', () => {
  rekomendasiCount();
})

displayInput();

function displayInput(){
  let jenis_permohonan = document.getElementsByName('sifat')[0].value;
  let input_bagi_hasil_bank = document.getElementById('input_bagi_hasil_bank')
  let input_bagi_hasil_mudharib = document.getElementById('input_bagi_hasil_mudharib')
  let input_bayar_pokok = document.getElementById('input_bayar_pokok')
  let input_ebit = document.getElementById('input_ebit')
  input_bagi_hasil_bank.style.display = 'none';
  input_bagi_hasil_mudharib.style.display = 'none';
  input_bayar_pokok.style.display = 'none';

  if (jenis_permohonan == 2 || jenis_permohonan == 3){
    input_bagi_hasil_bank.style.display = 'block';
    input_bagi_hasil_mudharib.style.display = 'block';
    input_bayar_pokok.style.display = 'block';
    input_ebit.style.display = 'block';


  }else{
    input_bagi_hasil_bank.style.display = 'none';
    input_bagi_hasil_mudharib.style.display = 'none';
    input_bayar_pokok.style.display = 'none';
    input_ebit.style.display = 'none';
  }
  
}
document.getElementById('input_bagi_hasil_bank').addEventListener('change', () => {
  document.getElementsByName('bagi_hasil_mudharib')[0].value = 100 - parseInt(document.getElementsByName('bagi_hasil_bank')[0].value);

  let basil = document.getElementsByName('bagi_hasil_bank')[0].value
  let ebit = formatNumber(document.getElementsByName('ebit')[0].value)

  let angsuran_bunga = ebit * basil / 100

  document.getElementsByName('angsuran_bunga')[0].value = fixedFormatNumber( angsuran_bunga == undefined ? 0 : angsuran_bunga)

  let margin = formatNumber(document.getElementsByName('angsuran_bunga')[0].value) / formatNumber(document.getElementsByName('plafond')[0].value) * 100

  document.getElementsByName('margin')[0].value = margin 
  
})
document.getElementsByName('sifat')[0].addEventListener('change', () => {
  displayInput();
  rekomendasiCount();
  let jenis_permohonan = document.getElementsByName('sifat')[0].value;
  if (jenis_permohonan == 2 || jenis_permohonan == 3){
   let plafondValue = formatNumber(document.getElementsByName('plafond')[0].value)||0;
   let ebitValue = formatNumber(document.getElementsByName('ebit')[0].value)||0;
   let marginValue = parseFloat(document.getElementsByName('margin')[0].value)||0;
   let jangkaWaktuValue = parseFloat(document.getElementsByName('jangka_waktu')[0].value)||0;
   let limit_kredit = formatNumber(document.getElementsByName('plafond')[0].value)||0;
   let jenis_permohonan = document.getElementsByName('sifat')[0].value;
   let basil = document.getElementsByName('bagi_hasil_bank')[0].value
   let ebit = formatNumber(document.getElementsByName('ebit')[0].value)
   let angsuran_bunga = ebit * basil / 100
 
   document.getElementsByName('angsuran_bunga')[0].value = fixedFormatNumber(parseInt(angsuran_bunga));
   document.getElementsByName('angsuran_pokok')[0].value = fixedFormatNumber(parseInt(formatNumber(limit_kredit) / document.getElementsByName('jangka_waktu')[0].value));
   document.getElementsByName('angsuran_bulan')[0].value = fixedFormatNumber(parseInt(angsuran_bunga)+parseInt(formatNumber(limit_kredit) / document.getElementsByName('jangka_waktu')[0].value));
   let margin = formatNumber(document.getElementsByName('angsuran_bunga')[0].value) / formatNumber(document.getElementsByName('plafond')[0].value) * 100
 
   document.getElementsByName('margin')[0].value = margin
 
 }
})
document.getElementsByName('angsuran_bunga')[0].addEventListener('keyup', () => {
  let limit_kredit = document.getElementsByName('plafond')[0];
  let margin =formatNumber(document.getElementsByName('angsuran_bunga')[0].value)/formatNumber(limit_kredit.value) * 100
  console.log(margin);
  document.getElementsByName('margin')[0].value = margin;

  document.getElementsByName('angsuran_pokok')[0].value = fixedFormatNumber(parseInt(formatNumber(limit_kredit.value) / document.getElementsByName('jangka_waktu')[0].value));
  let jenis_permohonan = document.getElementsByName('sifat')[0].value;
  if (jenis_permohonan == 2 || jenis_permohonan == 3){
    document.getElementsByName('bagi_hasil_bank')[0].value =formatNumber(document.getElementsByName('angsuran_bunga')[0].value) / formatNumber(document.getElementsByName('ebit')[0].value) * 100
    document.getElementsByName('bagi_hasil_mudharib')[0].value = 100 - document.getElementsByName('bagi_hasil_bank')[0].value
  }

})

document.getElementsByName('margin')[0].addEventListener('keyup', () => {
  let limit_kredit = document.getElementsByName('plafond')[0];
  let margin =document.getElementsByName('margin')[0].value*formatNumber(limit_kredit.value) / 100
  console.log(margin);
  document.getElementsByName('angsuran_bunga')[0].value = fixedFormatNumber(margin);

  document.getElementsByName('angsuran_pokok')[0].value = fixedFormatNumber(parseInt(formatNumber(limit_kredit.value) / document.getElementsByName('jangka_waktu')[0].value));
  
})

document.getElementsByName('tipe_angsuran')[0].addEventListener('change', () => {
  
});


function pmt(rate_per_period, number_of_payments, present_value, future_value, type){
  future_value = typeof future_value !== 'undefined' ? future_value : 0;
  type = typeof type !== 'undefined' ? type : 0;

if(rate_per_period != 0.0){
  // Interest rate exists
  var q = Math.pow(1 + rate_per_period, number_of_payments);
  return (rate_per_period * (future_value + (q * present_value))) / ((-1 + q) * (1 + rate_per_period * (type)));

} else if(number_of_payments != 0.0){
  // No interest rate, but number of payments exists
  return (future_value + present_value) / number_of_payments;
}

return 0;
}