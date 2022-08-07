<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="./assets/littlelogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="Here you will find a lot of games for free with a direct link (Mega - Drive - MediaFire ...) and an educational guide that helps you to download your game, we will save you time and effort, no one likes false links">
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <meta name="keywords" content="games, download, telecharger, jeux , free, install, crack">
    <meta name="author" content="Ayoub Basidi">
    <meta name="publisher" content="Ayoub Basidi">
    <title>Get It Free</title>
</head>

<body>
    <nav>
        <div class="logo"><img src="./assets/getfree.png">
        </div>
        <div class="important">
            <h1>Important :</h1>
            <p>You get <span>free games</span> and we get paid from ads so don't use <span>adblock</span>, you can click on some ads ; )</p>
        </div>
    </nav>

    <div class="container">
        <div class="parent">
            <div class="div1">
                <div class="search">
                    <input type="text" id="input-search" onchange="search()" placeholder="What are searching for">
                    <a><img src="./assets/search.svg">
                    </a>
                </div>
            </div>
            <div class="div2 " id="div2">
                <div id="games">
                </div>

                <div class="pagin">
                    <nav class="flex flex-row flex-nowrap justify-between md:justify-center items-center" aria-label="Pagination">
                        <a id="1" onclick="ChangePage(1)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300 clicked" href="#" title="Page 1">
              1
          </a>
                        <a id="2" onclick="ChangePage(2)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 2">
              2
          </a>
                        <a id="3" onclick="ChangePage(3)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" aria-current="page" title="Page 3">
              3
          </a>
                        <a id="4" onclick="ChangePage(4)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 4">
              4
          </a>
                        <a id="5" onclick="ChangePage(5)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 5">
              5
          </a>
                        <a id="6" onclick="ChangePage(6)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 6">
              6
          </a>
                        <a id="7" onclick="ChangePage(7)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 7">
              7
          </a>
                        <a id="8" onclick="ChangePage(8)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 8">
              8
          </a>
                        <a id="9" onclick="ChangePage(9)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 9">
              9
          </a>
                        <a id="10" onclick="ChangePage(10)" class="hidden md:flex w-10 h-10 mx-1 justify-center items-center rounded-full border hover:bg-opacity-100  border-gray-200 bg-opacity-60 bg-white text-black hover:border-gray-300" href="#" title="Page 9">
              10
          </a>

                    </nav>
                </div>

            </div>
            <div class="div3"><p>For ADS</p></div>
        </div>
    </div>

    <div class="footer"># Enjoy</div>
    <div class="sorry">The version mobile is coming soon ...</div>
</body>


<script src="App.js">
</script>
