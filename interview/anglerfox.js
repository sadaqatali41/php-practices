// ! remove duplicate items from an array

let items = ['a', 'a', 'B', 'c', 'a', 'A'];
let element = [];

items.forEach(function(ele){
    if(!element.includes(ele)){
        element.push(ele);
    }
});

console.log(element);


// find number of z in each item values
// eg {'item1': 'abcz', 'item2': 'zzabc', 'item3': 'abczzZ'}

let obj = {'item1': 'abcz', 'item2': 'zzabcz', 'item3': 'abczzZ'};
let zCount = [];

for(x in obj) {
    let item = obj[x];
    let count = 0;

    for(a of item) {
        let lower = a.toLowerCase();
        if(lower == 'z') {
            count++;
        }
    }

    zCount.push(count);
}

console.log(zCount);