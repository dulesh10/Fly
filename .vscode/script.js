const wrapper = document.querySelector('.wrapper');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClass = document.querySelector('.icon-class');

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
  });
 /* if(btnPopup.click){
    wrapper.classList.remove('active-popup')
  }*/
  iconClass.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
    <a class="nav-link" href="/home.php">home</a>
  });