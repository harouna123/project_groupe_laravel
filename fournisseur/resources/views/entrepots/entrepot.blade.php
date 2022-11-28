<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>formation</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Gestion formation
            </div>
            <div class="card-body">
                <form action="{{route('entrepot.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">description:</label>
                        <input type="text" name="description" id="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">superficie:</label>
                        <input type="number" name="superficie" id="" class="form-control" >
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="valider">
                </form>
            </div>
    </div>
</div>
</body>
</html>
