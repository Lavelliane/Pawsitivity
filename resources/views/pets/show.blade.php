<x-layout>
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto pb-10">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">
            <!-- Jumbotron -->
            <div class="container mx-auto xl:px-32 text-center lg:text-left">
                <div class="grid lg:grid-cols-2 flex items-center">
                    <div class="mb-12 lg:mb-0">
                        <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                            style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                            <h2 class="text-3xl font-bold mb-6">Meet {{ $pet->name }}</h2>
                            <p class="text-gray-500 mb-6 pb-2 lg:pb-0">
                                Hello I'm {{ $pet->name }} and I'm {{ $pet->age }} year/s old. Nice to meet you!
                            </p>

                            <div class="flex flex-col md:flex-row md:justify-around lg:justify-between mb-6 mx-auto">
                                <x-pet-breeds :breedsCsv="$pet->breeds" />
                            </div>

                            <p class="text-gray-500 mb-0">
                                {{ $pet->description }}
                            </p>
                            <p class="font-bold text-gray-600 mt-4">
                                Contact Details for Adoption
                            </p>
                            <ul class="list-disc ml-4">
                                
                                <li>Email: {{ $pet->email }}</li>
                                <li>Website: {{ $pet->website }}</li>
                                <li>Phone: {{ $pet->phone }}</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <img src="{{ $pet->petImg ? asset('storage/' . $pet->petImg) : 'https://images.unsplash.com/photo-1615751072497-5f5169febe17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3V0ZSUyMGRvZ3xlbnwwfHwwfHw%3D&w=1000&q=80' }}"
                            class="w-full rounded-lg shadow-lg" alt="img" />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
</x-layout>
