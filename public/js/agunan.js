const formAgunan = document.getElementById("form_agunan");
const jenisInput = document.querySelectorAll('[name="jenis"]');
const jenisBangunanInput = document.querySelectorAll('[name="jenis_bangunan"]');
const buktiMilikInput = document.querySelectorAll('[name="bukti_milik"]');
const merkInput = document.querySelectorAll('[name="merk"]');
const tahunInput = document.querySelectorAll('[name="tahun"]');
const noBpkbInput = document.querySelectorAll('[name="no_bpkb"]');
const nopolInput = document.querySelectorAll('[name="nopol"]');
const noMesinInput = document.querySelectorAll('[name="no_mesin"]');
const noRangkaInput = document.querySelectorAll('[name="no_rangka"]');
const warnaInput = document.querySelectorAll('[name="warna"]');
const atasNamaInput = document.querySelectorAll('[name="atas_nama"]');
const alamatInput = document.querySelectorAll('[name="alamat"]');
const tglBerlakuInput = document.querySelectorAll('[name="tgl_berlaku"]');
const noAgunanInput = document.querySelectorAll('[name="no_agunan"]');
const namaPemilikInput = document.querySelectorAll('[name="nama_pemilik"]');
const lokasiInput = document.querySelectorAll('[name="lokasi"]');
const nilaiInput = document.querySelectorAll('[name="nilai"]');
const safetyMarginInput = document.querySelectorAll('[name="safety_margin"]');
const jenisPengikatanInput = document.querySelectorAll('[name="jenis_pengikatan"]');
const asuransiInput = document.querySelectorAll('[name="asuransi"]');
const ketInput = document.querySelectorAll('[name="ket"]');
const luasTanahInput = document.querySelectorAll('[name="luas_tanah"]');
const luasBangunanInput = document.querySelectorAll('[name="luas_bangunan"]');
const noDepInput = document.querySelectorAll('[name="no_dep"]');
const depBankInput = document.querySelectorAll('[name="dep_bank"]');


let bobot = 0.8;

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
  inputElements.forEach((input) => {
    input.forEach((element) => {
      element.style.display = "none";
      const labelElement = element.previousElementSibling;
      if (labelElement && labelElement.tagName === "LABEL") {
        labelElement.style.display = "none";
      }
    })
  });
}

function showElement(...elements) {
  elements.forEach((element) => {
    element.forEach((element) => {
      element.style.display = "block";
      const labelElement = element.previousElementSibling;
      if (labelElement && labelElement.tagName === "LABEL") {
        labelElement.style.display = "block";
      }
    })
  });
}

function showForm (index) {
  console.log(index);
  hideAll();
  if (jenisInput[index].value == 1) {
    showElement(buktiMilikInput, noAgunanInput, luasTanahInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else if (jenisInput[index].value == 2) {
    showElement(buktiMilikInput, noAgunanInput, luasTanahInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput, luasBangunanInput, jenisBangunanInput);

  }
  else if (jenisInput[index].value == 3) {
    showElement(buktiMilikInput, noAgunanInput, namaPemilikInput, lokasiInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput, luasBangunanInput, jenisBangunanInput);

  }
  //else if untuk nilai 4-11
  else if (jenisInput[index].value == 4 || jenisInput[index].value == 5 || jenisInput[index].value == 6 || jenisInput[index].value == 7 || jenisInput[index].value == 8 || jenisInput[index].value == 9 || jenisInput[index].value == 10 || jenisInput[index].value == 11) {
    showElement(buktiMilikInput, merkInput, tahunInput, noBpkbInput, nopolInput, noMesinInput, noRangkaInput, warnaInput, atasNamaInput, alamatInput, tglBerlakuInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else if (jenisInput[index].value == 12) {
    showElement(noDepInput, depBankInput, namaPemilikInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  else {
    showElement(buktiMilikInput, ketInput, nilaiInput, safetyMarginInput, jenisPengikatanInput, asuransiInput);

  }
  countsafety_margin(index);
  console.log(jenisInput[index].value);

}

showForm(0);
let i = 0
jenisInput.forEach((input,i) => {
  input.addEventListener("change", () => showForm(i-1));
  i++;
});


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
  'nilai',
  'safety_margin',
]

function formatInput(name) {
  let inputElement = document.querySelectorAll(`[name="${name}"]`);
  
  inputElement.forEach((element) => {
    let caretPosition = element.selectionStart;
    val = fixedFormatNumber(formatNumber(element.value));
  
    // Update the input value
    element.value = val;
  
    // Restore the caret position
    element.setSelectionRange(caretPosition, caretPosition);
  // Save the current caret position
  })
}


input.forEach((element,index) => {
  formatInput(element);
  countsafety_margin(index);
  document.getElementsByName(element)[0].addEventListener('input', function() {
    formatInput(element);
    countsafety_margin(index);
  })
});

function countsafety_margin (index) {
  jenis = document.getElementsByName('jenis')[index].value
    bobot = 0;
    if (jenis == 1 || jenis == 2) {
      bobot = 0.8
    }
    else if (jenis == 12) {
      bobot = 1
    }
    else if (jenis == 13) {
      bobot = 0.9
    }
    else {
      bobot=0.6
    }
    document.getElementsByName('safety_margin')[index].value =  fixedFormatNumber(formatNumber(document.getElementsByName('nilai')[index].value) * bobot);
}
console.log(jenisInput);