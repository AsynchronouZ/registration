let ShowPassword = () => {
   let eyeOpen = document.querySelector("#eyeOpen"),
      eyeClose = document.querySelector("#eyeClose"),
      inputPassword = document.querySelector("input[type=password]");

   eyeClose.onclick = () => {
      eyeClose.style.display = "none";
      eyeOpen.style.display = "block";
      inputPassword.type = "password";
      inputPassword.focus();
   };
   eyeOpen.onclick = () => {
      inputPassword.type = "text";
      eyeClose.style.display = "block";
      eyeOpen.style.display = "none";
      inputPassword.focus();
   };
};

let NavToggleDashboard = () => {
   document.querySelector("#toggler").addEventListener("click", e => {
      let toggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      let main = document.querySelector(".main");
      toggle.classList.toggle("active");
      navigation.classList.toggle("active");
      main.classList.toggle("active");
   });
};

let ConfirmLogout = () => {
   document.querySelector("#signOut").addEventListener("click", e => {
      e.preventDefault();
      if (confirm("ARE YOU SURE?"))
         return location.replace("system/logout.sys.php");
      return false;
   });
};

function authentication() {
   let email = document.form.email.value;
   let position1 = email.indexOf("@");
   let position2 = email.lastIndexOf(".");
   let message = document.form.massage.value;
   var number = document.form.number.value;
   var position3 = number.indexOf("09");
   let length = 11;
   if (
      position1 < 1 ||
      position2 <= position1 + 5 ||
      (position2 + 2 >= email.length && email != 0)
   ) {
      alert("Please Enter a Valid Email Address");
      return false;
   } else if (message == 0 || message == null) {
      alert("Please Enter your message");
      return false;
   } else if (isNaN(number)) {
      alert("Enter Numeric value only");
      return false;
   } else if (number.length != length) {
      alert("You must have 11 numbers");
      return false;
   } else if (position3 < 0) {
      alert("first number starts '09*******' ");
      return false;
   } else {
      alert("Thank you!!");
      return true;
   }
}
