{
    function arrToStr(arr) {
        let str = '';
        for (let i = 0; i < arr.length; i++) {
            str += arr[i];
            if (i + 1 < arr.length) {
                str += ', ';
            };
        };
        return str;
    }

    function countVowels(str) {
        if (typeof str == 'string') {
            let wovelStr = 'аеёиоуыэюя';
            const wovelFound = [];
            let count = 0;
            for (let char of str) {
                if (wovelStr.includes(char)) {
                    count++;
                    if (!wovelFound.includes(char)) {
                        wovelFound.push(char);
                    };
                };
            };
            console.log(count + ' (' + arrToStr(wovelFound) + ')');
        };
    };

    countVowels('йцукенгшщзхъэждлорпавыфячсмитьбю.');
}