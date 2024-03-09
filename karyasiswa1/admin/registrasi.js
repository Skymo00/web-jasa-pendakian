document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let formData = new FormData(this);
    
    fetch("registrasi.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Output dari backend
    })
    .catch(error => {
        console.error(error);
    });
});
