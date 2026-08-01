await fetch("/api/posts", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify({
    title: "Nuovo post",
    body: "Contenuto"
  })
});
