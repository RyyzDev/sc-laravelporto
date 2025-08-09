<!doctype html>
@include('components.head')
<body>
@include('components.navbar')

<section class="cards" id="places">
        <h1 class="title">Tempat yang saya pernah kunjungi</h1>

                @foreach ($posts as $post)
                <div class="content">
                    <div class="card">
                         <div class="icon">
                           <img class="gambar" src="{{$post["img"]}}"></img>
                         </div>
                    <div class="project-info">
                        <p class="project-catogrey">{{$post["title"]}}</p>
                        <strong class="project-title">
                            <span>{{$post["comment"]}}</span>
                            <button style="padding-left: 5px; margin-right: 3px; padding-right: 2px;">
                            <a href="/artikel/{{$post['slug']}}" class="more-details">Lainnya</a>
                            </button>
                        </strong>
                 </div>
            </div>
             @endforeach









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