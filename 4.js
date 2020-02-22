function coba(val){
   let x= val.replace(/[^\w\s]/gi, '').split(' ').join('');


     let  data=[];
      let n=[]
    for(let i=0;i<x.length;i++){
            n.push(x[i])
        if(3==n.length){
           data.push(n);
           n=[]
        }
    }

    let data2=[]
    data.forEach(xy=>{
        let hsl =xy.splice(',').join('')  
        data2+='-'+hsl
    })
    console.log(data2);
    
    
}

console.log(coba('9993141 -11323 14-2232'));
