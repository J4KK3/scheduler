
function openSideMenu(){
    document.getElementById('sidemenu').style.display='initial';
    setTimeout(() => {  document.getElementById('sidemenu').style.width='30vh'; }, 30);
    document.getElementById('sidemenu-content').style.display='initial';
    document.getElementById('sidemenubutton').style.display='none';
}

function closeSideMenu(){
    document.getElementById('sidemenu').style.width='0';
    setTimeout(() => {  document.getElementById('sidemenu').style.display='none'; }, 250);
    document.getElementById('sidemenu-content').style.display='none';
    setTimeout(() => {  document.getElementById('sidemenubutton').style.display='initial'; }, 200);
    
}
