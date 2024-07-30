<x-layout>
    <section
        class="relative bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm p-2 mx-2 my-2 flex justify-center flex-col ">

        <h1 class=" font-extrabold uppercase text-gray-500 w-full text-center">Import Students Excel File</h1>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required class="w-full">
            <button type="submit" class="bg-gray-800 text-white p-2 rounded-lg w-full  mt-2">Import</button>
        </form>

    </section>
</x-layout>
