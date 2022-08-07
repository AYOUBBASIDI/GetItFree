const games=[
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
        pic:'./assets/sls.png',
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
        name:'Trader Life Simulator',
        size:'8.67 GB',
        pic:'./assets/trader.jpg',
        from:'Mediafire',
        link:'https://www.mediafire.com/file/1qz7i80h5hqjjjb/Trader.Life.Simulator.v2.5_-_egyclickx.zip/file',
        tuto:'https://youtu.be/6ahSUqOps2w',
    },
];


const gameDiv=document.getElementById('games');function returnGames(newgames){return"<div id=\"games\">"+newgames.map(item=>`<div class="game"onclick="getLink('${item.id}','${item.name}')"><div class="pic"style="    background: url(${item.pic}), linear-gradient(rgba(0,0,0,4%),rgba(0,0,0,0.5));background-blend-mode: overlay;background-position: center;background-repeat: no-repeat; background-size: cover;"></div><div class="infos"><div class="first line"><h4>Name:</h4><p>${item.name}</p></div><div class="second line"><div class="row"><h4>Size:</h4><p>${item.size}</p></div><div class="row"><h4>Get it From:</h4><p>${item.from}</p></div></div></div></div>`).join('')+"</div>";}
let newgames=[];let page=1;let first=(page-1)*6;let last=page*6;if(last>games.length){last=games.length;}
for(var i=first;i<last;i++)
{newgames.push(games[i]);}
function ChangePage(num){let newgames=[];let page=num;let first=(page-1)*6;let last=page*6;if(last>games.length){last=games.length;}
for(var i=first;i<last;i++)
{newgames.push(games[i]);}
gameDiv.innerHTML=returnGames(newgames);isClick(num);}
function emptyPages(){let size=games.length;let pages=size/6;let allowed=Math.ceil(pages);for(let i=allowed+1;i<=10;i++){let pagination=document.getElementById(i);pagination.classList.add('disable');}}
emptyPages();function isClick(number){let pageNum=document.getElementById(number);let size=games.length;let pages=size/6;let allowed=Math.ceil(pages);for(let i=1;i<=allowed;i++){let pagination=document.getElementById(i);pagination.classList.remove('clicked');}
pageNum.classList.add('clicked');}
function search(){isClick(1);ChangePage(1);if(document.getElementById("input-search").value==""){let newgames=[];let page=1;let first=(page-1)*6;let last=page*6;if(last>games.length){last=games.length;}
for(var i=first;i<last;i++)
{newgames.push(games[i]);}
gameDiv.innerHTML=returnGames(newgames);}else{newgames=games.filter(game=>{let keyword=document.getElementById("input-search").value;const name=game.name.toString().toLowerCase();const searchTerm=keyword.toLowerCase();return(name.includes(searchTerm));});gameDiv.innerHTML=returnGames(newgames);}}
function getLink(id,name){window.location.replace("getLink.php?id="+id+"&name="+name);}
gameDiv.innerHTML=returnGames(newgames);