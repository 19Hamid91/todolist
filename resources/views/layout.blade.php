<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @yield('style')
    <style>
        * {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	font-family: "Montserrat", sans-serif;
}
.nav-list {
	background-color: rgb(0, 0, 0);
	margin: 0;
	padding: 1rem 0;
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.nav-items {
	list-style: none;
	margin-right: 2rem;
	color: beige;
}

.nav-items a {
	text-decoration: none;
	color: white;
}

.nav-items:first-child {
	margin-right: auto;
	margin-left: 2rem;
}

.nav-btn {
	font-size: 1rem;
	background: rgb(165, 117, 210);
	border: none;
	outline: none;
	padding: 0.5rem 1rem;
	cursor: pointer;
}

.nav-btn:hover {
	background-color: blueviolet;
	color: beige;
}

.nav-items a:hover {
	color: blueviolet;
}

    </style>
</head>
<body>
    {{-- navbar --}}
        <nav>
            <ul class="nav-list">
                <li class="nav-items"><a href="/"><i class="fa-solid fa-terminal"></i></a></li>
                <li class="nav-items"><a href="/">Home</a></li>
                <li class="nav-items"><a href="/">About</a></li>
                <li class="nav-items"><a href="/">Services</a></li>
                <li class="nav-items"><a href="/">Career</a></li>
                <li class="nav-items"><a href="/">Contact</a></li>
                <li class="nav-items"><button class="nav-btn">Sign In</button></li>
            </ul>
        </nav>
    {{-- end navbar --}}

    {{-- content --}}
        @yield('content')
    {{-- end content --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
</body>
</html>