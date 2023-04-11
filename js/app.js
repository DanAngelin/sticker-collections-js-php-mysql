class MySticker {
    constructor(need, offer, total) {
        this.need = need,
        this.offer = offer,
        this.total = total
    };

    bar() {
        return Math.round((this.total - this.need.length) * 100 / this.total);
    };
};


//   < ------- Carrefour ------->

// Angry Birds 2
const angryBirds2 = new MySticker(
    need = [ 26, 31 ],
    offer = [ '1(3)', 2, 4, '5(2)', 6, 9, 11, '12(3)', 13, 19, 20, 22, 23, '24(2)', 30, '32(2)' ],
    32
);
document.querySelector('#need_angry_birds_2 p').innerHTML = `<span>Need (${angryBirds2.need.length}) :</span> ${angryBirds2.need.join(", ")}`;
document.querySelector('.progress .bar_angry_birds_2').style.width = `${angryBirds2.bar()}%`;
document.querySelector('.progress .bar_angry_birds_2').innerText = `Complete... ${angryBirds2.bar()}%`
document.querySelector('#offer_angry_birds_2 p').innerHTML = `<span>Offer (${angryBirds2.offer.length}) :</span> ${angryBirds2.offer.join(", ")}`;


//   < ----------- PROFI -------------- >

// Profi WOW Zoo
const profiWowZoo = new MySticker(
    need = [],
    offer = ['3(2)', 6, '7(2)', '9(2)', 10, 11, '15(2)', '16(2)', '17(5)', '19(3)', '21(2)', '22(2)', 23, 24, '27(2)', 28, '29(2)', '30(2)', '34(4)', 35, 36, 37, 38, 42, '44(2)', '48(3)', '49(2)', '50(2)', 51, 52, '54(2)', 55, 56, 58, 60, '61(2)', 62, 63, 64, 65, '66(3)', 67, '68(2)', '69(2)'],
    70
);
document.querySelector('#need_wow_zoo p').innerHTML = `<span>Need (${profiWowZoo.need.length}) :</span> ${profiWowZoo.need.join(", ")}`;
document.querySelector('.progress .bar_wow_zoo').style.width = `${profiWowZoo.bar()}%`;
document.querySelector('.progress .bar_wow_zoo').innerText = `Complete... ${profiWowZoo.bar()}%`
document.querySelector('#offer_wow_zoo p').innerHTML = `<span>Offer (${profiWowZoo.offer.length}) :</span> ${profiWowZoo.offer.join(", ")}`;


// <---------- POMBAR ---------->
const pombarMinions = new MySticker(
    need = [1, 4, 5],
    offer = [2],
    5
);
document.querySelector('#need_pombar_minions p').innerHTML = `<span>Need (${pombarMinions.need.length}) :</span> ${pombarMinions.need.join(", ")}`;
document.querySelector('.progress .bar_pombar_minions').style.width = `${pombarMinions.bar()}%`;
document.querySelector('.progress .bar_pombar_minions').innerText = `Complete... ${pombarMinions.bar()}%`
document.querySelector('#offer_pombar_minions p').innerHTML = `<span>Offer (${pombarMinions.offer.length}) :</span> ${pombarMinions.offer.join(", ")}`;


 function percentageCollection(totalCollections, arrayCollection) {
    return Math.floor((totalCollections - arrayCollection.length) * 100 / totalCollections);
}


 const arrowup = document.querySelector("#arrowup");
        
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    arrowup.style.display = "block";
    } else {
    arrowup.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}