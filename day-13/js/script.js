// var newHeadingElement = document.createElement('h1');
// var newParagraphElement = document.createElement('p');
//
// newHeadingElement.innerHTML = 'This is a Heading Element';
// newParagraphElement.innerHTML = 'This is a pargraph element';
//
// document.getElementById('div').appendChild(newHeadingElement);
// document.getElementById('div').appendChild(newParagraphElement);

var btnElement = document.getElementById('btn');
btnElement.onclick = function(){
    var newHeadingElement = document.createElement('h1');
    var newParagraphElement = document.createElement('p');

    newHeadingElement.innerHTML = 'This is a Heading Element';
    newParagraphElement.innerHTML = 'This is a pargraph element';

    document.getElementById('div').appendChild(newHeadingElement);
    document.getElementById('div').appendChild(newParagraphElement);
}
// var headingElement = document.getElementById('h1')
//
// headingElement.onclick = function () {
//     headingElement.style.color = 'red';
// }

$('#h1').click(css('color', 'red'));
