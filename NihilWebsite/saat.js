function suan() {
  let haftasonu = "";
  let tarih = new Date();
  let h = tarih.getHours();
  let m = tarih.getMinutes();
  let s = tarih.getSeconds();
  let d = tarih.getDay();
  let gunler = [
    "Pazartesi",
    "Salı",
    "Çarşamba",
    "Perşembe",
    "Cuma",
    "Cumartesi",
    "Pazar"
  ];
  if (d == 6 || d == 7 || h < 8 || h > 24) {
    haftasonu = "Restoran Kapalı";
  } else {
    haftasonu = "Restoran Açık";
  }

  function sifirekle(sayi) {
    if (sayi < 10) {
      return "0";
    } else {
      return "";
    }
  }

  let zaman =
    sifirekle(h) +
    h +
    ":" +
    sifirekle(m) +
    m +
    ":" +
    sifirekle(s) +
    s +
    " " +
    gunler[d - 1] +
    " " +
    "<br>" +
    haftasonu;

  document.querySelector("#suanki_zaman").innerHTML = zaman;
}

suan();
setInterval(suan, 1000);
