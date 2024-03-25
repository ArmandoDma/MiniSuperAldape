let pedidos = document.getElementById("btn-pedidos");
let icon = document.getElementById("btn-tggle");
let opt = document.getElementById("choose-opt");
let mapa = document.getElementById("Map");
let subDir = document.getElementById("subDir");
let items = document.getElementById("items");

pedidos.addEventListener("click", () => {
    pedidos.classList.toggle("active");
    if (pedidos.classList.contains("active")) {
        icon.classList.replace("bx-chevron-down", "bx-chevron-up");
        opt.classList.add("active");
    } else {
        icon.classList.replace("bx-chevron-up", "bx-chevron-down");
        opt.classList.remove("active");
    }
});

document.querySelectorAll('input[name="delivery_method"]').forEach((item) => {
    item.addEventListener("change", (event) => {
        if (event.target.value === "delivery") {
            document.getElementById("fr-ubi").style.display = "flex";
            mapa.style.display = "none";
            items.style.display = "block";
        } else {
            document.getElementById("fr-ubi").style.display = "none";
            mapa.style.display = "block";
            items.style.display = "none";
        }
    });
});

let ubi = document.getElementById("ubi-btn");
let loctxt = document.getElementById("locText");
let locinput = document.getElementById("locinput");
let map;

ubi.addEventListener("click", () => {
    navigator.geolocation.getCurrentPosition((position) => {
        let pos = position.coords;
        let url = `https://geocode.maps.co/reverse?lat=${pos.latitude}&lon=${pos.longitude}&api_key=65f960e916acf745888000lvnba0ca5`;
        let loc = new Microsoft.Maps.Location(
            position.coords.latitude,
            position.coords.longitude
        );

        let hosPin = new Microsoft.Maps.Pushpin(loc, {
            title: "Estás",
            subTitle: "Aquí",
            anchor: new Microsoft.Maps.Point(2, 2),
        });
        map.entities.push(hosPin);

        map.setView({ center: loc, zoom: 18 });

        fetch(url)
            .then((response) => {
                if (!response.ok) {
                    throw new Error("La solicitud no fue exitosa.");
                }

                return response.json();
            })
            .then((data) => {
                let infoDir = data.display_name;
                loctxt.innerHTML = infoDir;
                locinput.value = infoDir;
            })
            .catch((error) => {
                console.log(error);
            });
    });
});

function addDir() {
    // Obtener elementos existentes del localStorage
    let storedElements =
        JSON.parse(localStorage.getItem("storedElements")) || [];

    // Función para agregar un nuevo elemento
    function addNewElement(value) {
        let data = `
            <i class="bx bx-home-alt"></i>
            <div class="ct-txtBtn">
            <strong>Mini Super Aldape</strong>
            <p class="dirP" id="dirP">${value}</p>
            </div>
            <span class="btn btn-danger delBtn"><i class="bx bx-trash"></i></span>
            `;

        let btn = document.createElement("button");
        btn.classList.add("btnCreated");
        btn.setAttribute("type", "button");
        btn.innerHTML = data;
        items.appendChild(btn);

        // Event listener para eliminar el elemento
        btn.querySelector(".delBtn").addEventListener("click", () => {
            items.removeChild(btn);
            // Eliminar el elemento del array almacenado
            storedElements = storedElements.filter(
                (element) => element !== value
            );
            // Actualizar el array almacenado en el localStorage
            localStorage.setItem(
                "storedElements",
                JSON.stringify(storedElements)
            );
        });

        btn.addEventListener("dblclick", () => {
            let url = "reservar" + value;
            window.location.href = url;
        });

        // Agregar el nuevo elemento al array almacenado solo si no existe
        if (!storedElements.includes(value)) {
            storedElements.push(value);
            // Actualizar el array almacenado en el localStorage
            localStorage.setItem(
                "storedElements",
                JSON.stringify(storedElements)
            );
        }
    }

    // Event listener para el click en el botón de subDir
    subDir.addEventListener("click", (e) => {
        e.preventDefault();
        let value = locinput.value.trim(); // Obtener el valor del input sin espacios en blanco al inicio y al final
        if (value) {
            // Crear un nuevo elemento si el valor no está vacío
            addNewElement(value);
        }
    });

    // Recuperar y mostrar todos los elementos almacenados del localStorage
    storedElements.forEach((element) => {
        addNewElement(element);
    });
}

window.addEventListener("load", () => {
    GetMap();
    addDir();
});

let mapStyle = {
    version: "1.0",
    settings: {
        landColor: "#e7e6e5",
        shadedReliefVisible: false,
    },
    elements: {
        vegetation: {
            fillColor: "#c5dea2",
        },
        naturalPoint: {
            visible: false,
            labelVisible: false,
        },
        transportation: {
            labelOutlineColor: "#ffffff",
            fillColor: "#ffffff",
            strokeColor: "#d7d6d5",
        },
        water: {
            fillColor: "#b1bdd6",
            labelColor: "#ffffff",
            labelOutlineColor: "#9aa9ca",
        },
        structure: {
            fillColor: "#d7d6d5",
        },
        indigenousPeoplesReserve: {
            visible: false,
        },
        military: {
            visible: false,
        },
    },
};

function GetMap() {
    map = new Microsoft.Maps.Map("#Map", {
        credentials:
            "ArqG4VUXzrsxfVPNZDS7pu3DCTbBXf4NazO7xFtayC1EqP4PcnG4rn1XskILNby5",
        zoom: 15,
        center: new Microsoft.Maps.Location(
            25.801711306663737,
            -100.59923754648737
        ),
        showLocateMeButton: false,
        showMapTypeSelector: false,
        customMapStyle: mapStyle,
    });
}
