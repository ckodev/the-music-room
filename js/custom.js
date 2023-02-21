document.addEventListener("DOMContentLoaded", function() {
    console.log('sup')
    var excerpt = document.querySelector('.custom-excerpt');
    var showText = document.querySelector('.custom-show-text');
    var button = document.querySelector('.read-more-button');

    
    button.onclick = function() {
      if (excerpt.style.display === 'none') {
        excerpt.style.display = 'block';
        showText.style.display = 'none';
        button.innerHTML = '[Read More...]';
        excerpt.scrollIntoView({ behavior: "smooth", offsetTop: 10 });
      } else {
        excerpt.style.display = 'none';
        showText.style.display = 'block';
        button.innerHTML = '[Read Less...]'; 
      }
    };
});
  