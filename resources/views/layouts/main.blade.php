<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

    <style>
        :root {
            /* --bg-palettes-color: #DFF2EB;
            --fg-palettes-color: #B9E5E8;
            --action-palettes-color: #7AB2D3;
            --object-palettes-color: #4A628A; */

            /* --bg-palettes-color: #003285;
            --fg-palettes-color: #2A629A;
            --action-palettes-color: #FF7F3E;
            --object-palettes-color: #FFDA78; */

            --bg-palettes-color: #27374D;
            --fg-palettes-color: #526D82;
            --action-palettes-color: #9DB2BF;
            --object-palettes-color: #DDE6ED;
        }

        .bg_palettes {
            background-color: var(--bg-palettes-color);
        }

        .fg_palettes {
            background-color: var(--fg-palettes-color);
        }

        .action_palettes {
            background-color: var(--action-palettes-color);
        }

        .h_palettes{
            color: var(--object-palettes-color);
        }

        .bgs_palettes{
            background-color:  var(--fg-palettes-color);
            color:  var(--bg-palettes-color);
        }
        .bgs_palettes:hover{
            background-color:  var(--action-palettes-color);
            color:  #FFFF;
        }

        .object_palettes {
            background-color: var(--object-palettes-color);
        }
    </style>
    <title>Admin Kos Kosan Tamalanrea</title>
</head>

<body class="bg_palettes">

    <x-nav.main />

    {{-- <x-alert /> --}}

    <main class="container">
        @isset($header)
            <header class="h1 h_palettes">
                {{ $header }}
            </header>
        @endisset

        {{ $slot }}
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->



    <!-- Select 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()


        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>
