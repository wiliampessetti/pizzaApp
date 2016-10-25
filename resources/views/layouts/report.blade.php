<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PizzaApp</title>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>

        table {
            color: #333;
            font-family: Helvetica, Arial, sans-serif;
            width: 100%;
            border-collapse:
                    collapse; border-spacing: 0;
        }

        td, th {
            border: 1px solid transparent; /* No more visible border */
            height: 30px;
            transition: all 0.3s; /* Simple transition for hover effect */
        }

        th {
            background: #DFDFDF; /* Darken header a bit */
            font-weight: bold;
        }

        td {
            background: #FAFAFA;
            text-align: center;
        }
        /* Cells in even rows (2,4,6...) are one color */
        tr:nth-child(even) td { background: #F1F1F1; }

        /* Cells in odd rows (1,3,5...) are another (excludes header cells) */
        tr:nth-child(odd) td { background: #FEFEFE; }

        tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */

        h1 {
            color: #FFFFFF;
            width:100%;
            background-image:url("{{ URL::to( '/img/report.png') }}");
        }

    </style>
</head>
<body id="app-layout">

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

@yield('post-script')

</body>
</html>
