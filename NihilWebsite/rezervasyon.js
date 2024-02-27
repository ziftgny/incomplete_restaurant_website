let saat = document.querySelector("#saat");
let saat_kutu = document.querySelector("#saat_kutu");
let saatler = document.querySelectorAll(".saatler");

saat.addEventListener("click", () => {
  saat_kutu.style.display = "block";
});
saatler.forEach(saatdeger => {
  saatdeger.addEventListener("click", tiklanan => {
    saat_kutu.style.display = "none";
    saat.value = saatdeger.innerHTML;
  });
});
