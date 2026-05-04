{
    const minUppLetter = 97;
    const maxUppLetter = 122;

    const minCapLetter = 65;
    const maxCapLetter = 90;

    const minSpecialChar = 33;
    const maxSpecialChar = 47;

    const minNum = 48;
    const maxNum = 57;


    function getRandomNum(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function getRAndomNunFromArr(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    function getRandomChar(num) {
        switch (num) {
            case (1): 
                return String.fromCharCode(getRandomNum(minNum, maxNum));
            case (2): 
                return String.fromCharCode(getRandomNum(minSpecialChar, maxSpecialChar));
            case (3): 
                return String.fromCharCode(getRandomNum(minCapLetter, maxCapLetter));
            case (4): 
                return String.fromCharCode(getRandomNum(minUppLetter, maxUppLetter));
        };
        return '';
    }

    function NewRandomStr() {
        let arr = [1, 2, 3, 4];
        let str = '';
        let numRand = 0; 
        while (arr.length != 0) {
            numRand = getRAndomNunFromArr(arr);
            str += getRandomChar(numRand);
            arr = arr.filter(x => x != numRand);
        }
        return str;
    }

    function newPassword(size) {
        let password = '';
        if (size < 4) {
            console.log('error');
        }
        else {
            const arr = [1, 2, 3, 4];
            let numRand = 0;
            password += NewRandomStr(); 
            for (let index = 1; index <= size - 4; index++) {
                numRand = getRAndomNunFromArr(arr);;
                password += getRandomChar(numRand);
            };
        }
    return password;
    }

    console.log(newPassword(10))
}