<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <div class="form">
            <h1>Buat Account Baru!</h1>
            <div class="name">
                <h4>Sign Up Form</h4>
                <form action="/welcome" method="post">
                    @csrf
                    <label for="first_name">First name:</label> <br><br>
                    <input type="text" name="nama1"> <br><br>
                    <label for="last_name">Last name:</label> <br><br>
                    <input type="text" name="nama2"> <br><br>

                    <label for="gender">Gender:</label><br><br>
                    <input type="radio" name="kelamin" value="male"> Male <br>
                    <input type="radio" name="kelamin" value="female">
                    Female <br>
                    <input type="radio" name="kelamin" value="other">
                    Other <br><br>

                    <label for="nationality">Nationality:</label><br><br>
                    <select>
                        <option>Indonesia</option>
                        <option>Singapore</option>
                        <option>Malaysia</option>
                    </select><br><br>
                    
                    <label for="language">Language Spoken:</label><br><br>
                    <input type="checkbox">Bahasa Indonesia <br>
                    <input type="checkbox">Bahasa Inggris <br>
                    <input type="checkbox">Other <br><br>

                    <label for="bio">Bio:</label><br><br>
                    <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>

                    <input type="submit" value="Sign Up">
                
                </form>

                
            </div>
        </div>
    </body>
</html>