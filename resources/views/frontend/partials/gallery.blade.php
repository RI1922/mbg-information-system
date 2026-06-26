@php
$gallery = [
    asset('images/news/news5.png'),
    asset('images/news/news6.png'),
    asset('images/news/news3.png'),
    asset('images/news/news4.png'),
    asset('images/news/news2.png'),
    asset('images/news/news1.png'),
];
@endphp

<section id="gallery" class="scroll-mt-20 py-14 lg:py-10 bg-slate-50">

    <div class="container-custom">


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($gallery as $image)

                <div
                    class="group overflow-hidden rounded-2xl bg-white shadow-md border border-slate-200">

                    <img
                        src="{{ $image }}"
                        alt="Galeri MBG"
                        class="w-full h-72 object-cover transition duration-500 group-hover:scale-110">

                </div>

            @endforeach

        </div>

    </div>

</section>