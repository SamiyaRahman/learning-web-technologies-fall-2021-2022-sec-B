function loadPosts() {
  fetch("https://jsonplaceholder.typicode.com/photos")
    .then((res) => res.json())
    .then((data) => displayPosts(data));
}
loadPosts();

function displayPosts(posts) {
  const postContainer = document.getElementById("posts");
  for (const post of posts) {
    const div = document.createElement("div");
    div.classList.add("post");
    div.innerHTML = `
    <h1>${post.id}</h1>
    

         <img src="${post.thumbnailUrl}" class="card-img-top" alt="..."/>
         <button class='btn'>Purches</button>
         <button class='btn'>Review</button>
         <button class='btn'>Delete</button>
        `;
    postContainer.appendChild(div);
    console.log(post);
  }
}
