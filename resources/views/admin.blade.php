<x-layout>
    <x-slot:heading>
        Panel Administratora
    </x-slot:heading>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
        <div class="h-32 rounded-lg bg-gray-800 font-bold text-3xl flex items-center justify-center">
            <a href="admin/admin-employee" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 rounded-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Pracownicy</a>
        </div>
        <div class="h-32 rounded-lg bg-gray-800 font-bold text-3xl flex items-center justify-center">
            <a href="admin/admin-repair" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 rounded-lg px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Naprawiane Urządzenia</a>    
        </div>
    </div>
</x-layout>

