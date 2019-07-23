'use strict';

var cardsArray = [{
  'name': 'star',
  'img': 'img/star.png'
}, {
  'name': 'mario',
  'img': 'img/mario.png'
}, {
  'name': 'luigi',
  'img': 'img/luigi.png'
}, {
  'name': 'peach',
  'img': 'img/peach.png'
}, {
  'name': '1up',
  'img': 'img/1up.png'
}, {
  'name': 'mushroom',
  'img': 'img/mushroom.png'
}, {
  'name': 'coin',
  'img': 'img/coin.png'
}, {
  'name': 'goomba',
  'img': 'img/goomba.png'
}];

var gameGrid = cardsArray.concat(cardsArray).sort(function () {
  return 0.5 - Math.random();
});

var firstGuess = '';
var secondGuess = '';
var count = 0;
var previousTarget = null;
var delay = 1200;

var game = document.getElementById('game');
var grid = document.createElement('section');
grid.setAttribute('class', 'grid');
game.appendChild(grid);

gameGrid.forEach(function (item) {
  var name = item.name,
      img = item.img;


  var card = document.createElement('div');
  card.classList.add('card');
  card.dataset.name = name;

  var front = document.createElement('div');
  front.classList.add('front');

  var back = document.createElement('div');
  back.classList.add('back');
  back.style.backgroundImage = 'url(' + img + ')';

  grid.appendChild(card);
  card.appendChild(front);
  card.appendChild(back);
});

function intro() {
  var difficulty = prompt("Choose from the following: \n1 - Easy  |  2 - Normal  |  3 - Hard", "");

  var cards = document.querySelectorAll('.card');
  cards.forEach(function (card) {
      card.classList.add('selected');
  })

  if (difficulty == "1" || difficulty.toLowerCase() == "e" || difficulty.toLowerCase() == "easy") {
    document.getElementById("difficulty").innerHTML = "Easy"
    setTimeout (function() {
        var cards = document.querySelectorAll('.card');
        cards.forEach(function (card) {
        card.classList.remove('selected');
        })
    }, 8500);
  } else if (difficulty == "3" || difficulty.toLowerCase() == "h" || difficulty.toLowerCase() == "hard") {
    document.getElementById("difficulty").innerHTML = "Hard"
    setTimeout (function() {
      var cards = document.querySelectorAll('.card');
      cards.forEach(function (card) {
      card.classList.remove('selected');
      })
    }, 3500);
  } else {
    document.getElementById("difficulty").innerHTML = "Normal"
    setTimeout (function() {
      var cards = document.querySelectorAll('.card');
      cards.forEach(function (card) {
      card.classList.remove('selected');
      })
    }, 5500);
  }
}

var match = function match() {
  var selected = document.querySelectorAll('.selected');
  selected.forEach(function (card) {
    card.classList.add('match');
  });

  if (document.querySelectorAll('.match').length == 16) {
    setTimeout (function() {
      alert("Congratulations!");
      window.close();
    }, 1000)
  }
};

var resetGuesses = function resetGuesses() {
  firstGuess = '';
  secondGuess = '';
  count = 0;
  previousTarget = null;

  var selected = document.querySelectorAll('.selected');
  selected.forEach(function (card) {
    card.classList.remove('selected');
  });
};

grid.addEventListener('click', function (event) {

  var clicked = event.target;

  if (clicked.nodeName === 'SECTION' || clicked === previousTarget || clicked.parentNode.classList.contains('selected') || clicked.parentNode.classList.contains('match')) {
    return;
  }

  if (count < 2) {
    count++;
    if (count === 1) {
      firstGuess = clicked.parentNode.dataset.name;
      console.log(firstGuess);
      clicked.parentNode.classList.add('selected');
    } else {
      secondGuess = clicked.parentNode.dataset.name;
      console.log(secondGuess);
      clicked.parentNode.classList.add('selected');
    }

    if (firstGuess && secondGuess) {
      if (firstGuess === secondGuess) {
        setTimeout(match, delay);
      }
      setTimeout(resetGuesses, delay);
    }
    previousTarget = clicked;
  }
});

if (document.querySelectorAll('.card').length == document.querySelectorAll('.match').length) {
  alert("Congratulations!");
  window.close();
}