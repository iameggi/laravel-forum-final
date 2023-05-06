<aside class="col-span-1 space-y-6 text-gray-600">

    <div class="p-4 space-y-4 bg-white shadow">
        <div>
          
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-green-500 border border-transparent rounded hover:bg-green-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                {{-- <x-heroicon-m-plus /> --}}
                 {{ __('Buat pertanyaan') }}
            </a>
        </div>

       
    </div>

   
    <div class="p-4 space-y-4 bg-white shadow ">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="font-bold uppercase">Kategori</h2>
        </div>

        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center justify-between">
                    Category One
                    <span class="px-2 text-white bg-green-300 rounded">45</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    Category Two
                    <span class="px-2 text-white bg-green-300 rounded">45</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    Category Three
                    <span class="px-2 text-white bg-green-300 rounded">45</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    Category Four
                    <span class="px-2 text-white bg-green-300 rounded">45</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    Category Five
                    <span class="px-2 text-white bg-green-300 rounded">45</span>
                </a>
            </li>
        </ul>
    </div>

   


</aside>
