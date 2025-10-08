@extends('admin.index')

@section('content')
<div class="min-h-screen bg-gray-100 py-8 px-6">

    <!-- Header -->
    <div class="flex justify-between items-center h-14 border border-gray-300 rounded-lg shadow-md px-4 mb-6 bg-white">
        <h2 class="text-lg font-semibold text-gray-800">All Students</h2>

        <div class="flex items-center gap-x-2 text-black">
            <button type="button"
                class="flex items-center gap-x-2 px-3 py-2 rounded-md bg-gray-200 hover:bg-gray-300 transition btnhe">
                <i class="bi bi-search"></i>
                <span>Search</span>
            </button>
        </div>
    </div>


    <!-- Student Grid -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-6">

        <!-- Student Card Example -->
        @foreach($student as $students)
        <div id="student-{{ $students->id }}"
            class="flex flex-col justify-center items-center border border-gray-300 rounded-xl shadow-lg p-4 bg-white hover:shadow-2xl transition transform hover:-translate-y-1">
            
            <img src="{{ asset('storage/' . $students->photo) }}" alt="Student Image"
                class="rounded-full w-24 h-24 object-cover border-2 border-gray-200 mb-2">

            <span class="text-sm text-gray-500">{{$students->registration}}</span>
            <p class="font-semibold text-gray-800 text-center">{{$students->full_name}}</p>

            <!-- Action Buttons -->
            <div class="flex gap-3 mt-3">
                <a href="#" class="flex items-center justify-center w-8 h-8 bg-blue-500 text-white rounded-full hover:bg-blue-600" title="View">
                    <i class="bi bi-eye"></i>
                </a>
                <a href="{{ route('students.edit', $students->id) }}" class="flex items-center justify-center w-8 h-8 bg-yellow-500 text-white rounded-full hover:bg-yellow-600" title="Edit">
                    <i class="bi bi-pencil"></i>
                </a>
                <a href="#" class="delete-btn flex items-center justify-center w-8 h-8 bg-red-500 text-white rounded-full hover:bg-red-600"
                    data-id="{{ $students->id }}"
                    data-url="{{ route('students.destroy', $students->id) }}" title="Delete">
                    <i class="bi bi-trash"></i>
                </a>
            </div>
        </div>
        @endforeach

        <!-- Add Student Card -->
        <div
            class="flex flex-col justify-center items-center border border-dashed border-gray-400 rounded-xl shadow-inner bg-gray-50 hover:bg-gray-100 transition cursor-pointer p-4">
            <a href="{{ route('addstudent') }}" class="inline-flex flex-col justify-center items-center text-gray-700">
                <i class="bi bi-plus-circle text-3xl mb-2"></i>
                <p class="font-medium">Add Student</p>
            </a>
        </div>

    </div>
</div>

<!-- SweetAlert + AJAX -->
<script>
$('.btnhe').click(function() {
    $('.divsear').toggleClass('hidden');
});

$('.delete-btn').click(function(e) {
    e.preventDefault();

    let id = $(this).data('id');
    let url = $(this).data('url');
    let row = $('#student-' + id);

    Swal.fire({
        title: 'Are you sure?',
        text: "This student will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire('Deleted!', response.message, 'success');
                    row.fadeOut(500, function() { $(this).remove(); });
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                    console.error(xhr.responseText);
                }
            });
        }
    });
});
</script>
@endsection
