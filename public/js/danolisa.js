let table = new DataTable('#tabel_nasabah');

let tabel = document.getElementById('tabel_nasabah');
tabel.style.display = '';

let tabel_nasabah_length = document.getElementsByName('tabel_nasabah_length')[0];
tabel_nasabah_length.classList.add('w-20');

let input_search = document.querySelector('input[type="search"]');
input_search.className = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400   dark:focus:ring-green-500 dark:focus:border-green-500';

let dataTablesfilter = document.querySelector('.dataTables_filter');
dataTablesfilter.style.display = 'flex';

function changeCurrency() {
    let type_currency = document.querySelectorAll('p[type="currency"]');
    for (let i = 0; i < type_currency.length; i++) {
        type_currency[i].innerHTML = type_currency[i].innerHTML.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
}
changeCurrency();

//every event on windows run changeCurrenct
window.addEventListener('load', changeCurrency);
window.addEventListener('click', changeCurrency);
window.addEventListener('keyup', changeCurrency);
// Add more event listeners as needed