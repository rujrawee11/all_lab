<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Insert new comment</h1>
        <form action="insert.php" method="post" class="mt-4">
            <div class="form-inline">
                <label for="inputName">Name</label>
                <input type="text" name="name" id="inputName" class="form-control mb-2 mr-sm-2l" placeholder="Enter Name">
            </div>
            <div class="form-inline">
                <label for="inputComment">Comment</label>
                <textarea name="comment" id="inputComment" class="form-control mb-2 mr-sm-2" rows="3" placeholder="Enter Comment"></textarea>
            </div>
            <div class="form-inline">
                <label for="inputLink">Link</label>
                <input type="text" name="link" id="inputLink" class="form-control mb-2 mr-sm-2" placeholder="Enter Link">
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-dark">Submit</button>
                <a role="button" class="btn btn-dark" href="guestbook.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
