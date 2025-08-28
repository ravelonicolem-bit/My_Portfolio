const navbarContainer = document.getElementById("nav");

// Create navbar
const navbar = document.createElement("div");
navbar.classList.add("navbar");

// Left side (title)
const navLeft = document.createElement("div");
navLeft.classList.add("navLeft");
navLeft.textContent = "•PORTFOLIO•";

// Right side container
const navRight = document.createElement("div");
navRight.classList.add("navRight");

// Right side - profile container
const profileContainer = document.createElement("div");
profileContainer.classList.add("profileContainer");

const profilePic = document.createElement("img");
profilePic.src = "../img/chibi-me.png";
profilePic.classList.add("profilePic");

profileContainer.appendChild(profilePic);

// Right side - button container
const buttonContainer = document.createElement("div");
buttonContainer.classList.add("buttonContainer");

const downloadBtn = document.createElement("button");
downloadBtn.classList.add("download-btn");
downloadBtn.textContent = "DOWNLOAD FILES";
downloadBtn.onclick = () => alert("Downloading Files...");

buttonContainer.appendChild(downloadBtn);

// Append both containers to navRight
navRight.appendChild(profileContainer);
navRight.appendChild(buttonContainer);

// Add left + right to navbar
navbar.appendChild(navLeft);
navbar.appendChild(navRight);

// Append navbar to container
navbarContainer.appendChild(navbar);

// Styling
const style = document.createElement("style");
style.innerHTML = `

    .navbar {
        width: 80vw;
        height: 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #9CB3D3;
        box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.5);
        color: white;
        border-radius: 50px;
        margin-top:15px;
    }

    .navLeft {
        margin-left:30px;
        font-size: 2rem;
        font-weight: bold;
        font-family:var(--font-Gildeon);
        color: #690A08;
    }

    .navRight {
        margin-right:50px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .profileContainer {
        display: flex;
        align-items: center;
        padding: 5px;
        border-radius: 8px;
    }

    .buttonContainer {
        display: flex;
        align-items: center;
        padding: 5px;
        border-radius: 8px;
    }

    .profilePic {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 3px solid #071A3B;
        object-fit: cover;
        object-position: top;
    }

    .download-btn {
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        background: #071A3B;
        color: white;
        cursor: pointer;
        font-weight: bold;
    }

    .download-btn:hover {
        background: #FFFCF5;
        color: #690A08;
    }
`;
document.head.appendChild(style);
