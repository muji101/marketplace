    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>


    <script>
        let tabsContainer1 = document.querySelector("#tabs1");

        let tabTogglers1 = tabsContainer1.querySelectorAll("a");
        console.log(tabTogglers1);

        tabTogglers1.forEach(function(toggler1) {
        toggler1.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName1 = this.getAttribute("href");

            let tabContents1 = document.querySelector("#tab-contents1");

            for (let i = 0; i < tabContents1.children.length; i++) {

            tabTogglers1[i].parentElement.classList.remove("border-red-400", "border-b",  "-mb-px", "opacity-100", "transition", "duration-400");  tabContents1.children[i].classList.remove("hidden");
            if ("#" + tabContents1.children[i].id === tabName1) {
                continue;
            }
            tabContents1.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-red-400", "border-b-4", "-mb-px", "opacity-100", "transition", "duration-400");
        });
        });

        document.getElementById("default-tab1").click();
    </script>
    