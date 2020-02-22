let data=function(val){
    let nilai=[];
    for(var i=1;i<=val;i++){
        nilai.push(i)   
        
    }   
    
    nilai.forEach(i=>{
        if(i%3 == 0 && i%7 == 0){
            console.log('arkah demy');
        }else if(i%7 ==0){
            console.log('demy');
        }else  if(i%3 ==0){
            console.log('arka ');
        }else{
            console.log(i);
        }
            
    })
    // console.log(nilai)
   
}
console.log(data(21));
