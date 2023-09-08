// Function to send form data to request.php
function myRegisterStudent(form) {
    const email = form.querySelector("#student-mail").value;
    const fullname = form.querySelector("#student-fullname").value;
    const gender = form.querySelector("#student-gender").value;
    const grade = form.querySelector("#student-grade").value;
    const birthdate = form.querySelector("#student-birthdate").value;

    // Validate email format using regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
        alert("Invalid email format.");
        return;
    }

    // Validate date format (YYYY-MM-DD) using regular expression
    const dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!birthdate.match(dateRegex)) {
        alert("Invalid date format.");
        return;
    }

    // Create a FormData object to send data
    const formData = new FormData();
    formData.append("email", email);
    formData.append("fullname", fullname);
    formData.append("gender", gender);
    formData.append("grade", grade);
    formData.append("birthdate", birthdate);

    // Send an AJAX request to request.php
    fetch("request.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            alert("Student registered successfully!");
            form.reset(); // Reset the form
        } else {
            alert("Error registering student.");
        }
    })
    .catch(error => {
        console.error("Error in request: " + error);
    });
}

// Listen for form submission and call myRegisterStudent() function
const form = document.getElementById("form-add-student");
form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent page from reloading
    myRegisterStudent(form);
});
