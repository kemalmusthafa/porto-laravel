// This file should be included in your project to handle the animations
// Add this to the end of your scripts section

document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations when DOM is fully loaded
    initAnimations();
    
    // Initialize particles.js
    if (document.getElementById('particles-js')) {
      particlesJS('particles-js', {
        particles: {
          number: { value: 80, density: { enable: true, value_area: 800 } },
          color: { value: "#ffffff" },
          shape: { type: "circle" },
          opacity: { value: 0.5, random: false },
          size: { value: 3, random: true },
          line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.4, width: 1 },
          move: { enable: true, speed: 2, direction: "none", random: false, straight: false, out_mode: "out", bounce: false }
        },
        interactivity: {
          detect_on: "canvas",
          events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" }, resize: true },
          modes: { repulse: { distance: 100, duration: 0.4 }, push: { particles_nb: 4 } }
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
    }, { threshold: 0.1 });
    
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
              applyStyleProperty(element, 'transform', `translateY(${properties.y?.[0] || 0}px)`);
              
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
      const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(String(email).toLowerCase());
    }
  }