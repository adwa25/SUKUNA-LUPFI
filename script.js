document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const game = document.getElementById("game").value;
        const nominal = document.getElementById("nominal").value;
        const formdata = new FormData();
        formdata.append("game", game);
        formdata.append("nominal", nominal);
        fetch("payment.php", {
            method: "POST",
            body: formdata,
        })
            .then((response) => response.text())
            .then((data) => console.log(data))
            .catch((error) => console.error(error));
    });
});