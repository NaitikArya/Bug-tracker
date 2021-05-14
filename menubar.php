<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css" type="text/css">
 
  <title></title>
</head>
<body>
  <nav>
    <div class="logo">
      <p>bug tracker</p>
    </div>
    <ul class="nav-links">
      <li><a href="project.php">projects</a></li>
      <li><a href="issue.php">issuse</a></li>
      <li><a href="user.php">user</a></li>
      
    </ul>

    <div class="mobile-nav">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <script>

    const navSlide = () => {
      const burger = document.querySelector('.mobile-nav');
      const nav = document.querySelector('.nav-links');
      const navlinks = document.querySelectorAll('.nav-links li');

      burger.addEventListener('click', () => {

        burger.classList.toggle('toggle');
        nav.classList.toggle('nav-active');

        navlinks.forEach((link, index) => {
          if (link.style.animation) {
            link.style.animation = '';
          }
          else{
            link.style.animation = `navlinkfade 0.3s ease forwards  ${index / 7 + 0.5}s`;
          }
          //console.log(index / 7);
        });
        //console.log("hello");
      });
    }
    
    navSlide();

  </script>

</body>
</html>