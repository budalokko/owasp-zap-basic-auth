<x-layout>

    <div class="flex justify-center pt-8 sm:pt-0">
        <p>Please submit your comments using the form below</p>
    </div>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6">
            <form method="POST" action="/contact-store">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <br/>
                    <input id="title" name="title" type="text"
                           class="form-control border-t @error('title') is-invalid @enderror" required=""
                           value="{{old('title')}}">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <br/>
                    <textarea id="content" name="content"
                              class="form-control border-t @error('content') is-invalid @enderror" required="" rows="5"
                              cols="80" style="width: 100%">{{old('content')}}</textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</x-layout>
