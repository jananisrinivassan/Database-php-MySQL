<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </Script>
    <script>
        $(function() {
            $("#sub").click(function()
            {
                let user_nom = $("#nom").val();
                console.log(user_nom);
                let user_email = $("#email").val();
                console.log(user_email);
                let user_sujet = $("#sujet").val();
                console.log(user_email);
                let user_message = $("#message").val();
                console.log(user_message);
                $.ajax({
                    url:'db.php',
                    type:'POST',
                    data: {nom:user_nom, email:user_email, sujet:user_sujet, message:user_message},
                    success:function(data){
                        $("#result").html(data);
                    }
                })                
            })
        })
    </script>
</head>
<body>
    <h1>CONTACT FORM</h1>
  
    <form action="" method="post" onsubmit="return false">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="votre nom ici" required>
    </p>
    <p>
        <label for="nom">Email :</label>
        <input type="email" name="email" id="email" placeholder="Votre Email ici" required>
    </p>
    <p>
        <label for="sujet">Sujet :</label>
        <input type="text" name="sujet" id="sujet" placeholder="Sujet">
    </p>
    <p>
        <label for="message">Message :</label> <br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message ici"></textarea>
    </p>
    <input type="submit" id="sub" value="ENVOYER">
    </form>
    <div id="result">

    </div>
</body>
</html>