var prevBtn = document.getElementById("prevBtn");
      var nextBtn = document.getElementById("nextBtn");
      var img = document.getElementById("img");
      var num = document.getElementById("num");

      var imgList = [
        "./image/0.JPG",
        "./image/1.JPG",
        "./image/2.JPG",
        "./image/3.JPG",
        "./image/4.JPG",
        "./image/5.JPG",
        "./image/6.PNG",
        "./image/7.JPG",
        "./image/8.JPG",
        "./image/9.JPG",
        "./image/11.JPG",
        "./image/12.JPG",
        "./image/13.JPG",
        "./image/14.JPG",
        "./image/15.JPG",
      ];

      let currentImgIndex = 0;

      function updateNum() {
        num.textContent = `Ảnh ${currentImgIndex + 1}/${imgList.length}`;
      }

      function displayImg(index) {
        img.src = imgList[index];
        updateNum();
      }

      function changeBackgroundColor() {
        const colors = ["#f2f2f2", "#e6e6e6", "#d9d9d9"];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        document.body.style.backgroundColor = randomColor;
      }

      prevBtn.addEventListener("click", () => {
        currentImgIndex =
          (currentImgIndex - 1 + imgList.length) % imgList.length;
        displayImg(currentImgIndex);
        changeBackgroundColor();
      });

      nextBtn.addEventListener("click", () => {
        currentImgIndex = (currentImgIndex + 1) % imgList.length;
        displayImg(currentImgIndex);
        changeBackgroundColor();
      });

      displayImg(currentImgIndex);