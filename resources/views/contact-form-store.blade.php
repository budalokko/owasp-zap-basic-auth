<x-layout>

    <div class="flex justify-center pt-8 sm:pt-0">
        <p>Thanks !!</p>
    </div>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6">
            <p>Submitted values:</p>
            <p>Title: {{ $title }}</p>
            <p>Content: {{ $content }}</p>
        </div>
    </div>

</x-layout>
