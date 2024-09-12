<x-layout>
    <x-slot:heading>
        Panel Administratora - Pracownicy
    </x-slot:heading>
    <x-table>
    <thead>
            <tr>
              <x-th>Imię</x-th>
              <x-th>Nazwisko</x-th>
              <x-th>Email</x-th>
              <x-th>Opcje</x-th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ( $users as $user )
              @if ($user['role'] == 'pracownik')
                <tr>
                    <x-td>{{$user['f_name']}}</x-td>
                    <x-td>{{$user['l_name']}}</x-td>
                    <x-td>{{$user['email']}}</x-td>
                    <x-td>
                    <form method="post" action="{{ url('/admin/admin-employee',$user['id']) }}" id="delete_user">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                        Usuń</button>
                    </form>
                    </x-td>
                </tr>
              @endif
            @endforeach
          </tbody>
    </x-table>
    <div class="flex items-center gap-x-6">
      <div>
        <a href="/admin/add-employee" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
            Dodaj Pracownika</a>
      </div>
    </div>

</x-layout>