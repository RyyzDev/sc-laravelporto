<!doctype html>
@include('components.head')
<body>
@include('components.navbar')

<section class="contact" id="contact">
        <h2 class="title">Kontak saya</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p><a href="tel:+#" target="_blank">+6283107618082</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p><a href="mailto:dev@fachryyz.com" target="_blank">dev@fachryyz.com</a></p>
                </div>
            </div>
        </div>
    </section>


@include('components.footer')
</body>

</html>