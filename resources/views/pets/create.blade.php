<x-layout>
    <div class="mt-10 px-7">
        <p class="text-xl font-semibold leading-tight text-gray-800">
            Pet Details
        </p>
        <form action="/pets" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid w-full grid-cols-1 lg:grid-cols-2 md:grid-cols-1 gap-7 mt-7">
                <div>
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800">
                            Name
                        </p>
                        <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="name"/>
                        <p class="mt-3 text-xs leading-[15px] text-gray-600">
                            What's the name your pet?
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800">
                            Breeds
                        </p>
                        <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="breeds"/>
                        <p class="mt-3 text-xs leading-[15px] text-gray-600">
                            State the breeds in a comma separated list e.g. Labrador, German Shepherd
                        </p>
                    </div>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Species
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="species"/>
                    <p class="mt-3 text-xs leading-3 text-gray-600">
                        Is it a dog? a cat? or an alien?
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Age
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="age"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        How old is your Fur baby?
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Size
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="size"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Describe the body frame e.g. Small, Large
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Image
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" type="file" name="petImg"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Show us how cute your fur baby is!
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Email
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="email"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Contact Email
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Website
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="website"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Link to shelter website, Facebook page or any relevant social network
                    </p>
                </div>
                <div>
                    <p class="text-base font-medium leading-none text-gray-800">
                        Phone
                    </p>
                    <input class="w-full p-3 mt-4 border border-gray-300 rounded outline-none focus:bg-gray-50" name="phone"/>
                    <p class="mt-3 text-xs leading-[15px] text-gray-600">
                        Contact Phone Number
                    </p>
                </div>
            </div>

            <div class="pt-6 border-gray-300 mt-2 px-7">
                <p class="text-base font-semibold leading-4 text-gray-800">
                    Pet Description
                </p>
                <div class="mt-10 border border-gray-300 rounded">
                    <textarea class="resize-none w-full h-[170px] px-4 py-4 text-base outline-none text-slate-600"
                        placeholder="Start typing here ..." name="description"></textarea>
                </div>
            </div>
            <p class="mt-3 text-xs leading-[15px] text-gray-600 px-7">
                Enter pet description for better understanding
            </p>
            <hr class="h-[1px] bg-gray-100 my-14" />
            <div
                class="flex flex-col flex-wrap items-center justify-center w-full px-7 lg:flex-row lg:justify-end md:justify-end gap-x-4 gap-y-4">
                <button
                    class="bg-white border-indigo-700 rounded hover:bg-gray-50 transform duration-300 ease-in-out text-sm font-medium px-6 py-4 text-indigo-700 border lg:max-w-[95px] w-full">
                    <a href="/">Cancel</a>
                </button>
                <button
                    class="bg-indigo-700 rounded hover:bg-indigo-600 transform duration-300 ease-in-out text-sm font-medium px-6 py-4 text-white lg:max-w-[144px] w-full">
                    Add Pet
                </button>
            </div>
        </form>
</x-layout>
