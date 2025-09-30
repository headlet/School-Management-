@extends('layout.public.main')

@section('content')
@include('public.components.hero')
<section class="bg-[#377B9A] h-[1100px] flex flex-col items-center text-white">
    <div class="w-[800px]  my-14 text-center">
        <h2 class="text-3xl font-bold py-6 ">Introduction</h2>
        <p class=" text-lg">The Demo School Management System (DSMS) is a complete digital solution designed to simplify school operations and
            improve learning outcomes. It connects students, teachers, parents,
            and administrators on a single platform, making communication and management seamless.
            With features like admissions, attendance, exams, fee management,
            and e-learning, DSMS helps schools save time, reduce errors, and focus on quality education. Our aim is to
            empower schools with technology that ensures efficiency, transparency, and holistic student development.</p>
    </div>

    <div class='grid grid-cols-3 place-items-center w-[1080px] h-[600px]'>

        <div class="grid grid-rows-1 place-items-center w-[380px] gap-y-10 mt-[12px]">

            <div class="flex justify-center items-center gap-x-14 text-center">
                <div class="Info sw-[320px] flex flex-col">
                    <h2 class='text-2xl font-bold'>Completely Free</h2>
                    <p class="w-[320px]">Our school management system is 100% free to use with
                        no hidden charges or limitations.
                        Simply sign up and start managing your school effortlessly.</p>
                </div>
                <i class="fa-solid fa-thumbs-up text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full z-[20] flex-shrink-0"></i>
            </div>

            <div class="flex justify-center items-center gap-x-14 text-center z-[20]">
                <div class="Info sw-[320px] flex flex-col">
                    <h2 class='text-2xl font-bold'>Cloud-Based & Accessible</h2>
                    <p class="w-[320px]">
                        Access your school’s data anytime, anywhere. Being cloud-based, it ensures secure storage,
                        automatic backups, and real-time availability across devices.</p>
                </div>
                <i class="fa-solid fa-cloud text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full flex-shrink-0"></i>
            </div>

            <div class="flex justify-center items-center gap-x-14 text-center z-[20]">
                <div class="Info sw-[320px] flex flex-col">
                    <h2 class='text-2xl font-bold'>Responsive Design</h2>
                    <p class="w-[320px]">

                        Whether you use a mobile, tablet, laptop, or desktop,
                        the system adapts perfectly to all screen sizes with a modern and responsive design.</p>
                </div>
                <i class="fa-solid fa-display text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full flex-shrink-0"></i>
            </div>


        </div>

        <img src="{{asset('image/info.png')}}" alt="info" class="h-[610px] w-[320px]">

        <div class="grid grid-rows-1 place-items-center w-[380px] gap-y-8 mr-32 ">

            <div class="flex justify-center items-center gap-x-14 text-center z-[20]">

                <i class="fas fa-sync-alt text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full flex-shrink-0"></i>

                <div class="Info w-[320px] flex flex-col">

                    <h2 class='text-2xl font-bold'>Regular Updates & Dedicated Support</h2>
                    <p class="w-[322px]">

                        We continuously improve our system with new features and enhancements.
                        Our dedicated team provides free online support to ensure smooth usage 24/7.</p>
                </div>
            </div>
            <div class="Info w-[320px] flex justify-center items-center gap-x-14 text-center z-[20]">

                <i class="fas fa-chart-bar text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full flex-shrink-0"></i>


                <div class="Info w-[320px] flex flex-col">
                    <h2 class='text-2xl font-bold'>Reports & Analytics</h2>
                    <p class="w-[322px]">
                        Get detailed insights through infographics and smart visualizations.
                        Track student performance and results in a clear, easy-to-understand format.</p>
                </div>


            </div>

            <div class="Info w-[320px] flex justify-center items-center gap-x-14 text-center z-[20]">
                <i class="fas fa-cogs text-white text-3xl bg-red-400 w-16 h-16 flex items-center justify-center rounded-full flex-shrink-0"></i>
                <div class="Info w-[322px] flex flex-col">
                    <h2 class='text-2xl font-bold'>Fast, Secure & User-Friendly</h2>
                    <p class="w-[320px]">
                        Built with the latest technology, the system is fast, reliable, and safe.
                        Its simple interface makes it easy for anyone to manage daily school operations efficiently.</p>
                </div>



            </div>
        </div>
    </div>

</section>

<section class="bg-[#113975] h-[900px]">


</section>
@endsection