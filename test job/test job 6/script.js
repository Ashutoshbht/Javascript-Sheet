let currentPage = 1;

function showPage(pageNumber) {
  const images = document.querySelectorAll('.carousel-slide img');
  images.forEach((image, index) => {
    if (index + 1 === pageNumber) {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });
}

function setActivePage(pageNumber) {
  const pages = document.querySelectorAll('.page');
  pages.forEach((page, index) => {
    if (index + 1 === pageNumber) {
      page.classList.add('active');
    } else {
      page.classList.remove('active');
    }
  });
}

function togglePrevNextButtons() {
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  if (currentPage === 1) {
    prevBtn.style.display = 'none';
  } else {
    prevBtn.style.display = 'block';
  }
  if (currentPage === 5) {
    nextBtn.style.display = 'none';
  } else {
    nextBtn.style.display = 'block';
  }
}

function changePage(pageNumber) {
  currentPage = pageNumber;
  showPage(currentPage);
  setActivePage(currentPage);
  togglePrevNextButtons();
}

document.getElementById('nextBtn').addEventListener('click', () => {
  if (currentPage < 5) {
    currentPage++;
    showPage(currentPage);
    setActivePage(currentPage);
    togglePrevNextButtons();
  }
});

document.getElementById('prevBtn').addEventListener('click', () => {
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
    setActivePage(currentPage);
    togglePrevNextButtons();
  }
});

showPage(currentPage);
setActivePage(currentPage);
togglePrevNextButtons();
