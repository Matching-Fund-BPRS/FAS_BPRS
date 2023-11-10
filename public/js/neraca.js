let neracaForm = document.getElementById('neraca_form');
//fomrat 100.000 to 100000
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
let input =[
  'kas',
  'piutang_dagang',
  'persediaan',
  'tanah',
  'gedung',
  'penyusutan_gedung',
  'peralatan',
  'penyusutan_peralatan',
  'hutang_jangka_panjang',
 'hutang_jangka_pendek',
 'laba_ditahan',
 'laba_berjalan',

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
  document.getElementsByName(element)[0].addEventListener('keyup', function(){
    formatInput(element);
  })
});

function neracaCount(){
  let kasValue = formatNumber(document.getElementsByName('kas')[0].value)||0;
  let piutangDagarValue = formatNumber(document.getElementsByName('piutang_dagang')[0].value)||0;
  let persediaanValue = formatNumber(document.getElementsByName('persediaan')[0].value)||0;

  let tanahValue = formatNumber(document.getElementsByName('tanah')[0].value)||0;
  let gedungValue = formatNumber(document.getElementsByName('gedung')[0].value)||0;
  let penyusutanGedungValue = formatNumber(document.getElementsByName('penyusutan_gedung')[0].value)||0;
  let peralatanValue = formatNumber(document.getElementsByName('peralatan')[0].value)||0;
  let penyusutanPeralatanValue = formatNumber(document.getElementsByName('penyusutan_peralatan')[0].value)||0;

  let hutangJangkaPendekValue = formatNumber(document.getElementsByName('hutang_jangka_pendek')[0].value)||0;
  let hutangJangkaPanjangValue = formatNumber(document.getElementsByName('hutang_jangka_panjang')[0].value)||0;


  let labaDitahanValue = formatNumber(document.getElementsByName('laba_ditahan')[0].value)||0;
  let labaBerjalanValue = formatNumber(document.getElementsByName('laba_berjalan')[0].value)||0;



  let subTotalAktivaLancarValue = kasValue + piutangDagarValue + persediaanValue;
  let subTotalAktivaTetapValue = tanahValue + gedungValue - penyusutanGedungValue + peralatanValue - penyusutanPeralatanValue; 
  let aktivaValue = subTotalAktivaLancarValue + subTotalAktivaTetapValue;
  let subTotalKewajibanValue = hutangJangkaPendekValue + hutangJangkaPanjangValue;
  let modalValue = aktivaValue - subTotalKewajibanValue - labaDitahanValue - labaBerjalanValue;
  let subTotalModalValue = modalValue + labaDitahanValue + labaBerjalanValue;
 
  let pasivaValue = subTotalKewajibanValue + subTotalModalValue;
  
  document.getElementsByName('sub_total_aktiva_lancar')[0].value = fixedFormatNumber(subTotalAktivaLancarValue);
  document.getElementsByName('sub_total_aktiva_tetap')[0].value = fixedFormatNumber(subTotalAktivaTetapValue);
  document.getElementsByName('aktiva')[0].value = fixedFormatNumber(aktivaValue);
  document.getElementsByName('sub_total_kewajiban')[0].value = fixedFormatNumber(subTotalKewajibanValue);
  document.getElementsByName('modal')[0].value = fixedFormatNumber(modalValue);
  document.getElementsByName('sub_total_modal')[0].value = fixedFormatNumber(subTotalModalValue);
  document.getElementsByName('pasiva')[0].value = fixedFormatNumber(pasivaValue);

  
}



neracaCount();
neracaForm.addEventListener('change', function(){
  neracaCount();
})