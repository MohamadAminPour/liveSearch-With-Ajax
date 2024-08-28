let span = document.querySelector("span");
let input = document.querySelector("input");

function showUsers(result) {
  if (result.length === 0) {
    span.innerHTML = "";
    return;
  } else {
    fetch("ajax.php?name=" + result)
      .then((res) => res.text())
      .then((data) => {
        span.innerHTML = data;
      });
  }
}

input.addEventListener("keyup", () => {
  showUsers(input.value);
});
