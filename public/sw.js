self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open("koze-cache-v1").then((cache) => {
            return cache.addAll([
                "/",
                "/manifest.json",
                "/logo.png",
                "/assets/images/Anarta.png",
                "/assets/images/Anarta2.png",
                "/assets/images/Alesha.png",
                "/assets/images/Alesha2.png",
                "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css"
            ]);
        })
    );
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});

self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((name) => name !== "koze-cache-v1")
                    .map((name) => caches.delete(name))
            );
        })
    );
});
