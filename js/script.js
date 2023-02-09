window.onload = function() {

    // to send request when write text

    let text = document.getElementById('text');

    text.oninput = function() {
        if(this.value.length > 500) {
            alert('Not more than 500 words');
            this.value = '';
        }
        if(this.value.length){
            const qrCode = document.getElementById('qrCode');
            const parameters = '?text=' + this.value;
            const url = 'http://localhost/generator_qr_code/php/qrcode.php'+ parameters;

            qrCode.setAttribute('src',url);
        }
    }
}
    
    
      