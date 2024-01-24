<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://127.0.0.1:8000/favicon.png" />
    <title>Data Tables | Radmin - Laravel Admin Starter</title>

    <!-- font awesome library -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="http://127.0.0.1:8000/js/app.js"></script>

    <!-- themekit admin template assets -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/all.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/dist/css/theme.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/icon-kit/dist/css/iconkit.min.css">

    <!-- Stack array for including inline css or head elements -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/plugins/DataTables/datatables.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
</head>
<body>
@extends('layouts.main') 
    @section('content')
        <!-- push external head elements to head -->
        @push('head')
    <div class="card">
        <div class="card-header d-block">
            <h3>DATA UPLOAD FROM EXCEL INVOICE</h3>
        </div>
        <div class="card-body">
            <div class="dt-responsive">
                <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                <thead>
                                    <tr role="row">
                                        <th data-sortable="true">Date</th>
                                        <th data-sortable="true">Document Number</th>
                                        <th data-sortable="true">Description</th>
                                        <th data-sortable="true">Account</th>
                                        <th data-sortable="true">Item</th>
                                        <th data-sortable="true">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($totalAmounts as $totalAmount)
                                    <tr>
                                        <td>{{ $totalAmount->date }}</td>
                                        <td>{{ $totalAmount->doc_no }}</td>
                                        <td>{{ $totalAmount->description }}</td>
                                        <td>{{ $totalAmount->account }}</td>
                                        <td>{{ $totalAmount->item }}</td>
                                        <td>{{ $totalAmount->amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js if any -->
    @push('script') 
    <script src="http://127.0.0.1:8000/plugins/DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#simpletable').DataTable();
    });
</script>

        @endpush
    @endsection
</body>
</html>
