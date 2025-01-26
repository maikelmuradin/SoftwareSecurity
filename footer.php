<!-- footer.php -->
<footer class="bg-light text-center text-lg-start mt-4">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2025 Mijn Website | Alle rechten voorbehouden
    </div>
</footer>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!--Script om Submenu vast te zetten (blocked) als er op geklikt wordt, 
in principe is deze script niet nodig. Dan werkt alleen de CSS die weer WEL nodig is!!! -->
<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function () {
     var dropdowns = document.querySelectorAll('.dropdown-submenu .dropdown-toggle');

     dropdowns.forEach(function (dropdown) {
       dropdown.addEventListener('click', function (e) {
         e.stopPropagation();
         var submenu = this.nextElementSibling;
         submenu.classList.toggle('show');
       });
     });

     document.addEventListener('click', function () {
       document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (submenu) {
         submenu.classList.remove('show');
       });
     });
   });
 

    
</script>
</html>
