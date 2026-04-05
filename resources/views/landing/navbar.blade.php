<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="fixed w-full bg-white shadow z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">MyPortfolio</h1>
            <ul class="flex gap-6 font-medium">
                <li><a href="#home" class="hover:text-blue-600">Home</a></li>
                <li><a href="#about" class="hover:text-blue-600">About</a></li>
                <li><a href="#skill" class="hover:text-blue-600">Skill</a></li>
                <li><a href="#project" class="hover:text-blue-600">Project</a></li>
                <li><a href="#contact" class="hover:text-blue-600">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- HOME -->
    <section id="home" class="h-screen flex items-center justify-center bg-blue-500 text-white pt-20">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-4">Welcome to My Portfolio</h2>
            <p class="text-lg">Saya adalah Web Developer</p>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">About Me</h2>
            <p>
                Saya adalah seorang developer yang fokus pada pembuatan website menggunakan Laravel dan teknologi modern
                lainnya.
            </p>
        </div>
    </section>

    <!-- SKILL -->
    <section id="skill" class="py-20 bg-gray-100">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">My Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded shadow">HTML</div>
                <div class="bg-white p-4 rounded shadow">CSS</div>
                <div class="bg-white p-4 rounded shadow">JavaScript</div>
                <div class="bg-white p-4 rounded shadow">Laravel</div>
            </div>
        </div>
    </section>

    <!-- PROJECT -->
    <section id="project" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">My Projects</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-100 p-4 rounded shadow">
                    <h3 class="font-bold">Project 1</h3>
                    <p class="text-sm">Deskripsi project</p>
                </div>
                <div class="bg-gray-100 p-4 rounded shadow">
                    <h3 class="font-bold">Project 2</h3>
                    <p class="text-sm">Deskripsi project</p>
                </div>
                <div class="bg-gray-100 p-4 rounded shadow">
                    <h3 class="font-bold">Project 3</h3>
                    <p class="text-sm">Deskripsi project</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Contact Me</h2>
            <form class="space-y-4">
                <input type="text" placeholder="Name" class="w-full p-3 border rounded">
                <input type="email" placeholder="Email" class="w-full p-3 border rounded">
                <textarea placeholder="Message" class="w-full p-3 border rounded"></textarea>
                <button class="bg-blue-600 text-white px-6 py-2 rounded">
                    Send
                </button>
            </form>
        </div>
    </section>

</body>

</html>
