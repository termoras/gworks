# gworks
Haaste


Eimitään kummallisempia, vaan pidin asian hyvin yksinkertaisena.
Vanilla PHP, JavaScript, Scss.
Ainoana lisäosana toimii ACF.


- Kilpailut ovat custom post:eja (Event)

- Sivu ei ole responsiivinen, haastetta varten tehty vain ns. Desktop versio.
Itsellä ollut 4k näyttö niin pienemmissä resoluutioissa voi "kilpailut kohta" mennä rikki, tämä tosin kyse vaan pienestä CSS asiasta

- Sivussa ei ole paginationia, vaan 16 kilpailua ladataan sivulle, näkymää voi vaihdella "sliderin" avulla. Syy tähän että uskon että oikeessa tilanteessa kaikille kilpailuille olisi erillinen sivu. (Archive)
- Äänestä ja jaa nappien toiminnallisuutta ei ole
- Kansallisteatteri logoa ei ollut saatavilla, placeholderina toimii div:i

Bugit:

- Kilpailun lisäämisen jälkeen vika "section" menee piiloon jostain syystä.
- "Äänestä" nappia hoveramalla muuttuu myös toisen taustan väri.

Mitä olisin halunnut tehdä:
  - Siivota koodia
  - Kommentoida koodia
  - Saada kilpailun lisäyksen toimimaan ajaxilla, kuvan lataus osoittautui haasteeksi
  - Muuttaa kaiken ACF kentiksi, jotta sivu tosiaan olisi muokattavissa. Hirveän ajanpuutteen takia jouduin osan koodaamaan suoraan teemaan
