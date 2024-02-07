<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    @yield('title')

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('stisla/datatables/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla/datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/datatables/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            @include('layout.navbar')
            @include('layout.sidebar')

            @yield('content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauv.al/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>



    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('stisla/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('stisla/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('stisla/datatables/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#tabel1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["copy", "excel", "pdf", "colvis"],
                })
                .buttons()
                .container()
                .appendTo("#tabel1_wrapper .col-md-6:eq(0)");
            $("#example2")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["excel", "pdf"],
                })
                .buttons()
                .container()
                .appendTo("#example2_wrapper .col-md-6:eq(0)");
            $("#table2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla/datatables/modules-datatables.js') }}"></script>
</body>

</html>
