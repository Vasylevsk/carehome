'use strict';

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Останавливаем стандартную отправку формы

    let formData = new FormData(this);

    fetch("send_mail.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").textContent = data;
    })
    .catch(error => {
        document.getElementById("responseMessage").textContent = "Error sending message.";
    });
});