/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function leer(){
    var frame1 = document.getElementById('blackfriday');
    console.log(frame1);
    console.log(frame1.contentWindow.document);
}
function cambioColor(){
    var frame1 = document.getElementById('blackfriday');
    var letras = frame1.contentWindow.document.getElementsByTagName('h1')[0].style.color = "red";
}

function cargar(){
    var btnRD = document.getElementById('Leer');
    btnRD.addEventListener('click',leer,false);
    var btnC = document.getElementById('color');
    btnC.addEventListener('click',cambioColor,false);
}

window.addEventListener('load',cargar,false)

