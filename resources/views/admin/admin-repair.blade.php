<x-layout>
    <x-slot:heading>
        Panel Administratora - Naprawy
    </x-slot:heading>
    <x-table>
    <thead>
            <tr>
              <x-th>Urządzenie</x-th>
              <x-th>Usterka</x-th>
              <x-th>Imię i Nazwisko</x-th>
              <x-th>Email</x-th>
              <x-th>Adres</x-th>
              <x-th>Status</x-th>
              <x-th>Opcje</x-th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ( $repairs as $repair )
              <tr>
                <x-td>{{$repair['device']}}</x-td>
                <x-td>{{$repair['fault']}}</x-td>
                <x-td>{{$repair['f_name'] . $repair['l_name']}}</x-td>
                <x-td>{{$repair['email']}}</x-td>
                <x-td>{{$repair['adress']}}</x-td>
                <x-td>{{$repair['status']}}</x-td>
                  <x-td>
                    <a href="/admin-edit-repair/{{$repair['id']}}" type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                      Zmień Status</a></br>
                    
                    <form method="post" action="{{ url('/admin/admin-repair',$repair['id']) }}" id="delete_repair">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                      Usuń</button>
                    </form>
                  </x-td>
              </tr>
            @endforeach
          </tbody>
    </x-table>

    <div class="mt-5">
      {{ $repairs->links() }}
    </div>
</x-layout>
