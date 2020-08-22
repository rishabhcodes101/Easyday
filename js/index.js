var img=["article.jpg","bread.jpg","food.jpg","tea.jpg"];
var i=0;
function slide()
{
//alert("hiii");
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",5000);
}