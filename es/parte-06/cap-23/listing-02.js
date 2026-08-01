const form = document.querySelector("#login-form");

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const response = await fetch("login-ajax.php", {
    method: "POST",
    body: new FormData(form)
  });

  const data = await response.json();

  if (data.success) {
    window.location.href = data.redirect;
    return;
  }

  document.querySelector("#login-error").textContent = data.message;
});
