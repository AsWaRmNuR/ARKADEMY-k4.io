const hasil = (nama, pass) => {
    var valid = /[^\_]/;
    var panjang =/^[a-z]{5,8}/;
    
    if (panjang.test(nama)  && valid.test(nama)) {
        console.log('name ok');
    } else {
        console.log('salah');
    }
    if (pass) {
        let valid2 = /^(?=.*?[^\!]).{9,9}$/;
        if (valid2.test(pass)) {
            console.log('pass ok');
        } else {
            console.log('salah');
        }
    }
}
var username = 'aswar_1'
var pass = 'Aswarnu!!';
hasil(username, pass)
//tool yg saya gunakan adalah viual code
// untuk menjalankannya buka terminal dan sebelumnya saya suda menginstall node js 
// terus ketikan di terminalnya = nede 1.js  