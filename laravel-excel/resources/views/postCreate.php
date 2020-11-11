<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>

<body>
    <form>
        <div>
        <label >User:</label>
            <input type="text" class="form-control" name='user_id' >
        </div>
        <div class="form-group">
            <label >Title:</label>
            <input type="text" class="form-control" name='title' >
        </div>
        <div class="form-group">
            <label >Details:</label>
            <input type="text" class="form-control" name='details' >
        </div>
        <div class="form-group">
            <label >Picture:</label>
            <input type="file" name="picture" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>