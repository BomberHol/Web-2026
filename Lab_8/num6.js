{
    function mapObject(obj, callback) {
        const objTemp = obj;
        for (key in objTemp) {
            objTemp[key] = callback(objTemp[key]);
        };
        return objTemp;
    }

    const nums = { a: 1, b: 2, c: 3 };
    console.log(mapObject(nums, x => x * 2));
}