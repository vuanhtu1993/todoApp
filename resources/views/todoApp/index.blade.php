<html>
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>

</head>

<body>
<div class="background">
<div class="container">
    <div class="col-xs-12 col-sm-10">
        <div class="work">
            <h1>WORKING LIST</h1>
        </div>
        <div class="row">
            <div class="workinglist">
                <ul>
                    <li>
                        <div class="col-xs-9 col-sm-9 " id="worklist">
                            ngay thu nhat lam gi
                        </div>
                        <div class="col-xs-3 col-sm-3" id="delete">
                            <button type="button" class="btn">Delete</button>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    <div class="col-xs-6 col-sm-2">
        <button type="button" class="btn" id="new">New</button>
        <a class="button-upload" href="#" type="button" data-toggle="modal" data-target="#myModal"> + Upload</a>

    </div>

    <div class="inputform">
        <form class="navbar-form navbar-left" action="" method="POST" id="add" role="search">
            <div class="form-group">
                <input type="text" class="form-control" id="form-control" name="input_text"  placeholder="Hay viet 1 cong viec">
            </div>
            <button type="submit" class="btn btn-default">ADD</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
</div>
</body>
</html>