@include('layouts.header')

<div class="container">
    <h2>Create Post</h2>
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="postTitle" class="form-label">Post Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
            <p style="color:red;">{{ $errors->first('title') }}</p>
        </div>
        <div class="mb-3">
            <label for="gpt PromptBox" class="form-label">ChatGpt Prompt </label>
            <textarea name="gpt_content" id="gptPromptBox" class="form-control" rows="7" cols="30"
                placeholder="Some text...">{{ old('gpt_content') }}</textarea>
            <p><a id="generateArticle" href="#">Execute Prompt</a></p>
        </div>

        <p_id="errorMessage" style="display: none; color: red; font-size: .9rem;"></p>


        <div class="mb-3">
            <label for="postEditor" class="form-label">Post Content</label>
            <textarea name="content" id="postEditor" class="form-control" rows="15" cols="30">{{ old('content') }}</textarea>
            <p style="color:red;">{{ $errors->first('content') }}</p>
        </div>
        <button type="submit" class="btn btn-primary">Save Post</button>
    </form>

</div>
@include('layouts.footer')
