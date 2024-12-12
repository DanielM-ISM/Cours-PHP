function dropdown() {
    const dropdown = document.getElementById("userMenu");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block"; 
    } else {
        dropdown.style.display = "none"; 
    }
}

document.addEventListener("click", function (event) {
    const userInfo = document.querySelector(".user-info");
    const dropdown = document.getElementById("userMenu");
    if (!userInfo.contains(event.target)) {
        dropdown.style.display = "none";
    }
});





