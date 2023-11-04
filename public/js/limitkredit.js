
let limitKreditForm = document.getElementById('limit_kredit_form');
function limitKreditFunction(){
  let limitKreditValue = parseFloat(document.getElementById('limit_kredit').value)||0;
  let jangkaWaktuValue = parseFloat(document.getElementById('jangka_waktu').value)||0;
  let omsetValue = parseFloat(document.getElementById('omset').value)||0;
  let hppValue = parseFloat(document.getElementById('hpp').value)||0;
  let totalBiayaValue = parseFloat(document.getElementById('total_biaya').value)||0;
  let angsuranLainValue = parseFloat(document.getElementById('angsuran_lain').value)||0;
  let pendapatanLainValue = parseFloat(document.getElementById('pendapatan_lain').value)||0;
  let biayaLainValue = parseFloat(document.getElementById('biaya_lain').value)||0;
  let marginValue = parseFloat(document.getElementById('margin').value)||0;
  let biayaPajakValue = parseFloat(document.getElementById('biaya_pajak').value)||0;

  let labaKotorValue = omsetValue - hppValue;
  let labaKotorOpsValue = labaKotorValue - totalBiayaValue;
  let labaBersihOpsValue = labaKotorOpsValue - angsuranLainValue;
  let biayaMarginValue = marginValue * limitKreditValue / 100;
  let angsuranValue = limitKreditValue/jangkaWaktuValue;
  let ebitValue = labaBersihOpsValue + pendapatanLainValue - biayaLainValue;
  let eaitValue = ebitValue - biayaMarginValue - biayaPajakValue;
  let rpcValue = angsuranValue / eaitValue;

  document.getElementById('laba_kotor').value = labaKotorValue;
  document.getElementById('laba_kotor_ops').value = labaKotorOpsValue;
  document.getElementById('laba_bersih_ops').value = labaBersihOpsValue;
  document.getElementById('ebit').value = ebitValue;
  document.getElementById('eait').value = eaitValue;
  document.getElementById('rpc').value = rpcValue;
  document.getElementById('biaya_margin').value = biayaMarginValue;
  document.getElementById('angsuran').value = angsuranValue;
}
limitKreditFunction();
limitKreditForm.addEventListener('change', limitKreditFunction)