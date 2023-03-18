<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    index<br>
                    <a href="{{ route( 'contacts.create') }}" class="text-blue-500" >プロフィール新規登録</a>
                    <form class="mb-8" method="get" action="{{ route('contacts.index') }}">
                      <input type="text" name="search" placeholder="検索">
                      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">検索</button>
                    </form>

                    <div class="lg:w-4/5 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ユーザ</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">年齢</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ピアノ開始年齢</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">演奏歴</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ピアノ所持</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">防音室所持</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">コミュニティ</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">詳細</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->username }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->age }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->gender }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->pstartage }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->totalhistory }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->pianohon }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->soundproofhon }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->community }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3"><a  class="text-blue-500" href="{{ route('contacts.show', ['id' => $contact->id ] )}}">詳細を見る</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
