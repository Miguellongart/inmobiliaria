/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
$(document).ready(function () {
  $('#dataTable').DataTable({
    responsive: true,
    autoWidth: false,
    order: [0, 'desc'],
    language: {
      "zeroRecords": "No se encontró ningún curso",
      "info": "Mostrando la página _PAGE_ de _PAGES_",
      "infoEmpty": "No records available",
      "infoFiltered": "(filtrado de _MAX_ registros totales)",
      'search': 'Buscar:',
      'paginate': {
        'next': 'Siguiente',
        'previous': 'Anterior'
      }
    }
  });
});
/******/ })()
;