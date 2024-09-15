@include('layouts.header')

<div class="container">
    <div class="settings-form">
        <h2>Settings</h2>
        <form action="" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="">
            <div class="mb-3">
                <label for="openai-api-key" class="form-label">OpenAI API Key</label>
                <input type="text" id="openAi" class="form-control" name="openai_api_secret" value=""
                    placeholder="Enter OpenAI API Key">
                <p style="color: red">{{ $errors->first('openai_api_secret') }}</p>
            </div>
            <div class="mb-3">
                <label for="model-select" class="form-label">OpenAI Model</label>
                <select class="form-control" id="model-select" name="openai_model">
                    <option value="gpt-3.5-turbo">gpt-3.5-turbo</option>
                    <option value="text-davinci-003">text-davinci-003</option>
                    <option value="gpt-4">gpt-4</option>
                </select>
                <p style="color: red">{{ $errors->first('openai_model') }}</p>
            </div>
            <div class="mb-3">
                <label for="temperature" class="form-label">Temperature</label>
                <input type="number" class="form-control" id="temperature" value="0.11" step="0.01">
            </div>
            <button type="submit" class="btn btn-primary">Save settings</button>
        </form>
    </div>
</div>
@include('layouts.footer')
