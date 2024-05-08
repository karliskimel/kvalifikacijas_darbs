
let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body'); 
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity'); 

openShopping.addEventListener('click', () => {
    body.classList.add('active'); 
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
       {
        id: 1,
        name: 'Pārnesumkārbas tipa hidrauliskais sūknis 0 510 990 074',
        image: '1.JPG',
        price: 1100,
        info: 'Hidraulisko zobratu sūkņu ieliktņi: MASSEY FERGUSON 6445 (DYNA), 6455, 6460, 6465, 6470, 6475, 6480, 6485, 6490, 6495, 6497, 6499 (PERKINS 6 CYL), 6499 (SISU 74 CTA 6 CYL), 8260, 8270, 8280'
       },
       {
        id: 2,
        name: 'Degvielas filtrs WK 712/2',
        image: '2.JPG',
        price: 10,
        info: 'Degvielas filtrs FENDT FARMER 204 P, 204 PA; FORD TRANSIT 2.4D/3.8D 01.74-'
       },
       {
        id: 3,
        name: 'Eļļas filtrs 1639339M92',
        image: '3.JPG',
        price: 7,
        info: 'Agrifilter 40536 BOSCH 451103101 Case IH 2654408 Coopers Filters Z48 Crosland Filters 307, CR307'
       },
       {
        id: 4,
        name: 'Motoreļļa Mannol 7406 Traktor Superoil 15W-40 60 ltr.',
        image: '4.JPG',
        price: 186,
        info: 'Mannol Traktor Superoil - vissezonas motoreļļa četrtaktu dīzeļdzinējiem. Tā izmantojama automašīnu, transportlīdzekļu un citas tehnikas dzinējiem, kuros paredzēts lietot motoreļļas saskaņā ar norādītajām specifikācijām. Eļļa ir ieteicama dzinējiem ar turbopūti un bez. '
       },
       {
        id: 5,
        name: 'Savilcēji',
        image: '5.PNG',
        price: 2,
        info: 'Savilcējs 2.5x135 mm.(100 gab.)'
       },
       {
        id: 6,
        name: 'Drošinātāju komplekts',
        image: '6.PNG',
        price: 1,
        info: 'Drošinātāju komplekts ATS Standart 10 gab.'
       },
       {
        id: 7,
        name: 'Detaļu attīrītājs Mannol',
        image: '7.PNG',
        price: 2.5,
        info: 'Detaļu attīrītājs Mannol aerosols 500 ml.'
       },
       {
        id: 8,
        name: 'Ātrais starts Mannol',
        image: '8.JPG',
        price: 3.7,
        info: 'Ātrais starts Mannol 9669 450ml'
       },
       {
        id: 9,
        name: 'Rūsas tīrītājs Mannol',
        image: '9.JPG',
        price: 3.3,
        info: 'Rūsas tīrītājs Mannol 9932, aerosols 450 ml.'
       },
       {
        id: 10,
        name: 'sadales vārpsta',
        image: '10.JPG',
        price: 250,
        info: 'Dzinēja sadales vārpsta, Tas paredzēts motoriem ar 5 kameru buksēšanu daļas numurs: zīmogots numurs: E9NN6250BA, F2NN6250AB, 87802140'
       },
       {
        id: 11,
        name: 'KRAVAS A/M AKUMULATORS',
        image: '11.JPG',
        price: 305,
        info: 'C40 12V 240AH 1200A (EN) 518X276X242 3/1'
       },
       {
        id: 12,
        name: 'Uzkares stāvokļa sensors',
        image: '12.PNG',
        price: 196,
        info: 'JOHN DEERE SKU: JDPRO7725 6000-Sērija, 6010-Sērija, 6020-Sērija, 6030-Sērija, 6130R, 6140R, 6145R, 6150M, 6150R'
       },
       {
        id: 13,
        name: 'Aizmugures tilta korpuss 50-2401015-08 OR',
        image: '13.JPG',
        price: 1270.2,
        info: 'BELARUS 1025'
       },
       {
        id: 14,
        name: 'Ātruma sensors 0747600 Amazone',
        image: '14.JPG',
        price: 243.4,
        info: 'Sensors X AMATRON I +'
       },
       {
        id: 15,
        name: 'Izkapts segmenti 41744',
        image: '15.PNG',
        price: 1.2,
        info: 'CLAAS 6mm urb., Radura'
       },
];

let listCards = [];


function initApp(){
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        
        newDiv.innerHTML = `
           <img src="image/${value.image}"/>
           <div class="title">${value.name}</div>
           <div class="price">${value.price.toLocaleString()}</div>
           <button onclick="addToCart(${key})">Pievienot Grozam</button>
        `;
        list.appendChild(newDiv);

        // Add additional information container for each product
        let infoDiv = document.createElement('div');
        infoDiv.classList.add('product-info');
        infoDiv.innerHTML = `
           <p>info: ${value.info}</p>
        `;
        newDiv.appendChild(infoDiv);

        // Add event listener to toggle visibility of product-info
        newDiv.addEventListener('mouseenter', () => {
            // Hide all product-info elements
            document.querySelectorAll('.product-info').forEach(element => {
                element.style.display = 'none';
            });
            // Show product-info for the current product
            infoDiv.style.display = 'block';
        });
    })

}



initApp();

function addToCart(key){
    if(listCards[key] == null){
        listCards[key] = products[key];
        listCards[key].quantity = 1;
    }
    reloadCard();
}


function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    for (let key in listCards) {
        if (listCards.hasOwnProperty(key)) {
            const product = listCards[key];
            totalPrice += product.price * product.quantity;
            count += product.quantity;

            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
               <div><img src="image/${product.image}"/></div>
               <div>${product.name}</div>
               <div>${product.price.toLocaleString()}</div>
               <div>${product.quantity}</div>
               <div>
                   <button onclick="changeQuantity(${key}, ${product.quantity - 1})">-</button>
                   <div class="count">${product.quantity}</div> 
                   <button onclick="changeQuantity(${key}, ${product.quantity + 1})">+</button>
               </div>
            `;
            listCard.appendChild(newDiv);
        }
    }
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}



function changeQuantity(key, quantity) {
    if (quantity <= 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
    }
    reloadCard();
}



