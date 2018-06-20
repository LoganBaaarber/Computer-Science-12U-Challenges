import fs from 'fs';

fs.readFile('input.txt', 'utf-8', (err, file) => {
    const words = file.split('\n')
    
    words.forEach(word => {
      console.log(word);
      var numbers = new Array();
      var results = new Array();
      var odds = new Array();
      var letters = word.split('\n');
      letters.forEach(letter => {
      convertLetter(letter).then
      });
  });
}); 
     
function convertLetter(letter) {
  number = letter.charAt(0);
  return number;
}  