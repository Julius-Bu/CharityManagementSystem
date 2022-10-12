$(document).ready(function(){

    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 5000);
    
    $("#show-password").on('click', function() {
        $("#hide-password").toggleClass('d-none');
        $(this).toggleClass('d-none');
        $("#password").attr('type', 'text');
    });
    $("#hide-password").on("click", function() {
        $(this).toggleClass('d-none')
        $("#show-password").toggleClass('d-none')
        $("#password").attr('type', 'password');
    });
    
    $("#accountForm").on('submit', function(e) {
        e.preventDefault();
        let url = $(this).attr('action');
        $.ajax({
            url: url,
            type: 'post',
            data: $(this).serializeArray(),
            beforeSend: ()=> {
                $("#register-btn").attr("disabled", true);
                $("#register-btn").html("<span class='spinner-border spinner-border-sm text-light'></span> creating...");
            },
            success: (data) => {
                $(".response").html(data);
            },
            complete: () => {
                $("#register-btn").attr('disabled', false);
                $("#register-btn").html("Create My Account");
                $("#accountForm").trigger('reset');
            }
        });
    });

setInterval(() => {
    if (document.getElementById('time')){
        let timeEl = document.getElementById('time');
        let time = new Date();
        let t = time.toLocaleTimeString();
        timeEl.innerHTML = t;
    }
}, 1000);

$("#loginForm").on('submit', function(e) {
    e.preventDefault()
    const url = $(this).attr('action')
    $.ajax({
        url: url,
        type: "POST",
        data: $(this).serializeArray(),
        beforeSend: () => {
            $(".response").html("<span class='spinner-border spinner-border-sm text-info'></span> Authenticating")
            $(".login-btn").attr("disabled", true)
        },
        success: (response) => {
            let responseDiv = $(".response");
            if (response.status === 200) {
                responseDiv.addClass('alert alert-success fade show w-50')
                responseDiv.html("<i class='fas fa-check-circle text-success'></i> " + response.message)
                window.location.href = response.redirect;
            } else {
                responseDiv.addClass('alert alert-warning fade show');
                responseDiv.html("<i class='fas fa-exclamation-triangle text-warning'></i> " + response.message)
            }
        },
        complete: () => {
            $(".login-btn").attr("disabled", false);
        }
    });
});
});