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
        <link href="{{asset('css/create.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('css/side.css')}}" type="text/css" rel="stylesheet">
        <title>category</title>

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
                <a class="dropdown-btn">Manage category
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container">
                    <a href="/admin/category">List category</a>
                    <a href="/admin/category/create">Add category</a>
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
            <h1>Create New category form</h1>
            <form action="/admin/category" method="post" class="input-form">
                {{csrf_field()}}
                <div class="user">
                    <label>Name</label>
                    <div>
                        <input type="text" name="name" class="user-input" placeholder="Name..."></div>
                </div>
                <div class="user">
                    <label>Price</label>
                    <div>
                        <input type="text" class="user-input" name="price" placeholder="Price...">
                    </div>
                </div>
                <div class="user">
                    <label>Category</label>
                    <div>
                        <select name="categoryId" class="user-select">
                            <option value="1">Khai vị</option>
                            <option value="2">Món chính</option>
                            <option value="3">Tráng miệng</option>
                            <option value="4">Ăn vặt</option>
                            <option value="5">Liên hoan</option>
                            <option value="6">Bún phở</option>
                        </select>
                    </div>
                </div>
                <div class="user">
                    <label>Description</label>
                    <div>
                        <input type="text" name="description" class="user-input" placeholder="Description...">
                    </div>
                </div>
                <div class="user">
                    <label>Image</label>
                    <div>
                        <input type="text" name="images" class="user-input" placeholder="Image...">
                    </div>
                </div>
                <div class="user">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <input class="btn btn-primary" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </body>
    <script>
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
</html>