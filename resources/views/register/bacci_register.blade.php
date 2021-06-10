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
        <script src = "https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body>
        @include('layouts/bacci_web_bg')

        <div class = "form_container">

            <form class = "formmm" method = "POST" action = "/register"> 
                @csrf

                <h2 class = "sign_up_title"> Sign Up and Share Something </h2>

                <table class = "form_table">

                    <tr>
                        <td id = "lbl"><label> Last Name : </label></td>
                        <td id = "inp"><input type = "text" name = "form_last_name" id = "txt" placeholder = "ex. Jeon" value = "{{ old('form_last_name') }}" minlength = "5" maxlength = "30" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> First Name : </label></td>
                        <td id = "inp"><input type = "text" name = "form_first_name" id = "txt" placeholder = "ex. Jungkook" value = "{{ old('form_first_name') }}" minlength = "5" maxlength = "30" required/> </td>
                    </tr>



                    <tr>
                        <td id = "lbl"><label> Sex : </label></td>
                        <td id = "inp">
                            <input type = "radio" name = "form_gender" id = "sex" value = "Male" value = "{{ old('form_gender') }}" required><label> Male </label>
                            <input type = "radio" name = "form_gender" id = "sex" value = "Female" value = "{{ old('form_gender') }}" required><label> Female </label>
                        </td>
                    </tr>



                    <tr>
                        <td id = "lbl"><label> Birthdate : </label></td>
                        <td id = "inp"><input type = "date" name = "form_birthdate" id = "date" value = "{{ old('form_birthdate') }}" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Address : </label></td>
                        <td id = "inp"><input type = "text" name = "form_address" id = "txt_add" placeholder = "ex. Rosario, Pasig City" value = "{{ old('form_address') }}" minlength = "20" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Contact Number : </label></td>
                        <td id = "inp"><input type = "text" name = "form_contact_number" id = "txt" placeholder = "+639" value = "{{ old('form_contact_number') }}" minlength = "13" maxlength = "13" required/>
                            <br>
                            <span style = "color : red"> {{ $errors->first('form_contact_number') }} </span>
                             </td>
                    </tr>

                    <tr id = "account">
                        <td id = "inp_acc" colspan = "2">

                        <br>
                            
                            <input type = "text" name = "form_username" id = "txt_acc" placeholder = "Username" value = "{{ old('form_username') }}" minlength = "5" maxlength = "20" required/>
                            <span style = "color : red"> {{ $errors->first('form_username') }} </span>
                            <input type = "text" name = "form_password" id = "txt_acc" placeholder = "Password" value = "{{ old('form_password') }}" required/>
                            <span style = "color : red"> {{ $errors->first('form_password') }} </span>
                            <input type = "text" name = "form_confirm_password" id = "txt_acc" placeholder = "Confirm Password" value = "{{ old('form_confirm_password') }}" required/>
                            <br>
                            <span style = "color : red"> {{ $errors->first('form_confirm_password') }} </span>
                        </td>
                    </tr>

                </table>

                <div x-data = "{show: false}">
                    <button type = "submit" name = "form_submit_button" id = "submit" @click = "show = !show" href = "/"> SUBMIT </button>

                    <!-- <div x-show = "show">
                        <div class = "alert">
                            <strong> Success! </strong> Thank's for Submitting the Registration Form.
                        </div>
                    </div> -->
                </div>

            </form>
        </div>
            
        @include('/layouts/bacci_header')
        @include('/layouts/bacci_footer')
    </body>
</html>