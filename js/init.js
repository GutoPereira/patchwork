M.AutoInit();

function change(elem) {
  let e = elem.getElementsByTagName('i')[0];
  if (e.innerHTML == "toggle_off") {
    e.className = e.className.replace(/grey-text/,'orange-text');
    e.innerHTML = "toggle_on";
  } else {
    e.className = e.className.replace(/orange-text/,'grey-text');
    e.innerHTML = "toggle_off";
  }
}