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
//
// $('#h1').click(function(){
//     $('#h1').css({
//         'color': 'red',
//         'font-size': '30px',
//         'background-color': 'black'
//
//     });
// });
$('#h1').click(function(){
    $(this).css({
        'color': 'red',
        'font-size': '30px',
        'background-color': 'black'

    });
});
$('#submitBtn').click(function () {
    var firstName = $('#firstName').val();
    alert(firstName);

})
