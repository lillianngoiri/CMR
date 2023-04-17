<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"
        href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>

    <?php include "header.html"?><br>

    <div>
        <div class="container">
            <div class="table-responsive">
                <table class="material_table" id="table">
                    <tr>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Description</th>
                        <th>Unit</th>
                        <th>Price</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $.getJSON("information.json", function(data) {
            var material = '';
            $.each(data, function(key, value) {
                material += '<tr>';
                material += '<td>' + value.category + '</td>';
                material += '<td>' + value.sub_category + '</td>';
                material += '<td>' + value.description + '</td>';
                material += '<td>' + value.unit + '</td>';
                material += '<td>' + value.price + '</td>';
            });
            $('#table').append(material);
        });
    });
    </script>

</body>

</html>