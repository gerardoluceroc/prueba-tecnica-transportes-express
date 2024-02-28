import React, { useEffect, useState } from 'react'

import '../styles/Form.css'
import { Input } from './Input'
import { SubmitButton } from './SubmitButton'

export const Form = () => {

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
  


  return (
    <form className='container'>
        <h2>Ingrese la información de su viaje</h2>
        <div className='littleInputs'>
            <Input type="text" placeholder="Origen" className='input' setValue = {(value) => setOrigenViaje(value)}/>
            <Input type="text" placeholder="Destino" className='input'setValue = {(value) => setDestinoViaje(value)}/>
        </div>
        <Input type="date" placeholder="Fecha" className='inputLarge' setValue = {(value) => setFechaViaje(value)}/>
        <Input type="time" placeholder="Hora de salida" className='inputLarge' setValue = {(value) => setHoraViaje(value)}/>
        <SubmitButton tripData = {datosViajeSolicitado}>Solicitar viaje</SubmitButton>

    </form>
  )
}
