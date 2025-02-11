let currentPage = 1;
const totalPages = 4;
const formPages = document.querySelectorAll('.form-page');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const tester = document.getElementById('yes');
const files = document.getElementById('files');
const no = document.getElementById('no');


function showPage(pageNumber) {
    formPages.forEach((page, index) => {
        if (index + 1 === pageNumber) {
            page.classList.add('active');
        } else {
            page.classList.remove('active');
        }
    });

    // طھظپط¹ظٹظ„ ط£ظˆ طھط¹ط·ظٹظ„ ط§ظ„ط£ط²ط±ط§ط±
    prevBtn.disabled = pageNumber === 1;
    nextBtn.disabled = pageNumber === totalPages;
}

function navigate(direction) {
    const currentPageElement = document.querySelector('.form-page.active');
    if (direction === 'next' && currentPage < totalPages) {
        currentPage++;
        currentPageElement.classList.add('slide-left');
    } else if (direction === 'prev' && currentPage > 1) {
        currentPage--;
        currentPageElement.classList.add('slide-right');
    }

    setTimeout(() => {
        currentPageElement.classList.remove('slide-left', 'slide-right');
        showPage(currentPage);
    }, 500); // ظٹطھظ†ط§ط³ط¨ ظ…ط¹ ظ…ط¯ط© ط§ظ„ط§ظ†طھظ‚ط§ظ„ ظپظٹ CSS
}

prevBtn.addEventListener('click', () => navigate('prev'));
nextBtn.addEventListener('click', () => navigate('next'));

// ط¹ط±ط¶ ط§ظ„طµظپط­ط© ط§ظ„ط£ظˆظ„ظ‰ ط¹ظ†ط¯ ط§ظ„طھط­ظ…ظٹظ„
showPage(currentPage);


tester.addEventListener('click' , ()=>{
        files.style.display = 'block';
});

no.addEventListener('click' , ()=>{
    files.style.display = 'none';
});