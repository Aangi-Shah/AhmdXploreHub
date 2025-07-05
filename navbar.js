let sidebar = document.querySelector('.sidebar');
        let hammer = document.querySelector('.hammer');

        function handleNavbar() {
            sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
        }