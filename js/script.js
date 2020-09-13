fetch("./header1.html")
  .then((response) => {
    return response.text();
  })
  .then((data) => {
    document.querySelector("header").innerHTML = data;
  });

fetch("./footer.php")
  .then((response) => {
    return response.text();
  })
  .then((data) => {
    document.querySelector("footer").innerHTML = data;
  });

function regPic(fileToUpload) {
  const playerHand = document.querySelector(".pic");
  playerHand.src = fileToUpload;
}
