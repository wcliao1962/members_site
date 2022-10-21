<html>
<head>

</head>
<body>
    <form action="{{route('flight.upload')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <input type="text" name="name" >
        </div>
        <div class="mb-2">
            <input type="checkbox" name="check" >
        </div>
        <div class="mb-2">
            <input type="file" name="photo" accept="image/*">
        </div>
        <button class="btn btn-info" type="submit">Save Photo</button>
    </form>
</body>
</html>
