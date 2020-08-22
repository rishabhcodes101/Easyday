//alert(price);
var price=document.getElementById("pri").innerHTML;
var qtyv=document.getElementById("q").value;
function plus(){  
    qtyv++;
    document.getElementById("qty").innerHTML=qtyv;
    //document.getElementById("q").value=qtyv;
    document.getElementById("p").value=qtyv*price;
    tt=qtyv*price;
    total(tt)
}
function min(){    
    if(qtyv>=1){
        qtyv--;            
    document.getElementById("qty").innerHTML=qtyv;
    //document.getElementById("q").value=qtyv;
    document.getElementById("p").value=qtyv*price;
    tt=qtyv*price;
    total(tt)
    }
    else if(qtyv<=0){
        qtyv=0;
    }
}
function total(total){
    document.getElementById("total").value=total+50;
}