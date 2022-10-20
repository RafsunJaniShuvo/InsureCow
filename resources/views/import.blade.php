<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-bodym d-flex justify-content-between">
                        <div >
                            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="file" class="mb-2">Import CSV file</label>
                            <input type="file" id="file" name="file" class="form-control"> <br>
                            <button class="btn btn-success">Import User Data</button>
                        </form>
                        </div>

                        <div>
                            <a href="{{route('export')}}" class="btn btn-primary">Export User Data </a>
                        </div>
                        
                    </div>
                  </div>
            
            
            </div>
        </div>
    </div>

    
</body>
</html>

