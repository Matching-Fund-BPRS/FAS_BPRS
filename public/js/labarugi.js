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

function proyeksiLaba() {
  let penjualan_bersih = document.getElementById('penjualan_bersih');
  let hpp = document.getElementById('hpp');
  let total_biaya_ops_nonops = document.getElementById('total_biaya_ops_nonops');
  let angsuran_bank_lain = document.getElementById('angsuran_bank_lain');
  let pendapatan_lain = document.getElementById('pendapatan_lain');
  let biaya_lain = document.getElementById('biaya_lain');
  let biaya_margin = document.getElementById('biaya_margin');
  let biaya_pajak = document.getElementById('biaya_pajak');

  let laba_kotor = document.getElementById('laba_kotor');
  let laba_kotor_ops = document.getElementById('laba_kotor_ops');
  let laba_bersih_operasional = document.getElementById('laba_bersih_operasional');
  let ebit = document.getElementById('ebit');
  let eait = document.getElementById('eait');

  let nextpenjualan_bersihValue = Math.round(formatNumber(penjualan_bersih.value) * 105/100);
  let nexthppValue = Math.round(formatNumber(hpp.value) * 105/100);
  let nexttotal_biaya_ops_nonopsValue = Math.round(formatNumber(total_biaya_ops_nonops.value) * 105/100);
  let nextangsuran_bank_lainValue = Math.round(formatNumber(angsuran_bank_lain.value) * 105/100);
  let nextpendapatan_lainValue = Math.round(formatNumber(pendapatan_lain.value) * 105/100);
  let nextbiaya_lainValue = Math.round(formatNumber(biaya_lain.value) * 105/100);
  

  let nextLabaKotorValue = nextpenjualan_bersihValue - nexthppValue;
  let nextLabaKotorOpsValue = nextLabaKotorValue - nexttotal_biaya_ops_nonopsValue;
  let nextLabaBersihOpsValue = nextLabaKotorOpsValue - nextangsuran_bank_lainValue;
  let nextEbitValue = nextLabaBersihOpsValue + nextpendapatan_lainValue - nextbiaya_lainValue;
  let nextEaitValue = nextEbitValue - formatNumber(biaya_margin.value) - formatNumber(biaya_pajak.value);

  let nextPenjualanBersih = penjualan_bersih.parentElement.nextElementSibling.children[0];
  let nextHpp = hpp.parentElement.nextElementSibling.children[0];
  let nextTotalBiaya = total_biaya_ops_nonops.parentElement.nextElementSibling.children[0];
  let nextAngsuranBankLain = angsuran_bank_lain.parentElement.nextElementSibling.children[0];
  let nextPendapatanLain = pendapatan_lain.parentElement.nextElementSibling.children[0];
  let nextBiayaLain = biaya_lain.parentElement.nextElementSibling.children[0];
  let nextBiayaMargin = biaya_margin.parentElement.nextElementSibling.children[0];
  let nextBiayaPajak = biaya_pajak.parentElement.nextElementSibling.children[0];

  let nextLabaKotor = laba_kotor.parentElement.nextElementSibling.children[0];
  let nextLabaKotorOps = laba_kotor_ops.parentElement.nextElementSibling.children[0];
  let nextLabaBersihOps = laba_bersih_operasional.parentElement.nextElementSibling.children[0];
  let nextEbit = ebit.parentElement.nextElementSibling.children[0];
  let nextEait = eait.parentElement.nextElementSibling.children[0];


  nextPenjualanBersih.innerHTML = fixedFormatNumber(nextpenjualan_bersihValue);
  nextHpp.innerHTML = fixedFormatNumber(nexthppValue);
  nextTotalBiaya.innerHTML = fixedFormatNumber(nexttotal_biaya_ops_nonopsValue);
  nextAngsuranBankLain.innerHTML = fixedFormatNumber(nextangsuran_bank_lainValue);
  nextPendapatanLain.innerHTML = fixedFormatNumber(nextpendapatan_lainValue);
  nextBiayaLain.innerHTML = fixedFormatNumber(nextbiaya_lainValue);
  nextBiayaMargin.innerHTML = fixedFormatNumber(biaya_margin.value);
  nextBiayaPajak.innerHTML = fixedFormatNumber(biaya_pajak.value);

  nextLabaKotor.innerHTML = fixedFormatNumber(nextLabaKotorValue);
  nextLabaKotorOps.innerHTML = fixedFormatNumber(nextLabaKotorOpsValue);
  nextLabaBersihOps.innerHTML = fixedFormatNumber(nextLabaBersihOpsValue);
  nextEbit.innerHTML = fixedFormatNumber(nextEbitValue);
  nextEait.innerHTML = fixedFormatNumber(nextEaitValue);

  let tgl_periode = document.getElementsByName('tgl_periode')[0];
  let nexttgl_peridoer_value = tgl_periode.value;
  nexttgl_peridoer_value = nexttgl_peridoer_value.split('-');
  nexttgl_peridoer_value = nexttgl_peridoer_value[2] + '/' + nexttgl_peridoer_value[1] + '/' + (parseInt(nexttgl_peridoer_value[0])+1);
  let nextTglPeriode = tgl_periode.parentElement.nextElementSibling.children[0];
  nextTglPeriode.innerHTML = nexttgl_peridoer_value;
}

function proyeksiLaba2() {
  let penjualan_bersih = document.getElementById('penjualan_bersih');
  let hpp = document.getElementById('hpp');
  let total_biaya_ops_nonops = document.getElementById('total_biaya_ops_nonops');
  let angsuran_bank_lain = document.getElementById('angsuran_bank_lain');
  let pendapatan_lain = document.getElementById('pendapatan_lain');
  let biaya_lain = document.getElementById('biaya_lain');
  let biaya_margin = document.getElementById('biaya_margin');
  let biaya_pajak = document.getElementById('biaya_pajak');

  let laba_kotor = document.getElementById('laba_kotor');
  let laba_kotor_ops = document.getElementById('laba_kotor_ops');
  let laba_bersih_operasional = document.getElementById('laba_bersih_operasional');
  let ebit = document.getElementById('ebit');
  let eait = document.getElementById('eait');

  let nextpenjualan_bersihValue = Math.round(formatNumber(penjualan_bersih.value) * 105/100 * 105/100);
  let nexthppValue = Math.round(formatNumber(hpp.value) * 105/100 * 105/100);
  let nexttotal_biaya_ops_nonopsValue = Math.round(formatNumber(total_biaya_ops_nonops.value) * 105/100 * 105/100);
  let nextangsuran_bank_lainValue = Math.round(formatNumber(angsuran_bank_lain.value) * 105/100 * 105/100);
  let nextpendapatan_lainValue = Math.round(formatNumber(pendapatan_lain.value) * 105/100 * 105/100);
  let nextbiaya_lainValue = Math.round(formatNumber(biaya_lain.value) * 105/100 * 105/100);
  

  let nextLabaKotorValue = nextpenjualan_bersihValue - nexthppValue;
  let nextLabaKotorOpsValue = nextLabaKotorValue - nexttotal_biaya_ops_nonopsValue;
  let nextLabaBersihOpsValue = nextLabaKotorOpsValue - nextangsuran_bank_lainValue;
  let nextEbitValue = nextLabaBersihOpsValue + nextpendapatan_lainValue - nextbiaya_lainValue;
  let nextEaitValue = nextEbitValue - formatNumber(biaya_margin.value) - formatNumber(biaya_pajak.value);
  console.log( penjualan_bersih.parentElement.nextElementSibling.nextElementSibling)
  let nextPenjualanBersih = penjualan_bersih.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextHpp = hpp.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextTotalBiaya = total_biaya_ops_nonops.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextAngsuranBankLain = angsuran_bank_lain.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPendapatanLain = pendapatan_lain.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextBiayaLain = biaya_lain.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextBiayaMargin = biaya_margin.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextBiayaPajak = biaya_pajak.parentElement.nextElementSibling.nextElementSibling.children[0];

  let nextLabaKotor = laba_kotor.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextLabaKotorOps = laba_kotor_ops.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextLabaBersihOps = laba_bersih_operasional.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextEbit = ebit.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextEait = eait.parentElement.nextElementSibling.nextElementSibling.children[0];


  nextPenjualanBersih.innerHTML = fixedFormatNumber(nextpenjualan_bersihValue);
  nextHpp.innerHTML = fixedFormatNumber(nexthppValue);
  nextTotalBiaya.innerHTML = fixedFormatNumber(nexttotal_biaya_ops_nonopsValue);
  nextAngsuranBankLain.innerHTML = fixedFormatNumber(nextangsuran_bank_lainValue);
  nextPendapatanLain.innerHTML = fixedFormatNumber(nextpendapatan_lainValue);
  nextBiayaLain.innerHTML = fixedFormatNumber(nextbiaya_lainValue);
  nextBiayaMargin.innerHTML = fixedFormatNumber(biaya_margin.value);
  nextBiayaPajak.innerHTML = fixedFormatNumber(biaya_pajak.value);

  nextLabaKotor.innerHTML = fixedFormatNumber(nextLabaKotorValue);
  nextLabaKotorOps.innerHTML = fixedFormatNumber(nextLabaKotorOpsValue);
  nextLabaBersihOps.innerHTML = fixedFormatNumber(nextLabaBersihOpsValue);
  nextEbit.innerHTML = fixedFormatNumber(nextEbitValue);
  nextEait.innerHTML = fixedFormatNumber(nextEaitValue);

  let tgl_periode = document.getElementsByName('tgl_periode')[0];
  let nexttgl_peridoer_value = tgl_periode.value;
  nexttgl_peridoer_value = nexttgl_peridoer_value.split('-');
  nexttgl_peridoer_value = nexttgl_peridoer_value[2] + '/' + nexttgl_peridoer_value[1] + '/' + (parseInt(nexttgl_peridoer_value[0])+2);
  let nextTglPeriode = tgl_periode.parentElement.nextElementSibling.nextElementSibling.children[0];
  nextTglPeriode.innerHTML = nexttgl_peridoer_value;
}

proyeksiLaba();
proyeksiLaba2();