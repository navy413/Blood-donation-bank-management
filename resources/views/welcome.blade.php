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
            <li><button  >HOME</button></li>
            <li><button onclick="smoothScroll(document.getElementById('about'))"
                    >ABOUT</button></li>
            <li><button onclick="smoothScroll(document.getElementById('contact'))"
                    > CONTACT US </button> </li>
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
            <a><button  onclick="smoothScroll(document.getElementById('marque'))">Purchase</button></a>
        </div>

        <div class="Donate">
            <p>
                You can be someone's hero.
                Donate blood today and help save lives.
                Every Contribution is valued and important.
            </p>
            <br>
            <br>
            <a href="{{route('donor.create')}}"><button>Donate</button></a>
            <script>


                window.smoothScroll = function(target) {
                    var scrollContainer = target;
                    do { //find scroll container
                        scrollContainer = scrollContainer.parentNode;
                        if (!scrollContainer) return;
                        scrollContainer.scrollTop += 1;
                    } while (scrollContainer.scrollTop == 0);

                    var targetY = 0;
                    do { //find the top of target relatively to the container
                        if (target == scrollContainer) break;
                        targetY += target.offsetTop;
                    } while (target = target.offsetParent);

                    scroll = function(c, a, b, i) {
                        i++; if (i > 30) return;
                        c.scrollTop = a + (b - a) / 30 * i;
                        setTimeout(function(){ scroll(c, a, b, i); }, 20);
                    }
                    // start scrolling
                    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
                }

            </script>

        </div>

    </div>




</div>
<marquee id="marque" class="marque" direction="left">The system has added features such as patient name and contacts, blood booking and even need for a certain blood group is posted on the website to find available donors for a blood emergency.
    The system automatically finds the donor information when there arises any requirement....Be Safe.</marquee>

<table id="myTable">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Blood-Type</th>
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


<div id="about">
    <h2> About Us</h2>
    <br>
    <br>
    <br>
    <br>
    <div class="About">
        <p>
            We created this website to be a center for people who want to buy or donate blood.
            Instead of waiting, you can buy blood with just a click.<br>
            Whenever you want to donate, you can check the places where the blood is needed.
            Our goal is to participate in covering the national needs for blood in transfusion ,and its derivatives of good quality, and to care about its availability for those in need.
            Lastly, to facilitate and encourage the blood donations for those who have the ability to help those who need it.
    </div>
    </p>

</div>



<SECTION class="contact" id="contact">
    <h2>Get in touch </h2>
    <div class="content">
        <p>
            We'd love to hear from you whether you have a question or any complaints about the website.
        </p>
    </div>
    <div class="contactContainer">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"> <i class="material-icons"> location</i>
                </div>
                <div class="txt">
                    <h3>Address</h3>
                    <p>
                        266 Abd El-Salam Aref St. El-Saraya <br> Alexandria <br>
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="icon"> <i class="material-icons"> Phone</i>
                </div>
                <div class="txt">
                    <h3>Phone</h3>
                    <p>
                        035869420
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="material-icons"> Email</i>
                </div>
                <div class="txt">
                    <h3>Email</h3>
                    <p>
                        EGYbloodBank@temporary-mail.eg
                    </p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form>
                <h3> Send us a message</h3>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea required="required"></textarea>
                    <span>Type your message...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Send">
                </div>
            </form>

        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</SECTION>


<img class="image"src="hands.jpg" alt="Blood">
</body>
</html>
