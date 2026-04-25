{
    function isStrOrNum(arr) {
        let flag = true
        for (let element of arr) {
            if (!(Number.isInteger(element) || typeof(element) == 'string')) {
                flag = false;
            }
        }
        return flag
    }

    function rewriteArr(arr) {
        const tempArr = []
        for (let element of arr) {
            tempArr.push('' + element)
        }
        return tempArr
    }

    function deleteItemFromArr(arr, item) {
        const tempArr = []
        for (element of arr) {
            if (element != item) {
                tempArr.push(element)
            }
        }
        return tempArr
    }

    function fillObj(arr) {
        const obj = {}
        while (arr.length > 0) {
            let value = 0
            let key = arr[0]
            for (let element of arr) {
                if (element === key) {
                    value++
                }
            }
            arr = deleteItemFromArr(arr, key)
            obj[key] = value
        }
        return obj
    }

    function writeObject(obj) {
        let jsonStr = JSON.stringify(obj, null, 2)
        console.log(jsonStr)
    }

    function convertArray(arr) {
        if (Array.isArray(arr) && isStrOrNum(arr)) {
            arrStr = rewriteArr(arr);
            const obj = fillObj(arrStr)
            writeObject(obj)
        }
    }

    convertArray([1, '2', '1', '3', '3', '2', 5 ,5 , 5, 5, 555, '111' , '55'])
}