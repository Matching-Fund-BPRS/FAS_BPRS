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


function proyeksiNeraca() {
  let kas = document.getElementsByName('kas')[0];
  let piutang_dagang = document.getElementsByName('piutang_dagang')[0];
  let persediaan = document.getElementsByName('persediaan')[0];
  let tanah = document.getElementsByName('tanah')[0];
  let gedung = document.getElementsByName('gedung')[0];
  let penyusutan_gedung = document.getElementsByName('penyusutan_gedung')[0];
  let peralatan = document.getElementsByName('peralatan')[0];
  let penyusutan_peralatan = document.getElementsByName('penyusutan_peralatan')[0];
  let hutang_jangka_pendek = document.getElementsByName('hutang_jangka_pendek')[0];
  let hutang_jangka_panjang = document.getElementsByName('hutang_jangka_panjang')[0];
  let laba_ditahan = document.getElementsByName('laba_ditahan')[0];
  let laba_berjalan = document.getElementsByName('laba_berjalan')[0];

  let sub_total_aktiva_lancar = document.getElementsByName('sub_total_aktiva_lancar')[0];
  let sub_total_aktiva_tetap = document.getElementsByName('sub_total_aktiva_tetap')[0];
  let aktiva = document.getElementsByName('aktiva')[0];
  let sub_total_kewajiban = document.getElementsByName('sub_total_kewajiban')[0];
  let modal = document.getElementsByName('modal')[0];
  let sub_total_modal = document.getElementsByName('sub_total_modal')[0];
  let pasiva = document.getElementsByName('pasiva')[0];

  let nextkasValue = Math.round(formatNumber(kas.value) * 110/100);
  let nextpiutang_dagangValue = Math.round(formatNumber(piutang_dagang.value) * 105/100);
  let nextpersediaanValue = Math.round(formatNumber(persediaan.value) * 105/100);
  let nexttanahValue = Math.round(formatNumber(tanah.value) * 105/100);
  let nextgedungValue = Math.round(formatNumber(gedung.value));
  let nextpenyusutan_gedungValue = Math.round(formatNumber(penyusutan_gedung.value) * 105/100);
  let nextperalatanValue = Math.round(formatNumber(peralatan.value));
  let nextpenyusutan_peralatanValue = Math.round(formatNumber(penyusutan_peralatan.value) * 105/100);
  let nexthutang_jangka_pendekValue = Math.round(formatNumber(hutang_jangka_pendek.value) * 75/100);
  let nexthutang_jangka_panjangValue = Math.round(formatNumber(hutang_jangka_panjang.value) * 75/100);
  let nextlaba_ditahanValue = Math.round(formatNumber(laba_ditahan.value) );
  let nextlaba_berjalanValue = Math.round(formatNumber(laba_berjalan.value) );

  let nextsub_total_aktiva_lancarValue = nextkasValue + nextpiutang_dagangValue + nextpersediaanValue;
  let nextsub_total_aktiva_tetapValue = nextgedungValue - nextpenyusutan_gedungValue + nextperalatanValue - nextpenyusutan_peralatanValue + nexttanahValue;
  let nextaktivaValue = nextsub_total_aktiva_lancarValue + nextsub_total_aktiva_tetapValue;
  let nextsub_total_kewajibanValue = nexthutang_jangka_pendekValue + nexthutang_jangka_panjangValue;
  let nextmodalValue = nextaktivaValue - nextsub_total_kewajibanValue - nextlaba_ditahanValue - nextlaba_berjalanValue;
  let nextsub_total_modalValue = nextmodalValue + nextlaba_ditahanValue + nextlaba_berjalanValue;
  let nextpasivaValue = nextsub_total_kewajibanValue + nextsub_total_modalValue;

  let nextKas = kas.parentElement.nextElementSibling.children[0];
  let nextPiutangDagang = piutang_dagang.parentElement.nextElementSibling.children[0];
  let nextPersediaan = persediaan.parentElement.nextElementSibling.children[0];
  let nextTanah = tanah.parentElement.nextElementSibling.children[0];
  let nextGedung = gedung.parentElement.nextElementSibling.children[0];
  let nextPenyusutanGedung = penyusutan_gedung.parentElement.nextElementSibling.children[0];
  let nextPeralatan = peralatan.parentElement.nextElementSibling.children[0];
  let nextPenyusutanPeralatan = penyusutan_peralatan.parentElement.nextElementSibling.children[0];
  let nextHutangJangkaPendek = hutang_jangka_pendek.parentElement.nextElementSibling.children[0];
  let nextHutangJangkaPanjang = hutang_jangka_panjang.parentElement.nextElementSibling.children[0];
  let nextLabaDitahan = laba_ditahan.parentElement.nextElementSibling.children[0];
  let nextLabaBerjalan = laba_berjalan.parentElement.nextElementSibling.children[0];

  let nextSubTotalAktivaLancar = sub_total_aktiva_lancar.parentElement.nextElementSibling.children[0];
  let nextSubTotalAktivaTetap = sub_total_aktiva_tetap.parentElement.nextElementSibling.children[0];
  let nextAktiva = aktiva.parentElement.nextElementSibling.children[0];
  let nextSubTotalKewajiban = sub_total_kewajiban.parentElement.nextElementSibling.children[0];
  let nextModal = modal.parentElement.nextElementSibling.children[0];
  let nextSubTotalModal = sub_total_modal.parentElement.nextElementSibling.children[0];
  let nextPasiva = pasiva.parentElement.nextElementSibling.children[0];


  nextKas.value = fixedFormatNumber(nextkasValue);
  nextPiutangDagang.value = fixedFormatNumber(nextpiutang_dagangValue);
  nextPersediaan.value = fixedFormatNumber(nextpersediaanValue);
  nextTanah.value = fixedFormatNumber(nexttanahValue);
  nextGedung.value = fixedFormatNumber(nextgedungValue);
  nextPenyusutanGedung.value = fixedFormatNumber(nextpenyusutan_gedungValue);
  nextPeralatan.value = fixedFormatNumber(nextperalatanValue);
  nextPenyusutanPeralatan.value = fixedFormatNumber(nextpenyusutan_peralatanValue);
  nextHutangJangkaPendek.value = fixedFormatNumber(nexthutang_jangka_pendekValue);
  nextHutangJangkaPanjang.value = fixedFormatNumber(nexthutang_jangka_panjangValue);
  nextLabaDitahan.value = fixedFormatNumber(nextlaba_ditahanValue);
  nextLabaBerjalan.value = fixedFormatNumber(nextlaba_berjalanValue);

  nextSubTotalAktivaLancar.value = fixedFormatNumber(nextsub_total_aktiva_lancarValue);
  nextSubTotalAktivaTetap.value = fixedFormatNumber(nextsub_total_aktiva_tetapValue);
  nextAktiva.value = fixedFormatNumber(nextaktivaValue);
  nextSubTotalKewajiban.value = fixedFormatNumber(nextsub_total_kewajibanValue);
  nextModal.value = fixedFormatNumber(nextmodalValue);
  nextSubTotalModal.value = fixedFormatNumber(nextsub_total_modalValue);
  nextPasiva.value = fixedFormatNumber(nextpasivaValue);

  let tgl_periode = document.getElementsByName('tgl_periode')[0];
  let nexttgl_peridoer_value = tgl_periode.value;
  nexttgl_peridoer_value = nexttgl_peridoer_value.split('-');
  nexttgl_peridoer_value = nexttgl_peridoer_value[2] + '/' + nexttgl_peridoer_value[1] + '/' + (parseInt(nexttgl_peridoer_value[0])+1);
  let nextTglPeriode = tgl_periode.nextElementSibling.children[0];
  nextTglPeriode.innerHTML = nexttgl_peridoer_value;

}

function proyeksiNeraca2() {
  let kas = document.getElementsByName('kas')[0];
  let piutang_dagang = document.getElementsByName('piutang_dagang')[0];
  let persediaan = document.getElementsByName('persediaan')[0];
  let tanah = document.getElementsByName('tanah')[0];
  let gedung = document.getElementsByName('gedung')[0];
  let penyusutan_gedung = document.getElementsByName('penyusutan_gedung')[0];
  let peralatan = document.getElementsByName('peralatan')[0];
  let penyusutan_peralatan = document.getElementsByName('penyusutan_peralatan')[0];
  let hutang_jangka_pendek = document.getElementsByName('hutang_jangka_pendek')[0];
  let hutang_jangka_panjang = document.getElementsByName('hutang_jangka_panjang')[0];
  let laba_ditahan = document.getElementsByName('laba_ditahan')[0];
  let laba_berjalan = document.getElementsByName('laba_berjalan')[0];

  let sub_total_aktiva_lancar = document.getElementsByName('sub_total_aktiva_lancar')[0];
  let sub_total_aktiva_tetap = document.getElementsByName('sub_total_aktiva_tetap')[0];
  let aktiva = document.getElementsByName('aktiva')[0];
  let sub_total_kewajiban = document.getElementsByName('sub_total_kewajiban')[0];
  let modal = document.getElementsByName('modal')[0];
  let sub_total_modal = document.getElementsByName('sub_total_modal')[0];
  let pasiva = document.getElementsByName('pasiva')[0];

  let nextkasValue = Math.round(formatNumber(kas.value) * 110/100 * 110/100);
  let nextpiutang_dagangValue = Math.round(formatNumber(piutang_dagang.value) * 105/100 * 105/100);
  let nextpersediaanValue = Math.round(formatNumber(persediaan.value) * 105/100 * 105/100);
  let nexttanahValue = Math.round(formatNumber(tanah.value) * 105/100 * 105/100);
  let nextgedungValue = Math.round(formatNumber(gedung.value));
  let nextpenyusutan_gedungValue = Math.round(formatNumber(penyusutan_gedung.value) * 105/100 * 105/100);
  let nextperalatanValue = Math.round(formatNumber(peralatan.value));
  let nextpenyusutan_peralatanValue = Math.round(formatNumber(penyusutan_peralatan.value) * 105/100 * 105/100);
  let nexthutang_jangka_pendekValue = Math.round(formatNumber(hutang_jangka_pendek.value) * 75/100 * 75/100);
  let nexthutang_jangka_panjangValue = Math.round(formatNumber(hutang_jangka_panjang.value) * 75/100 * 75/100);
  let nextlaba_ditahanValue = Math.round(formatNumber(laba_ditahan.value) );
  let nextlaba_berjalanValue = Math.round(formatNumber(laba_berjalan.value) );

  let nextsub_total_aktiva_lancarValue = nextkasValue + nextpiutang_dagangValue + nextpersediaanValue;
  let nextsub_total_aktiva_tetapValue = nextgedungValue - nextpenyusutan_gedungValue + nextperalatanValue - nextpenyusutan_peralatanValue + nexttanahValue;
  let nextaktivaValue = nextsub_total_aktiva_lancarValue + nextsub_total_aktiva_tetapValue;
  let nextsub_total_kewajibanValue = nexthutang_jangka_pendekValue + nexthutang_jangka_panjangValue;
  let nextmodalValue = nextaktivaValue - nextsub_total_kewajibanValue - nextlaba_ditahanValue - nextlaba_berjalanValue;
  let nextsub_total_modalValue = nextmodalValue + nextlaba_ditahanValue + nextlaba_berjalanValue;
  let nextpasivaValue = nextsub_total_kewajibanValue + nextsub_total_modalValue;

  let nextKas = kas.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPiutangDagang = piutang_dagang.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPersediaan = persediaan.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextTanah = tanah.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextGedung = gedung.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPenyusutanGedung = penyusutan_gedung.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPeralatan = peralatan.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPenyusutanPeralatan = penyusutan_peralatan.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextHutangJangkaPendek = hutang_jangka_pendek.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextHutangJangkaPanjang = hutang_jangka_panjang.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextLabaDitahan = laba_ditahan.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextLabaBerjalan = laba_berjalan.parentElement.nextElementSibling.nextElementSibling.children[0];

  let nextSubTotalAktivaLancar = sub_total_aktiva_lancar.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextSubTotalAktivaTetap = sub_total_aktiva_tetap.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextAktiva = aktiva.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextSubTotalKewajiban = sub_total_kewajiban.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextModal = modal.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextSubTotalModal = sub_total_modal.parentElement.nextElementSibling.nextElementSibling.children[0];
  let nextPasiva = pasiva.parentElement.nextElementSibling.nextElementSibling.children[0];


  nextKas.value = fixedFormatNumber(nextkasValue);
  nextPiutangDagang.value = fixedFormatNumber(nextpiutang_dagangValue);
  nextPersediaan.value = fixedFormatNumber(nextpersediaanValue);
  nextTanah.value = fixedFormatNumber(nexttanahValue);
  nextGedung.value = fixedFormatNumber(nextgedungValue);
  nextPenyusutanGedung.value = fixedFormatNumber(nextpenyusutan_gedungValue);
  nextPeralatan.value = fixedFormatNumber(nextperalatanValue);
  nextPenyusutanPeralatan.value = fixedFormatNumber(nextpenyusutan_peralatanValue);
  nextHutangJangkaPendek.value = fixedFormatNumber(nexthutang_jangka_pendekValue);
  nextHutangJangkaPanjang.value = fixedFormatNumber(nexthutang_jangka_panjangValue);
  nextLabaDitahan.value = fixedFormatNumber(nextlaba_ditahanValue);
  nextLabaBerjalan.value = fixedFormatNumber(nextlaba_berjalanValue);

  nextSubTotalAktivaLancar.value = fixedFormatNumber(nextsub_total_aktiva_lancarValue);
  nextSubTotalAktivaTetap.value = fixedFormatNumber(nextsub_total_aktiva_tetapValue);
  nextAktiva.value = fixedFormatNumber(nextaktivaValue);
  nextSubTotalKewajiban.value = fixedFormatNumber(nextsub_total_kewajibanValue);
  nextModal.value = fixedFormatNumber(nextmodalValue);
  nextSubTotalModal.value = fixedFormatNumber(nextsub_total_modalValue);
  nextPasiva.value = fixedFormatNumber(nextpasivaValue);

  let tgl_periode = document.getElementsByName('tgl_periode')[0];
  let nexttgl_peridoer_value = tgl_periode.value;
  nexttgl_peridoer_value = nexttgl_peridoer_value.split('-');
  nexttgl_peridoer_value = nexttgl_peridoer_value[2] + '/' + nexttgl_peridoer_value[1] + '/' + (parseInt(nexttgl_peridoer_value[0])+2);
  let nextTglPeriode = tgl_periode.nextElementSibling.nextElementSibling.children[0];
  nextTglPeriode.innerHTML = nexttgl_peridoer_value;
}
proyeksiNeraca();
proyeksiNeraca2();
neracaCount();
neracaForm.addEventListener('change', function(){
  neracaCount();
  proyeksiNeraca();
  proyeksiNeraca2();
})