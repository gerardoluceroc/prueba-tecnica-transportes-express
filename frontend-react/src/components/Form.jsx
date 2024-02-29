import React, { useEffect, useState } from 'react'

import '../styles/Form.css'
import { Input } from './Input'
import { SubmitButton } from './SubmitButton'
import { requestTrip } from '../api/php_server_requests'

export const Form = () => {

  const [buttonText, setButtonText] = useState("Solicitar viaje");

  const [origenViaje, setOrigenViaje] = useState("");
  const [destinoViaje, setDestinoViaje] = useState("");
  const [fechaViaje, setFechaViaje] = useState("");
  const [horaViaje, setHoraViaje] = useState("");

  //Se guardan los datos del formulario en un objeto
  const datosViajeSolicitado = {
    "origen": origenViaje,
    "destino": destinoViaje,
    "fecha": fechaViaje,
    "hora": horaViaje,
  }

  

  //BORRAR
  useEffect(() => {
    console.log(datosViajeSolicitado);
  }, [origenViaje])
  
  const sendTripData = async (event) => {

    event.preventDefault();

    //Se muestra el valor de cargando al usuario
    setButtonText("Solicitando...");

    //Se envian los datos al servidor y se espera para cambiar el texto del botón
    await requestTrip(datosViajeSolicitado);

    setButtonText("Solicitar viaje");
  }


  return (
    <form className='container'>
        <h2>Ingrese la información de su viaje</h2>
        <div className='littleInputs'>
            <Input type="text" placeholder="Origen" className='input' setValue = {(value) => setOrigenViaje(value)}/>
            <Input type="text" placeholder="Destino" className='input'setValue = {(value) => setDestinoViaje(value)}/>
        </div>
        <Input type="date" placeholder="Fecha" className='inputLarge' setValue = {(value) => setFechaViaje(value)}/>
        <Input type="time" placeholder="Hora de salida" className='inputLarge' setValue = {(value) => setHoraViaje(value)}/>
        <button className= "submitButton" type="submit" onClick={(e) => sendTripData(e)}>
          {buttonText}
        </button>

    </form>
  )
}
