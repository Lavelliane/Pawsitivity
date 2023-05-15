<x-layout>

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pb-10">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-indigo-800 pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600">At Pawsitivity, we believe that every pet
                    deserves a loving home. Our mission is to connect pets in need with caring individuals and families
                    who can provide them with a safe and nurturing environment. We are passionate about animal welfare
                    and strive to make the adoption process as easy and rewarding as possible for both pets and their
                    new owners.
                    <br>
                    <br>
                    We work with local animal shelters, rescue groups, and pet foster networks to bring you a wide
                    selection of pets in need of homes. From lovable puppies and kittens to senior dogs and cats, we
                    have a variety of pets with unique personalities and needs. Our team of experienced adoption
                    counselors is dedicated to helping you find the perfect pet to match your lifestyle and preferences.
                </p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="{{asset('storage/assets/about-large-pic.png')}}" alt="A group of People" />
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-indigo-800 pb-4">Our Story</h1>
                <p class="font-normal text-base leading-6 text-gray-600">At Pawsitivity, we were founded with a
                    simple mission: to make a difference in the lives of pets in need. Our founders, [Founder Names],
                    were animal lovers from a young age and saw firsthand the impact that pet adoption could have on
                    both pets and their new families. They recognized the need for a platform that could connect pets in
                    need with caring individuals and families in a streamlined and user-friendly way.</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{asset('storage/assets/jhury.jpg')}}"
                            alt="Jhury featured Image" />
                        <img class="md:hidden block" src="{{asset('storage/assets/jhury.jpg')}}"
                            alt="Jhury featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">Jhury</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{asset('storage/assets/pj.jpg')}}"
                            alt="PJ featured Image" />
                        <img class="md:hidden block" src="{{asset('storage/assets/pj.jpg')}}"
                            alt="PJ featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">PJ</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{asset('storage/assets/hannah.jpg')}}"
                            alt="Hannah featued Image" />
                        <img class="md:hidden block" src="{{asset('storage/assets/hannah.jpg')}}"
                            alt="Hannah featued Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800  mt-4">Hannah</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{asset('storage/assets/telle.jpg')}}"
                            alt="Krystelle featured image" />
                        <img class="md:hidden block" src="{{asset('storage/assets/telle.jpg')}}"
                            alt="Krystelle featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 mt-4">Telle</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
