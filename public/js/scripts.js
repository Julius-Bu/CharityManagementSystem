;(function(){function id(v){ return document.getElementById(v); }function loadbar() {var ovrl = id("overlay"),prog = id("progress"),stat = id("progstat"),img = document.images,c = 0,tot = img.length;if(tot == 0) return doneLoading();function imgLoaded(){c += 1;var perc = ((100/tot*c) << 0) +"%";prog.style.width = perc;stat.innerHTML = "Loading "+ perc;if(c===tot) return doneLoading();}function doneLoading(){ovrl.style.opacity = 0;setTimeout(function(){ovrl.style.display = "none";}, 1200);}for(var i=0; i<tot; i++) {var tImg     = new Image();tImg.onload  = imgLoaded;tImg.onerror = imgLoaded;tImg.src     = img[i].src;} }document.addEventListener('DOMContentLoaded', loadbar, false);}());
function extractFilename(path) {
    if (path.substr(0, 12) === "C:\\fakepath\\")
        return path.substr(12); // modern browser
    var x;
    x = path.lastIndexOf('/');
    if (x >= 0) // Unix-based path
        return path.substr(x+1);
    x = path.lastIndexOf('\\');
    if (x >= 0) // Windows-based path
        return path.substr(x+1);
    return path; // just the filename
}
function filterTable(input='search', table='') {
    $("#"+input).on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#"+table+" tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

function require_once(file = [])
{
    if(file.length > 0)
    {
        let body = document.querySelector('body');

        for (let i = 0; i < file.length; i++)
        {
            let script = document.createElement('script');
            script.src = window.location.origin + file[i];
            body.appendChild(script);
        }
    }
}

var appScripts = [
    '/js/payments.min.js',
    '/js/flutterwave-api.js',
    '/js/auth.js'
];

require_once(appScripts);