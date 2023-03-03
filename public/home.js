const photoInput = document.getElementById('photo');
const banner = document.getElementById('banner');
const contentInput = document.getElementById('content')

photoInput.addEventListener('change', e => {
  const url = URL.createObjectURL(e.target.files[0])
  document.getElementById('url_photo').value = url;
  banner.style.backgroundImage = `url(${url})`
});

contentInput.addEventListener('keyup', e => {
  banner.innerHTML = e.target.value;
})