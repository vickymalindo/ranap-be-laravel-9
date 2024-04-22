<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nayaka - Ranap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}">
</head>
<body>
  @include('partial.navbar-ranap')

  @yield('main')
  <script src="https://code.jquery.com/jquery-3.7.1.slim.js"></script>
  <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    new DataTable('#myTable');
  </script>
</body>
</html>