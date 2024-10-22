const CACHE_NAME = "dev-quiz-v1";
const OFFLINE_URL = "offline.html";
const urlsToCache = [
  "./",
  "./index.php",
  "https://cdn.jsdelivr.net/npm/@docsearch/css@3",
  "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css",
  "https://code.jquery.com/jquery-3.7.1.min.js",
  "./assets/dist/css/bootstrap.min.css",
  "./assets/dist/js/bootstrap.bundle.min.js",
  "./favicon.ico",
  "./assets/img/baladeva.jpeg",
  "./assets/img/ch1.jpeg",
  "./assets/img/ch2.jpeg",
  "./assets/img/ch3.jpeg",
  "./assets/img/damodar.jpeg",
  "./assets/img/dandavat_pranam.png",
  "./assets/img/jagannath.jpeg",
  "./assets/img/krishna_yoga.png",
  "./assets/img/logo.png",
  "./assets/img/krishna_yoga_crop.png",
  "./assets/img/slider1.jpeg",
  "./assets/img/slider2.jpeg",
  "./assets/img/slider3.jpeg",
  "./assets/img/subhadra.jpeg",
  "./offline.html",
  "./manifest.json",
  "./LICENSE",
  "./README.md",
  "./serviceWorker.js",
];

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll(urlsToCache);
    })
  );
  // Setting {cache: 'reload'} in the new request will ensure that the response
  // isn't fulfilled from the HTTP cache; i.e., it will be from the network.
  // await cache.add(new Request(OFFLINE_URL, {cache: 'reload'}));
});

self.addEventListener("activate", (event) => {
  console.log("[ServiceWorker] Activate");
  event.waitUntil(
    (async () => {
      // Enable navigation preload if it's supported.
      // See https://developers.google.com/web/updates/2017/02/navigation-preload
      if ("navigationPreload" in self.registration) {
        await self.registration.navigationPreload.enable();
      }
    })()
  );

  // Tell the active service worker to take control of the page immediately.
  self.clients.claim();
});

self.addEventListener("fetch", function (event) {
  // console.log('[Service Worker] Fetch', event.request.url);
  if (event.request.mode === "navigate") {
    event.respondWith(
      (async () => {
        try {
          const preloadResponse = await event.preloadResponse;
          if (preloadResponse) {
            return preloadResponse;
          }

          const networkResponse = await fetch(event.request);
          return networkResponse;
        } catch (error) {
          console.log(
            "[Service Worker] Fetch failed; returning offline page instead.",
            error
          );

          const cache = await caches.open(CACHE_NAME);
          const cachedResponse = await cache.match(OFFLINE_URL);
          return cachedResponse;
        }
      })()
    );
  }
});