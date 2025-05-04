
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemal Musthafa Rajabi - Portfolio</title>
    <meta name="description" content="Portfolio of Kemal Musthafa Rajabi, Fullstack Web Developer">
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    
    <!-- Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    
    <style>
        .nav-link {
          position: relative;
        }
        
        .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          bottom: -4px;
          left: 0;
          background-color: #8B5CF6;
          transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
          width: 100%;
        }
        
        .button-animated:hover svg {
          transform: translateX(5px);
        }
        
        .logo-letter {
          display: inline-block;
          transition: transform 0.3s ease, color 0.3s ease;
        }
        
        .logo:hover .logo-letter {
          color: #8B5CF6;
        }
        
        .logo:hover .logo-letter:nth-child(1) { transform: translateY(-2px); transition-delay: 0.05s; }
        .logo:hover .logo-letter:nth-child(2) { transform: translateY(-4px); transition-delay: 0.1s; }
        .logo:hover .logo-letter:nth-child(3) { transform: translateY(-6px); transition-delay: 0.15s; }
        .logo:hover .logo-letter:nth-child(4) { transform: translateY(-4px); transition-delay: 0.2s; }
        .logo:hover .logo-letter:nth-child(5) { transform: translateY(-2px); transition-delay: 0.25s; }
      </style>
    </head>
    <body class="bg-white font-sans">
      <nav class="bg-white shadow-lg fixed w-full z-30 transition-all duration-300" 
           x-data="{ isOpen: false, scrolled: false }" 
           @scroll.window="scrolled = window.pageYOffset > 20"
           :class="{ 'shadow-none': !scrolled, 'shadow-lg': scrolled }">
        <div class="max-w-7xl mx-auto px-6" :class="{ 'py-2': scrolled, 'py-4': !scrolled }">
          <div class="flex justify-between items-center">
            <div class="flex items-center">
              <a href="/" class="text-2xl font-bold gap-0 logo group">
                <span class="logo-letter text-blue-600">M</span>
                <span class="logo-letter text-blue-600">S</span>
                <span class="logo-letter text-blue-600">T</span>
                <span class="logo-letter text-blue-600">H</span>
                <span class="logo-letter text-blue-600">.</span>
              </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
              <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-purple-600 focus:outline-none transition-colors duration-200">
                <svg class="h-6 w-6" x-show="!isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg class="h-6 w-6" x-show="isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
            
            <!-- Desktop menu -->
            <div class="hidden md:flex md:items-center md:space-x-8">
              <a href="#about" class="nav-link text-gray-700 hover:text-purple-600 transition-colors duration-200 font-medium">About</a>
              <a href="#skills" class="nav-link text-gray-700 hover:text-purple-600 transition-colors duration-200 font-medium">Skills</a>
              <a href="#projects" class="nav-link text-gray-700 hover:text-purple-600 transition-colors duration-200 font-medium">Projects</a>
              <a href="#contact" class="nav-link text-gray-700 hover:text-purple-600 transition-colors duration-200 font-medium">Contact</a>
              <a href="https://drive.google.com/file/d/1d_8vEnZjvsu3qHfpk4DeYop7JsIe7FU6/view?usp=drive_link" class="ml-4 button-animated bg-gradient-to-r from-purple-600 to-purple-500 hover:from-purple-700 hover:to-purple-600 text-white px-6 py-2 rounded-full font-medium transition-all duration-200 flex items-center shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <span>Resume</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          </div>
          
          <!-- Mobile menu -->
          <div x-show="isOpen" 
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 transform -translate-y-4"
               x-transition:enter-end="opacity-100 transform translate-y-0"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 transform translate-y-0"
               x-transition:leave-end="opacity-0 transform -translate-y-4"
               class="md:hidden bg-transparent border-t mt-2 rounded-lg shadow-lg overflow-hidden">
            <div class="pt-2 pb-4 space-y-1">
              <a href="#about" @click="isOpen = false" class="block px-4 py-3 text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-colors duration-200 font-medium">About</a>
              <a href="#skills" @click="isOpen = false" class="block px-4 py-3 text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-colors duration-200 font-medium">Skills</a>
              <a href="#projects" @click="isOpen = false" class="block px-4 py-3 text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-colors duration-200 font-medium">Projects</a>
              <a href="#contact" @click="isOpen = false" class="block px-4 py-3 text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-colors duration-200 font-medium">Contact</a>
              <div class="px-4 py-3">
                <a href="#" @click="isOpen = false" class="block py-3 bg-gradient-to-r from-purple-600 to-purple-500 hover:from-purple-700 hover:to-purple-600 text-white rounded-lg font-medium text-center shadow-md transition-all duration-200">
                  <span class="flex items-center justify-center">
                    Resume
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-xl font-bold">Kemal Musthafa Rajabi</h3>
                    <p class="text-gray-300 mt-2">Fullstack Web Developer</p>
                </div>
                <div class="flex space-x-4">
                    <a href="https://github.com/kemalmusthafa" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/kemalmusthafa" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/kemalmusthafa" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="text-center mt-8">
                <p>&copy; 2025 Kemal Musthafa Rajabi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js Scripts -->
    @yield('scripts')
</body>
</html>