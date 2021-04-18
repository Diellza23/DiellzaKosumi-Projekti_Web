function openLoginForm() {
  document.getElementById("myLoginForm").style.display = "block";
}

function closeLoginForm() {
  document.getElementById("myLoginForm").style.display = "none";
}

//VALIDIMI PER MOS ME PAS EMPTY VALUES

function loginValidation() {
  var email = document.getElementById("emailLogin").value;
  var password = document.getElementById("passwordLogin");
  var regex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
  var result = email.match(regex);
  var date = document.getElementById("date");

  if (email == "" || email == null) {
    alert("Please fill out your email!");
    return;
  } else if (result == null) {
    alert("Fill out a valid email address!");
  } else if (password.value == null || password.value == "") {
    alert("Please fill out your password!");
    return;
  } else {
    document.getElementById("myLoginForm").style.display = "none";
    document.getElementById("loginForma").submit();
  }
}

function ShowMessage() {
  var email = document.getElementById("emailContact").value;
  var message = document.getElementById("message").value;
  var pattern = /^([\w]+)@([\w]+)\.([\w]+)$/;
  var result = email.match(pattern);

  if (email == null || email == "" || message == null || message == "") {
    alert("Please fill out the required information!");
    return;
  } else if (result == null) {
    alert("Invalid email address!");
    return;
  } else if (message.length < 10) {
    alert("Your message must contain at least 10 characters.");
    return;
  } else {
    alert("Your message has been delivered!");
    document.getElementById("contactUsForm").submit();
  }
}

function openRegisterForm() {
  document.getElementById("myRegisterForm").style.display = "block";
}

function closeRegisterForm() {
  document.getElementById("myRegisterForm").style.display = "none";
}

function registerValidation() {
  var username = document.getElementById("emailRegister").value;
  var password = document.getElementById("password");
  var role = document.getElementById("role");

  var pattern = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
  var result = username.match(pattern);

  if (username == "" || username == null) {
    alert("Please fill out your username(Email)!");
    username.focus;
    return false;
  } else if (result == null) {
    alert("Email invalid!");
    username.focus;
    return false;
  } else if (
    password.value == "" ||
    password.value == null ||
    password.value.length < 8 ||
    password.value.length > 15
  ) {
    alert("Please fill out your password!");
    password.focus;
    return false;
  } else if (role.value == "" || role.value == null) {
    alert("Please fill out the type!");
    role.focus;
    return false;
  } else {
    alert("Registration successful!");
    document.getElementById("myRegisterForm").style.display = "none";
    document.getElementById("registerForm").submit();
  }
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function validate() {
  var form = document.getElementById("myForm");
  function handleForm(event) {
    event.preventDefault();
  }
  form.addEventListener("submit", handleForm);

  var username = document.getElementById("uname");
  var email = document.getElementById("email").value;
  var number = document.getElementById("nrOfGuests");
  var pattern = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
  var result = email.match(pattern);
  var date = document.getElementById("date");

  if (username.value === "") {
    alert("Please fill out your name!");
    username.focus;
    return false;
  } else if (email === "" || email == null) {
    alert("Please fill out your email!");
    email.focus;
    return false;
  } else if (result == null) {
    alert("Invalid email address!");
    return false;
  } else if (date.value == null || date.value == "") {
    alert("Date is undefined, please fill out a valid date!");
    date.focus;
    return false;
  } else if (
    number.value == null ||
    number.value == "" ||
    number.value < 0 ||
    number.value > 15
  ) {
    alert("Please fill out a number or a valid value!");
    number.focus;
    return false;
  } else {
    alert("Reservation is made!");
    document.getElementById("myForm").style.display = "none";
    document.getElementById("reservationForma").submit();
  }
}
