const searchBooks = () => {
  const searchField = document.getElementById("search-field");
  const searchText = searchField.value;
  // clear search box
  searchField.value = "";

  // load data

  if (searchText === "") {
    alert("No result Found");
  } else {
    const url = ` https://openlibrary.org/search.json?q=${searchText}`;
    fetch(url)
      .then((res) => res.json())
      .then((data) => displaySearchResult(data.docs));
  }
};

const displaySearchResult = (docs) => {
  const searchResult = document.getElementById("bookCard");
  searchResult.textContent = "";

  if (docs.length == 0) {
    alert("No Result Found");
  }

  docs.forEach((getBook) => {
    console.log(getBook);

    if (getBook == true) {
    }

    const resultSearch = docs.length;
    document.getElementById(
      "searchResult"
    ).innerHTML = `Search Result:${resultSearch}`;

    const div = document.createElement("div");

    div.innerHTML = `
        <div class="card" style="width: 18rem;">
            <img src="https://covers.openlibrary.org/b/id/${getBook.cover_i}-M.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4>Book Name:${getBook.title}</h4>

               
            </div>
        </div>
        `;

    searchResult.appendChild(div);
  });
};
