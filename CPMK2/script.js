function checkForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "" || password == "") {
        alert("Form tidak boleh kosong");
    } else {
        alert("Berhasil");
    }
}

linkHome.addEventListener("mouseover", (e) => {
    e.target.style.color = "white";
});

linkHome.addEventListener("mouseout", (e) => {
    e.target.style.color = "blue";
});

linkLogout.addEventListener("mouseover", (e) => {
    e.target.style.color = "white";
});
linkLogout.addEventListener("mouseout", (e) => {
    e.target.style.color = "blue";
});

footer.addEventListener("mouseover", (e) => {
    e.target.innerHTML = "Konten ini dibuat untuk ujian javascript";
});
footer.addEventListener("mouseout", (e) => {
    e.target.innerHTML = "Copyright 2021 | 20523025@students.uii.ac.id";
});