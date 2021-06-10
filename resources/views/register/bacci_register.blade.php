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

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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
                        <td id = "inp"><input type = "text" name = "form_last_name" id = "txt" placeholder = "ex. Jeon" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> First Name : </label></td>
                        <td id = "inp"><input type = "text" name = "form_first_name" id = "txt" placeholder = "ex. Jungkook" required/> </td>
                    </tr>



                    <tr>
                        <td id = "lbl"><label> Sex : </label></td>
                        <td id = "inp">
                            <input type = "radio" name = "form_gender" id = "sex" value = "Male" required><label> Male </label>
                            <input type = "radio" name = "form_gender" id = "sex" value = "Female" required><label> Female </label>
                        </td>
                    </tr>



                    <tr>
                        <td id = "lbl"><label> Birthdate : </label></td>
                        <td id = "inp"><input type = "date" name = "form_birthdate" id = "date" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Address : </label></td>
                        <td id = "inp"><input type = "text" name = "form_address" id = "txt_add" placeholder = "ex. Rosario, Pasig City" required/> </td>
                    </tr>

                    <tr>
                        <td id = "lbl"><label> Contact Number : </label></td>
                        <td id = "inp"><input type = "text" name = "form_contact_number" id = "txt" placeholder = "+639" value = "+639" maxlength = "13" required/> </td>
                    </tr>

                    <tr id = "account">
                        <td id = "inp_acc" colspan = "2">

                        <br>
                            
                            <input type = "text" name = "form_username" id = "txt_acc" placeholder = "Username" required/>
                            <input type = "text" name = "form_password" id = "txt_acc" placeholder = "Password" required/>
                            <input type = "text" name = "form_confirm_password" id = "txt_acc" placeholder = "Confirm Password" required/>
                        </td>
                    </tr>

                </table>

                <!-- <input type = "button" name = "form_submit_button" id = "submit" value = "SUBMIT" onclick = "javascript:alert('Are you sure?')"/> -->

                <div x-data = "{show: false}">
                    <button type = "submit" name = "form_submit_button" id = "submit" @click = "show = !show" href = "/"> SUBMIT </button>


                    <!-- <div x-show = "show">
                        <div class = "alert">
                            <strong> Success! </strong> Thank's for Submitting the Registration Form.
                        </div>
                    </div> -->
                </div>

                <!-- <button type = "submit" name = "form_submit_button" id = "submit" onclick = "javascript:alert(' Success! Thanks for Submitting the Registration Form.')"> SUBMIT </button> -->
            </form>
            <!-- <span class = "success"> Thank's for submitting the form </span> -->

        </div>


        <!--         
            <script src = "{{ asset('js/bacci_script.js') }}">
                            
                $(document).ready(function() {
                    $("form[name='formmm']").submit(function() {

                        // do the extra stuff here
                        $.ajax({
                            type: "POST",
                            url: "{{ asset('js/bacci_script.js') }}",
                            data: $(this).serialize(),
                            success: function() {
                                $('.alert').fadeIn(100).show();

                            }
                        })

                    })
                })

            <div class = "alert">
                <strong> Success! </strong> Thank's for Submitting the Registration Form.
            </div>
            </script> 
        -->
            
        @include('/layouts/bacci_header')
        @include('/layouts/bacci_footer')
    </body>
</html>