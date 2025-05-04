@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 overflow-x-hidden">

        <section class="relative py-20 text-white rounded-xl shadow-xl overflow-hidden">
            <!-- Animated background gradient -->
            <div class="absolute inset-0 animated-bg"></div>

            <!-- Background animated particles -->
            <div id="particles-js" class="absolute inset-0 opacity-20"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div data-framer-motion='{"initial": {"opacity": 0, "y": 50}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'
                    class="text-center">
                    <h1 class="text-2xl lg:text-6xl font-bold mb-3 tracking-tight">Kemal Musthafa Rajabi</h1>
                    <div x-data="{ titles: ['Fullstack Web Developer', 'Software Developer', 'UI/UX Enthusiast'], currentIndex: 0 }" x-init="setInterval(() => { currentIndex = (currentIndex + 1) % titles.length }, 3000)">
                        <p class="text-xl h-8" x-text="titles[currentIndex]"></p>
                    </div>
                    <p class="text-xl mt-8 max-w-2xl mx-auto text-blue-100">Building scalable applications and user-centric
                        solutions with cutting-edge technologies.</p>

                    <a href="https://linktr.ee/kemalmusthafa"
                        data-framer-motion='{"whileHover": {"scale": 1.05}, "whileTap": {"scale": 0.95}}'
                        class="mt-10 inline-flex items-center px-8 py-3 bg-white text-blue-600 rounded-full font-medium shadow-lg hover:shadow-2xl transition-all duration-300">
                        <span>Let's Connect</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Animated wave bottom -->
            <div class="absolute bottom-0 left-0 -right-1 wave-animation overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="white" fill-opacity="1"
                        d="M0,288L48,272C96,256,192,224,288,229.3C384,235,480,277,576,293.3C672,309,768,299,864,272C960,245,1056,203,1152,176C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        </section>

        <!-- CSS Animations for background and waves -->
        <style>
            /* Animated Background Gradient */
            .animated-bg {
                background: linear-gradient(-45deg, #4f46e5, #3b82f6, #8b5cf6, #6366f1);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite;
            }

            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }

                50% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            .wave-animation {
                width: 140%;
                animation: moveWave 15s linear infinite;
                background-repeat: repeat-x;
            }

            @keyframes moveWave {
                0% {
                    transform: translateX(0);
                }

                50% {
                    transform: translateX(-25%);
                }

                100% {
                    transform: translateX(0);
                }
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .wave-animation {
                    width: 130%;
                    /* Wider on mobile for smoother animation */
                }

                @keyframes moveWave {
                    0% {
                        transform: translateX(0);
                    }

                    50% {
                        transform: translateX(-16.67%);
                    }

                    100% {
                        transform: translateX(0);
                    }
                }
            }
        </style>

        <!-- Particles.js for background particles -->
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                particlesJS('particles-js', {
                    "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#ffffff"
                        },
                        "shape": {
                            "type": "circle",
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": true,
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#ffffff",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 1
                                }
                            },
                            "push": {
                                "particles_nb": 4
                            }
                        }
                    },
                    "retina_detect": true
                });
            });
        </script>

        <!-- About Me Section with Framer Motion -->
        <section id="about" class="py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 pr-0 md:pr-10">
                        <div data-framer-motion='{"initial": {"opacity": 0, "x": -100}, "whileInView": {"opacity": 1, "x": 0}, "transition": {"duration": 0.8}, "viewport": {"once": true}}'
                            class="relative">
                            <div
                                class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl transform -rotate-6 opacity-30">
                            </div>
                            <img src="/img/Kemal.png" alt="Kemal Musthafa"
                                class="relative rounded-xl shadow-xl w-full max-w-md mx-auto">
                        </div>
                    </div>

                    <div class="md:w-1/2 p-10">
                        <div
                            data-framer-motion='{"initial": {"opacity": 0, "y": 50}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.6, "delay": 0.2}, "viewport": {"once": true}}'>
                            <h2 class="text-3xl font-bold text-gray-800 mb-2">About Me</h2>
                            <div class="w-20 h-1.5 bg-blue-600 rounded-full mb-6"></div>
                            <p class="text-lg text-gray-600 mb-6">
                                I am a passionate Fullstack Web Developer with experience in React.js, Laravel, MySQL, and
                                various other technologies. I aim to deliver clean, efficient code and meaningful user
                                experiences.
                            </p>
                            <p class="text-lg text-gray-600 mb-8">
                                My approach combines technical expertise with a strong emphasis on user experience, ensuring
                                that every project not only functions flawlessly but also delights users with intuitive
                                interfaces and smooth interactions.
                            </p>

                            <div class="flex flex-wrap gap-4">
                                <a href="#contact"
                                    data-framer-motion='{"whileHover": {"scale": 1.05}, "whileTap": {"scale": 0.95}}'
                                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow">
                                    Contact Me
                                </a>
                                <a href="https://drive.google.com/file/d/148t-tg7Bj384ExptwtO6vfvRIizA_rjV/view?usp=sharing"
                                    data-framer-motion='{"whileHover": {"scale": 1.05}, "whileTap": {"scale": 0.95}}'
                                    class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition-colors duration-300">
                                    Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section with Framer Motion -->
        <section id="skills" class="py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <div data-framer-motion='{"initial": {"opacity": 0, "y": 20}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5}, "viewport": {"once": true}}'
                    class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Skills & Expertise</h2>
                    <div class="w-24 h-1.5 bg-blue-600 rounded-full mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        My technical toolkit includes a variety of languages, frameworks, and tools that allow me to build
                        comprehensive solutions.
                    </p>
                </div>

                <div class="skills-container" data-skills-tabs>
                    <!-- Tabs Navigation -->
                    <div data-framer-motion='{"initial": {"opacity": 0, "y": 20}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.6, "delay": 0.2}, "viewport": {"once": true}}'
                        class="flex justify-center mb-12">
                        <div class="inline-flex bg-white rounded-full p-1 shadow-md">
                            <button data-tab="frontend"
                                class="px-6 py-2 rounded-full bg-blue-600 text-white font-medium focus:outline-none">
                                Frontend
                            </button>
                            <button data-tab="backend"
                                class="px-6 py-2 rounded-full text-gray-700 font-medium focus:outline-none">
                                Backend
                            </button>
                            <button data-tab="tools"
                                class="px-6 py-2 rounded-full text-gray-700 font-medium focus:outline-none">
                                Tools
                            </button>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Frontend Skills -->
                        <div data-tab-content="frontend" class="block">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <!-- Next -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-white border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/nextjs.svg') }}" alt="Next.js Logo" class="w-14 h-14">
                                        </div>

                                        <h3 class="text-lg font-semibold text-gray-800">Next.js</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-black h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- React -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-blue-100 rounded-full mb-4">
                                            <i class="fab fa-react text-3xl text-blue-500"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">React.js</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vue -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-white border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/vue.svg') }}" alt="Next.js Logo" class="w-10 h-10">
                                        </div>

                                        <h3 class="text-lg font-semibold text-gray-800">Vue.js</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-700 h-2 rounded-full" style="width: 10%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- TypeScript -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-blue-200 rounded-full mb-4">
                                            <img src="{{ asset('img/typescript.svg') }}" alt="Next.js Logo"
                                                class="w-7 h-7">
                                        </div>

                                        <h3 class="text-lg font-semibold text-gray-800">TypeScript</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- JavaScript -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-yellow-100 rounded-full mb-4">
                                            <i class="fab fa-js text-3xl text-yellow-500"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">JavaScript</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- HTML/CSS -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-red-100 rounded-full mb-4">
                                            <i class="fab fa-html5 text-3xl text-red-500"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">HTML5/CSS3</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-red-500 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- TailwindCSS -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.4}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/tailwind.svg') }}" alt="tailwind" class="w-10 h-10">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">TailwindCSS</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-teal-400 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bootstrap -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.4}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/bootstrap.svg') }}" alt="bootstrap"
                                                class="w-12 h-12">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Bootstrap</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-black h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Backend Skills -->
                        <div data-tab-content="backend" class="hidden">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <!-- Laravel -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-red-100 rounded-full mb-4">
                                            <i class="fab fa-laravel text-3xl text-red-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Laravel</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-red-600 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PHP -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-purple-100 rounded-full mb-4">
                                            <i class="fab fa-php text-3xl text-purple-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">PHP</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Node.js -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-green-100 rounded-full mb-4">
                                            <i class="fab fa-node-js text-3xl text-green-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Node.js</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Express.js -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/express.svg') }}" alt="express.js" class="w-12 h-12">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Express.js</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-black h-2 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prisma -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/prisma.svg') }}" alt="prisma" class="w-12 h-12">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Prisma</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-black h-2 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PostgreSQL -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/postgresql.svg') }}" alt="postgresql"
                                                class="w-12 h-12">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">PostgreSQL</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-[#336791] h-2 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MySQL -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.4}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-blue-100 rounded-full mb-4">
                                            <i class="fas fa-database text-3xl text-blue-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">MySQL</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Python -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/python.svg') }}" alt="python" class="w-12 h-12">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Python</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 10%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tools -->
                        <div data-tab-content="tools" class="hidden">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                                   <!-- Figma -->
                                   <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                   class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                   <div class="flex flex-col items-center">
                                       <div
                                           class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                           <img src="{{ asset('img/figma.svg') }}" alt="Figma" class="w-10 h-10">
                                       </div>
                                       <h3 class="text-lg font-semibold text-gray-800">Figma</h3>
                                       <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                           <div class="bg-slate-700 h-2 rounded-full" style="width: 90%"></div>
                                       </div>
                                   </div>
                               </div>

                                <!-- Git -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-orange-100 rounded-full mb-4">
                                            <i class="fab fa-git-alt text-3xl text-orange-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Git</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-orange-600 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- GitHub -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center rounded-full mb-4">
                                            <img src="{{ asset('img/github.svg') }}" alt="github" class="w-16 h-16">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">GitHub</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-slate-700 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Docker -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-blue-100 rounded-full mb-4">
                                            <i class="fab fa-docker text-3xl text-blue-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Docker</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Postman -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center rounded-full mb-4">
                                            <img src="{{ asset('img/postman.svg') }}" alt="postman" class="w-16 h-16">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Postman</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-orange-500 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vercel -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center border-2 rounded-full mb-4">
                                            <img src="{{ asset('img/vercel.svg') }}" alt="vercel" class="w-10 h-10">
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">Vercel</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-black h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CLI -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-gray-100 rounded-full mb-4">
                                            <i class="fas fa-terminal text-3xl text-gray-700"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">CLI</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-gray-700 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CI/CD -->
                                <div data-framer-motion='{"initial": {"opacity": 0, "y": 30}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": 0.4}, "viewport": {"once": true}'
                                    class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="icon-container w-16 h-16 flex items-center justify-center bg-purple-100 rounded-full mb-4">
                                            <i class="fas fa-code-branch text-3xl text-purple-600"></i>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800">CI/CD</h3>
                                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-600 h-2 rounded-full" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section with Framer Motion -->
        <section id="projects" class="py-24">
            <div class="container mx-auto px-4">
                <div data-framer-motion='{"initial": {"opacity": 0, "y": 20}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5}, "viewport": {"once": true}}'
                    class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">My Projects</h2>
                    <div class="w-24 h-1.5 bg-blue-600 rounded-full mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        A selection of my recent work, showcasing my skills and expertise in different areas.
                    </p>
                </div>

                <div data-projects-filter class="mb-10">
                    <!-- Filter Buttons -->
                    <div data-framer-motion='{"initial": {"opacity": 0, "y": 20}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.6, "delay": 0.2}, "viewport": {"once": true}}'
                        class="flex flex-wrap justify-center gap-3 mb-10">
                        <button data-filter="all"
                            class="px-6 py-2 bg-blue-600 text-white rounded-full focus:outline-none shadow-md hover:shadow-lg transition-all duration-300">
                            All Projects
                        </button>
                        <button data-filter="web"
                            class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full focus:outline-none shadow-sm hover:shadow transition-all duration-300">
                            Web Apps
                        </button>
                        <button data-filter="mobile"
                            class="px-6 py-2 bg-gray-100 text-gray-700 rounded-full focus:outline-none shadow-sm hover:shadow transition-all duration-300">
                            Mobile
                        </button>
                    </div>

                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Project 1 -->
                        <div data-filter-item="web"
                            data-framer-motion='{"initial": {"opacity": 0, "scale": 0.9}, "whileInView": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": 0.1}, "viewport": {"once": true}'
                            class="group">
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                                <div class="relative h-60 overflow-hidden">
                                    <img src="/img/washio.png" alt="Washio"
                                        class="w-full h-full p-5 object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center">
                                        <div
                                            class="p-6 space-x-2 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                            <a href="https://github.com/kemalmusthafa" target="_blank"
                                                class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-blue-50">View
                                                Code</a>
                                            <a href="https://washio.vercel.app" target="_blank"
                                                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        Washio - Laundry Web Application</h3>
                                    <p class="text-gray-600 mb-4">A web app that allows users to book laundry services
                                        online. Features real-time status tracking and secure payments.</p>
                                    <div class="flex flex-wrap gap-2 font-bold">
                                        <span class="bg-black text-white text-xs px-2 py-1 rounded-md">Next.js</span>
                                        <span class="bg-blue-400 text-white text-xs px-2 py-1 rounded-md">React</span>
                                        <span
                                            class="bg-gradient-to-r from-blue-400 to bg-green-400 text-white text-xs px-2 py-1 rounded-md">Tailwind
                                            CSS</span>
                                        <span class="bg-green-400 text-black text-xs px-2 py-1 rounded-md">Node.js</span>
                                        <span
                                            class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md">Express.js</span>
                                        <span class="bg-blue-400 text-blue-800 text-xs px-2 py-1 rounded-md">Midtrans
                                            Payment</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-filter-item="web"
                            data-framer-motion='{"initial": {"opacity": 0, "scale": 0.9}, "whileInView": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                            class="group">
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                                <div class="relative h-60 overflow-hidden">
                                    <img src="/img/evenext.png" alt="Evenext"
                                        class="w-full h-full p-5 object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center">
                                        <div
                                            class="p-6 space-x-2 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                            <a href="https://github.com/kemalmusthafa" target="blank"
                                                class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-blue-50">View
                                                Code</a>
                                            <a href="https://evenext-fe.vercel.app" target="_blank"
                                                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        Evenext - Event Ticketing</h3>
                                    <p class="text-gray-600 mb-4">An event ticketing platform built with SEO-friendly SSR
                                        and secure payment integration for seamless user experience.</p>
                                    <div class="flex flex-wrap gap-2 font-bold">
                                        <span class="bg-black text-white text-xs px-2 py-1 rounded-md">Next.js</span>
                                        <span class="bg-blue-400 text-white text-xs px-2 py-1 rounded-md">React</span>
                                        <span
                                            class="bg-gradient-to-r from-blue-400 to bg-green-400 text-white text-xs px-2 py-1 rounded-md">Tailwind
                                            CSS</span>
                                        <span class="bg-green-400 text-black text-xs px-2 py-1 rounded-md">Node.js</span>
                                        <span
                                            class="bg-yellow-400 text-black text-xs px-2 py-1 rounded-md">Express.js</span>
                                        <span class="bg-blue-400 text-blue-800 text-xs px-2 py-1 rounded-md">Midtrans
                                            Payment</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-filter-item="web"
                            data-framer-motion='{"initial": {"opacity": 0, "scale": 0.9}, "whileInView": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                            class="group">
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                                <div class="relative h-60 overflow-hidden">
                                    <img src="/img/rodarakyat.png" alt="Roda Rakyat"
                                        class="w-full h-full p-5 object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center">
                                        <div
                                            class="p-6 space-x-2 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                            <a href="https://github.com/kemalmusthafa" target="blank"
                                                class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-blue-50">View
                                                Code</a>
                                            <a href="https://rodarakyat.com" target="_blank"
                                                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        Roda Rakyat - Rental Car Website</h3>
                                    <p class="text-gray-600 mb-4">The website features a user-friendly interface, seamless
                                        navigation, and an integrated e-commerce system that allows customers to explore and
                                        rental car on a wide range.</p>
                                    <div class="flex flex-wrap gap-2 font-bold">
                                        <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-md">Laravel</span>
                                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-md">PHP</span>
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-md">Bootstrap</span>
                                        <span
                                            class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-md">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-filter-item="web"
                            data-framer-motion='{"initial": {"opacity": 0, "scale": 0.9}, "whileInView": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": 0.2}, "viewport": {"once": true}'
                            class="group">
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                                <div class="relative h-60 overflow-hidden">
                                    <img src="/img/msth.png" alt="MSTH."
                                        class="w-full h-full p-5 object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center">
                                        <div
                                            class="p-6 space-x-2 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                            <a href="https://github.com/kemalmusthafa" target="blank"
                                                class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-blue-50">View
                                                Code</a>
                                            <a href="https://msth-clothing.vercel.app" target="_blank"
                                                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        MSTH. - Clothing Line</h3>
                                    <p class="text-gray-600 mb-4">An interactive company profile built with an integrated
                                        Contentful CMS, and designed to scale into a full-featured e-commerce clothing
                                        store.</p>
                                    <div class="flex flex-wrap gap-2 font-bold">
                                        <span class="bg-black text-white text-xs px-2 py-1 rounded-md">Next.js</span>
                                        <span class="bg-blue-400 text-white text-xs px-2 py-1 rounded-md">React</span>
                                        <span
                                            class="bg-gradient-to-r from-blue-400 to bg-green-400 text-white text-xs px-2 py-1 rounded-md">Tailwind
                                            CSS</span>
                                        <span
                                            class="bg-gradient-to-r from-yellow-500 to bg-red-500 text-white text-xs px-2 py-1 rounded-md">Contentful
                                            CMS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project 3 -->
                        <div data-filter-item="web"
                            data-framer-motion='{"initial": {"opacity": 0, "scale": 0.9}, "whileInView": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": 0.3}, "viewport": {"once": true}'
                            class="group">
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
                                <div class="relative h-60 overflow-hidden">
                                    <img src="img/tic .png" alt="FitTrack"
                                        class="w-100 h-100 object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center">
                                        <div
                                            class="p-6 space-x-2 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                                            <a href="https://github.com/kemalmusth/TIC"
                                                class="bg-white text-blue-600 px-4 py-2 rounded-lg shadow-md hover:bg-blue-50">View
                                                Code</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3
                                        class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        Tourist Information Center</h3>
                                    <p class="text-gray-600 mb-4">A project internship for the Department of Culture and
                                        Tourism of Bandung City. This website is still a prototype and can be scaled up to
                                        provide cultural and tourism information about Bandung.</p>
                                    <div class="flex flex-wrap gap-2 font-bold">
                                        <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded-md">Laravel</span>
                                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-md">PHP</span>
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-md">Bootstrap</span>
                                        <span
                                            class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-md">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section with Framer Motion -->
        <section id="contact" class="py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <div data-framer-motion='{"initial": {"opacity": 0, "y": 20}, "whileInView": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5}, "viewport": {"once": true}}'
                    class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Contact Me</h2>
                    <div class="w-24 h-1.5 bg-blue-600 rounded-full mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Feel free to reach out for collaborations or just to chat! I'm always open to new opportunities.
                    </p>
                </div>

                <div class="flex flex-col lg:flex-row gap-10">
                    <!-- Contact Info -->
                    <div class="lg:w-1/3"
                        data-framer-motion='{"initial": {"opacity": 0, "x": -50}, "whileInView": {"opacity": 1, "x": 0}, "transition": {"duration": 0.6, "delay": 0.2}, "viewport": {"once": true}}'>
                        <div class="bg-white rounded-xl shadow-xl p-8 h-full">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Get In Touch</h3>

                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800">Email</h4>
                                        <a href="mailto:kemalmusthafa217@gmail.com"
                                            class="text-blue-600 hover:underline">kemalmusthafa217@gmail.com</a>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800">Location</h4>
                                        <p class="text-gray-600">Indonesia</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800">Phone</h4>
                                        <p class="text-gray-600">+62 812 3456 7890</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10 pt-6 border-t border-gray-200">
                                <h4 class="text-lg font-semibold text-gray-800 mb-4">Social Profiles</h4>
                                <div class="flex space-x-4">
                                    <a href="https://github.com/kemalmusthafa"
                                        class="bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-blue-600 p-3 rounded-full transition-all duration-300">
                                        <i class="fab fa-github text-xl"></i>
                                    </a>
                                    <a href="https://linkedin.com/in/kemalmusthafa"
                                        class="bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-blue-600 p-3 rounded-full transition-all duration-300">
                                        <i class="fab fa-linkedin-in text-xl"></i>
                                    </a>
                                    <a href="https://www.instagram.com/kemalmusthafa"
                                        class="bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-blue-600 p-3 rounded-full transition-all duration-300">
                                        <i class="fab fa-instagram text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:w-2/3"
                        data-framer-motion='{"initial": {"opacity": 0, "x": 50}, "whileInView": {"opacity": 1, "x": 0}, "transition": {"duration": 0.6, "delay": 0.4}, "viewport": {"once": true}}'>
                        <div class="bg-white rounded-xl shadow-xl p-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Send a Message</h3>

                            <form id="contactForm" data-contact-form>
                                <!-- Success Message -->
                                <div data-success-message
                                    class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded hidden">
                                    Your message has been sent successfully! I'll get back to you soon.
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <!-- Name Input -->
                                    <div>
                                        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="name" name="name" data-input="name"
                                                required
                                                class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        </div>
                                        <p data-error="name" class="text-red-600 text-sm mt-1 hidden"></p>
                                    </div>

                                    <!-- Email Input -->
                                    <div>
                                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                </svg>
                                            </div>
                                            <input type="email" id="email" name="email" data-input="email"
                                                required
                                                class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        </div>
                                        <p data-error="email" class="text-red-600 text-sm mt-1 hidden"></p>
                                    </div>
                                </div>

                                <!-- Subject Input -->
                                <div class="mb-6">
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="subject" name="subject" data-input="subject"
                                            required
                                            class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    </div>
                                    <p data-error="subject" class="text-red-600 text-sm mt-1 hidden"></p>
                                </div>

                                <!-- Message Input -->
                                <div class="mb-6">
                                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                    <textarea id="message" name="message" rows="5" data-input="message" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"></textarea>
                                    <p data-error="message" class="text-red-600 text-sm mt-1 hidden"></p>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit"
                                    data-framer-motion='{"whileHover": {"scale": 1.02}, "whileTap": {"scale": 0.98}}'
                                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium shadow-md hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <span class="flex items-center justify-center">
                                        <span>Send Message</span>
                                    </span>
                                </button>

                                <!-- Loading Indicator -->
                                <div data-loading class="w-full py-3 flex items-center justify-center hidden">
                                    <svg class="animate-spin h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    <span class="ml-2 text-gray-700">Sending message...</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <!-- Framer Motion -->
    <script src="https://cdn.jsdelivr.net/npm/framer-motion@10.12.16/dist/framer-motion.min.js"></script>

    <script>
        // This file should be included in your project to handle the animations
        // Add this to the end of your scripts section

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations when DOM is fully loaded
            initAnimations();

            // Initialize particles.js
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: 0.5,
                            random: false
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#ffffff",
                            opacity: 0.4,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 2,
                            direction: "none",
                            random: false,
                            straight: false,
                            out_mode: "out",
                            bounce: false
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "repulse"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            },
                            resize: true
                        },
                        modes: {
                            repulse: {
                                distance: 100,
                                duration: 0.4
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            }

            // Initialize text carousel in hero section
            initTextCarousel();

            // Initialize skills tabs
            initSkillsTabs();

            // Initialize projects filter
            initProjectsFilter();

            // Initialize contact form
            initContactForm();
        });

        function initAnimations() {
            // Helper function to parse JSON from data attributes
            function parseJSON(element, attribute) {
                try {
                    return JSON.parse(element.getAttribute(attribute));
                } catch (e) {
                    console.error('Error parsing JSON:', e);
                    return null;
                }
            }

            // Handle initial animations
            document.querySelectorAll('[data-framer-motion]').forEach(element => {
                const config = parseJSON(element, 'data-framer-motion');
                if (!config) return;

                // Apply initial state
                if (config.initial) {
                    Object.entries(config.initial).forEach(([property, value]) => {
                        applyStyleProperty(element, property, value);
                    });
                }

                // Check if the element should be animated when in viewport
                if (config.whileInView) {
                    createIntersectionObserver(element, config);
                } else if (config.animate) {
                    // Apply animation immediately
                    setTimeout(() => {
                        animateElement(element, config.animate, config.transition || {});
                    }, (config.transition?.delay || 0) * 1000);
                }

                // Handle hover animations
                if (config.whileHover) {
                    element.addEventListener('mouseenter', () => {
                        Object.entries(config.whileHover).forEach(([property, value]) => {
                            applyStyleProperty(element, property, value);
                        });
                    });

                    element.addEventListener('mouseleave', () => {
                        // Reset to animated state or initial state
                        const resetState = config.animate || config.initial || {};
                        Object.entries(resetState).forEach(([property, value]) => {
                            applyStyleProperty(element, property, value);
                        });
                    });
                }

                // Handle tap/click animations
                if (config.whileTap) {
                    element.addEventListener('mousedown', () => {
                        Object.entries(config.whileTap).forEach(([property, value]) => {
                            applyStyleProperty(element, property, value);
                        });
                    });

                    element.addEventListener('mouseup', () => {
                        // Reset to animated state or initial state
                        const resetState = config.animate || config.initial || {};
                        Object.entries(resetState).forEach(([property, value]) => {
                            applyStyleProperty(element, property, value);
                        });
                    });
                }
            });
        }

        function createIntersectionObserver(element, config) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateElement(element, config.whileInView, config.transition || {});

                        // Disconnect observer if once is true
                        if (config.viewport?.once) {
                            observer.disconnect();
                        }
                    } else if (!config.viewport?.once) {
                        // Reset to initial state when out of view if not once
                        if (config.initial) {
                            Object.entries(config.initial).forEach(([property, value]) => {
                                applyStyleProperty(element, property, value);
                            });
                        }
                    }
                });
            }, {
                threshold: 0.1
            });

            observer.observe(element);
        }

        function animateElement(element, properties, transition) {
            const duration = transition.duration || 0.3;
            const delay = transition.delay || 0;

            // Set transition property on element
            element.style.transition = `all ${duration}s ease ${delay}s`;

            // Apply each property from the animation
            setTimeout(() => {
                Object.entries(properties).forEach(([property, value]) => {
                    applyStyleProperty(element, property, value);
                });

                // Handle sequences or custom properties
                handleSpecialAnimations(element, properties, transition);
            }, delay * 1000);
        }

        function handleSpecialAnimations(element, properties, transition) {
            // Handle text carousel properties (opacity arrays)
            if (properties.opacity && Array.isArray(properties.opacity)) {
                const steps = properties.opacity;
                const stepDuration = transition.duration / steps.length;

                let currentStep = 0;
                const interval = setInterval(() => {
                    currentStep++;
                    if (currentStep >= steps.length) {
                        clearInterval(interval);

                        // Reset for repeat if specified
                        if (transition.repeat === "Infinity" || transition.repeat > 0) {
                            setTimeout(() => {
                                // Reset to initial for next animation
                                applyStyleProperty(element, 'opacity', properties.opacity[0]);
                                applyStyleProperty(element, 'transform',
                                    `translateY(${properties.y?.[0] || 0}px)`);

                                // Start next animation cycle after repeatDelay
                                setTimeout(() => {
                                    handleSpecialAnimations(element, properties, transition);
                                }, (transition.repeatDelay || 1) * 1000);
                            }, stepDuration * 1000);
                        }
                    } else {
                        // Update to next step
                        applyStyleProperty(element, 'opacity', steps[currentStep]);
                        if (properties.y && Array.isArray(properties.y)) {
                            applyStyleProperty(element, 'transform', `translateY(${properties.y[currentStep]}px)`);
                        }
                    }
                }, stepDuration * 1000);
            }
        }

        function applyStyleProperty(element, property, value) {
            switch (property) {
                case 'x':
                    element.style.transform = `translateX(${value}px)`;
                    break;
                case 'y':
                    element.style.transform = `translateY(${value}px)`;
                    break;
                case 'scale':
                    element.style.transform = `scale(${value})`;
                    break;
                case 'rotate':
                    element.style.transform = `rotate(${value}deg)`;
                    break;
                case 'opacity':
                    element.style.opacity = value;
                    break;
                default:
                    // For other CSS properties
                    const cssProperty = property.replace(/([A-Z])/g, '-$1').toLowerCase();
                    element.style[cssProperty] = value;
            }
        }

        function initTextCarousel() {
            // Text carousel is already handled by the animation system above
            // but we can ensure proper positioning
            const carousel = document.getElementById('textCarousel');
            if (carousel) {
                const items = carousel.querySelectorAll('span');
                items.forEach(item => {
                    item.style.position = 'absolute';
                    item.style.left = '0';
                    item.style.right = '0';
                });
            }
        }

        function initSkillsTabs() {
            const tabsContainer = document.querySelector('[data-skills-tabs]');
            if (!tabsContainer) return;

            const tabs = tabsContainer.querySelectorAll('[data-tab]');
            const contents = tabsContainer.querySelectorAll('[data-tab-content]');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.getAttribute('data-tab');

                    // Update active tab styling
                    tabs.forEach(t => {
                        if (t.getAttribute('data-tab') === target) {
                            t.classList.add('bg-blue-600', 'text-white');
                            t.classList.remove('text-gray-700');
                        } else {
                            t.classList.remove('bg-blue-600', 'text-white');
                            t.classList.add('text-gray-700');
                        }
                    });

                    // Show correct content
                    contents.forEach(content => {
                        if (content.getAttribute('data-tab-content') === target) {
                            content.classList.remove('hidden');
                            content.classList.add('block');
                        } else {
                            content.classList.add('hidden');
                            content.classList.remove('block');
                        }
                    });
                });
            });
        }

        function initProjectsFilter() {
            const filterContainer = document.querySelector('[data-projects-filter]');
            if (!filterContainer) return;

            const filterButtons = filterContainer.querySelectorAll('[data-filter]');
            const filterItems = document.querySelectorAll('[data-filter-item]');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.getAttribute('data-filter');

                    // Update active button styling
                    filterButtons.forEach(btn => {
                        if (btn === button) {
                            btn.classList.add('bg-blue-600', 'text-white', 'shadow-md');
                            btn.classList.remove('bg-gray-100', 'text-gray-700', 'shadow-sm');
                        } else {
                            btn.classList.remove('bg-blue-600', 'text-white', 'shadow-md');
                            btn.classList.add('bg-gray-100', 'text-gray-700', 'shadow-sm');
                        }
                    });

                    // Filter items
                    filterItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-filter-item') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        }

        function initContactForm() {
            const form = document.querySelector('[data-contact-form]');
            if (!form) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form elements
                const nameInput = form.querySelector('[data-input="name"]');
                const emailInput = form.querySelector('[data-input="email"]');
                const subjectInput = form.querySelector('[data-input="subject"]');
                const messageInput = form.querySelector('[data-input="message"]');
                const loadingIndicator = form.querySelector('[data-loading]');
                const successMessage = form.querySelector('[data-success-message]');

                // Simple validation
                let isValid = true;

                if (!nameInput.value.trim()) {
                    showError(nameInput, 'Please enter your name');
                    isValid = false;
                } else {
                    hideError(nameInput);
                }

                if (!emailInput.value.trim()) {
                    showError(emailInput, 'Please enter your email');
                    isValid = false;
                } else if (!isValidEmail(emailInput.value)) {
                    showError(emailInput, 'Please enter a valid email address');
                    isValid = false;
                } else {
                    hideError(emailInput);
                }

                if (!subjectInput.value.trim()) {
                    showError(subjectInput, 'Please enter a subject');
                    isValid = false;
                } else {
                    hideError(subjectInput);
                }

                if (!messageInput.value.trim()) {
                    showError(messageInput, 'Please enter your message');
                    isValid = false;
                } else {
                    hideError(messageInput);
                }

                if (isValid) {
                    // Show loading indicator
                    loadingIndicator.classList.remove('hidden');

                    // Simulate form submission
                    setTimeout(() => {
                        // Hide loading indicator
                        loadingIndicator.classList.add('hidden');

                        // Show success message
                        successMessage.classList.remove('hidden');

                        // Reset form
                        form.reset();

                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            successMessage.classList.add('hidden');
                        }, 5000);
                    }, 1500);
                }
            });

            function showError(input, message) {
                const errorElement = document.querySelector(`[data-error="${input.getAttribute('data-input')}"]`);
                if (errorElement) {
                    errorElement.textContent = message;
                    errorElement.classList.remove('hidden');
                    input.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                }
            }

            function hideError(input) {
                const errorElement = document.querySelector(`[data-error="${input.getAttribute('data-input')}"]`);
                if (errorElement) {
                    errorElement.classList.add('hidden');
                    input.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                }
            }

            function isValidEmail(email) {
                const re =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
        }
    </script>
