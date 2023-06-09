document.addEventListener(
  "play",
  function (e) {
    var audios = document.getElementsByTagName("audio");
    for (var i = 0, len = audios.length; i < len; i++) {
      if (audios[i] != e.target) {
        audios[i].pause();
      }
    }
  },
  true
);

const keyword = document.getElementById("keyword_user");
const searchContainer = document.getElementById("search-container");

//event ketika kita mengetik keyword
keyword.onkeyup = function () {
  fetch("ajax/search_user.php?keyword_user=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
const keywordMusik = document.getElementById("keyword_musik");
const searchContainerMusik = document.getElementById("search-container-musik");

//event ketika kita mengetik keyword
keywordMusik.onkeyup = function () {
  fetch("ajax/search_musik.php?keyword_musik=" + keywordMusik.value)
    .then((response) => response.text())
    .then((text) => (searchContainerMusik.innerHTML = text));
};
