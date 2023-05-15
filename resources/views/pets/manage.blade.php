<x-layout>

    <div class="w-full sm:px-6 pb-10">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-indigo-100 rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 ">
                    My Pets</p>
                <div>
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <a href="/pets/add">
                            <p class="text-sm font-medium leading-none text-white">Add New Pet</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-white  shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr tabindex="0"
                        class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 text-gray-500 ">
                        <th class="font-normal text-left pl-4">Name</th>
                        <th class="font-normal text-left pl-12">Species</th>
                        <th class="font-normal text-left pl-12">Breeds</th>
                        <th class="font-normal text-left pl-20">Actions</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    @foreach ($pets as $pet)
                        <tr tabindex="0"
                            class="focus:outline-none h-20 text-sm leading-none text-gray-800 bg-white  hover:bg-gray-100  border-b border-t border-gray-100  ">
                            <td class="pl-4 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="w-10 h-10">
                                        <img class="w-full h-full"
                                            src="{{ $pet->petImg ? asset('storage/' . $pet->petImg) : 'https://images.unsplash.com/photo-1615751072497-5f5169febe17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3V0ZSUyMGRvZ3xlbnwwfHwwfHw%3D&w=1000&q=80' }}"
                                            alt="UX Design and Visual Strategy" />
                                    </div>
                                    <div class="pl-4">
                                        <p class="font-medium">{{ $pet->name }}</p>
                                        <p class="text-xs leading-3 text-gray-600 pt-2">{{ $pet->age }} Year/s old
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pl-12">
                                <p class="text-sm font-medium leading-none text-gray-800">{{ $pet->species }}</p>

                            </td>
                            <td class="pl-12">
                                <x-pet-breeds :breedsCsv="$pet->breeds" />
                            </td>
                            <td class="pl-20 flex mt-8">
                                <div class="text-indigo-500">
                                    <a href="/pets/{{$pet->id}}/edit" class="hover:cursor-pointer"><i class="fa-solid fa-pencil"></i>
                                        Edit</a>
                                </div>
                                <div class="pl-4 text-red-400">
                                    <form action="/pets/{{$pet->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <a class="hover:cursor-pointer"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-layout>
