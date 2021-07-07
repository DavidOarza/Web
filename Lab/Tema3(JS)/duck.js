window.onload = function(){
  btn_right.onclick = function() {
    let start = Date.now();
    btn_right.disabled = true;
    btn_left.disabled = true;

    let timer = setInterval(function() {
      let timePassed = Date.now() - start;

      duck.style.left = timePassed / 6 + 'px';

      if (timePassed > 3000)
        {
          clearInterval(timer);
          btn_right.disabled = false;
          btn_left.disabled = false;
        }

    });
  }
  btn_left.onclick = function() {
    let start = Date.now();
    btn_right.disabled = true;
    btn_left.disabled = true;

    let timer = setInterval(function() {
      let timePassed = Date.now() - start;

      duck.style.right = timePassed / 6 + 'px';

      if (timePassed > 3000)
        {
          clearInterval(timer);
          btn_left.disabled = false;
          btn_right.disabled = false;
        }

    });
  }
}
