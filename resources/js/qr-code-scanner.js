import QrScanner from 'qr-scanner';


function urlDecoderGetQrcode(url) {
    const parts = url.split('?');
    if (parts.length < 1) return null;
    const searchParams = new URLSearchParams(parts[1]);
    if (!searchParams.has('qrcode')) return null;
    return searchParams.get('qrcode')
}

function getInputValueById(id) {
    const input = document.getElementById(id)
    if (!input) return null
    return input.value
}
function getInputValueByname(name) {
    const input = document.getElementsByName(name)
    if (!input.length >= 1) return null
    return input[0].value
}

function getInputByClasse(classe) { // querySelector
    const input = document.querySelector(classe)
    if (!input) return null
    return input.value
}

const qrScanner = new QrScanner(
    document.getElementById('qr-video'),
    result => {
        console.log(result);
        qrScanner.stop();

        //urldecoder 
        const qrCode = urlDecoderGetQrcode(result.data);

        let calbackurl = getInputValueById('calbackurl');

        if (!qrCode || !calbackurl) return qrScanner.start();


        const statusid = getInputByClasse(".checkbox:checked")

        const returnurl = getInputValueById('returnurl');

        console.log(qrCode, calbackurl, statusid, returnurl);

        calbackurl += "?qrCode=" + qrCode + "&"

        if (returnurl) calbackurl += "returnurl=" + returnurl + "&"
        if (statusid) calbackurl += "statusid=" + statusid + "&"

        window.location.replace(calbackurl);


    },


    {
        highlightCodeOutline: true,
        highlightScanRegion: true,

    }
);


qrScanner.start();


