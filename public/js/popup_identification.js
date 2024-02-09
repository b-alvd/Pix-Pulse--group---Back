const loginLink = document.getElementById('loginLink');
const signupLink = document.getElementById('signupLink');
const popup_identification = document.getElementById('popup_identification');
const closeBtn = document.querySelector('.close');
const loginForm = document.getElementById('loginForm');
const signupForm = document.getElementById('signupForm');

loginLink.addEventListener('click', function() {
  openLoginForm();
});
signupLink.addEventListener('click', function() {
  openSignupForm();
});
closeBtn.addEventListener('click', function() {
  closePopup();
});

loginLink.addEventListener('click', function() {
  popup_identification.style.display = 'block';
  loginForm.style.display = 'block';
  signupForm.style.display = 'none';
});
signupLink.addEventListener('click', function() {
  document.getElementById('loginForm').style.display = 'none';
  document.getElementById('signupForm').style.display = 'block';
});
closeBtn.addEventListener('click', function() {
  popup_identification.style.display = 'none';
});

function openLoginForm() {
  popup_identification.style.display = 'block';
  loginForm.style.display = 'block';
  signupForm.style.display = 'none';
}
function openSignupForm() {
  popup_identification.style.display = 'block';
  loginForm.style.display = 'none';
  signupForm.style.display = 'block';
}
function closePopup() {
  popup_identification.style.display = 'none';
}