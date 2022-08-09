
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
    {
        id:8,
        name:'Food Truck Simulator',
        size:'14.64 GB',
        pic:'./assets/food.jpg',
        from:'Mega',
        link:'https://mega.nz/file/S4ZWHb4D#ychT2C1aXac56umbqKdOg3QjWYZ29dnkMRcxQwGkqRc',
        tuto:'https://youtu.be/X-Ce69PhYM4',
    },
    {
        id:9,
        name:'Builder Simulator',
        size:'997.95 GB',
        pic:'./assets/builder.jpg',
        from:'Mega',
        link:'https://www.mediafire.com/file/437fylqq5271t98/PC_building_simulaor.rar/file',
        tuto:'https://youtu.be/p29EPKitym8',
    },
    {
        id:10,
        name:'Five nights at freddys 1',
        size:'218,95 Mb',
        pic:'./assets/fnaf1.jpg',
        from:'Media Fire',
        link:'http://www.mediafire.com/file/hpud5fxotq8j0o9/Fnaf_1.zip/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    
    {
        id:11,
        name:'The Forest',
        size:'3.91 GB',
        pic:'./assets/forest.jpg',
        from:'Mega',
        link:'https://mega.nz/file/ztYgQbLa#gMVTJ0djlF-t2vzMzspvvv1Qq5kUquFn8E-BfLCOLg8',
        tuto:'https://youtu.be/gDRqaNq2N6k',
    },
    {
        id:12,
        name:'Trader Life Simulator',
        size:'8.67 GB',
        pic:'./assets/trader.jpg',
        from:'Mediafire',
        link:'https://www.mediafire.com/file/1qz7i80h5hqjjjb/Trader.Life.Simulator.v2.5_-_egyclickx.zip/file',
        tuto:'https://youtu.be/6ahSUqOps2w',
    },
    {
        id:13,
        name:'Five nights at freddys 2',
        size:'207,37 Mb',
        pic:'./assets/fnaf2.jpg',
        from:'Media Fire',
        link:'https://www.mediafire.com/file/j5j9udw64295ozo/FNAF_2.exe/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    {
        id:14,
        name:'Green Hell',
        size:'3,70 Gb',
        pic:'./assets/green.jpg',
        from:'mega',
        link:'https://mega.nz/#!yPZBFC7Q!hQJ-hTOUmYQMOEjoXedgZSp1mq4ISM0_qij0OaW_CH8',
        tuto:'https://youtu.be/l3RcHhvr-TI',
    },
    {
        id:15,
        name:'Five nights at freddys 3',
        size:'113,87 Mb',
        pic:'./assets/fnaf3.png',
        from:'Media Fire',
        link:'http://www.mediafire.com/file/g20fqofzs2lgavd/Five_Nights_at_Freddys_3.exe/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    {
        id:16,
        name:'Five Nights at Freddys 4',
        size:'444,8 Mb',
        pic:'./assets/fnaf4.png',
        from:'Media Fire',
        link:'http://www.mediafire.com/file/z9q466x12g43cyh/FiveNightsatFreddys4.exe/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    {
        id:17,
        name:'Project Zomboid',
        size:'2,0 Gb',
        pic:'./assets/project.jpg',
        from:'Drive',
        link:'https://drive.google.com/u/0/uc?id=1f0dDpEXGoTJbNsrlVF1uzh3pgtzQ-9oh&export=download',
        tuto:'https://youtu.be/T9c2oT6qMtE',
    },
    {
        id:18,
        name:'Freddy Fazbears Pizzeria Simulator',
        size:'290,16 Mb',
        pic:'./assets/fnafP.jpg',
        from:'Media Fire',
        link:'http://www.mediafire.com/file/m26vbbzrb22efxh/Pizzeria_Simulator_-_TuWindowsPc.rar/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    {
        id:19,
        name:'Youtubers life OMG',
        size:'643 Mb',
        pic:'./assets/omg.jpg',
        from:'Drive',
        link:'https://drive.google.com/uc?id=1cNz-zzNT4YzRH5-lOiYx82943LTtwdUd&export=download',
        tuto:'https://youtu.be/_AHTxaGPPb4',
    },
    {
        id:20,
        name:'Five Nights at Freddys Sister Location',
        size:'897,64 Mb',
        pic:'./assets/fnafS.png',
        from:'Media Fire',
        link:'https://www.mediafire.com/file/knselrc6h19jvvw/SisterLocation.exe/file',
        tuto:'https://youtu.be/ia8iNce9Cu0',
    },
    {
        id:21,
        name:'Youtubers life 2 ',
        size:'1,03 Gb',
        pic:'./assets/ytb.jpg',
        from:'Media Fire',
        link:'https://www.mediafire.com/file/u434rkcjwufxa9o/Youtubers_Life_2_%255BAghanGaming%255D.7z/file',
        tuto:'https://youtu.be/O66tDvpMB8Y',
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