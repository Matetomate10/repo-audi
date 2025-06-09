function addNumber(number) {
    var screen = document.getElementById("cuadro");
    var currentNumber = screen.value;
    if (currentNumber.length < 8) {    
        screen.value += number;
    }
}