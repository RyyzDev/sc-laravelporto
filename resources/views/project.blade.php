<!DOCTYPE html>
<html>
@include('components.head')
<body>
@include('components.navbar')

 <section class="projects" id="projects">
        <h2 class="title">Projects Saya</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="images/p1.png" alt="Mountain-image">
                </div>
            <div class="project-info">
                <p class="project-catogrey">Script Writing & Portfolio</p>
                <strong class="project-title">
                    <span>Portfolio #2</span>
                    <a class="more-details" href="https://fachryyz.com/portofolio_projects/portofolio.php">More Details</a>
                </strong>
            </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/p2.jpg" alt="Mountain-image">
                </div>
            <div class="project-info">
                <p class="project-catogrey">Script Writing</p>
                <strong class="project-title">
                    <span>Password Generator</span>
                    <a class="more-details" href="#" target="_blank">More Details</a>
                </strong>
            </div>
            </div>
        </div>
    </section>
@include('components.footer')
</body>
</html>