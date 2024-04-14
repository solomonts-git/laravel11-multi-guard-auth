<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        ul {
            list-style-type: none;
            font-size: 20px;
        }

        .side-menu {
            padding: 5px;
            margin: 5px;
            border-radius: 10px;
        }

        .side-menu:hover {
            background-color: cadetblue;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body class="w-100" style="min-height: 100vh">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 10vh">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between" style="width: 95%">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Welcome, <span
                                clas="ms-2 fw-bold">{{ Auth::guard('admin')->user()->name }}</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Setting
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Some Action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-100 d-flex " style="height: 90vh; width: 100vw">
        <div class="w-25 d-flex flex-column bg-light text-dark">
            <ul class="mt-4">
                <li class="side-menu">
                    <a href="#" class="p-3 w-75" aria-current="true">
                        View Admin Users
                    </a>
                </li>
                <li class="side-menu">
                    <a href="#" class="p-3 w-75">Create Admin User</a>
                </li>
                <li class="side-menu">
                    <a href="#" class="p-3 w-75">Update Admin User</a>
                </li>
            </ul>
        </div>
        <div class="w-80 p-5">
            {{ $slot }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
