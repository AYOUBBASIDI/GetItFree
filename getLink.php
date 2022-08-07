<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="link.css">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="./assets/littlelogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <meta name="description" content="Here you will find a lot of games for free with a direct link (Mega - Drive - MediaFire ...) and an educational guide that helps you to download your game, we will save you time and effort, no one likes false links">
    <meta name="keywords" content="games, download, telecharger, jeux , free, install, crack">
    <meta name="author" content="Ayoub Basidi">
    <meta name="publisher" content="Ayoub Basidi">
    <title>Get It Free</title>
</head>

<body>
    <nav>
        <div class="logo"><img src="./assets/getfree.png" alt="log get it free">
        </div>
    </nav>

    <div class="container">
        <div class="parent">
            <div class="div1">
                <h1>Click on the button and you will directly go to the download page Enjoy : )</h1>
                <h1><?php echo $_GET["name"] ?></h1>
                <button id="button">GET <span>IT</span> FREE</button>
                <a id="tuto">Watch the Tutoriel</a>
            </div>
            <div class="div2 " id="div2">

            </div>
            <div class="div3"></div>
        </div>
    </div>

    <div class="footer"># Enjoy</div>

</body>


<script>
    const games = [
        {
            id:1,
            name:'Little Nightmares',
            size:'2.51 GB',
            pic:'./assets/little.jpg',
            from:'Mega',
            link:'https://mega.nz/file/teBilZCT#ovUjUDLw2x-MgmUTo7wHltBRxeNKKu-II59rhqo9-Xo',
            tuto:'https://youtu.be/CA-RZCDWWkk',
        },
        {
        id:2,
        name:'Inside',
        size:'1,4 GB',
        pic:'./assets/inside.jpg',
        from:'Drive',
        link:'https://drive.google.com/u/0/uc?id=1aI_qCN2JubSaA9_l8ml_K7-e72jUaXyN&export=download',
        tuto:'https://youtu.be/HcLNCLwRROk',
    },
    {
        id:3,
        name:'Pro evolution soccer 2017',
        size:'4,32 GB',
        pic:'./assets/pes.jpg',
        from:'Mediafire',
        link:'http://www.mediafire.com/file/5jexw1c2xatzx23/PES_LAHCEN.rar/file',
        tuto:'https://youtu.be/Jhjehv9ZpKw',
    },
    {
        id:4,
        name:'Stumble Guys',
        size:'63,98 MB',
        pic:'./assets/stumble.png',
        from:'Mediafire',
        link:'https://www.mediafire.com/file/7m6huku3ootu1ei/Stumble_Guys_0.33.zip/file',
        tuto:'https://youtu.be/ZrdjcJ_U0zo',
    },
    {
        id:5,
        name:'Limbo',
        size:'176.2 MB',
        pic:'./assets/limbo.jpg',
        from:'Mediafire',
        link:'http://www.mediafire.com/file/82zjataopxlgc4t/LIMBO.exe/file',
        tuto:'https://youtu.be/VIDlT0lpPIY',
    },
    {
        id:6,
        name:'Twelve Minutes',
        size:'1.13 GB',
        pic:'./assets/twelve.jpg',
        from:'Mega',
        link:'https://mega.nz/file/jYhxgCLZ#97TatXVsungV0li3dCky405QnCLeY7mBfQIFA8-FOJc',
        tuto:'https://youtu.be/UHOPEI9E_nA',
    },
    {
        id:7,
        name:'Streamer Life Simulator',
        size:'1.81 GB',
        pic:'./assets/sls.jpg',
        from:'Mediafire',
        link:'https://www.mediafire.com/file/gopcznkf6h9broi/Streamer.Life.Simulator_arbgames.com.zip/file-__-_---_-_-_-_-_-_-_-_-_-_-_-__-_--_-_-_-_-_-__-_-_-_-__-',
        tuto:'https://youtu.be/hQNgre1i0fo',
    },

    ];


    function linkFor(index) {
        console.log(index);
        var arr = [];
        arr = games.find(item => {
            console.log(index);
            const where = index;
            return (item.id == where);
        });
        let btn = document.getElementById("button");
        btn.setAttribute("onclick", `getGame("${arr.link}")`);
    }

    function tuto(index){
        var arr = [];
        arr = games.find(item => {
            console.log(index);
            const where = index;
            return (item.id == where);
        });
        let btn = document.getElementById("tuto");
        btn.setAttribute("href", `${arr.tuto}`);
    }




    function getGame(link) {
        window.location.href = link;
    }

    linkFor( <?php echo $_GET['id'] ?> );
    tuto( <?php echo $_GET['id'] ?> );
</script>