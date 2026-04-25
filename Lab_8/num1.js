{
    function processingNum(num) {
        let countDel = 0
        for (let i = 1; i <= num; i++) {
            if (num % i == 0) {
                countDel++
            }
        }
        if (countDel == 2) {
            return true
        }
        else {
            return false
        }
    }

    function getPrimeNumberFromArr(arr) {
        const tempArr = []
        arr.forEach(element => {
            if (processingNum(element)) {
                tempArr.push(element)
            }
        });
        return tempArr
    }

    function getNotPrimeNumberFromArr(arr) {
        const tempArr = []
        arr.forEach(element => {
            if (!processingNum(element)) {
                tempArr.push(element)
            }
        });
        return tempArr
    }

    function strNum(arr) {
        let str = ''
        for (let i = 0; i < arr.length; i++) {
            str += ' ' + arr[i]
            if (i + 1 < arr.length) {
                str += ','
            }
        }
        return str
    }

    function answerArr(arr) {
        const primeArr = getPrimeNumberFromArr(arr);
        const notPrimeArr = getNotPrimeNumberFromArr(arr);
        let answer = 'Результат Num1:'
        if (primeArr.length > 0) {
            answer += strNum(primeArr)
            if (primeArr.length == 1) {
                answer += ' простое число'
            }
            else if (primeArr.length > 1) {
                answer += ' простые числа'
            }
        } 
        if (notPrimeArr.length > 0) {
            if (primeArr.length > 0)
                answer += ',' + strNum(notPrimeArr)
            else
                answer += strNum(notPrimeArr)
            if (notPrimeArr.length == 1) {
                answer += ' не простое число'
            }
            else if (notPrimeArr.length > 1) {
                answer += ' не простые числа'
            }
        }
        return answer
    }

    function isPrimeNumber(arg) {
        if (Array.isArray(arg)) {
            console.log(answerArr(arg));
        }
        else if (Number.isInteger(arg)) {
            if (processingNum(arg)) {
                console.log('Результат: ' + arg + ' простое число')
            }
            else {
                console.log('Результат: ' + arg + ' не простое число');
            }
        }
        else {
            console.log('Not correct is argument');
        }
    }
    isPrimeNumber([1, 6, 5, 9, 100]);
}