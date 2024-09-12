<x-layout>
    <x-slot:heading>
        Serwis Komputerowy
    </x-slot:heading>
    <section class="bg-gray-900 text-white">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="mx-auto max-w-lg text-center">
            <h2 class="text-3xl font-bold sm:text-2xl">Witamy w Serwisie Komputerowym</h2>

            <p class="mt-4 text-gray-300">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur aliquam doloribus
                nesciunt eos fugiat. Vitae aperiam fugit consequuntur saepe laborum.
            </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div
                class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-white/10 hover:shadow-gray-500/30"
                href="#"
            >
                <img
                src="{{ Vite::asset('resources/images/PC.png') }}"
                class="size-20"></img>

                <h2 class="mt-4 text-xl font-bold text-white">Naprawa Komputerów</h2>

                <p class="mt-1 text-sm text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                distinctio alias voluptatum blanditiis laudantium.
                </p>
            </div>

            <div
                class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-white/10 hover:shadow-gray-500/30"
                href="#"
            >
            <img
                src="{{ Vite::asset('resources/images/laptop.png') }}"
                class="size-20"></img>

                <h2 class="mt-4 text-xl font-bold text-white">Naprawa Laptopów</h2>

                <p class="mt-1 text-sm text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                distinctio alias voluptatum blanditiis laudantium.
                </p>
            </div>

            <div
                class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-white/10 hover:shadow-gray-500/30">
                <img
                src="{{ Vite::asset('resources/images/drukarka.png') }}"
                class="size-20"></img>
                <h2 class="mt-4 text-xl font-bold text-white">Naprawa Peryferii</h2>

                <p class="mt-1 text-sm text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                distinctio alias voluptatum blanditiis laudantium.
                </p>
            </div>
            </div>
        </div>
    </section>
</x-layout>
