document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && (e.key === 'u' || e.key === 's' || e.key === 'i' || e.key === 'j' || e.key === 'p')) {
        e.preventDefault();
    }
    if (e.key === 'F12' || e.key === 'F10' ) {
        e.preventDefault();
    }
});

document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
});

document.addEventListener("DOMContentLoaded",function(){
    var text = "Fullname: "+jQuery(".nin_surname").text()+" "+jQuery(".nin_othername").text()+" | NIN: "+jQuery(".nin_number").text();
    if (text) {
        jQuery('.replace-qrcode').empty(); 
        
        
        var canvas = document.createElement('canvas');
        jQuery('.replace-qrcode').append(canvas);

        qrVersion = 4;
        var options = {
            margin: 1
        };
        
        QRCode.toCanvas(canvas, text, options, function (error) {
            if (error) {
                console.log(error);
            } else {
                console.log('QR code generated!');
            }
        });
    } else {
        console.log("Error with value");
    }
    

    
});

