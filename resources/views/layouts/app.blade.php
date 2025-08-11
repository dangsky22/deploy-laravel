<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- PWA Meta Tags -->
    <meta name="application-name" content="My Filament App">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="FilamentApp">
    <meta name="description" content="My awesome Filament application">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="msapplication-TileColor" content="#f59e0b">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#f59e0b">
    
    <!-- PWA Links -->
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/images/icons/icon-152x152.png">
    
    <!-- Styles -->
    @filamentStyles
</head>
<body>
    {{ $slot }}
    
    <!-- Scripts -->
    @filamentScripts
    
    <!-- PWA Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(function(err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
        
        // PWA Install Prompt
        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            
            // Show install banner/button
            const installBanner = document.createElement('div');
            installBanner.innerHTML = `
                <div style="position: fixed; bottom: 20px; right: 20px; background: #f59e0b; color: white; padding: 15px; border-radius: 8px; z-index: 9999; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <p style="margin: 0 0 10px 0; font-weight: bold;">Install App</p>
                    <p style="margin: 0 0 10px 0; font-size: 14px;">Add this app to your home screen for quick access!</p>
                    <button id="installBtn" style="background: white; color: #f59e0b; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-weight: bold;">Install</button>
                    <button id="dismissBtn" style="background: transparent; color: white; border: 1px solid white; padding: 8px 16px; border-radius: 4px; cursor: pointer; margin-left: 8px;">Later</button>
                </div>
            `;
            document.body.appendChild(installBanner);
            
            document.getElementById('installBtn').addEventListener('click', () => {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    }
                    deferredPrompt = null;
                    installBanner.remove();
                });
            });
            
            document.getElementById('dismissBtn').addEventListener('click', () => {
                installBanner.remove();
            });
        });
    </script>
</body>
</html>