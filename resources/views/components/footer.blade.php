{{-- resources/views/components/footer.blade.php --}}

<footer>
    <div class="footer-container">
        <div class="footer-main">
            {{-- Kolom 1: Logo & Tagline --}}
            <div class="footer-section brand-section">
                <h1 class="footer-logo">EVOSTE</h1>
                <p class="tagline">Your scent. Their memory. Forever</p>
            </div>

            {{-- Kolom 2: Our Product --}}
            <div class="footer-section">
                <h3 class="footer-title">Our Product</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('variant.floral') }}">Floral</a></li>
                    <li><a href="{{ route('variant.woody') }}">Woody</a></li>
                    <li><a href="{{ route('variant.fresh') }}">Fresh</a></li>
                    <li><a href="{{ route('variant.spicy') }}">Spicy</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Find Your Scent --}}
            <div class="footer-section">
                <h3 class="footer-title">Find Your Scent</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('find-scent')}}">Find Your Scent</a></li>
                </ul>
            </div>

            {{-- Kolom 4: About & Contact --}}
            <div class="footer-section">
                <h3 class="footer-title">About Evoste</h3>
                <ul class="footer-links">
                    <li><a href="#">Evoste</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3 class="footer-title">Contact Us</h3>
                <ul class="footer-links contact-info">
                    <li>
                        <a href="https://wa.me/6287777749781" target="_blank" rel="noopener noreferrer">
                            {{-- Anda bisa menambahkan ikon WhatsApp di sini --}}
                            WhatsApp: (+62) 877-7774-9781
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/evoste.official" target="_blank" rel="noopener noreferrer">
                            Instagram: @evoste.official
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p>&copy; 2025 EVOSTE | All Rights Reserved</p>
        </div>
    </div>
</footer>