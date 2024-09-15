@include('layouts.header')

<div class="container">
    <h2>Create Post</h2>
    <form>
        <div class="mb-3">
            <label for="postTitle" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="postTitle" placeholder="Enter the title of your post">
        </div>
        <div class="mb-3">
            <label for="chatGptPrompt" class="form-label">ChatGpt Prompt</label>
            <textarea class="form-control" id="chatGptPrompt" rows="2" placeholder="Enter ChatGPT prompt"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Execute prompt</button>
        <div class="alert alert-danger mt-2" style="display: none;">Unexpected error, try again!</div>
        <div class="mb-3">
            <label for="postContent" class="form-label">Post Content</label>
            <textarea id="postContent"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Post</button>
    </form>
</div>
@include('layouts.footer')
