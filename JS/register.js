document.addEventListener("DOMContentLoaded", function () {
document.getElementById("registerForm").addEventListener("submit", function (e) {
    e.preventDefault();

    fetch("register.php", {
    method: "POST",
    body: new FormData(this)
    })
    .then(res => res.text())
    .then(data => alert(data))
    .catch(() => alert("Registration failed"));
});
});
