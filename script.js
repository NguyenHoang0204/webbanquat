document.querySelectorAll('.product button').forEach(button => {
    button.addEventListener('click', () => {
        alert('Sản phẩm đã được thêm vào giỏ!');
    });
});