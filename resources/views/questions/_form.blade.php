@csrf
    <div class="form-group">
        <label for="question-title">Question Title</label>
        <input type="text" name="title" value="{{ old('title', $question->title) }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" />

        @if($errors->has('title'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('title') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="question-body">Explain your question <small>(Add relavent images if necessary)</small></label>
        <textarea name="body" id="question-body" rows="10" class="my-editor form-control {{ $errors->has('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body) }}</textarea>
        @if($errors->has('body'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('body') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-md">{{ $buttonText }} <i class="fa fa-exclamation"></i></button>
    </div>
