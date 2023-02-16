<form action="./src/insert.php" method="post" class="mt-3">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enter Books Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Enter book author</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="author">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Books Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="price">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Write Describe Books</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" />
</form>