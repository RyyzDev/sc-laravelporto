<!DOCTYPE html>
<html lang="id">
<head>
    @include("components.head")
    <title>{{ $artikel['title'] }}</title>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="article-container">
        <h1 class="article-title">{{ $artikel['title']}}</h1>

        <div class="article-meta">
            <span class="author">Ditulis oleh: {{ $artikel['author'] ?? 'Admin' }}</span>
            <span class="date"> | Diposting: {{ \Carbon\Carbon::parse($artikel['created_at'])->format('d M Y, H:i') }}</span>
            @if(!empty($artikel['category']))
                <span class="category"> | Kategori: {{ $artikel['category'] }}</span>
            @endif
        </div>

@if(!empty($artikel['images']))
    <div class="article-slider">
        <button class="prev-btn" onclick="prevImage()">&#10094;</button>
        <img id="slider-image" src="{{ asset($artikel['images'][0]) }}" alt="{{ $artikel['title'] }}">
        <button class="next-btn" onclick="nextImage()">&#10095;</button>
    </div>

    <script>
        const images = @json(array_map(fn($img) => asset($img), $artikel['images']));
        let currentIndex = 0;
        const imgElement = document.getElementById("slider-image");

        function showImage(index) {
            imgElement.src = images[index];
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        }

        setInterval(nextImage, 5000);
    </script>
@endif

        <div class="article-content">
            {!! nl2br(e($artikel['content'])) !!}
        </div>

        <div class="article-footer">
            <a href="{{ url('/blog') }}" class="back-btn">← Kembali ke Daftar Artikel</a>
        </div>
    </div>

    @include('components.footer')
</body>
</html>
