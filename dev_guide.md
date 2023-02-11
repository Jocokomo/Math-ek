# FEJLESZTÖI ÚTMUTATÓ
_A matematikai játék JavaScript programhoz._<br><br>

A fejlesztői útmutató célja, hogy segítsen a fejlesztőknek a kód jobb megértésében és a könnyebb használatában.<br>


## 1. Projekt áttekintés:
A projekt célja egy egyszerű matematikai játék megvalósítása, amellyel összeadás, kivonás, szorzás és osztás műveleteket gyakorolhatnak a kikiskolások. A felhasználó a képernyőn megjelenő három lehetséges válasz közül kattintással tudja kiválasztani az általa helyesnek vélt megoldást, hogy megoldja a megadott matematikai műveletet. Ha a válasz helyes, akkor egy új művelet jelenik meg, különben egy rossz válasz hangjelzést játszik le.

A kód négy funkciót tartalmaz, az összeadás, kivonás, szorzás és osztás műveletekhez, valamint néhány változót, amelyek a műveletek megoldásához és a hangjelzések lejátszásához szükségesek. Az eseménykezelők biztosítják, hogy a felhasználó válaszai reagáljanak a rendszerre, és új műveletek jelenjenek meg vagy a rossz válasz hangjelzése játssza le.
<br><br>
## 2. Követelmények és eszközök:
A következőben említésre kerülnek a szoftver rendszerkövetelményei és a fejlesztői eszközök, amelyekre szükség van a kód futtatásához.

### Követelények: <br>
Web böngésző: Az alkalmazás böngészőben fut, így a fejlesztőnek egy olyan web böngészőre van szüksége, amely támogatja a JavaScriptet és a HTML/CSS-t. Például Google Chrome, Microsoft Edge, Mozilla Firefox, Safari, stb.
HTML/CSS/JavaScript ismeret: Az alkalmazás HTML, CSS és JavaScript nyelven íródott, így a fejlesztőnek megfelelő ismeretekkel kell rendelkezni ezekről a nyelvekről.

### Fejlesztői eszközök: <br>
Szövegszerkesztő: A fejlesztőnek szüksége lesz egy olyan szövegszerkesztőre, amely támogatja a HTML, CSS és JavaScript fájlok szerkesztését (pl.:Notepad++). de a megfelelö működéshez inkább egy fejlesztői környezet használata (Pl.:VS Code) ajánlott
Böngésző konzol: A fejlesztőnek szüksége lehet a böngésző konzolának használatára a hibakereséshez és a kód optimalizálásához.
<br><br>
## 3. Futtatás:
A kód futtatásának lépései, amelyeket a fejlesztőnek kell követnie:
- Töltse le a kódot és csomagolja ki a tömötített állományt,  vagy ha git-et használ, akkor a git clone paranccsal töltse le a számítógépére a repository-t.
- Nyisson meg egy fejlesztői környezetet (például Visual Studio Code), és importálja a kódokat az előbbiekben kicsomagolt mappa megnyitásával.
- Ellenőrizze a beállításokat.
- Indítsa el a kód futtatását a fejlesztői környezetben.
- Ellenőrizze a kimenetet, hogy meggyőződjön a kód helyes működéséről.
- Végezze el a szükséges módosításokat és futtassa újra a kódot, ha szükséges.
   <br>

<br>
<h2> 4. Funkciók dokumentálása:</h2>
A funkciók részletes leírása, beleértve a céljukat, a paramétereiket és a visszatérési értékeiket.<br>

A program 4 függvényt tartalmaz: "osszeadás", "kivonás", "szorzás", "osztás". Az alábbiakban a funkciók részletes leírása:<br>
"osszeadás": a függvény célja két véletlenszerűen generált szám összeadása. A paraméterei nincsenek. A visszatérési értéke a két szám összege.<br>
"kivonás": a függvény célja két véletlenszerűen generált szám kivonása. A paraméterei nincsenek. A visszatérési értéke a két szám különbsége.<br>
"szorzás": a függvény célja két véletlenszerűen generált szám szorzása. A paraméterei nincsenek. A visszatérési értéke a két szám szorzata.<br>
"osztás": a függvény célja két véletlenszerűen generált szám osztása. A paraméterei nincsenek. A visszatérési értéke a két szám hányadosa.<br><br>

## 5. Változók dokumentálása:<br>
A változók részletes leírása, beleértve a szerepüket és az értékeiket. A kód a következö változókat tartalmazza:
valasz1, valasz2, valasz3: Az aktuális feladat három válaszának HTML elemeinek referenciáit tartalmazza.<br>
szam1: Az aktuális feladat első száma.<br>
szam2: Az aktuális feladat második száma.<br>
helyesValasz: Az aktuális feladat helyes válaszának értékét tárolja.<br>
rosszValasz1: Az aktuális feladat egy hamis válasza.<br>
rosszValasz2: Az aktuális feladat másik hamis válasza.<br>
osszesValasz: Az aktuális feladat helyes és hamis válaszai.<br>
valaszto: Az aktuális feladat véletlenszerűen rendezett válaszai.<br>
audio: A "rossz válasz" hangját lejátszó HTML elem referenciáját tartalmazza.<br>
<br>
## 6. Egyéb információk és példa a használatukra:
A kód a document.getElementById() függvény használatával hivatkozik a HTML oldalán lévő elemekre, például a válaszlehetőségekre és az audiofájlra.<br>
A Math.floor(Math.random())  függvénya véletlenszerűen generált számok előállítására szolgál, ahol Math.random() visszaad egy véletlenszerű számot a meghatározott tartomány között.<br>
A műveletek eredményét az eval() függvény számítja ki.<br>
valasz1.innerHTML = valaszto[0];: Az valasz1 nevű HTML elem tartalmának beállítása a valaszto tömb 0. elemére.<br>
if(valasz1.innerHTML == helyesValasz){: Ellenőrzi, hogy a valasz1 nevű HTML elem tartalma megegyezik-e a helyesValasz változó értékével. Ha igen, akkor az adott művelet újra fut.<br>
var szam1 = Math.floor(Math.random() ): A szam1 változó értékét a meghatározott tartományon belül véletlen számmá alakítja.<br>
helyesValasz = eval(szam1 + szam2);: A helyesValasz változó értékét a szam1 és szam2 összegének értékére alakítja.<br>
<br>
## 7. Hibakeresés:<br>
### Ezek a hibakeresési lépések segíthetnek a fejlesztőnek a kód hibájának meghatározásában és kijavításában:

- Ellenőrizze a HTML kód szintaktikai helyességét, hogy biztosan létezik-e az elem, amelyre a kód hivatkozik (pl.: "document.getElementById("szam1")").
- Ellenőrizze, hogy a JavaScript fájl megfelelően van-e csatlakoztatva az HTML fájlhoz.
- Ellenőrizze a változók deklarálását és értékadását, hogy biztosan létezik-e a változó, amikor a kód hivatkozik rá.
- Ellenőrizze a "Math.floor()" és "Math.random()" funkciók működését, hogy biztosan helyesen adják-e vissza az értékeiket.
- Ellenőrizze az "if" szerkezetet, hogy biztosan a megfelelő feltétel alapján működik-e.
- Ellenőrizze a "eval()" funkciót, hogy biztosan helyesen értelmezi-e a számításokat.
- Szerezzen be valós adatokat, és ellenőrizze a kód működését, hogy biztosan a várt eredményt adja-e vissza.<br>
<br>
## 8. Manuális teszt dokumentálása<br>
A teszt során a program összes funkcióját és képességét alaposan megvizsgáltam. A tesztet html fájlba illesztett utasításokkal végeztem.
A program működését az alábbi html kódok beillesztésével ellenőrizheti:

Osszeadás:
```html
<audio id="rosszValaszMp3">
	<source src="rossz.mp3" type="audio/mpeg">
</audio>
<h1 id="szam1"></h1>
<h1>+</h1>
<h1 id="szam2"></h1>
<h1>=</h1>
<h1 id="valasz1"></h1>
<h1 id="valasz2"></h1>
<h1 id="valasz3"></h1>
<script src="osszeadas.js"></script>
```

Kivonás:
```html
<audio id="rosszValaszMp3">
	<source src="rossz.mp3" type="audio/mpeg">
</audio>
<h1 id="szam1"></h1>
<h1>-</h1>
<h1 id="szam2"></h1>
<h1>=</h1>
<h1 id="valasz1"></h1>
<h1 id="valasz2"></h1>
<h1 id="valasz3"></h1>
<script src="kivonas.js"></script>
```

Szorzás:
```html
<audio id="rosszValaszMp3">
	<source src="rossz.mp3" type="audio/mpeg">
</audio>
<h1 id="szam1"></h1>
<h1>*</h1>
<h1 id="szam2"></h1>
<h1>=</h1>
<h1 id="valasz1"></h1>
<h1 id="valasz2"></h1>
<h1 id="valasz3"></h1>
<script src="szorzas.js"></script>
```

Osztás:
```html
<audio id="rosszValaszMp3">
	<source src="rossz.mp3" type="audio/mpeg">
</audio>
<h1 id="szam1"></h1>
<h1>/</h1>
<h1 id="szam2"></h1>
<h1>=</h1>
<h1 id="valasz1"></h1>
<h1 id="valasz2"></h1>
<h1 id="valasz3"></h1>
<script src="osztas.js"></script>
```

A tesztelés során a felmerülő hibák javításra kerültek.