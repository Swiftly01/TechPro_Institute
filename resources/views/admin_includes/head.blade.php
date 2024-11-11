<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>{{ $title ?? ''  }} </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
  <link href="{{ asset('admin-assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
  
  <link rel="stylesheet" href="{{asset('admin-assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin-assets/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
  <link href="{{asset('admin-assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/css/style.css')}}" rel="stylesheet">
  <style>
     /* Additional styling */
     .form-control {
        border: 1px solid #ced4da;
        border-radius: 0;
    }
    .form-control:focus {
        box-shadow: none;
    }

  </style>

  
</head>