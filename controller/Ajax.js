/*function inscript(event){

    event.preventDefault();

    const username = document.querySelector('#username');
    const password = document.querySelector('#password');
    const firstname = document.querySelector('#firstname');
    const lastname = document.querySelector('#lastname');
    const promo = document.querySelector('#promo');
    const mail = document.querySelector('#mail');

    const data = new FormData();
    data.append('username',username.content);
    data.append('password',password.content);
    data.append('firstname',firstname.content);
    data.append('lastname',lastname.content);
    data.append('promo',promo.content);
    data.append('mail',mail.content);

    const ajax = new XMLHttpRequest();
    ajax.open('POST', '../controller/UserController.php?status=inscription');
    ajax.send(data);

}*/

//document.querySelector('form').addEventListener('submit', inscript);
(function () {
    "use strict";

    var request;

    $("#signup-fo").submit(function (event) {
        event.preventDefault();

        if(request){
            request.abort();
        }

        var $form = $(this);

        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);

        request = $.ajax({
            url: "../controller/UserController.php?status=inscription",
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("Ok!");
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    });
}) ();



(function () {
    "use strict";

    var request_login;

    $("#form-login").submit(function (event) {
        event.preventDefault();

        if(request_login){
            request.abort();
        }

        var $form = $(this);

        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);

        request_login = $.ajax({
            url: "../controller/UserController.php?status=connexion",
            type: "post",
            data: serializedData
        });

        request_login.done(function (data){
            console.log(data);
            if(data.success){
                window.location = data.url_redirect;
            }else{
                console.log(data.message);
            }
            console.log("Ok!");
        });

        request_login.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

        request_login.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    });
}) ();

