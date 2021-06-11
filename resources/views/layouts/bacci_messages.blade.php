
    <head>
        <meta name = "viewport" width = "device-width" initial-scale = "1">
        <link rel = "stylesheet" type = "text/css" href = "/bacci_css/bacci_register.css">
        <script src = "https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    @if($message = Session::get('error'))
        <div class = "alertt">
            <button type = "button" class = "close" data-dismiss = "alert"> x </button>
            <strong> {{ $message }} </strong>
        </div>
    @endif

    @if(count($errors) > 0)
            <div class = "alertt">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
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