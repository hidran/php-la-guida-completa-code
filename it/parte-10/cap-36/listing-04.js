async function readHealth() {
  const response = await fetch("/healthz", {
    headers: { "Accept": "application/json" }
  });

  if (!response.ok) {
    throw new Error(`Health check failed: ${response.status}`);
  }

  return response.json();
}
