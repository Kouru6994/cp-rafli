const targetNumber = Math.floor(Math.random() * 100) + 1;
let attempts = 0;
let score = 100;

const guessInput = document.getElementById("guessInput");
const guessButton = document.getElementById("guessButton");
const resultMessage = document.getElementById("resultMessage");
const scoreMessage = document.getElementById("scoreMessage");

function checkGuess() {
    const userGuess = parseInt(guessInput.value);
    attempts++;

    if (score <= 0) {
        resultMessage.textContent = `Game over. The number was ${targetNumber}.`;
        guessButton.disabled = true;
        score = 0;
    }
    
    if (userGuess === targetNumber) {
        resultMessage.textContent = `Congratulations! You guessed the number ${targetNumber} in ${attempts} attempts.`;
        guessButton.disabled = true;
    } else if (userGuess < targetNumber) {
        resultMessage.textContent = "Try a higher number.";
        score -= 10;
    } else if (userGuess > targetNumber) {
        resultMessage.textContent = "Try a lower number.";
        score -= 10;
    }

    scoreMessage.textContent = `Score: ${score}`;

    if (attempts === 10) {
        resultMessage.textContent = `Game over. The number was ${targetNumber}.`;
        guessButton.disabled = true;
    }
}

function resetGuess() {
    guessInput.value = "";
}