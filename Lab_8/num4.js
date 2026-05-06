{
    function writeObject(obj) {
        let jsonStr = JSON.stringify(obj, null, 2);
        console.log(jsonStr);
    };

    function mergeObjects(obj1, obj2) {
        if (typeof obj1 === 'object' && typeof obj2 === 'object') {
            const tempObj = obj2;
            for (let key in obj1) {
                if (!(key in tempObj)) {
                    tempObj[key] = obj1[key];
                };
            };
            return tempObj;
        };
        return {};
    };

    writeObject(mergeObjects({1: 'hello', 2: 'hello', 4: 'yes'}, {2: 'hi', 3: 'guten tac'}));
}