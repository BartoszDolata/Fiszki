var counter = 1;
var btn = document.querySelector(".plus");
var form = document.getElementById('form');
var addInput = function () {
    counter++;
    var input = document.createElement("input");
    var input2 = document.createElement("input");
    input.id = 'input-' + counter;
    input.type = 'text';
    input2.type = 'text';
    input.name = 'pol' + counter;
    input2.name = 'eng' + counter;

    input.placeholder = counter + ' po polsku... ';
    input2.placeholder = counter + ' po angielsku...';
    form.appendChild(input);
    form.appendChild(input2);
};
btn.addEventListener('click', function () {
    addInput();
}.bind(this));