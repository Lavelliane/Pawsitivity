<x-layout>
    <div class="pt-32 lg:flex items-center relative z-10 container mx-auto pb-10">
        <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
            <img tabindex="0" role="img" aria-label="dogoo" class="mx-auto" alt="doggo"
                src="{{ asset('storage/assets/PAW.png') }}" />
        </div>
        <div role="contentinfo" class="w-full lg:w-2/5 h-full lg:ml-4">
            <p tabindex="0" class="text-indigo-700 uppercase text-2xl mb-4">Adopt a Pet</p>
            <h1 tabindex="0" class="text-indigo-700 text-xl lg:text-6xl font-black mb-8">Love starts with
                adoption</h1>
            <p tabindex="0" class="text-gray-800 font-regular mb-8 ">Welcome to Pawsitivity! We
                believe that every animal deserves a loving home, and our mission is to make the adoption
                process as easy and enjoyable as possible. On our platform, you can browse through photos and
                profiles of adoptable pets in your area, learn about their personalities and histories, and
                connect with local shelters and rescue organizations to start the adoption process.</p>
            <div class="">
                <button role="button" aria-label="live chat"
                    class="focus:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 hover:bg-indigo-600 text-white px-6 py-2 font-semibold rounded focus:outline-none">
                    <a href="/pets">Adopt
                        a Pet</a>
                </button>
            </div>
        </div>

    </div>
</x-layout>
