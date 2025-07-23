// Toggle profile menu
const profile = document.querySelector(".profile img");
const menu = document.querySelector(".profile-menu");

profile.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

document.getElementById("help-link").addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("help-message").innerText =
    "There is no answer! Go try harder! ‌But Hint : work on prevent() in script js file.";
});

// Start Bug Box 1090
document
  .getElementById("subscribe-form")
  .addEventListener("submit", function (e) {
  e.preventDefault();
    const email = document.getElementById("email").value;
    document.getElementById("message").innerText = `Subscribed with ${email}`;
  });
