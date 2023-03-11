<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
    </div>
    <button type="submit">Submit</button>
</form>
