import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.bundle.min.js'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

    const toggler = document.querySelector(".btn");
    const sidebar = document.querySelector("#sidebar");

    toggler.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
    });

    function closeSidebarOnMobile() {
        if (window.innerWidth <= 768) {
            sidebar.classList.add("collapsed");
        } else {
            sidebar.classList.remove("collapsed");
        }
    }

    window.addEventListener("load", closeSidebarOnMobile);
    window.addEventListener("resize", closeSidebarOnMobile);

