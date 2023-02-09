const nam = document.querySelector("#name");
const aadhar = document.querySelector("#aadhar");
const btnSub = document.querySelector("#btn-sub");

// Generate random color on each user land

// This is an IIFE
const changebackground = (function () {
  // Get a random number betweer 0 - 16581375
  randNum = Number(Math.floor(Math.random() * (16581375 - 0) + 0));
  // Get the hex string, (to use hex colors)
  randColor = randNum.toString();
  document.getElementsByTagName(
    "body"
  )[0].style.backgroundColor = `#${randColor}`;
})();

// Handle user input submission
btnSub.onclick = function handleSubmit(e) {
  e.preventDefault();

  const errs = [];

  if (nam.value.trim() === "") {
    errs.push("Name must be valid");
  }
  if (aadhar.value.trim() === "" || !/[A-Z0-9]{16}/.test(aadhar.value.trim())) {
    errs.push("Aadhar must be valid");
  }

  if (errs.length !== 0) {
    let errMsg = errs.reduce((a, e) => {
      return `${e}, ` + a;
    });
    alert(`invalid details\n${errMsg}\n - Dev Sharma 19BCE0171`);
  } else {
    alert(`Data submitted:\nName: ${nam.value}\nAadhar: ${aadhar.value}`);
  }
};
