# A JavaScript program működésének bemutatása
Az alábbi leírásban részletesen bemutatom a program működését, melyhez az osszeadas.js fájlt vettem alapul. A kivonás, a szorzás és az osztás scriptek is ezen az elven működnek, csak ott a 'helyesValasz = eval(szam1 + szam2);' függvényben az összeadás helyett az adott alapművelet kerül futtatásra ill.néhány kisebb eltérés van.<br>
A program a Microsoft Visual Studio Code fejlesztői környezet 1.75.1-es verziójában készült.
## Az osszeadas.js felépítése:
```JavaScript
const valasz1 = document.getElementById("valasz1"),
      valasz2 = document.getElementById("valasz2"),
      valasz3 = document.getElementById("valasz3"),
      audio = document.getElementById("rosszValaszMp3");  
var helyesValasz = 0; 

function osszeadas(){ 
  var szam1 = Math.floor(Math.random() * 11),
      szam2 = Math.floor(Math.random() * 11),
      rosszValasz1 = Math.floor(Math.random() * 10),
      rosszValasz2 = Math.floor(Math.random() * 10),
      osszesValasz = [],
      valaszto = [];

  helyesValasz = eval(szam1 + szam2);
  
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
      osszeadas();
    }
    else{
      audio.play();
    }
});
valasz2.addEventListener("click", function(){
    if(valasz2.innerHTML == helyesValasz){
      osszeadas();
    }
    else{
      audio.play();
    }
});
valasz3.addEventListener("click", function(){
    if(valasz3.innerHTML == helyesValasz){
      osszeadas();
    }
    else{
      audio.play();
    }
});

osszeadas()
```
# Az osszeadas.js működésének a részletes bemutatása

### 1. Lekérdezi a HTML oldalon lévő valasz1, valasz2, valasz3 és audio elemeket a document.getElementById metódussal. 
``` JavaScript
const valasz1 = document.getElementById("valasz1"),
      valasz2 = document.getElementById("valasz2"),
      valasz3 = document.getElementById("valasz3"),
      audio = document.getElementById("rosszValaszMp3");  
```
### 2. Létrehozza a helyesValasz változót, amelynek alapértelmezett értéke 0. 
``` JavaScript
var helyesValasz = 0;
```
### 3. Meghívja az osszeadas() függvényt, amely a játék logikáját tartalmazza. 
``` JavaScript
function osszeadas(){ 
```
### 4. Az osszeadas() függvény először véletlenszerűen generál két számot szam1 és szam2 változókban a Math.floor(Math.random() * 11) függvénnyel. 
``` JavaScript
  var szam1 = Math.floor(Math.random() * 11),
      szam2 = Math.floor(Math.random() * 11),
```
### 5. Az osszeadas() függvény két rossz választ generál rosszValasz1 és rosszValasz2 változókban a Math.floor(Math.random() * 10) függvénnyel. 
``` JavaScript
      rosszValasz1 = Math.floor(Math.random() * 10),
      rosszValasz2 = Math.floor(Math.random() * 10),
```
### 6. Létre hozza az osszesValasz és a valaszto tömböket 
``` JavaScript
      osszesValasz = [],
      valaszto = [];
```
### 7. A helyes választ kiszámítja helyesValasz változóban az eval(szam1 + szam2) függvénnyel. 
``` JavaScript
  helyesValasz = eval(szam1 + szam2);
```
### 8. Beállítja a HTML oldalon lévő szam1 és szam2 elemek tartalmát a generált szam1 és szam2 változókra.   
``` JavaScript
  document.getElementById("szam1").innerHTML = szam1; 
  document.getElementById("szam2").innerHTML = szam2; 
```
### 9. Az összes választ egy tömbbe helyezi osszesValasz tömbbe a helyesValasz, rosszValasz1 és rosszValasz2 változókkal. 
``` JavaScript
  osszesValasz = [helyesValasz, rosszValasz1, rosszValasz2];
```
### 10. A valaszto tömböt véletlenszerűen rendezi a osszesValasz tömb elemeinek áthelyezésével a ciklus segítségével. 
``` JavaScript
  for (i = osszesValasz.length; i--;){
    valaszto.push(osszesValasz.splice(Math.floor(Math.random() * (i + 1)), 1)[0]);
  };
```
### 11. Beállítja a HTML oldalon lévő valasz1, valasz2 és valasz3 elemek tartalmát a valaszto tömb első, második és harmadik elemeire.
``` JavaScript
  valasz1.innerHTML = valaszto[0];
  valasz2.innerHTML = valaszto[1];
  valasz3.innerHTML = valaszto[2]; 
};
```
### 12. Az valasz1, valasz2 és valasz3 elemekre hozzáadott kattintási események meghívják az osszeadas() függvényt, ha a felhasználó által kiválasztott válasz egyenlő a helyesValasz változó értékével. Azaz, ha a felhasználó a HTML oldalon lévő valasz1, valasz2 vagy valasz3 elemre kattint, akkor az elemre hozzáadott esemény indítja el az osszeadas() függvényt. Ha a kiválasztott válasz egyenlő a helyesValasz változó értékével, akkor az osszeadas() függvény újra elindítja a játékot. Ha a kiválasztott válasz nem egyenlő a helyesValasz változó értékével, akkor lejátszódik a "rosszValaszMp3" audio elem a audio.play() függvénnyel.
``` JavaScript
valasz1.addEventListener("click", function(){
    if(valasz1.innerHTML == helyesValasz){
      osszeadas();
    }
    else{
      audio.play();
    }
});
valasz2.addEventListener("click", function(){
    if(valasz2.innerHTML == helyesValasz){
      osszeadas();
    }
    else{
      audio.play();
    }
});
valasz3.addEventListener("click", function(){
    if(valasz3.innerHTML == helyesValasz){
      osszeadas();
    }
    else{
      audio.play();
    }
});
```
### 13. Az osszeadas() függvény végén az osszeadas() hívás meghívja önmagát, ami lehetővé teszi, hogy a játék folyamatosan indítható legyen. 
``` JavaScript
osszeadas()
```