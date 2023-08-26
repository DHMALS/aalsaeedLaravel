const observer = new IntersectionObserver((entries) =>{
  entries.forEach((entry)=>{
    if (entry.isIntersecting) {
      entry.target.classList.add('showForAnimate')
    } else {
      entry.target.classList.remove('showForAnimate')
    }
  });
});

const hiddenEle = document.querySelectorAll('.hiddenForAnimate');
console.log(hiddenEle);
hiddenEle.forEach((el) => observer.observe(el));