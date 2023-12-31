<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <style>
        /* CSS */
        body {
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS */
        html {
            font-size: 20px;
            margin: 0;
            background: #0c0207;
        }
        #container {
  margin: 90px auto;
  height: 175px;
  width: 170px;
}

#tail {
  position: absolute;
  margin-left: 40px;
  margin-top: 40px;
  height: 60px;
  width: 80px;
  border: 15px solid #D3B897;
  border-radius: 50px;
  display: inline-block;
  z-index: 0;
}

#tail-mask {
  position: absolute;
  margin-top: 40px;
  margin-left: 100px;
  height: 30px;
  width: 75px;
  background-color: #fff;
  z-index: 0;
}

#tail-end {
  position: absolute;
  margin-top: 63px;
  margin-left: 130px;
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background-color: #D3B897;
  z-index: 1;
}

#body {
  position: relative;
  height: 130px;
  width: 110px;
  background-color: #E9CBA7;
  border-radius: 22px;
  display: inline-block;
  overflow: hide;
  z-index: 1;
}

.ear {
  position: relative;
  margin-top: -20px;
  height: 45px;
  width: 50px;
  background-color: #E9CBA7;
  display: inline-block;
  z-index: 2;
}
  
#ear-left {
  clip-path: polygon(0 0, 0% 100%, 100% 60%);
}

#ear-right {
  margin-left: 6px;
  clip-path: polygon(100% 0, 0% 60%, 100% 100%);
}

.ear-inner {
  position: relative;
  height: 30px;
  width: 50px;
  background-color: #D3B897;
  z-index: 3;
}

#ear-inner-left {
  margin-top: 8px;
  margin-left: 5px;
  clip-path: polygon(0 0, 100% 90%, 0 100%);
}

#ear-inner-right {
  margin-top: 8px;
  margin-left: -4px;
  clip-path: polygon(100% 0%, 100% 100%, 0 90%);
}

#mask {
  position: relative;
  background-color: #E9CBA7;
  margin-top: -29px;
  height: 50px;
  width: 110px;
  border-radius: 50%;
  z-index: 4;
}

#patch {
  position: relative;
  margin-top: -50px;
  z-index: 5;
}

.fur {
  width: 5px;
  background-color: #C0A98B;
  display: inline-block;
}

.fur:first-of-type {
  margin-left: 40%;
  height: 15px;
  float: left;
}

.fur:nth-of-type(2) {
  margin-left: 4px;
  height: 5px;
  float: left;
}

.fur:nth-of-type(3) {
  margin-left: 4px;
  height: 10px;
  float: left;
}


#eyes {
  position: relative;
  margin-top: 30%;
  z-index: 5;
}

.eye {
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background-color: #554D44;
  display: inline-block;
}

#eye-left {
  margin-left: 27%;
}

#eye-right {
  margin-left: 10%;
}

.shine {
  height: 7px;
  width: 7px;
  border-radius: 50%;
  background-color: #fff;
  margin-top: 2px;
  margin-left: 1px;
}

#whisk-left {
  display: inline-block;
}

.whisker {
  height: 3px;
  width: 25px;
  background-color: #D3B897;
  margin-bottom: 6px;
}

#whisk-one {
  transform: rotate(15deg);
}

#whisk-three {
  transform: rotate(-15deg);
}

#nose {
  position: absolute;
  margin-left: 15%;
  height: 17px;
  width: 18px;
  background-color: #554D44;
  clip-path: ellipse(40% 22% at 50% 50%);
  display: inline-block;
  z-index: 6;
}

#whisk-right {
  display: inline-block;
  margin-left: 56px;
}

#whisk-four {
  transform: rotate(-15deg);
}

#whisk-six {
  transform: rotate(15deg);
}

#smile {
  position: relative;
  margin-left: 29%;
  margin-top: -22%;
  z-index: 5;
}

#smile-left-align {
  display: inline-block;
  position: absolute;
}

#smile-left {
  height: 10px;
  width: 20px;
  border-radius: 0 0 10px 10px;
  background-color: #E9CBA7;
  border: 2px solid #554D44;
}

#mask-left {
  margin-top: -58%;
  height: 4px;
  width: 20px;
  background-color: #E9CBA7;
}

#smile-right-align {
  display: inline-block;
  margin-left: 22px;
  position: absolute;
}

#smile-right {
  height: 10px;
  width: 20px;
  border-radius: 0 0 10px 10px;
  background-color: #E9CBA7;
  border: 2px solid #554D44;
}

#mask-right {
  margin-top: -58%;
  height: 4px;
  width: 24px;
  background-color: #E9CBA7;
}

#tongue {
  position: relative;
  margin-top: 7px;
  margin-left: auto;
  margin-right: auto;
  height: 17px;
  width: 15px;
  border-radius: 25px;
  background-color: #FC90A5;
  z-index: 4;
}

#tummy {
  margin-top: 13%;
  margin-left: auto;
  margin-right: auto;
  height: 30px;
  width: 60px;
  border-radius: 50px 50px 0 0;
  background-color: #F4E7D1;
}

#credit {
  position: absolute;
  font-family: sans-serif;
  font-size: 12px;
  color: #B9B9B9;
  margin-top: 70px;
  left: 20px;
}

a,
a:visited {
  text-decoration: none;
  color: #FC90A5;
}

a:focus,
a:hover {
  color: #DC7E91;
}
        /* Animacion edificios */

        @keyframes animar_edificios {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        @-webkit-keyframes animar_edificios {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        @-ms-keyframes animar_edificios {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        @-moz-keyframes animar_edificios {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        #luna {
            width: 6em;
            height: 6em;
            border-radius: 50%;
            box-shadow: 30px 10px 0 #F7F8E0;
            margin-top: 1em;
            margin-left: 50%;
            position: absolute;
            z-index: -19;
        }

        #muro {
            height: 23em;
            width: 100%;
            background: linear-gradient(to bottom, #416663 0%, #0c0207 19%);
            bottom: 0px;
        }

        #gato {
            background: url('https://res.cloudinary.com/pastelitos/image/upload/v1610526571/eva/gatito_pushui.svg');
            height: 297px;
            width: 507.5px;
            margin-top: 2em;
            margin-left: 2em;
            z-index: 10;
            animation: sprite-animation 1.2s steps(16, end) infinite;
        }

        @keyframes sprite-animation {
            from {
                background-position: 0 0;
            }

            to {
                background-position: -8120px 0;
            }
        }
    </style>
</head>

<body>
    <div id="marco">
        <div id="gato"></div>
    </div>

    <!-- JavaScript -->
    <script>
        // Menghilangkan splash screen setelah 3 detik (3000 milidetik)
        setTimeout(function() {
            var splashScreen = document.querySelector('#marco');
            splashScreen.parentNode.removeChild(splashScreen);
            window.location.href = "/index"; // Ganti dengan nama file halaman index Anda jika berbeda
        }, 3000);
    </script>
</body>

</html>
