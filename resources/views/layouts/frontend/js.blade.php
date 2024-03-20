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

document.querySelector(".header-menu").addEventListener("click", function () {
  document.querySelector(".sidebar").classList.add("active");
});

document
  .querySelector(".sidebar-close-menu")
  .addEventListener("click", function () {
    document.querySelector(".sidebar").classList.remove("active");
  });
  

 $(document).ready(function () {
            $('.custom-btn').click(function () {
                // Get the ID of the current tab
                var currentTabId = $('.tab-pane.active').attr('id');
                var nextTabId = '';

                // Determine the ID of the next tab
                if (currentTabId === 'tender-fee') {
                    nextTabId = 'compliance';
                } else if (currentTabId === 'compliance') {
                    nextTabId = 'submit-offer';
                } else if (currentTabId === 'submit-offer') {
                    // Reset to the first tab if it's the last one
                    nextTabId = 'tender-fee';
                }

                // Switch to the next tab
                $('#myTab a[href="#' + nextTabId + '"]').tab('show');
            });
        });
</script>

<!-- ============script========= -->
<!-- =============jQuery========= -->
<script src="{{ asset('assets-frontend/js/jquery.min.js') }}"></script>
<!-- ===============bootstrap=========== -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/data-table.js') }}"></script>
<!-- =============custom js========= -->
<script src="{{ asset('assets-frontend/js/app.js') }}"></script>
<script src="{{ asset('assets-frontend/js/main.js') }}"></script>
