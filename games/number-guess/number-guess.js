// setting random number globally
let randomNum = getRandomNumber();

// generating a random number
function getRandomNumber() {
  return Math.floor(Math.random() * 100 + 1);
}

// creating the game interface
function createInterface() {
  // grab #numbers container for the number buttons
  let numbers = document.querySelector("#numbers");
  // for loop to create number buttons within the container
  for (let i = 1; i <= 100; i++) {
    numbers.insertAdjacentHTML("beforeend", `<div class="number">${i}</div>`);
  }
}

// game functionality/logic
function guessNumber(event) {
  // setting user click to the current guess
  let guess = event.target.textContent;
  // setting answer to a random number using getRandomNumber function
  let answer = randomNum;
  // check if the user's guess is correct and update the displayed text
  if (guess == answer) {
    document.querySelector("#result").textContent =
      "You guessed it! The number was " + guess + "!";
    // change current guess to green to indicate that it's correct
    event.target.style.backgroundColor = "lightGreen";

    // disable buttons since the game is over
    document.querySelectorAll(".number").forEach(function (numberElement) {
      numberElement.removeEventListener("click", guessNumber);
      numberElement.style.cursor = "default";
    });

    // make reset button visible to give user the option to play again
    let resetBtn = document.querySelector("#reset");
    resetBtn.style.visibility = "visible";

    // conditional when user guess is too low
  } else if (guess < answer && guess >= 1) {
    // update displayed text
    document.querySelector("#result").textContent = "Too low";

    // change background color to yellow to indicate guess is too low
    event.target.style.backgroundColor = "rgb(248, 251, 145)";
    // disbale the button for current guess since it is no longer an option
    event.target.removeEventListener("click", guessNumber);
    event.target.style.cursor = "default";

    // conditional when user guess is too high
  } else if (guess > answer && guess <= 100) {
    // update displayed text
    document.querySelector("#result").textContent = "Too high";
    // change current guess to red to indicate it is too high
    event.target.style.backgroundColor = "rgb(251, 163, 145)";
    // disable the button for current guess since it is no longer an option
    event.target.removeEventListener("click", guessNumber);
    event.target.style.cursor = "default";
  }
  // Log the user guess and the correct answer to the console
  console.log(guess);
  console.log(answer);
}

function resetGame() {
  // update result text back to "make a guess" prompt
  document.querySelector("#result").textContent = "Make a guess!";

  // enable guess buttons again and reset color
  document.querySelectorAll(".number").forEach(function (numberElement) {
    numberElement.addEventListener("click", guessNumber);
    numberElement.style.cursor = "pointer";
    numberElement.style.backgroundColor = "rgb(169, 247, 247)";
  });

  // grab reset button and hide it from the user
  let resetBtn = document.querySelector("#reset");
  resetBtn.style.visibility = "hidden";

  // create a new random number
  randomNum = getRandomNumber();
}

function init() {
  // A. create the interface (100 numbers)
  createInterface();

  // add event listeners to each number guess button on click
  document.querySelectorAll(".number").forEach(function (numberElement) {
    numberElement.addEventListener("click", guessNumber);
  });

  // add event listener to reset button
  document.querySelector("#reset").addEventListener("click", resetGame);
}

init();