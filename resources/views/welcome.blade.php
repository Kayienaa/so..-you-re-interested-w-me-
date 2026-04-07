<x-landing-layout>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=Cormorant:wght@300;400;500&display=swap');

        * {
            font-family: 'DM Sans', sans-serif;
        }

        /* LUXURY HEADING - untuk judul besar */
        .font-luxury {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        /* ITALIC ACCENT */
        .font-luxury-italic {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-style: italic;
            letter-spacing: 0.01em;
        }

        /* SECTION TITLE */
        .font-section {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
            letter-spacing: -0.02em;
        }

        /* NAVBAR LOGO */
        .font-logo {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        /* BODY TEXT sedikit lebih refined */
        body,
        p,
        a,
        span,
        li {
            font-family: 'DM Sans', sans-serif;
            font-weight: 300;
            letter-spacing: 0.01em;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Cormorant Garamond', serif;
        }

        /* SPARKLING */
        .spark-dot {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: sparkDot var(--dur, 2s) ease-in-out forwards;
            opacity: 0;
            z-index: 10;
        }

        .spark-star {
            position: absolute;
            pointer-events: none;
            animation: sparkStar var(--dur, 2s) ease-in-out forwards;
            opacity: 0;
            font-style: normal;
            z-index: 10;
        }

        @keyframes sparkDot {
            0% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }

            30% {
                opacity: 1;
                transform: scale(1) rotate(45deg);
            }

            80% {
                opacity: 0.7;
                transform: scale(0.8) rotate(120deg);
            }

            100% {
                opacity: 0;
                transform: scale(0) rotate(180deg);
            }
        }

        @keyframes sparkStar {
            0% {
                opacity: 0;
                transform: scale(0) translateY(0);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-5px);
            }

            70% {
                opacity: 0.5;
                transform: scale(0.8) translateY(-12px);
            }

            100% {
                opacity: 0;
                transform: scale(0) translateY(-20px);
            }
        }

        /* MODAL ANIMATION */
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.92);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-scaleIn {
            animation: scaleIn 0.22s ease-out forwards;
        }
    </style>


    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full bg-white/70 backdrop-blur-md shadow z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- LOGO -->
            <h1 class="text-xl text-orange-500 font-logo" style="font-size:1.35rem; letter-spacing:0.06em;">
                Karin's Portfolio
            </h1>

            <!-- MENU -->
            <div class="flex gap-6 text-gray-700 font-medium"
                style="font-family:'DM Sans',sans-serif; font-weight:400; font-size:0.92rem; letter-spacing:0.03em;">
                <a href="#home" class="hover:text-orange-500 transition">Home</a>
                <a href="#about" class="hover:text-orange-500 transition">About</a>
                <a href="#experience" class="hover:text-orange-500 transition">Experience</a>
                <a href="#project" class="hover:text-orange-500 transition">Project</a>
                <a href="#contact" class="hover:text-orange-500 transition">Contact Me</a>
            </div>

        </div>
    </nav>


    <!-- HERO SECTION -->
    <section id="home"
        class="pt-24 min-h-screen flex items-center bg-gradient-to-br from-yellow-100 via-orange-100 to-pink-100"
        style="position:relative; overflow:hidden;">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center px-6">

            <!-- KIRI (TEXT) -->
            <div>
                <!-- Label kecil di atas -->
                <p
                    style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:1rem;">
                    ✦ &nbsp; Personal Portfolio
                </p>

                <!-- JUDUL LUXURY -->
                <h1 class="text-gray-900 leading-tight"
                    style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size: clamp(2.8rem, 6vw, 4.5rem); line-height:1.08; letter-spacing:-0.02em;">
                    Karin's Portfolio
                </h1>

                <!-- SUB JUDUL ITALIC -->
                <h2
                    style="font-family:'Cormorant Garamond',serif; font-weight:400; font-style:italic; font-size: clamp(2rem, 4.5vw, 3.2rem); color:#f97316; line-height:1.2; letter-spacing:0.01em; margin-bottom:1.5rem;">
                    Front-End Learner
                </h2>

                <p class="text-gray-600"
                    style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:1rem; line-height:1.8; letter-spacing:0.015em; max-width:480px;">
                    Welcome to my personal portfolio where i showcase my journey, skills, and projects that i made since
                    i fall in love with a Software Engineering's world. Explore and get to know me better!
                </p>

                <a href="#experience"
                    class="mt-8 inline-block bg-orange-400 hover:bg-orange-500 text-white px-6 py-3 rounded-xl shadow"
                    style="font-family:'DM Sans',sans-serif; font-weight:400; font-size:0.9rem; letter-spacing:0.04em; transition: all 0.2s;">
                    Explore My Journey
                </a>
            </div>

            <!-- KANAN (IMAGE) -->
            <div>
                <img src="{{ asset('images/profile.jpg') }}" class="w-full max-w-md mx-auto rounded-2xl shadow-xl">
            </div>
        </div>
    </section>


    <!-- ABOUT + FUN FACT -->
    <section id="about" class="py-20"
        style="background: linear-gradient(135deg, #fdf4ff 0%, #fff7ed 55%, #fef9c3 100%); position:relative; overflow:hidden;">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Label kecil -->
            <p
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:0.5rem;">
                ✦ &nbsp; Who I Am
            </p>

            <h2
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:clamp(2.2rem,5vw,3.5rem); letter-spacing:-0.02em; color:#111; margin-bottom:2.5rem;">
                About Me
            </h2>

            <div class="grid md:grid-cols-2 gap-10">
                <div class="h-80 overflow-y-auto pr-4">
                    <p
                        style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.97rem; line-height:1.9; letter-spacing:0.012em; color:#4b5563;">
                        Hi! My name is Karerina Atthaullah Dwi Zumar and everyone is called me Karin, i'm 16 years old
                        and i'm born at Jepara, Bangsri on Friday 31st of July 2009. I'm a so interested with Front-End,
                        i'm a person who enjoys building modern, responsive, and user-friendly websites. I have a strong
                        interest in web development and always eager to learn new technologies and improve my skills.
                        I'm a person that have so many hobby, like singing, writing, listening to music, baking,
                        cooking, watching Anime and a lot of Movies, and many more. I study at Technical High School 1
                        Bangsri, grade 11 majoring in Software Engineering. After 16 years of schooling, i've built so
                        many soft skill, like Public Speaking, Leadership, Teamwork, Organization Skills, Event
                        Planning, Team Leadership and many others.
                    </p>
                </div>

                <div>
                    <h3
                        style="font-family:'Cormorant Garamond',serif; font-weight:500; font-size:1.6rem; color:#1f2937; margin-bottom:1rem; letter-spacing:-0.01em;">
                        Fun Facts About Me
                    </h3>

                    <div class="grid gap-4">
                        <div class="p-5 rounded-xl"
                            style="background:#fef9c3; font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.92rem; line-height:1.7;">
                            ✨ I really love any types of onions, but i really hate fried white onion.
                        </div>
                        <div class="p-5 rounded-xl"
                            style="background:#ffedd5; font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.92rem; line-height:1.7;">
                            🔥 I can sleep just 20-30 minutes and all of my energy will become full again.
                        </div>
                        <div class="p-5 rounded-xl"
                            style="background:#fce7f3; font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.92rem; line-height:1.7;">
                            💡 I can do listening a music, yapp with everyone around me, even i have to focus with my
                            work.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- EXPERIENCE -->
    <section id="experience" class="py-20 bg-gradient-to-br from-yellow-50 to-orange-50">
        <div class="max-w-6xl mx-auto px-6">

            <p
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:0.5rem;">
                ✦ &nbsp; Where I've Been
            </p>
            <h2
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:clamp(2.2rem,5vw,3.5rem); letter-spacing:-0.02em; color:#111; margin-bottom:2.5rem;">
                My Journey
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <!-- CARD 1 -->
                <div onclick="openModal('exp1')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp1.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition"></div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            OSIS SMPN 1 Bangsri</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            We grow together.</p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div onclick="openModal('exp2')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp2.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            PASSUS Wijaya Adiguna</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            Here is where courage is shaped.</p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div onclick="openModal('exp3')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp3.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            Band ESSABA</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            A place that i became a Star.</p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div onclick="openModal('exp4')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp4.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            Pramuka SMPN 1 Bangsri</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            I really love this Place.</p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div onclick="openModal('exp5')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp5.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            OSIS SMKN 1 Bangsri</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            Growing it has their own Meaning.</p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div onclick="openModal('exp6')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp6.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            Webdev Taksan Nawasena</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            This is… H O M E.</p>
                    </div>
                </div>

                <!-- CARD 7 -->
                <div onclick="openModal('exp7')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp7.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            PMR Wira Sandya Adhimukti</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            Fun it's them when became a person.</p>
                    </div>
                </div>

                <!-- CARD 8 -->
                <div onclick="openModal('exp8')"
                    class="group cursor-pointer bg-white/70 backdrop-blur-md rounded-xl overflow-hidden shadow hover:scale-105 transition">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/exp8.jpg') }}"
                            class="w-full aspect-square object-cover group-hover:scale-110 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.05rem; color:#111;">
                            Pramuka SMKN 1 Bangsri</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.82rem; color:#9ca3af; margin-top:2px;">
                            Hard, but have Warmth.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MODAL -->
    <div id="modal" onclick="closeModal()"
        class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50">

        <div onclick="event.stopPropagation()"
            class="bg-white p-6 rounded-2xl max-w-md w-full max-h-[90vh] overflow-y-auto shadow-2xl animate-scaleIn">

            <div class="overflow-hidden rounded-xl mb-4">
                <img id="modalImage" class="w-full aspect-square object-cover">
            </div>

            <h3 id="modalTitle"
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.6rem; color:#111; margin-bottom:0.5rem;">
            </h3>

            <p id="modalContent"
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.92rem; line-height:1.8; color:#4b5563;">
            </p>

            <button onclick="closeModal()"
                class="mt-6 w-full bg-orange-400 hover:bg-orange-500 text-white px-4 py-3 rounded-lg"
                style="font-family:'DM Sans',sans-serif; font-weight:400; font-size:0.9rem; letter-spacing:0.04em;">
                Close
            </button>

        </div>
    </div>

    <!-- SKILLS -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">

            <p
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:0.5rem;">
                ✦ &nbsp; What I Use
            </p>
            <h2
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:clamp(2.2rem,5vw,3.5rem); letter-spacing:-0.02em; color:#111; margin-bottom:2.5rem;">
                Skills
            </h2>

            <div class="flex flex-wrap justify-center gap-6">
                <img src="https://i.pinimg.com/736x/c5/73/ff/c573ff5552d6da9a1d28ec4e27cd1445.jpg" class="w-10 h-10">
                <img src="https://i.pinimg.com/736x/20/49/fd/2049fdac5ea804fc6f136bbce2cf89f4.jpg" class="w-10 h-10">
                <img src="https://i.pinimg.com/1200x/39/d8/97/39d897b25f0ec8cf71dbbdb50231171a.jpg" class="w-10 h-10">
                <img src="https://i.pinimg.com/1200x/ed/94/e3/ed94e3e6fae5dd09cd8f7652f4a01c3d.jpg" class="w-10 h-10">
                <img src="https://i.pinimg.com/736x/4d/fc/38/4dfc38802784bcf687f616e7e5a4370c.jpg" class="w-10 h-10">
            </div>
        </div>
    </section>


    <!-- PROJECTS -->
    <section id="project" class="py-20 bg-gradient-to-br from-orange-100 to-pink-100">
        <div class="max-w-6xl mx-auto px-6">

            <p
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:0.5rem;">
                ✦ &nbsp; What I've Built
            </p>
            <h2
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:clamp(2.2rem,5vw,3.5rem); letter-spacing:-0.02em; color:#111; margin-bottom:2.5rem;">
                Projects
            </h2>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.15rem; color:#111;">
                            Project 1</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.85rem; color:#9ca3af;">
                            Description</p>
                        <a href="#"
                            style="font-family:'DM Sans',sans-serif; font-weight:400; font-size:0.87rem; color:#f97316;">GitHub
                            →</a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.15rem; color:#111;">
                            Project 2</h3>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-4">
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.15rem; color:#111;">
                            Project 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- EDUCATION -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">

            <p
                style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; letter-spacing:0.18em; color:#f97316; text-transform:uppercase; margin-bottom:0.5rem;">
                ✦ &nbsp; Academic Path
            </p>
            <h2
                style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:clamp(2.2rem,5vw,3.5rem); letter-spacing:-0.02em; color:#111; margin-bottom:2.5rem;">
                Education
            </h2>

            <div class="space-y-6">
                <div class="flex justify-between border-b pb-3">
                    <div>
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.1rem; color:#111;">
                            TK - SD</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#9ca3af;">
                            TK TA 01 Bangsri & SDN 01 Bangsri</p>
                    </div>
                    <span
                        style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#6b7280;">2012
                        – 2021</span>
                </div>

                <div class="flex justify-between border-b pb-3">
                    <div>
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.1rem; color:#111;">
                            SMP</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#9ca3af;">
                            SMP Negeri 01 Bangsri</p>

                    </div>
                    <span
                        style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#6b7280;">2021
                        – 2024</span>
                </div>

                <div class="flex justify-between">
                    <div>
                        <h3
                            style="font-family:'Cormorant Garamond',serif; font-weight:600; font-size:1.1rem; color:#111;">
                            SMK</h3>
                        <p
                            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#9ca3af;">
                            SMK Negeri 01 Bangsri</p>

                    </div>
                    <span
                        style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; color:#6b7280;">2024
                        – 2027</span>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="contact" class="bg-[#7a0019] text-white px-10 py-16">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h2
                    style="font-family:'Cormorant Garamond',serif; font-weight:700; font-size:1.6rem; letter-spacing:0.03em; margin-bottom:0.75rem;">
                    Karin's Portfolio
                </h2>
                <p
                    style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; line-height:1.8; opacity:0.7;">
                    A passionate Front-End Learner who enjoys building modern, responsive, and user-friendly websites.
                    I really love to learn new technologies and improve my skills. Feel free to connect with me and
                    explore everything about Technology and Software Engineering together!
                </p>
            </div>

            <div class="md:text-right">
                <h3
                    style="font-family:'Cormorant Garamond',serif; font-weight:500; font-style:italic; font-size:1.2rem; margin-bottom:0.75rem;">
                    I know you're attracted to me :D
                </h3>

                <div class="flex md:justify-end gap-5"
                    style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.87rem; letter-spacing:0.03em;">
                    <a href="https://www.linkedin.com/in/kkarinattha/" target="_blank"
                        class="hover:underline">LinkedIn</a>
                    <a href="https://github.com/Kayienaa" target="_blank" class="hover:underline">GitHub</a>
                    <a href="https://www.instagram.com/kkarinattha/" target="_blank"
                        class="hover:underline">Instagram</a>
                    <a href="mailto:karinnkarerina31@gmail.com" class="hover:underline">Email</a>
                </div>

                <p
                    style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.85rem; opacity:0.7; margin-top:1rem;">
                    📍 Indonesia, Jawa Tengah, Jepara, Bangsri.
                </p>
            </div>

        </div>

        <!-- BIG TEXT -->
        <div class="mt-16 leading-none"
            style="font-family:'Cormorant Garamond',serif; font-weight:300; font-style:italic; font-size:clamp(2rem,7vw,5rem); letter-spacing:-0.01em; line-height:1.1;">
            Everything You Lose,<br>Is a Step You Take.
        </div>

        <!-- BOTTOM -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-2"
            style="font-family:'DM Sans',sans-serif; font-weight:300; font-size:0.78rem; opacity:0.5;">
            <p>© 2026 Karin's Portfolio</p>
            <p>Learning Together, Growing Faster! 🚀</p>
        </div>
    </footer>


    <!-- SCRIPT -->
    <script>
        const data = {
            exp1: {
                title: "OSIS SMPN 1 Bangsri",
                content: "OSIS SMP Negeri 1 Bangsri. Hanya 1 tahun masa menjabat aku mengabdi disini, tapi kenangan yang telah kami cipta sebanyak bulir pada kebun teh di pagi hari. Saat aku mulai menyalonkan diri untuk periode kedua angkatanku di OSIS SMP Negeri 1 Bangsri aku sangat yakin bahwa aku pasti akan diterima, dan iya, aku diterima. Disini lah cerita-cerita pulang di sore hari ku dimulai, event-event kecil di SMP kita tersayang selalu kami buat semenyenangkan yang kami bisa. Dan satu tahun aku disana, aku merasa sangat bahagia dengan adanya mereka. Kalau waktu bisa diputar kembali, aku mungkin akan bergabung dengan OSIS SMP lebih awal, dan turut serta mengikuti masa jabatan ketua OSIS di kala itu.",
                image: "{{ asset('images/exp1.jpg') }}"
            },
            exp2: {
                title: "PASSUS Wijaya Adiguna",
                content: "Di PASSUS Wijaya Adiguna aku diberikan amanah untuk menjadi Wakil Ketua, dan disini juga aku mendapatkan banyak sekali pengalaman yang sangat seru dan juga tentunya sangat bermakna. Dari PASSUS Wijaya Adiguna aku belajar bahwa kebahagiaan bisa kita dapatkan walau itu berasal dari hal se sederhana saling suap-suapan saat makan siang dengan siapapun tanpa memandang jenis dan gendernya. Korsa, tegas, kepemimpinan, kuat, dan masih banyak istilah lainnya itu aku dapatkan di dalam sini, disini lah aku bertemu dengan Rumah Kedua ku, disini lah aku mendapatkan banyak sekali saudara baru, disini lah aku mendapatkan banyak sekali pengalaman yang sangat berharga, dan disini lah aku mendapatkan banyak sekali kenangan yang sangat indah. Aku sangat bersyukur bisa menjadi bagian dari PASSUS Wijaya Adiguna.",
                image: "{{ asset('images/exp2.jpg') }}"
            },
            exp3: {
                title: "Band ESSABA",
                content: "Hobi? Bakat? Anugerah? Entahlah... Aku hanya... Merasa seperti terlahir kembali disini. Ini adalah tempat dimana akhirnya aku mampu mengeluarkan apa yang selama ini aku miliki. Dari kecil aku sangat suka musik, bahkan aku telah menjadi seorang Swifties (sebutan untuk penggemar Taylor Swift) sejak aku menginjak usia sekitar 6-8 tahun. Dan disinilah perjalanan panjang bermusik ku dimulai, dari tempat yang membuatku bisa menyuarakan isi hatiku lewat nada, dengan orang-orang yang sellau membuat aku bahagia.",
                image: "{{ asset('images/exp3.jpg') }}"
            },
            exp4: {
                title: "Pramuka SMPN 1 Bangsri",
                content: "Aku memang sudah mengikuti banyak kegiatan yang mengandalkan survival dan juga ketahanan fisik atau mungkin juga Pramuka, sejak SD. Dan saat aku menginjak SMP aku bahkan diberikan amanah untuk menjadi seorang Pramuka Garuda dengan 6 temanku lainnya. Dan aku juga pernah mengikuti LT 2, dan aku dapat dibagian Peta Pita. Mungkin sekolah kita memang tidak mendapatkan juara umum, namun aku tetap bangga dengan kita, dan diriku tentunya. Aku dengan partner ku mendapatkan juara 1 kategori Pita Pita, itulah yang membuatku jauh lebih bangga dengan kita dan juga diriku disana. Sebuah pengalaman baru yang menciptakan banyak sekali memori indah didalamnya, aku sayang kalian.",
                image: "{{ asset('images/exp4.jpg') }}"
            },
            exp5: {
                title: "OSIS SMKN 1 Bangsri",
                content: "Mungkin di SMP dulu kalau ada event di sekolah kita tinggal bikin dekornya atau mungkin bikin iklannya, namun di SMK ini, kita membuatnya semua bersama-sama, dari nol. Hebat, jika mereka menjadi sebuah kata, mereka adalah Hebat yang tak bisa diutarakan begitu saja. Kita jatuh, kita bangkit bersama, kita sedih, kita bahagia bersama, semua kita jalani bersama, apa itu gengsi dengan lawan jenis atau yang berbeda dari kita ras atau suku nya? Kekeluargaan kita bahkan rasanya tak bisa ditandingi oleh siapapun. Kita berbagi minum bersama, kita berbagi makan bersama. Banyak sekali hal yang sudah kita rayakan didalamnya, kami selalu terbentur lalu terbentuk. Disini aku diberikan amanah untuk menjadi Koordinator Divisi 4 yaitu Divisi Prestasi Akademik, Seni, dan Olahraga",
                image: "{{ asset('images/exp5.jpg') }}"
            },
            exp6: {
                title: "Webdev Taksan Nawasena",
                content: "Webdev Taksan Nawasena, ekstra pertama yang aku kenal namanya dan konsep nya, dan disini aku juga menjadi Generasi Pertama yaitu Gen Alfa Webdev Taksan Nawasena. Sungguh bahagia rasanya di amanahi sebagai Ketua di generasi pertama di ekstrakurikuler yang baru saja lahir ini. Dari sini aku belajar lebih dan SANGAT banyak hal baru, bukan hanya dari hard skill namun juga soft skill, dari sini aku belajar bagaimana cara mengatur sebuah organisasi, bagaimana cara memimpin sebuah organisasi, bagaimana cara membagi tugas, bagaimana cara menyelesaikan masalah, dan masih banyak lagi. Aku sangat bersyukur bisa menjadi bagian dari Webdev Taksan Nawasena, aku sangat bersyukur bisa menjadi generasi pertama di Webdev Taksan Nawasena, aku sangat bersyukur bisa menjadi ketua di Webdev Taksan Nawasena, dan aku sangat bersyukur bisa mendapatkan banyak sekali pengalaman yang sangat berharga disini.",
                image: "{{ asset('images/exp6.jpg') }}"
            },
            exp7: {
                title: "PMR Wira Sandya Adhimukti",
                content: "Isi pengalaman ke 7",
                image: "{{ asset('images/exp7.jpg') }}"
            },
            exp8: {
                title: "Pramuka SMKN 1 Bangsri",
                content: "Isi pengalaman ke 8",
                image: "{{ asset('images/exp8.jpg') }}"
            }
        };

        function openModal(id) {
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modalTitle').innerText = data[id].title;
            document.getElementById('modalContent').innerText = data[id].content;
            document.getElementById('modalImage').src = data[id].image;
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // ── SPARKLING EFFECT ──────────────────────────────────────
        const sparkColors = ['#f97316', '#fb923c', '#fbbf24', '#f472b6', '#c084fc', '#a78bfa'];
        const sparkSymbols = ['✦', '✧', '⋆', '✶', '·', '✴'];

        function spawnSpark(container) {
            const w = container.offsetWidth;
            const h = container.offsetHeight;
            const count = 2 + Math.floor(Math.random() * 3);

            for (let i = 0; i < count; i++) {
                setTimeout(() => {
                    const x = 15 + Math.random() * (w - 30);
                    const y = 15 + Math.random() * (h - 30);
                    const color = sparkColors[Math.floor(Math.random() * sparkColors.length)];
                    const dur = (1.5 + Math.random() * 1.5).toFixed(1);

                    const star = document.createElement('span');
                    star.className = 'spark-star';
                    star.textContent = sparkSymbols[Math.floor(Math.random() * sparkSymbols.length)];
                    const size = 12 + Math.floor(Math.random() * 12);
                    star.style.cssText =
                        `left:${x}px;top:${y}px;color:${color};font-size:${size}px;--dur:${dur}s;filter:drop-shadow(0 0 3px ${color});`;
                    container.appendChild(star);

                    if (Math.random() > 0.45) {
                        const dot = document.createElement('div');
                        dot.className = 'spark-dot';
                        const ds = 3 + Math.floor(Math.random() * 6);
                        dot.style.cssText =
                            `left:${x + (Math.random()-0.5)*18}px;top:${y + (Math.random()-0.5)*18}px;width:${ds}px;height:${ds}px;background:${color};--dur:${dur}s;box-shadow:0 0 ${ds}px ${color};`;
                        container.appendChild(dot);
                        setTimeout(() => dot.remove(), dur * 1000 + 500);
                    }

                    setTimeout(() => star.remove(), dur * 1000 + 500);
                }, i * 180);
            }
        }

        const heroSection = document.getElementById('home');
        const aboutSection = document.getElementById('about');

        setInterval(() => spawnSpark(heroSection), 700);
        setInterval(() => spawnSpark(aboutSection), 950);

        spawnSpark(heroSection);
        spawnSpark(aboutSection);
    </script>

</x-landing-layout>
