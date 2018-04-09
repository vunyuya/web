var photos = document.querySelectorAll('.gallery-item');
var isOpenedPhoto = false;
var openedPhoto = null;
var openPhoto = function(e, target) {
  if (isOpenedPhoto) {
    return;
}

fullPhoto = document.createElement('div');
fullPhoto.className = 'full-photo';

photo = document.createElement('img');
photo.src = 'images/' + e + '.png';
photo.className = 'big-photo';

fullPhoto.appendChild(photo);

closeBtn = document.createElement('img');
closeBtn.src = 'images/closebutton.png';
closeBtn.className = 'close-btn';
closeBtn.onclick = closePhoto;

fullPhoto.appendChild(closeBtn);

openedPhoto = fullPhoto;
document.querySelector('.content').classList.add('blur');
document.body.appendChild(fullPhoto);

isOpenedPhoto = true;
}

var closePhoto = function() {
document.querySelector('.full-photo').remove();
document.querySelector('.content').classList.remove('blur');

isOpenedPhoto = false;
}

photos.forEach(function(item) {
item.onclick = openPhoto.bind(this, item.getAttribute('data-id'));
})
