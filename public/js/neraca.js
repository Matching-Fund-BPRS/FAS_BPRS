let neracaForm = document.getElementById('neraca_form');
function neracaCount(){
  let kasValue = parseFloat(document.getElementsByName('kas')[0].value)||0;
  let piutangDagarValue = parseFloat(document.getElementsByName('piutang_dagang')[0].value)||0;
  let persediaanValue = parseFloat(document.getElementsByName('persediaan')[0].value)||0;

  let tanahValue = parseFloat(document.getElementsByName('tanah')[0].value)||0;
  let gedungValue = parseFloat(document.getElementsByName('gedung')[0].value)||0;
  let penyusutanGedungValue = parseFloat(document.getElementsByName('penyusutan_gedung')[0].value)||0;
  let peralatanValue = parseFloat(document.getElementsByName('peralatan')[0].value)||0;
  let penyusutanPeralatanValue = parseFloat(document.getElementsByName('penyusutan_peralatan')[0].value)||0;

  let hutangJangkaPendekValue = parseFloat(document.getElementsByName('hutang_jangka_pendek')[0].value)||0;
  let hutangJangkaPanjangValue = parseFloat(document.getElementsByName('hutang_jangka_panjang')[0].value)||0;


  let labaDitahanValue = parseFloat(document.getElementsByName('laba_ditahan')[0].value)||0;
  let labaBerjalanValue = parseFloat(document.getElementsByName('laba_berjalan')[0].value)||0;
  let labaBerjalan2Value = parseFloat(document.getElementsByName('laba_berjalan_2')[0].value)||0;
  let labaBerjalan3Value = parseFloat(document.getElementsByName('laba_berjalan_3')[0].value)||0;

  let subTotalAktivaLancarValue = kasValue + piutangDagarValue + persediaanValue;
  let subTotalAktivaTetapValue = tanahValue + gedungValue - penyusutanGedungValue + peralatanValue - penyusutanPeralatanValue;
  let modalValue = subTotalAktivaTetapValue;
  let aktivaValue = subTotalAktivaLancarValue + subTotalAktivaTetapValue;
  let subTotalKewajibanValue = hutangJangkaPendekValue + hutangJangkaPanjangValue;
  let subTotalModalValue = modalValue + labaDitahanValue + labaBerjalanValue + labaBerjalan2Value + labaBerjalan3Value;
  let pasivaValue = subTotalKewajibanValue + subTotalModalValue;
  
  document.getElementsByName('sub_total_aktiva_lancar')[0].value = subTotalAktivaLancarValue;
  document.getElementsByName('sub_total_aktiva_tetap')[0].value = subTotalAktivaTetapValue;
  document.getElementsByName('aktiva')[0].value = aktivaValue;
  document.getElementsByName('sub_total_kewajiban')[0].value = subTotalKewajibanValue;
  document.getElementsByName('sub_total_modal')[0].value = subTotalModalValue;
  document.getElementsByName('pasiva')[0].value = pasivaValue;

  
}
neracaCount();
neracaForm.addEventListener('change', function(){
  neracaCount();
})