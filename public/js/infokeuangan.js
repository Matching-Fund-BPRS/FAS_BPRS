let infoKeuanganForm = document.getElementById('info_keuangan_form');

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
  'omset',
  'biaya_gaji',
  'biaya_bahan_baku',
  'biaya_produksi',
  'biaya_transportasi',
  'biaya_usaha_lain',
  'biaya_rt_listrik',
  'biaya_rt_transportasi',
  'biaya_rt_sekolah',
  'biaya_rt_makan',
  'biaya_rt_pemeliharaan',
  'biaya_rt_lain',
  'angs_bank_umum',
  'angs_bpr',
  'angs_leasing',
  'angs_koperasi',
  'angs_lain',
  'pendapatan_lain',
  'biaya_angsuran_lain'
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
  console.log(element)
  formatInput(element);
  document.getElementById(element).addEventListener('keyup', function(){
    formatInput(element);
  })
});

function calculate() {
  let omset = formatNumber(document.getElementById('omset').value) || 0;
  let biayaGajiValue = formatNumber(document.getElementById('biaya_gaji').value) || 0;
  let biayaBahanValue = formatNumber(document.getElementById('biaya_bahan_baku').value) || 0;
  let biayaProduksiValue = formatNumber(document.getElementById('biaya_produksi').value) || 0;
  let biayaTransportasiValue = formatNumber(document.getElementById('biaya_transportasi').value) || 0;
  let biayaUsahaLainValue = formatNumber(document.getElementById('biaya_usaha_lain').value) || 0;
  let biayaRtListrikValue = formatNumber(document.getElementById('biaya_rt_listrik').value) || 0;
  let biayaRtTransportasiValue = formatNumber(document.getElementById('biaya_rt_transportasi').value) || 0;
  let biayaRtSekolahValue = formatNumber(document.getElementById('biaya_rt_sekolah').value) || 0;
  let biayaRtMakanValue = formatNumber(document.getElementById('biaya_rt_makan').value) || 0;
  let biayaRtPemeliharaanValue = formatNumber(document.getElementById('biaya_rt_pemeliharaan').value) || 0;
  let biayaRtLainValue = formatNumber(document.getElementById('biaya_rt_lain').value) || 0;
  let angsuranBankUmumValue = formatNumber(document.getElementById('angs_bank_umum').value) || 0;
  let angsuranBprValue = formatNumber(document.getElementById('angs_bpr').value) || 0;
  let angsuranLeasingValue = formatNumber(document.getElementById('angs_leasing').value) || 0;
  let angsuranKoperasiValue = formatNumber(document.getElementById('angs_koperasi').value) || 0;
  let angsuranLainValue = formatNumber(document.getElementById('angs_lain').value) || 0;

  let totalBiayaValue = biayaGajiValue + biayaBahanValue + biayaProduksiValue + biayaTransportasiValue + biayaUsahaLainValue;
  let totalBiayaRtValue = biayaRtListrikValue + biayaRtTransportasiValue + biayaRtSekolahValue + biayaRtMakanValue + biayaRtPemeliharaanValue + biayaRtLainValue;
  let totalAngsuranValue = angsuranBankUmumValue + angsuranBprValue + angsuranLeasingValue + angsuranKoperasiValue + angsuranLainValue;
  let labaRugiValue = omset - totalBiayaValue;

  // Update the output fields directly
  document.getElementById('total_biaya').value = fixedFormatNumber(totalBiayaValue);
  document.getElementById('total_biaya_rt').value = fixedFormatNumber(totalBiayaRtValue);
  document.getElementById('total_angsuran').value = fixedFormatNumber(totalAngsuranValue);
  document.getElementById('laba_rugi').value = fixedFormatNumber(labaRugiValue);
}
calculate();
infoKeuanganForm.addEventListener('change', calculate);
