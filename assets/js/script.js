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
    e.preventDefault(); // ← اصلاح این خط (بود: e.prevent())
    const email = document.getElementById("email").value;
    const message = document.getElementById("message");
    message.innerText = `Subscribed with ${email}`;

    // ایجاد پیام جدید زیر فرم (اگر تکراری نباشد)
    let existing = document.getElementById("saved-email");
    if (!existing) {
      const savedEmail = document.createElement("p");
      savedEmail.id = "saved-email";
      savedEmail.innerText = `✅ This email has been saved: ${email}`;
      message.insertAdjacentElement("afterend", savedEmail);
    } else {
      existing.innerText = `✅ This email has been saved: ${email}`;
    }

    // تغییر متن دکمه
    this.querySelector("button").innerText = "Subscribed!";
  });
