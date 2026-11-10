// ---------- Menú hamburguesa ----------
const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector(".menu");

btnMenu.addEventListener("click", () => {
  menu.classList.toggle("abierto");
  btnMenu.classList.toggle("activo");    // anima las rayitas
});

// cerrar el menú al hacer clic en un enlace
document.querySelectorAll(".menu a").forEach(enlace => {
  enlace.addEventListener("click", () => {
    menu.classList.remove("abierto");
    btnMenu.classList.remove("activo");
  });
});


// ---------- Accordion ----------
const titulos = document.querySelectorAll(".accordion .titulo");

titulos.forEach(titulo => {
  titulo.addEventListener("click", () => {
    const item = titulo.parentElement;

    // cerrar los demás
    document.querySelectorAll(".accordion .item").forEach(otro => {
      if (otro !== item) otro.classList.remove("activo");
    });

    item.classList.toggle("activo");
  });
});


// ---------- Cards desde un arreglo ----------
const servicios = [
  {
    titulo: "Venta de consolas",
    descripcion: "Consolas nuevas, usadas y de edición clásica, probadas y con garantía.",
    img: "./img/servicio-1.jpg",
    alt: "Consola Super Nintendo Classic Edition con dos controles"
  },
  {
    titulo: "Juegos de Nintendo",
    descripcion: "Juegos de Nintendo nuevos y usados para jugar con toda la familia.",
    img: "./img/servicio-2.jpg",
    alt: "Portada del videojuego Super Mario Galaxy"
  },
  {
    titulo: "Accesorios gamer",
    descripcion: "Controles, audífonos, teclados y mouse para armar tu espacio de juego.",
    img: "./img/servicio-3.jpg",
    alt: "Control inalámbrico negro GameSir"
  },
  {
    titulo: "Juegos retro",
    descripcion: "Clásicos de los 90 para coleccionistas y para quienes extrañan jugar como antes.",
    img: "./img/servicio-4.jpg",
    alt: "Portada del videojuego Street Fighter II"
  },
  {
    titulo: "Juegos de PlayStation",
    descripcion: "Títulos de PlayStation nuevos y usados, con garantía de funcionamiento.",
    img: "./img/servicio-5.jpg",
    alt: "Portada del videojuego Metal Gear Solid 3 para PlayStation 2"
  },
  {
    titulo: "Canje de juegos",
    descripcion: "Trae tus juegos en buen estado y te damos crédito para usar en la tienda.",
    img: "./img/servicio-6.jpg",
    alt: "Portada del videojuego Bioshock"
  }
];

const contenedor = document.querySelector("#cards");

function pintarCards(lista) {
  contenedor.innerHTML = "";           // limpiar antes de dibujar
  lista.forEach(item => {
    const article = document.createElement("article");

    article.classList.add("tarjeta");
    article.innerHTML = `
      <img src="${item.img}" alt="${item.alt}">
      <h3>${item.titulo}</h3>
      <p>${item.descripcion}</p>
      <a href="contacto.php" class="boton">Consultar</a>
    `;
    contenedor.appendChild(article);
  });
}

if (contenedor) pintarCards(servicios);   // solo en las páginas que tienen #cards


// ---------- Validación del formulario ----------
const form = document.querySelector(".formulario");

if (form) {                          // solo en contacto
  form.addEventListener("submit", (e) => {
    const nombre = form.nombre.value.trim();
    const correo = form.correo.value.trim();
    const mensaje = form.mensaje.value.trim();
    let errores = [];

    if (nombre === "") errores.push("El nombre es obligatorio.");
    if (!correo.includes("@")) errores.push("El correo no es válido.");
    if (mensaje === "") errores.push("El mensaje es obligatorio.");

    if (errores.length > 0) {
      e.preventDefault();                       // detiene el envío
      document.querySelector("#mensajes").textContent = errores.join(" ");
    }
  });
}
