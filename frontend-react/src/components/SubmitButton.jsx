import React, { useState } from 'react'
import "../styles/SubmitButton.css"

export const SubmitButton = ({tripData}) => {
    const [isLoading, setIsLoading] = useState(false);
  
  //Función que será ejecutada una vez se presiona el boton del formulario
  const requestTrip = () => {

    //Se muestra el valor de cargando al usuario
    setIsLoading(true);

    //Se guardan los datos del formulario en un objeto
    const datosViajeSolicitado = {...tripData}

    //BORRAR
    console.log("hola datos", datosViajeSolicitado);

  // Simular una llamada a la API
  setTimeout(() => {
    // Supongamos que aquí recibimos una respuesta del servidor
    setIsLoading(false);
  }, 2000); // Simulamos una demora de 2 segundos


}

  
    return (
      <button className='SubmitButton' onClick={requestTrip} disabled={isLoading}>
        {isLoading ? 'Solicitando...' : 'Solicitar viaje'}
      </button>
    );
  };
