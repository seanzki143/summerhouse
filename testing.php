<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/5.3.2_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto">
    <table id="testingTable">
        <thead>
            <tr>
                <th>0</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
            <tr>
                <td>awd</td>
                <td>ert</td>
                <td>dfg</td>
                <td>cvb</td>
            </tr>
        </tbody>
    </table>
    </div>

<script src="js/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#testingTable').DataTable({
            'columnDefs': [ {
                'targets': [0,1,2], /* column index */
                'orderable': false, /* true or false */
            }]
        });

    } );

</script>
</body>
</html>