<html>
<head>
    <title></title>
    <style>
        h1{text-align: center}
        ul{list-style-type: none;display: flex;flex-direction: row;}
        a{margin: 1vw; color:black;text-decoration: none;}
        li{border: black 1px solid; margin: 10px;}
    </style>
</head>
<body>
    <div id="main-menu">
        <ul>
        <a href="#"><li>Homepage</li></a>
        <a href="#"><li>Voor Imkers</li></a>
        <a href="#"><li>Cursussen
                <ul>
                    <a href="#"><li>Basiscursus</li></a>
                    <a href="#"><li>Bijschooling</li></a>
                    <a href="#"><li>Cursusblog</li></a>
                </ul>
            </li></a>
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
</body>
</html>
