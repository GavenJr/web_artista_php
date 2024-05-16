// Datos de los artistas
const artistas = [
    {
        nombre: "Duki",
        genero: "Trap",
        foto: "src/img/Artistas/Duki.webp",
        fotoLateral: "src/img/Artistas/DukiLateral.webp",
        fNacimiento: '24/09/1996',
        nacionalidad: 'Argentina',
        nombreReal: 'Mauro Lombardo',
        biografia: 'Duki es un reconocido cantante de trap argentino...'
    },
    {
        nombre: "Post Malone",
        genero: "Pop",
        foto: "src/img/Artistas/PostMalone.webp",
        fotoLateral: "src/img/Artistas/PostMaloneLateral.webp",
        fNacimiento: '04/07/1995',
        nacionalidad: 'Estados Unidos',
        nombreReal: 'Austin Richard Post',
        biografia: 'Post Malone es un cantante, compositor y productor estadounidense...'
    },
    {
        nombre: "Drake",
        genero: "Hip-Hop",
        foto: "src/img/artistas/Drake.jpeg",
        fotoLateral: "src/img/artistas/DrakeLateral.jpeg",
        fNacimiento: '24/10/1986',
        nacionalidad: 'Canadá',
        nombreReal: 'Aubrey Drake Graham',
        biografia: 'Drake es un rapero, cantante, compositor, productor discográfico y actor canadiense...'
    },
    {
        nombre: "Khea",
        genero: "Trap",
        foto: "src/img/Artistas/Khea.webp",
        fotoLateral: "src/img/Artistas/KheaLateral.webp",
        fNacimiento: '13/07/2000',
        nacionalidad: 'Argentina',
        nombreReal: 'Ivo Alfredo Thomas Serue',
        biografia: 'Khea es un cantante, compositor y productor argentino...'
    },
    {
        nombre: "Los Bunkers",
        genero: "Rock",
        foto: "src/img/Artistas/LosBunkers.webp",
        fotoLateral: "src/img/Artistas/LosBunkersLateral.webp",
        fNacimiento: '---',
        nacionalidad: '---',
        nombreReal: '---',
        biografia: '---'
    },
    {
        nombre: "Cris MJ",
        genero: "Regueton",
        foto: "src/img/Artistas/CrisMJ.webp",
        fotoLateral: "src/img/Artistas/CrisMJLateral.webp",
        fNacimiento: '---',
        nacionalidad: '---',
        nombreReal: '---',
        biografia: '---'
    }
];

// Función para cargar los datos del artista
function cargarDatosArtista(nombreArtista) {
    // Buscar al artista en el array
    const artistaSeleccionado = artistas.find(artista => artista.nombre === nombreArtista);

    // Completar los datos del artista en el HTML
    document.getElementById("nombreArtista").innerHTML = artistaSeleccionado.nombre;
    document.getElementById("nombreRealArtistaDetalle").innerHTML = artistaSeleccionado.nombreReal || "---";
    document.getElementById("fechaNacimientoArtista").innerHTML = artistaSeleccionado.fNacimiento || "---";
    document.getElementById("biografiaArtista").innerHTML = artistaSeleccionado.biografia || "---";
    document.getElementById("artistaDetalle").style.backgroundImage = `url('${artistaSeleccionado.fotoLateral || artistaSeleccionado.foto}')`;
    document.getElementById("nacionalidadArtista").innerHTML=artistaSeleccionado.nacionalidad || "---";
}
