document.getElementById('icon').addEventListener('click', ()=>{
    document.querySelector('.navbar').classList.toggle('height');
    document.querySelector('.navbar__list').classList.toggle('change');
});

//COURSE CATEGORIES BUTTON TO FETCH COURSES WHEN CLICKED

let course_btn = (document.querySelectorAll('.course-category__button'));
const arr = Array.from(course_btn);
arr.forEach((cur) => {
 cur.addEventListener('click', (element)=>{
   element.classList.toggle('fetch-course');
 })
});
     
 




















