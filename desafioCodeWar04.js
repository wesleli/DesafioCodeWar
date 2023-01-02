/*An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
Implement a function that determines whether a string that contains only letters is an isogram. 
Assume the empty string is an isogram. 
Ignore letter case.*/

const isIsogram = word => {
    word = word.toLowerCase().split('')
    const result = word.reduce((accum, letter) => {
        !accum.includes(letter) && accum.push(letter);
        return accum;
    }, []);
    return result.length === word.length;
};

/*minha solução*/

function isIsogram(str) {

    var word = str.toLowerCase().split('');

    const checker = word.reduce((accu, letter) => { if (accu === 0 || !accu.includes(letter)) { accu.push(letter); } return accu; }, [])

    return checker.length === word.length;


}