
function toggleContent(button) {
    const card = button.closest('.card');
    const content = card.querySelector('.card-content');
    content.style.display = (content.style.display === 'none') ? 'block' : 'none';
}
console.log("hhhhhh");
