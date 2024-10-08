<x-page-layout :title="$title">

    <div class="login-container">
        <div class="menu-img-container hidden md:block">
            <img src="{{ asset('megamenu-img.png') }}" alt="megamenu">
        </div>
        <div class="form-container">

            <h4 class="uppercase text-center mt-4 font-semibold text-blue-700 text-2xl">Login to {{ config('app.name') }}
            </h4>
            <form action="" name="login" method="POST" class="mt-10">

                <div class="my-2 px-3">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" name="email" placeholder="email@domain.com"
                        class="w-full px-2 py-3 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                </div>

                <div class="my-2 px-3">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" name="password" placeholder="********"
                        class="w-full p-2 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                </div>

                <label class="px-3 py-3 float-left flex place-items-center gap-x-1">
                    <input type="checkbox" name="remeber"
                        class=" outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                    <label for="remeber" class="text-sm text-blue-700">remeber me</label>
                </label>

                <div class="px-3 py-3 float-right">
                    <a href="{{ route('user.register') }}" class="text-sm text-blue-700 lowercase underline">Click to
                        register</a>
                </div>




                <div class="mt-6 px-3">
                    <button type="button" class="bg-blue-600 py-3 px-3 rounded-3xl w-full hover:bg-blue-500">Sign
                        In</button>
                </div>
            </form>

        </div>
    </div>


</x-page-layout>
