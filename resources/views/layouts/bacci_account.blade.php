<!--
    CS405_Group 03
    "The Workplace of Today" (Static Website)

    Members:
    Aguilar, Edward John    ->  Assistant Developer
    Batu, Laurence Angelo   ->  Project Leader
                                Main Developer

    Chiangco, Crista Mae    ->  Website and Pages Layout Handler
                                Main Designer
    Casi, Maria Kyla        ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
    Inodeo, Chara Mae       ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
-->

<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_account.css') }}">
    </head>

    <body>
        <div class = "acc_dropdwn">
            <img class = "user_img" src = "img/ico_user.png">
            
            <div class = "signup_content">
                
                <li class = "sign_in"> Username : </li>
                <input id="sign_in_name" placeholder="Enter Username"/>
                
                <li class = "sign_in"> Password : </li>
                <input id="sign_in_pass" type="password" placeholder="Enter Password"/>

                <li class = "breakline"> </li>
                <li class = "breakline"> </li>
                <li class = "breakline"> </li>

                <a class = "sign" href = ""><li class = "acc"> Sign In </li></a>

                <li class = "breakline"> </li>
                
                <a class = "sign" href = "/register"><li class = "acc"> Sign Up </li></a>

            </div>

        </div>
    </body>
</html>