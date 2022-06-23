// https://www.softel.co.jp/blogs/tech/archives/5676

const img = document.getElementById("image-input");

img.addEventListener("change", (e) => {
    const preview = document.getElementById("preview");
    console.dir(preview);
    console.dir(e.target.result);
    const reader = new FileReader();
    reader.onload = function (e) {
        preview.setAttribute("src", e.target.result);
        preview.setAttribute("class","size")
    };
    reader.readAsDataURL(e.target.files[0]);
});
