async function loadPosts() {
  const response = await fetch("/api/posts");
  const data = await response.json();

  console.log(data.data);
}
