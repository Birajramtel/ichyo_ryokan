<script>
    $(document).ready(function() {
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function() {
          if (window.pageYOffset > 100) {
              nav.classList.add("bg-light", "shadow");
          } else {
              nav.classList.remove("bg-light", "shadow");
          }
      });

      $(".navbar-toggler").click(function() {
          $(".bg_nav").toggleClass("bg-menu");
      });

      window.addEventListener("scroll", function() {
        //   if (window.pageYOffset > 100) {
        //       text_change.classList.add("bg-dark", "shadow");
        //   } else {
        //       text_change.classList.remove("bg-dark", "shadow");
        //   }
        const nav_item = document.querySelectorAll(".nav-link");
            console.log(typeof nav_item)

          nav_item.forEach(element => {
        //     if (window.pageYOffset > 100) {
        //       element.classList.add("text-dark");
        //   } else {
        //       element.classList.remove("text-dark");
        //   }
          });
      });
      $(".navbar-toggler").click(function() {   
          $(".bg_nav").toggleClass("bg-menu");
      });
    })
</script>
  