function change(elem) {
  let e = elem.getElementsByTagName('i')[0];
  
  let turning_on = false;
  if (e.innerHTML == "toggle_off") {
    e.className = e.className.replace(/grey-text/,'orange-text');
    e.innerHTML = "toggle_on";
    turning_on = true;
  } else {
    e.className = e.className.replace(/orange-text/,'grey-text');
    e.innerHTML = "toggle_off";
  }
  
  $.each($('#content-container').find('article'),function(article_i, article) {
    article.style.visibility = "hidden";
    article.style.display = "initial";
    let found = 0;
    $.each(article.dataset.labels.split(/ /),function(article_label_i, article_label) {
      //console.log(article_label);
      $.each($('#labels-holder').find('.collection-item'), function (label_i,label_el) {
        if (label_el.getElementsByTagName('i')[0].innerHTML == "toggle_on" && article_label == label_el.dataset.label){
          found++;
        }
      });
    });
    if (found == 0) article.style.display = "none";
    article.style.visibility = "visible";
  });
}