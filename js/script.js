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

///////////////////////////////////////
function cPass(cP, rP, nP) {
  if (cP === "") {
    alert("Current Password Needed");
    //return 0;
  }
  if (rP === "") {
    alert("Current Password Needed");
    //return 0;
  } else if (cP == rP) {
    alert("New Password should not be same as the Current Password");
  }

  if (nP === "") {
    alert("Current Password Needed");
    //return 0;
  } else if (nP != rP) {
    alert("New Password not match with the Retyped Password");
  } else {
    return true;
  }
}

function nPass(nPass) {
  if (nPass === "") {
    return "Need Password Needed";
  } else {
    return "*";
  }
}
function rPass(cPass) {
  if (cPass === "") {
    return "Repeat Password Needed";
  } else {
    return "*";
  }
}
