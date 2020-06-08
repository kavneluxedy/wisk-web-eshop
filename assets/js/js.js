

if (document.getElementsByClassName('shadow') != '') {

    var username = document.getElementsByClassName('shadow');
    var login = username[1];

    console.log(login.name+' = '+login.value);

    if (RegExp('0', login.value)) {
        console.log('RegExp respected : False');
    } else {
        console.log('RegExp respected : True');
        }
    };
