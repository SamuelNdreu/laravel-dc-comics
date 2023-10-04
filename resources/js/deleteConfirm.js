const deleteElementsConfirm = document.querySelectorAll("form.delete-element");
console.log("ciao")

deleteElementsConfirm.forEach((confirmDelete)=>{
  confirmDelete.addEventListener("submit", function(event){
    event.preventDefault();
    const formElementName= confirmDelete.getAttribute("data-element-name");
    const ConfirmPopUp= window.confirm(`Confermi l'eliminazione di ${formElementName}`);
    if (ConfirmPopUp) confirmDelete.submit();
  })
})