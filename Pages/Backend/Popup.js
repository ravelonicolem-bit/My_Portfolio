function openPopup() {
      document.getElementById("myPopup").style.display = "flex";
    }

    function closePopup() {
      document.getElementById("myPopup").style.display = "none";
    }

    // Close when clicking outside popup
    window.onclick = function(event) {
      let popup = document.getElementById("myPopup");
      if (event.target === popup) {
        popup.style.display = "none";
      }
    }