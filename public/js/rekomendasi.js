
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
 ]
 function formatInput(id) {
  let inputElement = document.getElementsByName(id)[0];
  
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
   document.getElementsByName(element)[0].addEventListener('keyup', () => {
     formatInput(element);
   })
 });

 function rekomendasiCount(){
  let plafondValue = formatNumber(document.getElementsByName('plafond')[0].value)||0;
  let marginValue = parseFloat(document.getElementsByName('margin')[0].value)||0;
  let jangkaWaktuValue = parseFloat(document.getElementsByName('jangka_waktu')[0].value)||0;

  let angsuran = Math.round(plafondValue / jangkaWaktuValue) + (plafondValue * marginValue / 100);

  document.getElementsByName('angsuran_bulan')[0].value = fixedFormatNumber(angsuran);
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
  input_bagi_hasil_bank.style.display = 'none';
  input_bagi_hasil_mudharib.style.display = 'none';
  input_bayar_pokok.style.display = 'none';

  if (jenis_permohonan == 2 || jenis_permohonan == 3){
    input_bagi_hasil_bank.style.display = 'block';
    input_bagi_hasil_mudharib.style.display = 'block';
    input_bayar_pokok.style.display = 'block';
  }else{
    input_bagi_hasil_bank.style.display = 'none';
    input_bagi_hasil_mudharib.style.display = 'none';
    input_bayar_pokok.style.display = 'none';

  }
}
document.getElementById('input_bagi_hasil_bank').addEventListener('keyup', () => {
  document.getElementsByName('bagi_hasil_mudharib')[0].value = 100 - parseInt(document.getElementsByName('bagi_hasil_bank')[0].value);
})
document.getElementsByName('sifat')[0].addEventListener('change', () => {
  displayInput();
})