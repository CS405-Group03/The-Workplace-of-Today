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
        <title> Workplace of Today </title>

        <meta name = "viewport" width = "device-width" initial-scale = "1">
        <link rel = "stylesheet" type = "text/css" href = "/bacci_css/bacci_register.css">
    </head>

    <body>
        @include('layouts/bacci_web_bg')

        <div class = "form_container">

            <!-- <form class = "formmm" method = "post" action = "{{url('Bacci_UsersController')}}">  -->
                <!-- to send the form to 'Bacci_UsersController' -->
            <form class = "formmm" method = "POST" action = "/register"> 
                @csrf

                <h2 class = "sign_up_title"> Sign Up and Share Something </h2>

                <table class = "form_table">

                    <tr>
                        <td id = "lbl"><label> Last Name : </label></td>
                        <td id = "inp"><input type = "text" name = "form_last_name" id = "txt" placeholder = "ex. Jeon"/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> First Name : </label></td>
                        <td id = "inp"><input type = "text" name = "form_first_name" id = "txt" placeholder = "ex. Jungkook"/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Sex : </label></td>
                        <td id = "inp">
                            <input type = "radio" name = "form_gender" id = "sex" value = "Male"><label> Male </label>
                            <input type = "radio" name = "form_gender" id = "sex" value = "Female"><label> Female </label>
                        </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Birthdate : </label></td>
                        <td id = "inp"><input type = "date" name = "form_birthdate" id = "date"/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Address : </label></td>
                        <td id = "inp"><input type = "text" name = "form_address" id = "txt_add" placeholder = "ex. Rosario, Pasig City"/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Contact Number : </label></td>
                        <td id = "inp"><input type = "text" name = "form_contact_number" id = "txt" placeholder = "+639" value = "+639" maxlength = "13"/> </td>
                    </tr>

                    <tr id = "account">
                        <td id = "inp_acc" colspan = "2">

                        <br>
                        <br>
                        <br>
                            
                            <input type = "text" name = "form_username" id = "txt_acc" placeholder = "Username"/>
                            <input type = "text" name = "form_password" id = "txt_acc" placeholder = "Password"/>
                            <input type = "text" name = "form_confirm_password" id = "txt_acc" placeholder = "Confirm Password"/>
                        </td>
                    </tr>

                </table>

                <!-- <input type = "button" name = "form_submit_button" id = "submit" value = "SUBMIT" onclick = "javascript:alert('Are you sure?')"/> -->

                <button type = "submit" name = "form_submit_button" id = "submit"> SUBMIT </button>
            </form>

        </div>
        
        @include('/layouts/bacci_header')
        @include('/layouts/bacci_footer')
    </body>
</html>