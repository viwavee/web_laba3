document.getElementById("libraryForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  let output = "<h3>Результат:</h3>";

  for (const [name, value] of formData.entries()) {
    output += `<p><b>${name}:</b> ${value}</p>`;
  }

  if (!formData.has("ebook")) {
    output += "<p><b>Электронная версия:</b> нет</p>";
  }

  document.getElementById("result").innerHTML = output;
});
