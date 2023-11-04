let infoKeuanganForm = document.getElementById('info_keuangan_form');
function calculate() {
  let omset = parseFloat(document.getElementById('omset').value) || 0;
  let biayaGajiValue = parseFloat(document.getElementById('biaya_gaji').value) || 0;
  let biayaBahanValue = parseFloat(document.getElementById('biaya_bahan_baku').value) || 0;
  let biayaProduksiValue = parseFloat(document.getElementById('biaya_produksi').value) || 0;
  let biayaTransportasiValue = parseFloat(document.getElementById('biaya_transportasi').value) || 0;
  let biayaUsahaLainValue = parseFloat(document.getElementById('biaya_usaha_lain').value) || 0;
  let biayaRtListrikValue = parseFloat(document.getElementById('biaya_rt_listrik').value) || 0;
  let biayaRtTransportasiValue = parseFloat(document.getElementById('biaya_rt_transportasi').value) || 0;
  let biayaRtSekolahValue = parseFloat(document.getElementById('biaya_rt_sekolah').value) || 0;
  let biayaRtMakanValue = parseFloat(document.getElementById('biaya_rt_makan').value) || 0;
  let biayaRtPemeliharaanValue = parseFloat(document.getElementById('biaya_rt_pemeliharaan').value) || 0;
  let biayaRtLainValue = parseFloat(document.getElementById('biaya_rt_lain').value) || 0;
  let angsuranBankUmumValue = parseFloat(document.getElementById('angs_bank_umum').value) || 0;
  let angsuranBprValue = parseFloat(document.getElementById('angs_bpr').value) || 0;
  let angsuranLeasingValue = parseFloat(document.getElementById('angs_leasing').value) || 0;
  let angsuranKoperasiValue = parseFloat(document.getElementById('angs_koperasi').value) || 0;
  let angsuranLainValue = parseFloat(document.getElementById('angs_lain').value) || 0;

  let totalBiayaValue = biayaGajiValue + biayaBahanValue + biayaProduksiValue + biayaTransportasiValue + biayaUsahaLainValue;
  let totalBiayaRtValue = biayaRtListrikValue + biayaRtTransportasiValue + biayaRtSekolahValue + biayaRtMakanValue + biayaRtPemeliharaanValue + biayaRtLainValue;
  let totalAngsuranValue = angsuranBankUmumValue + angsuranBprValue + angsuranLeasingValue + angsuranKoperasiValue + angsuranLainValue;
  let labaRugiValue = omset - totalBiayaValue;

  // Update the output fields directly
  document.getElementById('total_biaya').value = totalBiayaValue;
  document.getElementById('total_biaya_rt').value = totalBiayaRtValue;
  document.getElementById('total_angsuran').value = totalAngsuranValue;
  document.getElementById('laba_rugi').value = labaRugiValue;
}
calculate();
infoKeuanganForm.addEventListener('change', calculate);
