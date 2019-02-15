 $(document).ready(function() {
    $('form').click(function(event){
        $(".form-success").html("")
    })

    $(".name-label").click(function(event){
        $(".error-message-name").html("");
    })
    $(".surname-label").click(function(event){
        $(".error-message-surname").html("");
    })
    $(".email-label").click(function(event){
        $(".error-message-email").html("");
    })
    $(".password-label").click(function(event){
        $(".error-message-password").html("");
    })
    $(".phone-label").click(function(event){
        $(".error-message-phone").html("");
    })
    $(".country-label").change(function(event){
        $(".error-message-country").html("");
    })
    $("#submit").click(function(event){
       var csrftoken = $('meta[name=csrf-token]').attr('content');

       var form_json = $('form').serializeObject();
       is_valid_form = custom_form_validation(form_json);

       if (is_valid_form === true)
       {
            $.ajaxSetup({
                beforeSend: function(xhr, settings) {
                    if (!/^(GET|HEAD|OPTIONS|TRACE)$/i.test(settings.type) && !this.crossDomain) {
                        xhr.setRequestHeader("X-CSRFToken", csrftoken)
                    }
                }
            })

           var form_te = {
           first_name : form_json.name,
           last_name : form_json.surname,
           email : form_json.email,
           mobile : form_json.phone,
           country : form_json.country,
           how : form_json.how,
           type : form_json.role
           };

           $.ajax({
                url: "/register"+"/"+$('html').attr('lang'),
                type: "post",
                data: JSON.stringify(form_json),
                contentType: "application/json; charset=utf-8",
                dataType: "text",
                success: function(result){

                    window.location.hash = '#enrolled';

                    if ("ga" in window) {
                        tracker = ga.getAll()[0];
                        if (tracker){
                            tracker.send('event', 'Enrolled', 'Enrolled');
                        }
                    }

                    $.ajax({
                        url: 'http://www.talentera.com/en/arabcoders',
                        data: form_te,
                        type: 'GET',
                        crossDomain: true,
                        dataType: 'jsonp'
                    });

                    $(".form-success").html('<div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" style="display: block;" role="alert">' + result + '</div>')
                    $('form').find("input[type=text], input[type=tel], input[type=email]").val("");
                    $('form').find("select").prop('selectedIndex', 0);
                    setTimeout(function(){
                        $(".error-message-name").text("");
                        $(".error-message-surname").text("");
                        $(".error-message-email").text("");
                        $(".error-message-password").text("");
                        $(".error-message-phone").text("");
                        $(".error-message-internal").text("");
                    }, 100);
                },
                error: function(xhr){

                    var errors = JSON.parse(xhr.responseText)
                    if (errors.phone){
                       var string = ""
                       for (var err in errors.phone){
                            string += errors.phone[err]+"<br>"
                        };
                        $(".error-message-phone").html(string);
                    }
                    if (errors.email){
                       var string = ""
                       for (var err in errors.email){
                            string += errors.email[err]+"<br>"
                        };
                        $(".error-message-email").html(string);
                    }
                    if (errors.registration){
                       var string = ""
                       for (var err in errors.registration){
                            string += errors.registration[err]+"<br>"
                        };
                        $(".error-message-password").html(string);
                    }
                    if (errors.name){
                       var string = ""
                       for (var err in errors.name){
                            string += errors.name[err]+"<br>"
                        };
                        $(".error-message-name").html(string);
                    }
                    if (errors.surname){
                       var string = ""
                       for (var err in errors.surname){
                            string += errors.surname[err]+"<br>"
                        };
                        $(".error-message-surname").html(string);
                    }
                    if (errors.country){
                       var string = ""
                       for (var err in errors.country){
                            string += errors.country[err]+"<br>"
                        };
                        $(".error-message-country").html(string);
                    }
                    if (errors.internal){
                        var string = ""
                        for (var err in errors.internal){
                            string += errors.internal[err] + "<br>"
                        };
                        $(".error-message-internal").html(string);
                    }
                    if (errors.invalid_email){
                        var string = ""
                        for (var err in errors.invalid_email){
                            string += errors.invalid_email[err] + "<br>"
                        };
                        $(".error-message-email").html(string);
                    }
                    $(".processing").html("")
                }
           })
       }
    });

 data = function(){
    console.log('callback!')
 }
 $.fn.serializeObject = function()
    {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
    };

 var custom_form_validation = function(form_json) {
     var error = 0;

     var err_email = $('.translations .error-msg-email').text();
     var err_name = $('.translations .error-msg-first-name').text();
     var err_surname = $('.translations .error-msg-surname').text();
     var err_phone = $('.translations .error-msg-phone').text();
     var err_country = $('.translations .error-msg-country').text();

     // Name field
     if (form_json.name === '') {

         $(".error-message-name").html(err_name);
         error += 1;
     }
     else {
         $(".error-message-name").html('');
     }

     // Surname field
     if (form_json.surname === '') {
        $(".error-message-surname").html(err_surname);
        error += 1;
     }
     else {
         $(".error-message-surname").html('');
     }

     // Country field
     if (form_json.country === '') {

         $(".error-message-country").html(err_country);
         error += 1;
     }
      else {
         $(".error-message-country").html('');
     }

     // Email field
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     if (form_json.email === '')
     {
         $(".error-message-email").html(err_email);
     }
     else if (re.test(form_json.email) === false)
     {
         $(".error-message-email").html(err_email);
         error += 1;
     }
     else {
         $(".error-message-email").html('');
     }

     // Phone field
     if (form_json.phone === '') {
         $(".error-message-phone").html(err_phone);
         error += 1;
     }
     else {
         $(".error-message-phone").html('');
     }

     if (error > 0)
     {
         return false;
     }
     else
     {
         return true;
     }
 };
});
