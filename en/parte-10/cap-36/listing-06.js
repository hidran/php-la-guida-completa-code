await fetch("/api/posts", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify({
    title: "New post",
    body: "Content"
  })
});
