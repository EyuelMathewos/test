let element = document.getElementById("search-input");
document.getElementById("search-input").addEventListener("keyup", async (e) => {
  //   value.concat(e.key);
  console.log(element.value);
  let filter = element.value;
  // Search comments
  // Use this API: https://jsonplaceholder.typicode.com/comments?postId=3
  // Display the results in the UI

  // Things to look out for
  // ---
  // Use es6

  const res = await fetch("http://localhost:8000", {
    mode: "cors",
    method: "GET",
  });
  const data = await res.json();
  var json = data.filter(function (filtername) {
    let name = filtername.name;
    console.log(filter);
    return name.includes(filter);
  });

  const result = json.map((element, idx) => {
    return `<li>${element.name.toString()}<li/>`;
  });
  document.getElementById("results").innerHTML = result;
});
