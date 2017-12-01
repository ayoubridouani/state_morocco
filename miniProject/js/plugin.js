/*function show(){
    if(!this.hasAttribute("shoow")){
        this.setAttribute("shoow","yes");
        this.innerHTML="Cliquez ici pour masquer les détails";
        this.previousSibling.style.height=300+"px";
    }
    else{
        this.removeAttribute("shoow");
        this.innerHTML="Cliquez ici pour plus de détails";
        this.previousSibling.style.height=77+"px";
    }

}
var child=document.getElementById("rightnews");
var ch=(child.children.length-1)/2;
var button=document.getElementsByClassName("bota");
for(var i=0;i<=ch;i++){
    button[i].addEventListener("click",show);
}*/
    if(window.innerWidth<=946){
        //alert("lucy");
        var c=document.getElementById("rightnews");
        var len=c.childElementCount-12;
        if(len<0) len=0;
        var uheight=document.getElementById("milieu-principal");
        uheight.style.height=4000 + (len * 111) + "px";
    }
    else{
        var c=document.getElementById("rightnews");
        var len=c.childElementCount-12;
        if(len<0) len=0;
        var uheight=document.getElementById("milieu-principal");
        uheight.style.height=1540 + (len * 111) + "px";
    }
function lucy(){
    if(window.innerWidth<=946){
        //alert("lucy");
        var c=document.getElementById("rightnews");
        var len=c.childElementCount-12;
        if(len<0) len=0;
        var uheight=document.getElementById("milieu-principal");
        uheight.style.height=4000 + (len * 111) + "px";
    }
    else{
        var c=document.getElementById("rightnews");
        var len=c.childElementCount-12;
        if(len<0) len=0;
        var uheight=document.getElementById("milieu-principal");
        uheight.style.height=1540 + (len * 111) + "px";
    }
}