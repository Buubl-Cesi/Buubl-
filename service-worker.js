const NomDuCache = 'mon-cache-v1';

const assets = [
    '/index.php',
    '/MCV/Images/Logo_unique_192_192.png',
    '/MCV/Images/Logo_unique_512_512.png',
    '/MCV/Images/Logo_1280_720.png',
    '/MCV/Images/logo_wide_1280_720.png',
];

self.addEventListener('install', evt => {
    evt.waitUntil( caches.open(NomDuCache).then(cache => {
    cache.addAll(assets);
    })
    )
});

self.addEventListener('activate', evt => {
    console.log('le Service Worker a été installé ');
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
    caches.open('ma_sauvegarde').then(function(cache) {
    return cache.match(event.request).then(function (response) {
    return response || fetch(event.request).then(function(response) {
    cache.put(event.request, response.clone());
    return response;
    });
    });
    })
    );
    });
