const valasz1 = document.getElementById("valasz1"),
      valasz2 = document.getElementById("valasz2"),
      valasz3 = document.getElementById("valasz3"),
      audio = document.getElementById("rosszValaszMp3");  
var helyesValasz = 0;

function szorzas(){ 
  var szam1 = Math.floor(Math.random() * 11),
      szam2 = Math.floor(Math.random() * 11),
      rosszValasz1 = Math.floor(Math.random() * 50),
      rosszValasz2 = Math.floor(Math.random() * 50),
      osszesValasz = [],
      valaszto = [];

  helyesValasz = eval(szam1 * szam2);
  
  document.getElementById("szam1").innerHTML = szam1; 
  document.getElementById("szam2").innerHTML = szam2; 

  osszesValasz = [helyesValasz, rosszValasz1, rosszValasz2];

  for (i = osszesValasz.length; i--;){
    valaszto.push(osszesValasz.splice(Math.floor(Math.random() * (i + 1)), 1)[0]);
  };

  valasz1.innerHTML = valaszto[0];
  valasz2.innerHTML = valaszto[1];
  valasz3.innerHTML = valaszto[2]; 

};

valasz1.addEventListener("click", function(){
    if(valasz1.innerHTML == helyesValasz){
      szorzas();
    }
    else{
      audio.play();
    }
});

valasz2.addEventListener("click", function(){
    if(valasz2.innerHTML == helyesValasz){
      szorzas();
    }
    else{
      audio.play();
    }
});

valasz3.addEventListener("click", function(){
    if(valasz3.innerHTML == helyesValasz){
     szorzas();
    }
    else{
      audio.play();
    }
});

szorzas()

