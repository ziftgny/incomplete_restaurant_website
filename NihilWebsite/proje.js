let anchor = document.querySelector("#back-to-top");
let resim = document.querySelector("#resim");

window.addEventListener("scroll", () => {
  /* vanilla javascript yolu : 
  let a = document.querySelector("html");
  a.scrollTop
  */
  if ($("html").scrollTop() > 50) {
    anchor.style.display = "inline-block";
  } else {
    anchor.style.display = "none";
  }
});

let modal = document.getElementById("myModal");
let modalImg = document.getElementById("img01");
document.querySelectorAll("#galeri_linear").forEach(item => {
  item.addEventListener("click", event => {
    modal.style.display = "flex";
    modalImg.src = item.src;
  });
});
modal.addEventListener("click", () => {
  modal.style.display = "none";
});
let span = document.getElementsByClassName("close")[0];

span.addEventListener("click", () => {
  modal.style.display = "none";
});
