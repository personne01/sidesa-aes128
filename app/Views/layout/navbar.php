<header x-data="{ open: false }">
    <div class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8 items-center justify-between lg:justify-start">
        <a href="#">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
        </a>
        <div class="flex mr-0 lg:hidden cursor-pointer">
            <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>
        <div :class="{'hidden': !open}" class="bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open"></div>
        <nav class="navigation lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center items-start" :class="{'flex': open, 'hidden': !open}">
            <a href="#">
                <img class="m-0 lg:hidden mb-3" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png" alt="" />
            </a>
            <a class="nav-text text-lg font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active" href="/">Home</a>
            <a class="nav-text text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="about">About Us</a>
            <a class="nav-text text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="contact">Contact</a>
            <div class="flex items-center justify-end w-full lg:hidden mt-3">

                <a href="/login">
                    <button class="text-black font-light py-3 px-8 focus:outline-none">
                        Log In
                    </button>
                </a>
                <button class="btn-try text-white text-lg py-3 px-8 rounded-xl focus:outline-none hover:shadow-lg font-semibold">
                    Petunjuk
                </button>
            </div>
            <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 lg:hidden cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </nav>
        <div class="hidden lg:inline-flex">
            <a href="/login">
                <button class="inline-flex text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none">
                    Log In
                </button>
            </a>
            <button class="btn-try inline-flex text-white text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none hover:shadow-lg font-semibold">
                Petunjuk
            </button>
        </div>
    </div>
</header>