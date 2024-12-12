<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio | Jomari Castillo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="myPersonal/logo.png" type="image/png">
</head>

<body>

    <video autoplay muted loop playsinline class="background-video">
        <source src="myPersonal/bgVideo.mp4" type="video/mp4">
    </video>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.japan-guide.com/e/e2164.html#section_spot_list" target="_blank">
                <img src="myPersonal/logo.png" alt="Logo" width="37" height="28">
                Jomari Castillo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutme">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid mt-5 hero-section" id="home">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content text-center text-lg-start">
                <h1>Hello Everyone, <br> <span>I Am Jomari G. Castillo</span></h1>
                <h2>Web Designer & Developer</h2>
                <div class="btn-group">
                    <button class="btn-hero">Web Designer & Development</button>
                    <a href="mailto:jomaricastillo8@gmail.com"><button class="btn-hero">Contact Me</button></a>
                </div>
            </div>
            <div class="col-lg-6 text-center hero-image">
                <img src="myPersonal/me.png" alt="Jomari G. Castillo">
            </div>
            <div class="container">
                <div class="row">
                    <div class="dividerHr my-0" style="background-color: #ffffff;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3D Carousel Section -->
    <div class="container" id="projects">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="fw-bold">My Projects</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="carousel col-12">
                <div class="carousel-track" id="carouselTrack"></div>
                <div class="nav-buttons">
                    <button class="nav-button" id="prevBtn">&#8249;</button>
                    <button class="nav-button" id="nextBtn">&#8250;</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-4 bg-gradient text-light" id="aboutme">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3 about-section">
                    <h5 class="footer-heading">About Me</h5>
                    <p>Meet Jomari Castillo: Microsoft Youth Ambassador and Rising Innovator in IT with Experience in
                        Google
                        Developer Student Club and Microsoft Youth Ambassador Fellowships.</p>
                </div>
                <div class="col-md-4 mb-3 quick-links">
                    <h5 class="footer-heading">Promotion Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/PUPSTCCS" target="_blank" class="footer-link">Computer
                                Society</a>
                    </ul>
                </div>
                <div class="col-md-4 mb-3 connect-section">
                    <h5 class="footer-heading">Connect with Me</h5>
                    <a href="https://www.facebook.com/LieutenantClowker8" class="social-link me-2"><img
                            src="https://img.icons8.com/ios-filled/20/ffffff/facebook.png" alt="Facebook"></a>
                    <a href="https://x.com/Rudolf236284176" class="social-link me-2"><img
                            src="https://img.icons8.com/ios-filled/20/ffffff/twitter.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/jomsheeesh/" class="social-link"><img
                            src="https://img.icons8.com/ios-filled/20/ffffff/instagram-new.png" alt="Instagram"></a>
                </div>
            </div>
            <hr class="bg-light">
            <p class="mb-0">© 2024 Jomari Castillo. All rights reserved.</p>
        </div>
    </footer>


    <script>
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        const cardsData = [
            { title: "Smart TV", description: "A futuristic Smart TV UI design concept showcasing innovation in interface development.", img: "https://cdn.dribbble.com/users/1659456/screenshots/4830780/smart-tv-concept-part1.gif", link: "Projects/Project1/index.html" },
            { title: "Tokyo Japan", description: "A travel blog focusing on immersive user experience and dynamic content presentation", img: "https://www.travelpack.com/public/imagedb/sysimgdocs/rszimages/Amazing-Japan_pk26122_1.gif", link: "Projects/Project2/project2.html" },
            { title: "Active Volcanoes", description: "An educational web module highlighting interactivity and data visualization on natural phenomena.", img: "https://media.tenor.com/uWgoUEQlby4AAAAM/volcano-volc%C3%A1n.gif", link: "Projects/Project3/Project3.html" },
            { title: "Purrfectly Bred", description: "A playful and creative website design featuring animations, API and engaging UI elements.", img: "https://cdn.shopify.com/s/files/1/0344/6469/files/cat-gif-loop-laser_grande.gif?v=1523984148", link: "Projects/Project4/landing.html" },
            { title: "Arcane", description: "A showcase of storytelling through animation with a focus on seamless transitions.", img: "https://i.pinimg.com/originals/83/af/33/83af33a0c3d7c59178295cfb57dcd1e5.gif", link: "Projects/Project5/project5.html" },
            { title: "Metaverse", description: "A concept site exploring futuristic design and the blending of digital and physical worlds.", img: "https://static.wixstatic.com/media/ea6ac8_12aa028322b74ec38ead0f2f349527e7~mv2.gif/v1/fill/w_1064,h_608,al_c/ea6ac8_12aa028322b74ec38ead0f2f349527e7~mv2.gif", link: "Projects/Project6/landing.html" },
            { title: "Island of Personality", description: "My island of personality each island has it core memories", img: "https://i.pinimg.com/originals/3b/88/06/3b88061f541255f8dc17d358befd7e80.gif", link: "A08/index.php" }
        ];

        cardsData.forEach((card, index) => {
            const cardElement = document.createElement('div');
            cardElement.classList.add('carousel-card');
            cardElement.innerHTML = `
                <img src="${card.img}" alt="${card.title}">
                <div class="overlay">
                    <h3>${card.title}</h3>
                    <p>${card.description}</p>
                    <a href="${card.link}" target="blank" class="btn btn-portfolio mt-2" title="${card.title}">
                        <i class="bi bi-folder"></i> Visit ${card.title}
                    </a>
                </div>
            `;
            if (index === 0) cardElement.classList.add('active');
            track.appendChild(cardElement);
        });

        const cards = document.querySelectorAll('.carousel-card');
        let currentIndex = 0;

        const updateCarousel = () => {
            const angle = 360 / cards.length;
            const depth = 400;
            cards.forEach((card, index) => {
                const offset = ((index - currentIndex) + cards.length) % cards.length;
                const rotationAngle = offset * angle;
                card.style.transform = `rotateY(${rotationAngle}deg) translateZ(${depth}px)`;
                card.classList.toggle('active', offset === 0);
            });
        };

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % cards.length;
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            updateCarousel();
        });

        updateCarousel();

        let autoSlideInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % cards.length;
            updateCarousel();
        }, 5000);

        prevBtn.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
        nextBtn.addEventListener('mouseover', () => clearInterval(autoSlideInterval));

        prevBtn.addEventListener('mouseout', () => {
            autoSlideInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % cards.length;
                updateCarousel();
            }, 5000);
        });

        nextBtn.addEventListener('mouseout', () => {
            autoSlideInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % cards.length;
                updateCarousel();
            }, 5000);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>