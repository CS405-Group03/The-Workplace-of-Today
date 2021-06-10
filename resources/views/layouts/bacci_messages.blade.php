
    <head>
        <meta name = "viewport" width = "device-width" initial-scale = "1">
        <link rel = "stylesheet" type = "text/css" href = "/bacci_css/bacci_register.css">
        <script src = "https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class = "alert">
                <strong> Error! </strong> Thank's for Submitting the Registration Form.
            </div>
        @endforeach
    @endif

    @if(session('success'))
        <div class = "alert">
            <strong> Success! </strong> Thank's for Submitting the Registration Form.
        </div>
    @endif
        
    @if(session('error'))
        <div class = "alert">
            <strong> Missing! </strong> Thank's for Submitting the Registration Form.
        </div>
    @endif