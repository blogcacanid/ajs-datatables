<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Integrasi DataTables | Angular JS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    </head>
    <body ng-app="myApp">
        <h1>Integrasi DataTables Angular JS</h1>
        <div  ng-controller="myCtrl">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <script src="app.js"></script>
    </body>
</html>
