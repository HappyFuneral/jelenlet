
<x-app-layout>
    <!-- component -->
    <div class="min-h-screen p-6 flex items-center justify-center">
        <form action="{{ route('attendanceModels.store') }}" method="POST" enctype="multipart/form-data" class="container max-w-screen-lg mx-auto">
            @csrf
            @method('POST')
            <div>
                <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-300">Jelenlét hozzáadása</h2>
                <p class="text-gray-500 dark:text-gray-200 mb-6">Az oldal reszponzív, próbáld ki!</p>
                <div class="bg-white dark:bg-gray-800 rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">

                        <div class="text-gray-600 dark:text-gray-300">
                            <p class="font-medium text-lg">Jelenlét Adatok</p>
                            <p>Töltsd ki az összes mezőt!</p>
                            <img src="{{asset('storage/lol.webp')}}">
                        </div>

                        <div class="lg:col-span-2 mb-3">

                            <div class="grid gap-4 gap-y-2 text-sm dark:text-gray-300 grid-cols-1 md:grid-cols-5">
                                <label for="docs">Jelenlét</label>
                                <div class="md:col-span-5 mb-3">
                                    <select name="type" class="h-10 border mt-1 rounded px-4 w-full dark:bg-gray-600 bg-gray-50" data-te-select-init>        
                                            <option value="Érkezés">Érkezés</option>
                                            <option value="Távozás">Távozás</option>
                                    </select>
                                 </div>
                            <div class="md:col-span-5">
                                <label for="docs">Miért?</label>
                                <input type="text" name="cause" id="docs" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full dark:bg-gray-600 bg-gray-50" placeholder="Miért kéne neked fizetnünk?">
                            </div>
                           
                            <div class="sm:col-span-3">
                                <label class="block text-sm font-medium leading-6" for="exhibition_date"
                                >Idő</label>
                                <div class="mt-2">
                                    <input datetimepicker id="exhibition_date" name="datetime" class="focus:shadow-soft-primary-outline dark:border-gray-600 dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none date-flatpickr" type="text" placeholder="Válassz időpontot" />

                                </div>

                            </div>
                            <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kész</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

</form>
        </div>


</x-app-layout>
