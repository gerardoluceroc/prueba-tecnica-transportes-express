export const URL_SERVER = "http://localhost:8000"
export const REQUEST_TRIP_ROUTE  = "/trip/save"


export const requestTrip = async (trip) => {
    try {
        const response = await fetch(`${URL_SERVER}${REQUEST_TRIP_ROUTE}`, {
            method: "POST",
            headers: {
            "Content-Type": "application/json",
            },
            body: JSON.stringify(trip),
        });

        if (response.ok) {
            alert("Viaje solicitado con éxito");

        } else {
            alert("Lo sentimos: solicitud fallida");

        }
        } catch (error) {
            alert("Lo sentimos: Error al solicitar viaje");
            console.error("Error:", error);

        }
    }