# gworks
Haaste


Hei!

Pahoittelut siitä että en eilen saanut työtä palautettua, tässä tosiaan vedetään opiskelun vikaa viikkoa tältä lukuvuodelta, ja siihen päälle pari projektia, ja vielä työ ni sai hiki hatussa vääntää tota.

Elikkäs tässä tulee tuo työ,
Työtunteja ehkä 5-6(?)

Livenä löytyy täältä:
gworks.tavux.fi
(Ei https)


Ja tästä teeman repo:
https://github.com/termoras/gworks


Eimitään kummallisempia, vaan pidin asian hyvin yksinkertaisena. Vanilla PHP, JavaScript, Scss. Ainoana lisäosana toimii ACF.



Kilpailut ovat custom post:eja (Event)



Sivu ei ole responsiivinen, haastetta varten tehty vain ns. Desktop versio. Kokeilin ja puhelimella turha katsoa. Itsellä ollut 4k näyttö niin pienemmissä resoluutioissa voi "kilpailut kohta" mennä rikki, tämä tosin kyse vaan pienestä CSS asiasta. Hotfixinä toimii ulospäin zoomaaminen.



Sivussa ei ole paginationia, vaan 16 kilpailua ladataan sivulle, näkymää voi vaihdella "sliderin" avulla. Syy tähän että uskon että oikeessa tilanteessa kaikille kilpailuille olisi erillinen sivu. (Archive)



Äänestä ja jaa nappien toiminnallisuutta ei ole



Kansallisteatteri logoa ei ollut saatavilla, placeholderina toimii div:i



Bugit:



  -Kilpailun lisäämisen jälkeen vika "section" menee piiloon jostain syystä. (PHP)

  -"Äänestä" nappia hoveramalla muuttuu myös toisen taustan väri. (CSS)



Mitä olisin halunnut tehdä:



  -Siivota koodia
  -Kommentoida koodia
  -Saada kilpailun lisäyksen toimimaan ajaxilla, kuvan lataus osoittautui haasteeksi, ajalla mahdollisesti olisi auennut että miten hoituu. FormData(?)
  -Muuttaa kaiken ACF kentiksi, jotta sivu tosiaan olisi muokattavissa. Hirveän ajanpuutteen takia jouduin osan koodaamaan suoraan teemaan.
  -Muuttaa tuo sivu templateksi


Lisäosilla kaikki mahd ongelmat olisi hoitunut mutta ajattelin että työn ajatus on koodaaminen 🙂

Yt
Rasmus
