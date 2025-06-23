@csrf

<label for="">Title</label>
<input class="form-control" type="text" name="title" id="" value="{{ old('title', $category->title) }}">

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" id="" value="{{ old('slug', $category->slug) }}">

<button class="btn btn-success mt-2" type="submit">Send</button>