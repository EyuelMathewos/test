document.getElementById('search-input').addEventListener('keyup', async (e) => {
    // Search comments
    // Use this API: https://jsonplaceholder.typicode.com/comments?postId=3
    // Display the results in the UI

    // Things to look out for
    // ---
    // Use es6

    const res = await fetch('http://localhost:8000',{
     mode: "cors",
     method: "GET",
    })
	console.log(res);
	//const json = await res.json()
	const json = ["hello"]

    const result = `<li>${json.join('</li><li>')}</li>`
    document.getElementById('results').innerHTML = result

})
