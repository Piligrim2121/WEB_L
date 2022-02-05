<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dbdbdbd</title>
</head>
<body>
<h1>DB</h1>
    <table>
        <thead> 
            <tr>
                <th>name</th>
                <th>email</th>
                <th>img</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>    
                <td>{{$contact->namePost}}</td>

                <td>{{$contact->textPost}}</td>

                <td>{{$contact->imgPost}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <center><h3>Добавить новую услугу</h3></center>
        <form method="POST" enctype="multipart/form-data" action="/add_db">
            @csrf
            <div class="row g-5 mx-5">
                <div class="col-sm-6">
                    <label class="form-label">namePost</label>
                    <input autocomplete="off" type="text" class="form-control" id="namePost" required name="namePost">
                </div>
                <div class="col-sm-6">
                    <label class="form-label">textPost</label>
                    <input autocomplete="off" type="text" class="form-control" id="textPost" required name="textPost">
                </div>
            </div>
            <div class="row g-5 mx-5">
                <div class="col-sm-12">
                    <label class="form-label">imgPost</label>
                    <input autocomplete="off" type="file" class="form-control" id="imgPost" required name="imgPost" accept="image/jpeg,image/png">
                </div>
            </div>
            <br>
            <center>
                <button class="w-50 btn btn-secondary btn-lg" type="submit">Добавить</button>
            </center>
        </form>
</body>
</html>

