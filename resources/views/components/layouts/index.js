window.addEventListener("closeModal", () => {
    const myModal = document.getElementById("exampleModal");
    const modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();
});
