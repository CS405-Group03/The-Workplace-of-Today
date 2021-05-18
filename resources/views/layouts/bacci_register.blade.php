<html>
    <head>
        <meta name="viewport" width="device-width" initial-scale="1">
        <link rel="stylesheet" type="text/css" href="/bacci_css/bacci_register.css">
    </head>
    <body>
        <div class="form_container">
            <form class="formmm">
                <table>
                    <tr>
                        <td id="lbl"><label>Last Name : </label></td>
                        <td id="inp"><input id="txt" placeholder="ex. Jeon"/></td>
                    </tr>
                    <tr>
                        <td id="lbl"><label>First Name : </label></td>
                        <td id="inp"><input id="txt" placeholder="ex. Jungkook"/></td>
                    </tr>
                    <tr>
                        <td id="lbl"><label>Sex : </label></td>
                        <td id="inp">
                            <input type="radio" id="sex" name="m" value="male"><label>Male</label>
                            <input type="radio" id="sex" name="f" value="female"><label>Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td id="lbl"><label>Birthdate : </label></td>
                        <td id="inp"><input id="date" type="date"/></td>
                    </tr>
                    <tr>
                        <td id="lbl"><label>Address : </label></td>
                        <td id="inp"><input id="txt_add" placeholder="ex. Rosario, Pasig City"/></td>
                    </tr>
                    <tr>
                        <td id="lbl"><label>Contact Number : </label></td>
                        <td id="inp"><input id="txt"/></td>
                    </tr>
                    <tr id="account">
                        <td id="inp_acc" colspan="2">
                            <input id="txt_acc" placeholder="Username"/>
                            <input id="txt_acc" placeholder="Password"/>
                            <input id="txt_acc" placeholder="Confirm Password"/>
                        </td>
                    </tr>
                </table>

                <button id="submit" onclick="javascript:alert('Are you sure?')">Submit</button>
            </form>
        </div>
    </body>
</html>