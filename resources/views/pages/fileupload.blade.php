<form action="/FilesUpload" method="POST">
        @csrf
        <label for="file">File img</label>
    <input type="file" name="img" />
    <br>
    <label for="text">Name</label>
    <input type="text" name="name" />
    <br>
    <label for="text">Price</label>
    <input type="text" name="price" />
    <button type="submit">Submit</button>
</form>