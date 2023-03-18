<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            プロフィール登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <section class="text-gray-600 body-font relative">
                    <form method="post" action="{{ route('contacts.store') }}">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="username" class="leading-7 text-sm text-gray-600">ユーザーネーム</label>
                                  <input type="text" id="username" name="username" value="{{ old('username') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                  <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="age" class="leading-7 text-sm text-gray-600">年齢</label><br>
                                  <select name="age">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('age') ==  1 ? 'selected' : ""}}>0～5歳</option>
                                    <option value="2" {{ old('age') ==  2 ? 'selected' : ""}}>6～9歳</option>
                                    <option value="3" {{ old('age') ==  3 ? 'selected' : ""}}>10～14歳</option>
                                    <option value="4" {{ old('age') ==  4 ? 'selected' : ""}}>15～18歳</option>
                                    <option value="5" {{ old('age') ==  5 ? 'selected' : ""}}>19～22歳</option>
                                    <option value="6" {{ old('age') ==  6 ? 'selected' : ""}}>23～30歳</option>
                                    <option value="7" {{ old('age') ==  7 ? 'selected' : ""}}>31～40歳</option>
                                    <option value="8" {{ old('age') ==  8 ? 'selected' : ""}}>41～50歳</option>
                                    <option value="9" {{ old('age') ==  9 ? 'selected' : ""}}>51～60歳</option>
                                    <option value="10" {{ old('age') ==  10 ? 'selected' : ""}}>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                  <input type="radio" name="gender" value="0" {{ old('gender') ==  0 ? 'checked' : ""}}>男性
                                  <input type="radio" name="gender" value="1" {{ old('gender') ==  1 ? 'checked' : ""}}>女性      
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="pstartage" class="leading-7 text-sm text-gray-600">ピアノ開始年齢</label><br>
                                  <select name="pstartage">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('pstartage') ==  1 ? 'selected' : ""}}>0～5歳</option>
                                    <option value="2" {{ old('pstartage') ==  2 ? 'selected' : ""}}>6～9歳</option>
                                    <option value="3" {{ old('pstartage') ==  3 ? 'selected' : ""}}>10～14歳</option>
                                    <option value="4" {{ old('pstartage') ==  4 ? 'selected' : ""}}>15～18歳</option>
                                    <option value="5" {{ old('pstartage') ==  5 ? 'selected' : ""}}>19～22歳</option>
                                    <option value="6" {{ old('pstartage') ==  6 ? 'selected' : ""}}>23～30歳</option>
                                    <option value="7" {{ old('pstartage') ==  7 ? 'selected' : ""}}>31～40歳</option>
                                    <option value="8" {{ old('pstartage') ==  8 ? 'selected' : ""}}>41～50歳</option>
                                    <option value="9" {{ old('pstartage') ==  9 ? 'selected' : ""}}>51～60歳</option>
                                    <option value="10" {{ old('pstartage') ==  10 ? 'selected' : ""}}>61歳～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="totalhistory" class="leading-7 text-sm text-gray-600">通算演奏歴</label><br>
                                  <select name="totalhistory">image.png
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('totalhistory') ==  1 ? 'selected' : ""}}>～1年</option>
                                    <option value="2" {{ old('totalhistory') ==  2 ? 'selected' : ""}}>1～3年</option>
                                    <option value="3" {{ old('totalhistory') ==  3 ? 'selected' : ""}}>3～5年</option>
                                    <option value="4" {{ old('totalhistory') ==  4 ? 'selected' : ""}}>5～7年</option>
                                    <option value="5" {{ old('totalhistory') ==  5 ? 'selected' : ""}}>7～10年</option>
                                    <option value="6" {{ old('totalhistory') ==  6 ? 'selected' : ""}}>10～15年</option>
                                    <option value="7" {{ old('totalhistory') ==  7 ? 'selected' : ""}}>15～20年</option>
                                    <option value="8" {{ old('totalhistory') ==  8 ? 'selected' : ""}}>20～30年</option>
                                    <option value="9" {{ old('totalhistory') ==  9 ? 'selected' : ""}}>30年～</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="pianohon" class="leading-7 text-sm text-gray-600">ピアノ所持</label><br>
                                  <select name="pianohon">
                                    <option value="">選択してください</option>
                                    <option value="1" {{ old('pianohon') ==  1 ? 'selected' : ""}}>グランドピアノ</option>
                                    <option value="2" {{ old('pianohon') ==  2 ? 'selected' : ""}}>アップライトピアノ</option>
                                    <option value="3" {{ old('pianohon') ==  3 ? 'selected' : ""}}>電子ピアノ</option>
                                    <option value="4" {{ old('pianohon') ==  4 ? 'selected' : ""}}>キーボードその他</option>
                                    <option value="5" {{ old('pianohon') ==  5 ? 'selected' : ""}}>所持なし</option>
                                  </select>        
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">防音室有無</label><br>
                                  <input type="radio" name="soundproofhon" value="0" {{ old('soundproofhon') ==  0 ? 'checked' : ""}}>有
                                  <input type="radio" name="soundproofhon" value="1" {{ old('soundproofhon') ==  1 ? 'checked' : ""}}>無      
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="community" class="leading-7 text-sm text-gray-600">所属コミュニティ</label>
                                  <input type="text" id="community" name="community" value="{{ old('community') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution">注意事項に同意
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                      </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
