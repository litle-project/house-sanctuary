const modalOverlay = document.getElementById('modal-overlay');
const modal = document.getElementById('modal');
const main = document.getElementById('main');

const openModal = () => {
    const currentTop = window.scrollY;
    const defaultTop = 200;
    const top = parseInt(defaultTop, 10) + parseInt(currentTop, 10)
    

    modalOverlay.style.display = 'block';
    modal.style.display = 'block';
    modal.style.top = `${top}px`
    main.style.position = 'fixed';
    main.style.top = `${-currentTop}px`
}

const closeModal = () => {
    modalOverlay.style.display = 'none';
    modal.style.display = 'none';
    main.style.position = 'unset';
}