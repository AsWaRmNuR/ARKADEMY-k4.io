//disini saya mengunakan callback function 
(function () {
    // dan variabel data_biodata saya simpan dalam bentuk aobjek
    var data_biodata = {
        name: 'Aswar m.nur',
        age: 23,
        addres: 'jogja',
        hobbi: ['turing', 'futsal', 'outdor'],
        is_marrid: false,
        list_schol: [{
            school: 'smk 2 enrekang'
        }, {
            year_in: 2015
        }, {
            year_out: 2019
        }],
        skil: [{
                html: 'advanced'
            },
            {
                css: 'advanced'
            },
            {
                js: 'advanced'
            },
            {
                php: 'advanced'
            },
            {
                mysql: 'advanced or beginner'
            },
            {
                nodejs: 'beginner'
            },
            {
                mongodb: 'beginner'
            }
        ],
        interst_in_coding: true
    }
    // dan sayamengeluarkan nilainya dalm bentuk json mengunakan JSON.stringify() yg saya cetak dalam bentuk console.log()
    console.log(JSON.stringify(data_biodata));
})()
//tool yg saya gunakan adalah viual code
// untuk menjalankannya buka terminal dan sebelumnya saya suda menginstall node js 
// terus ketikan di terminalnya = nede 1.js  