//alert(price);
var price=document.getElementById("pri").innerHTML;
var qtyv=document.getElementById("q").value;
function add(){  
    qtyv++;
    document.getElementById("qty").innerHTML=qtyv;
    document.getElementById("q").value=qtyv;
    document.getElementById("p").value=qtyv*price;
    tt=qtyv*price;
    total(tt)
}
function minus(){    
    if(qtyv>1){
        qtyv--;            
    document.getElementById("qty").innerHTML=qtyv;
    document.getElementById("q").value=qtyv;
    document.getElementById("p").value=qtyv*price;
    tt=qtyv*price;
    total(tt)
    }
    else if(qtyv<1){
        qtyv=1;
    }
}
function total(total){
    document.getElementById("total").value=total+50;
}