<header
    id="navbar"
    class="fixed top-0 left-0 w-full z-50 bg-white transition-all duration-300">

    <div class="container mx-auto max-w-7xl px-6">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-4">

                <img
                    src="{{ asset('images/logo/logo-bgn.png') }}"
                    alt="Logo MBG"
                    class="w-12 h-12 object-contain">

                <div>

                    <h1 class="text-2xl font-extrabold text-green-700 leading-none">
                        MBG
                    </h1>

                    <p class="text-sm text-slate-600 mt-1">
                        Information System
                    </p>

                </div>

            </a>

            {{-- Desktop Menu --}}
            <nav class="hidden lg:flex items-center gap-10">

                <a href="#home" class="menu-link">
                    Home
                </a>

                <a href="#program" class="menu-link">
                    Program
                </a>

                <a href="#statistics" class="menu-link">
                    Statistik
                </a>

                <a href="#news" class="menu-link">
                    Berita
                </a>

                <a href="#gallery" class="menu-link">
                    Galeri
                </a>

                <a href="#contact" class="menu-link">
                    Kontak
                </a>

            </nav>

            {{-- Right --}}
            <div class="hidden lg:flex">

                <a
                    href="/admin/login"
                    class="rounded-xl bg-green-600 px-7 py-3 font-semibold text-white transition hover:bg-green-700">

                    Login Admin

                </a>

            </div>

            {{-- Mobile Button --}}
            <button
                id="menuButton"
                class="lg:hidden rounded-lg p-2 hover:bg-slate-100">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>

        </div>

    </div>

    {{-- Mobile Menu --}}
    <div
        id="mobileMenu"
        class="hidden border-t bg-white shadow-lg lg:hidden">

        <div class="flex flex-col">

            <a href="#home" class="mobile-link">
                Home
            </a>

            <a href="#program" class="mobile-link">
                Program
            </a>

            <a href="#statistics" class="mobile-link">
                Statistik
            </a>

            <a href="#news" class="mobile-link">
                Berita
            </a>

            <a href="#gallery" class="mobile-link">
                Galeri
            </a>

            <a href="#contact" class="mobile-link">
                Kontak
            </a>

            <div class="p-4">

                <a
                    href="/admin/login"
                    class="block rounded-xl bg-green-600 py-3 text-center font-semibold text-white hover:bg-green-700">

                    Login Admin

                </a>

            </div>

        </div>

    </div>

</header>

<style>

.menu-link{

    position:relative;
    font-weight:600;
    color:#334155;
    transition:.3s;

}

.menu-link:hover{

    color:#16A34A;

}

.menu-link::after{

    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
    width:0;
    height:2px;
    background:#16A34A;
    transition:.3s;

}

.menu-link:hover::after{

    width:100%;

}

.navbar-scrolled{

    box-shadow:0 10px 25px rgba(15,23,42,.08);

}

.mobile-link{

    padding:16px 24px;
    border-bottom:1px solid #E2E8F0;
    font-weight:600;
    color:#334155;
    transition:.3s;

}

.mobile-link:hover{

    background:#F8FAFC;
    color:#16A34A;

}

</style>

<script>

document.addEventListener('DOMContentLoaded',()=>{

    const navbar=document.getElementById('navbar');
    const menu=document.getElementById('mobileMenu');
    const button=document.getElementById('menuButton');

    window.addEventListener('scroll',()=>{

        if(window.scrollY>20){

            navbar.classList.add('navbar-scrolled');

        }else{

            navbar.classList.remove('navbar-scrolled');

        }

    });

    button.addEventListener('click',()=>{

        menu.classList.toggle('hidden');

    });

});

</script>