function validateRegister() {
  let emailReg = document.getElementById("registerEmail").value;
  let passwordReg = document.getElementById("registerPass").value;
  let userReg = document.getElementById("registerUser").value;

  if (emailReg === "") {
    alert("Email cannot be empty, please enter a valid email");
    return false;
  }

  if (passwordReg.length < 6) {
    alert("Password must be at least 6 characters");
  }

  if (userReg === "") {
    alert("Username is required");
  } else if (userReg.length <= 2) {
    alert("Username must be at least 3 characters");
  }
}

