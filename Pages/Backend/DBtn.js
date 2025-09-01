document.getElementById("downloadBtn").addEventListener("click", function () {
  fetch("Pages/Backend/Download_btn.php")
    .then(response => response.text())
    .then(data => {
      alert("Downloading Files...");
      console.log("PHP Response:", data);
    })
    .catch(error => console.error("Error:", error));
});