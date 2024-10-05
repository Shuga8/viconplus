<nav class="navbar flex flex-row items-center place-items-center justify-between px-4 py-3">
    <div class="logo">
        <img src="{{ asset('android-chrome-192x192.png') }}" alt="Vicron Plus" loading="lazy"
            class="w-10 h-10 rounded-full">
    </div>

    <ul class="links hidden md:flex md:flex-row">
        <li class="px-4 py-2 active-nav">
            <a href="">Home</a>
        </li>
        <li class="px-4 py-2">
            <a href="">About</a>
        </li>
        <li class="px-4 py-2">
            <a href="">Contact</a>
        </li>
    </ul>

    <ul class="actions hidden md:flex md:flex-row">
        <li class="px-4 py-2">
            <a href="">Sign in</a>
        </li>
        <li class="px-4 py-2">
            <a href="">Sign up</a>
        </li>
    </ul>

    <div class="flex md:hidden p-2 bg-white bg-opacity-10 rounded-full hover:cursor-pointer"
        onclick="togglePageAsideBar(this)">
        <x-ri-menu-3-fill class="w-3 h-3 text-white" />
    </div>
</nav>

<aside class="aside hidden md:hidden items-center place-content-center">
    <x-ri-close-circle-line class="w-6 h-6 text-red-600 absolute top-10 right-4 cursor-pointer"
        onclick="closePageAside()" />

    <div class="relative flex place-content-center items-center place-items-center w-full h-fit">

        <ul class="links flex flex-col gap-y-3">
            <li class="px-4 py-3 active-nav text-center">
                <a href="">Home</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">About</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">Contact</a>
            </li>

            <li class="px-4 py-3 text-center">
                <a href="">Sign in</a>
            </li>
            <li class="px-4 py-3 text-center">
                <a href="">Sign up</a>
            </li>
        </ul>
    </div>



</aside>
