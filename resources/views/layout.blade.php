<html>
<head>
    <title>@yield('title')</title>
    <style>
        footer{color: whitesmoke;background-color: black}
        body{background-color: yellow;}
        h1{text-align: center}
        ul{background-color: white; list-style-type: none;display: flex;flex-direction: row; justify-content: flex-end}
        a{margin: 10px; color:black;text-decoration: none;}
        a:hover{background-color: yellow;}
        li{color: black;align-self: center}
    </style>
</head>
<body>
    <div id="main-menu">
        <ul>
            <a href="#"><img src=""></a>
            <a href="#"><li>Homepage</li></a>
            <a href="#"><li>Voor Imkers</li></a>
            <a href="#"><li>Cursussen</li></a>
            <a href="#"><li>Nieuwsarchief</li></a>
            <a href="#"><li>Artikelen</li></a>
            <a href="#"><li>Imkersvereniging</li></a>
            <a href="#"><li>Contact</li></a>
            <a href="#"><li>Over Ons</li></a>
        </ul>
    </div>

    <div>
        @yield('content')
    </div>
<footer>
    <div>
        @yield('footer')
    </div>
</footer>
</body>
</html>
