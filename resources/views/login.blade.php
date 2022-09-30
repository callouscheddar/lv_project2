<x-layout>
    <section class="mt-10 mx-auto w-96 border-2 border-black rounded-xl bg-gradient-to-t from-white to-minionyellow">
        <div class="m-auto p-10">
            <h2 class="text-3xl">Login To Your Account</h2>
            <form class="mt-2" action="">
                <div class="flex sm:flex-auto flex-wrap items-center">
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
                <input type="submit" value="Login"
                    class="border-2 cursor-pointer mt-2 hover:border-androidgreen border-black rounded-xl p-1">
            </form>
            <p class="mt-2 text-center">Don't have an account? <a class="hover:underline"
                    href="/register">Register</a></p>
        </div>
    </section>
</x-layout>