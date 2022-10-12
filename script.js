const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = '#cbc0d3';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'whitesmoke';
        body.style.transition = '2s';
    }
});


function a(){
    if(confirm("Apakah ingin pesan?")){
        alert("pesanan anda telah di buat")
    }
    else{
        alert("membatalkan pesanan")
    }
}
function layer1(){
    document.getElementById('foto').src="gambar/fotoku2.jpeg";
}

function layer2(){
   document.getElementById('foto').src="gambar/fotoku.jpeg";
}
document.getElementById('foto').addEventListener('mouseover', layer1);
document.getElementById('foto').addEventListener('mouseout', layer2);
