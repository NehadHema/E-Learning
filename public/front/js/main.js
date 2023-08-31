var quotes=[
    '"Be yourself; everyone else is already taken."',
    '"I\'m selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can\'t handle me at my worst, then you sure as hell don\'t deserve me at my best."',
    '"So many books, so little time."',
    '"A room without books is like a body without a soul."',
    '"Be who you are and say what you feel, because those who mind don\'t matter, and those who matter don\'t mind."',
    '"Be the change that you wish to see in the world."',
    '"If you want to know what a man\'s like, take a good look at how he treats his inferiors, not his equals."',
    '"If you tell the truth, you don\'t have to remember anything."',
    '"A friend is someone who knows all about you and still loves you."',
    '"It is better to be hated for what you are than to be loved for what you are not."'
];
var author=[
'-- Oscar Wilde',
'--Marilyn Monroe',
'--Frank Zappa',
'--Marcus Tullius Cicero',
'--Bernard M. Baruch',
'--Mahatma Gandhi',
'--J.K. Rowling, Harry Potter and the Goblet of Fire',
'--Mark Twain',
'-- Elbert Hubbard',
'--Andre Gide, Autumn Leaves'
];
function newQuote(){
    var randomNumber = Math.floor(Math.random() * (quotes.length));
    var randomAuthor = Math.floor(Math.random() * (author.length));
    document.getElementById('quoteDisplay').innerHTML=quotes[randomNumber];
    document.getElementById('quoteAuthor').innerHTML=author[randomAuthor];
}