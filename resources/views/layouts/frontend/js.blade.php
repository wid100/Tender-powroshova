<script>
    const header = document.getElementById("home-topbar");

    // Function to add a 'sticky' class to the header when user scrolls down, and remove it when scrolls back up
    function handleScroll2() {
        console.log("Scrolling detected"); // Check if this log appears in the console
        if (window.scrollY > header.offsetTop) {
            header.classList.add("sticky-header");
        } else {
            header.classList.remove("sticky-header");
        }
    }

    // Listen for the scroll event and call handleScroll function
    window.addEventListener("scroll", handleScroll2);
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarLinks = document.querySelectorAll(".sidebar-link a");
        const setActiveLink = () => {
            const currentPath = window.location.pathname;
            sidebarLinks.forEach((link) => {
                const linkPath = link.getAttribute("href");
                if (currentPath === linkPath) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        };
        setActiveLink();
        sidebarLinks.forEach((link) => {
            link.addEventListener("click", () => {
                sidebarLinks.forEach((link) => {
                    link.classList.remove("active");
                });
                link.classList.add("active");
            });
        });
    });
</script>
<script>
     const header = document.getElementById("page-topbar");

 // Function to add a 'sticky' class to the header when user scrolls down, and remove it when scrolls back up
 function handleScroll() {
   if (window.scrollY > header.offsetTop) {
     header.classList.add("sticky-header");
   } else {
     header.classList.remove("sticky-header");
   }
 }
  


 // Listen for the scroll event and call handleScroll function
 window.addEventListener("scroll", handleScroll);
</script>

<!-- ============script========= -->
<!-- =============jQuery========= -->
<script src="{{ asset('assets-frontend/js/jquery.min.js') }}"></script>
<!-- ===============bootstrap=========== -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- =============custom js========= -->
<script src="{{ asset('assets-frontend/js/app.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('assets-frontend/js/main.js') }}"></script>

  <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
 <script src="{{ asset('assets/js/data-table.js') }}"></script>
