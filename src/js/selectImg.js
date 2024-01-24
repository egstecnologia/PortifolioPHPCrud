const inputFile = document.querySelector("#pictureInput");
const pictureImg = document.querySelector(".pictureImg");
const pictureImgText = "Adicionar foto...";
pictureImg.innerHTML = pictureImgText;

inputFile.addEventListener("change", function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];
    if(file){
        const reader = new FileReader();

        reader.addEventListener("load", function (e) {
          const readerTarget = e.target;
    
          const img = document.createElement("img");
          img.src = readerTarget.result;
          img.classList.add("pictureImg");
    
          pictureImg.innerHTML = "";
          pictureImg.appendChild(img);
        });
    
        reader.readAsDataURL(file);
      } else {
        pictureImg.innerHTML = pictureImgText;
      }
});