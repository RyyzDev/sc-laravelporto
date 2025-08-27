<!doctype html>
@include('components.head')
<body>
@include('components.navbar')

<section class="cards" id="places">
        <h1 class="title">Tempat yang saya pernah kunjungi</h1>

            <div class="blog-container">
                @foreach ($artikels as $artikel)
                <div class="content">
                    <div class="blog-card">
                         <div class="icon">
                           <img class="gambar" src="{{$artikel['img']}}"></img>
                         </div>
                    <div class="project-info">
                        <p class="project-catogrey">{{$artikel["title"]}}</p>
                        <strong class="project-title">
                            <span>{{$artikel["comment"]}}</span>
                            <button style="padding-left: 5px; margin-right: 3px; padding-right: 2px;">
                            <a href="{{ url('/artikel/' . $artikel['slug']) }}" class="read-more">Lainnya</a>
                            </button>
                        </strong>
                 </div>
             </div>
            </div>
             @endforeach
            </div>









            <div class="card">
                <div class="icon">
                           <img class="gambar" src="images/comingsoon.jpeg"></img>
                         </div>
                    <div class="project-info">
                        <p class="project-catogrey">Coming soon!!!</p>
                        <strong class="project-title">
                            <span>Nantikan yaw!</span>
                        </strong>
                 </div>
            </div>
        </div>
    </section>
</body>


@include('components.footer')
</html>