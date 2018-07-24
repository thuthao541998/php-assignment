<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/side.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('css/list.css')}}" type="text/css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <header class="main-header">
            <a href="#" class="logo">
            </a>
        </header>
        <div class="sidenav">
            <div class="sidebar-head">
                <div class="sidebar-head-text">
                    <span class="logo-lg">
                        <b>Admin</b>
                    </span>
                </div>
            </div>
            <p style="margin-top: 30px;">Main Navigation</p>
            <div class="sidenav-manage">
                <a class="dropdown-btn">Manage Food
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container">
                    <a href="/admin/food">List Food</a>
                    <a href="/admin/food/create">Add Food</a>
                </div>
            </div>
            <div class="sidenav-manage">
                <a class="dropdown-btn">Manage Category
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container">
                    <a href="/admin/category">List Category</a>
                    <a href="/admin/category/create">Add Category</a>
                </div>
            </div>
            <div class="sidenav-manage">
                <a class="dropdown-btn">Manage Collection
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container">
                    <a href="/admin/collection">List Collection</a>
                    <a href="/admin/collecton/create">Add Collection</a>
                </div>
            </div>
            <div class="sidenav-manage">
                <a class="dropdown-btn">Manage Article
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container">
                    <a href="/admin/article">List Article</a>
                    <a href="/admin/article/create">Add Article</a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="main">
                <h1>
                    List Food
                </h1>
                <table width="100%" class="table table-condensed">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>CategoryId</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($list_obj as $item)
                        <tr>
                            <td>{{$item -> name}}</td>
                            <td>{{$item -> price}}</td>
                            <td>{{$item -> categoryId}}</td>
                            <td>{{$item -> description}}</td>
                            <td><img src="{{$item -> images}}" style="width: 100px"></td>
                            <td class="id">{{$item -> status}}</td>
                            <td><span class="btn-delete" id="{{$item-> id}}">Delete</span></td>
                            <td><a href="/admin/food/{{$item -> id}}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <script>

            var listDeleteButton = document.getElementsByClassName('btn-delete');
            for (var i = 0; i < listDeleteButton.length; i++) {
                listDeleteButton[i].onclick = function () {
                    if (confirm('Are you sure ?')) {
                        var params = '_token={{csrf_token()}}';
                        var currentId = this.id;
                        var xhttp = new XMLHttpRequest();
                        xhttp.open("DELETE", "/admin/article/" + currentId, true);
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                alert('Delete success!');
                                window.location.reload();
                            }
                        };
                        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhttp.send(params);
                    }
                }
            }

            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;
            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }

        </script>
    </body>
</html>