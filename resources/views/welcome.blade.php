<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-green-100 text-gray-900 antialiased">
    
            <!-- Navigation -->
            <nav class="w-full fixed top-0 left-0 z-20 bg-white shadow-md">
    <div class="w-3/4 mx-auto py-6">
        @if (Route::has('login'))
            <div class="flex justify-between items-center">
                <div class="space-x-6">
                    <a href="#" class="text-lg font-semibold text-green-700 hover:text-green-900">Main</a>
                    <a href="#" class="text-lg font-semibold text-green-700 hover:text-green-900">Rooms</a>
                    <a href="#" class="text-lg font-semibold text-green-700 hover:text-green-900">Contact Us</a>
                </div>
                <div class="space-x-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg font-semibold text-green-700 hover:text-green-900">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg font-semibold text-green-700 hover:text-green-900">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-lg font-semibold text-green-700 hover:text-green-900">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div>
</nav>

<header class="w-full h-screen bg-cover bg-center text-center py-24 px-8 mb-20 relative" style="background-image: url('https://www.jenjewell.ca/wp-content/uploads/2024/01/what-qualifies-as-a-farm-in-ontario.jpg');">
    <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay for better text contrast -->
    <div class="relative z-10 flex items-center justify-center h-full">
        <div>
            <h1 class="text-7xl font-bold text-white leading-tight mb-6">Welcome to Home Farm Hostel</h1>
            <p class="text-3xl text-white font-bold text-opacity-90 mb-12">A serene getaway surrounded by nature.</p>
            <a href="#book-now" class="px-8 py-4 bg-green-600 text-white rounded-full text-2xl font-semibold hover:bg-green-700 transition duration-300 shadow-lg transform hover:scale-105">
                Book Now
            </a>
        </div>
    </div>
</header>




            <!-- about -->
            <div class="mb-20">
                <h2 class=" font-semibold text-green-800 text-center text-5xl mb-9">About Us</h2>
                <div class="flex items-center justify-center mx-auto w-2/3">
                    <img 
                            src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/358930738.jpg?k=96ab5cc9b77d8e8d7d8d4dccdd466ba82bdb9089dcd0674d96de7d5ec5a25791&o=" 
                            alt="Home Farm Hostel" 
                            class="w-1/3 h-auto rounded-lg shadow-lg"
                    >
                <p class="ml-8 text-green-700 text-2xl">
                Home Farm Hostel is a family-run business that offers a unique experience to its guests. 
                We are located in the heart of the countryside, surrounded by nature and tranquility. 
                Our hostel is the perfect place to relax and unwind, away from the hustle and bustle of city life.
                </p>
                </div>

            </div>
                <!-- galery -->
                <div class="relative w-2/3 mx-auto mb-20">
    <h2 class="font-semibold text-green-800 text-center text-5xl mb-9">Gallery</h2>
    <div class="overflow-hidden relative">
        <div class="flex transition-transform duration-700" id="slider" style=" height: 700px;">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/354410565.jpg?k=afba0a2e55d5361b4fcb0d2b38611b7ae343539f8873e94f22e8f4b15a99205a&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/44667246.jpg?k=48914d34686a254a237c5ab795a0ecf32b2581cbe0e537e16537567a6061b189&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/265295544.jpg?k=258719bd25aac628fc889576dcfe3b6e762054fd6fe8ccd1490c5826b9cdcc35&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg">
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/352908047.jpg?k=f1cd0ba1a5be2c20f1885182f173f2052f648172e4732acd5c2603aff6754bd8&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg" >
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/44667228.jpg?k=120de3baaeb52410887da64d1f25c50877dd6cc9224c2071de92aad2b61d1688&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg" >
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/19124693.jpg?k=6c2b46345de7ce0a9dd206fe0f83858ca1e7b66a278515b276dc3c4670e9a05a&o=&hp=1" alt="Home Farm Hostel" class="w-2/3 object-cover rounded-lg shadow-lg" >
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full" onclick="moveSlide(-1)">←</button>
    <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full" onclick="moveSlide(1)">→</button>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('#slider img');
    const totalSlides = slides.length;
    let slideInterval;

    // Function to move the slide
    function moveSlide(direction) {
        currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
        const slider = document.getElementById('slider');
        slider.style.transform = `translateX(-${currentSlide * 300 / totalSlides}%)`;

        // Restart the auto-slide timer
        resetAutoSlide();
    }

    // Function to reset the auto-slide timer
    function resetAutoSlide() {
        clearInterval(slideInterval); // Clear the existing timer
        slideInterval = setInterval(() => {
            moveSlide(1); // Automatically move forward
        }, 4000); // Restart the timer with 4 seconds interval
    }

    // Auto slide every 4 seconds
    resetAutoSlide();
</script>





            <!-- to bo bol odspodi  -->

            <div class="maps">
    
    <!-- Footer -->
    <footer class="w-full py-12 bg-green-800 text-white text-center mt-12">
    <h2 class="font-semibold text-white text-center text-5xl mb-9">Where you can find us?</h2>
        <div class="flex justify-between items-center w-3/4 mx-auto">
            <!-- Left Side: Contact Info & Social Media -->
            <div class="w-1/2 text-left">
                <h3 class="text-2xl font-semibold text-white mb-4">Contact Us</h3>
                <p class="text-lg mb-2">123 Farm Lane, Ontario, Canada</p>
                <p class="text-lg mb-2">Email: info@homefarmhostel.com</p>
                <p class="text-lg mb-4">Phone: +1 234 567 890</p>

                <div class="space-x-4">
                    <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-green-400 text-2xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-white hover:text-green-400 text-2xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.booking.com" target="_blank" class="text-white hover:text-green-400 text-2xl">
                        <i class="fab fa-bookmark"></i>
                    </a>
                </div>
            </div>
            <!-- Right Side: Map -->
            <div class="w-1/2">
                <div id="map" class="w-full" style="height: 300px;"></div>
            </div>
        </div>
        <div class="text-center mt-6">
            <p>&copy; {{ date('Y') }} Home Farm Hostel. All rights reserved.</p>
        </div>
    </footer>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5nPPyp2vkIqulwFAQyarT4CQZY4ZwlQ4&callback=initMap&libraries=places&v=weekly&solution_channel=GMP_CCS_autocomplete_v1" defer></script>

<script>
    let map, activeInfoWindow, markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 28.626137, lng: 79.821603 },
            zoom: 15,
        });
    }

    window.onload = initMap;
</script>

    


            <!-- blaz dont be mad neka sm sprobiulo tule :D -->

            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>
            <div class="h-6 w-6 rounded-full bg-black fixed top-0 left-0 pointer-events-none z-[99999999] opacity-50" id="circle"></div>

            
<script>
    const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll("#circle");

const colors = [
  "#ffb56b",
  "#fdaf69",
  "#f89d63",
  "#f59761",
  "#ef865e",
  "#ec805d",
  "#e36e5c",
  "#df685c",
  "#d5585c",
  "#d1525c",
  "#c5415d",
  "#c03b5d",
  "#b22c5e",
  "#ac265e",
  "#9c155f",
  "#950f5f",
  "#830060",
  "#7c0060",
  "#680060",
  "#60005f",
  "#48005f",
  "#3d005e"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();

</script>
        </body>
</html>
