document.addEventListener('DOMContentLoaded', function () {
    const filterItems = document.querySelectorAll('#filter li');
    const portfolioItems = document.querySelectorAll('.em_portitem .col-lg-6');
  
    filterItems.forEach(item => {
      item.addEventListener('click', function () {
        const filterClass = item.getAttribute('data-filter');
  
        // Toggle active class
        filterItems.forEach(li => li.classList.remove('current_menu_item'));
        item.classList.add('current_menu_item');
  
        // Filter the portfolio items based on category
        portfolioItems.forEach(portfolioItem => {
          if (filterClass === '*' || portfolioItem.classList.contains(filterClass.slice(1))) {
            portfolioItem.style.display = 'block';
          } else {
            portfolioItem.style.display = 'none';
          }
        });
      });
    });
  });
  