$(document).ready(function ()
{
    $("#submit").click(function ()
    {
        var valid = true;

    /**************************************************Nom Prenom**************************************************/

        if ($("#nom").val() == "")
        {
            $("#errornom").fadeIn().text("Veuillez entrer votre nom !");
            valid = false;
        }

        else if (!$("#nom").val().match(/^[a-z.-]+$/i))
        {
            $("#errornom").fadeIn().text("Veuillez entrer un nom valide!");
            valid = false;
        }

        else
        {
            console.log("bon nom");
            $("#errornom").fadeOut();
        }

    /**************************************************Pseudo**************************************************/

        if ($("#pseudo").val() == "")
        {
            $("#errorpseudo").fadeIn().text("Veuillez entrer votre nom !");
            valid = false;
        }

        else if (!$("#pseudo").val().match(/^[a-z.-]+$/i))
        {
            $("#errorpseudo").fadeIn().text("Veuillez entrer un nom valide!");
            valid = false;
        }

        else
        {
            console.log("bon pseu");
            $("#errorpseudo").fadeOut();
        }

    /**************************************************Email**************************************************/

        if ($("#email").val() == "")
        {
            $("#erroremail").fadeIn().text("Veuillez entrer un email.");
            valid = false;
        }

        else if (!$("#email").val().match(/^[a-z0-9._-]+@[a-z0-9.-]{1,}[.][a-z]{2,3}$/))
        {
            $("#erroremail").fadeIn().text("L'email n'est pas au format valide.");
            valid = false;
        }

        else
        {
            console.log("bon mail");

            $("#erroremail").fadeOut();
        }

    /**************************************************Mdp**************************************************/

        if ($("#mdp").val() == "")
        {
            $("#errormdp").fadeIn().text("Veuillez entrer votre mdp !");
            valid = false;
        }

        else if (!$("#mdp").val().match("^(?=.*[a-z])(?=.*[0-9])(?=.{5,})"))
        {
            $("#errormdp").fadeIn().text("Veuillez entrer un password minimum 5 caracteres + 1 chifre  !");
            valid = false;
        }

        else
        {
            console.log("bon mdp");
            $("#errormdp").fadeOut();
        }


    /**************************************************Mdp2**************************************************/

        if ($("#mdp2").val() == "")
        {
            $("#errormdp2").fadeIn().text("Veuillez confirmer votre mdp !");
            valid = false;
        }

        if ($("#mdp2").val() != $("#mdp").val())
        {
            $("#errormdp2").fadeIn().text("Veuillez saisir le meme password !");
            valid = false;
        }

        else
        {
            console.log("bon mdp2");
            $("#errormdp2").fadeOut();
        }


    /**************************************************|**************************************************/

        console.log(valid);

        if (valid == true)
        {
        alert($("#nom").val() + " votre compte a bien ete cree !");
            $.ajax({
                url: "inscription.php",
                
                method: "POST",
                data: {
                    "validation": "submit",
                    "nom": $("#nom").val(),
                    "email": $("#email").val(),
                    "mdp": $("#mdp").val(),
                },
                success: function (value)
                {
                    window.location = 'index.html';
                }
            });
        }
    });
        
//***************************************************************************************************************//

    $("#login").click(function (){

        $.ajax({
            url: "login.php",
            method: "POST",
            data: {
                "login": "submit",
                "email": $("#email").val(),
                "mdp": $("#mdp").val(),
            },
            success: function (value)
            {
                alert(value);
                if (value == "connexion reussie")
                {
                    window.location = 'profile.php';
                }
            }
        });
    });
});