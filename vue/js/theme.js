function applySavedTheme() {
  const theme = localStorage.getItem('theme');
  if (theme) document.body.className = theme;
}
function setTheme(theme){
  document.body.className = theme;
  localStorage.setItem('theme', theme);
}
document.addEventListener('DOMContentLoaded', applySavedTheme);
