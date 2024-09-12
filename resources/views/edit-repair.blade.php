<x-layout>
    <x-slot:heading>
        Zmiana Statusu Naprawy Urządzenia: {{ $repair->device }}
    </x-slot:heading>
<form method="post" action="/edit-repair/{{ $repair->id }}">
    @csrf
    @method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="status">status</x-form-label>
          <div class="mt-2">
          <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>w trakcie naprawy</option>
            <option>naprawione</option>
          </select>
            <x-form-error name="status" />
          </div>
        </x-form-field>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">
    <div class="flex items-center gap-x-6">
      <a href="/employee" class="text-sm font-semibold leading-6 text-white">Cancel</a>
      <div>
        <x-form-button>Update</x-form-button>
      </div>
    </div>
  </div>
</form>

</x-layout>
