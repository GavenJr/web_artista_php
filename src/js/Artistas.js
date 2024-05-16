const artistas = [{
    nombre: "Duki",
    genero: "Trap",
    foto: "src/img/Artistas/Duki.webp",
    fotoLateral: "src/img/Artistas/DukiLaterl.webp",
    fNacimiento: '',
    nacionalidad: ''
},
{
    nombre: "Post Malone",
    genero: "Pop",
    foto: "src/img/Artistas/PostMalone.webp"
},
{
    nombre: "Drake",
    genero: "Hip-Hop",
    foto: "src/img/artistas/Drake.jpeg"
},
{
    nombre: "Khea",
    genero: "Trap",
    foto: "src/img/Artistas/Khea.webp"
},
{
    nombre: "Los Bunkers",
    genero: "Rock",
    foto: "src/img/Artistas/LosBunkers.webp"
},
{
    nombre: "Cris MJ",
    genero: "Regueton",
    foto: "src/img/Artistas/CrisMJ.webp"
}
];

function mostrarArtistas(generoSeleccionado) {
const contenedor = document.getElementById('artistas');
contenedor.innerHTML = '';

artistas.forEach(artista => {
    if (generoSeleccionado === 'todos' || artista.genero === generoSeleccionado) {
        contenedor.innerHTML += `
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="${artista.foto}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${artista.nombre}</h5>
                        <p class="card-text">Género: ${artista.genero}</p>
                        <a href="${artista.nombre}.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        `;
    }
});
}

document.getElementById('filtroGenero').addEventListener('change', function() {
const generoSeleccionado = this.value;
mostrarArtistas(generoSeleccionado);
});

// Mostrar todos los artistas al cargar la página
mostrarArtistas('todos');
