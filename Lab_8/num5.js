{
  const users = [
    { 'id': 1, 'name': "Alice" },
    { 'id': 2, 'name': "Bob" },
    { 'id': 3, 'name': "Charlie" }
  ];

  const arr = users.map(function getName(item) {
    return item['name'];
  });

  console.log(arr);
}