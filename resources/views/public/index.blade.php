@extends('layout.public.main')


@section('content')
@include('public.components.hero')
<section class="bg-[#377B9A] h-[900px] flex flex-col items-center text-white">
    <div class="flex flex-col justify-center items-center w-[800px]  my-14 text-center">
        <h2 class="text-3xl font-bold py-6 ">Introduction</h2>
        <p class=" text-lg">The Demo School Management System (DSMS) is a complete digital solution designed to simplify school operations and
            improve learning outcomes. It connects students, teachers, parents,
            and administrators on a single platform, making communication and management seamless.
            With features like admissions, attendance, exams, fee management,
            and e-learning, DSMS helps schools save time, reduce errors, and focus on quality education. Our aim is to
            empower schools with technology that ensures efficiency, transparency, and holistic student development.</p>
        <img src="{{asset('image/info.png')}}" alt="Info" class="h-[80vh] w-[600px]">
    </div>
    
</section>

<section class="bg-[#113975] h-[900px]">

</section>
@endsection