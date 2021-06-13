<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <link rel="apple-touch-icon" type="image/png"
        href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type=""
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
        color="#111" />


    <title>CodePen - Abstract Sign Up Form - Day 2 - 100 DAYS - 2020</title>




    <style>
    @import url("https://fonts.googleapis.com/css?family=Fjalla+One&display=swap");

    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg") center center no-repeat;
        background-size: cover;
        width: 100vw;
        height: 100vh;
        display: grid;
        align-items: center;
        justify-items: center;
    }

    .contact-us {
        background: #f8f4e5;
        padding: 50px 100px;
        border: 2px solid black;
        box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
    }

    input {
        display: block;
        width: 100%;
        font-size: 14pt;
        line-height: 28pt;
        font-family: "Fjalla One";
        margin-bottom: 28pt;
        border: none;
        border-bottom: 5px solid black;
        background: #f8f4e5;
        min-width: 250px;
        padding-left: 5px;
        outline: none;
        color: black;
    }

    input:focus {
        border-bottom: 5px solid #ffa580;
    }

    button {
        display: block;
        margin: 0 auto;
        line-height: 28pt;
        padding: 0 20px;
        background: #ffa580;
        letter-spacing: 2px;
        transition: 0.2s all ease-in-out;
        outline: none;
        border: 1px solid black;
        box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px black;
    }

    button:hover {
        background: black;
        color: white;
        border: 1px solid black;
    }

    ::selection {
        background: #ffc8ff;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {
        border-bottom: 5px solid #95a4ff;
        -webkit-text-fill-color: #2A293E;
        -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
        transition: background-color 5000s ease-in-out 0s;
    }
    </style>

    <script>
    window.console = window.console || function(t) {};
    </script>



    <script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
    </script>


</head>

<body translate="no">
    <div class="contact-us">
        <form action="./login/check.php" method="post">
            <input placeholder="Name" type="text" name="name" id="name">
            <input placeholder="Password" type="password" name="password" id="password">
            <button type="submit">SIGN UP</button>
        </form>
    </div>





</body>

</html>