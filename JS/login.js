const users = [
    { email: "admin@ewms.com", password: "1234", role: "admin" },
    { email: "emp@ewms.com", password: "1234", role: "employee" }
];

function login(e) {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const user = users.find(
        u => u.email === email && u.password === password
    );

    if (!user) {
        alert("Invalid login credentials");
        return;
    }

    localStorage.setItem("loggedUser", JSON.stringify(user));

    if (user.role === "admin") {
        window.location.href = "admin/dashboard.html";
    } else {
        window.location.href = "employee/dashboard.html";
    }
}