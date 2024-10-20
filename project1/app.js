let secilenGun = new Date().toISOString().split('T')[0];

let seciliAy, seciliYil;
    
document.addEventListener('DOMContentLoaded',() =>{
    veriGetir();
});

function günlük(){
    document.getElementById("tarihInput").style.display ="block";
    document.getElementById("tarihInput").value =secilenGun ;
}

function aylık(){
    document.getElementById("tarihInput").style.display = "none";
    let ay = new Date().getMonth() + 1 ;
    seciliYil = new Date().getFullYear();
    seciliAy = ay;
    console.log(`Aylık veri getirilecek : ${seciliYil}-${seciliAy}`);
    veriGetir();
}

function yıllık(){
    document.getElementById("tarihInput").style.display = "none";
    seciliYil = new Date().getFullYear();
    console.log(`Yıllık veri getirilecek : ${seciliYil}`);
    veriGetir();

}





function veriGetir() {

if(document.getElementById("tarihInput").style.display !== "none") {
    secilenGun =document.getElementById("tarihInput").value;
}

      seciliAy = new Date(secilenGun).getMonth() + 1; 
      seciliYil = new Date(secilenGun).getFullYear();


    // API isteği
    fetch(`http://localhost/project1/veri-getir.php?gun=${secilenGun}&ay=${seciliAy}&yil=${seciliYil}`)


    .then(response => response.text())
    .then(data => {
        console.log(data); 
        document.getElementById("sonucAlani").innerText = data; 
    })
    .catch(error => console.error('Hata:', error));
}

function oncekiGun() {
  
    let oncekiTarih = new Date(secilenGun);
    oncekiTarih.setDate(oncekiTarih.getDate() - 1);

    secilenGun = oncekiTarih.toISOString().split('T')[0];
    document.getElementById("tarihInput").value = secilenGun;

    veriGetir(); 
}

function sonrakiGun() {
   
    let sonrakiTarih = new Date(secilenGun);
    sonrakiTarih.setDate(sonrakiTarih.getDate() + 1);

    secilenGun = sonrakiTarih.toISOString().split('T')[0];
    document.getElementById("tarihInput").value =secilenGun;
   
    veriGetir(); 
}

