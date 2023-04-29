<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"
        href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>


    <div class="container">

        <?php include "header.html"?><br>
        <div class="wrapper">
            <input id="searchBar" class="input" onkeyup="tableSearch()" type="text" placeholder="Search ..."><br><br>
        </div><br><br>

        <div style="overflow-x:auto">

            <table class="material_table" id="table" data-filter-control="true" data-show-search-clear-button="true">

                <tr>
                    <th id="category">Category</th>
                </tr>
                <tr>
                    <th>Sub Category</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Price</th>

                </tr>
            </table>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $.getJSON("information.json", function(data) {
            var material = '';
            $.each(data.items, function(key, value) {
                material += '<tr>';
                material += '<td>' + value.category + '</td>';
                material += '</tr>';
                material += '<tr>';
                material += '<td>' + value.sub_category + '</td>';
                material += '<td>' + value.description + '</td>';
                material += '<td>' + value.unit + '</td>';
                material += '<td>' + value.price + '</td>';
                material += '</tr>';

            });
            $('#table').append(material);
        });
    });



    // JavaScript code
    function tableSearch() {
        let input, table, filter, th, td, tr, txtValue;

        input = document.getElementById("searchBar");
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");


        for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    /* $(document).ready(function() {
         
         $("#searchBar").on("keyup", function() {
             var value = $(this).val().toLowerCase();
             $("#table tr").filter(function() {
                 $(this).toggle($(this).text()
                     .toLowerCase().indexOf(value) > -1)
             });
         });
     });*/
    </script>

</body>

</html>