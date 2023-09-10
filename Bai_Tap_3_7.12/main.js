function sortTable(columnName){
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById('productTable');
    switching = true;
    while(switching){
        switching = false;
        rows = table.rows;
        for(i=1;i<(rows.length - 1);i++){
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("td")[columnName];
            y = rows[i+1].getElementsByTagName("td")[columnName];
            if(x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()){
                shouldSwitch = true;
                break;
            }
        }
    }
}

function searchTable(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("productTable");
    tr = table.getElementsByTagName("tr");

    for(i=1;i<tr.length;i++){
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        for(j=0;j<td.length;j++){
            if(td[j]){
                txtValue = td[j].textContent || td[j].innerText;
                if(txtValue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}

document.getElementById("searchInput").addEventListener("keyup", searchTable);

