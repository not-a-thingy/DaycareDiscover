
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Review</title>
    
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<script src="https://kit.fontawesome.com/bc8e231302.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style= "margin: left 50;">

        <div class="card" style="width:100%;">
        
            <div class="card" style="width:100%;">
                <div class="card-header">
                    @if (Auth::user()->role == '0')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('parent.view_daycares') }}">Back</a>
                        </span>
                    @endif
                </div>
            </div>
        
            <div class="card-body">
                <h5 class="card-text">Name: {{ $daycare->name }}</h5>
                <h5 class="card-text">Email: {{ $daycare->email }}</h5>
                <h5 class="card-text">Contact: {{ $daycare->contact }}</h5>
                <h5 class="card-text">Address: {{ $daycare->address }}</h5>
                <h5 class="card-text">Facility: {{ $daycare->facilities }}</h5>
                <h5 class="card-text">Rating: {{ $daycare->rating }}</h5>
        
        
            </div>
            <form class="card-footer" method="POST" action="{{ route('parent.add_review') }}">
                @csrf
                @method('POST')
                <input type="hidden" value="{{ Auth::user()->id }}" name="parent_id">
                <input type="hidden" value="{{ $daycare->id }}" name="daycare_id">
                <div class="form-group ">
                    <textarea name="review_comment" id="remember-me" class="w-100" rows="3" 
                    placeholder="Review comment"> Review comment
                    </textarea>
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
</body>
</html>


