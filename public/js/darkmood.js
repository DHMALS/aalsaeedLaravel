

const toggle = document.getElementById('toggleDark');
var html = document.getElementsByTagName("html")[0];

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-brightness-high-fill');
    if(this.classList.toggle('bi-moon')){
      html.classList.remove("dark");
      html.classList.add("light");
      body.style.transition = '1s';
    }else{
      html.classList.remove("light");
      html.classList.add("dark");
      
      body.style.transition = '1s';
    }
});