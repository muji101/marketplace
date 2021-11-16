    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <script src="https://unpkg.com/shubox@0.2.1/dist/shubox.umd.js"></script>


    {{-- <script>
        let tabsContainer = document.querySelector("#tabs");
    
        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);
    
        tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();
    
            let tabName = this.getAttribute("href");
    
            let tabContents = document.querySelector("#tab-contents");
    
            for (let i = 0; i < tabContents.children.length; i++) {
    
            tabTogglers[i].parentElement.classList.remove();  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");
    
            }
            e.target.parentElement.classList.add();
        });
        });
    
        document.getElementById("default-tab").click();
    </script> --}}

    <script>
        document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
        tab: 0
        });
        
        Alpine.data('accordion', (idx) => ({
        init() {
            this.idx = idx;
        },
        idx: -1,
        handleClick() {
            this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
            return this.$store.accordion.tab === this.idx ? 'rotate-80' : '';
        },
        handleToggle() {
            return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
        }));
    })
</script>
