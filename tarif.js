function toggleTarif(tarifId) {
    var aciklamaDiv = document.getElementById(tarifId).querySelector('.aciklama');
    aciklamaDiv.style.display = (aciklamaDiv.style.display === 'none' || aciklamaDiv.style.display === '') ? 'block' : 'none';
}
