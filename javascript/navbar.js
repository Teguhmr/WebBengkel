document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', function(event) {
      // Prevent default navigation for demonstration purposes
      event.preventDefault();
  
      // Remove 'active' class from all other items
      document.querySelectorAll('.nav-item').forEach(nav => {
        nav.classList.remove('active');
        nav.querySelector('.nav-text').style.display = 'none'; // Hide text of other items
      });
  
      // Add 'active' class to the clicked item and show its text
      this.classList.add('active');
      const text = this.querySelector('.nav-text');
      text.style.display = 'inline-block'; // Show the text for the active item
    });
  });