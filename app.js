const navSlide = () => {
      const burger = document.querySelector('.burger');
      burger.addEventListener('click', () => {
        burger.classList.toggle('.toggle');
        console.log("hello");
      });
    }
navSlide();