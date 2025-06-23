@csrf

<label for="">Title</label>
<input class="form-control" type="text" name="title" id="" value="{{ old('title', $post->title) }}">

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" id="" value="{{ old('slug', $post->slug) }}">

<label for="">Description</label>
<textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>

<label for="">Content</label>
<textarea class="form-control" name="content" id="" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>

<label for="">Posted</label>
<select class="form-control" name="posted" id="">
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Yes</option>    
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>    
</select>        

<label for="">Category</label>
<select class="form-control" name="category_id" id="">
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

@if ( isset($task) && $task == 'edit')
    <label for="">Image</label>
    <input class="form-control" type="file" name="image" id="">
@endif


<button class="btn btn-success mt-2" type="submit">Send</button>