function getUpdateHeader() {
  nThead = $(".dataTables_scrollHead").find("thead");
  aLayout = []

  var nTrs = $(nThead).children('tr');
  var nTr, nCell;
  var i, k, l, iLen, jLen, iColShifted, iColumn, iColspan, iRowspan;
  var bUnique;
  var fnShiftCol = function(a, i, j) {
    var k = a[i];
    while (k[j]) {
      j++;
    }
    return j;
  };

  aLayout.splice(0, aLayout.length);

  /* We know how many rows there are in the layout - so prep it */
  for (i = 0, iLen = nTrs.length; i < iLen; i++) {
    aLayout.push([]);
  }

  /* Calculate a layout array */
  for (i = 0, iLen = nTrs.length; i < iLen; i++) {
    nTr = nTrs[i];
    iColumn = 0;

    /* For every cell in the row... */
    nCell = nTr.firstChild;
    while (nCell) {
      if (nCell.nodeName.toUpperCase() == "TD" ||
        nCell.nodeName.toUpperCase() == "TH") {
        /* Get the col and rowspan attributes from the DOM and sanitise them */
        iColspan = nCell.getAttribute('colspan') * 1;
        iRowspan = nCell.getAttribute('rowspan') * 1;
        iColspan = (!iColspan || iColspan === 0 || iColspan === 1) ? 1 : iColspan;
        iRowspan = (!iRowspan || iRowspan === 0 || iRowspan === 1) ? 1 : iRowspan;

        /* There might be colspan cells already in this row, so shift our target
         * accordingly
         */
        iColShifted = fnShiftCol(aLayout, i, iColumn);

        /* Cache calculation for unique columns */
        bUnique = iColspan === 1 ? true : false;

        /* If there is col / rowspan, copy the information into the layout grid */
        for (l = 0; l < iColspan; l++) {
          for (k = 0; k < iRowspan; k++) {
            aLayout[i + k][iColShifted + l] = {
              "cell": nCell,
              "unique": bUnique
            };
            aLayout[i + k].nTr = nTr;
          }
        }
      }
      nCell = nCell.nextSibling;
    }
  }
  return aLayout;
};

///////////////////////////////////////////////////////////////////////////////
function getUrlVars() {
  var vars = [],
    hash;
  var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
  for (var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split('=');
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
  }
  return vars;
}

$(document).ready(function() {
  var urlvars = getUrlVars();

  if (urlvars['search']) {
    $("body").append("<div class='spinner'></div>");
    var datatableVar = $('#myTable').DataTable({
      "ajax": {
        "url": "/movie_theatre/tables/php/database.php",
        "data": {
          'searchValue': urlvars['search']
        }
      },
      'dom': 'Bfrtip',
      'buttons': [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5'
      ],
      "columnDefs": [{
        "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        "className": 'text-left',
        "orderable": true,
      }, ],
      "paging": false,
      "pagingType": "full_numbers",
      "lengthMenu": [50, 50, 100, 200, 400],
      'scrollY': "70vh",
      'scrollX': true,
      'scrollCollapse': true,
      'fixedColumns': {
        'leftColumns': 0
      },
    });
  } else {
    var datatableVar = $('#myTable').DataTable({
      "ajax": '/movie_theatre/tables/php/database.php',
      'dom': 'Bfrtip',
      'buttons': [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5'
      ],
      "columnDefs": [{
        "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        "className": 'text-left',
        "orderable": true,
      }, ],
      "paging": false,
      "pagingType": "full_numbers",
      "lengthMenu": [50, 50, 100, 200, 400],
      'scrollY': "70vh",
      'scrollX': true,
      'scrollCollapse': true,
      'fixedColumns': {
        'leftColumns': 0
      },
    });
  };
});
