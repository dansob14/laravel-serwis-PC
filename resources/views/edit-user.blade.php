<x-layout>
    <x-slot:heading>
        Edycja Konta: {{ $user->email }}
    </x-slot:heading>
<form method="post" action="/edit-user/{{ $user->id }}">
    @csrf
    @method('PATCH')

  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="f_name">Imię</x-form-label>
          <div class="mt-2">
            <x-form-input name="f_name" id="f_name" value="{{ $user->f_name }}" />

            <x-form-error name="f_name" />
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="l_name">Nazwisko</x-form-label>
          <div class="mt-2">
            <x-form-input name="l_name" id="l_name" value="{{ $user->l_name }}" />

            <x-form-error name="l_name" />
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input name="email" id="email" value="{{ $user->email }}" />

            <x-form-error name="email" />
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="password">Hasło</x-form-label>
          <div class="mt-2">
            <x-form-input type="password" name="password" id="password" value="{{ $user->password }}" />

            <x-form-error name="password" />
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
