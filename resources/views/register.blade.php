<x-layout>
    <section class="mt-10 mx-auto w-96 border-2 border-black rounded-xl bg-gradient-to-t from-white to-minionyellow">
        <div class="m-auto p-10">
            <h2 class="text-3xl">Register an Account</h2>
            <form class="mt-2" action="">
                <div class="flex sm:flex-auto flex-wrap items-center">
                    <label for="username">Email:</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="username" type="text">
                </div>
                <div class="flex mt-2 sm:flex-auto flex-wrap items-center">
                    <label for="username">Username:</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="username" type="text">
                </div>

                <div class="flex mt-2 sm:flex-auto flex-wrap items-center">
                    <label for="password">Password:</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="password" type="password">
                </div>
                <div class="flex mt-2 sm:flex-auto flex-wrap items-center">
                    <label for="password">Password Confirmation:</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="password_confirmation" type="password">
                </div>
                <input type="submit" value="Register"
                    class="border-2 mt-2 hover:border-androidgreen cursor-pointer border-black rounded-xl p-1">
            </form>
            <p class="mt-2 text-center">Aready a user? <a class="hover:underline" href="login.html">Login</a></p>
        </div>
    </section>
</x-layout>