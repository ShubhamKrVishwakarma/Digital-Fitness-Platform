
try {
    let aboutSection = document.getElementById('about-section');
    let postsSection = document.getElementById('post-section');
    let reviewsSection = document.getElementById('review-section');
    let editSection = document.getElementById('edit-section');
    
    let aboutButton = document.getElementById('about');
    let postsButton = document.getElementById('posts');
    let reviewsButton = document.getElementById('reviews');
    let editButton = document.getElementById('edit');
    
    aboutButton.addEventListener('click',()=>{
        aboutSection.style.display =  "block";
        aboutSection.style.pointerEvents = "all";
        postsSection.style.display = "none";
        postsSection.style.pointerEvents = "none";
        reviewsSection.style.display="none";
        reviewsSection.style.pointerEvents = "none";
        editButton.style.backgroundColor="royalblue";
    });
    postsButton.addEventListener('click',()=>{
        postsSection.style.display =  "block";
        postsSection.style.pointerEvents = "all";
        aboutSection.style.display = "none";
        aboutSection.style.pointerEvents = "none";
        reviewsSection.style.display="none";
        reviewsSection.style.pointerEvents = "none";
        editButton.style.backgroundColor="royalblue";
    });
    if(reviewsButton){
        reviewsButton.addEventListener('click',()=>{
            reviewsSection.style.display="block";
            reviewsSection.style.pointerEvents = "all";
            postsSection.style.display =  "none";
            postsSection.style.pointerEvents = "none";
            aboutSection.style.display = "none";
            aboutSection.style.pointerEvents = "none";        
        });
    }
} catch (error) {
    console.error('Error adding event listener: ' + error.message);
}



const indicator = document.querySelector('.nav-indicator');
const items = document.querySelectorAll('.nav-item-links');

function handleIndicator(el) {
    items.forEach(item => {
        item.classList.remove('is-active');
        item.removeAttribute('style');
    });
    indicator.style.display="revert";
    indicator.style.width = `${el.offsetWidth}px`;
    indicator.style.left = `${el.offsetLeft}px`;
    indicator.style.backgroundColor = el.getAttribute('active-color');
    
    el.classList.add('is-active');
    el.style.color = el.getAttribute('active-color');
    el.style.fontWeight="bold";
}

items.forEach((item, index) => {
    item.addEventListener('click', e => {
        handleIndicator(e.target);
    });
    item.classList.contains('is-active') && handleIndicator(item);
});

try {
    let editButton = document.getElementById('edit');
    editButton.addEventListener('click',()=>{
        items.forEach(item => {
            item.classList.remove('is-active');
            item.removeAttribute('style');
        });
        editButton.style.backgroundColor="#353935";
        handleIndicator(editButton);
        editButton.style.fontWeight="normal";
        setTimeout(()=>{
            indicator.style.display="none";
        },400);
    });
} catch (error) {
    console.error('Error adding event listener: ' + error.message);
    // console.error('Exception Handeled');
}