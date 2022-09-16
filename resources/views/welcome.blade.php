<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with-device-width, initial-scale=1.0">
    <title> Blood Bank </title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="background">
<header>
    <img class="logo" src="logo.png" alt="logo">
    <nav>
        <ul class="nav-links">
            <li><a href="/homepage">HOME</a></li>
            <li><a href="/About">ABOUT</a></li>
            <li><a href="/Contactus">CONTACT US</a></li>
        </ul>
    </nav>
</header>
<div >
    <h2>Blood Bank</h2>

    <div class="Description">
        <div class="Purchase">
            <p>
                Are you in need for blood and looking to purchase?
                We can help you find the hospital that has the blood type you're looking for.<br>
            </p>
            <br>
            <a><button id="bottompage">Purchase</button></a>
        </div>

        <div class="Donate">
            <p>
                You can be someone's hero.
                Donate blood today and help save lives.
                Every Contribution is valued and important.
            </p>
            <br>
            <a href="{{route('donor.create')}}"><button>Donate</button></a>
            <script>
                document.querySelector("#bottompage").addEventListener("click", () => {
                    window.scrollTo(0, document.body.scrollHeight);
                })
            </script>
        </div>

    </div>

    <img class="image"src="hands.jpg" alt="Blood">


</div>

<table id="myTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Blood-type</th>
        <th scope="col">Age</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($donors as $donor)
        <tr>
            <th scope="row">{{$donor->id}}</th>
            <td>{{$donor->name}}</td>
            <td>{{$donor->email}}</td>
            <td>{{$donor->address}}</td>
            <td>{{$donor->phone}}</td>
            <td>{{$donor->bloodtype}}</td>
            <td>{{$donor->age}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
