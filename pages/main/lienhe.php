<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
     <h1>Bạn cần hỗ trợ ?</h1>
     <form id="form">
       <div class="input__container">
         <label for="name">Name</label>
           <!-- The 'required' prop ensures a filled field before submission -->
         <input type="text" id="name" name="name" required />
       </div>
       <div class="input__container">
         <label for="email">Email</label>
         <input type="email" id="email" name="email" required />
       </div>
       <div class="input__container">
         <label for="message">Message</label>
         <textarea id="message" name="message" rows="4" required></textarea>
       </div>
       <button>Submit</button>
     </form>
</main>
</body>
</html>
<script>
 "use strict";
    const form = document.getElementById("form");
    form.addEventListener("submit", function (event) { });
    form.addEventListener("submit", function (event) {
    // Prevent page reload on submit
    event.preventDefault(); 
    // Selecting the email value filled by the user
    const email = document.getElementById("email").value;
});
form.addEventListener("submit", function (event) {
    // Preventing page reload on submit
    event.preventDefault(); 

    // Selecting the email value filled by the user
    const email = document.getElementById("email").value;

    // Checking for valid email using a simple regex pattern
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
      alert("Wrong email format");
      return;
    }

    // If everything passes, show success message
    alert("Form submitted successfully");
});

</script>

