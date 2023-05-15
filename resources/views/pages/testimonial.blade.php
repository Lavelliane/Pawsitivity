<x-layout>
    
    <div class="container mx-auto px-4 flex flex-col lg:items-center justify-between lg:flex-row pb-10">
        <div class="mb-14 xl:mb-0">
            <h1 class="text-2xl leading-tight md:text-4xl xl:text-5xl font-semibold leading-10   text-gray-800 xl:w-2/3 pr-16 lg:pr-0">Our fellow Advocates love what we do</h1>
            <p class="mt-4 text-base leading-normal text-gray-600  md:w-2/3 lg:w-3/4 pr-16 lg:pr-0">Over 10,000 pet advocates use our application to reach their message and help every stray find a loving home.</p>
            <button class="hidden md:block w-full sm:w-auto mt-12 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 flex items-start justify-center sm:justify-start px-8 py-4 bg-indigo-700 hover:bg-gray-600 rounded text-base font-medium leading-none text-center text-white">
                <a href="/pets">Adopt a pet</a>
            </button>
        </div> 

        <div role="list" aria-label="Testimonials" class="xl:w-1/2 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6 flex-wrap justify-center items-start">
            <div role="listitem" class="bg-white shadow rounded p-4 xl:p-8">
                <img src="https://cdn.tuk.dev/assets/components/26May-update/quote.png" aria-hidden="true" alt="quote" />
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600">I highly recommend this site to anyone looking to adopt a pet. The selection of animals is amazing and the staff is incredibly knowledgeable and friendly. I couldn't be happier with my new furry family member!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800">Vince Abella</p>
                    </div>
                    <img src="{{asset('storage/assets/vince.jpg')}}" alt="Display Avatar of Anna Smith" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>

            <div role="listitem" class="bg-white shadow rounded p-4 xl:p-8">
                <img src="https://cdn.tuk.dev/assets/components/26May-update/quote.png" aria-hidden="true" alt="quote"/>
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600 ">Adopting my furry friend through this site was the best decision I ever made! The process was so easy and the staff was incredibly helpful. I couldn't imagine my life without my new companion!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800 ">Jeff Bernales</p>
                    </div>
                    <img src="{{asset('storage/assets/jepng2.png')}}" alt="Display avatar of Dany John" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>
            <div role="listitem" class="bg-white  shadow rounded p-4 xl:p-8">
                <img src="https://cdn.tuk.dev/assets/components/26May-update/quote.png" aria-hidden="true" alt="quote"/>
                <div class="pl-4 pt-4 flex items-start justify-between">
                    <div class="mr-6">
                        <p class="xl:text-xl xl:leading-loose text-gray-600 ">I was hesitant about adopting a pet online, but this site made the process so simple and stress-free. I found my perfect match and now have a new best friend by my side!</p>
                        <p class="mt-4 text-base font-semibold leading-none text-gray-800 ">Mark Balili</p>
                    </div>
                    <img src="{{asset('storage/assets/mark.jpg')}}" alt="Display Avatar of Mike Blake" role="img" class="rounded-full h-16 w-16"/>
                </div>
            </div>
            <button class="md:hidden w-full sm:w-auto mt-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 flex items-start justify-center sm:justify-start px-8 py-4 bg-indigo-700 hover:bg-gray-600 rounded text-base font-medium leading-none text-center text-white">Read success stories</button>
        </div>
    </div>
    <x-footer />
</x-layout>