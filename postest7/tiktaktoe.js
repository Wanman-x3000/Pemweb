/*variable constants*/
const winningCombos = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6], 
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];
const element =  document.body;

/*variable*/
let board;
let turn = 'X';
let win;

/*elemnt variable untuk mengambil referensi dari html */
const cells = Array.from(document.querySelectorAll('#board div'));
document.getElementById('toggle').addEventListener('click', darkMode);
document.getElementById('board').addEventListener('click', handleTurn); 
const messages = document.querySelector('h2');
document.getElementById('reset').addEventListener('click', init);

/*Fungsi*/
function darkMode(){
    element.classList.toggle("darkMode");
}

function getWinner() {
    let winner = null;
    winningCombos.forEach(function(combo, index) {
        if (board[combo[0]] && board[combo[0]] === board[combo[1]] && board[combo[0]] === board[combo[2]]) winner = board[combo[0]];
        });
        return winner ? winner : board.includes('') ? null : 'T';
};

function handleTurn() {
    let idx = cells.findIndex(function(cell) {
        return cell === event.target;
    });
    board[idx] = turn;
    turn = turn === 'X' ? 'O' : 'X';
    win = getWinner();
    render();
};

function init() {
    board = [
    '', '', '',
    '', '', '',
    '', '', ''
    ];
    render();
};

function render() {
    board.forEach(function(mark, index) {
    cells[index].textContent = mark;
    });
    messages.textContent = win === 'T' ? `That's a TIE, Good game` : win ? `${win} wins the game!, Well Played` : `It's ${turn}'s turn!`;
    };

init();