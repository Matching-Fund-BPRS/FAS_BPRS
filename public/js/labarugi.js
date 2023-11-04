let labaRugiForm = document.getElementById('laba_rugi_form')
function labaRugiCount(){
  let omsetValue = parseFloat(document.getElementById('penjualan_bersih').value)||0;
  let hppValue = parseFloat(document.getElementById('hpp').value)||0;

  let totalBiayaValue = parseFloat(document.getElementById('total_biaya_ops_nonops').value)||0;

  let angsuranLainValue = parseFloat(document.getElementById('angsuran_bank_lain').value)||0;

  let pendapatanLainValue = parseFloat(document.getElementById('pendapatan_lain').value)||0;
  let biayaLainValue = parseFloat(document.getElementById('biaya_lain').value)||0;

  let biayaMarginValue = parseFloat(document.getElementById('biaya_margin').value)||0;
  let biayaPajakValue = parseFloat(document.getElementById('biaya_pajak').value)||0;

  let labaKotorValue = omsetValue - hppValue;
  let labaKotorOpsValue = labaKotorValue - totalBiayaValue;
  let labaBersihOpsValue = labaKotorOpsValue - angsuranLainValue;
  let ebitValue = labaBersihOpsValue + pendapatanLainValue - biayaLainValue;
  let eaitValue = ebitValue - biayaMarginValue - biayaPajakValue;
  
  document.getElementById('laba_kotor').value = labaKotorValue;
  document.getElementById('laba_kotor_ops').value = labaKotorOpsValue;
  document.getElementById('laba_bersih_operasional').value = labaBersihOpsValue;
  document.getElementById('ebit').value = ebitValue;
  document.getElementById('eait').value = eaitValue;
  
}
labaRugiCount()
labaRugiForm.addEventListener('change', labaRugiCount)