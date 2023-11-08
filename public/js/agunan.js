const formAgunan = document.getElementById("form_agunan");
const jenisInput = document.querySelector('[name="jenis"]');
const jenisBangunanInput = document.querySelector('[name="jenis_bangunan"]');
const buktiMilikInput = document.querySelector('[name="bukti_milik"]');
const merkInput = document.querySelector('[name="merk"]');
const tahunInput = document.querySelector('[name="tahun"]');
const noBpkbInput = document.querySelector('[name="no_bpkb"]');
const nopolInput = document.querySelector('[name="nopol"]');
const noMesinInput = document.querySelector('[name="no_mesin"]');
const noRangkaInput = document.querySelector('[name="no_rangka"]');
const warnaInput = document.querySelector('[name="warna"]');
const atasNamaInput = document.querySelector('[name="atas_nama"]');
const alamatInput = document.querySelector('[name="alamat"]');
const tglBerlakuInput = document.querySelector('[name="tgl_berlaku"]');
const noAgunanInput = document.querySelector('[name="no_agunan"]');
const namaPemilikInput = document.querySelector('[name="nama_pemilik"]');
const lokasiInput = document.querySelector('[name="lokasi"]');
const nilaiInput = document.querySelector('[name="nilai"]');
const safetyMarginInput = document.querySelector('[name="safety_margin"]');
const jenisPengikatanInput = document.querySelector('[name="jenis_pengikatan"]');
const asuransiInput = document.querySelector('[name="asuransi"]');
const ketInput = document.querySelector('[name="ket"]');
const luasTanahInput = document.querySelector('[name="luas_tanah"]');
const luasBangunanInput = document.querySelector('[name="luas_bangunan"]');
const noDepInput = document.querySelector('[name="no_dep"]');
const depBankInput = document.querySelector('[name="dep_bank"]');


function hideAll() {
  const inputElements = [
    buktiMilikInput,
    noAgunanInput,
    jenisBangunanInput,
    buktiMilikInput,
    noAgunanInput,
    merkInput,
    tahunInput,
    noBpkbInput,
    nopolInput,
    noMesinInput,
    noRangkaInput,
    warnaInput,
    atasNamaInput,
    alamatInput,
    tglBerlakuInput,
    noAgunanInput,
    namaPemilikInput,
    lokasiInput,
    nilaiInput,
    safetyMarginInput,
    jenisPengikatanInput,
    asuransiInput,
    ketInput,
    luasTanahInput,
    luasBangunanInput,
    noDepInput,
    depBankInput,
  ];

  // Hide input elements and their associated labels
  inputElements.forEach((inputElement) => {
    inputElement.style.display = "none";
    const labelElement = inputElement.previousElementSibling;
    if (labelElement && labelElement.tagName === "LABEL") {
      labelElement.style.display = "none";
    }
  });
}

function showElement(...elements) {
  elements.forEach((element) => {
    element.style.display = "block";
    const labelElement = element.previousElementSibling;
    if (labelElement && labelElement.tagName === "LABEL") {
      labelElement.style.display = "block";
    }
  });
}

function showForm () {
  hideAll();
  if (jenisInput.value == 1) {
    showElement(buktiMilikInput, noAgunanInput, luasTanahInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else if (jenisInput.value == 2) {
    showElement(buktiMilikInput, noAgunanInput, luasTanahInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput, luasBangunanInput, jenisBangunanInput);

  }
  else if (jenisInput.value == 3) {
    showElement(buktiMilikInput, noAgunanInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput, luasBangunanInput, jenisBangunanInput);

  }
  //else if untuk nilai 4-11
  else if (jenisInput.value == 4 || jenisInput.value == 5 || jenisInput.value == 6 || jenisInput.value == 7 || jenisInput.value == 8 || jenisInput.value == 9 || jenisInput.value == 10 || jenisInput.value == 11) {
    showElement(buktiMilikInput, merkInput, tahunInput, noBpkbInput, nopolInput, noMesinInput, noRangkaInput, warnaInput, atasNamaInput, alamatInput, tglBerlakuInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else if (jenisInput.value == 12) {
    showElement(noDepInput, depBankInput, namaPemilikInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else {
    showElement(buktiMilikInput, ketInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }

  console.log(jenisInput.value);

}
showForm();
jenisInput.addEventListener("change", showForm);