// script counter
let counters=document.querySelectorAll(".counter");
let sec=document.querySelector('.expertise');//عندما يصل اليه
let started=true;

window.onscroll=function () {
    if (window.scrollY>=sec.offsetTop) {
            if(started){
                        counters.forEach((counters)=>{startcount(counters)});//حتي نمسك العناصر في 4
            }
            started=false;
    }
}
function startcount(ele) { //نمدولها عنصر
    let goal=ele.dataset.num;//تحط الداتا نتاعوا لعيناها في متغير
    let on=setInterval(() => {//دالة الزيادة
        ele.textContent++;
        if (ele.textContent==goal) {//تبقى تزيد اتي تلحق قيمة المتغير لعيناه
            clearInterval(on);//احبس
        }
    }, 1 );
}
// _____________________________________________________________________________
// script slid-founder
let slidTim1=document.querySelectorAll(".Founder");
index1=0;
function next1(){
    if (index1<1) {
        slidTim1[index1].classList.remove("slid-founder");
        index1++;
        slidTim1[index1].classList.add("slid-founder");
    }
}
function preve1(){
    if (index1>0) {
        slidTim1[index1].classList.remove("slid-founder");
        index1=0;
        slidTim1[index1].classList.add("slid-founder");
    }
}

let slidTim2=document.querySelectorAll(".bg");
console.log(slidTim2[0]);
console.log(slidTim2[1]);

index2=0;
function next2(){
    if (index2<1) {
        slidTim2[index2].classList.remove("slidbg");
        index2++;
        slidTim2[index2].classList.add("slidbg");
    }
}
function preve2(){
    if (index2>0) {
        slidTim2[index2].classList.remove("slidbg");
        index2=0;
        slidTim2[index2].classList.add("slidbg");
}
}






