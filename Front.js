fetch("track.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
        referrer: document.referrer,
        userAgent: navigator.userAgent,
        url: window.location.href
    })
});